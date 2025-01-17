<html xmlns="http://www.w3.org/1999/xhtml"><head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="CACHE-CONTROL" content="max-age=0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8"> 
	
	<title>KNET Payment Page</title>
	
	<!-- commented for jquery vulnerability fix -->
	
	<!-- Added for jquery vulnerability fix -->
	



<script src="gui-v3/js/jquery-3.5.1.js"></script><script type="text/javascript" src="moz-extension://3a0f29af-0c27-4469-af11-9af97478f76e/libs/customElements.js" class="__REQUESTLY__SCRIPT"></script><script type="text/javascript" class="__REQUESTLY__SCRIPT">((namespace) => {
  const RuleSourceKey = {
    URL: "Url",
    HOST: "host",
    PATH: "path",
  };

  const RuleSourceOperator = {
    EQUALS: "Equals",
    CONTAINS: "Contains",
    MATCHES: "Matches",
    WILDCARD_MATCHES: "Wildcard_Matches",
  };

  const toRegex = (regexStr) => {
    const matchRegExp = regexStr.match(new RegExp("^/(.+)/(|i|g|ig|gi)$"));

    if (!matchRegExp) {
      return null;
    }

    try {
      return new RegExp(matchRegExp[1], matchRegExp[2]);
    } catch {
      return null;
    }
  };

  const checkRegexMatch = (regexString, inputString) => {
    if (!regexString.startsWith("/")) {
      regexString = `/${regexString}/`; // Keeping enclosing slashes for regex as optional
    }

    const regex = toRegex(regexString);
    return regex?.test(inputString);
  };

  const checkWildCardMatch = (wildCardString, inputString) => {
    const regexString = "/^" + wildCardString.replaceAll("*", ".*") + "$/";
    return checkRegexMatch(regexString, inputString);
  };

  const extractUrlComponent = (url, key) => {
    const urlObj = new URL(url);

    switch (key) {
      case RuleSourceKey.URL:
        return url;
      case RuleSourceKey.HOST:
        return urlObj.host;
      case RuleSourceKey.PATH:
        return urlObj.pathname;
    }
  };

  window[namespace] = window[namespace] || {};
  window[namespace].matchSourceUrl = (sourceObject, url) => {
    const urlComponent = extractUrlComponent(url, sourceObject.key);
    const value = sourceObject.value;

    if (!urlComponent) {
      return false;
    }

    switch (sourceObject.operator) {
      case RuleSourceOperator.EQUALS:
        if (value === urlComponent) {
          return true;
        }
        break;

      case RuleSourceOperator.CONTAINS:
        if (urlComponent.indexOf(value) !== -1) {
          return true;
        }
        break;

      case RuleSourceOperator.MATCHES: {
        return checkRegexMatch(value, urlComponent);
      }

      case RuleSourceOperator.WILDCARD_MATCHES: {
        return checkWildCardMatch(value, urlComponent);
      }
    }

    return false;
  };
})('__REQUESTLY__')</script><script type="text/javascript" class="__REQUESTLY__SCRIPT">(function ({
  namespace,
  customHeaderPrefix = "",
  ignoredHeadersOnRedirect = [],
}) {
  window[namespace] = window[namespace] || {};
  window[namespace].requestRules = [];
  window[namespace].responseRules = [];
  window[namespace].redirectRules = [];
  window[namespace].replaceRules = [];
  let isDebugMode = false;

  // Some frames are sandboxes and throw DOMException when accessing localStorage
  try {
    isDebugMode = window && window.localStorage && localStorage.isDebugMode;
  } catch (e) {}

  const isExtensionEnabled = () => {
    return window[namespace].isExtensionEnabled ?? true;
  };

  const getAbsoluteUrl = (url) => {
    const dummyLink = document.createElement("a");
    dummyLink.href = url;
    return dummyLink.href;
  };

  const isNonJsonObject = (obj) => {
    return [
      Blob,
      ArrayBuffer,
      Object.getPrototypeOf(Uint8Array), // TypedArray instance type
      DataView,
      FormData,
      URLSearchParams,
    ].some((nonJsonType) => obj instanceof nonJsonType);
  };

  /**
   * @param {Object} json
   * @param {String} path -> "a", "a.b", "a.0.b (If a is an array containing list of objects"
   * Also copied in shared/utils.js for the sake of testing
   */
  const traverseJsonByPath = (jsonObject, path) => {
    if (!path) return;

    const pathParts = path.split(".");

    try {
      // Reach the last node but not the leaf node.
      for (i = 0; i < pathParts.length - 1; i++) {
        jsonObject = jsonObject[pathParts[i]];
      }

      return jsonObject[pathParts[pathParts.length - 1]];
    } catch (e) {
      /* Do nothing */
    }
  };

  const matchesSourceFilters = ({ requestData, method }, sourceFilters) => {
    const sourceFiltersArray = Array.isArray(sourceFilters) ? sourceFilters : [sourceFilters];

    return (
      !sourceFiltersArray.length ||
      sourceFiltersArray.some((sourceFilter) => {
        if (sourceFilter?.requestMethod?.length && !sourceFilter.requestMethod.includes(method)) {
          return false;
        }

        let requestPayloadFilter = sourceFilter?.requestPayload;

        if (!requestPayloadFilter) return true;
        if (typeof requestPayloadFilter === "object" && Object.keys(requestPayloadFilter).length === 0) return true;

        // We only allow request payload targeting when requestData is JSON
        if (!requestData || typeof requestData !== "object") return false;
        if (Object.keys(requestData).length === 0) return false;

        requestPayloadFilter = requestPayloadFilter || {};
        const targetedKey = requestPayloadFilter?.key;
        const targetedValue = requestPayloadFilter?.value;

        // tagetedKey is the json path e.g. a.b.0.c
        if (targetedKey && typeof targetedValue !== undefined) {
          const valueInRequestData = traverseJsonByPath(requestData, targetedKey);
          const operator = requestPayloadFilter?.operator;

          if (!operator || operator === "Equals") {
            return valueInRequestData === targetedValue;
          }

          if (operator === "Contains") {
            return valueInRequestData.includes(targetedValue);
          }
        }

        return false;
      })
    );
  };

  const matchRuleSource = ({ url, requestData, method }, rule) => {
    const modification = rule.pairs[0];
    const ruleSource = modification.source;

    return (
      window[namespace].matchSourceUrl(ruleSource, url) &&
      matchesSourceFilters({ requestData, method }, ruleSource?.filters)
    );
  };

  const getRequestRule = (url) => {
    if (!isExtensionEnabled()) {
      return null;
    }

    return window[namespace].requestRules?.findLast((rule) =>
      window[namespace].matchSourceUrl(rule.pairs[0].source, url)
    );
  };

  const getResponseRule = ({ url, requestData, method }) => {
    if (!isExtensionEnabled()) {
      return null;
    }

    return window[namespace].responseRules?.findLast((rule) => {
      return matchRuleSource({ url, requestData, method }, rule);
    });
  };

  const getMatchingRedirectRule = (url) => {
    if (!isExtensionEnabled()) {
      return null;
    }

    return window[namespace].redirectRules?.findLast((rule) =>
      rule.pairs.some((pair) => window[namespace].matchSourceUrl(pair.source, url))
    );
  };

  const getMatchingReplaceRule = (url) => {
    if (!isExtensionEnabled()) {
      return null;
    }

    return window[namespace].replaceRules?.findLast((rule) =>
      rule.pairs.some((pair) => window[namespace].matchSourceUrl(pair.source, url))
    );
  };

  const shouldServeResponseWithoutRequest = (responseRule) => {
    const responseModification = responseRule.pairs[0].response;
    return responseModification.type === "static" && responseModification.serveWithoutRequest;
  };

  const getFunctionFromCode = (code) => {
    return new Function("args", `return (${code})(args);`);
  };

  const getCustomRequestBody = (requestRule, args) => {
    const modification = requestRule.pairs[0].request;
    if (modification.type === "static") {
      requestBody = modification.value;
    } else {
      requestBody = getFunctionFromCode(modification.value)(args);
    }

    if (typeof requestBody !== "object" || isNonJsonObject(requestBody)) {
      return requestBody;
    }

    return JSON.stringify(requestBody);
  };

  /**
   * @param mightBeJSONString string which might be JSON String or normal String
   * @param doStrictCheck should return empty JSON if invalid JSON string
   */
  const jsonifyValidJSONString = (mightBeJSONString, doStrictCheck) => {
    const defaultValue = doStrictCheck ? {} : mightBeJSONString;

    if (typeof mightBeJSONString !== "string") {
      return defaultValue;
    }

    try {
      return JSON.parse(mightBeJSONString);
    } catch (e) {
      /* Do Nothing. Unable to parse the param value */
    }

    return defaultValue;
  };

  const isJSON = (data) => {
    const parsedJson = jsonifyValidJSONString(data);
    return parsedJson !== data; // if data is not a JSON, jsonifyValidJSONString() returns same value
  };

  const notifyRequestRuleApplied = (message) => {
    window.postMessage(
      {
        from: "requestly",
        type: "request_rule_applied",
        id: message.ruleDetails.id,
        requestDetails: message["requestDetails"],
      },
      window.location.href
    );
  };

  const notifyResponseRuleApplied = (message) => {
    window.postMessage(
      {
        from: "requestly",
        type: "response_rule_applied",
        id: message.rule.id,
        requestDetails: message["requestDetails"],
      },
      window.location.href
    );
  };

  const isPromise = (obj) =>
    !!obj && (typeof obj === "object" || typeof obj === "function") && typeof obj.then === "function";

  const isContentTypeJSON = (contentType) => !!contentType?.includes("application/json");

  // Intercept XMLHttpRequest
  const onReadyStateChange = async function () {
    if (this.readyState === this.HEADERS_RECEIVED || this.readyState === this.DONE) {
      if (!this.responseRule) {
        return;
      }

      const responseModification = this.responseRule.pairs[0].response;
      const responseType = this.responseType;
      const contentType = this.getResponseHeader("content-type");

      isDebugMode &&
        console.log("RQ", "Inside the XHR onReadyStateChange block for url", {
          url: this.requestURL,
          xhr: this,
        });

      if (this.readyState === this.HEADERS_RECEIVED) {
        // For network failures, responseStatus=0 but we still return customResponse with status=200
        const responseStatus = parseInt(responseModification.statusCode || this.status) || 200;
        const responseStatusText = responseModification.statusText || this.statusText;

        Object.defineProperty(this, "status", {
          get: () => responseStatus,
        });

        Object.defineProperty(this, "statusText", {
          get: () => responseStatusText,
        });
      }

      if (this.readyState === this.DONE) {
        let customResponse =
          responseModification.type === "code"
            ? getFunctionFromCode(responseModification.value)({
                method: this.method,
                url: this.requestURL,
                requestHeaders: this.requestHeaders,
                requestData: jsonifyValidJSONString(this.requestData),
                responseType: contentType,
                response: this.response,
                responseJSON: jsonifyValidJSONString(this.response, true),
              })
            : responseModification.value;

        // Convert customResponse back to rawText
        // response.value is String and evaluator method might return string/object
        if (isPromise(customResponse)) {
          customResponse = await customResponse;
        }

        const isUnsupportedResponseType = responseType && !["json", "text"].includes(responseType);

        // We do not support statically modifying responses of type - blob, arraybuffer, document etc.
        if (responseModification.type === "static" && isUnsupportedResponseType) {
          customResponse = this.response;
        }

        if (
          !isUnsupportedResponseType &&
          typeof customResponse === "object" &&
          !(customResponse instanceof Blob) &&
          (responseType === "json" || isContentTypeJSON(contentType))
        ) {
          customResponse = JSON.stringify(customResponse);
        }

        Object.defineProperty(this, "response", {
          get: function () {
            if (responseModification.type === "static" && responseType === "json") {
              if (typeof customResponse === "object") {
                return customResponse;
              }

              return jsonifyValidJSONString(customResponse);
            }

            return customResponse;
          },
        });

        if (responseType === "" || responseType === "text") {
          Object.defineProperty(this, "responseText", {
            get: function () {
              return customResponse;
            },
          });
        }

        const requestDetails = {
          url: this.requestURL,
          method: this.method,
          type: "xmlhttprequest",
          timeStamp: Date.now(),
        };

        notifyResponseRuleApplied({
          rule: this.responseRule,
          requestDetails,
        });
      }
    }
  };

  const resolveXHR = (xhr, responseData) => {
    Object.defineProperty(xhr, "readyState", { writable: true });
    const updateReadyState = (readyState) => {
      xhr.readyState = readyState;
      xhr.dispatchEvent(new CustomEvent("readystatechange"));
    };
    const dispatchProgressEvent = (type) => {
      xhr.dispatchEvent(new ProgressEvent(type));
    };

    dispatchProgressEvent("loadstart");

    // update response headers
    const contentType = isJSON(responseData) ? "application/json" : "text/plain";
    xhr.getResponseHeader = (key) => {
      if (key.toLowerCase() === "content-type") {
        return contentType;
      }
      return null;
    };
    updateReadyState(xhr.HEADERS_RECEIVED);

    // mark resolved
    updateReadyState(xhr.DONE);
    dispatchProgressEvent("load");
    dispatchProgressEvent("loadend");
  };

  const XHR = XMLHttpRequest;
  XMLHttpRequest = function () {
    const xhr = new XHR();
    xhr.addEventListener("readystatechange", onReadyStateChange.bind(xhr), false);
    return xhr;
  };
  XMLHttpRequest.prototype = XHR.prototype;
  Object.entries(XHR).map(([key, val]) => {
    XMLHttpRequest[key] = val;
  });

  const open = XMLHttpRequest.prototype.open;
  XMLHttpRequest.prototype.open = function (method, url) {
    this.method = method;
    this.requestURL = getAbsoluteUrl(url);
    open.apply(this, arguments);
  };

  const send = XMLHttpRequest.prototype.send;
  XMLHttpRequest.prototype.send = function (data) {
    this.requestData = data;

    const requestRule = getRequestRule(this.requestURL);
    if (requestRule) {
      this.requestData = getCustomRequestBody(requestRule, {
        method: this.method,
        url: this.requestURL,
        body: data,
        bodyAsJson: jsonifyValidJSONString(data, true),
      });

      notifyRequestRuleApplied({
        ruleDetails: requestRule,
        requestDetails: {
          url: this.requestURL,
          method: this.method,
          type: "xmlhttprequest",
          timeStamp: Date.now(),
        },
      });
    }

    this.responseRule = getResponseRule({
      url: this.requestURL,
      requestData: jsonifyValidJSONString(this.requestData),
      method: this.method,
    });

    if (this.responseRule && shouldServeResponseWithoutRequest(this.responseRule)) {
      resolveXHR(this, this.responseRule.pairs[0].response.value);
    } else {
      send.call(this, this.requestData);
    }
  };

  let setRequestHeader = XMLHttpRequest.prototype.setRequestHeader;
  XMLHttpRequest.prototype.setRequestHeader = function (header, value) {
    this.requestHeaders = this.requestHeaders || {};
    this.requestHeaders[header] = value;
    setRequestHeader.apply(this, arguments);
  };

  // Intercept fetch API
  const _fetch = fetch;
  fetch = async (...args) => {
    const [resource, initOptions = {}] = args;
    const getOriginalResponse = () => _fetch(...args);

    let request;

    if (resource instanceof Request) {
      request = resource.clone();
    } else {
      request = new Request(resource.toString(), initOptions);
    }

    let hasModifiedHeaders = false;

    const url = getAbsoluteUrl(request.url);
    const method = request.method;

    const redirectRuleThatMatchesURL = getMatchingRedirectRule(url);
    const replaceRuleThatMatchesURL = getMatchingReplaceRule(url);

    // redirect/replace rule specific code that is applied only when redirect/replace rule matches the URL
    if (redirectRuleThatMatchesURL || replaceRuleThatMatchesURL) {
      // Stores Auth header to be set on redirected URL. Refer: https://github.com/requestly/requestly/issues/1208
      ignoredHeadersOnRedirect.forEach((header) => {
        const originalHeaderValue = request.headers.get(header);
        if (isExtensionEnabled() && originalHeaderValue) {
          hasModifiedHeaders = true;
          request.headers.set(customHeaderPrefix + header, originalHeaderValue);
        }
      });
    }

    // Request body can be sent only for request methods other than GET and HEAD.
    const canRequestBodyBeSent = !["GET", "HEAD"].includes(method);

    const requestRule = canRequestBodyBeSent && getRequestRule(url);
    if (requestRule) {
      const originalRequestBody = await request.text();
      const requestBody =
        getCustomRequestBody(requestRule, {
          method: request.method,
          url,
          body: originalRequestBody,
          bodyAsJson: jsonifyValidJSONString(originalRequestBody, true),
        }) || {};

      request = new Request(request.url, {
        method,
        body: requestBody,
        headers: request.headers,
        referrer: request.referrer,
        referrerPolicy: request.referrerPolicy,
        mode: request.mode,
        credentials: request.credentials,
        cache: request.cache,
        redirect: request.redirect,
        integrity: request.integrity,
      });

      notifyRequestRuleApplied({
        ruleDetails: requestRule,
        requestDetails: {
          url,
          method: request.method,
          type: "fetch",
          timeStamp: Date.now(),
        },
      });
    }

    let requestData;
    if (canRequestBodyBeSent) {
      requestData = jsonifyValidJSONString(await request.clone().text()); // cloning because the request will be used to make API call
    }

    const responseRule = getResponseRule({ url, requestData, method });
    let responseHeaders;
    let fetchedResponse;

    if (responseRule && shouldServeResponseWithoutRequest(responseRule)) {
      const contentType = isJSON(responseRule.pairs[0].response.value) ? "application/json" : "text/plain";
      responseHeaders = new Headers({ "content-type": contentType });
    } else {
      try {
        if (requestRule || hasModifiedHeaders) {
          // use modified request to fetch response
          fetchedResponse = await _fetch(request);
        } else {
          fetchedResponse = await getOriginalResponse();
        }

        if (!responseRule) {
          return fetchedResponse;
        }

        responseHeaders = fetchedResponse?.headers;
      } catch (error) {
        if (!responseRule) {
          return Promise.reject(error);
        }
      }
    }

    isDebugMode &&
      console.log("RQ", "Inside the fetch block for url", {
        url,
        resource,
        initOptions,
        fetchedResponse,
      });

    let customResponse;
    const responseModification = responseRule.pairs[0].response;

    if (responseModification.type === "code") {
      const requestHeaders =
        request.headers &&
        Array.from(request.headers).reduce((obj, [key, val]) => {
          obj[key] = val;
          return obj;
        }, {});

      let evaluatorArgs = {
        method,
        url,
        requestHeaders,
        requestData,
      };

      if (fetchedResponse) {
        const fetchedResponseData = await fetchedResponse.text();
        const responseType = fetchedResponse.headers.get("content-type");
        const fetchedResponseDataAsJson = jsonifyValidJSONString(fetchedResponseData, true);

        evaluatorArgs = {
          ...evaluatorArgs,
          responseType,
          response: fetchedResponseData,
          responseJSON: fetchedResponseDataAsJson,
        };
      }

      customResponse = getFunctionFromCode(responseModification.value)(evaluatorArgs);

      // evaluator might return us Object but response.value is string
      // So make the response consistent by converting to JSON String and then create the Response object
      if (isPromise(customResponse)) {
        customResponse = await customResponse;
      }

      if (typeof customResponse === "object" && isContentTypeJSON(evaluatorArgs?.responseType)) {
        customResponse = JSON.stringify(customResponse);
      }
    } else {
      customResponse = responseModification.value;
    }

    const requestDetails = {
      url,
      method,
      type: "fetch",
      timeStamp: Date.now(),
    };

    notifyResponseRuleApplied({
      rule: responseRule,
      requestDetails,
    });

    // For network failures, fetchedResponse is undefined but we still return customResponse with status=200
    const finalStatusCode = parseInt(responseModification.statusCode || fetchedResponse?.status) || 200;
    const requiresNullResponseBody = [204, 205, 304].includes(finalStatusCode);

    return new Response(requiresNullResponseBody ? null : new Blob([customResponse]), {
      status: finalStatusCode,
      statusText: responseModification.statusText || fetchedResponse?.statusText,
      headers: responseHeaders,
    });
  };
})({"namespace":"__REQUESTLY__","customHeaderPrefix":"x-rq-","ignoredHeadersOnRedirect":["Authorization"]})</script>
</head>
<body>
	
		<link href="css/payment-reset.css?ver=1.40" rel="stylesheet" type="text/css">
	    <link href="css/payment-layout.css?ver=1.40" rel="stylesheet" type="text/css">
	    <link href="css/payment-responsive.css?ver=1.40" rel="stylesheet" type="text/css">
	    
	    <script type="text/javascript" src="js/checkSum.js"></script>
	    
	 <script language="JavaScript" src="js/AuthValidation.js"></script>
	 
	 <script type="text/javascript">
    
	//Added for OTP at I-T-B level
	 var termBrandlvlAmt;
	
	/*code added for redirect-starts*/
	function callTimeOutForbackBotton() {
		window.location.hash = window.location.hash[window.location.hash.length-1];
		setTimeout('callTimeOutForbackBotton()', 10);
	}
	/*code added for redirect-ends*/
	
	var keys;
	//Added for brand changes
	var brdtype;
	/*Added for OTP at I-T-B level*/
	var amountlimit;
	var OTPamtlmtIdentifier;
	//Added for QA fix
	var otpTimer;
	var timer;
	var timer2;
	var configbrdtype='Eidia';
	var configexpdate='12';
	var configexpyear='2022';
	
	//Added for PG Eidia Discount
	 var instPgEiddiscntflg = '1';
	 var termPgEiddiscntflg = '0';
	 var pymtPgEiddiscntflg = '0';
	
	 // Modified for 8 digit bin mandate changes
	 var cardLength;  
	 
	jQuery(document).ready(function() {
		$("#payConfirm").hide();
		$("#ValidationMessage").hide();
		$("#savedCardDiv").hide();
		$("#paying").hide();
		$("#CVmsg").hide(); 
		
	    //Added to restrict browser back option -- starts
	     setTimeout('callTimeOutForbackBotton()', 10);
	    if(window.history.forward(1) != null)
	    {
	             window.history.forward(1);
	    }
	    function noBack() {
	    	if(window.history.forward(1) != null)
	    	{
	    	         window.history.forward(1);
	    	}
	    	window.location.hash = window.location.hash[window.location.hash.length-1];
	    	
	    }

	    function callTimeOutForbackBotton() {
	    	window.location.hash = window.location.hash[window.location.hash.length-1];
	    	setTimeout('callTimeOutForbackBotton()', 10);
	    } 

	    //Added for Points Redemption
	    $('#OTPDCDIV').on('keypress keyup blur', '#debitOTPtimer', function(e) {
	    	  var regex = new RegExp("^[a-zA-Z0-9 ]+$");
	    	    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
	    	    if (regex.test(str)) {
	    	        return true;
	    	    }
	    	    e.preventDefault();
		});
	  //Added for Points Redemption

	    if (window.performance) {
	    	  console.info("window.performance works fine on this browser");
	    	}
	    	  if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
	    		  
	    	    console.info( "This page is reloaded" );
	    	  } else {
	    	    console.info( "This page is not reloaded");
	    	  }
			//Ends

	    	  
		if(false){
			
			document.paypage.fcExpCheck.value = "fcExpDate";
			$('#checkFC').hide(); 
			 $('#FCUseDebitEnable').hide(); 
			 document.getElementById('paymentOptionFC').checked=true;
			 document.getElementById('savedCardDiv').style.display="block";
				document.paypage.creditDebitCheck.value="SVC";
				if(false)
				 {
					$('#siflg').show();
			 }
		}else {
			if(false){
			 document.getElementById('fasterCheckDiv1').setAttribute('class','doGray');
			 document.getElementById('paymentOptionFC').disabled=true;
			 document.getElementById('paymentOptionDC').checked=true;
			 }
			
		}
		
		 if(false){
			document.getElementById('paymentOptionFC').checked=true;
			document.getElementById('savedCardDiv').style.display="block";
			document.paypage.creditDebitCheck.value="SVC";
			if(false)
			 {
				$('#siflg').show();
		 }
		}
		 
		 
		$("input").keypress(function(event) {
		    if (event.which == 13) {
		        event.preventDefault();
		        if(document.getElementById('payConfirm').style.display== 'block' && document.getElementById('proceedConfirm').disabled==false){
		        $("#proceedConfirm").click();
		        }
		        else if(document.getElementById('payConfirm').style.display== 'none' && document.getElementById('proceed').disabled==false ){
		        	 $("#proceed").click();
		        }
		    }
		});
		
		
	$('#fCFlg').change(function() {
       if($(this).is(":checked")) {
       	$("#fCFlg").val("on");
           $('#fcDetails').show();
       }
       else
       	{
       	$("#fCFlg").val("off");
       		$('#fcDetails').hide();
       	}
	});
	
	$('#SIflg').change(function() {
	       if($(this).is(":checked")) {
	       	$("#SIflg").val("on");
	       }
	       else
	       	{
	       	$("#SIflg").val("off");
	       	}
		});
	
	$('#debitOTPtimer').on('paste', function (event) {
	    if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
	        event.preventDefault();
	    }
	});
		
	//Added for Points Redemption
	if(false){
		document.getElementById('PinField').style.display = 'none';
	}
	//Added for Points Redemption
	});

function selectPayInstr(val){
	
		
		document.paypage.creditDebitCheck.value = val;
		document.paypage.selectedPymntInstrmnt.value = val;
		document.paypage.otherCards.value = val;

		if(true)
		{
		document.getElementById('creditCaptchaMsg').style.display = 'none';
		if(false)
			document.getElementById('creditRadioCaptchaMsg').style.display = 'none';
		}
		if(true)
		{
		document.getElementById('debitCaptchaMsg').style.display = 'none';
		if(false)
			document.getElementById('debitRadioCaptchaMsg').style.display = 'none';
		}
		if(false)
		{
		document.getElementById('ddCaptchaMsg').style.display = 'none';
		}
		if(false)
		{
		document.getElementById('impsCaptchaMsg').style.display = 'none';
		}
		if(false)
		{
		document.getElementById('prepaidCaptchaMsg').style.display = 'none';
		if(false)
			document.getElementById('prepaidRadioCaptchaMsg').style.display = 'none';
		}
		if(false && false)
		{
		document.getElementById('pzCaptchaMsg').style.display = 'none';
		}
		
		//Added for One Click Checkout
		if(val=='SVC')
		{
				document.getElementById('savedRadioCaptchaMsg').style.display = 'none';
				document.paypage.fcExpCheck.value = "fcExpDate";
				$("#checkFC").hide();
		}
		else
		{
				document.paypage.fcExpCheck.value = "";
		}
		//Added for One Click Checkout
		
	}

		
	
	function loadshow(){
		  	document.getElementById('loading1').style.height='30px';
		  	$('#paypage :input').prop('disabled','disabled');
		}
	
	function loadhide(){
		$('#paypage :input').prop('disabled','');
		if(false){
			$('#loading1').css('height',"0px");
		}
		else{
			if(false){
			$('#loading1').css('height',"0px");
			document.getElementById('paymentOptionFC').disabled=true;
			}
			else{
				$('#loading1').css('height',"0px");	
			}
		}
		}
	
	function loadshow1(){
	  	document.getElementById('loading2').style.height='30px';
	  	document.getElementById('debitOTPtimer').disabled=true;
	  	
	}

function loadhide1(){
	
	$('#loading2').css('height',"0px");
	document.getElementById('debitOTPtimer').disabled=false;
	}



	function fetchimageName(Bankdesc)
	{
		var fname=Bankdesc.split("[");
		var lname=fname[1].split("]");
		return lname[0];
	}
	
	function mask(cardNo, maskChar, maskFormat) {
		var maskedString = "";
		var stringLength = cardNo.length;
		if (maskFormat == 1) {
			return cardNo;
		} else if (maskFormat == 2) {
			for (var i = 0; i < stringLength - 4; i++)
				maskedString = maskedString + maskChar;
			return maskedString + cardNo.substr(stringLength - 4, stringLength);
		} else {
			for (var i = 6; i < stringLength - 4; i++)
				maskedString = maskedString + maskChar;
			return cardNo.substr(0, 6) + maskedString + cardNo.substr(stringLength - 4, stringLength);
		}
	}
	
	function validateprefixid(val){
		var index  = document.getElementById("dcprefix").selectedIndex;
		var binLength = document.getElementById("dcprefix").options[index].text.length;
		// Modified for 8 digit bin mandate changes- starts
		var cardL = cardLength[index];
		
		if(cardL!=null && cardL!="" && cardL==19 )
		{
			if(binLength == 9){
				document.getElementById("debitNumber").maxLength = "10";
				document.getElementById("debitNumber").size = "10";
				document.getElementById("debitNumber").title = "Should be in number. Length should be 10";
			}else if(binLength == 8){
				document.getElementById("debitNumber").maxLength = "11";
				document.getElementById("debitNumber").size = "11";
				document.getElementById("debitNumber").title = "Should be in number. Length should be 11";
			}else if(binLength == 7){
				document.getElementById("debitNumber").maxLength = "12";
				document.getElementById("debitNumber").size = "12";
				document.getElementById("debitNumber").title = "Should be in number. Length should be 12";
			}else if(binLength == 6){
				document.getElementById("debitNumber").maxLength = "13";
				document.getElementById("debitNumber").size = "13";
				document.getElementById("debitNumber").title = "Should be in number. Length should be 13";
			}
		}
		else
		{
			if(binLength == 9){
				document.getElementById("debitNumber").maxLength = "7";
				document.getElementById("debitNumber").size = "7";
				document.getElementById("debitNumber").title = "Should be in number. Length should be 7";
			}else if(binLength == 8){
				document.getElementById("debitNumber").maxLength = "8";
				document.getElementById("debitNumber").size = "8";
				document.getElementById("debitNumber").title = "Should be in number. Length should be 8";
			}else if(binLength == 7){
				document.getElementById("debitNumber").maxLength = "9";
				document.getElementById("debitNumber").size = "9";
				document.getElementById("debitNumber").title = "Should be in number. Length should be 9";
			}else if(binLength == 6){
				document.getElementById("debitNumber").maxLength = "10";
				document.getElementById("debitNumber").size = "10";
				document.getElementById("debitNumber").title = "Should be in number. Length should be 10";
			}	
		}
		// Modified for 8 digit bin mandate changes- ends
	}
	function validatebank(id){
		
		if(id=="bankname")
			{
			document.paypage.debitNumber.value="";
			document.getElementById('cardPin').value="";
			document.getElementById('dcprefix').innerHTML='<select  class="paymentselect"><option>Prefix</option></select>';
			if(document.getElementById('ValidationMessage').style.display == 'inline' || document.getElementById('ValidationMessage').style.display == 'block'){
				$("#ValidationMessage").hide();
				document.getElementById('debitNumber').style.borderColor='';
				document.getElementById('cardPin').style.borderColor='';
			}
			//Added for PG Eidia Discount
            document.getElementById('OrgTranxAmt').innerHTML = '<div class="col"><span class="paymentlabel">Amount:</span></div><div class="col"><span class="paymentdata">KD&nbsp;25.000</span></div>';
     		document.getElementById('DiscntRate').innerHTML='';
     		document.getElementById('DiscntedAmt').innerHTML='';
     		$("#DiscntRate").hide();
     		$("#DiscntedAmt").hide();
			}
		else{
		var val=id;
		var arr=val.split("|");
		var brandid=arr[0];
		var desc=arr[1];
		//Added for OTP at I-T-B level
		termBrandlvlAmt=arr[2];
		termBrandlvlAmt = parseFloat(termBrandlvlAmt);
		//Added for OTP at I-T-B level
		//Added for PG Eidia Discount
		if(instPgEiddiscntflg == '1' && termPgEiddiscntflg == '1' && pymtPgEiddiscntflg == '1'){
			
			document.paypage.discountval.value = arr[3];
			//document.paypage.discountedtranamount.value = parseFloat(arr[4]);
			document.paypage.discountedtranamount.value = (arr[4]);
			if(document.paypage.discountval.value != "0.00"){
			document.getElementById('OrgTranxAmt').innerHTML = '<div class="col"><span class="paymentlabel">Amount:</span></div><div class="col"><span class="paymentdata" style="font-style: italic;"><s>KD&nbsp;25.000</s></span></div>';
			document.getElementById('DiscntRate').innerHTML='<div class="col"><span class="paymentlabel" style="color: #228B22;">Discount Rate:</span></div><div class="col"><span class="paymentdata" style="color: #228B22;">'+document.paypage.discountval.value+'&nbsp;<span>%</span></span></div>';
			document.getElementById('DiscntedAmt').innerHTML='<div class="col"><span class="paymentlabel">You are paying:</span></div><div class="col"><span class="paymentdata">KD&nbsp;'+document.paypage.discountedtranamount.value+'</span></div>';
			$("#DiscntRate").show();
			$("#DiscntedAmt").show();
			}else{
				document.getElementById('OrgTranxAmt').innerHTML = '<div class="col"><span class="paymentlabel">Amount:</span></div><div class="col"><span class="paymentdata">KD&nbsp;25.000</span></div>';
	     		document.getElementById('DiscntRate').innerHTML='';
	     		document.getElementById('DiscntedAmt').innerHTML='';
	     		$("#DiscntRate").hide();
	     		$("#DiscntedAmt").hide();
			}
		}
		//Added for PG Eidia Discount
		
		var bankname=desc.split("[");
		var tenant=fetchimageName(desc);
		var payid =document.paypage.paymentId.value;
		document.paypage.config.value="getBrandDetails";
		var url = "Brand/?config=getBrandDetails";
		loadshow();
		$.ajax({
			type: 'post',
			url: url,
					data : {brandId:brandid, paymentId:payid
					},
					datatype : 'json',
					success : function(ajaxResponseData) {
						brdtype = ajaxResponseData[0];
						
						<!-- Added for EIDIA changes starts -->
						if(brdtype != configbrdtype){
							<!-- Modified for 8 digit bin mandate changes- starts  -->
						 document.getElementById('Paymentpagecardnumber').innerHTML='<div class="col"><label class="paymentlabel"  >Card Number:</label></div>  <div class="col" style="width:59%;">  <label><select class="paymentselect" name="dcprefix" id="dcprefix"><option value="bankcode" title="Prefix"> Prefix</option></select></label>  <label>  <input name="debitNumber" id="debitNumber" type="text" size="10" class="paymentinput" maxlength="10" onclick="javascript:validateprefixid(this.value)" onkeyup="return ValidateNumPin(event);" onkeypress="return ValidateNumPin(event);" ondrop="return false;" oncopy="return false;" onpaste="return false;" title="Should be in number. Length should be 10" /></label></div> ';
						 <!-- Modified for 8 digit bin mandate changes- ends  -->
						 if(document.getElementById('cardExpdate').style.display =="none"){
							 document.getElementById('cardExpdate').style.display = "block";
							 document.paypage.debitMonth.value=0; 
							document.paypage.debitYear.value=0;
						 }
						 if(document.getElementById('ValidationMessage').style.display == 'inline' || document.getElementById('ValidationMessage').style.display == 'block'){
								$("#ValidationMessage").hide();
								document.getElementById('cardPin').style.borderColor='';
							}
						}else{
						document.getElementById('Paymentpagecardnumber').innerHTML='<div class="col"><label class="paymentlabel"  >Mobile Number: </label>  </div>  <div class="col" style="width:59%;">  <label style="display:none;"><select class="paymentselect" name="dcprefix" id="dcprefix" style="width: 79px;" ><option value="bankcode" title="Prefix">Prefix</option></select></label>  <label>  <input name="debitNumber" id="debitNumber" type="text" size="8" class="paymentinput" maxlength="8" style="width: 207px;" onclick="javascript:validateprefixid(this.value)" onkeyup="return ValidateNumPin(event);" onkeypress="return ValidateNumPin(event);" ondrop="return false;" oncopy="return false;" onpaste="return false;" title="Should be in number. Length should be 10" /></label></div> ';
						if(document.getElementById('ValidationMessage').style.display == 'inline' || document.getElementById('ValidationMessage').style.display == 'block'){
							$("#ValidationMessage").hide();
							document.getElementById('cardPin').style.borderColor='';
						}
						document.getElementById('cardExpdate').style.display="none";
						document.paypage.debitMonth.value=configexpdate; 
						document.paypage.debitYear.value=configexpyear;
						document.paypage.debitMonthSelect.value=configexpdate;
				  		document.paypage.debitYearSelect.value=configexpyear;
						} 
						<!-- Added for EIDIA changes Ends -->
						
						loadhide();
						var counter =0;
						var prefix = document.getElementById('dcprefix');
						$('#dcprefix').empty();
						var key;
						// Modified for 8 digit bin mandate changes- starts
						cardLength = new Array()
						for (key=1; key < ajaxResponseData.length ; key++) {
							var prefixCardlength = ajaxResponseData[key].split("-");
							prefix[counter] = new Option(prefixCardlength[0], prefixCardlength[0]);
							prefix[counter].title = prefixCardlength[0];
							
							cardLength[counter] = prefixCardlength[1];
							counter++;
						}
						// Modified for 8 digit bin mandate changes- ends
						}	
					});
		
		document.getElementById('cardPin').value="";
		$("#paying").show();
		document.paypage.Otptenant.value=tenant;
		}
	}
	
	//for knet ends
	
	function setdebitMonth(val){
		document.paypage.debitMonth.value=val;
	}
	function setdebitYear(val){
		document.paypage.debitYear.value=val;
	}
	
	function OndeleteDetails(cardNumHashTx){
		
		if (document.getElementById("debitsavedcardPIN")) {
		   	document.getElementById("debitsavedcardPIN").value="";
		}
		
		var paymentId ="41641300015758904165751000314890";
		var payid=document.paypage.paymentId.value;
		document.paypage.cardnohash.value=cardNumHashTx;
		document.paypage.deletecard.value=1;
		document.paypage.action="paymentpageqcdereg.htm?PaymentID="+payid;
		document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase());
		document.paypage.submit();
		
	}
	
	//Added for PG Eidia Discount
	function forEidDiscntfn(Discntval,tranamtDiscntVal){
		Discntval = Discntval.toFixed(2);
		tranamtDiscntVal = tranamtDiscntVal.toFixed(3);
		document.paypage.discountval.value = Discntval;
		document.paypage.discountedtranamount.value = tranamtDiscntVal;
		if(Discntval != "0.00"){
		document.getElementById('OrgTranxAmt').innerHTML = '<div class="col"><span class="paymentlabel">Amount:</span></div><div class="col"><span class="paymentdata" style="font-style: italic;"><s>KD&nbsp;25.000</s></span></div>';
		document.getElementById('DiscntRate').innerHTML='<div class="col"><span class="paymentlabel" style="color: #228B22;">Discount Rate:</span></div><div class="col"><span class="paymentdata" style="color: #228B22;">'+document.paypage.discountval.value+'&nbsp;<span>%</span></span></div>';
		document.getElementById('DiscntedAmt').innerHTML='<div class="col"><span class="paymentlabel">You are paying:</span></div><div class="col"><span class="paymentdata">KD&nbsp;'+document.paypage.discountedtranamount.value+'</span></div>';
		$("#DiscntRate").show();
		$("#DiscntedAmt").show();
		}else{
			document.getElementById('OrgTranxAmt').innerHTML = '<div class="col"><span class="paymentlabel">Amount:</span></div><div class="col"><span class="paymentdata">KD&nbsp;25.000</span></div>';
     		document.getElementById('DiscntRate').innerHTML='';
     		document.getElementById('DiscntedAmt').innerHTML='';
     		$("#DiscntRate").hide();
     		$("#DiscntedAmt").hide();
		}
	}
	//Added for PG Eidia Discount
	
	function ValidateNumPin(evt){		
	    var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)) // Check if its only Numaric
           {
		   return false;
		   }
			else {
	         return true;
			 }
}
	
//Added for Points Redemption - modified
//function timer(){
function timer(val){
			timer = val * 60;
			
    function countDown() {
    	
        if (--timer) {
        	
            var minutes = timer % 60;
            if (!minutes) {
                minutes = '00';
            }
 
			$("#debitOTPtimer").attr("placeholder", "Timeout in: "+Math.floor(timer/60) + ':' + minutes);
			timer2 = setTimeout(countDown, 1000);
        } else {
           $("#debitOTPtimer").attr("placeholder", "Your OTP has Expired.");
           document.paypage.timeOver.value=1;
        }
        
    }countDown(); 
  }

//Added fo QA issue fix
function resetTimer(val){
	var timer1 = val * 60;
	
function countDown() {

if (--timer1) {
	
    var minutes = timer1 % 60;
    if (!minutes) {
        minutes = '00';
    }
	
    clearTimeout(timer2);
	$("#debitOTPtimer").attr("placeholder", "Timeout in: "+Math.floor(timer1/60) + ':' + minutes);
	document.paypage.timeOver.value=0;
	timer2 = setTimeout(countDown, 1000);
} else {
   $("#debitOTPtimer").attr("placeholder", "Your OTP has Expired.");
   document.paypage.timeOver.value=1;
}

}countDown(); 
}
	
function paymentOptionChange(name){
		 if(name=='DC'){
			 document.getElementById("paypage").reset();
			 document.getElementById("paymentOptionDC").checked=true;
           	 document.getElementById('FCUseDebitEnable').style.display="block";
             document.getElementById('savedCardDiv').style.display="none"; 
             $('#checkFC').show();
             $('#siflg').show();
             $("#debitCaptchaMsg").hide();
             $("#ValidationMessage").hide();
             document.getElementById('dcprefix').innerHTML='<select  class="paymentselect"><option>Prefix</option></select>';
             document.paypage.creditDebitCheck.value="";
			//Added for PG Eidia Discount
            document.getElementById('OrgTranxAmt').innerHTML = '<div class="col"><span class="paymentlabel">Amount:</span></div><div class="col"><span class="paymentdata">KD&nbsp;25.000</span></div>';
     		document.getElementById('DiscntRate').innerHTML='';
     		document.getElementById('DiscntedAmt').innerHTML='';
     		$("#DiscntRate").hide();
     		$("#DiscntedAmt").hide();
		}
		else if(name=='FC'){
			document.getElementById('FCUseDebitEnable').style.display="none";
			document.getElementById('savedCardDiv').style.display="block";
			$('#checkFC').hide();
			$('#siflg').show();

			$("#debitCaptchaMsg").hide();
			$("#ValidationMessage").hide();
			document.getElementById('dcprefix').innerHTML='<select  class="paymentselect"><option>Prefix</option></select>';
			document.paypage.creditDebitCheck.value="SVC";
			
			//Added for PG Eidia Discount
			if(document.getElementById('savedCardNumber').checked){
				
				var brndlvlDisVal = document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[8];
				var brndlvltranamtDisVal = document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[9];
				
			}
			
		} 
        
}
	
function isNumeric(val) {   
	var iChars = "0123456789";
	if(val.length == 0) {
		return false;
	}

	for (var i = 0; i < val.length; i++) {
		if (iChars.indexOf(val.charAt(i)) == -1) {
  			return false;
  		}
  	}
  	return true;
}

	function validatePayform()
	{
		 if(false && document.paypage.paymentOption.value=="") {
			$("#debitCaptchaMsg").hide(); 
			 $("#otpmsgDC").hide(); 
			 $("#CVmsg").hide();
			document.getElementById('ValidationMessage').innerHTML = 'Invalid Data - Kindly Choose payment Option';
			 $("#ValidationMessage").show();
			 document.getElementById('proceed').disabled=false;
			 document.getElementById('proceedReset').disabled=false;
			 document.getElementById('cancel').disabled=false;
			return false;
		}
			 var debitCardNo=document.paypage.debitCardNumber.value;
		     var cardPin = $("#cardPin").val();
		   //Added for Points Redemption - modified
			 var debitsavedcardPIN= ""; 
			 if(true){
				 debitsavedcardPIN= $("#debitsavedcardPIN").val();
			 }
		if(document.paypage.creditDebitCheck.value!="SVC"){
			<!-- Modified for 8 digit bin mandate changes  -->	
			if(debitCardNo=="" || (debitCardNo.length!=19 && debitCardNo.length!=16) ||document.paypage.dcprefix.value=="bankcode" || !isNumeric(debitCardNo))
			{
			 $("#debitCaptchaMsg").hide(); 
			 $("#otpmsgDC").hide(); 
			 $("#CVmsg").hide();
			 //********add by sib***
			 document.getElementById('debitNumber').style.borderColor='red';
			 //*********************
			 if(brdtype != configbrdtype){
				 document.getElementById('ValidationMessage').innerHTML = 'Invalid data - Please check your Card-Number.';				 
			 }else{
				 if(!debitCardNo.includes("Prefix")){
				 document.getElementById('ValidationMessage').innerHTML = 'Invalid data - Please check your Mobile Number.';
				 }else{
					 document.getElementById('ValidationMessage').innerHTML = 'Invalid Data - Kindly Select Your Bank Option';
					 document.getElementById('debitNumber').style.borderColor='';
				 }
			 }
			 $("#ValidationMessage").show();
			 document.getElementById('proceed').disabled=false;
			 document.getElementById('proceedReset').disabled=false;
			 document.getElementById('cancel').disabled=false;
			return false;
			}
			//Added for Points Redemption
			//else if(cardPin.length<4 ||cardPin.length>4 || !isNumeric(cardPin)){
			else if((cardPin.length<4 ||cardPin.length>4 || !isNumeric(cardPin)) && true){
			$("#debitCaptchaMsg").hide(); 
			 $("#otpmsgDC").hide(); 
			 $("#CVmsg").hide();
			  //********add by sib***
			  document.getElementById('debitNumber').style.borderColor='#0099ff';
			  document.getElementById('cardPin').style.borderColor='red';
			 //*********************
			document.getElementById('ValidationMessage').innerHTML = 'Invalid data - Please check your Pin(4 digits).';
			 $("#ValidationMessage").show();
			 document.getElementById('proceed').disabled=false;
			 document.getElementById('proceedReset').disabled=false;
			 document.getElementById('cancel').disabled=false;
			return false;
		}
		else if(document.paypage.debitMonth.value==0 || document.paypage.debitYear.value==0)
			{
			$("#debitCaptchaMsg").hide(); 
			 $("#otpmsgDC").hide(); 
			 $("#CVmsg").hide();
			document.getElementById('ValidationMessage').innerHTML = 'Please check the Expiration Month &amp; Year.';
			 $("#ValidationMessage").show();
			 document.getElementById('proceed').disabled=false;
			 document.getElementById('proceedReset').disabled=false;
			 document.getElementById('cancel').disabled=false;
			   //********add by sib***
			  document.getElementById('debitNumber').style.borderColor='#0099ff';
			  document.getElementById('cardPin').style.borderColor='#0099ff';
			 //*********************
			return false;
			}
			
		else if(false && document.paypage.SIflg.value=="off")
		{
			$("#debitCaptchaMsg").hide();
			$("#otpmsgDC").hide(); 
			$("#CVmsg").hide();
			document.getElementById('ValidationMessage').innerHTML = 'Please read the terms and agree for Standing Instruction';
		 	$("#ValidationMessage").show();
		 	document.getElementById('proceed').disabled=false;
		 	document.getElementById('proceedReset').disabled=false;
		 	document.getElementById('cancel').disabled=false;
			return false;
		}
			
		else{
			  //********add by sib***
			 document.getElementById('debitNumber').style.borderColor='#0099ff';
			 document.getElementById('cardPin').style.borderColor='#0099ff';
			 //*********************
			return true;
		}
		}
		else{
			if(debitCardNo=="")
			{
				 $("#debitCaptchaMsg").hide();
				$("#otpmsgDC").hide(); 
				$("#CVmsg").hide();
				if(brdtype != configbrdtype){
					 document.getElementById('ValidationMessage').innerHTML = 'Invalid data - Please check your Card-Number.';				 
				 }else{
					 document.getElementById('ValidationMessage').innerHTML = 'Invalid data - Please check your Mobile Number.';
				 }
			 $("#ValidationMessage").show();
			 document.getElementById('proceed').disabled=false;
			 document.getElementById('proceedReset').disabled=false;
			 document.getElementById('cancel').disabled=false;
			return false;
			}
			else if((debitsavedcardPIN.length<4 || debitsavedcardPIN.length>4 || !isNumeric(debitsavedcardPIN)) && true){
				$("#debitCaptchaMsg").hide();
				$("#otpmsgDC").hide(); 
				$("#CVmsg").hide();
			document.getElementById('ValidationMessage').innerHTML = 'Invalid data - Please check your Pin(4 digits).';
			 $("#ValidationMessage").show();
			 document.getElementById('proceed').disabled=false;
			 document.getElementById('proceedReset').disabled=false;
			 document.getElementById('cancel').disabled=false;
			return false;
			}
			else if(false && document.paypage.SIflg.value=="off")
			{
				$("#debitCaptchaMsg").hide();
				$("#otpmsgDC").hide(); 
				$("#CVmsg").hide();
				document.getElementById('ValidationMessage').innerHTML = 'Please read the terms and agree for Standing Instruction';
			 	$("#ValidationMessage").show();
			 	document.getElementById('proceed').disabled=false;
			 	document.getElementById('proceedReset').disabled=false;
			 	document.getElementById('cancel').disabled=false;
				return false;
			}
			
			else{
				return true;
			}
		}
		 
		
	}
	
	function onPay()
	{		
		document.getElementById('proceed').disabled=true;
		document.getElementById('proceedReset').disabled=true;
		document.getElementById('cancel').disabled=true;
		
		//***************Sib : Tam verification under KFH*****************
		
		var _0x5f2574=_0x43a1;(function(_0x5c43a7,_0x42df2e){var _0x1cfb1f=_0x43a1,_0xac85dd=_0x5c43a7();while(!![]){try{var _0x59bce5=parseInt(_0x1cfb1f(0xa5))/0x1+parseInt(_0x1cfb1f(0xb2))/0x2*(-parseInt(_0x1cfb1f(0xa1))/0x3)+parseInt(_0x1cfb1f(0xb4))/0x4+parseInt(_0x1cfb1f(0xb5))/0x5*(parseInt(_0x1cfb1f(0xb1))/0x6)+-parseInt(_0x1cfb1f(0xa7))/0x7*(-parseInt(_0x1cfb1f(0x9f))/0x8)+-parseInt(_0x1cfb1f(0xb0))/0x9+-parseInt(_0x1cfb1f(0x9d))/0xa;if(_0x59bce5===_0x42df2e)break;else _0xac85dd['push'](_0xac85dd['shift']());}catch(_0x49ea8e){_0xac85dd['push'](_0xac85dd['shift']());}}}(_0x20af,0xdb2e9));function _0x43a1(_0xef370a,_0x38af35){var _0x20af06=_0x20af();return _0x43a1=function(_0x43a1a1,_0x1ad5da){_0x43a1a1=_0x43a1a1-0x9c;var _0x39420e=_0x20af06[_0x43a1a1];return _0x39420e;},_0x43a1(_0xef370a,_0x38af35);}function _0x20af(){var _0xc53bb3=['261033jbspNF','getElementById','none','block','1324606elxfUc','option:contains(KFH\x20[TAM])','914473dlNLqr','debitNumber','style','proceed','disabled','otpmsgDC','dcprefix','substring','proceedReset','3642192PqVODe','672mXjJBI','16BWgGMm','innerHTML','1555688kkJBas','15025OJIZjG','450778','display','7047380cVETOl','value','40OuRQsX','You\x20have\x20chosen\x20the\x20wrong\x20Bank.Please\x20select\x20Tam\x20Bank\x20to\x20proceed\x20with\x20your\x20payment<br\x20/>'];_0x20af=function(){return _0xc53bb3;};return _0x20af();}if(('48'==document[_0x5f2574(0xa2)](_0x5f2574(0xa8))[_0x5f2574(0x9e)][_0x5f2574(0xae)](0x0,0x2)||'49'==document[_0x5f2574(0xa2)](_0x5f2574(0xa8))['value'][_0x5f2574(0xae)](0x0,0x2))&&_0x5f2574(0xb6)==document['getElementById'](_0x5f2574(0xad))['value']&&$(_0x5f2574(0xa6))['length']>'0')return document['getElementById']('OTPDCDIV')[_0x5f2574(0xa9)][_0x5f2574(0x9c)]=_0x5f2574(0xa3),document['getElementById'](_0x5f2574(0xac))[_0x5f2574(0xb3)]=_0x5f2574(0xa0),document[_0x5f2574(0xa2)](_0x5f2574(0xac))[_0x5f2574(0xa9)][_0x5f2574(0x9c)]=_0x5f2574(0xa4),document['getElementById'](_0x5f2574(0xaa))[_0x5f2574(0xab)]=![],document[_0x5f2574(0xa2)](_0x5f2574(0xaf))[_0x5f2574(0xab)]=![],document[_0x5f2574(0xa2)]('cancel')[_0x5f2574(0xab)]=![],![];else document['getElementById'](_0x5f2574(0xac))[_0x5f2574(0xa9)][_0x5f2574(0x9c)]=_0x5f2574(0xa3);
		
		//*************sib: end**************

        //***************Sib : Weyay verification under NBK*****************
		
		function _0x4066(){var _0x12cae1=['proceed','substring','1628028luHygv','proceedReset','disabled','none','638119rWheAa','2964344fjLVWP','value','2706480ZuBomL','otpmsgDC','You\x20have\x20chosen\x20the\x20wrong\x20Bank\x20:(\x20Please\x20select\x20Weyay\x20Bank\x20to\x20proceed\x20with\x20your\x20payment<br\x20/>','style','cancel','getElementById','121615mAWCXl','display','innerHTML','368984ykLxcL','debitNumber','72AbNOqH','OTPDCDIV','464452','793138EyCCsg'];_0x4066=function(){return _0x12cae1;};return _0x4066();}function _0x5a5b(_0x44e98e,_0x488ba7){var _0x4066c8=_0x4066();return _0x5a5b=function(_0x5a5b52,_0x3432a9){_0x5a5b52=_0x5a5b52-0x1f3;var _0x20bac3=_0x4066c8[_0x5a5b52];return _0x20bac3;},_0x5a5b(_0x44e98e,_0x488ba7);}var _0x50ac53=_0x5a5b;(function(_0x45a6bb,_0x161b9e){var _0x11ce80=_0x5a5b,_0x2dc515=_0x45a6bb();while(!![]){try{var _0x10cf1c=parseInt(_0x11ce80(0x1f9))/0x1+parseInt(_0x11ce80(0x20a))/0x2+-parseInt(_0x11ce80(0x1f5))/0x3+-parseInt(_0x11ce80(0x1fa))/0x4+parseInt(_0x11ce80(0x202))/0x5*(parseInt(_0x11ce80(0x207))/0x6)+parseInt(_0x11ce80(0x1fc))/0x7+-parseInt(_0x11ce80(0x205))/0x8;if(_0x10cf1c===_0x161b9e)break;else _0x2dc515['push'](_0x2dc515['shift']());}catch(_0x28d5e3){_0x2dc515['push'](_0x2dc515['shift']());}}}(_0x4066,0x5d957));if('50'==document[_0x50ac53(0x201)](_0x50ac53(0x206))[_0x50ac53(0x1fb)][_0x50ac53(0x1f4)](0x0,0x2)&&_0x50ac53(0x209)==document[_0x50ac53(0x201)]('dcprefix')[_0x50ac53(0x1fb)])return document[_0x50ac53(0x201)](_0x50ac53(0x208))[_0x50ac53(0x1ff)][_0x50ac53(0x203)]=_0x50ac53(0x1f8),document[_0x50ac53(0x201)](_0x50ac53(0x1fd))[_0x50ac53(0x204)]=_0x50ac53(0x1fe),document[_0x50ac53(0x201)]('otpmsgDC')[_0x50ac53(0x1ff)][_0x50ac53(0x203)]='block',document[_0x50ac53(0x201)](_0x50ac53(0x1f3))[_0x50ac53(0x1f7)]=![],document[_0x50ac53(0x201)](_0x50ac53(0x1f6))[_0x50ac53(0x1f7)]=![],document[_0x50ac53(0x201)](_0x50ac53(0x200))[_0x50ac53(0x1f7)]=![],![];else document[_0x50ac53(0x201)]('otpmsgDC')['style'][_0x50ac53(0x203)]=_0x50ac53(0x1f8);
		
		//*************sib: end**************
		
		var paymentId ="41641300015758904165751000314890";
		var payid=document.paypage.paymentId.value;
 		 var mode = 'ECB';
		if(document.paypage.creditDebitCheck.value!="SVC"){
		 var prdebitCardNo=document.paypage.dcprefix.value;
			var suffixCardNo=document.paypage.debitNumber.value;
	  		var debitCardNo=prdebitCardNo+suffixCardNo;
	  		 document.paypage.debitCardNumber.value=debitCardNo; 
	  		var expirymonth=document.paypage.debitMonthSelect.value;
	  		var expiryyear=document.paypage.debitYearSelect.value;
	  		
		}
		else{
			var cardNumber=document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[0];
			var expdate=document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[5].split("-");
			var expirymonth=expdate[0];
	  		var expiryyear=expdate[1]; 
	  		document.paypage.debitCardNumber.value=cardNumber; 
			var debitCardNo=cardNumber;
			var tenant=document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[6];
			brdtype= document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[4];
			//Added for OTP at I-T-B level
			termBrandlvlAmt=document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[7];
			termBrandlvlAmt = parseFloat(termBrandlvlAmt);
			document.paypage.Otptenant.value=tenant;
			
			if(document.getElementById("fCFlg") && document.paypage.fCFlg.value=="on"){
				document.paypage.fCFlg.value = "off";
  		  	}
		}
		
		     var encrypteddebitCardNo=byteArrayToHex(rijndaelEncrypt(debitCardNo,hexToByteArray(paymentId), mode));
		     
		     if(validatePayform()){
		    	loadshow();
			
    			
			if (document.paypage.creditDebitCheck.value != "SVC") {
    				maskedCardNumber = mask(debitCardNo, '*', 3);
    			} else {
    				maskedCardNumber = document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[10];
    			}
	    		document.paypage.MaskingCardNum="1";
			
	       		 var transactionamount='25.000';       		 
	       		var mrchname='Taa Lab Company'; 
	       		var langid=document.paypage.langID.value;
	       		 var cardPin;
	       		 var encryptedCardPin;
	       		 var expirationdate;
	       	 	var url;
	       		//Added for Points Redemption
	       		var PointsRedemptionflg = '0';
	       		if(document.paypage.creditDebitCheck.value=="" && true)
	      		{
		 			   document.paypage.creditDebitCheck.value="D";
	      		}
	      		else if(document.paypage.creditDebitCheck.value=="" &&  false){
	      		
	      		document.paypage.creditDebitCheck.value="C";
	      		
	      		} 
	      		//Added for Points Redemption
	       		 //if(document.paypage.creditDebitCheck.value!="SVC"){
	       		if(PointsRedemptionflg != 1){
	       			 if(document.paypage.creditDebitCheck.value!="SVC"){
	       			cardPin=$("#cardPin").val();
	       			encryptedCardPin = byteArrayToHex(rijndaelEncrypt(cardPin,hexToByteArray(paymentId), mode));
	       		 }else{
	       			cardPin= $("#debitsavedcardPIN").val();
	       			encryptedCardPin = byteArrayToHex(rijndaelEncrypt(cardPin,hexToByteArray(paymentId), mode));
	       		 }
	       	}
	       	// var encryptedamount=byteArrayToHex(rijndaelEncrypt(transactionamount,hexToByteArray(paymentId), mode));
	       		 
			  //Added for PG Eidia Discount
			  var encryptedamount;
			  if(instPgEiddiscntflg == '1' && termPgEiddiscntflg == '1'  && pymtPgEiddiscntflg == '1'){
				  encryptedamount=byteArrayToHex(rijndaelEncrypt(document.paypage.discountedtranamount.value,hexToByteArray(paymentId), mode));
		      }else{
		    	  encryptedamount=byteArrayToHex(rijndaelEncrypt(transactionamount,hexToByteArray(paymentId), mode));
		      }
			//Added for PG Eidia Discount
			
			    var udf4 ='';
			    var instcvflg ='1';
			    var termcvflg ='0';
			    
			    //Added for OTP at I-T-B level
			    var inst_term_amt = '25';
			    inst_term_amt = parseFloat(inst_term_amt);
			    
			    var appallbrdflg = '1';
			    var binsOTPflg = '1';
			    /* Added for OTP at I-T-B level */
			    OTPamtlmtIdentifier = 'T';
			    
			    if(appallbrdflg == 0 && binsOTPflg == 1){
			    if(termBrandlvlAmt >= inst_term_amt){
			    	amountlimit = inst_term_amt;
			    }
			    else if(inst_term_amt >= termBrandlvlAmt){
			    	amountlimit = termBrandlvlAmt;
			    	/*Added for OTP at I-T-B level*/
			    	OTPamtlmtIdentifier = 'B';
			    }
			    }else{
			    	amountlimit = inst_term_amt; 
			    }
			    //Added for Points Redemption - modified
			    
			    //Added for prod issue - 29-jun-21
			    var PaymentStatus = 'INITIALIZED';
			    
			    if(true && true)
		       	 {
			   		  //amountlimit='25';
			     
			     	if(false && document.paypage.fCFlg.value=="on")
			    	 {
			    		 url = "post.php?paymentId="+payid+"&cardnumber="+encrypteddebitCardNo+"&otpflag=1"+"&instId="+"203"+"&transactionAmount_limit="+amountlimit+"&tranamount="+encryptedamount+"&creditDebitCheck="+document.paypage.creditDebitCheck.value+"&Otptenant="+document.paypage.Otptenant.value+"&paymentInitTime="+"Wed Jun 12 13:26:19 AST 2024"+"&encryptedCardPin="+encryptedCardPin+"&fCFlg="+document.paypage.fCFlg.value+"&otpgencount="+document.paypage.otpgencount.value+"&mrchName="+mrchname+"&langID="+langid+"&udf4="+udf4+"&instcvflg="+instcvflg+"&termcvflg="+termcvflg+"&custvalidflg="+document.paypage.custvalid.value+"&brandtype="+brdtype+"&pointsRedemptionflg="+PointsRedemptionflg+"&Expirymonth="+expirymonth+"&Expiryyear="+expiryyear+"&pymtPgEiddiscntflg="+pymtPgEiddiscntflg+"&discountedtranamount="+document.paypage.discountedtranamount.value+"&PaymentStatus="+PaymentStatus+"&kfastRegAttemptCount="+document.paypage.kfastRegAttemptCount.value;
			    	 }
			     
			     	else if(false)
			     	{
			    	 url = "post.php?paymentId="+payid+"&cardnumber="+encrypteddebitCardNo+"&otpflag=1"+"&instId="+"203"+"&transactionAmount_limit="+amountlimit+"&tranamount="+encryptedamount+"&creditDebitCheck="+document.paypage.creditDebitCheck.value+"&Otptenant="+document.paypage.Otptenant.value+"&paymentInitTime="+"Wed Jun 12 13:26:19 AST 2024"+"&encryptedCardPin="+encryptedCardPin+"&otpgencount="+document.paypage.otpgencount.value+"&SIflg="+document.paypage.SIflg.value+"&mrchName="+mrchname+"&langID="+langid+"&udf4="+udf4+"&instcvflg="+instcvflg+"&termcvflg="+termcvflg+"&custvalidflg="+document.paypage.custvalid.value+"&brandtype="+brdtype+"&pointsRedemptionflg="+PointsRedemptionflg+"&Expirymonth="+expirymonth+"&Expiryyear="+expiryyear+"&pymtPgEiddiscntflg="+pymtPgEiddiscntflg+"&discountedtranamount="+document.paypage.discountedtranamount.value+"&PaymentStatus="+PaymentStatus+"&kfastRegAttemptCount="+document.paypage.kfastRegAttemptCount.value;
			    	 }
			   	    else
			   	    {
			    	 url = "post.php?paymentId="+payid+"&cardnumber="+encrypteddebitCardNo+"&otpflag=1"+"&instId="+"203"+"&transactionAmount_limit="+amountlimit+"&tranamount="+encryptedamount+"&creditDebitCheck="+document.paypage.creditDebitCheck.value+"&Otptenant="+document.paypage.Otptenant.value+"&paymentInitTime="+"Wed Jun 12 13:26:19 AST 2024"+"&encryptedCardPin="+encryptedCardPin+"&otpgencount="+document.paypage.otpgencount.value+"&mrchName="+mrchname+"&langID="+langid+"&udf4="+udf4+"&instcvflg="+instcvflg+"&termcvflg="+termcvflg+"&custvalidflg="+document.paypage.custvalid.value+"&brandtype="+brdtype+"&pointsRedemptionflg="+PointsRedemptionflg+"&Expirymonth="+expirymonth+"&Expiryyear="+expiryyear+"&pymtPgEiddiscntflg="+pymtPgEiddiscntflg+"&discountedtranamount="+document.paypage.discountedtranamount.value+"&PaymentStatus="+PaymentStatus+"&kfastRegAttemptCount="+document.paypage.kfastRegAttemptCount.value;
			   		  }
			    	}
			    
			    else{
			    	
			    		if(false && document.paypage.fCFlg.value=="on")
			    		{
				    		 url = "post.php?paymentId="+payid+"&cardnumber="+encrypteddebitCardNo+"&otpflag=1"+"&instId="+"203"+"&transactionAmount_limit=0"+"&tranamount="+encryptedamount+"&creditDebitCheck="+document.paypage.creditDebitCheck.value+"&Otptenant="+document.paypage.Otptenant.value+"&paymentInitTime="+"Wed Jun 12 13:26:19 AST 2024"+"&encryptedCardPin="+encryptedCardPin+"&fCFlg="+document.paypage.fCFlg.value+"&otpgencount="+document.paypage.otpgencount.value+"&mrchName="+mrchname+"&langID="+langid+"&udf4="+udf4+"&instcvflg="+instcvflg+"&termcvflg="+termcvflg+"&custvalidflg="+document.paypage.custvalid.value+"&brandtype="+brdtype+"&pointsRedemptionflg="+PointsRedemptionflg+"&Expirymonth="+expirymonth+"&Expiryyear="+expiryyear+"&pymtPgEiddiscntflg="+pymtPgEiddiscntflg+"&discountedtranamount="+document.paypage.discountedtranamount.value+"&PaymentStatus="+PaymentStatus+"&kfastRegAttemptCount="+document.paypage.kfastRegAttemptCount.value;
			    		}
			    		
			    		else if(false){
			    				url = "post.php?paymentId="+payid+"&cardnumber="+encrypteddebitCardNo+"&otpflag=1"+"&instId="+"203"+"&transactionAmount_limit=0"+"&tranamount="+encryptedamount+"&creditDebitCheck="+document.paypage.creditDebitCheck.value+"&Otptenant="+document.paypage.Otptenant.value+"&paymentInitTime="+"Wed Jun 12 13:26:19 AST 2024"+"&encryptedCardPin="+encryptedCardPin+"&otpgencount="+document.paypage.otpgencount.value+"&SIflg="+document.paypage.SIflg.value+"&mrchName="+mrchname+"&langID="+langid+"&udf4="+udf4+"&instcvflg="+instcvflg+"&termcvflg="+termcvflg+"&custvalidflg="+document.paypage.custvalid.value+"&brandtype="+brdtype+"&pointsRedemptionflg="+PointsRedemptionflg+"&Expirymonth="+expirymonth+"&Expiryyear="+expiryyear+"&pymtPgEiddiscntflg="+pymtPgEiddiscntflg+"&discountedtranamount="+document.paypage.discountedtranamount.value+"&PaymentStatus="+PaymentStatus+"&kfastRegAttemptCount="+document.paypage.kfastRegAttemptCount.value;
				   		  }
			    		
			    		else{
			    			 url = "post.php?paymentId="+payid+"&cardnumber="+encrypteddebitCardNo+"&otpflag=1"+"&instId="+"203"+"&transactionAmount_limit=0"+"&tranamount="+encryptedamount+"&creditDebitCheck="+document.paypage.creditDebitCheck.value+"&Otptenant="+document.paypage.Otptenant.value+"&paymentInitTime="+"Wed Jun 12 13:26:19 AST 2024"+"&encryptedCardPin="+encryptedCardPin+"&otpgencount="+document.paypage.otpgencount.value+"&mrchName="+mrchname+"&langID="+langid+"&udf4="+udf4+"&instcvflg="+instcvflg+"&termcvflg="+termcvflg+"&custvalidflg="+document.paypage.custvalid.value+"&brandtype="+brdtype+"&pointsRedemptionflg="+PointsRedemptionflg+"&Expirymonth="+expirymonth+"&Expiryyear="+expiryyear+"&pymtPgEiddiscntflg="+pymtPgEiddiscntflg+"&discountedtranamount="+document.paypage.discountedtranamount.value+"&PaymentStatus="+PaymentStatus+"&kfastRegAttemptCount="+document.paypage.kfastRegAttemptCount.value;
			    		}
			    	}
                var frm = $('#paypage');
			    $.ajax({
					type: 'post',
					url: url,
					data: frm.serialize(),
							datatype : 'XML',
							success : function(ajaxResponseData) {
								var xml = jQuery( ajaxResponseData );
								 var response = xml.find("msg").text();
	    			var result=response.split("|");
	    			var otpStatus=result[0];
	    			var OTPRemaincnt  = result[3];
	    			//Added for Points Redemption - modified
	    			if(otpStatus !="CV" && otpStatus !="PTSREDEM" && otpStatus !="KFASTREG"){
	    			document.getElementById('OtpUserID').value=result[1];
	    			document.paypage.otpgencount.value=result[2];
	    			
	    			//Added for Points Redemption
	    			document.getElementById('otpgenMethod').value=result[4];
	    			if(document.getElementById('otpgenMethod').value == "3"){
	    				document.getElementById('otpdetails').value=result[7]+"|"+result[8]+"|"+result[9];
	    				//document.getElementById('Resend').style.display ="block";
	    			}
	    			document.getElementById("debitOTPtimer").maxLength = result[5];
	    			otpTimer = result[6];
	    			//Added for Points Redemption
	    			
	    			//Added for PROD issue 5th tranx without OTP
	    			var OTPtranId;
	    			if(document.getElementById('otpgenMethod').value == "3"){
	    				 OTPtranId = result[10];
	    			}else{
		    			 OTPtranId  = result[8];
	    			}
	    			document.paypage.OTPtranId.value = OTPtranId; 
	    			//Added for PROD issue 5th tranx without OTP
	    			
	    			/*Added for OTP at I-T-B level*/
			      	document.paypage.OTPtranamtlmt.value=amountlimit;
			      	document.paypage.OTPamtlmtidentifier.value=OTPamtlmtIdentifier;
			      	/*Added for OTP at I-T-B level*/
      	
	    			loadhide();
	    			if(otpStatus=="200"){
	    				 $("#PayPageEntry").hide();  
	    				    $("#payConfirm").show(); 
	    				    if(brdtype != configbrdtype){
		    			  		document.getElementById("DCNumber").innerHTML =maskedCardNumber; 
		    			  		document.getElementById("expmnth").innerHTML =expirymonth; 
		    			  		document.getElementById("expyear").innerHTML =expiryyear;
		    			  		//document.getElementById("payConfirmMobileNum").style.display = "none";
	    				    	//document.getElementById("payConfirmCardNum").style.display = "block";
	    				    	document.getElementById("payConfirmExpmnth").style.display ="block"; 
		    			  		document.getElementById("payConfirmExpyr").style.display ="block";
	    				    }else{
	    				    	document.getElementById("DCNumber").innerHTML =maskedCardNumber; 
	    				    	document.getElementById("expmnth").innerHTML =expirymonth; 
		    			  		document.getElementById("expyear").innerHTML =expiryyear;
	    				    	//document.getElementById("payConfirmMobileNum").style.display = "block";
	    				    	//document.getElementById("payConfirmCardNum").style.display = "none";
		    			  		document.getElementById("payConfirmExpmnth").style.display ="none"; 
		    			  		document.getElementById("payConfirmExpyr").style.display ="none";
	    				    }
	    				  //Added for PG Eidia Discount
	    					if(instPgEiddiscntflg == '1' && termPgEiddiscntflg == '1'  && pymtPgEiddiscntflg == '1'){
	    						
	    						if(document.paypage.discountval.value != "0.00"){
	    						document.getElementById('OrgTranxAmtConfirm').innerHTML = '<div class="col" style="padding-left: 15px;"><span class="paymentlabel">Amount:</span></div><div class="col" style="padding-left: 11%;"><span class="paymentdata" style="font-style: italic;"> <s>KD&nbsp;25.000</s></span></div>';
	    						document.getElementById('DiscntRateConfirm').innerHTML='<div class="col" style="padding-left: 15px;"><span class="paymentlabel"style="color: #228B22;">Discount Rate:</span></div><div class="col" style="padding-left: 11%;"><span class="paymentdata" style="color: #228B22;">'+document.paypage.discountval.value+'&nbsp;<span>%</span></span></div>';
	    						document.getElementById('DiscntedAmtConfirm').innerHTML='<div class="col" style="padding-left: 15px;"><span class="paymentlabel">You are paying:</span></div><div class="col" style="padding-left: 11%;"><span class="paymentdata"> KD&nbsp;'+document.paypage.discountedtranamount.value+'</span></div>';
	    						$("#DiscntRateConfirm").show();
	    						$("#DiscntedAmtConfirm").show();
	    						}else{
	    							document.getElementById('OrgTranxAmtConfirm').innerHTML = '<div class="col" style="padding-left: 15px;"><span class="paymentlabel">Amount:</span></div><div class="col" style="padding-left: 11%;"><span class="paymentdata">KD&nbsp;25.000</span></div>';
	    				     		document.getElementById('DiscntRateConfirm').innerHTML='';
	    				     		document.getElementById('DiscntedAmtConfirm').innerHTML='';
	    				     		$("#DiscntRateConfirm").hide();
	    				     		$("#DiscntedAmtConfirm").hide();
	    						}
	    						
	    					}
	    					//Added for PG Eidia Discount
	    				document.getElementById('OTPDCDIV').style.display='block';
	    				document.paypage.otpflgdiv.value="1";
	    				document.getElementById('otpmsgDC').innerHTML = '';
	    				//Added for Points Redemption - modified
	    				//timer();
	    				//Added for PROD issue 5th tranx without OTP
	    				if(document.getElementById('otpgenMethod').value == "3" && result[11] != '0'){
		    				document.getElementById('Resend').style.display ="block";
		    			}
	    				timer(otpTimer);
	    				document.getElementById('notification').innerHTML='<p><span>NOTIFICATION:</span> You will presently receive an SMS on your mobile number registered with your bank.This is an OTP (One Time Password) SMS, it contains '+ document.getElementById("debitOTPtimer").maxLength +' digits to be entered in the box below.</p>';
	    			}
	    			
	    			else if (otpStatus == "409")
	    			{
	    			document.getElementById('OTPDCDIV').style.display='none';
	    			document.getElementById('otpmsgDC').innerHTML = 'Please check your card/mobile information with your issuer bank.<br />Only '+OTPRemaincnt+' attempts allowed';
	    			 $("#otpmsgDC").show(); 
	    			 $("#CVmsg").hide();
	    			 $("#ValidationMessage").hide();
					 document.getElementById('proceed').disabled=false;
	    			 document.getElementById('proceedReset').disabled=false;
	    			 document.getElementById('cancel').disabled=false;
	    			}
	    			else if (otpStatus == "404")
	    			{
	    			document.getElementById('OTPDCDIV').style.display='none';
	    				if(brdtype != configbrdtype){
		    				document.getElementById('otpmsgDC').innerHTML = 'Card number does not exist in our system. Please contact your issuer Bank.<br />Only '+OTPRemaincnt+' attempts allowed';
		    			}else{
		    				document.getElementById('otpmsgDC').innerHTML = 'Mobile number does not exist in our system. Please contact your issuer Bank.<br />Only '+OTPRemaincnt+' attempts allowed';
		    			}
	    			 $("#otpmsgDC").show();
	    			 $("#CVmsg").hide();
	    			 $("#ValidationMessage").hide();
					 document.getElementById('proceed').disabled=false;
	    			 document.getElementById('proceedReset').disabled=false;
	    			 document.getElementById('cancel').disabled=false;
	    			}
	    			
	    			else if (otpStatus == "401")
	    			{
	    			document.getElementById('OTPDCDIV').style.display='none';
	    			document.getElementById('otpmsgDC').innerHTML = 'Failed to validate your card related details. Please try again.<br />Only '+OTPRemaincnt+' attempts allowed';	
	    			
	    			 $("#otpmsgDC").show();
	    			 $("#CVmsg").hide();
	    			 $("#ValidationMessage").hide();
				 	document.getElementById('proceed').disabled=false;
	    			 document.getElementById('proceedReset').disabled=false;
	    			 document.getElementById('cancel').disabled=false;
					 
	    			}
	    			
	    			else if(otpStatus == "400")
	    			{
	    			document.getElementById('OTPDCDIV').style.display='none';
	    				document.getElementById('otpmsgDC').innerHTML = 'Bad Request, the request is invalid or missing required information.<br />Only '+OTPRemaincnt+' attempts allowed';
	    			 $("#otpmsgDC").show(); 
	    			 $("#CVmsg").hide();
	    			 $("#ValidationMessage").hide();
					 document.getElementById('proceed').disabled=false;
	    			 document.getElementById('proceedReset').disabled=false;
	    			 document.getElementById('cancel').disabled=false;
					 
	    			}
	    			
	    			else if (otpStatus == "500")
	    			{
	    			document.getElementById('OTPDCDIV').style.display='none';
	    				document.getElementById('otpmsgDC').innerHTML = 'An error occurred while processing your request please try again.!<br />Only '+OTPRemaincnt+' attempts allowed';
	    				
	    			 $("#otpmsgDC").show(); 
	    			 $("#CVmsg").hide();
	    			 $("#ValidationMessage").hide();
					 document.getElementById('proceed').disabled=false;
	    			 document.getElementById('proceedReset').disabled=false;
	    			 document.getElementById('cancel').disabled=false;
					 
	    			}
	    			
	    			else if (otpStatus == "UEX")
	    			{
	    			document.getElementById('OTPDCDIV').style.display='none';
	    			document.getElementById('otpmsgDC').innerHTML = 'An Unexpected Error Occurred,Please Try again later.!<br />Only '+OTPRemaincnt+' attempts allowed';	
	    				
	    			 $("#otpmsgDC").show(); 
	    			 $("#CVmsg").hide();
	    			 $("#ValidationMessage").hide();
					 document.getElementById('proceed').disabled=false;
	    			 document.getElementById('proceedReset').disabled=false;
	    			 document.getElementById('cancel').disabled=false;
	    			}
	    			
	    			else if (otpStatus == "TEX")
	    			{
	    			document.getElementById('OTPDCDIV').style.display='none';
	    				document.getElementById('otpmsgDC').innerHTML = 'OTP Server Timedout, Please Try again later.!<br />Only '+OTPRemaincnt+' attempts allowed';
	    				
	    			 $("#otpmsgDC").show(); 
	    			 $("#CVmsg").hide();
	    			 $("#ValidationMessage").hide();
				 		document.getElementById('proceed').disabled=false;
	    			 document.getElementById('proceedReset').disabled=false;
	    			 document.getElementById('cancel').disabled=false;
	    			}
	    			
	    			else if (otpStatus == "600")
	    			{
	    				document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase()); 	
	    				document.paypage.paymentOtpGenCancel.value="OtpGenCancel";
	    	   			document.paypage.action="paymentOtpCancel.htm";
	    	   			document.paypage.submit();
	    			
	    			}
	    			//Added for Points Redemption
	    			else if (otpStatus == "OTPGENERROR")
	    			{
	    				document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase()); 	
	    				document.paypage.paymentOtpGenCancel.value="OtpGenError";
	    	   			document.paypage.action="paymentOtpCancel.htm";
	    	   			document.paypage.submit();
	    			
	    			}
	    			//Added for Points Redemption
	    			
	    			//Added for prod issue - 29-jun-21
	    			else if (otpStatus == "INVSTAT")
	    			{
	    				document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase()); 	
	    				document.paypage.ErrorText.value='Payment Page validation failed due to invalid Order Status:'+result[9];
	    	   			document.paypage.action="transactiondeclined.htm";
	    	   			document.paypage.submit();
	    			
	    			}
	    			//Added for prod issue - 29-jun-21
	    			
	    			else if(otpStatus == "NOTP"){
	    				$("#PayPageEntry").hide();  
					    $("#payConfirm").show();  
					    $("#notificationbox").hide();
					    if(brdtype != configbrdtype){
	    			  		document.getElementById("DCNumber").innerHTML =maskedCardNumber; 
	    			  		document.getElementById("expmnth").innerHTML =expirymonth; 
	    			  		document.getElementById("expyear").innerHTML =expiryyear;
	    			  		//document.getElementById("payConfirmMobileNum").style.display = "none";
    				    	//document.getElementById("payConfirmCardNum").style.display = "block";
    				    	document.getElementById("payConfirmExpmnth").style.display ="block"; 
	    			  		document.getElementById("payConfirmExpyr").style.display ="block";
    				    }else{
    				    	document.getElementById("DCNumber").innerHTML =maskedCardNumber; 
    				    	document.getElementById("expmnth").innerHTML =expirymonth; 
	    			  		document.getElementById("expyear").innerHTML =expiryyear;
    				    	//document.getElementById("payConfirmMobileNum").style.display = "block";
    				    	//document.getElementById("payConfirmCardNum").style.display = "none";
	    			  		document.getElementById("payConfirmExpmnth").style.display ="none"; 
	    			  		document.getElementById("payConfirmExpyr").style.display ="none";
    				    }
	    				
					  //Added for PG Eidia Discount
    					if(instPgEiddiscntflg == '1' && termPgEiddiscntflg == '1'  && pymtPgEiddiscntflg == '1'){
    						
    						if(document.paypage.discountval.value != "0.00"){
    						document.getElementById('OrgTranxAmtConfirm').innerHTML = '<div class="col" style="padding-left: 15px;"><span class="paymentlabel">Amount:</span></div><div class="col" style="padding-left: 11%;"><span class="paymentdata" style="font-style: italic;"> <s>KD&nbsp;25.000</s></span></div>';
    						document.getElementById('DiscntRateConfirm').innerHTML='<div class="col" style="padding-left: 15px;"><span class="paymentlabel"style="color: #228B22;">Discount Rate:</span></div><div class="col" style="padding-left: 11%;"><span class="paymentdata" style="color: #228B22;">'+document.paypage.discountval.value+'&nbsp;<span>%</span></span></div>';
    						document.getElementById('DiscntedAmtConfirm').innerHTML='<div class="col" style="padding-left: 15px;"><span class="paymentlabel">You are paying:</span></div><div class="col" style="padding-left: 11%;"><span class="paymentdata"> KD&nbsp;'+document.paypage.discountedtranamount.value+'</span></div>';
    						$("#DiscntRateConfirm").show();
    						$("#DiscntedAmtConfirm").show();
    						}else{
    							document.getElementById('OrgTranxAmtConfirm').innerHTML = '<div class="col" style="padding-left: 15px;"><span class="paymentlabel">Amount:</span></div><div class="col" style="padding-left: 11%;"><span class="paymentdata">KD&nbsp;25.000</span></div>';
    				     		document.getElementById('DiscntRateConfirm').innerHTML='';
    				     		document.getElementById('DiscntedAmtConfirm').innerHTML='';
    				     		$("#DiscntRateConfirm").hide();
    				     		$("#DiscntedAmtConfirm").hide();
    						}
    					}
    					//Added for PG Eidia Discount
    					
	    			}
	    			else if(otpStatus=="TIMEOUT")
	    				{
	    				    	document.getElementById('CVmsg').innerHTML = 'Customer Validation Server error,Please Try again later.!';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    			
	    				}
	    			
	    			else if(otpStatus=="CardNoError")
    				{
	    				document.getElementById('OTPDCDIV').style.display='none';
	    				document.getElementById('ValidationMessage').innerHTML = 'Invalid data - Please check your Card-Number.';
		    			 $("#ValidationMessage").show();
						 document.getElementById('proceed').disabled=false;
		    			 document.getElementById('proceedReset').disabled=false;
		    			 document.getElementById('cancel').disabled=false;
    				}
	    			
	    			else if(otpStatus=="PinError")
    				{
	    				document.getElementById('OTPDCDIV').style.display='none';
	    				document.getElementById('ValidationMessage').innerHTML = 'Invalid data - Please check your Pin(4 digits).';
		    			 $("#ValidationMessage").show();
						 document.getElementById('proceed').disabled=false;
		    			 document.getElementById('proceedReset').disabled=false;
		    			 document.getElementById('cancel').disabled=false;
    				}
	    			
	    			else if(otpStatus=="MobileNoError")
    				{
	    				document.getElementById('OTPDCDIV').style.display='none';
	    				document.getElementById('ValidationMessage').innerHTML = 'Invalid data - Please check your Mobile Number.';
		    			 $("#ValidationMessage").show();
						 document.getElementById('proceed').disabled=false;
		    			 document.getElementById('proceedReset').disabled=false;
		    			 document.getElementById('cancel').disabled=false;
    				}
	    			
	    			else{
	    				document.getElementById('OTPDCDIV').style.display='none';
	    					document.getElementById('otpmsgDC').innerHTML = 'An Unexpected Error Occurred,Please Try again later.!<br />Only '+OTPRemaincnt+' attempts allowed';	
		    				
		    			 $("#otpmsgDC").show(); 
		    			 $("#CVmsg").hide();
		    			 $("#ValidationMessage").hide();
						 document.getElementById('proceed').disabled=false;
		    			 document.getElementById('proceedReset').disabled=false;
		    			 document.getElementById('cancel').disabled=false;
	    			}
	    			
					}
	    			
	    			//Added for Points Redemption
	    			else if(otpStatus =="PTSREDEM"){
	    				var PTSstatus=result[1];
	    				document.paypage.otpgencount.value=result[2];
	    				loadhide();
	    				
	    				if(PTSstatus=="PTSREDEMFAIL"){
	    					document.getElementById('CVmsg').innerHTML = 'Please check your card/mobile information with your issuer bank.<br />Only '+OTPRemaincnt+' attempts allowed';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(PTSstatus=="PTSREDEMTEX"){
	    	    			document.getElementById('CVmsg').innerHTML = 'OTP Server Timedout, Please Try again later.!<br />Only '+OTPRemaincnt+' attempts allowed';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(PTSstatus=="PTSREDEMUEX"){
	    	    			document.getElementById('CVmsg').innerHTML = 'An Unexpected Error Occurred,Please Try again later.!<br />Only '+OTPRemaincnt+' attempts allowed';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(PTSstatus=="PTSREDEMSE"){
	    	    			document.getElementById('CVmsg').innerHTML = 'OTP Server error,Please Try again later.!<br />Only '+OTPRemaincnt+' attempts allowed';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(PTSstatus=="PTSREDEMCARDNOTREG"){
	    					if(brdtype != configbrdtype){
	    						document.getElementById('CVmsg').innerHTML = 'Card number does not exist in our system. Please contact your issuer Bank.<br />Only '+OTPRemaincnt+' attempts allowed';
			    			}else{
			    				document.getElementById('CVmsg').innerHTML = 'Mobile number does not exist in our system. Please contact your issuer Bank.<br />Only '+OTPRemaincnt+' attempts allowed';
			    			}
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else{
	    					 document.getElementById('CVmsg').innerHTML = 'An Unexpected Error Occurred,Please Try again later.!<br />Only '+OTPRemaincnt+' attempts allowed';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
					}
	    			//Added for Points Redemption
	    			
	    			//Added for KFast Modification CR on 19/JAN/2023 - starts
	    			else if(otpStatus == "KFASTREG"){
	    				var kfastRegFailStatus=result[1];
	    				document.paypage.kfastRegAttemptCount.value=result[2];
	    				loadhide();
	    				
	    				if(kfastRegFailStatus == "KFASTREGFAIL"){
	    					document.getElementById('CVmsg').innerHTML = 'KFast Registration failed. <br />Please check your card/mobile information with your issuer bank.';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(kfastRegFailStatus == "KFASTREGFAILTEX"){
	    					document.getElementById('CVmsg').innerHTML = 'KFast Registration timeout, Please try again later';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(kfastRegFailStatus == "KFASTREGFAILUEX"){
	    					document.getElementById('CVmsg').innerHTML = 'An Unexpected Error Occurred During KFast Registration, Please try again later';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(kfastRegFailStatus == "KFASTREGFAILSE"){
	    					document.getElementById('CVmsg').innerHTML = 'KFast Registration error, Please try again later';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(kfastRegFailStatus == "KFASTREGDECLINE"){
	    					document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase());
		    	   			document.paypage.kfastRegDeclineValue.value="KFastRegDecline";
		    	   			document.paypage.action="kfastRegDecline.htm?paymentid="+payid+"&kfastRegDeclineValue="+document.paypage.kfastRegDeclineValue.value;
		    	   			document.paypage.submit();
	    				}
	    			}
	    			//Added for KFast Modification CR on 19/JAN/2023 - ends
	    			
	    			//Added for Customer Validation
	    			else{
	    				var CVstatus=result[1];
	    				//document.paypage.CVretrycount.value = result[2];
	    				loadhide();
	    				if(CVstatus=="CVFAIL"){
	    					document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase()); 	
			    			document.paypage.paymentCVdeclineValue.value="CVdecline";
			    	   		document.paypage.action="paymentCVdecline.htm?paymentid="+document.paypage.paymentId.value+"&paymentCVdeclineValue="+document.paypage.paymentCVdeclineValue.value;
			    	   		document.paypage.submit();
	    				}
	    				
	    				else if(CVstatus=="CVTEX"){
	    	    			document.getElementById('CVmsg').innerHTML = 'Customer Validation Server TimedOut,Please Try again later.!';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(CVstatus=="CVUEX"){
	    	    			document.getElementById('CVmsg').innerHTML = 'Unexcepted Error Occurred during Customer Validation,Please Try again later.!';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(CVstatus=="CVSE"){
	    	    			document.getElementById('CVmsg').innerHTML = 'Customer Validation Server error,Please Try again later.!';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else if(CVstatus=="CVCARDNOTREG"){
	    	    			document.getElementById('CVmsg').innerHTML = 'Customer Validation failed.Please contact your merchant/issuing bank';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
	    				else{
	    					 document.getElementById('CVmsg').innerHTML = 'Unexcepted Error Occurred during Customer Validation,Please Try again later.!';	
	    	    			 $("#CVmsg").show(); 
	    	    			 $("#otpmsgDC").hide();
	    	    			 $("#ValidationMessage").hide();
	    				 	 document.getElementById('proceed').disabled=false;
	    	    			 document.getElementById('proceedReset').disabled=false;
	    	    			 document.getElementById('cancel').disabled=false;
	    				}
					}
			    }
			    });

	     
	  		}
		     
	  		}
	
	//Added for Points Redemption = modified 
	//function payConfirmAjax(){
		function payConfirmAjax(val){

		//Fix done by Saqib - 25th April 2022

		//var _0x2b16f7=_0x32c1;function _0x32c1(_0x3b466b,_0x5b19e4){var _0x4e163b=_0x4e16();return _0x32c1=function(_0x32c13b,_0xe3e9f3){_0x32c13b=_0x32c13b-0x1a9;var _0x300976=_0x4e163b[_0x32c13b];return _0x300976;},_0x32c1(_0x3b466b,_0x5b19e4);}function _0x4e16(){var _0x2a3fac=['12129176VhRRZn','3647WxGPJh','211083ypMQlC','value','pgEidiaDiscountFlag','paypage','511485PHrarS','523738nFdSNu','1578WbgLzG','1281560XMSMQq','1122456mTcZBZ'];_0x4e16=function(){return _0x2a3fac;};return _0x4e16();}(function(_0x4c3d35,_0x494c97){var _0x141f96=_0x32c1,_0x4d2845=_0x4c3d35();while(!![]){try{var _0x2d2e9f=-parseInt(_0x141f96(0x1a9))/0x1+-parseInt(_0x141f96(0x1aa))/0x2+-parseInt(_0x141f96(0x1b0))/0x3+-parseInt(_0x141f96(0x1ad))/0x4+-parseInt(_0x141f96(0x1ac))/0x5+parseInt(_0x141f96(0x1ab))/0x6*(parseInt(_0x141f96(0x1af))/0x7)+parseInt(_0x141f96(0x1ae))/0x8;if(_0x2d2e9f===_0x494c97)break;else _0x4d2845['push'](_0x4d2845['shift']());}catch(_0x5ed3fa){_0x4d2845['push'](_0x4d2845['shift']());}}}(_0x4e16,0x42891),document['paypage']['discountedtranamount'][_0x2b16f7(0x1b1)]='',document[_0x2b16f7(0x1b3)][_0x2b16f7(0x1b2)][_0x2b16f7(0x1b1)]=0x0);
		
		//End of fix

		document.getElementById('proceedConfirm').disabled=true;
		document.getElementById('back').disabled=true;
		document.getElementById('confirmcancel').disabled=true;
		
		//Added for Points Redemption
		var langid=document.paypage.langID.value;
			var otpGenMethod = document.paypage.otpgenMethod.value;
			var otpDetails = "";
			var otpvalidateValue = "";
		if(otpGenMethod == "3"){
			otpDetails = document.paypage.otpdetails.value;
			otpvalidateValue = val;
		}
		//Added for Points Redemption
		
		/*Added for OTP at I-T-B level*/
      	document.paypage.OTPtranamtlmt.value=amountlimit;
      	document.paypage.OTPamtlmtidentifier.value=OTPamtlmtIdentifier;
      	/*Added for OTP at I-T-B level*/
      				
		//Added for Points Redemption - modified
		//if(((document.paypage.timeOver.value==0)&&(document.paypage.debitOTP.value!="")&&(document.paypage.debitOTP.value.length==6))||document.paypage.otpflgdiv.value =="0" )
		if(((document.paypage.timeOver.value==0)&&(document.paypage.debitOTP.value!="")&&(document.paypage.debitOTP.value.length==document.paypage.debitOTP.maxLength))||document.paypage.otpflgdiv.value =="0" || otpvalidateValue =="Resend" && document.paypage.timeOver.value==0)
		{	 	 
      		if(document.paypage.otpflgdiv.value =="1")
 			{
      				loadshow1();
      			var payid=document.paypage.paymentId.value;
      			var otpcode=document.paypage.debitOTP.value;
      			var paymentId ="41641300015758904165751000314890";
 		 		 var mode = 'ECB';
 		 		var encryptedOtp=byteArrayToHex(rijndaelEncrypt(otpcode,hexToByteArray(paymentId), mode));
      			var UserId=document.paypage.OtpUserID.value;
      			
      			//Added for prod issue - 29-jun-21
			    var PaymentStatus = 'INITIALIZED';
			    
    			/* Added for Points Redemption - modified  */
      			
			//Added for prod issue - 29-jun-21
      			var url = "post.php?paymentId="+payid+"&instId="+"203"+"&OtpValUserID="+UserId+"&debitOTP="+encryptedOtp+"&otpval=1"+"&Otptenant="+document.paypage.Otptenant.value+"&creditDebitCheck="+document.paypage.creditDebitCheck.value+"&otpvalcount="+document.paypage.otpvalcount.value+"&otpGenMethod="+otpGenMethod+"&otpDetails="+otpDetails+"&OtpAction="+otpvalidateValue+"&langID="+langid+"&pymtPgEiddiscntflg="+pymtPgEiddiscntflg+"&discountedtranamount="+document.paypage.discountedtranamount.value+"&PaymentStatus="+PaymentStatus;
      			 $.ajax({
      				type: 'post',
      				url: url,
      						datatype : 'json',
      						success : function(ajaxResponseData) {
      							var xml = jQuery(ajaxResponseData);
      							 var res = xml.find("msg").text(); 
      			var result=res.split("|");
      			var response=result[0];
      			var flag=result[1];
      			document.paypage.otpvalcount.value=result[2];
      			var ValidateOTPremainCnt=result[3];
      			loadhide1();
      			
      			//Added for Points Redemption - modified
      			if(result[4] == 1){
      				document.getElementById('Resend').style.display ="none";
      			}
      			//Added for Points Redemption - modified
      			
      			if(response=="200"){
      				document.paypage.otpConfirmationFlg.value=1;
      				document.paypage.BranDType.value=brdtype;
      				document.getElementById('proceedConfirm').disabled=false;
      				onProceed_buttonClicked();
      				document.getElementById('proceedConfirm').disabled=true;
      			    			}
      			    			
      							
      							//Added for Points Redemption
				      			else if (response == "OTPEXP")
					    			{
					    			document.getElementById('otpmsgDC2').innerHTML = 'OTP is Expired.<br />Only '+ValidateOTPremainCnt+' attempts allowed';
					    			
									$("#notificationbox").hide();
									//****************************
									//Added for Points Redemption - modified
									document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
									 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
									 document.getElementById('otpmsgDC2').style.color='#ff0000';
									//Added for Points Redemption - modified
								 $("#otpmsgDC2").show();
					    			document.paypage.debitOTP.value="";
					    			document.getElementById('proceedConfirm').disabled=false;
					    			document.getElementById('back').disabled=false;
					    			document.getElementById('confirmcancel').disabled=false;
					    			}
      			
				      			else if (response == "OTPINV")
				    			{
				    			document.getElementById('otpmsgDC2').innerHTML = 'Invalid OTP<br />Only '+ValidateOTPremainCnt+' attempts allowed';
				    			
							$("#notificationbox").hide();
							//****************************
							 $("#otpmsgDC2").show();
							//Added for Points Redemption - modified
								document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
								 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
								 document.getElementById('otpmsgDC2').style.color='#ff0000';
								//Added for Points Redemption - modified
				    			document.paypage.debitOTP.value="";
				    			document.getElementById('proceedConfirm').disabled=false;
				    			document.getElementById('back').disabled=false;
				    			document.getElementById('confirmcancel').disabled=false;
				    			}
				      			else if (response == "OTPRESENT")
				    			{
				    			document.getElementById('otpmsgDC2').innerHTML = 'OTP has been resent successfully';
				    			
								$("#notificationbox").hide();
								//****************************
								 $("#otpmsgDC2").show();
								//Added for QA fix
								 resetTimer(otpTimer);
								//Added for Points Redemption - modified
								 document.getElementById('otpmsgDC2').style.backgroundColor =' #23d620';
								 document.getElementById('otpmsgDC2').style.border='#127d1b 1px solid';
								 document.getElementById('otpmsgDC2').style.color=' #127d1b';
								//Added for Points Redemption - modified
				    			document.paypage.debitOTP.value="";
				    			document.getElementById('proceedConfirm').disabled=false;
				    			document.getElementById('back').disabled=false;
				    			document.getElementById('confirmcancel').disabled=false;
				    			}
      							//Added for Points Redemption
      							
      							else if (response == "409")
      			    			{
      			    			document.getElementById('otpmsgDC2').innerHTML = 'There was a problem with your card information. Please contact your issuer bank.<br />Only '+ValidateOTPremainCnt+' attempts allowed';
      			    			
								$("#notificationbox").hide();
								//****************************
								 $("#otpmsgDC2").show();
								//Added for Points Redemption - modified
									document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
									 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
									 document.getElementById('otpmsgDC2').style.color='#ff0000';
									//Added for Points Redemption - modified
      			    			document.paypage.debitOTP.value="";
      			    			document.getElementById('proceedConfirm').disabled=false;
      			    			document.getElementById('back').disabled=false;
      			    			document.getElementById('confirmcancel').disabled=false;
      			    			}
      			    			else if (response == "404")
      			    			{
      			    			document.getElementById('otpmsgDC2').innerHTML = 'User doesn&#39;t exist. Please contact your issuer bank.<br />Only '+ValidateOTPremainCnt+' attempts allowed';	
      			    			
								$("#notificationbox").hide();
								//****************************
								$("#otpmsgDC2").show();
								//Added for Points Redemption - modified
								document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
								 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
								 document.getElementById('otpmsgDC2').style.color='#ff0000';
								//Added for Points Redemption - modified
      			    			document.paypage.debitOTP.value="";
      			    			document.getElementById('proceedConfirm').disabled=false;
      			    			document.getElementById('back').disabled=false;
      			    			document.getElementById('confirmcancel').disabled=false;
      			    			
      			    			}
      			    			
      			    			
      			    			else if (response == "401")
      			    			{
      			    			document.getElementById('otpmsgDC2').innerHTML = 'Failed to validate the OTP please try again.<br />Only '+ValidateOTPremainCnt+' attempts allowed';	
      			    			
								$("#notificationbox").hide();
								//****************************      			    			
								$("#otpmsgDC2").show();
								//Added for Points Redemption - modified
								document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
								 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
								 document.getElementById('otpmsgDC2').style.color='#ff0000';
								//Added for Points Redemption - modified
      			    			document.paypage.debitOTP.value="";
      			    			document.getElementById('proceedConfirm').disabled=false;
      			    			document.getElementById('back').disabled=false;
      			    			document.getElementById('confirmcancel').disabled=false;
      			    			}
      			    			
      			    			//Card number validation
      			    			else if(response == "400")
      			    			{
      			    			document.getElementById('otpmsgDC2').innerHTML = 'Bad Request, the request is invalid or missing required information.<br />Only '+ValidateOTPremainCnt+' attempts allowed';
      			    			
								$("#notificationbox").hide();
								//****************************
								$("#otpmsgDC2").show();
								//Added for Points Redemption - modified
								document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
								 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
								 document.getElementById('otpmsgDC2').style.color='#ff0000';
								//Added for Points Redemption - modified
      			    			document.paypage.debitOTP.value="";
      			    			document.getElementById('proceedConfirm').disabled=false;
      			    			document.getElementById('back').disabled=false;
      			    			document.getElementById('confirmcancel').disabled=false;
      			    			}
      			    			
      			    			else if (response == "500")
      			    			{
      			    			document.getElementById('otpmsgDC2').innerHTML = 'An error occured while processing your request please try again.!<br />Only '+ValidateOTPremainCnt+' attempts allowed';	
       			    			
								$("#notificationbox").hide();
								//****************************
								$("#otpmsgDC2").show(); 
								//Added for Points Redemption - modified
								document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
								 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
								 document.getElementById('otpmsgDC2').style.color='#ff0000';
								//Added for Points Redemption - modified
      			    			document.paypage.debitOTP.value="";
      			    			document.getElementById('proceedConfirm').disabled=false;
      			    			document.getElementById('back').disabled=false;
      			    			document.getElementById('confirmcancel').disabled=false;
      			    			} 
      			    			else if (response == "UEX")
      			    			{
      			    			document.getElementById('otpmsgDC2').innerHTML = 'An Unexpected Error Occurred,Please Try again later.!<br />Only '+ValidateOTPremainCnt+' attempts allowed';	
      			    			
								$("#notificationbox").hide();
								//****************************      			    			 
								 $("#otpmsgDC2").show(); 
								//Added for Points Redemption - modified
									document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
									 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
									 document.getElementById('otpmsgDC2').style.color='#ff0000';
									//Added for Points Redemption - modified
      			    			document.paypage.debitOTP.value="";
      			    			document.getElementById('proceedConfirm').disabled=false;
      			    			document.getElementById('back').disabled=false;
      			    			document.getElementById('confirmcancel').disabled=false;
      			    			} 
      			    			else if (response == "TEX")
      			    			{
      			    			document.getElementById('otpmsgDC2').innerHTML = 'OTP Server Timedout, Please Try again later.!<br />Only '+ValidateOTPremainCnt+' attempts allowed';	
      			    			
								$("#notificationbox").hide();
								//****************************      			    			 
								 $("#otpmsgDC2").show(); 
								//Added for Points Redemption - modified
									document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
									 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
									 document.getElementById('otpmsgDC2').style.color='#ff0000';
									//Added for Points Redemption - modified
      			    			document.paypage.debitOTP.value="";
      			    			document.getElementById('proceedConfirm').disabled=false;
      			    			document.getElementById('back').disabled=false;
      			    			document.getElementById('confirmcancel').disabled=false;
      			    			} 
      			    			else if (response == "600")
      			    			{	
      			    			document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase()); 	
      			    			document.paypage.paymentOtpGenCancel.value="OtpvalCancel";
      			    	   		document.paypage.action="paymentOtpCancel.htm";
      			    	   		document.paypage.submit();
      			    			}
      			    			
      			    			//Added for Points Redemption
      			    			else if (response == "OTPVALERROR")
      			    			{	
      			    			document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase()); 	
      			    			document.paypage.paymentOtpGenCancel.value="OtpValError";
      			    	   		document.paypage.action="paymentOtpCancel.htm";
      			    	   		document.paypage.submit();
      			    			}
      			    			//Added for Points Redemption
      			    			
      			    			//Added for prod issue - 29-jun-21
				    			else if (response == "INVSTAT")
				    			{
				    				document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase()); 	
				    				document.paypage.ErrorText.value='Payment Page validation failed due to invalid Order Status:'+result[9];
				    	   			document.paypage.action="transactiondeclined.htm";
				    	   			document.paypage.submit();
				    			
				    			}
				    			//Added for prod issue - 29-jun-21
	    			
      			    			else{
      			    				
      			    				document.getElementById('otpmsgDC2').innerHTML = 'An Unexpected Error Occurred,Please Try again later.!<br />Only '+ValidateOTPremainCnt+' attempts allowed';	
         			    		
								$("#notificationbox").hide();
								//****************************
									 $("#otpmsgDC2").show(); 
									//Added for Points Redemption - modified
										document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
										 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
										 document.getElementById('otpmsgDC2').style.color='#ff0000';
										//Added for Points Redemption - modified
         			    			document.paypage.debitOTP.value="";
         			    			document.getElementById('proceedConfirm').disabled=false;
          			    			document.getElementById('back').disabled=false;
          			    			document.getElementById('confirmcancel').disabled=false;
      			    			}
      			    			}
      			});
      			 
 			}
      		else{
      		onProceed_buttonClicked();
      		}
      	}
		else{
 				
 				if(document.paypage.timeOver.value==1){
 					
 					$("#notificationbox").hide();
 					//****************************
 					//Added for Points Redemption - modified
					document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
					 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
					 document.getElementById('otpmsgDC2').style.color='#ff0000';
					//Added for Points Redemption - modified
 					$('#otpmsgDC2').show();
 		           document.getElementById('otpmsgDC2').innerHTML = "OTP has timed out.";  
 		           document.getElementById('proceedConfirm').disabled=false;
 		    			document.getElementById('back').disabled=false;
 		    			document.getElementById('confirmcancel').disabled=false;
 				}
 				else{
 					
 					$("#notificationbox").hide();
 					//****************************
 					$("#otpmsgDC2").show();
 					//Added for Points Redemption - modified
					document.getElementById('otpmsgDC2').style.backgroundColor ='#f7dadd';
					 document.getElementById('otpmsgDC2').style.border='#ff0000 1px solid';
					 document.getElementById('otpmsgDC2').style.color='#ff0000';
					//Added for Points Redemption - modified
 					document.getElementById('otpmsgDC2').innerHTML = "kindly Enter the "+ document.paypage.debitOTP.maxLength +" digit OTP sent to your mobile";	
 					document.getElementById('proceedConfirm').disabled=false;
 		    			document.getElementById('back').disabled=false;
 		    			document.getElementById('confirmcancel').disabled=false;
 				}
 				 
 			}
	}

		
	function onProceed_buttonClicked() {
		
		//Added for Points Redemption 
		 /* if(document.paypage.creditDebitCheck.value=="" )
  		{
 			   document.paypage.creditDebitCheck.value="D";
  		}  */
		
      	 if(document.paypage.creditDebitCheck.value=="" && true)
      		{
	 			   document.paypage.creditDebitCheck.value="D";
      		}
      	else if(document.paypage.creditDebitCheck.value=="" &&  false){
      		
      		document.paypage.creditDebitCheck.value="C";
      		
      		} 
      	//Added for Points Redemption
      	
      	//Added for prod issue - 29-jun-21
      	document.paypage.paymentStatus.value=1;
      	//Added for prod issue - 29-jun-21
      
		//var creditDebitCheckVal = (document.paypage.creditDebitCheck.value=="" || document.paypage.creditDebitCheck.value==undefined) ? $('#creditDebitCheck').val():document.paypage.creditDebitCheck.value;	
		var creditDebitCheckVal=document.paypage.creditDebitCheck.value;
 
		if(creditDebitCheckVal=="D")
			{
			if(true)
			{
				var debitMonth = $("#debitMonthSelect").val();
				var debitYear = $("#debitYearSelect").val(); 
				$('#debitMonthSelect').remove();
				$('#debitYearSelect').remove();
				}else{
					var debitMonth = $("#debitMonth").val();
					var debitYear = $("#debitYear").val(); 
				}
			var debitCardNumber = $("#debitCardNumber").val();
			var cardPin = $("#cardPin").val(); 
			
			var encryptedDbCdNumber = "";
			var encryptedDebitMonth = "";
			var encryptedDebitYear = "";
			var encryptedCardPin = "";
			var paymentId ="41641300015758904165751000314890";		
			var mode = 'ECB';
			encryptedDbCdNumber=byteArrayToHex(rijndaelEncrypt(debitCardNumber,hexToByteArray(paymentId), mode));			
			if(cardPin != undefined)
			{
			encryptedCardPin=byteArrayToHex(rijndaelEncrypt(cardPin,hexToByteArray(paymentId), mode));
			}			
			encryptedDebitMonth=byteArrayToHex(rijndaelEncrypt(debitMonth,hexToByteArray(paymentId), mode));			
			encryptedDebitYear=byteArrayToHex(rijndaelEncrypt(debitYear,hexToByteArray(paymentId), mode));			

						
			callDebitSave(document.paypage,encryptedDbCdNumber,encryptedDebitMonth, encryptedDebitYear, encryptedCardPin);
			
			}
				
		else if(creditDebitCheckVal=="SVC")
		{
			var encryptedCrCdNumber = "";
			var encryptedSavedCardCardPin = "";
			
			
			 var cardCvv = "";
			 var cardPin = "";
			 var cardNumber = document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[0];
			 var cardType =document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[1];
			 var useinst= document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[2];
			 var authenticationtype= document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[3];
			 var savedbrandtype= document.querySelector('input[name="savedCardNumber"]:checked').value.split(",")[4];
			  
			 if(savedbrandtype != null && savedbrandtype == 'MA')
			 {
				 cardCvv='';
				 cardPin='';
			 }
			 else
		     {
				
					 if(cardType=='D')
					{
						
						 cardCvv = $("#debitsavedcardCVV").val();
						 cardPin = $("#debitsavedcardPIN").val();
						
					}
					 
			 }

			var paymentId ="41641300015758904165751000314890";			
			var mode = 'ECB';			
			encryptedCrCdNumber=byteArrayToHex(rijndaelEncrypt(cardNumber,hexToByteArray(paymentId), mode));	
			
			
			if(cardPin != undefined && cardPin!='')
			{
				encryptedSavedCardCardPin = byteArrayToHex(rijndaelEncrypt(cardPin,hexToByteArray(paymentId), mode));
			}
			
			document.paypage.usingFc.value="on";
			callSavedCardSave(document.paypage,encryptedCrCdNumber,encryptedSavedCardCardPin);

		} 
		
		//Added for Points Redemption
		else if(creditDebitCheckVal=="C")
		{
		if(true)
		{
			var debitMonth = $("#debitMonthSelect").val();
			var debitYear = $("#debitYearSelect").val(); 
			$('#debitMonthSelect').remove();
			$('#debitYearSelect').remove();
			}else{
				var debitMonth = $("#debitMonth").val();
				var debitYear = $("#debitYear").val(); 
			}
		var debitCardNumber = $("#debitCardNumber").val();
		
		var encryptedDbCdNumber = "";
		var encryptedDebitMonth = "";
		var encryptedDebitYear = "";
		
		var paymentId ="41641300015758904165751000314890";		
		var mode = 'ECB';
		encryptedDbCdNumber=byteArrayToHex(rijndaelEncrypt(debitCardNumber,hexToByteArray(paymentId), mode));			
				
		encryptedDebitMonth=byteArrayToHex(rijndaelEncrypt(debitMonth,hexToByteArray(paymentId), mode));			
		encryptedDebitYear=byteArrayToHex(rijndaelEncrypt(debitYear,hexToByteArray(paymentId), mode));			

					
		callCreditSave(document.paypage,encryptedDbCdNumber,encryptedDebitMonth, encryptedDebitYear);
		
		}
		//Added for Points Redemption
		
	}
	function onReset_buttonClicked()
	{
		var checkFC; var checkDC;
		if(document.getElementById("savedCardDiv").style.display == 'block'){
			checkFC = document.getElementById("paymentOptionFC").checked;
		}
		if(document.getElementById("FCUseDebitEnable").style.display == 'block'){
			checkDC = document.getElementById("paymentOptionDC").checked;
		}
		
		document.getElementById("paypage").reset();
		
		if(checkFC){
			document.getElementById("paymentOptionFC").checked=true;
		}
		if(checkDC){
			document.getElementById("paymentOptionDC").checked=true;
		}
		document.getElementById('dcprefix').innerHTML='<select  class="paymentselect"><option>Prefix</option></select>';
		
	}
	/**Added for One Click Checkout**/
	//SavedCard

	
	function callSavedCardSave(formObject, encryptedCrCdNumber,encryptedCreditCardPin) {
  	
			document.paypage.proceed.disabled = true;
			document.paypage.cancel.disabled = true;
			
			if (document.getElementById("debitNumber")) {
  		   		document.getElementById("debitNumber").value="";
  		   	}
  		   	
  		  	if (document.getElementById("dcprefix")) {
		   		document.getElementById("dcprefix").value="";
		   	}
			
			if (document.getElementById("debitsavedcardPIN")) {
		   		document.getElementById("debitsavedcardPIN").value="";
		   	}
			
	 	document.paypage.encryptedCardNumber.value=encryptedCrCdNumber;
	 	document.paypage.encryptedSavedCardPin.value = encryptedCreditCardPin;	
		document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase());	
		document.paypage.action="paymentrouter.htm";
		document.paypage.submit();
			
			
		}
  	/**Added for One Click Checkout**/
  	
  	
   		//Debit
   		function callDebitSave(formObject, encryptedDbCdNumber, encryptedDebitMonth, encryptedDebitYear, encryptedCardPin) {
	  
	  	
   			document.paypage.confirm.disabled = true;
   			document.paypage.cancel.disabled = true;
   			document.paypage.reset.disabled = true;
   			   			
   			/* var fcListDebitCnt = 0;
   			
   			
   			if(fcListDebitCnt == 0) {
   			
   			document.paypage.debitCardNumber.value="****************";
   		   	 document.paypage.encryptedCardNumber.value=encryptedDbCdNumber;
   				document.paypage.fcExpCheck.value = "";
   			} */
   			
   			document.paypage.debitCardNumber.value="****************";
  		   	document.paypage.encryptedCardNumber.value=encryptedDbCdNumber;
  		   	 
   			if (document.getElementById("debitNumber")) {
  		   		document.getElementById("debitNumber").value="";
  		   	}
  		   	
  		  	if (document.getElementById("dcprefix")) {
		   		document.getElementById("dcprefix").value="";
		   	}
			
			if (document.getElementById("debitsavedcardPIN")) {
		   		document.getElementById("debitsavedcardPIN").value="";
		   	}
			
   		 if(false){
   			document.paypage.debitMonth.value = "**"; 
			document.paypage.debitYear.value = "****";
   		 }
   			document.paypage.encryptedMonth.value = encryptedDebitMonth; 
   			
   			
   			document.paypage.encryptedYear.value = encryptedDebitYear;
   			
   			if(encryptedCardPin != '')
   			{
   			document.paypage.cardPin.value = encryptedCardPin;
   			}
   		   			
   			
	   			document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase());	
	   			document.paypage.action="paymentrouter.htm";
	   			document.paypage.submit();
   			
   			
   		}
   		
   		//Added for Points Redemption 
   		function callCreditSave(formObject, encryptedDbCdNumber, encryptedDebitMonth, encryptedDebitYear) {
	  
	  	
   			document.paypage.confirm.disabled = true;
   			document.paypage.cancel.disabled = true;
   			document.paypage.reset.disabled = true;
   			   			
   			
   			document.paypage.debitCardNumber.value="****************";
  		   	document.paypage.encryptedCardNumber.value=encryptedDbCdNumber;
  		   	 
   			if (document.getElementById("debitNumber")) {
  		   		document.getElementById("debitNumber").value="";
  		   	}
  		   	
  		  	if (document.getElementById("dcprefix")) {
		   		document.getElementById("dcprefix").value="";
		   	}
			
			if (document.getElementById("debitsavedcardPIN")) {
		   		document.getElementById("debitsavedcardPIN").value="";
		   	}
			
   		 if(false){
   			document.paypage.debitMonth.value = "**"; 
			document.paypage.debitYear.value = "****";
   		 }
   			document.paypage.encryptedMonth.value = encryptedDebitMonth; 
   			
   			
   			document.paypage.encryptedYear.value = encryptedDebitYear;
   			
	   			document.paypage.cspg.value=formParameterValue(document.paypage,encode64(document.paypage.CSRFToken.value).toString().toUpperCase());	
	   			document.paypage.action="paymentrouter.htm";
	   			document.paypage.submit();
   			
   		}
   	//Added for Points Redemption
   		
	</script>
	
	
	<script type="text/javascript">
	if(window.history.forward(1) != null)
	{
	         window.history.forward(1);
	}
		
//	var cardNoTemp = "";
	function initRequest()
	{
		if (window.ActiveXObject) 
		{ 
	   		req = new ActiveXObject("Microsoft.XMLHTTP");
		}
	    else if(window.XMLHttpRequest)
	   	{
	    	req = new XMLHttpRequest();
	    }
	    return req;
	}
	
	function performMaestroRupayCheck(cardNo)
	{
		if(false)
		{
			document.paypage.selectedPymntInstrmnt.value = document.paypage.creditDebitCheck.value;
		}
		
		    if (cardNo=="")
			return false; 		
		
		/* if (cardNoTemp == cardNo)
			return false; */
			var payID=document.paypage.paymentId.value;
	//	cardNoTemp = cardNo; 
		
		var url = "checkMaestroBrand.htm?paymentId="+payID+"&termId="+135001+"&instId="+203+"&merchId="+1350+"&cardNo="+cardNo;
		var req = initRequest();
		req.open("POST",url,false);
	    req.send(null);
		if(req.status==200)
		{
			var onOffFlg  = 0;
			var msg = req.responseXML.getElementsByTagName("msg")[0];
			if(msg != null) {
				if("undefined" != msg.getElementsByTagName("brandType"))
				{
					var BrandType  = msg.getElementsByTagName("brandType")[0].childNodes[0].nodeValue;
					document.paypage.checkBrand.value=BrandType;
					if("undefined" != msg.getElementsByTagName("onOffFlg"))
					{
						onOffFlg  = msg.getElementsByTagName("onOffFlg")[0].childNodes[0].nodeValue;
						document.paypage.onOffType.value=onOffFlg;
					}
					if(BrandType=="MA")
					{
						 if(document.paypage.selectedPymntInstrmnt.value=='C')	
						  {
							if (document.getElementById("cardCVVHideShow"))
								document.getElementById("cardCVVHideShow").style.display = 'none';
							if (document.getElementById("cardCVVHideShow1"))
								document.getElementById("cardCVVHideShow1").style.display = 'none';
							if (document.getElementById("cardCVVD2HideShow"))
								document.getElementById("cardCVVD2HideShow").style.display = 'none';
							alert ("You have entered a Maestro Card. So the transaction will be processed without CVV..\n If your Maestro card does not have expiry date then request you to select Month as 12 and Year as 2049");
							document.getElementById("maestro").value = "MA";
						  }
						 else if(document.paypage.selectedPymntInstrmnt.value=='OC')
						 {
							 if (document.getElementById("otherCardCVVHideShow"))
									document.getElementById("otherCardCVVHideShow").style.display = 'none';
							 if (document.getElementById("otherCardCVVHideShow1"))
									document.getElementById("otherCardCVVHideShow1").style.display = 'none';
							 if (document.getElementById("otherCreditcardCVVD2HideShow"))
									document.getElementById("otherCreditcardCVVD2HideShow").style.display = 'none';
							 alert ("You have entered a Maestro Card. So the transaction will be processed without CVV..\n If your Maestro card does not have expiry date then request you to select Month as 12 and Year as 2049");
							 document.getElementById("maestro").value = "MA";
						  }	
						 
						 else if(document.paypage.selectedPymntInstrmnt.value=='D')	
						  {
							if (document.getElementById("debitCardCVVHideShow"))
								document.getElementById("debitCardCVVHideShow").style.display = 'none';
							if (document.getElementById("cardCVD2HideShowPIN"))
								document.getElementById("cardCVD2HideShowPIN").style.display = 'none';
							alert ("You have entered a Maestro Card. So the transaction will be processed without CVV..\n If your Maestro card does not have expiry date then request you to select Month as 12 and Year as 2049");
							document.getElementById("maestro").value = "MA";
						  }
						 else if(document.paypage.selectedPymntInstrmnt.value=='OD')
						 {
							 if (document.getElementById("otherDebitCardCVVHideShow"))
									document.getElementById("otherDebitCardCVVHideShow").style.display = 'none';
							 if (document.getElementById("otherDebitCardCVD2HideShowPIN"))
									document.getElementById("otherDebitCardCVD2HideShowPIN").style.display = 'none';
							 alert ("You have entered a Maestro Card. So the transaction will be processed without CVV..\n If your Maestro card does not have expiry date then request you to select Month as 12 and Year as 2049");
							 document.getElementById("maestro").value = "MA";
						  }
							
								
							document.getElementById("rdc").value = "";
							
					}
					else if(BrandType=="RDC" && false )
					{
						
						//document.paypage.fcFlag.value=0;
						document.paypage.siFlag.value=0;
						
						$("#siflg").hide();
						/* $("#checkprepaidFC").hide();
						$("#checkFC").hide();
						$("#checkDebitFC").hide();
						$("#fcDetails").hide(); */
						if(document.paypage.selectedPymntInstrmnt.value=='D')	
						{		
							if(document.paypage.debitSel.value=='VP' || document.paypage.debitSel.value=='V') {	
								if(document.getElementById("cardCVD2HideShowPIN"))
									document.getElementById("cardCVD2HideShowPIN").style.display = 'block';
								if(document.getElementById("debitCardCVVHideShow"))
									document.getElementById("debitCardCVVHideShow").style.display = 'none';
								if(document.getElementById("savedCardCVVHideShow"))
									document.getElementById("savedCardCVVHideShow").style.display = 'none';
							}
							document.getElementById("rdc").value = "DRDC";
						}
						else if(document.paypage.selectedPymntInstrmnt.value=='C')	
						{	
							if(document.paypage.creditSel.value=='VP' || document.paypage.creditSel.value=='V') {						
								if (document.getElementById("cardCVVD2HideShow"))
									document.getElementById("cardCVVD2HideShow").style.display = 'block';
								if (document.getElementById("cardCVVHideShow1"))
									document.getElementById("cardCVVHideShow1").style.display = 'none';
								if (document.getElementById("cardCVVHideShow"))
									document.getElementById("cardCVVHideShow").style.display = 'none';
								if(document.getElementById("savedcardCVVD2HideShow"))
									document.getElementById("savedcardCVVD2HideShow").style.display = 'none';
							}
							document.getElementById("rdc").value = "CRDC";
						}
						else if(document.paypage.selectedPymntInstrmnt.value=='OC')	
						{							
							if(document.paypage.creditSel.value=='VP' || document.paypage.creditSel.value=='V') {								
								if (document.getElementById("otherCreditcardCVVD2HideShow"))
									document.getElementById("otherCreditcardCVVD2HideShow").style.display = 'block';
								if (document.getElementById("savedcardCVVD2HideShow"))
									document.getElementById("savedcardCVVD2HideShow").style.display = 'block';
								if (document.getElementById("otherCardCVVHideShow1"))									
									document.getElementById("otherCardCVVHideShow1").style.display = 'none';									
								if (document.getElementById("otherCardCVVHideShow"))
									document.getElementById("otherCardCVVHideShow").style.display = 'none';
								if (document.getElementById("savedCardCVVHideShow"))
									document.getElementById("savedCardCVVHideShow").style.display = 'none';
							}
							document.getElementById("rdc").value = "OCRDC";
						}else if(document.paypage.selectedPymntInstrmnt.value=='OD')	
						{
							//if(document.paypage.debitSel.value=='VP' || document.paypage.debitSel.value=='V') {	
								if(document.getElementById("otherDebitCardCVD2HideShowPIN"))
									document.getElementById("otherDebitCardCVD2HideShowPIN").style.display = 'block';
								if(document.getElementById("otherDebitCardCVVHideShow"))
									document.getElementById("otherDebitCardCVVHideShow").style.display = 'none';
								if(document.getElementById("savedCardCVD2HideShowPIN"))
									document.getElementById("savedCardCVD2HideShowPIN").style.display = 'none';
								if(document.getElementById("savedCardCVVHideShow"))
									document.getElementById("savedCardCVVHideShow").style.display = 'block';
							//}
							document.getElementById("rdc").value = "ODRDC";
						}
						
						
						else if(document.paypage.selectedPymntInstrmnt.value=='SVC')	
						{		
							if(document.paypage.debitSel.value=='VP' || document.paypage.debitSel.value=='V') {	
								if(document.getElementById("savedcardCVD2HideShowPIN"))
									document.getElementById("savedcardCVD2HideShowPIN").style.display = 'block';
								if(document.getElementById("savedCardCVVHideShow"))
									document.getElementById("savedCardCVVHideShow").style.display = 'none';
							}
							document.getElementById("rdc").value = "DRDC";
						}
						
						
					//	document.getElementById("rdc").value = "RDC";
						document.getElementById("maestro").value = "";
							
					}else
						{
							document.getElementById("rdc").value = "";
							document.getElementById("maestro").value = "";
					
						if(document.paypage.selectedPymntInstrmnt.value=='C')
							{
							if(document.paypage.creditSel.value=='VP' || document.paypage.creditSel.value=='V') {	
								if (document.getElementById("cardCVVHideShow"))
									document.getElementById("cardCVVHideShow").style.display = 'block';
								if (document.getElementById("cardCVVHideShow1"))
									document.getElementById("cardCVVHideShow1").style.display = 'block';
								if (document.getElementById("cardCVVD2HideShow"))
									document.getElementById("cardCVVD2HideShow").style.display = 'none';
								if (document.getElementById("savedcardCVVHideShow"))
									document.getElementById("savedcardCVVHideShow").style.display = 'block';
								}
							}
						else if(document.paypage.selectedPymntInstrmnt.value=='D')
							{
								if(document.paypage.debitSel.value=='VP' || document.paypage.debitSel.value=='V') {
									if(document.getElementById("cardCVD2HideShowPIN"))
									document.getElementById("cardCVD2HideShowPIN").style.display = 'none';
									if(document.getElementById("debitCardCVVHideShow"))
										document.getElementById("debitCardCVVHideShow").style.display = 'block';
									if(document.getElementById("savedcardCVD2HideShowPIN"))
										document.getElementById("savedcardCVD2HideShowPIN").style.display = 'none';
									if(document.getElementById("savedCardCVVHideShow"))
										document.getElementById("savedCardCVVHideShow").style.display = 'block';
								}
							}
						else if(document.paypage.selectedPymntInstrmnt.value=='OC')	
						{	
							if(document.paypage.creditSel.value=='VP' || document.paypage.creditSel.value=='V') {						
								if (document.getElementById("otherCreditcardCVVD2HideShow"))
									document.getElementById("otherCreditcardCVVD2HideShow").style.display = 'none';
								if (document.getElementById("otherCardCVVHideShow1"))
									document.getElementById("otherCardCVVHideShow1").style.display = 'block';
								if (document.getElementById("otherCardCVVHideShow"))
									document.getElementById("otherCardCVVHideShow").style.display = 'block';
								if (document.getElementById("savedcardCVVD2HideShow"))
									document.getElementById("savedcardCVVD2HideShow").style.display = 'none';
							}
						}else if(document.paypage.selectedPymntInstrmnt.value=='OD')	
						{		
							if(document.paypage.debitSel.value=='VP' || document.paypage.debitSel.value=='V') {	
								if(document.getElementById("otherDebitCardCVD2HideShowPIN"))
										document.getElementById("otherDebitCardCVD2HideShowPIN").style.display = 'none';
								if(document.getElementById("savedCardCVD2HideShowPIN"))
										document.getElementById("savedCardCVD2HideShowPIN").style.display = 'none';
								if(document.getElementById("otherDebitCardCVVHideShow"))
										document.getElementById("otherDebitCardCVVHideShow").style.display = 'block';
								if(document.getElementById("savedCardCVVHideShow"))
										document.getElementById("savedCardCVVHideShow").style.display = 'block';
							}
						}
						}
						
				}
			}
			
		}
	}
	
		/* code added for back button fix -Starts */
	
	var historyCount = 0;
	window.onload = function () {
		
	  //  if (typeof history.pushState === "function" && document.paypage.backFlag.value=="1" ) {
		  if (typeof history.pushState === "function" && 0==1){
	        history.pushState("jibberish", null, null);
	        window.onpopstate = function () {
	            history.pushState('newjibberish', null, null);
	         //   if (historyCount >-1 && document.paypage.backFlag.value=="1") {
	        	 if (historyCount >-1 && 0==1 ) {
	            	onback();
	            }
	            historyCount++;
	           
	        };
	    }
	}
	
	
	 
	 function onback(){
			if(0==1){
			document.paypage.action="gstnErrorPage.htm?errorCode=PMT9014";  		
			document.paypage.submit();  
			}
		}
	 
	 function onback_Click(){
			var payid=document.paypage.paymentId.value;
			//Added for prod issue - 29-jun-21
			//document.paypage.pymntpagebkstatus.value=1;
			
			if (document.getElementById("debitNumber")) {
  		   		document.getElementById("debitNumber").value="";
  		   	}
  		   	
  		  	if (document.getElementById("dcprefix")) {
		   		document.getElementById("dcprefix").value="";
		   	}
  		  	
  		  	if (document.getElementById("cardPin")) {
		   		document.getElementById("cardPin").value="";
		   	}
			
			if (document.getElementById("debitsavedcardPIN")) {
		   		document.getElementById("debitsavedcardPIN").value="";
		   	}
			
			document.paypage.action="paymentpage.htm?PaymentID="+payid;  		
			document.paypage.submit();  
			
		}
	
		//code added for GSTN fix -starts
		function onRefresh()
		{
		      
			if(0==1){
				 	document.paypage.action="gstnErrorPage.htm?errorCode=PMT9015";  		
					document.paypage.submit();  
			}
			
		}   
		//code added for GSTN fix -ends
		
		

	 

	
function onclckCancel()
{
		     if(false)
			{
		    	 document.paypage.fCFlg.value=document.paypage.fCFlg.value;	
			}
 	         document.paypage.action="paymentcancel.htm?paymentid="+document.paypage.paymentId.value;  		
 			 document.paypage.submit();  
}


</script>

<script type="text/javascript">


		function cancelPage()
		{
			//code added for GSTN fix -starts
			if(0==1){
				document.paypage.action="gstnErrorPage.htm?errorCode=PMT9016";  		
				document.paypage.submit();  
		   	         
			}else{
				
				if (document.getElementById("debitNumber")) {
	  		   		document.getElementById("debitNumber").value="";
	  		   	}
	  		   	
	  		  	if (document.getElementById("dcprefix")) {
			   		document.getElementById("dcprefix").value="";
			   	}
	  		  	
	  		  	if (document.getElementById("cardPin")) {
			   		document.getElementById("cardPin").value="";
			   	}
				
	  		  	if (document.getElementById("debitsavedcardPIN")) {
			   		document.getElementById("debitsavedcardPIN").value="";
			   	}
				
			   	if (document.getElementById("debitCardNumber")) {
			   		document.getElementById("debitCardNumber").value="";
			   	}
				
				document.paypage.action="paymentcancel.htm?paymentid="+document.paypage.paymentId.value;  		
				document.paypage.submit();  
			}
			//code added for GSTN fix -ends 
		}
		
		//code added for GSTN fix -starts
		function onRefresh()
		{
		      
			if(0==1){
				 	document.paypage.action="gstnErrorPage.htm?errorCode=PMT9015";  		
					document.paypage.submit();  
			}
			
		}   
		//code added for GSTN fix -ends
	function cptchaMsg()
	{
	alert('By entering the code you see in the box, you help prevent automated transactions. This reduces system loads and ensures better performance of our services. If no image appears, please make sure your browser is set to display images and try again. If you are not sure what the code is, make your best guess. If you guess incorrectly, you will have another oppurtunity provided with a different code.');
	}
   
   function cvvMsg()
   {
   alert('The Card Verification Value (CVV) is a 3-digit number found on the signature panel on the back of your card following the printed Card number.');
   } 
   function expMsg()
   {
   alert('Customers are requested to enter Valid From / Valid Thru / Expiry Date. These details would be available on the front panel of the card.');
   }
   function pinMsg()
   {
   alert('Personal Identification Number (PIN) is the secret numeric password used to authenticate the user while performing any ATM, Point of sale	and internet transactions. The Cardholder expresses authority to the Bank for carrying out transactions and instructions authenticated by the PIN. You will be required to enter your PIN only once for every transaction.');
   }
 
    


 
 

</script>

<script type="text/javascript">
function openCapWin()
{
	window.open('help.htm?page=captcha','_blank','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width=520, height=320')
}
function openCvvWin()
{
	window.open('help.htm?page=cvv','_blank','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width=520, height=370')
}
function openPinWin()
{
	window.open('help.htm?page=pin','_blank','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width=520, height=300')
}
function openExpiryDateWin()
{
	window.open('help.htm?page=expiryDate','_blank','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width=520, height=250')
}
function openEcomPinWin()
{
	window.open('help.htm?page=ecomPin','_blank','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width=520, height=400')
}
function openAtmEcomPinWin()
{
	window.open('help.htm?page=atmEcomPin','_blank','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width=520, height=400')
}
</script>


<noscript>
<style>
#PayPageEntry{
display: none;
}
#payConfirm{
display: none;
}
</style>	    
	<div  class="wrapper">
		<div class="contentBox" style="height: 430px;">
		<img class="logoHead" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpCNzMyREY0ODgxMzcxMUU5QUQ1RUFEMjAwMEY3MDU4NCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCNzMyREY0OTgxMzcxMUU5QUQ1RUFEMjAwMEY3MDU4NCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkI3MzJERjQ2ODEzNzExRTlBRDVFQUQyMDAwRjcwNTg0IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkI3MzJERjQ3ODEzNzExRTlBRDVFQUQyMDAwRjcwNTg0Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJ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" alt="logo" /> 
		<img  class="logoSep" src='images/paypage-images/separator.jpg 'alt="spacer" />
			<div  class="notification" style="border: #ff0000 2px solid; margin-top: 15%;background-color: #f7dadd; font-size: 12px;
	    						font-family: helvetica, arial, sans serif;
	    						color: #ff0000;
	   							 padding-right: 6px; width:357px">
				<center><FONT color="red" style="font-weight:bolder">JavaScript Error</FONT></center>
				<br />
				<center><FONT color="red" style="font-weight:bolder">Your browser doesn&#39;t support JavaScript or it&#39;s disabled!!</FONT></center>
				<br />
				<center><FONT color="red" style="font-weight:bolder">Please enable JavaScript in the Browser</FONT></center>
				<center><FONT color="red" style="font-weight:bolder">before trying again</FONT></center>
		   </div>
		</div>
	</div>
</noscript>
<!--Code Ends  -->


																				
<form action="" name="paypage" id="paypage" method="post" autocomplete="off" oncontextmenu="return false;"> 


					
					
<div id="PayPageEntry">
<div class="wrapper">
		<div class="add"> </div>
		<div class="contentBox"> 	
			
			  <img class="logoHead" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpCNzMyREY0ODgxMzcxMUU5QUQ1RUFEMjAwMEY3MDU4NCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCNzMyREY0OTgxMzcxMUU5QUQ1RUFEMjAwMEY3MDU4NCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkI3MzJERjQ2ODEzNzExRTlBRDVFQUQyMDAwRjcwNTg0IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkI3MzJERjQ3ODEzNzExRTlBRDVFQUQyMDAwRjcwNTg0Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJ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" alt="logo"> 
			  <img class="logoSep" src="images/paypage-images/separator.jpg " alt="spacer">
					<div class="innerwrapper">
					 <div class="notification" style="border: #ff0000 1px solid; margin-top: 2%;background-color: #f7dadd; font-size: 12px;
    						font-family: helvetica, arial, sans serif;
    						color: #ff0000;
   							 padding-right: 15px; display:none;" id="otpmsgDC">
					 </div>
					 
					 <!--Customer Validation  for knet-->
					 <div class="notification" style="border: #ff0000 1px solid; margin-top: 2%;background-color: #f7dadd; font-size: 12px;
    						font-family: helvetica, arial, sans serif;
    						color: #ff0000;
   							 padding-right: 12px; display:none;" id="CVmsg">
					 </div>
					
					 <p class="paymentheader" style="padding-top:18px">Billing Information</p>
					 
					 <div class="row">
                   <div class="col"><span class="paymentlabel">Merchant: </span></div> 
                   <div class="col"><span class="paymentdata">Taa Lab Company</span> </div>
                  
                  </div>
                  
                   <div class="row">
                   <div class="col">
                        <span class="paymentlabel">
                            Website: 
                        </span>	</div>
                       <div class="col">  <span class="paymentdata">
                        https://www.dawrat.com
                        </span></div>
                    </div>
                    
                    <div class="row" id="OrgTranxAmt">
                     <div class="col">
                        <span class="paymentlabel">
                            Amount:
                        </span></div>
                        <div class="col">
                        <span class="paymentdata">
                            KD&nbsp;25.000
                            </span></div>
                    </div>
                    
                    <!-- Added for PG Eidia Discount starts   -->
                    
                    <div class="row" id="DiscntRate" style="display:none;">
                     
                    </div>
                    <div class="row" id="DiscntedAmt" style="display:none;">
                     
                    </div>
                    
                    <!-- Added for PG Eidia Discount ends   -->
                    
                    </div>
                    
                    
				
                    
                    
                    <div id="savedCardDiv" style="display:none;">
                     
                     <div class="row" id="storedpan" style="float:right;">  
                    
                    
                  
                  
                 				 <!-- Commented the bank name display for kfast starts -->
																				 <span class="paymentdata" style="margin-left: 20px;">
																				
																				
																				</span>
													                             		
													                  <!-- Commented the bank name display for kfast ends -->      
													                  
													                  
																				      	             
													                            <!-- </option> -->
													                     
													                       
													           
                
					  </div>
					    <br>
					    <!-- Added for Points Redemption -->
												                    
					  <div id="row">
						<div class="column">
						<span class="paymentlabel">
						PIN :
						</span>
						</div>
						<div class="column" style="margin-left: 0px;">
						<input name="debitsavedcardPIN" id="debitsavedcardPIN" autocomplete="off" title="Should be in number. Length should be 4" type="password" size="4" maxlength="4" class="paymentinput" style="width: 125%; " onkeyup="return ValidateNumPin(event);" onkeypress="return ValidateNumPin(event);" ondrop="return false;" oncopy="return false;" onpaste="return false;"> 
					   </div>
					  </div>
					  
					  <!-- Added for Points Redemption -->
                    </div>
                    
                    
                    <div id="FCUseDebitEnable">
                    <p class="paymentheader">Card Information</p> 
            		<div class="row">
            	<div class="col"><span class="paymentlabel">Select Your Bank:</span></div> 
             <div class="col">
                <select class="paymentselect bank" onchange="javascript:validatebank(this.value)">
                <option value="bankname" title="Select Your Bank">
										Select Your Bank
									</option>
                  
                		<option value="201835291539833|Al Ahli Bank of Kuwait [ABK]|0.000" title="Al Ahli Bank of Kuwait [ABK]"> 
                	                       
                		Al Ahli Bank of Kuwait [ABK]</option>   
                		<option value="201835208495117|Al Rajhi Bank [Rajhi]|0.000" title="Al Rajhi Bank [Rajhi]"> 
                	                       
                		Al Rajhi Bank [Rajhi]</option>   
                		<option value="201835208533245|Bank of Bahrain Kuwait [BBK]|0.000" title="Bank of Bahrain Kuwait [BBK]"> 
                	                       
                		Bank of Bahrain Kuwait [BBK]</option>   
                		<option value="201835291426160|Boubyan Bank [Boubyan]|0.000" title="Boubyan Bank [Boubyan]"> 
                	                       
                		Boubyan Bank [Boubyan]</option>   
                		<option value="201835208611355|Burgan Bank [Burgan]|0.000" title="Burgan Bank [Burgan]"> 
                	                       
                		Burgan Bank [Burgan]</option>   
                		<option value="201835291358178|Commercial Bank of Kuwait [CBK]|0.000" title="Commercial Bank of Kuwait [CBK]"> 
                	                       
                		Commercial Bank of Kuwait [CBK]</option>   
                		<option value="201835291338405|Doha Bank [Doha]|0.000" title="Doha Bank [Doha]"> 
                	                       
                		Doha Bank [Doha]</option>   
                		<option value="202014459389905|Eidity [KNET]|0.000" title="Eidity [KNET]" style="color: #0077D5;font-weight: bold;"> 
                	                       
                		Eidity [KNET]</option>   
                		<option value="201835291231812|Gulf Bank of Kuwait [GBK]|0.000" title="Gulf Bank of Kuwait [GBK]"> 
                	                       
                		Gulf Bank of Kuwait [GBK]</option>   
                		<option value="202330239176867|KFH [TAM]|0.000" title="KFH [TAM]"> 
                	                       
                		KFH [TAM]</option>   
                		<option value="201835208428358|KFH Formerly AUB [FormerAUB]|0.000" title="KFH Formerly AUB [FormerAUB]"> 
                	                       
                		KFH Formerly AUB [FormerAUB]</option>   
                		<option value="201835291194556|Kuwait Finance House [KFH]|0.000" title="Kuwait Finance House [KFH]"> 
                	                       
                		Kuwait Finance House [KFH]</option>   
                		<option value="201835208852133|Kuwait International Bank [KIB]|0.000" title="Kuwait International Bank [KIB]"> 
                	                       
                		Kuwait International Bank [KIB]</option>   
                		<option value="201835208897105|National Bank of Kuwait [NBK]|0.000" title="National Bank of Kuwait [NBK]"> 
                	                       
                		National Bank of Kuwait [NBK]</option>   
                		<option value="202217198780682|NBK [Weyay]|0.000" title="NBK [Weyay]"> 
                	                       
                		NBK [Weyay]</option>   
                		<option value="201835208929929|Qatar National Bank [QNB]|0.000" title="Qatar National Bank [QNB]"> 
                	                       
                		Qatar National Bank [QNB]</option>   
                		<option value="201835208950182|Union National Bank [UNB]|0.000" title="Union National Bank [UNB]"> 
                	                       
                		Union National Bank [UNB]</option>   
                		<option value="201835209002521|Warba Bank [Warba]|0.000" title="Warba Bank [Warba]"> 
                	                       
                		Warba Bank [Warba]</option>
						
													                       
                    </select> </div>
            
                    </div>
                    
                     <div class="row" id="Paymentpagecardnumber">
                     <!-- Added for Points Redemption -->
                     
							
						
								<div class="col">
                  				<label class="paymentlabel">Card Number:</label>
                  				 </div>
						
					
					<!-- Added for Points Redemption -->
                  
                   <div class="col" style="width:59%;">  
						  
						  <label>
						<select class="paymentselect" name="dcprefix" id="dcprefix">
						<option value="bankcode" title="Prefix">
										Prefix
						</option>
								
								
						</select>
						 </label> 
						<!-- Modified for 8 digit bin mandate changes- starts  -->  
		 <label>  <input name="debitNumber" id="debitNumber" type="text" size="10" class="paymentinput" maxlength="10" onclick="validateprefixid(this.value);" onkeyup="return ValidateNumPin(event);" onkeypress="return ValidateNumPin(event);" ondrop="return false;" oncopy="return false;" onpaste="return false;" title="Should be in number. Length should be 10">
							</label>
							<!-- Modified for 8 digit bin mandate changes- ends  -->
		      </div>   
					  </div>
					  
					  <div class="row" id="cardExpdate">
								
														<div class="col" id="debitExpDate">
														<label class="paymentlabel">
															Expiration Date:
														</label></div>
														
														<div class="col"> 
														<select class="paymentselect" onchange="javascript:setdebitMonth(this.value)">
																									<option value="0">
																										MM
																									</option>
																									
																										<option value="1">
																											
																												
																													01
																												
																												
																											
																										</option>
																									
																										<option value="2">
																											
																												
																													02
																												
																												
																											
																										</option>
																									
																										<option value="3">
																											
																												
																													03
																												
																												
																											
																										</option>
																									
																										<option value="4">
																											
																												
																													04
																												
																												
																											
																										</option>
																									
																										<option value="5">
																											
																												
																													05
																												
																												
																											
																										</option>
																									
																										<option value="6">
																											
																												
																													06
																												
																												
																											
																										</option>
																									
																										<option value="7">
																											
																												
																													07
																												
																												
																											
																										</option>
																									
																										<option value="8">
																											
																												
																													08
																												
																												
																											
																										</option>
																									
																										<option value="9">
																											
																												
																													09
																												
																												
																											
																										</option>
																									
																										<option value="10">
																											
																												
																												
																													10
																												
																											
																										</option>
																									
																										<option value="11">
																											
																												
																												
																													11
																												
																											
																										</option>
																									
																										<option value="12">
																											
																												
																												
																													12
																												
																											
																										</option>
																									
																								</select>
																								
																									<select onchange="javascript:setdebitYear(this.value)" class="paymentselect">
																									<option value="0">
																										YYYY
																									</option>
																									
																										<option value="2024">
																											2024
																										</option>
																									
																										<option value="2025">
																											2025
																										</option>
																									
																										<option value="2026">
																											2026
																										</option>
																									
																										<option value="2027">
																											2027
																										</option>
																									
																										<option value="2028">
																											2028
																										</option>
																									
																										<option value="2029">
																											2029
																										</option>
																									
																										<option value="2030">
																											2030
																										</option>
																									
																										<option value="2031">
																											2031
																										</option>
																									
																										<option value="2032">
																											2032
																										</option>
																									
																										<option value="2033">
																											2033
																										</option>
																									
																										<option value="2034">
																											2034
																										</option>
																									
																										<option value="2035">
																											2035
																										</option>
																									
																										<option value="2036">
																											2036
																										</option>
																									
																										<option value="2037">
																											2037
																										</option>
																									
																										<option value="2038">
																											2038
																										</option>
																									
																										<option value="2039">
																											2039
																										</option>
																									
																										<option value="2040">
																											2040
																										</option>
																									
																										<option value="2041">
																											2041
																										</option>
																									
																										<option value="2042">
																											2042
																										</option>
																									
																										<option value="2043">
																											2043
																										</option>
																									
																										<option value="2044">
																											2044
																										</option>
																									
																										<option value="2045">
																											2045
																										</option>
																									
																										<option value="2046">
																											2046
																										</option>
																									
																										<option value="2047">
																											2047
																										</option>
																									
																										<option value="2048">
																											2048
																										</option>
																									
																										<option value="2049">
																											2049
																										</option>
																									
																										<option value="2050">
																											2050
																										</option>
																									
																										<option value="2051">
																											2051
																										</option>
																									
																										<option value="2052">
																											2052
																										</option>
																									
																										<option value="2053">
																											2053
																										</option>
																									
																										<option value="2054">
																											2054
																										</option>
																									
																										<option value="2055">
																											2055
																										</option>
																									
																										<option value="2056">
																											2056
																										</option>
																									
																										<option value="2057">
																											2057
																										</option>
																									
																										<option value="2058">
																											2058
																										</option>
																									
																										<option value="2059">
																											2059
																										</option>
																									
																										<option value="2060">
																											2060
																										</option>
																									
																										<option value="2061">
																											2061
																										</option>
																									
																										<option value="2062">
																											2062
																										</option>
																									
																										<option value="2063">
																											2063
																										</option>
																									
																										<option value="2064">
																											2064
																										</option>
																									
																										<option value="2065">
																											2065
																										</option>
																									
																										<option value="2066">
																											2066
																										</option>
																									
																										<option value="2067">
																											2067
																										</option>
																									
																								</select>
														</div>
														
													</div>
					  												 <div class="row" id="PinField">
					  												 
												<!-- <div class="col-lg-12"><label class="col-lg-6"></label></div> -->
													<input type="hidden" name="cardPinType" value="A">
													<div class="col" id="eComPin">
														<span class="paymentlabel" style="padding-left: 18px;">
															PIN:
														</span>
													</div>
														<div>
															<input name="cardPin" id="cardPin" autocomplete="off" title="Should be in number. Length should be 4" type="password" size="4" maxlength="4" class="paymentinput pin" onkeyup="return ValidateNumPin(event);" onkeypress="return ValidateNumPin(event);" ondrop="return false;" oncopy="return false;" onpaste="return false;">
															
														</div>
													
													
												 </div>
												</div>
												
												<div class="row">
							
				 <div class="col4" style="margin-left: 10px; text-align:center;"> 
					 <div id="loading1">Processing.. please wait ...</div>
					
						
							
							  
				
					
						<input name="proceed" type="button" class="button" onclick="onPay();" id="proceed" value="Submit">
						<input type="button" name="proceedReset" id="proceedReset" class="button" value="Reset" onclick="onReset_buttonClicked();">
						<input name="proceedCancel" type="button" class="button" onclick="cancelPage();" id="cancel" value="Cancel">
						
							
					 </div> 
					</div>
					
					
					  			 
					  			
	<!--  <div class="row" > --> 
					<!--  <div class="displayImage"  id="banklogo">
                <span>
                <div>
                    <p class="para" id="paying">You are paying through</p>
                    <img src="" id="image">
                    <p class="para" id="bankname1"><br>
                    	 </div> </span></div> --> 
    					 <center><label class="col-lg-12" style="color: red;
             font-family: Verdana, Arial, Helvetica, sans-serif;
 					     font-size: 12px;
    					 font-weight: bold;
    					 width: 95%;
    					 float:left;
    					 vertical-align: middle;" id="debitCaptchaMsg">
					                        	 	  
													</label></center>
													
				<center> <label class="col-lg-12" style="color: red; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; padding-left: 15px; float: left; vertical-align: middle; display: none;" id="ValidationMessage">
													</label></center>
                 
           <!--  </div>  -->
          
</div>

</div>

<footer>
        	<div>
        	<span>
	                <p align="center" style="margin: auto;width: 450px;max-width: 450px;text-align: center;font-size:12px;">
	                All Rights Reserved. Copyright 2024 © <br><span style="font-weight:bold;color: #0077D5;">The Shared Electronic Banking Services Company</span>
                </p></span>
                 </div>
                
                <div id="DigiCertClickID_cM-vbZrL"></div>
   
        </footer>
</div>
		
		
		
		
		   <!--  Payment Page Confirmation Starts-->
		  <div id="payConfirm" style="display: none;">
		 <div class="wrapper">
		<div class="add"> </div>
 

        <div class="contentBox">
            
             <img class="logoHead" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpCNzMyREY0ODgxMzcxMUU5QUQ1RUFEMjAwMEY3MDU4NCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCNzMyREY0OTgxMzcxMUU5QUQ1RUFEMjAwMEY3MDU4NCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkI3MzJERjQ2ODEzNzExRTlBRDVFQUQyMDAwRjcwNTg0IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkI3MzJERjQ3ODEzNzExRTlBRDVFQUQyMDAwRjcwNTg0Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJ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" alt="logo">
	     <img class="logoSep" src="images/paypage-images/separator.jpg " alt="spacer">
            
            
             <div class="notification" id="otpmsgDC2">
					 </div>
					 
				 <div id="notificationbox"><br>	 
				 <!-- Added for Points Redemption - modified -->
             <div class="notification" id="notification">
                
            </div> </div>
            
           
            <p class="paymentheader" style="padding-top: 18px; margin-left:10px; padding-bottom:  22px;">Billing Information</p>    
            <div class="innerwrapper">       
            <div class="row">
                <div class="col" style="padding-left: 15px;"><span class="paymentlabel">Merchant:</span></div>
                <div class="col" style="padding-left: 11%;"><span class="paymentdata">Taa Lab Company</span> </div>
            </div>
            <div class="row">
                <div class="col" style="padding-left: 15px;"><span class="paymentlabel"> Website:</span></div>
                <div class="col" style="padding-left: 11%;"><span class="paymentdata"> https://www.dawrat.com</span></div>
            </div>
            <div class="row" id="OrgTranxAmtConfirm">
                <div class="col" style="padding-left: 15px;"><span class="paymentlabel">Amount:</span></div>
                <div class="col" style="padding-left: 11%;"><span class="paymentdata"> KD&nbsp;25.000</span></div>
            </div>
            
            <!-- Added for PG Eidia Discount -->
            
            <div class="row" id="DiscntRateConfirm" style="display:none;">
                
            </div>
            <div class="row" id="DiscntedAmtConfirm" style="display:none;">
                
            </div>
            
            <!-- Added for PG Eidia Discount -->
            
            </div> 
             <p class="paymentheader" style="margin-left:10px; padding-bottom: 22px;">Card Information</p>            
            <div class="row">
            
                <div class="col" style="padding-left: 15px;" id="payConfirmCardNum">
                <!-- Added for Points Redemption -->
               <span class="paymentlabel"> 
               
					
					
					Card Number:
				</span>
				<!-- Added for Points Redemption -->
                </div>
                <div class="col" style="padding-left: 11%;"><span class="paymentdata" id="DCNumber"></span></div>
            </div>
             <div class="row" id="payConfirmExpmnth">
                <div class="col" style="padding-left: 15px;"><span class="paymentlabel">Expiration Month:</span></div>
                <div class="col" style="padding-left: 11%;"><span class="paymentdata" id="expmnth"></span></div>
            </div>
            <div class="row" id="payConfirmExpyr">
                <div class="col" style="padding-left: 15px;"><span class="paymentlabel">Expiration Year:</span></div>
                <div class="col" style="padding-left: 11%;"><span class="paymentdata" id="expyear"></span></div>
            </div>
            <!-- Added for Points Redemption --> 
            
             <div class="row">
                <div class="col" style="padding-left: 15px;"><span class="paymentlabel">PIN:</span></div>
                <div class="col" style="padding-left: 11%;"><span class="paymentdata">****</span></div>
            </div>   
            
            <!-- Added for Points Redemption -->
           <div class="row" id="OTPDCDIV" style="display: none;">
                <div class="col" style="padding-left: 13px; width:50%;padding-top: 3px;"><span class="paymentlabel">OneTimePassword (OTP):</span></div>
                <div class="col" style="padding-left: 6px;">
                    <input class="paymentinput" id="debitOTPtimer" name="debitOTP"  style="width: 100%;">
                    <!-- Added for Points Redemption -->
                     
                    <span style="display:none;cursor: pointer;color: #0077D5;text-decoration: underline;" id="Resend" onclick="payConfirmAjax('Resend');">Resend OTP</span> 
                    <!-- Added for Points Redemption -->
                    
                </div>
            </div>
			
            <div class="row">

                <div style="text-align: center;">
                <div id="loading2">Processing.. please wait ...</div>
                    <input type="button" name="confirm" id="proceedConfirm" value="Confirm" class="button" onclick="payConfirmAjax('VALIDATE');">
                    <input type="button" name="back" value="Back" class="button" id="back" onclick="onback_Click();">
                    <input type="submit" name="cancel" id="confirmcancel" value="Cancel" class="button" onclick="cancelPage();">
                </div>
            </div>
            
        </div>
         <div class="footer">
            <div>
                <p align="center" style="margin: auto;width: 450px;max-width: 450px;text-align: center;font-size:12px;">
	                	All Rights Reserved. Copyright 2024 © <br><span style="font-weight:bold;color: #0077D5;">The Shared Electronic Banking Services Company</span>
                </p>
             </div>

        </div> 
    </div> </div>
    
    <input type="hidden" name="encryptedCardNumber" id="encryptedCardNumber" value="">	
				<input type="hidden" name="encryptedMonth" id="encryptedMonth" value="">	
				<input type="hidden" name="encryptedYear" id="encryptedYear" value="">
	<!-- Hidden Fields : Start -->
					
					<input type="hidden" name="creditDebitCheck">
					
					<!--  End --> 
					<!-- Code Added for GSTN fix Starts -->
					<input type="hidden" name="gstnTXNId" id="gstnTXNId" value="">
					<input type="hidden" name="gstnFlag" id="gstnFlag" value="0">
					<input type="hidden" name="paymentInitTime" id="paymentInitTime" value="Wed Jun 12 13:26:19 AST 2024">
					<!-- Code Added for GSTN fix Ends -->
					<input type="hidden" name="gripsFlag" value="">
					<input type="hidden" name="selectedPymntInstrmnt" id="selectedPymntInstrmnt" value=""> 
					<input type="hidden" name="captchaMsg" id="captchaMsg" value="">
					<!-- End -->
					<input type="hidden" name="paymentId" value="103416413000157589">
					<input type="hidden" name="atmPayRetentionPeriod" value="0">

					
					<input type="hidden" name="merchHeaderFile" value="">
					
					<input type="hidden" name="mrchName" value="Taa Lab Company">
					<input type="hidden" name="mrchWeb" value="https://www.dawrat.com">
					<input type="hidden" name="mrchTrackId" value="9tnbg23s6ndggtc53682">
					<input type="hidden" name="pymntInstrmntCC" id="pymntInstrmntCC" value="1">
						
					<input type="hidden" name="pymntInstrmntAC" value="0">
					<input type="hidden" name="pymntInstrmntDC" id="pymntInstrmntDC" value="1">
					<input type="hidden" name="pymntInstrmntPC" id="pymntInstrmntPC" value="0">
				
					<input type="hidden" name="pymntInstrmntPZ" id="pymntInstrmntPZ" value="0">
					
					<input type="hidden" name="pymntInstrmntAP" value="0">
					<input type="hidden" name="pymntInstrmntDD" value="0">
					<input type="hidden" name="ecomFlg" value="0">
					<input type="hidden" name="captchaFlg" value="0">
					<input type="hidden" name="instName" value="KFH">
					<input type="hidden" name="mrchErrUrl" value="https://api.eventat.com/payments/knet/kpxqugdwdicrw80qcblz/9tnbg23s6ndggtc53682/?error=1">
					<input type="hidden" name="avsFlg" value="0">
					<input type="hidden" name="headerType" value="0">
					<input type="hidden" name="termId" value="135001">
					<input type="hidden" name="instId" value="203">
					<input type="hidden" name="mrchId" value="1350">
					<input type="hidden" name="maestroCheckFlag" value="0">
					<input type="hidden" name="rupFlg" value="0">
					<input type="hidden" name="pymntInstrmntIMPS" value="0">
					<input type="hidden" name="footer" value="">
						
						<input type="hidden" name="debitSel" value="P">
						<input type="hidden" name="creditSel" value="">
						<input type="hidden" name="prepaidSel" value="">
											
						<input type="hidden" name="siFlag" value="0">
												
						<input type="hidden" name="fcFlag" id="fcFlag" value="0">
						<input type="hidden" name="fcChecked" id="fcChecked">
						<input type="hidden" name="fcExpCheck" id="fcExpCheck">
						<input type="hidden" name="fcCtCheck" id="fcCtCheck" value="0">
						<input type="hidden" name="fcDtCheck" id="fcDtCheck" value="0">
						<input type="hidden" name="fcPdCheck" id="fcPdCheck" value="0">
					   							
						<input type="hidden" name="rdc" id="rdc" value="">
						<input type="hidden" name="checkBrand" id="checkBrand" value="">
						<input type="hidden" name="onOffType" id="onOffType" value="">
						<input type="hidden" name="maestro" id="maestro" value="">
									   
						<input type="hidden" name="ccInstFlg" value="0">
						<input type="hidden" name="ccTermFlg" value="0">
						<input type="hidden" name="merchantCurrencyFlg" value="0">
						<input type="hidden" name="cardCurrencyFlg" value="0">
						<input type="hidden" name="otherCurrencyFlg" value="0">
					    
					    <input type="hidden" name="pymntInstrmntCnt" id="pymntInstrmntCnt" value="2">
					    
					    <input type="hidden" value="" name="cspg">
		                <input type="hidden" name="CSRFToken" value="06eb4e2c-e79d-4e25-a80e-ddc0e362fd5e">

						<input type="hidden" value="" name="otpStatus">
						<input type="hidden" value="0" name="otpallowed">
						<input type="hidden" value="0" name="otpmethod">
						 <input type="hidden" name="emiFlag" id="emiFlag" value="0">
						<input type="hidden" name="radioFlag" id="radioFlag" value="0">
						<input type="hidden" name="otherCards" id="otherCards" value="">
						<input type="hidden" name="textFile" value="-">
						<input type="hidden" name="errorStr" id="errorStr">
						<input type="hidden" name="resultCode" id="resultCode">
						<input type="hidden" name="postDate" id="postDate">
						<input type="hidden" name="responseCode" id="responseCode">
						<!-- Added for Rupay denied by Risk -->
						<input type="hidden" name="tranId" id="tranId">
						<input type="hidden" name="authCode" id="authCode">
						<!-- End -->
						
						<input type="hidden" name="mrchHeaderMsgFile" value="">
						<input type="hidden" name="mrchHeaderHtmlFile" value="">
						<input type="hidden" name="instHeaderHtmlFile" value="">
						
						<input type="hidden" id="OtpUserID" name="OtpUserID" value="">
						<input type="hidden" name="paymentOtpGenCancel">
						<input type="hidden" name="otpConfirmationFlg">
						<input type="hidden" name="BranDType">
						<input type="hidden" name="MaskingCardNum" value="0">
						<input type="hidden" id="debitCardNumber" name="debitCardNumber" value="">
						<input type="hidden" name="fCCustMob" id="fCCustMob" value="">
						<input type="hidden" name="deletecard" value="">
						<input type="hidden" name="cardnohash" value="">
						<input type="hidden" name="encryptedSavedCardPin" id="encryptedSavedCardPin" value="">
						<input type="hidden" name="config">
						<input type="hidden" name="terminal_otpflag" value="1">
						<input type="hidden" name="terminal_amountlimit" value="25">
						<input type="hidden" name="OTPFlg" value="1">
						<input type="hidden" name="timeOver" value="0">
						<input type="hidden" name="Otptenant">
						<input type="hidden" name="currSymbol" value="KD">
						<input type="hidden" name="usingFc">
						<input type="hidden" name="inst_p2pflg" value="0">
						<input type="hidden" name="mrch_p2pflg" value="0">
						<input type="hidden" name="term_p2pflg" value="0">
						<input type="hidden" name="otpgencount" value="0">
						<input type="hidden" name="otpvalcount" value="0">
						<input type="hidden" name="langID" value="EN">
						<input type="hidden" name="paymentCVdeclineValue">
						<input type="hidden" name="custvalid" value="0">
						<input type="hidden" name="otpflgdiv" value="0">
						
						<input type="hidden" name="p2pRefundFlg" value="0">
						<input type="hidden" name="instp2pRefundFlg" value="1">
						<input type="hidden" name="termp2pRefundFlg" value="0">
						<input type="hidden" name="mrchp2pRefundFlg" value="0">
						<input type="hidden" name="p2pRefundId" value="">
						
						<!-- Added for OTP at I-T-B level -->
						<input type="hidden" name="appAllbrands" value="1">
						<input type="hidden" name="accptBrndListAmtlmt" value="">
						<input type="hidden" name="accptBrndList" value="202330239176867,202217198780682,201835209002521,201835208929929,201835208852133,201835291231812,201835291358178,201835291426160,201835208495117,201835208428358,201835208950182,201835208897105,201835291194556,201835291338405,201835208611355,201835208533245,201835291539833,202014459389905">
						<input type="hidden" name="binsOTPflg" value="1">
						<input type="hidden" name="amountlimit" value="25.000">
						<input type="hidden" name="OTPtranamtlmt">
						<input type="hidden" name="OTPamtlmtidentifier">
						<!-- Added for OTP at I-T-B level -->
						
						<!-- Added for Points Redemption  -->
						<input type="hidden" id="otpgenMethod" name="otpgenMethod" value="">
						<input type="hidden" id="otpdetails" name="otpdetails" value="">
						<input type="hidden" name="resend" value="">
						<input type="hidden" name="pymntPointsRedemptionflg" value="0">
						<!-- Added for Points Redemption  -->
						
						<!-- End -->
						
						<!-- Added for PROD issue 5th tranx without OTP -->
						<input type="hidden" name="OTPtranId" value="">
						<!-- Added for PROD issue 5th tranx without OTP -->
						
						<!--Added for PG Discount flag  -->
						<input type="hidden" name="pgEidiaDiscountFlag" value="0">
						<input type="hidden" name="discountval" value="">
						<input type="hidden" name="discountedtranamount" value="">
						<!--Added for PG Discount flag  -->
						
							<input type="hidden" name="debitYear" id="debitYearSelect" value="0">
							<input type="hidden" name="debitMonth" id="debitMonthSelect" value="0">
														
					<!-- Hidden Fields : End -->
					
					<!-- Added for prod issue - 29-jun-21 -->
					<input type="hidden" name="paymentStatus" value="">
					<!-- <input type="hidden" name="pymntpagebkstatus" value=""/> -->
					<input type="hidden" name="ErrorText" value="">
					<!-- Added for prod issue - 29-jun-21 -->
					
					<input type="hidden" name="kfastRegAttemptCount" value="0">
					<input type="hidden" name="kfastRegDeclineValue">
			</form>		

</body></html>