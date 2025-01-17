<html lang="en"><head>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://sadadqa.com/public/img/favicon.png">
    <title>EVENTAT INTERNATIONAL EVENTS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="wGK8GltfbkLLOTB14vuo25A0IF6yFL2LPBZvcquK">


    
        <meta http-equiv="Content-Type" content="text/html, charset=iso-8859-1">
			<script type="text/javascript" src="https://h.online-metrix.net/fp/
	tags.js?org_id=1snn5n9w&amp;session_id=qnb_sadpsc_qarsdcbsdvid666b3e357ab59"></script>
        
        
        <noscript>
        <iframe style="width: 100px; height: 100px; border: 0; position:
       absolute; top: -5000px;" src="https://h.online-metrix.net/fp/tags?org_
       id=1snn5n9w&session_id=qnb_sadpsc_qarsdcbsdvid666b3e357ab59"></iframe>
        </noscript>
    <!-- Bootstrap CSS -->
    <link href="https://sadadqa.com/public/checkoutpages/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <title>Invoice Checkout</title>
    <style>
        .payment-box .gpayorapple-button .apple-pay-btn {
            padding: 9px 15% 10px;
            width: calc(100% - 32px) !important;
            height: 45px !important;
            margin: 0 auto;
            text-align: center;
            border-radius: 10px !important;
        }

        .gpay-button-fill>.gpay-button.black {
            width: calc(100% - 32px) !important;
            height: 45px !important;
            margin: 0 auto;
            text-align: center;
            border-radius: 10px;
        }

        .gpayorapple-button>.card {
            border: none !important;
        }

        .gpay-button-fill {
            margin: 0 auto !important;
            text-align: center !important;
        }

        .gpay-button-fill>.gpay-button.black {
            padding: 0px;
        }

        .errorMessage {
            color: red;
            display: block !important;
        }

        .i-language-ar {
            text-decoration: none;
        }

        .i-language-en {
            text-decoration: none;
        }

        .secure-payment-text p span {
            color: var(--themeColor);
            text-decoration: none;
        }


        .preloader {
            width: 100%;
            height: 100%;
            top: 0;
            position: fixed;
            z-index: 99999;
            background: #fff
        }

        .preloader .cssload-speeding-wheel {
            position: absolute;
            top: calc(50% - 3.5px);
            left: calc(50% - 3.5px)
        }

        .loader,
        .loader__figure {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .loader {
            overflow: visible;
            padding-top: 2em;
            height: 0;
            width: 2em
        }

        .loader__figure {
            height: 0;
            width: 0;
            box-sizing: border-box;
            border: 0 solid var(--themeColor);
            border-radius: 50%;
            -webkit-animation: loader-figure 1.15s infinite cubic-bezier(.215, .61, .355, 1);
            -moz-animation: loader-figure 1.15s infinite cubic-bezier(.215, .61, .355, 1);
            animation: loader-figure 1.15s infinite cubic-bezier(.215, .61, .355, 1)
        }

        .loader__label {
            float: left;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            margin: .5em 0 0 50%;
            font-size: .875em;
            letter-spacing: .1em;
            line-height: 1.5em;
            color: var(--themeColor);
            -webkit-animation: loader-label 1.15s infinite cubic-bezier(.215, .61, .355, 1);
            -moz-animation: loader-label 1.15s infinite cubic-bezier(.215, .61, .355, 1);
            animation: loader-label 1.15s infinite cubic-bezier(.215, .61, .355, 1)
        }


        @-webkit-keyframes loader-figure {
            0% {
                height: 0;
                width: 0;
                background-color: var(--themeColor)
            }

            29% {
                background-color: var(--themeColor)
            }

            30% {
                height: 2em;
                width: 2em;
                background-color: transparent;
                border-width: 1em;
                opacity: 1
            }

            100% {
                height: 2em;
                width: 2em;
                border-width: 0;
                opacity: 0;
                background-color: transparent
            }
        }

        @-moz-keyframes loader-figure {
            0% {
                height: 0;
                width: 0;
                background-color: var(--themeColor)
            }

            29% {
                background-color: var(--themeColor)
            }

            30% {
                height: 2em;
                width: 2em;
                background-color: transparent;
                border-width: 1em;
                opacity: 1
            }

            100% {
                height: 2em;
                width: 2em;
                border-width: 0;
                opacity: 0;
                background-color: transparent
            }
        }

        @keyframes  loader-figure {
            0% {
                height: 0;
                width: 0;
                background-color: var(--themeColor)
            }

            29% {
                background-color: var(--themeColor)
            }

            30% {
                height: 2em;
                width: 2em;
                background-color: transparent;
                border-width: 1em;
                opacity: 1
            }

            100% {
                height: 2em;
                width: 2em;
                border-width: 0;
                opacity: 0;
                background-color: transparent
            }
        }

        @-webkit-keyframes loader-label {

            0%,
            100% {
                opacity: .25
            }

            30% {
                opacity: 1
            }
        }

        @-moz-keyframes loader-label {

            0%,
            100% {
                opacity: .25
            }

            30% {
                opacity: 1
            }
        }

        @keyframes  loader-label {

            0%,
            100% {
                opacity: .25
            }

            30% {
                opacity: 1
            }
        }

        .loader__label {
            color: var(--themeColor);
        }

        .loader__figure {
            border-color: var(--themeColor);
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: var(--themeColor);
            border-color: var(--themeColor);
        }
    </style>
<script type="text/javascript" src="moz-extension://3a0f29af-0c27-4469-af11-9af97478f76e/libs/customElements.js" class="__REQUESTLY__SCRIPT"></script><script type="text/javascript" class="__REQUESTLY__SCRIPT">((namespace) => {
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
})({"namespace":"__REQUESTLY__","customHeaderPrefix":"x-rq-","ignoredHeadersOnRedirect":["Authorization"]})</script><style>.swal2-popup.swal2-toast{box-sizing:border-box;grid-column:1/4 !important;grid-row:1/4 !important;grid-template-columns:min-content auto min-content;padding:1em;overflow-y:hidden;background:#fff;box-shadow:0 0 1px rgba(0,0,0,.075),0 1px 2px rgba(0,0,0,.075),1px 2px 4px rgba(0,0,0,.075),1px 3px 8px rgba(0,0,0,.075),2px 4px 16px rgba(0,0,0,.075);pointer-events:all}.swal2-popup.swal2-toast>*{grid-column:2}.swal2-popup.swal2-toast .swal2-title{margin:.5em 1em;padding:0;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-loading{justify-content:center}.swal2-popup.swal2-toast .swal2-input{height:2em;margin:.5em;font-size:1em}.swal2-popup.swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{grid-column:3/3;grid-row:1/99;align-self:center;width:.8em;height:.8em;margin:0;font-size:2em}.swal2-popup.swal2-toast .swal2-html-container{margin:.5em 1em;padding:0;overflow:initial;font-size:1em;text-align:initial}.swal2-popup.swal2-toast .swal2-html-container:empty{padding:0}.swal2-popup.swal2-toast .swal2-loader{grid-column:1;grid-row:1/99;align-self:center;width:2em;height:2em;margin:.25em}.swal2-popup.swal2-toast .swal2-icon{grid-column:1;grid-row:1/99;align-self:center;width:2em;min-width:2em;height:2em;margin:0 .5em 0 0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:bold}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{justify-content:flex-start;height:auto;margin:0;margin-top:.5em;padding:0 .5em}.swal2-popup.swal2-toast .swal2-styled{margin:.25em .5em;padding:.4em .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-0.8em;left:-0.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-0.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{animation:swal2-toast-hide .1s forwards}.swal2-container{display:grid;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;box-sizing:border-box;grid-template-areas:"top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";grid-template-rows:minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);height:100%;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}.swal2-container.swal2-backdrop-show,.swal2-container.swal2-noanimation{background:rgba(0,0,0,.4)}.swal2-container.swal2-backdrop-hide{background:rgba(0,0,0,0) !important}.swal2-container.swal2-top-start,.swal2-container.swal2-center-start,.swal2-container.swal2-bottom-start{grid-template-columns:minmax(0, 1fr) auto auto}.swal2-container.swal2-top,.swal2-container.swal2-center,.swal2-container.swal2-bottom{grid-template-columns:auto minmax(0, 1fr) auto}.swal2-container.swal2-top-end,.swal2-container.swal2-center-end,.swal2-container.swal2-bottom-end{grid-template-columns:auto auto minmax(0, 1fr)}.swal2-container.swal2-top-start>.swal2-popup{align-self:start}.swal2-container.swal2-top>.swal2-popup{grid-column:2;align-self:start;justify-self:center}.swal2-container.swal2-top-end>.swal2-popup,.swal2-container.swal2-top-right>.swal2-popup{grid-column:3;align-self:start;justify-self:end}.swal2-container.swal2-center-start>.swal2-popup,.swal2-container.swal2-center-left>.swal2-popup{grid-row:2;align-self:center}.swal2-container.swal2-center>.swal2-popup{grid-column:2;grid-row:2;align-self:center;justify-self:center}.swal2-container.swal2-center-end>.swal2-popup,.swal2-container.swal2-center-right>.swal2-popup{grid-column:3;grid-row:2;align-self:center;justify-self:end}.swal2-container.swal2-bottom-start>.swal2-popup,.swal2-container.swal2-bottom-left>.swal2-popup{grid-column:1;grid-row:3;align-self:end}.swal2-container.swal2-bottom>.swal2-popup{grid-column:2;grid-row:3;justify-self:center;align-self:end}.swal2-container.swal2-bottom-end>.swal2-popup,.swal2-container.swal2-bottom-right>.swal2-popup{grid-column:3;grid-row:3;align-self:end;justify-self:end}.swal2-container.swal2-grow-row>.swal2-popup,.swal2-container.swal2-grow-fullscreen>.swal2-popup{grid-column:1/4;width:100%}.swal2-container.swal2-grow-column>.swal2-popup,.swal2-container.swal2-grow-fullscreen>.swal2-popup{grid-row:1/4;align-self:stretch}.swal2-container.swal2-no-transition{transition:none !important}.swal2-popup{display:none;position:relative;box-sizing:border-box;grid-template-columns:minmax(0, 100%);width:32em;max-width:100%;padding:0 0 1.25em;border:none;border-radius:5px;background:#fff;color:#545454;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:none}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-title{position:relative;max-width:100%;margin:0;padding:.8em 1em 0;color:inherit;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{display:flex;z-index:1;box-sizing:border-box;flex-wrap:wrap;align-items:center;justify-content:center;width:auto;margin:1.25em auto 0;padding:0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))}.swal2-loader{display:none;align-items:center;justify-content:center;width:2.2em;height:2.2em;margin:0 1.875em;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border-width:.25em;border-style:solid;border-radius:100%;border-color:#2778c4 rgba(0,0,0,0) #2778c4 rgba(0,0,0,0)}.swal2-styled{margin:.3125em;padding:.625em 1.1em;transition:box-shadow .1s;box-shadow:0 0 0 3px rgba(0,0,0,0);font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#7066e0;color:#fff;font-size:1em}.swal2-styled.swal2-confirm:focus{box-shadow:0 0 0 3px rgba(112,102,224,.5)}.swal2-styled.swal2-deny{border:0;border-radius:.25em;background:initial;background-color:#dc3741;color:#fff;font-size:1em}.swal2-styled.swal2-deny:focus{box-shadow:0 0 0 3px rgba(220,55,65,.5)}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#6e7881;color:#fff;font-size:1em}.swal2-styled.swal2-cancel:focus{box-shadow:0 0 0 3px rgba(110,120,129,.5)}.swal2-styled.swal2-default-outline:focus{box-shadow:0 0 0 3px rgba(100,150,200,.5)}.swal2-styled:focus{outline:none}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1em 0 0;padding:1em 1em 0;border-top:1px solid #eee;color:inherit;font-size:1em}.swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;grid-column:auto !important;overflow:hidden;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.swal2-timer-progress-bar{width:100%;height:.25em;background:rgba(0,0,0,.2)}.swal2-image{max-width:100%;margin:2em auto 1em}.swal2-close{z-index:2;align-items:center;justify-content:center;width:1.2em;height:1.2em;margin-top:0;margin-right:0;margin-bottom:-1.2em;padding:0;overflow:hidden;transition:color .1s,box-shadow .1s;border:none;border-radius:5px;background:rgba(0,0,0,0);color:#ccc;font-family:serif;font-family:monospace;font-size:2.5em;cursor:pointer;justify-self:end}.swal2-close:hover{transform:none;background:rgba(0,0,0,0);color:#f27474}.swal2-close:focus{outline:none;box-shadow:inset 0 0 0 3px rgba(100,150,200,.5)}.swal2-close::-moz-focus-inner{border:0}.swal2-html-container{z-index:1;justify-content:center;margin:1em 1.6em .3em;padding:0;overflow:auto;color:inherit;font-size:1.125em;font-weight:normal;line-height:normal;text-align:center;word-wrap:break-word;word-break:break-word}.swal2-input,.swal2-file,.swal2-textarea,.swal2-select,.swal2-radio,.swal2-checkbox{margin:1em 2em 3px}.swal2-input,.swal2-file,.swal2-textarea{box-sizing:border-box;width:auto;transition:border-color .1s,box-shadow .1s;border:1px solid #d9d9d9;border-radius:.1875em;background:rgba(0,0,0,0);box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(0,0,0,0);color:inherit;font-size:1.125em}.swal2-input.swal2-inputerror,.swal2-file.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474 !important;box-shadow:0 0 2px #f27474 !important}.swal2-input:focus,.swal2-file:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:none;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(100,150,200,.5)}.swal2-input::placeholder,.swal2-file::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em 2em 3px;background:#fff}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-file{width:75%;margin-right:auto;margin-left:auto;background:rgba(0,0,0,0);font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:rgba(0,0,0,0);color:inherit;font-size:1.125em}.swal2-radio,.swal2-checkbox{align-items:center;justify-content:center;background:#fff;color:inherit}.swal2-radio label,.swal2-checkbox label{margin:0 .6em;font-size:1.125em}.swal2-radio input,.swal2-checkbox input{flex-shrink:0;margin:0 .4em}.swal2-input-label{display:flex;justify-content:center;margin:1em auto 0}.swal2-validation-message{align-items:center;justify-content:center;margin:1em 0 0;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:2.5em auto .6em;border:0.25em solid rgba(0,0,0,0);border-radius:50%;border-color:#000;font-family:inherit;line-height:5em;cursor:default;user-select:none}.swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474;color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}.swal2-icon.swal2-error.swal2-icon-show{animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark{animation:swal2-animate-error-x-mark .5s}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-warning.swal2-icon-show{animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-warning.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .5s}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-info.swal2-icon-show{animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-info.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .8s}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-question.swal2-icon-show{animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-question.swal2-icon-show .swal2-icon-content{animation:swal2-animate-question-mark .8s}.swal2-icon.swal2-success{border-color:#a5dc86;color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-0.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-0.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-0.25em;left:-0.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-animate-success-line-tip .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-animate-success-line-long .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right{animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-progress-steps{flex-wrap:wrap;align-items:center;max-width:100%;margin:1.25em auto;padding:0;background:rgba(0,0,0,0);font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;flex-shrink:0;width:2em;height:2em;border-radius:2em;background:#2778c4;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#2778c4}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;flex-shrink:0;width:2.5em;height:.4em;margin:0 -1px;background:#2778c4}[class^=swal2]{-webkit-tap-highlight-color:rgba(0,0,0,0)}.swal2-show{animation:swal2-show .3s}.swal2-hide{animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{margin-right:initial;margin-left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@keyframes swal2-toast-show{0%{transform:translateY(-0.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(0.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0deg)}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-0.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-show{0%{transform:scale(0.7)}45%{transform:scale(1.05)}80%{transform:scale(0.95)}100%{transform:scale(1)}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(0.5);opacity:0}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-0.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(0.4);opacity:0}50%{margin-top:1.625em;transform:scale(0.4);opacity:0}80%{margin-top:-0.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0deg);opacity:1}}@keyframes swal2-rotate-loading{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}@keyframes swal2-animate-question-mark{0%{transform:rotateY(-360deg)}100%{transform:rotateY(0)}}@keyframes swal2-animate-i-mark{0%{transform:rotateZ(45deg);opacity:0}25%{transform:rotateZ(-25deg);opacity:.4}50%{transform:rotateZ(15deg);opacity:.8}75%{transform:rotateZ(-5deg);opacity:1}100%{transform:rotateX(0);opacity:1}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto !important}body.swal2-no-backdrop .swal2-container{background-color:rgba(0,0,0,0) !important;pointer-events:none}body.swal2-no-backdrop .swal2-container .swal2-popup{pointer-events:all}body.swal2-no-backdrop .swal2-container .swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll !important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static !important}}body.swal2-toast-shown .swal2-container{box-sizing:border-box;width:360px;max-width:100%;background-color:rgba(0,0,0,0);pointer-events:none}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-start,body.swal2-toast-shown .swal2-container.swal2-top-left{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-start,body.swal2-toast-shown .swal2-container.swal2-center-left{top:50%;right:auto;bottom:auto;left:0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;transform:translate(-50%, -50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-start,body.swal2-toast-shown .swal2-container.swal2-bottom-left{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}</style><meta http-equiv="origin-trial" id="origin-trial" content="Ayudt5SzRWp86yExqv4T3+PiWzcX+WBtprm+ux6vfIGn5Dg3JSrZL2Y5UkppRzYnVyYzu8hvj+Q4pdGSWsLVYgMAAABgeyJvcmlnaW4iOiJodHRwczovL3BheS5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJUcGNkIiwiZXhwaXJ5IjoxNzM1MzQzOTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><style type="text/css">
.gpay-button {
  background-origin: content-box;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: contain;
  border: 0px;
  border-radius: 4px;
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 1px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  cursor: pointer;
  height: 40px;
  min-height: 40px;
  padding: 12px 24px 10px;
  width: 240px;
}

.gpay-button.black {
  background-color: #000;
  box-shadow: none;
}

.gpay-button.white {
  background-color: #fff;
}

.gpay-button.short, .gpay-button.plain {
  min-width: 90px;
  width: 160px;
}

.gpay-button.black.short, .gpay-button.black.plain {
  background-image: url(https://www.gstatic.com/instantbuy/svg/dark_gpay.svg);
}

.gpay-button.black.short.new_style, .gpay-button.black.plain.new_style {
  background-image: url(https://www.gstatic.com/instantbuy/svg/refreshedgraphicaldesign/dark_gpay.svg);
  min-width: 160px;
  background-size: contain;
}

.gpay-button.white.short, .gpay-button.white.plain {
  background-image: url(https://www.gstatic.com/instantbuy/svg/light_gpay.svg);
}

.gpay-button.black.active {
  background-color: #5f6368;
}

.gpay-button.black.hover {
  background-color: #3c4043;
}

.gpay-button.white.active {
  background-color: #fff;
}

.gpay-button.white.focus {
  box-shadow: #e8e8e8 0 1px 1px 0, #e8e8e8 0 1px 3px;
}

.gpay-button.white.hover {
  background-color: #f8f8f8;
}

.gpay-button-fill, .gpay-button-fill > .gpay-button.white, .gpay-button-fill > .gpay-button.black {
  width: 100%;
  height: inherit;
}

.gpay-button-fill-new-style,
.gpay-button-fill-new-style > .gpay-button.black {
  width: 100%;
  height: inherit;
  background-size: contain;
}

.gpay-button-fill > .gpay-button.white,
  .gpay-button-fill > .gpay-button.black {
    padding: 12px 15% 10px;
}

.gpay-button.donate, .gpay-button.book,
.gpay-button.checkout,
.gpay-button.subscribe, .gpay-button.pay,
.gpay-button.order {
    padding: 9px 24px;
}

.gpay-button-fill > .gpay-button.donate,
.gpay-button-fill > .gpay-button.book,
.gpay-button-fill > .gpay-button.checkout,
.gpay-button-fill > .gpay-button.order,
.gpay-button-fill > .gpay-button.pay,
.gpay-button-fill > .gpay-button.subscribe {
    padding: 9px 15%;
}

.gpay-button-fill-new-style > .gpay-button.donate,
.gpay-button-fill-new-style > .gpay-button.book,
.gpay-button-fill-new-style > .gpay-button.checkout,
.gpay-button-fill-new-style > .gpay-button.order,
.gpay-button-fill-new-style > .gpay-button.pay,
.gpay-button-fill-new-style > .gpay-button.subscribe {
    padding: 12px 15%;
    background-size: contain;
}

</style><style type="text/css">
  .gpay-button.new_style {
    background-size: auto;
    border-radius: 100vh;
    padding: 11px 24px;
    box-sizing: border-box;
    border: 1px solid #747775;
    min-height: 48px;
    font-size: 20px;
    width: auto;
  }
</style><style type="text/css">
  .gpay-card-info-container.black,
  .gpay-button.black {
    outline: 1px solid #757575;
    box-shadow: none;
  }
  .gpay-card-info-container.black.focus,
  .gpay-button.black.focus {
    outline: 1px auto Highlight;
    outline: 1px auto -webkit-focus-ring-color;
    box-shadow: none;
  }
  .gpay-card-info-container.white,
  .gpay-button.white {
    outline: 1px solid #3C4043;
    box-shadow: none;
  }
  .gpay-card-info-container.white.focus,
  .gpay-button.white.focus {
    outline: 1px auto Highlight;
    outline: 1px auto -webkit-focus-ring-color;
    box-shadow: none;
  }
</style></head>

<body class="mini-sidebar">
    <!-- Loader -->
    <div class="preloader" style="display: none;">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading</p>
        </div>
    </div>
    <!-- Main wrapper -->
    <div class="invoice-chekout-wrapper">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="invoice-checkout-box">
                <!-- Header section -->
                <div class="invoice-header">
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="invoice-logo">
                            <div class="d-flex align-items-center">
                                <div class="logo-image">
                                    <span class="merchant-logo">
                                                                                    <img src="https://sadadqa.com/public/checkoutpages/images/sadad-logo.svg" alt="Business-logo" title="Business-logo">
                                                                            </span>
                                </div>
                                <div class="logo-text">
                                    <h6>
                                                                                    EVENTAT INTERNATIONAL EVENTS
                                                                            </h6>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-language-selection">
                            <div class="i-language-box" style="direction: ltr">
                                                                    <a href="javascript:void(0)" class="i-language-ar arabic_lang" id="arabic_lang">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.775" height="36.876" viewBox="0 0 31.775 36.876">
                                            <g id="Group_73402" data-name="Group 73402" transform="translate(-1274.323 -26.062)">
                                                <path id="Path_24741" data-name="Path 24741" d="M2629.814,30.707l-.491,18.876s-.106,6.546,13.2,11.209,18.242,6.791,18.242,6.791l.331-22.91s-1.722-5.511-15.3-7.638S2629.814,30.707,2629.814,30.707Z" transform="translate(-1355 -4.645)" fill="#fff" opacity="0.2"></path>
                                                <text id="ع" transform="translate(1289 35.355)" fill="#fff" font-size="11" font-family="SegoeUI-Bold, Segoe UI" font-weight="700">
                                                    <tspan x="-2.755" y="12">ع</tspan>
                                                </text>
                                            </g>
                                        </svg>
                                    </a>
                                
                                                                    <a href="javascript:void(0)" class="i-language-en">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.775" height="36.876" viewBox="0 0 31.775 36.876">
                                            <g id="Group_73355" data-name="Group 73355" transform="translate(-1312.097 -26.062)">
                                                <path id="Path_24742" data-name="Path 24742" d="M2660.606,30.707l.491,18.876s.106,6.546-13.2,11.209-18.242,6.791-18.242,6.791l-.332-22.91s1.722-5.511,15.3-7.638S2660.606,30.707,2660.606,30.707Z" transform="translate(-1317.226 -4.645)" fill="#fff"></path>
                                                <text id="EN" transform="translate(1321 49.355)" fill="var(--themeColor)" font-size="11" font-family="OpenSans-SemiBold, Open Sans" font-weight="600">
                                                    <tspan x="0" y="0">EN</tspan>
                                                </text>
                                            </g>
                                        </svg>
                                    </a>
                                                            </div>
                        </div>
                        <div class="mobile-language-dropdown">
                            <div class="mobile-language-box">
                                <h5>
                                                                                                                                                        En
                                                                        <a href="javascript:void(0);" id="languageSelect">
                                        <img src="https://sadadqa.com/public/checkoutpages/images/language-sel-arrow.svg">
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="lang-sel-dropdownmain">
                            <div class="form-check custom-radio">
                                <input class="form-check-input english_lang" type="radio" name="exampleRadios" value="option1" checked="">
                                <label class="form-check-label english_lang">
                                    English
                                </label>
                            </div>
                            <div class="form-check custom-radio">
                                <input class="form-check-input arabic_lang" type="radio" name="exampleRadios" value="option2">
                                <label class="form-check-label arabic_lang">
                                    Arabic
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content section -->

                <div class="invoice-info-box product-enable-invoice">
<style>
    :root {
        --themeColor: #8D193C;
        --themeTitleColor: #FFFFFF;
        --paymentBtnColor: #8D193C;
        --btnFontColor: #FFFFFF;
    }
</style>
<link href="https://sadadqa.com/public/checkoutpages/web-checkout/website.css?v=2" rel="stylesheet">
<link href="https://sadadqa.com/public/checkoutpages/css/modal.css?v=2" rel="stylesheet">
<style>
    @media (min-width: 360px) and (max-width: 576px) {
        .test-mode-change {
            position: absolute;
            right: 15px;
            top: 18px;
            left: auto;
        }
    }
</style>



<div class="mobile-invoice-info-box">
    <div class="m-payment-info-wrap" style="display: none;">
        <div class="d-flex align-items-start justify-content-center">
            <div class="m-payable-amount">
                <!-- <div class="payableamt-text"><h5>Total Amount </h5></div> -->
                <div class="amoutqar">
                    <h6>
                                                    <?php echo $_GET['amount'];?><sup> <?php echo $_GET['currency'];?></sup>
                                            </h6>
                </div>
            </div>
            <div class="i-details">
                <div class="mi-detail-text">
                    <p>
                        Details
                        <a href="javascript:void(0);" id="detailsClick">
                            <img src="https://sadadqa.com/public/checkoutpages/images/detail-down-arrow.svg">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-inv-details" style="display: block;">
        <div class="md-date-details">
            <div class="md-pay-wrapper">
                <div class="md-pay-amt">
                    <h5>Total Amount</h5>
                </div>
                <div class="md-inamount">
                    <h6>
                                                    <?php echo $_GET['amount'];?><sup> <?php echo $_GET['currency'];?></sup>
                                            </h6>
                </div>
            </div>
        </div>
        <div class="md-in-other-details">
            <div class="md-dtl-box">
                <div class="d-flex align-items-end justify-content-between">
                    <div class="md-description-text">
                        <h6>MERCHANT REFRENCE NO.</h6>
                        <p>j0suugr8gks5lrns42cm</p>
                    </div>
                    <div class="">
                        <a href="javascript:void(0);" id="detailsShowClick">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.027" height="9.037" viewBox="0 0 18.027 9.037">
                                <path id="XMLID_105_" d="M17.7,7.325,9.5.19a.73.73,0,0,0-.983,0L.328,7.325A1.055,1.055,0,0,0,.164,8.657a.785.785,0,0,0,.656.381.744.744,0,0,0,.491-.19l7.7-6.707,7.7,6.707a.747.747,0,0,0,1.147-.19A1.055,1.055,0,0,0,17.7,7.325Z" fill="var(--themeColor)"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="d-flex align-items-center justify-content-between">

    <div class="col-12 col-lg-5 col-md-12 col-sm-12">
        <div class="left-invoice-info-wrap">
            <div class="left-in-content-dtl">
                <div class="invoice-innercontent-details">
                    <div class="web-back-icon">
                        <a href="javascript:void(0);" class="back-website">
                            <span class="back-arrow-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.63" height="23.2" viewBox="0 0 11.63 23.2">
                                    <path id="XMLID_105_" d="M22.778,9.427,12.232.245a.94.94,0,0,0-1.265,0L.422,9.427a1.358,1.358,0,0,0-.211,1.714,1.011,1.011,0,0,0,.844.49.958.958,0,0,0,.632-.245L11.6,2.755l9.913,8.631a.962.962,0,0,0,1.476-.245A1.358,1.358,0,0,0,22.778,9.427Z" transform="translate(0 23.2) rotate(-90)" fill="var(--themeColor)"></path>
                                </svg>
                            </span>
                            Back
                        </a>
                    </div>
                    <div class="payable-amt-text-box">
                        <h4 class="payable-amt-text">Total Amount</h4>
                        <h5 class="payable-amt">
                                                             <?php echo $_GET['amount'];?><sup> <?php echo $_GET['currency'];?><sup>QAR</sup>
                                                    </h5>
                    </div>
                    <div class="bill-to-box">
                        <h6 class="in-contentinner-title">MERCHANT REFRENCE NO.</h6>
                        <p class="in-invoicecontent">j0suugr8gks5lrns42cm</p>
                    </div>
                </div>
            </div>
            <div class="footer-logo">
                <ul>
                    <li>
                        <img src="https://sadadqa.com/public/checkoutpages/images/footer-logo/mcafee.svg" alt="" title="">
                    </li>
                    <li>
                        <img src="https://sadadqa.com/public/checkoutpages/images/footer-logo/secure.svg" alt="" title="">
                    </li>
                    <li>
                        <img src="https://sadadqa.com/public/checkoutpages/images/footer-logo/iso.svg" alt="" title="">
                    </li>
                    <li>
                        <img src="https://sadadqa.com/public/checkoutpages/images/footer-logo/pci.svg" alt="" title="">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-7 col-md-12 col-sm-12">
        <div class="payment-box enable-option-main">
            <div class="d-flex align-items-start justify-content-between">
            <div class="payment-title">
                                    <h5>Select a Payment Method</h5>
                            </div>
            <div class="web-pay-cancel back-website">
                <a href="javascript:void(0);">Cancel</a>
            </div>
        </div>
    
            
                                
                            
                            

        
                                <div class="gpayorapple-button w-100 paywithgoogleclass">
            </div>
                            <div class="using-pay paywithgoogleclass">
                                            <p>Or Pay Using</p>
                                    </div>
                            
    
    <div class="payout-detail-box">
        <div class="paymenttab">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                
                                
                                                    <li class="nav-item" role="presentation">
                        
                    </li>
                                

                
                                                    <li class="nav-item" role="presentation">
                        
                    </li>
                                

                
                                                                                    <li class="nav-item" role="presentation" style="">
                            
                        </li>
                                                    

            </ul>

            <div class="tab-content" id="pills-tabContent">

                
                <div class="tab-pane fade active show" id="pills-credit" role="tabpanel" aria-labelledby="pills-credit-tab">
                    <form class="form-horizontal credit-info form" id="creditcardform" action="" method="post" onsubmit="return false;" novalidate="novalidate">

                        <div class="row">
                            
                                <input type="hidden" id="ORDER_ID_credit" name="amount" class="amount" value="<?php echo $_GET['amount'];?>">
                                <input type="hidden" id="ORDER_ID_credit" name="currency" class="currency" value="<?php echo $_GET['currency'];?>">
                                <input type="hidden" id="ORDER_ID_credit" name="tok" class="tok" value="<?php echo $_GET['tok'];?>">

                            
                            
                            
                                                    </div>

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-floating">
                                                                            <input class="form-control" type="text" name="cardholdername" id="cardholdername" maxlength="40" autocomplete="off" required="" placeholder="en.new_card_holder_name" onkeydown="return /[a-z, ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}" onfocus="if (this.value == '') {this.value = '';}" aria-required="true">
                                                                        <label for="validationCustom03">
                                                                                    Card Holder Name
                                                                            </label>
                                    <div class="errorMessage error"></div>
                                </div>
                            </div>
                            <div class="cardtypechecks" style="display:none"></div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-floating">
                                    <div class="card-type"></div>
                                                                            <input class="form-control" type="text" name="cardnumber" maxlength="19" id="cardnumber" autocomplete="off" onkeyup="$cc.validate(event)" required="" placeholder="Card Number" pattern="[0-9]+" inputmode="numeric" aria-required="true">
                                                                        <label for="floatingNumber">
                                                                                    Card Number
                                                                            </label>
                                    <div class="invoice-card">
                                        <img src="https://sadadqa.com/public/checkoutpages/images/card/mater.svg" alt="" title="">
                                        <img src="https://sadadqa.com/public/checkoutpages/images/card/visa.svg" alt="" title="">
                                        <img src="https://sadadqa.com/public/checkoutpages/images/card/americanexpress.svg" alt="" title="">
                                    </div>
                                    <div class="errorMessage error"></div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 pe-2">
                                <div class="form-floating focused">
                                                                            <input class="form-control" type="text" name="expirymonth" id="expirymonth" autocomplete="off" required="" placeholder="Expiry" pattern="[0-9]+" inputmode="numeric" maxlength="5" aria-required="true">
                                    
                                    <label for="floatingNumber">
                                                                                    Expiry
                                                                            </label>
                                    <div class="errorMessage error"></div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 ps-2">
                                <div class="form-floating focusedcvv">
                                    <input type="password" class="form-control" name="cvv" id="cvv" autocomplete="off" required="" placeholder="CVV" maxlength="3" pattern="[0-9]+" inputmode="numeric" aria-required="true">
                                    <label for="floatingNumber">
                                                                                    CVV
                                                                            </label>
                                    <div class="cvv-icon" data-bs-toggle="modal" href="#exampleModalToggle">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="377.684" height="234.212" viewBox="0 0 377.684 234.212" style="">
                                                <g id="CVV" transform="translate(-796.162 -192.864)">
                                                    <path style="fill: var(--themeColor)" id="Path_1" data-name="Path 1" d="M985.121,1048.416h186.251c.67,0,1.34.016,2.01.032a.471.471,0,0,1,.4.4c.016.153.04.307.048.46.008.412.008.824.008,1.235v144.812c0,.258-.008.517,0,.775a5.694,5.694,0,0,1-.21,1.688c-.21.743-.315,1.51-.557,2.253a19.822,19.822,0,0,1-4.764,7.881,18.254,18.254,0,0,1-9.076,5.039c-.7.161-1.413.307-2.116.452a4.869,4.869,0,0,1-.767.081c-.517.016-1.034.008-1.55.008H815.932c-.565,0-1.139-.008-1.7,0a3.315,3.315,0,0,1-1.5-.275,4.6,4.6,0,0,0-1.2-.323c-.258-.04-.5-.1-.759-.161a17.289,17.289,0,0,1-6.452-2.907,19.22,19.22,0,0,1-6.936-8.721,18.808,18.808,0,0,1-1.082-4.029,15.8,15.8,0,0,1-.137-2.471c0-.88.008-1.752.008-2.633V1050.758a12.871,12.871,0,0,1,.057-2.011.5.5,0,0,1,.315-.3c.1-.008.2-.032.307-.04.258-.008.517-.008.775-.008h1.55q92.972.024,185.944.016Zm-55.174,63.863h107.386c.153,0,.307-.008.46-.016a.478.478,0,0,0,.509-.46c.016-.412.032-.823.032-1.235v-42.594c0-.363-.008-.719-.024-1.082a.6.6,0,0,0-.073-.291.44.44,0,0,0-.218-.2,3.68,3.68,0,0,0-1.074-.1c-3.771-.04-7.542-.1-11.313-.113q-16.352-.049-32.695-.065-63.068-.012-126.127-.016-19.44,0-38.888.057c-1.7,0-3.408.024-5.111.048a3.9,3.9,0,0,0-.606.081.531.531,0,0,0-.3.331,2.084,2.084,0,0,0-.048.3c-.008.468-.016.929-.016,1.4v41.819c0,.412,0,.823.008,1.235,0,.153.024.307.032.46a.448.448,0,0,0,.38.412c.622.016,1.235.04,1.857.04Zm53.891,16.117H825.783c-.565,0-1.139,0-1.7.008a1.743,1.743,0,0,0-.46.049,2.207,2.207,0,0,0-1.7,1.97,4.384,4.384,0,0,0,0,.46,1.907,1.907,0,0,0,.355,1.009,2.111,2.111,0,0,0,1.542.937c.2.024.412.032.622.04.468.008.929,0,1.4,0h315.963c.517,0,1.034.008,1.55-.008a4.855,4.855,0,0,0,.767-.1,1.875,1.875,0,0,0,1.058-.605,2.148,2.148,0,0,0,.589-1.849,2.263,2.263,0,0,0-2.14-1.9c-.622-.016-1.244-.008-1.857-.008Q1062.768,1128.392,983.837,1128.4Zm.04,20.122h-158.2c-.622,0-1.243.008-1.857,0a2.053,2.053,0,0,0-1.163.371,2.162,2.162,0,0,0-1,1.825,2.135,2.135,0,0,0,.848,1.744,1.882,1.882,0,0,0,.977.428,11.424,11.424,0,0,0,1.389.065c1.034-.008,2.067-.024,3.1-.024H880.5q26.259,0,52.526,0c17.506.008,35.02-.048,52.526.04h156.5c.468,0,.929,0,1.4-.008a5.112,5.112,0,0,0,.614-.048,1.868,1.868,0,0,0,1.389-.88,2.119,2.119,0,0,0,.347-1.171,2.26,2.26,0,0,0-.355-1.324,2.092,2.092,0,0,0-1.663-1c-.67-.04-1.34-.024-2.011-.024Q1062.828,1148.523,983.878,1148.519ZM983.724,1183h157.594c.622,0,1.244,0,1.857-.008a6.028,6.028,0,0,0,.767-.065,1.651,1.651,0,0,0,.84-.371,2,2,0,0,0,.8-1.445,2.994,2.994,0,0,0-.073-1.074,1.658,1.658,0,0,0-.178-.428,2.062,2.062,0,0,0-1.647-1.017c-.67-.048-1.34-.024-2.011-.024H827.891c-1.082,0-2.172-.008-3.254-.008a8.048,8.048,0,0,0-1.082.04,2.017,2.017,0,0,0-1.5.977,2.248,2.248,0,0,0,.065,2.487,1.905,1.905,0,0,0,1.4.88,7.909,7.909,0,0,0,1.235.065c.985-.016,1.962-.024,2.947-.024Q905.7,1183.006,983.724,1183Zm-.048-10.013h158.192c.565,0,1.139,0,1.7-.016a2.254,2.254,0,0,0,.46-.065,2.078,2.078,0,0,0,1.462-1.639,7.142,7.142,0,0,0,.008-.928,1.272,1.272,0,0,0-.1-.452,1.959,1.959,0,0,0-1.768-1.3c-.67-.032-1.34-.024-2.011-.024H825.7c-.517,0-1.034-.008-1.55.008-.258.008-.517.032-.767.065a.9.9,0,0,0-.3.073,2.23,2.23,0,0,0-1.405,1.89,2.144,2.144,0,0,0,.953,2,1.721,1.721,0,0,0,1,.38c.363.008.719.016,1.082.016,1.138,0,2.269-.008,3.407-.008Zm.065-30.046v.024h159.12c.21,0,.412-.008.622-.016a1.8,1.8,0,0,0,1-.363,2.241,2.241,0,0,0,.291-3.5,1.958,1.958,0,0,0-1.082-.565,6.368,6.368,0,0,0-1.235-.089c-1.187.016-2.374.032-3.561.032H830.886c-2.172,0-4.336.057-6.508-.057a3.248,3.248,0,0,0-1.074.137,1.865,1.865,0,0,0-.557.266,2.309,2.309,0,0,0-.864,2.6,2.282,2.282,0,0,0,1.962,1.518c.622.008,1.235.008,1.857.008H983.74Zm-.178,20.106h157.893c.622,0,1.244,0,1.857-.008a2.879,2.879,0,0,0,.46-.032,2.122,2.122,0,0,0,1.672-1.631,4.081,4.081,0,0,0,.048-.767,1.959,1.959,0,0,0-.824-1.591,1.6,1.6,0,0,0-.694-.315,7.05,7.05,0,0,0-1.542-.1c-1.082.016-2.172.04-3.254.04H828.964c-1.55,0-3.1-.024-4.651-.032a4.753,4.753,0,0,0-1.074.1,1.842,1.842,0,0,0-.565.242,2.108,2.108,0,0,0-.783.937,2.157,2.157,0,0,0,0,1.8,2.116,2.116,0,0,0,1.906,1.357c.614.04,1.235.016,1.857.016Q904.625,1163.041,983.563,1163.045Zm119.118-50.435,17.49.089,17.506.1c.412,0,.824.008,1.235,0a6.948,6.948,0,0,0,6.654-5.45,9.649,9.649,0,0,0,.186-2.156v-16.884c0-.363.008-.727-.008-1.082a7.25,7.25,0,0,0-.428-2.116,6.961,6.961,0,0,0-4.005-4.07,5.429,5.429,0,0,0-1.954-.444c-.565-.016-1.139-.032-1.7-.032h-72.664c-.412,0-.824-.008-1.235.008-.46.016-.929.057-1.389.089a2.291,2.291,0,0,0-.46.081,6.847,6.847,0,0,0-4.223,3.173,6.058,6.058,0,0,0-.888,2.778c-.024.412-.04.824-.04,1.235v17.5c0,.412.016.823.04,1.235a5.463,5.463,0,0,0,.88,2.608,7.115,7.115,0,0,0,3.084,2.729,5.966,5.966,0,0,0,2.382.6c.565.008,1.139.016,1.7.016C1076.947,1112.618,1089.027,1112.61,1102.681,1112.61Z" transform="translate(0 -786.454)"></path>
                                                    <path style="fill: var(--themeColor)" id="Path_2" data-name="Path 2" d="M973.39,222.331c-39.55.008-90.735.024-141.921.048q-15.031,0-30.062.057c-1.292,0-2.584.024-3.876.024-.258,0-.509-.04-.767-.057a.537.537,0,0,1-.315-.307c-.016-.2-.048-.412-.048-.614v-9.447a19.807,19.807,0,0,1,.371-3.844,16.845,16.845,0,0,1,2.293-5.878,25.362,25.362,0,0,1,1.906-2.632,18.683,18.683,0,0,1,8.422-5.83,19.746,19.746,0,0,1,3.609-.864,16.857,16.857,0,0,1,2.632-.121c1.34.008,2.689.016,4.029.016h331.919c.727,0,1.445.016,2.172,0a23.636,23.636,0,0,1,4.764.509,19.023,19.023,0,0,1,5.1,1.785,19.6,19.6,0,0,1,4.336,2.955,18.53,18.53,0,0,1,5.5,8.64c.145.493.283.993.388,1.494a10.736,10.736,0,0,1,.226,2.156c-.008,3.617,0,7.227-.008,10.844,0,.258-.024.517-.04.775a.63.63,0,0,1-.412.42c-.307.016-.622.04-.929.04-3,0-5.991.008-8.987,0-3.722-.008-7.437-.04-11.159-.048q-28.742-.036-57.492-.065C1058.368,222.348,1021.7,222.34,973.39,222.331Z" transform="translate(-0.219)"></path>
                                                    <path style="fill: var(--themeColor)" id="Path_3" data-name="Path 3" d="M4106.373,1489.8h36.248c.517,0,1.034.008,1.55.008a2.659,2.659,0,0,1,1.05.242,3.531,3.531,0,0,1,2.236,3.246c.024.363.008.719.008,1.082v16.1c0,.307.008.622-.008.929a3.71,3.71,0,0,1-1.558,2.9,3.31,3.31,0,0,1-1.865.678c-.364.016-.719.016-1.082.016q-15.491,0-30.975,0c-5.063.008-10.118.04-15.181.056q-11.773.049-23.546.1c-1.446.008-2.891,0-4.336.016a3.744,3.744,0,0,1-1.51-.307,3.481,3.481,0,0,1-1.978-2.059,2.174,2.174,0,0,1-.113-.452c-.04-.355-.081-.719-.1-1.074-.016-.412-.008-.824-.008-1.235q0-8.2-.008-16.408a5.826,5.826,0,0,1,.064-.921,3.4,3.4,0,0,1,1.7-2.463,2.988,2.988,0,0,1,1.615-.468h.775q18.507.012,37.014.008Zm-2.326,12.532c-.016.04-.016.1-.048.129a1.525,1.525,0,0,1-.339.307l-2.762,1.72c-.258.161-.525.331-.775.509a.359.359,0,0,0-.137.533,21.747,21.747,0,0,0,1.349,2.075.511.511,0,0,0,.428.1c.226-.121.46-.234.686-.363.767-.428,1.526-.872,2.285-1.3.226-.129.452-.242.686-.355.186-.1.469.032.477.218.017.258.041.517.041.767.008.929,0,1.857.008,2.786,0,.258.024.517.032.775a.488.488,0,0,0,.4.4,16.746,16.746,0,0,0,2.625.016.958.958,0,0,0,.145-.04.528.528,0,0,0,.307-.323c.024-.258.057-.509.057-.767.008-1.082.008-2.164.016-3.246a.9.9,0,0,1,.1-.452.245.245,0,0,1,.242-.137.7.7,0,0,1,.291.065c.855.476,1.712.953,2.568,1.437.266.153.541.3.815.452a.5.5,0,0,0,.678-.113c.42-.654.832-1.308,1.244-1.962a.454.454,0,0,0,.048-.145.307.307,0,0,0-.064-.291,3.186,3.186,0,0,0-.355-.3q-1.5-.957-3-1.906a2.664,2.664,0,0,1-.614-.46.173.173,0,0,1,.024-.266,2.4,2.4,0,0,1,.355-.291c.88-.541,1.76-1.074,2.64-1.615.267-.161.525-.331.783-.5a.464.464,0,0,0,.194-.654c-.42-.646-.848-1.292-1.268-1.938a.468.468,0,0,0-.549-.146c-.993.549-1.978,1.106-2.972,1.655-.226.121-.46.234-.694.347a.353.353,0,0,1-.379-.162,1.088,1.088,0,0,1-.081-.452c-.008-1.082-.008-2.164-.016-3.246-.008-.993-.1-1.09-1.026-1.1-.517-.008-1.033,0-1.55,0-.154,0-.307.008-.461.016a.531.531,0,0,0-.508.477c-.016.412-.024.824-.032,1.235-.008.88,0,1.752-.008,2.632a1.4,1.4,0,0,1-.064.452.265.265,0,0,1-.242.137,1.179,1.179,0,0,1-.428-.153c-1.034-.573-2.067-1.163-3.109-1.736a2.464,2.464,0,0,0-.428-.169.256.256,0,0,0-.282.089,14.663,14.663,0,0,0-1.43,2.2.411.411,0,0,0,.113.42c.218.145.428.291.646.428.92.573,1.841,1.147,2.753,1.72a5.291,5.291,0,0,1,.493.371C4104.007,1502.232,4104.023,1502.288,4104.047,1502.337Zm-9.479-2.947a1.12,1.12,0,0,0-.089-.291c-.42-.646-.848-1.292-1.276-1.938a.23.23,0,0,0-.121-.089c-.1-.032-.218-.089-.291-.056-1,.541-1.986,1.09-2.98,1.631a4.893,4.893,0,0,1-.823.412c-.121.04-.355-.065-.363-.178-.016-.2-.057-.412-.057-.614-.008-1.082,0-2.164-.008-3.246a3.157,3.157,0,0,0-.064-.614.337.337,0,0,0-.2-.218,1.414,1.414,0,0,0-.452-.1c-.719-.008-1.446-.008-2.164,0-.1,0-.2.032-.307.04a.52.52,0,0,0-.388.428c-.016.307-.032.614-.032.929-.008.929,0,1.857-.008,2.786a1.985,1.985,0,0,1-.065.614.337.337,0,0,1-.371.161,2.956,2.956,0,0,1-.283-.121c-.719-.4-1.437-.816-2.156-1.219l-1.211-.678a.487.487,0,0,0-.557.113c-.42.646-.84,1.3-1.251,1.946-.024.04-.032.1-.057.145a.523.523,0,0,0,.113.428c.25.178.5.363.759.533.743.468,1.494.921,2.237,1.389.307.194.589.412.888.622a.253.253,0,0,1-.024.388c-.21.145-.412.307-.63.444-1.009.63-2.019,1.244-3.02,1.873-.355.226-.42.428-.218.767.315.533.654,1.05.985,1.575.363.557.492.589,1.13.234.4-.218.807-.46,1.211-.686.444-.259.888-.525,1.332-.775.226-.121.468-.218.7-.323a.34.34,0,0,1,.46.25c.016.258.04.517.04.767.008.824,0,1.647,0,2.471,0,.307.016.622.024.929a.571.571,0,0,0,.469.533,15.766,15.766,0,0,0,2.471-.016c.048-.008.113-.008.146-.04.081-.065.186-.129.2-.218a2.542,2.542,0,0,0,.073-.606c.008-1.13,0-2.269.016-3.4a5.471,5.471,0,0,1,.073-.614c.089-.048.178-.129.267-.129a1.2,1.2,0,0,1,.444.113c.953.509,1.906,1.034,2.858,1.55.274.145.549.283.824.42a.467.467,0,0,0,.42-.129c.42-.646.84-1.292,1.26-1.946a.762.762,0,0,0,.057-.145.388.388,0,0,0-.073-.428c-.21-.146-.42-.3-.63-.436-.92-.573-1.841-1.147-2.753-1.72a5.562,5.562,0,0,1-.5-.355.252.252,0,0,1-.008-.388c.169-.121.331-.25.5-.355.92-.573,1.841-1.147,2.754-1.72.218-.137.428-.291.638-.436A.279.279,0,0,0,4094.568,1499.39Zm42.19-.032a.746.746,0,0,0-.041-.145,20.272,20.272,0,0,0-1.332-2.083.486.486,0,0,0-.428-.1c-.412.218-.824.436-1.228.662-.767.42-1.534.848-2.3,1.276a2,2,0,0,1-.282.1c-.121.048-.348-.073-.355-.194-.016-.2-.048-.412-.048-.614-.008-.928,0-1.857-.008-2.786,0-.307-.024-.622-.032-.929a.48.48,0,0,0-.4-.4,21.893,21.893,0,0,0-2.625-.024c-.048,0-.1.032-.145.032a.549.549,0,0,0-.331.3,5.214,5.214,0,0,0-.057.614c-.008.928,0,1.857-.008,2.786,0,.307-.024.614-.041.929a.327.327,0,0,1-.452.258c-.63-.347-1.259-.7-1.889-1.05-.589-.323-1.171-.654-1.76-.977a.424.424,0,0,0-.42.1,17.5,17.5,0,0,0-1.349,2.067.427.427,0,0,0,.162.541c.347.226.694.452,1.042.67.832.525,1.664,1.042,2.487,1.566.129.081.234.2.355.291s.113.161,0,.25a3.946,3.946,0,0,1-.355.291c-.832.525-1.663,1.034-2.495,1.55-.348.218-.694.444-1.042.662a.4.4,0,0,0-.129.541c.331.525.662,1.042.993,1.566.517.824.613.678,1.356.3.46-.234.9-.517,1.34-.767.541-.307,1.082-.606,1.623-.9a1.193,1.193,0,0,1,.291-.081.337.337,0,0,1,.355.218,6.1,6.1,0,0,1,.057,1.082c.016,1.082.024,2.164.04,3.246a.476.476,0,0,0,.364.428,15.828,15.828,0,0,0,2.624.016c.048,0,.1-.032.154-.032.1-.016.3-.218.3-.315.016-.258.041-.517.048-.767.008-1.034,0-2.067.008-3.093a2.624,2.624,0,0,1,.065-.614.3.3,0,0,1,.226-.161,1.049,1.049,0,0,1,.436.129c.945.525,1.89,1.066,2.834,1.591.226.121.46.226.694.331a.241.241,0,0,0,.291-.065,1.415,1.415,0,0,0,.21-.226c.387-.606.775-1.219,1.163-1.825.153-.242.081-.468-.186-.646l-.775-.509-2.5-1.551c-.17-.1-.331-.242-.493-.363a.24.24,0,0,1,.057-.38c.169-.121.339-.242.509-.347.92-.573,1.841-1.147,2.753-1.72.218-.137.42-.291.63-.444A.34.34,0,0,0,4136.758,1499.357Z" transform="translate(-3005.073 -1192.209)"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="errorMessage error"></div>
                                </div>
                            </div>

                            

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="pay-btn">
                                    <button type="submit" id="creditcardpaybtn" class="btn btn-primary pay-qar-btn paynow_btn paynowclasscredit">
                                                                                    Pay
                                                                                <span class="totalamtspan">
                                                                                            <?php echo $_GET['amount'];?><sup> <?php echo $_GET['currency'];?></sup>
                                                                                    </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        
                        
                        
                                            </form>
                </div>
                

                
                <div class="tab-pane fade pt-0" id="pills-debit" role="tabpanel" aria-labelledby="pills-debit-tab">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <form class="form-horizontal" id="debitcardform" action="" method="post" onsubmit="return false;" novalidate="novalidate">
                            <!--common fields-->
                            <input type="hidden" name="cardtypetextdebit" value="Visa" id="cardtypetextdebit">
                            <input type="hidden" name="cardtypetextdebit_id" value="1" id="cardtypetextdebit_id">
                            <input type="hidden" name="debit_phoneno_hidden" id="debit_phoneno_hidden" value="+201023864504">
                            <input type="hidden" name="debit_countrycode_hidden" id="debit_countrycode_hidden" value="">
                            <input type="hidden" name="debit_otp_hidden" id="debit_otp_hidden">
                            <input type="hidden" name="debit_otp_expiry_hidden" id="debit_otp_expiry_hidden">
                            <input type="hidden" name="transactionEntityId" value="7">
                            <input type="hidden" name="transactionmodeId" value="2">
                            <input type="hidden" name="_token" value="wGK8GltfbkLLOTB14vuo25A0IF6yFL2LPBZvcquK">

                            
                                                                                                <input type="hidden" name="issandboxmode" value="0">
                                                                <input type="hidden" name="debit_email_hidden" id="debit_email_hidden" value="">
                                <input type="hidden" id="productamount1d" name="productamount" class="form-control productamount" value="600">
                                <input type="hidden" id="vendorId1d" name="vendorId" class="form-control" value="32125">
                                <input type="hidden" id="website_ref_no_debit" name="website_ref_no_debit" class="form-control" value="j0suugr8gks5lrns42cm">
                                <input type="hidden" id="merchant_code_debit" name="merchant_code_debit" class="form-control" value="8721629">
                                <input type="hidden" id="return_url_debit" name="return_url_debit" class="form-control" value="https://eventat.thanosx.icu/">
                                <input type="hidden" id="product_json_debit" name="product_json_debit" class="form-control" value="[{&quot;order_id&quot;:&quot;pbqhjvtomgo8669hb6o8&quot;,&quot;quantity&quot;:&quot;1&quot;,&quot;amount&quot;:&quot; <?php echo $_GET['amount'];?><sup> <?php echo $_GET['currency'];?>&quot;,&quot;itemname&quot;:&quot;Tickets&quot;}]">
                                <input type="hidden" id="ORDER_ID_debit" name="ORDER_ID_debit" class="form-control" value="j0suugr8gks5lrns42cm">
                            
                            
                            
                            
                            
                            
                            <div class="debit_contrycode_phonenumber" style="display:none">
                                                    </div>
                    </form>

                    <div class="debit-card-content">
                        <div class="debitcard-image-box">
                            <img src="https://sadadqa.com/public/checkoutpages/images/payout/naps.svg" alt="" title="">
                            <img src="https://sadadqa.com/public/checkoutpages/images/payout/himyan.svg" alt="" title="">
                        </div>
                        <div class="debitcard-in-text">
                            <p>
                                                                    When you choose to complete your payment using a debit card issued in Qatar, you will be temporarily redirected to the QPay website. Once the transaction is completed, you`ll be taken back to the Sadad to view your confirmation.
                                                            </p>
                        </div>
                    </div>

                    <div class="pay-btn">
                        <button type="submit" id="debitcardpaybtn" class="btn btn-primary pay-qar-btn paynow_btn paynowclassdebit">
                                                            Pay
                                                        <span class="totalamtspan">
                                                                     <?php echo $_GET['amount'];?><sup> <?php echo $_GET['currency'];?><sup>QAR</sup>
                                                            </span>
                        </button>
                    </div>
                </div>
            </div>
            

            
                                                <div class="tab-pane fade pt-0" id="pills-sadad" role="tabpanel" aria-labelledby="pills-sadad-tab">
                        <div class="sadad-pay-main">
                            <div class="d-flex justify-content-between">
                                <div class="sadad-login-box">
                                    <div class="sp-sadad-logo">
                                        <img src="https://sadadqa.com/public/checkoutpages/images/payout/sadad-logo.svg" alt="" title="">
                                    </div>
                                    <div class="sp-sadad-content">
                                        <p>
                                                                                            Login with your Sadad account
                                                                                    </p>
                                    </div>
                                </div>
                                <div class="sp-qr-codebox">
                                    
                                                                    </div>
                            </div>
                            <form name="credit-info" class="credit-info form mt-3" id="customerlogin" action="" method="post" onsubmit="return false;" novalidate="novalidate">

                                <!--Common fields-->
                                <input type="hidden" name="_token" value="wGK8GltfbkLLOTB14vuo25A0IF6yFL2LPBZvcquK">
                                <input class="form-control" name="otptextbox" type="hidden" value="" id="otptextbox">

                                
                                                                                                            <input type="hidden" name="issandboxmode" value="0">
                                                                        <input type="hidden" name="iswebcheckoutmode" id="iswebcheckoutmode" value="1">
                                    <input type="hidden" id="totalavailablefund" name="totalavailablefund" class="form-control" value="">
                                    <input type="hidden" id="productamount1s" name="productamount" class="form-control productamount" value="600">
                                    <input type="hidden" id="vendorId" name="vendorId" class="form-control" value="32125">
                                    <!--New added field-->
                                    <input type="hidden" id="website_ref_no" name="website_ref_no" class="form-control" value="j0suugr8gks5lrns42cm">
                                    <input type="hidden" id="merchant_code" name="merchant_code" class="form-control" value="8721629">
                                    <input type="hidden" id="return_url" name="return_url" class="form-control" value="https://eventat.thanosx.icu/">
                                    <input type="hidden" id="product_json" name="product_json" class="form-control" value="[{&quot;order_id&quot;:&quot;pbqhjvtomgo8669hb6o8&quot;,&quot;quantity&quot;:&quot;1&quot;,&quot;amount&quot;:&quot; <?php echo $_GET['amount'];?><sup> <?php echo $_GET['currency'];?>&quot;,&quot;itemname&quot;:&quot;Tickets&quot;}]">
                                    <input type="hidden" id="ORDER_ID" name="ORDER_ID" class="form-control" value="j0suugr8gks5lrns42cm">
                                
                                
                                
                                
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control digits" required="" name="sadaduser_phoneno" id="sadaduser_phoneno" minlength="8" maxlength="8" placeholder="Cell Number" autocomplete="off" pattern="[0-9]+" inputmode="numeric" aria-required="true">
                                            <label for="validationCustom03">
                                                                                                    Cell Number
                                                                                            </label>
                                            <div class="errorMessage error"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" name="password" id="sadaduser_password" required="" maxlength="15" placeholder="Password" autocomplete="off" aria-required="true">
                                            <label for="validationCustom03">
                                                                                                    Password
                                                                                            </label>
                                            <div class="errorMessage error"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="pay-btn">
                                            <button id="sadaduserpaybtn" type="submit" class="btn btn-primary pay-qar-btn paynow_btn paynowclass" disabled="">
                                                                                                    Pay
                                                                                                <span class="totalamtspan">
                                                                                                             <?php echo $_GET['amount'];?><sup> <?php echo $_GET['currency'];?><sup>QAR</sup>
                                                                                                    </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                                        

        </div>
    </div>
</div>

<div class="secure-content">
    <div class="d-flex align-items-center justify-content-center">
        <div class="secure-img" style="margin-top: -4px !important; margin-right: 5px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="10.42" height="11.219" viewBox="0 0 10.42 11.219">
                <path id="lock-svgrepo-com" d="M17.565,10.919H13.141a2.821,2.821,0,0,1-2.848-2.786V4.507a.2.2,0,0,1,.2-.2h.791V3.941A3.99,3.99,0,0,1,15.314,0h.077a3.99,3.99,0,0,1,4.028,3.941V4.31h.791a.2.2,0,0,1,.2.2V8.133A2.821,2.821,0,0,1,17.565,10.919ZM10.7,4.705V8.133a2.42,2.42,0,0,0,2.444,2.391h4.424a2.42,2.42,0,0,0,2.444-2.391V4.705Zm.993-.4h7.325V3.941A3.589,3.589,0,0,0,15.392.4h-.077a3.589,3.589,0,0,0-3.624,3.545Zm3.667,5.125h-.008a.609.609,0,0,1-.614-.6V7.994a1.168,1.168,0,0,1-.577-1,1.2,1.2,0,0,1,2.391,0,1.168,1.168,0,0,1-.577,1v.839A.609.609,0,0,1,15.357,9.435Zm0-3.214a.784.784,0,0,0-.791.774.776.776,0,0,0,.46.7.2.2,0,0,1,.117.179v.957a.208.208,0,0,0,.21.206h.008a.208.208,0,0,0,.21-.206V7.876a.2.2,0,0,1,.117-.179.776.776,0,0,0,.46-.7A.784.784,0,0,0,15.353,6.22Z" transform="translate(-10.143 0.15)" fill="var(--themeColor)" stroke="var(--themeColor)" stroke-width="0.3"></path>
            </svg>
        </div>
        <div class="secure-payment-text">
            <p>
                                    Payment is Secured with 256 bit SSL encryption <span> (You are safe) </span>
                            </p>
        </div>
    </div>
</div>
</div>

<form id="processWalletPayForm" action="" method="POST">
    <input type="hidden" name="data" id="processWalletPayData" value="">
    <input type="hidden" name="paymentToken" id="processWalletPayToken" value="">
</form>
    </div>
</div>

<div class="error-modal-wrapper">
    <div class="modal fade" id="error_popup_id" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="error-m-image">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.355" height="21.507" viewBox="0 0 24.355 21.507">
                            <g id="caution-svgrepo-com" transform="translate(0 -11.528)">
                                <g id="Group_1" data-name="Group 1" transform="translate(0 11.528)">
                                    <path id="Path_1" data-name="Path 1" d="M24.094,30.621,13.52,12.307a1.552,1.552,0,0,0-2.691,0L.208,30.7a1.555,1.555,0,0,0,1.345,2.331H22.8a1.555,1.555,0,0,0,1.552-1.554A1.492,1.492,0,0,0,24.094,30.621ZM22.8,32.134H1.553a.654.654,0,0,1-.566-.982l10.621-18.4a.655.655,0,0,1,1.134,0l10.6,18.35a.653.653,0,0,1-.535,1.029Z" transform="translate(0 -11.528)" fill="var(--themeColor)"></path>
                                    <path id="Path_2" data-name="Path 2" d="M91.29,75.617l.245-8.362H89.709l.244,8.362Z" transform="translate(-78.626 -60.37)" fill="var(--themeColor)"></path>
                                    <path id="Path_3" data-name="Path 3" d="M89.314,144.637a1.148,1.148,0,1,0,1.1,1.146A1.074,1.074,0,0,0,89.314,144.637Z" transform="translate(-77.319 -128.193)" fill="var(--themeColor)"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="error-m-details">
                        <h6 class="divtext_error">
                        </h6>
                    </div>
                    <div class="ok-button text-center">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Delete Credit Card Token popup start-->
<div class="modal fade" id="delete_ccToken_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Delete Credit Card</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body" style="padding-top:11px;">
                <div class="row">
                    <div class="col-md-12 m-t-10">
                        <h4>
                            Are you sure you want to detele this card?
                        </h4>
                        <h4 id="delete_card_number">

                        </h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-default" data-dismiss="modal" style="color: #fff; background:#531232;" id="delete_card_confirm">
                    Ok
                </a>
                <a class="btn btn-primary" data-dismiss="modal" style="color: #fff;" id="delete_card_cancel">
                    Cancel
                </a>
            </div>
        </div>
    </div>
</div>
<!--Delete Credit Card Token popup end-->


<div class="cancel-payment-modal-wrapper">
    <div class="modal fade" id="backModalToggle" aria-hidden="true" aria-labelledby="backModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="cancel-payment-content">
                        <div class="cancel-pay-icon text-center">
                            <img src="images/cancel-payment.svg" alt="" title="">
                        </div>
                        <h5>
                                                            Cancel Payment
                                                    </h5>
                        <p>
                                                            Are you sure you want to cancel this transaction?
                                                    </p>
                        <div class="cancel-pay-btn">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary can-btn-no me-3" data-bs-dismiss="modal" aria-label="Close">
                                                                            No
                                                                    </button>
                                <a href="https://eventat.thanosx.icu/" class="btn btn-primary can-btn-yes">
                                                                            Yes, Cancel
                                                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cancel-payment-modal-wrapper">
    <div class="modal fade" id="sadaduser_otp_popup" aria-hidden="true" aria-labelledby="sadaduser_otp_popupLabel" tabindex="-1">

    </div>
</div>

<div class="modal fade" id="creditcard_otp_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">

</div>

<div class="modal fade" id="debitcard_otp_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">

</div>

<!--Debit redirect modal start-->


<div class="error-modal-wrapper">
    <div class="modal fade" id="debitredirect_popup" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="width: 100%;">
                <button type="button" class="btn-close" id="debitredirect_cancel" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="error-m-image">
                        <img src="https://sadadqa.com/public/checkoutpages/images/caution.svg">
                    </div>
                    <div class="error-m-details">
                        <h6 class="divtext_error" id="debitredirect_message">
                        </h6>
                    </div>
                    <div class="ok-button text-center">
                        <button type="submit" id="debitredirect_confirm" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="checkoutFlag" value="0">
<!--Debit redirect modal end-->

<!-- Footer section -->
<div class="footer-link-main">
    <ul>
        <li>
                            <a href="tel:+974-44464666">
                    Help Desk : <span dir="ltr">+974-44464666</span>
                </a>
                    </li>
        <li>
                                                <a href="https://sadad.qa/en/privacy-policy/">
                        Privacy Policy
                    </a>
                    |
                    <a href="https://sadad.qa/en/terms-conditions/">
                        Terms &amp; Conditions
                    </a>
                            
        </li>
        <li>
                            <a href="https://sadad.qa">Powered By Sadad</a>
                    </li>

    </ul>
</div>
</div>
</div>
</div>
</div>

<div class="cvv-modal-wrapper">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="cvv-card-wrap">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 377.684 234.212" style="">
                            <g id="CVV" transform="translate(-796.162 -192.864)">
                                <path style="fill: var(--themeColor)" id="Path_1" data-name="Path 1" d="M985.121,1048.416h186.251c.67,0,1.34.016,2.01.032a.471.471,0,0,1,.4.4c.016.153.04.307.048.46.008.412.008.824.008,1.235v144.812c0,.258-.008.517,0,.775a5.694,5.694,0,0,1-.21,1.688c-.21.743-.315,1.51-.557,2.253a19.822,19.822,0,0,1-4.764,7.881,18.254,18.254,0,0,1-9.076,5.039c-.7.161-1.413.307-2.116.452a4.869,4.869,0,0,1-.767.081c-.517.016-1.034.008-1.55.008H815.932c-.565,0-1.139-.008-1.7,0a3.315,3.315,0,0,1-1.5-.275,4.6,4.6,0,0,0-1.2-.323c-.258-.04-.5-.1-.759-.161a17.289,17.289,0,0,1-6.452-2.907,19.22,19.22,0,0,1-6.936-8.721,18.808,18.808,0,0,1-1.082-4.029,15.8,15.8,0,0,1-.137-2.471c0-.88.008-1.752.008-2.633V1050.758a12.871,12.871,0,0,1,.057-2.011.5.5,0,0,1,.315-.3c.1-.008.2-.032.307-.04.258-.008.517-.008.775-.008h1.55q92.972.024,185.944.016Zm-55.174,63.863h107.386c.153,0,.307-.008.46-.016a.478.478,0,0,0,.509-.46c.016-.412.032-.823.032-1.235v-42.594c0-.363-.008-.719-.024-1.082a.6.6,0,0,0-.073-.291.44.44,0,0,0-.218-.2,3.68,3.68,0,0,0-1.074-.1c-3.771-.04-7.542-.1-11.313-.113q-16.352-.049-32.695-.065-63.068-.012-126.127-.016-19.44,0-38.888.057c-1.7,0-3.408.024-5.111.048a3.9,3.9,0,0,0-.606.081.531.531,0,0,0-.3.331,2.084,2.084,0,0,0-.048.3c-.008.468-.016.929-.016,1.4v41.819c0,.412,0,.823.008,1.235,0,.153.024.307.032.46a.448.448,0,0,0,.38.412c.622.016,1.235.04,1.857.04Zm53.891,16.117H825.783c-.565,0-1.139,0-1.7.008a1.743,1.743,0,0,0-.46.049,2.207,2.207,0,0,0-1.7,1.97,4.384,4.384,0,0,0,0,.46,1.907,1.907,0,0,0,.355,1.009,2.111,2.111,0,0,0,1.542.937c.2.024.412.032.622.04.468.008.929,0,1.4,0h315.963c.517,0,1.034.008,1.55-.008a4.855,4.855,0,0,0,.767-.1,1.875,1.875,0,0,0,1.058-.605,2.148,2.148,0,0,0,.589-1.849,2.263,2.263,0,0,0-2.14-1.9c-.622-.016-1.244-.008-1.857-.008Q1062.768,1128.392,983.837,1128.4Zm.04,20.122h-158.2c-.622,0-1.243.008-1.857,0a2.053,2.053,0,0,0-1.163.371,2.162,2.162,0,0,0-1,1.825,2.135,2.135,0,0,0,.848,1.744,1.882,1.882,0,0,0,.977.428,11.424,11.424,0,0,0,1.389.065c1.034-.008,2.067-.024,3.1-.024H880.5q26.259,0,52.526,0c17.506.008,35.02-.048,52.526.04h156.5c.468,0,.929,0,1.4-.008a5.112,5.112,0,0,0,.614-.048,1.868,1.868,0,0,0,1.389-.88,2.119,2.119,0,0,0,.347-1.171,2.26,2.26,0,0,0-.355-1.324,2.092,2.092,0,0,0-1.663-1c-.67-.04-1.34-.024-2.011-.024Q1062.828,1148.523,983.878,1148.519ZM983.724,1183h157.594c.622,0,1.244,0,1.857-.008a6.028,6.028,0,0,0,.767-.065,1.651,1.651,0,0,0,.84-.371,2,2,0,0,0,.8-1.445,2.994,2.994,0,0,0-.073-1.074,1.658,1.658,0,0,0-.178-.428,2.062,2.062,0,0,0-1.647-1.017c-.67-.048-1.34-.024-2.011-.024H827.891c-1.082,0-2.172-.008-3.254-.008a8.048,8.048,0,0,0-1.082.04,2.017,2.017,0,0,0-1.5.977,2.248,2.248,0,0,0,.065,2.487,1.905,1.905,0,0,0,1.4.88,7.909,7.909,0,0,0,1.235.065c.985-.016,1.962-.024,2.947-.024Q905.7,1183.006,983.724,1183Zm-.048-10.013h158.192c.565,0,1.139,0,1.7-.016a2.254,2.254,0,0,0,.46-.065,2.078,2.078,0,0,0,1.462-1.639,7.142,7.142,0,0,0,.008-.928,1.272,1.272,0,0,0-.1-.452,1.959,1.959,0,0,0-1.768-1.3c-.67-.032-1.34-.024-2.011-.024H825.7c-.517,0-1.034-.008-1.55.008-.258.008-.517.032-.767.065a.9.9,0,0,0-.3.073,2.23,2.23,0,0,0-1.405,1.89,2.144,2.144,0,0,0,.953,2,1.721,1.721,0,0,0,1,.38c.363.008.719.016,1.082.016,1.138,0,2.269-.008,3.407-.008Zm.065-30.046v.024h159.12c.21,0,.412-.008.622-.016a1.8,1.8,0,0,0,1-.363,2.241,2.241,0,0,0,.291-3.5,1.958,1.958,0,0,0-1.082-.565,6.368,6.368,0,0,0-1.235-.089c-1.187.016-2.374.032-3.561.032H830.886c-2.172,0-4.336.057-6.508-.057a3.248,3.248,0,0,0-1.074.137,1.865,1.865,0,0,0-.557.266,2.309,2.309,0,0,0-.864,2.6,2.282,2.282,0,0,0,1.962,1.518c.622.008,1.235.008,1.857.008H983.74Zm-.178,20.106h157.893c.622,0,1.244,0,1.857-.008a2.879,2.879,0,0,0,.46-.032,2.122,2.122,0,0,0,1.672-1.631,4.081,4.081,0,0,0,.048-.767,1.959,1.959,0,0,0-.824-1.591,1.6,1.6,0,0,0-.694-.315,7.05,7.05,0,0,0-1.542-.1c-1.082.016-2.172.04-3.254.04H828.964c-1.55,0-3.1-.024-4.651-.032a4.753,4.753,0,0,0-1.074.1,1.842,1.842,0,0,0-.565.242,2.108,2.108,0,0,0-.783.937,2.157,2.157,0,0,0,0,1.8,2.116,2.116,0,0,0,1.906,1.357c.614.04,1.235.016,1.857.016Q904.625,1163.041,983.563,1163.045Zm119.118-50.435,17.49.089,17.506.1c.412,0,.824.008,1.235,0a6.948,6.948,0,0,0,6.654-5.45,9.649,9.649,0,0,0,.186-2.156v-16.884c0-.363.008-.727-.008-1.082a7.25,7.25,0,0,0-.428-2.116,6.961,6.961,0,0,0-4.005-4.07,5.429,5.429,0,0,0-1.954-.444c-.565-.016-1.139-.032-1.7-.032h-72.664c-.412,0-.824-.008-1.235.008-.46.016-.929.057-1.389.089a2.291,2.291,0,0,0-.46.081,6.847,6.847,0,0,0-4.223,3.173,6.058,6.058,0,0,0-.888,2.778c-.024.412-.04.824-.04,1.235v17.5c0,.412.016.823.04,1.235a5.463,5.463,0,0,0,.88,2.608,7.115,7.115,0,0,0,3.084,2.729,5.966,5.966,0,0,0,2.382.6c.565.008,1.139.016,1.7.016C1076.947,1112.618,1089.027,1112.61,1102.681,1112.61Z" transform="translate(0 -786.454)"></path>
                                <path style="fill: var(--themeColor)" id="Path_2" data-name="Path 2" d="M973.39,222.331c-39.55.008-90.735.024-141.921.048q-15.031,0-30.062.057c-1.292,0-2.584.024-3.876.024-.258,0-.509-.04-.767-.057a.537.537,0,0,1-.315-.307c-.016-.2-.048-.412-.048-.614v-9.447a19.807,19.807,0,0,1,.371-3.844,16.845,16.845,0,0,1,2.293-5.878,25.362,25.362,0,0,1,1.906-2.632,18.683,18.683,0,0,1,8.422-5.83,19.746,19.746,0,0,1,3.609-.864,16.857,16.857,0,0,1,2.632-.121c1.34.008,2.689.016,4.029.016h331.919c.727,0,1.445.016,2.172,0a23.636,23.636,0,0,1,4.764.509,19.023,19.023,0,0,1,5.1,1.785,19.6,19.6,0,0,1,4.336,2.955,18.53,18.53,0,0,1,5.5,8.64c.145.493.283.993.388,1.494a10.736,10.736,0,0,1,.226,2.156c-.008,3.617,0,7.227-.008,10.844,0,.258-.024.517-.04.775a.63.63,0,0,1-.412.42c-.307.016-.622.04-.929.04-3,0-5.991.008-8.987,0-3.722-.008-7.437-.04-11.159-.048q-28.742-.036-57.492-.065C1058.368,222.348,1021.7,222.34,973.39,222.331Z" transform="translate(-0.219)"></path>
                                <path style="fill: var(--themeColor)" id="Path_3" data-name="Path 3" d="M4106.373,1489.8h36.248c.517,0,1.034.008,1.55.008a2.659,2.659,0,0,1,1.05.242,3.531,3.531,0,0,1,2.236,3.246c.024.363.008.719.008,1.082v16.1c0,.307.008.622-.008.929a3.71,3.71,0,0,1-1.558,2.9,3.31,3.31,0,0,1-1.865.678c-.364.016-.719.016-1.082.016q-15.491,0-30.975,0c-5.063.008-10.118.04-15.181.056q-11.773.049-23.546.1c-1.446.008-2.891,0-4.336.016a3.744,3.744,0,0,1-1.51-.307,3.481,3.481,0,0,1-1.978-2.059,2.174,2.174,0,0,1-.113-.452c-.04-.355-.081-.719-.1-1.074-.016-.412-.008-.824-.008-1.235q0-8.2-.008-16.408a5.826,5.826,0,0,1,.064-.921,3.4,3.4,0,0,1,1.7-2.463,2.988,2.988,0,0,1,1.615-.468h.775q18.507.012,37.014.008Zm-2.326,12.532c-.016.04-.016.1-.048.129a1.525,1.525,0,0,1-.339.307l-2.762,1.72c-.258.161-.525.331-.775.509a.359.359,0,0,0-.137.533,21.747,21.747,0,0,0,1.349,2.075.511.511,0,0,0,.428.1c.226-.121.46-.234.686-.363.767-.428,1.526-.872,2.285-1.3.226-.129.452-.242.686-.355.186-.1.469.032.477.218.017.258.041.517.041.767.008.929,0,1.857.008,2.786,0,.258.024.517.032.775a.488.488,0,0,0,.4.4,16.746,16.746,0,0,0,2.625.016.958.958,0,0,0,.145-.04.528.528,0,0,0,.307-.323c.024-.258.057-.509.057-.767.008-1.082.008-2.164.016-3.246a.9.9,0,0,1,.1-.452.245.245,0,0,1,.242-.137.7.7,0,0,1,.291.065c.855.476,1.712.953,2.568,1.437.266.153.541.3.815.452a.5.5,0,0,0,.678-.113c.42-.654.832-1.308,1.244-1.962a.454.454,0,0,0,.048-.145.307.307,0,0,0-.064-.291,3.186,3.186,0,0,0-.355-.3q-1.5-.957-3-1.906a2.664,2.664,0,0,1-.614-.46.173.173,0,0,1,.024-.266,2.4,2.4,0,0,1,.355-.291c.88-.541,1.76-1.074,2.64-1.615.267-.161.525-.331.783-.5a.464.464,0,0,0,.194-.654c-.42-.646-.848-1.292-1.268-1.938a.468.468,0,0,0-.549-.146c-.993.549-1.978,1.106-2.972,1.655-.226.121-.46.234-.694.347a.353.353,0,0,1-.379-.162,1.088,1.088,0,0,1-.081-.452c-.008-1.082-.008-2.164-.016-3.246-.008-.993-.1-1.09-1.026-1.1-.517-.008-1.033,0-1.55,0-.154,0-.307.008-.461.016a.531.531,0,0,0-.508.477c-.016.412-.024.824-.032,1.235-.008.88,0,1.752-.008,2.632a1.4,1.4,0,0,1-.064.452.265.265,0,0,1-.242.137,1.179,1.179,0,0,1-.428-.153c-1.034-.573-2.067-1.163-3.109-1.736a2.464,2.464,0,0,0-.428-.169.256.256,0,0,0-.282.089,14.663,14.663,0,0,0-1.43,2.2.411.411,0,0,0,.113.42c.218.145.428.291.646.428.92.573,1.841,1.147,2.753,1.72a5.291,5.291,0,0,1,.493.371C4104.007,1502.232,4104.023,1502.288,4104.047,1502.337Zm-9.479-2.947a1.12,1.12,0,0,0-.089-.291c-.42-.646-.848-1.292-1.276-1.938a.23.23,0,0,0-.121-.089c-.1-.032-.218-.089-.291-.056-1,.541-1.986,1.09-2.98,1.631a4.893,4.893,0,0,1-.823.412c-.121.04-.355-.065-.363-.178-.016-.2-.057-.412-.057-.614-.008-1.082,0-2.164-.008-3.246a3.157,3.157,0,0,0-.064-.614.337.337,0,0,0-.2-.218,1.414,1.414,0,0,0-.452-.1c-.719-.008-1.446-.008-2.164,0-.1,0-.2.032-.307.04a.52.52,0,0,0-.388.428c-.016.307-.032.614-.032.929-.008.929,0,1.857-.008,2.786a1.985,1.985,0,0,1-.065.614.337.337,0,0,1-.371.161,2.956,2.956,0,0,1-.283-.121c-.719-.4-1.437-.816-2.156-1.219l-1.211-.678a.487.487,0,0,0-.557.113c-.42.646-.84,1.3-1.251,1.946-.024.04-.032.1-.057.145a.523.523,0,0,0,.113.428c.25.178.5.363.759.533.743.468,1.494.921,2.237,1.389.307.194.589.412.888.622a.253.253,0,0,1-.024.388c-.21.145-.412.307-.63.444-1.009.63-2.019,1.244-3.02,1.873-.355.226-.42.428-.218.767.315.533.654,1.05.985,1.575.363.557.492.589,1.13.234.4-.218.807-.46,1.211-.686.444-.259.888-.525,1.332-.775.226-.121.468-.218.7-.323a.34.34,0,0,1,.46.25c.016.258.04.517.04.767.008.824,0,1.647,0,2.471,0,.307.016.622.024.929a.571.571,0,0,0,.469.533,15.766,15.766,0,0,0,2.471-.016c.048-.008.113-.008.146-.04.081-.065.186-.129.2-.218a2.542,2.542,0,0,0,.073-.606c.008-1.13,0-2.269.016-3.4a5.471,5.471,0,0,1,.073-.614c.089-.048.178-.129.267-.129a1.2,1.2,0,0,1,.444.113c.953.509,1.906,1.034,2.858,1.55.274.145.549.283.824.42a.467.467,0,0,0,.42-.129c.42-.646.84-1.292,1.26-1.946a.762.762,0,0,0,.057-.145.388.388,0,0,0-.073-.428c-.21-.146-.42-.3-.63-.436-.92-.573-1.841-1.147-2.753-1.72a5.562,5.562,0,0,1-.5-.355.252.252,0,0,1-.008-.388c.169-.121.331-.25.5-.355.92-.573,1.841-1.147,2.754-1.72.218-.137.428-.291.638-.436A.279.279,0,0,0,4094.568,1499.39Zm42.19-.032a.746.746,0,0,0-.041-.145,20.272,20.272,0,0,0-1.332-2.083.486.486,0,0,0-.428-.1c-.412.218-.824.436-1.228.662-.767.42-1.534.848-2.3,1.276a2,2,0,0,1-.282.1c-.121.048-.348-.073-.355-.194-.016-.2-.048-.412-.048-.614-.008-.928,0-1.857-.008-2.786,0-.307-.024-.622-.032-.929a.48.48,0,0,0-.4-.4,21.893,21.893,0,0,0-2.625-.024c-.048,0-.1.032-.145.032a.549.549,0,0,0-.331.3,5.214,5.214,0,0,0-.057.614c-.008.928,0,1.857-.008,2.786,0,.307-.024.614-.041.929a.327.327,0,0,1-.452.258c-.63-.347-1.259-.7-1.889-1.05-.589-.323-1.171-.654-1.76-.977a.424.424,0,0,0-.42.1,17.5,17.5,0,0,0-1.349,2.067.427.427,0,0,0,.162.541c.347.226.694.452,1.042.67.832.525,1.664,1.042,2.487,1.566.129.081.234.2.355.291s.113.161,0,.25a3.946,3.946,0,0,1-.355.291c-.832.525-1.663,1.034-2.495,1.55-.348.218-.694.444-1.042.662a.4.4,0,0,0-.129.541c.331.525.662,1.042.993,1.566.517.824.613.678,1.356.3.46-.234.9-.517,1.34-.767.541-.307,1.082-.606,1.623-.9a1.193,1.193,0,0,1,.291-.081.337.337,0,0,1,.355.218,6.1,6.1,0,0,1,.057,1.082c.016,1.082.024,2.164.04,3.246a.476.476,0,0,0,.364.428,15.828,15.828,0,0,0,2.624.016c.048,0,.1-.032.154-.032.1-.016.3-.218.3-.315.016-.258.041-.517.048-.767.008-1.034,0-2.067.008-3.093a2.624,2.624,0,0,1,.065-.614.3.3,0,0,1,.226-.161,1.049,1.049,0,0,1,.436.129c.945.525,1.89,1.066,2.834,1.591.226.121.46.226.694.331a.241.241,0,0,0,.291-.065,1.415,1.415,0,0,0,.21-.226c.387-.606.775-1.219,1.163-1.825.153-.242.081-.468-.186-.646l-.775-.509-2.5-1.551c-.17-.1-.331-.242-.493-.363a.24.24,0,0,1,.057-.38c.169-.121.339-.242.509-.347.92-.573,1.841-1.147,2.753-1.72.218-.137.42-.291.63-.444A.34.34,0,0,0,4136.758,1499.357Z" transform="translate(-3005.073 -1192.209)"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="cvv-m-details">
                        <h6>
                                                            What is CVV
                                                    </h6>
                        <p>
                                                            CVV is the three-digit number on the back of your credit card.
                                                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="error-modal-wrapper">
    <div class="modal fade" id="alertModalToggle" aria-hidden="true" aria-labelledby="alertModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="error-m-image">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24.355" height="21.507" viewBox="0 0 24.355 21.507">
                            <g id="caution-svgrepo-com" transform="translate(0 -11.528)">
                                <g id="Group_1" data-name="Group 1" transform="translate(0 11.528)">
                                    <path id="Path_1" data-name="Path 1" d="M24.094,30.621,13.52,12.307a1.552,1.552,0,0,0-2.691,0L.208,30.7a1.555,1.555,0,0,0,1.345,2.331H22.8a1.555,1.555,0,0,0,1.552-1.554A1.492,1.492,0,0,0,24.094,30.621ZM22.8,32.134H1.553a.654.654,0,0,1-.566-.982l10.621-18.4a.655.655,0,0,1,1.134,0l10.6,18.35a.653.653,0,0,1-.535,1.029Z" transform="translate(0 -11.528)" fill="var(--themeColor)"></path>
                                    <path id="Path_2" data-name="Path 2" d="M91.29,75.617l.245-8.362H89.709l.244,8.362Z" transform="translate(-78.626 -60.37)" fill="var(--themeColor)"></path>
                                    <path id="Path_3" data-name="Path 3" d="M89.314,144.637a1.148,1.148,0,1,0,1.1,1.146A1.074,1.074,0,0,0,89.314,144.637Z" transform="translate(-77.319 -128.193)" fill="var(--themeColor)"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="error-m-details alert-message">
                        <h6>There is an error processing your credit card.</h6>
                    </div>
                    <div class="ok-button text-center">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--MPGS 3DS2 Iframe Modal Start -->
<style>
    #threedsFrictionLessRedirect {
        height: 100vh
    }

    #challengeFrame {
        height: 100%;
        width: 100%;
    }

    iframe#challengeFrame {
        position: relative;
    }
</style>
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="mpgs_iframe_popup" role="dialog" aria-labelledby="exampleModalLabel1" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static">

    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body p-3">
                <div class="row">
                    <div class="col-md-12" id="iframe_data">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MPGS 3DS2 Iframe Modal End -->
<script src="https://sadadqa.com/public/systemfiles/jquery/jquery-3.4.0.min.js"></script>
<script src="https://sadadqa.com/public/js/disableRightClick.js"></script>

<script>
    var webUrl = `https://sadadqa.com`;
</script>
<script src="https://sadadqa.com/public/checkoutpages/js/popper.min.js"></script>
<script src="https://sadadqa.com/public/checkoutpages/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script src="https://sadadqa.com/public/dist/js/perfect-scrollbar.jquery.min.js"></script>
<script src="https://sadadqa.com/public/js/accordion.js"></script>
<script src="https://sadadqa.com/public/js1/jquery.validate.min.js"></script>

            <script src="https://sadadqa.com/public/js1/messages_en.js"></script>
    
<script src="https://sadadqa.com/public/systemfiles/icheck/icheck.min.js"></script>
<script src="https://sadadqa.com/public/systemfiles/icheck/icheck.init.js"></script>
<script src="https://sadadqa.com/public/dist/js/custom.min.js"></script>
<script src="https://sadadqa.com/public/dist/js/pages/creditCardValidator.js?v=240823"></script>
<script src="https://sadadqa.com/public/dist/js/pages/mask.js"></script>
<script src="https://sadadqa.com/public/js/disableRightClick.js"></script>
<script src="https://sadadqa.com/public/checkoutpages/sweetalert2/sweetalert2.js"></script>
<!--Progress bar start-->
<div class="verifying-modal-wrapper">
    <div class="modal fade" id="progressBarModel" aria-hidden="true" aria-labelledby="progressBarModelToggleLabel" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="verifing-checkbox progressbar_direct">
                        <div class="form-check custom-checkbox" id="progressStep1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked="">
                            <label class="form-check-label" for="">
                                <span class="stacked-text">Verifying details</span>
                            </label>
                        </div>
                        <div class="form-check custom-checkbox d-none" id="progressStep2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked="">
                            <label class="form-check-label" for="">
                                <span class="stacked-text">Initiating Transaction</span>
                            </label>
                        </div>
                        <div class="form-check custom-checkbox d-none" id="progressStep3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked="">
                            <label class="form-check-label" for="">
                                <span class="stacked-text">Connecting to the bank</span>
                            </label>
                        </div>
                        <div class="form-check custom-checkbox d-none" id="progressStep4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked="">
                            <label class="form-check-label" for="">
                                <span class="stacked-text">Redirecting Securely</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Progress bar end-->



<script>
    var theProgress;
    var stepCompletedIcon = "https://sadadqa.com/public/images/product/verify.png";
    //$('#progressBarModel').modal('show');
    
    function task(i) {
  setTimeout(function() {
       $('#progressStep' + (i)).removeClass('d-none');
       if (i === 4) {
            stopProgressBar();
            }
  }, 90 * i);
}
    
    var callProgressBar = function() {
          
    };

    var stopProgressBar = function() {
        $("#checkoutFlag").val(0);
        $('#progressBarModel').modal('hide');
        clearInterval(theProgress);
    };

    $('#progressBarModel').on('hidden.bs.modal', function() {
        stopProgressBar();
    });
</script>

<!-- Enable Option javascript -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#detailsClick").click(function() {
            $(".m-payment-info-wrap").hide();
            $(".mobile-inv-details").show();
            $(".test-mode").addClass('test-mode-change');
        });

        $("#detailsShowClick").click(function() {
            $(".m-payment-info-wrap").show();
            $(".mobile-inv-details").hide();
            $(".test-mode").removeClass('test-mode-change');
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#viewProductList").click(function() {
            $(".m-view-prod-list").hide();
            $(".m-productdetail-listing").show();
            $(".m-product-dtl-up-arrow").show();
        });

        $("#productdetailsShowClick").click(function() {
            $(".m-view-prod-list").show();
            $(".m-productdetail-listing").hide();
            $(".m-product-dtl-up-arrow").hide();
        });
    });
</script>
<!-- Enable Option javascript -->

<!-- OTP SCRIPT -->
<script type="text/javascript">
    let digitValidate = function(ele) {
        ele.value = ele.value.replace(/[^0-9]/g, "");
    };

    let tabChange = function(val) {
        let ele = document.querySelectorAll(".otp input");
        if (ele[val - 1].value != "") {
            ele[val].focus();
        } else if (ele[val - 1].value == "") {
            ele[val - 2].focus();
        }
    };

    $("body").on('change keyup', '.otpinput', function(e) {
        $(".error-otp").css("cssText", "display: none !important;");
        $("#otp").val($(".otpinput1").val() + $(".otpinput2").val() + $(".otpinput3").val() + $(".otpinput4")
            .val() + $(".otpinput5").val() + $(".otpinput6").val());
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#languageSelect").click(function() {
            $(".lang-sel-dropdownmain").toggle();
        });
    });


    $('#expirymonth').focus(function() {
        $(this).attr('placeholder', 'MM/YY')
    }).blur(function() {
        $(this).attr('placeholder', 'Expiry')
    })

    $('#cvv').focus(function() {
        $(this).attr('placeholder', '')
    }).blur(function() {
        $(this).attr('placeholder', 'CVV')
    })
</script>

<script type="text/javascript">
    $('.floatOnly').keypress(function(event) {
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
    $(".numericOnly").keypress(function(e) {
        if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
    });
    var paymentType, cardType;

    function getPaymentType() {
        paymentType = $('.collapse.show[data-parent="#accordionExample1"]').attr('id');
        return paymentType;
    }

    function getCvvlengthValidation() {
        cardType = $('#cardtypetextcredit_id').val();
        if (cardType == 3) {
            return 4;
        } else {
            return 3;
        }

    }

    function addCommas(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

    function fixDiv(scrollVal) {
        var $cache = $('#getFixed');
        if (scrollVal > 10 && scrollVal < 350) {
            $cache.css({
                'position': 'fixed',
                'bottom': '0px'
            });
        }

        if (scrollVal > 100) {
            $cache.css({
                'position': 'relative',
                'top': 'auto'
            });
        }
    }

    $(window).scroll(function() {
        var scrollVal = $(this).scrollTop();
        fixDiv(scrollVal);
    });

    function enableButton_sadaduser() {
        $('.resentotp_sadaduser').show();
        $('.submitotpform').attr('disabled', 'disabled')
    }

    function enableButton_credit() {
        $('.resentotp_credit').show();
    }

    function enableButton_debit() {
        $('.resentotp_debit').show();
    }

    function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            if (textbox) {
                textbox.addEventListener(event, function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    }
                });
            }
        });
    }

    // Install input filters.                                        
    setInputFilter(document.getElementById("sadaduser_phoneno"), function(value) {
        return /^\d*$/.test(value);
    });

    // Install input filters.                                        
    setInputFilter(document.getElementById("cvv"), function(value) {
        return /^\d*$/.test(value);
    });

    $(function() {
        $('.screenHeight').val(window.screen.height);
        $('.screenWidth').val(window.screen.width);
        $('.timeZone').val(new Date().getTimezoneOffset());
        $('.colorDepth').val(window.screen.colorDepth);

        $("#debitcardform").validate({
            errorElement: "small",
            errorClass: "error",
            rules: {}
        });

        $(".preloader").fadeOut();

        $('[data-toggle="tooltip"]').tooltip();

        /*            jQuery.validator.addMethod("validmobileno", function(value, element) {
                return this.optional(element) || /^[3567].*$/.test(value);
            }, "Please enter valid mobile number.");
        */

        jQuery.validator.addMethod("expdatevalid", function(value, element) {
            return this.optional(element) || /^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/.test(value);
        }, "Enter valid expiry date.");


        jQuery.validator.addMethod("psbillingfirstname", function(value, element) {
            return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
        }, "Name is invalid.");

        $("#customerlogin").validate({
            //errorElement: "div",
            //errorLabelContainer: ".errorMessage",
            errorClass: "errorMessage",
            rules: {
                sadaduser_phoneno: {
                    required: true,
                    digits: true,
                    validmobileno: true
                },
                password: {
                    required: true
                },
                cardholdername: {
                    firstname: true
                }
            },
            errorPlacement: function(error, element) {
                var placement = $(element).parent().find('div.errorMessage');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            }
        });

        $(".panel-default:first-child .nav000").append("<i class='fa fa-bank'></i>");
        $(".panel-default:nth-child(2) .nav000").append("<i class='fa fa-credit-card'></i>");
        $(".panel-default:nth-child(3) .nav000").append("<i class='fa fa-credit-card'></i>");

        $("body").on('click', '.imgdivclick', function(e) {
            e.preventDefault();
            var id = $(this).attr('id');
            var data_val = $(this).attr('data-val');
            $('.imgdivclick').removeClass('active');
            var id_splt = id.split('_');
            $("#creditradiobtn_" + $('#cardtypetextcredit_id').val()).parent().removeClass(
                "checked");
            $("#creditradiobtn_" + id_splt[1]).parent().addClass("checked");
            $('#' + id).addClass('active');
            $('#cardtypetext').val(data_val);
            $('#cardtypetextcredit_id').val(id_splt[1]);
        });

        $(".iCheck-helper").click(function() {
            var dd_debit = $('input[name=creditcard_radio]:checked').val();
            $('#cardtypetext').val(dd_debit);
        });

        $("body").on('click', '.imgdivclickdebit', function(e) {
            e.preventDefault();
            var id = $(this).attr('id');
            var data_val = $(this).attr('data-val');
            $('.imgdivclickdebit').removeClass('active');
            var id_splt = id.split('_');
            var dd_debit = $('input[name=debitcard_radio]:checked').attr('id');
            $("#debitradiobtn_" + $('#cardtypetextdebit_id').val()).parent().removeClass("checked");
            $("#debitradiobtn_" + id_splt[1]).parent().addClass("checked");
            $('#' + id).addClass('active');
            $('#cardtypetextdebit').val(data_val);
            $('#cardtypetextdebit_id').val(id_splt[1]);
        });

        $(".iCheck-helper").click(function() {
            var dd_debit = $('input[name=debitcard_radio]:checked').val();
            $('#cardtypetextdebit').val(dd_debit);
        });

        var country = '';
        var isAllowedDebitCard = '1';
        if (country !== 'Qatar' && isAllowedDebitCard === 0) {
            $('.paywithcreditcardclass').trigger('click');
            $('.paywithcreditcardclass').trigger('change');
            $("#default-sadad, #debit-sadad").hide();
            $(".paywithdifferentcard").trigger('click');
            $("#credit-sadad").show();
        }

        $(".paywithcreditcardclass").click(function() {
            $("#default-sadad, #debit-sadad, #apple-sadad, #google-sadad").hide();
            $(".paywithdifferentcard").trigger('click');
            $("#credit-sadad").show();
            $("#googlePaybtnDiv").hide();
            $("#applePaybtnDiv").hide();
        });

        $(".paywithdebitcardclass").click(function() {
            $("#default-sadad, #credit-sadad, #apple-sadad, #google-sadad").hide();
            $("#debit-sadad").show();
            $("#googlePaybtnDiv").hide();
            $("#applePaybtnDiv").hide();
        });

        $(".paywithsadadclass").click(function() {
            $("#credit-sadad, #debit-sadad, #apple-sadad, #google-sadad").hide();
            $("#default-sadad").show();
            $("#googlePaybtnDiv").hide();
            $("#applePaybtnDiv").hide();
        });

        $(".paywithappleclass").click(function() {
            $("#credit-sadad, #debit-sadad, #default-sadad, #google-sadad").hide();
            $("#apple-sadad").show();
            $("#googlePaybtnDiv").hide();
            $("#applePaybtnDiv").show();
        });

        $(".paywithgoogleclass").click(function() {
            $("#credit-sadad, #debit-sadad, #default-sadad, #apple-sadad ").hide();
            $("#google-sadad").show();
            $("#googlePaybtnDiv").show();
            $("#applePaybtnDiv").hide();
        });

        $(".paywithsavedcard").click(function() {
            var creditCardBankType = "2";
            if (creditCardBankType !== '2') {
                $('.paynowclasscredit').attr("disabled", true);
            }
        });

        // Sadad user Pay
        var sadaduser_password = $('#sadaduser_password').val();
        var sadaduser_phoneno = $('#sadaduser_phoneno').val();
        if (sadaduser_password !== '' && sadaduser_phoneno !== '') {
            $('.paynowclass').removeAttr('disabled');
        } else {
            $('.paynowclass').prop("disabled", true);
        }

        $("#sadaduser_password").on('change keyup paste', function() {
            var sadaduser_password = $(this).val();
            var sadaduser_phoneno = $('#sadaduser_phoneno').val();
            if (sadaduser_password !== '' && sadaduser_phoneno !== '') {
                $('.paynowclass').removeAttr('disabled');
            } else {
                $('.paynowclass').prop("disabled", true);
            }
        });

        $("#sadaduser_phoneno").on('change keyup paste', function() {
            var sadaduser_phoneno = $(this).val();
            var sadaduser_password = $('#sadaduser_password').val();
            if (sadaduser_password !== '' && sadaduser_phoneno !== '') {
                $('.paynowclass').removeAttr('disabled');
            } else {
                $('.paynowclass').prop("disabled", true);
            }
        });

        // Credit card
        /*$('#cardnumber').keyup(function() {
            var textboxval = $(this).val();
            textboxval = textboxval.replace(/[^\d]/g, '');

            var visa_regex = new RegExp('^4[0-9]{0,}$'); //4
            // var mastercard_regex = new RegExp('^(5[1-5][0-9]{4}|677189)[0-9]{5,}$'); //2221-2720, 51-55
            //var mastercard_regex = new RegExp('^(5[1-5]|222[1-9]|22[3-9]|2[3-6]|27[01]|2720)[0-9]{0,}$'); // 2221-2720, 51-55
            var mastercard_regex = new RegExp('/^5[1-5][0-9]{14}$|^2(?:2(?:2[1-9]|[3-9][0-9])|[3-6][0-9][0-9]|7(?:[01][0-9]|20))[0-9]{12}$/'); // 2221-2720, 51-55
            var amex_regex = new RegExp('^3[47][0-9]{0,}$'); // 34, 37
            var regDiscover = new RegExp(
                '^(6011|65|64[4-9]|62212[6-9]|6221[3-9]|622[2-8]|6229[01]|62292[0-5])[0-9]{0,}$'
            );
            var regJCB = new RegExp('^(?:2131|1800|35)[0-9]{0,}$'); // 2131, 1800, 35 (3528-3589)

            if (textboxval.match(visa_regex)) {
                $('#cardtypetext').val("Visa");
                $('#cardtypetextcredit_id').val(1);
                // $('.master_box').removeClass('active');
                // $('.amex_box').removeClass('active');
                // $('.visa_box').addClass('active');
            } else if (textboxval.match(mastercard_regex)) {
                $('#cardtypetext').val("Mastercard");
                $('#cardtypetextcredit_id').val(2);
                // $('.master_box').addClass('active');
                // $('.amex_box').removeClass('active');
                // $('.visa_box').removeClass('active');
            } else if (textboxval.match(amex_regex)) {
                $('#cardtypetext').val("Amex");
                $('#cardtypetextcredit_id').val(3);
                // $('.amex_box').addClass('active');
                // $('.master_box').removeClass('active');
                // $('.visa_box').removeClass('active');
            } else if (textboxval.match(regDiscover)) {
                $('#cardtypetext').val("Discover");
                $('#cardtypetextcredit_id').val(4);
            } else if (textboxval.match(regJCB)) {
                $('#cardtypetext').val("JCB");
                $('#cardtypetextcredit_id').val(5);
            } else {
                // $('.amex_box').removeClass('active');
                // $('.master_box').removeClass('active');
                // $('.visa_box').removeClass('active');
            }
        });*/

        $('#expirymonth').mask('00/00');

        $('#debitredirect_confirm').on('click', function() {
            $('#debitredirect_confirm').attr("disabled", true);
            $('#debitredirect_popup').hide();
            $('.paynowclassdebit').trigger('click');
        });

        $('#debitredirect_cancel').on('click', function() {
            $('#debitredirect_popup').hide();
            $('.paynowclasscredit').attr("disabled", false);
        });

        $('#debitredirect_popup').on('hidden.bs.modal', function() {
            $('.paynowclasscredit').attr("disabled", false);
        });

        // Pay with selected card - Start
        $('.s-card-box').on('click', function() {
            $('.s-card-box').addClass('s-b-gray');
            $(this).removeClass('s-b-gray');
            var token = $(this).data('token');
            $('#ccToken').val(token);
        });

        // Delete saved cards - Start
        var cardnumber, externaltoken, merchantId, merchantCode = undefined;
        $("body").on('click', '.deletecreditcardtoken', function(e) {
            cardnumber = $(this).data('cardnumber');
            externaltoken = $(this).data('sadadtoken');
            merchantId = '';
            merchantCode = "8721629";
            $('#delete_card_number').text(cardnumber);
            $('#delete_ccToken_popup').modal('show');
        });

        $("body").on('click', '#delete_card_cancel', function(e) {
            cardnumber,
            externaltoken,
            merchantId,
            merchantCode = undefined;
        });

        $('#delete_ccToken_popup').on('hidden.bs.modal', function() {
            cardnumber,
            externaltoken,
            merchantId,
            merchantCode = undefined;
        });

        // Delete saved cards - End
        /*$('#cardnumber').keypress(function() {
            $(this).val(function(i, v) {
                var v = v.replace(/[^\d]/g, '').match(/.{1,4}/g);
                return v ? v.join(' ') : '';
            });
        });*/

        $('#to-recover').on("click", function() {
            $("#loginform").hide();
            $("#recoverform").show();
        });

        $('#to-login').on("click", function() {
            $("#recoverform").hide();
            $("#loginform").show();
        });
    });

    function inArray(needle, haystack) {
        var length = haystack.length;
        for (var i = 0; i < length; i++) {
            if (haystack[i] == needle) return true;
        }
        return false;
    }

    // window.onbeforeunload = function (event) {
    // return confirm("Do you really want to close?"); 
    // };
</script>

<script type="text/javascript">
    
    $("body").on('click', '#headingfive', function(e) {
        $('#googlePaybtnDiv').css("display", "none");
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://sadadqa.com/checkvpn",
            data: {
                amount: '600'
            },
            success: function(data) {
                if (data.status == false) {
                    $('#googlePaybtnDiv').css("display", "none");
                    $('.divtext_error').text(data.data.msg);
                    $('#error_popup_id').modal('show');
                    return true;
                } else {
                    $('#googlePaybtnDiv').css("display", "block");
                }
            }
        });
    });

    $("body").on('click', '#headingfour', function(e) {
        $('#applePaybtnDiv').css("display", "none");
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://sadadqa.com/checkvpn",
            data: {
                amount: '600'
            },
            success: function(data) {
                if (data.status == false) {
                    $('#applePaybtnDiv').css("display", "none");
                    $('.divtext_error').text(data.data.msg);
                    $('#error_popup_id').modal('show');
                    return true;
                } else {
                    $('#applePaybtnDiv').css("display", "block");
                }
            }
        });
    });
</script>





    <script>
        $("body").on('click', '.back-website', function(e) {
            $("#backModalToggle").modal('show');
        });
    </script>

    <script>
        $(function() {
            $("#creditcardform").validate({
                // errorElement: "small",
                // errorClass: "error",
                errorClass: "errorMessage",
                ignore: [],
                rules: {
                    cardholdername: {
                        // required: function() {
                        //     return (getPaymentType() === 'differentCard');
                        // },
                        firstname: true
                    },
                    cardnumber: {
                        // required: function() {
                        //     return (getPaymentType() === 'differentCard');
                        // },
                        checkhimyancard: true,
                        creditcard: true,
                        creditcardtypeschecks: true,
                        remote: {
                            url: "getallowedcreditcardcountry",
                            type: "GET",
                            async: false,
                            data: {
                                cardnumber: function() {
                                    return $("#cardnumber").val();
                                },
                                userId: '32125'
                            },
                            complete: function(data) {
                                if (data['undermaintenance'] === 1) {
                                    window.top.location.href = data['urldata'];
                                }
                            }
                        }
                    },
                    expirymonth: {
                        // required: function() {
                        //     return (getPaymentType() === 'differentCard');
                        // },
                        expyearvalid: true
                    },
                    cvv: {
                        minlength: function() {
                            return getCvvlengthValidation();
                        },
                        maxlength: function() {
                            return getCvvlengthValidation();
                        }
                        // required: function() {
                        //     return (getPaymentType() === 'differentCard');
                        // }
                    },
                    ccToken: {
                        required: function() {
                            return (getPaymentType() === 'savedCard');
                        }
                    }
                },
                errorPlacement: function(error, element) {
                    var placement = $(element).parent().find('div.errorMessage');
                    if (placement) {
                        $(placement).append(error)
                    } else {
                        error.insertAfter(element);
                    }
                }
            });

            jQuery.validator.addMethod("checkhimyancard", function(value, element, param) {
                if (value.replaceAll(' ', '').substring(0, 6) == '639950') {
                    return false;
                } else {
                    return true;
                }
            }, "Select Debit card option to pay via Himyan card");

            jQuery.validator.addMethod("creditcardtypeschecks", function(value, element, param) {
                paymentType = $(".cardtypechecks").html();
                if (paymentType == 'visa') {
                    return true;
                }

                if (paymentType == 'mastercard') {
                    return true;
                }

                if (paymentType == 'amex') {
                    return true;
                }
                return false;
            }, "This card is not supported");

            jQuery.validator.addMethod("expyearvalid", function(value, element) {
                var expmonth = value;
                var expdate = expmonth.split('/');
                var expyear = expdate[1];
                var currentyear = `24`;
                var currentmonth = `06`;
                if (expdate[0] > 12) {
                    return false;
                } else if (expyear === currentyear) {
                    if (expdate[0] < currentmonth) {
                        return false;
                    } else {
                        return true;
                    }
                } else if (expyear < currentyear) {
                    return false;
                } else if (expyear == '' || expyear == undefined) {
                    return false;
                } else {
                    return true;
                }
            }, "Enter valid expiry date.");

            jQuery.validator.addMethod("firstname", function(value, element) {
                var isArabic = /[\u0600-\u06FF\u0750-\u077F]/;
                if (isArabic.test(value)) {
                    return true;
                }

                if (this.optional(element) || /^([a-zA-Z]+\s+[a-zA-Z])[a-zA-Z ]*$/.test(value)) {
                    return true;
                }
                return false;

            }, "Card holder name is invalid.");
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("body").on('click', '.btn-next', function(e) {
                e.preventDefault();
                // $(".btn-next").click(function () {
                var stats = $("#customerlogin").valid();
                if (stats === true) {
                    if ($('#password').val() === '') {
                        $.ajax({
                            type: "GET",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "https://sadadqa.com/getavailablefund",
                            data: $('form#customerlogin').serialize(),
                            success: function(data) {
                                var totalpurchageamount = parseInt($('.productamount').val());
                                var totalavailablefund = parseInt(data);
                                if (totalavailablefund >= totalpurchageamount) {
                                    $("#mobile").hide();
                                    $("#pin").show();
                                } else {
                                    $('.divtext_error').text(
                                        'Your available balance is less than purchase amount'
                                    );
                                    $('#error_popup_id').modal('show');
                                }
                            }
                        });
                    } else {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "https://sadadqa.com/productlogin",
                            data: $('form#customerlogin').serialize(),
                            success: function(data) {
                                if (data['res'] === 1) {
                                    $('.divtext_error').text('OTP Sent on your mobile');
                                    $('#error_popup_id').modal('show');
                                    var availablebalance = data['data'][
                                        'totalavailablefundsforwithdrawal'
                                    ];
                                    $("#totalavailablefund").val(availablebalance);
                                    $('#avlbldiv').text('QAR ' + availablebalance);
                                    $('.availblddive').show();
                                    $("#pin").hide();
                                    $('.btn-next').remove();
                                    $("#paywithsadadotp").show();
                                    $(".paynowclass").removeAttr("disabled");
                                } else {
                                    $('.divtext_error').text(data['data']);
                                    $('#error_popup_id').modal('show');
                                }
                            }
                        });
                    }
                }
            });

            // Credit Card
            $("body").on('click', '.btn-next1', function(e) {
                e.preventDefault();
                // $(".btn-next").click(function () {
                var stats = $("#customerlogin").valid();
                if (stats === true) {
                    // if ($('#password').val() == '') {
                    //     $("#mobile").hide();
                    //     $("#pin").show();
                    // } else {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "https://sadadqa.com/productlogin",
                        data: $('form#customerlogin').serialize(),
                        success: function(data) {
                            if (data['res'] === 1) {
                                $('.divtext_error').text('OTP Sent on your mobile');
                                $('#error_popup_id').modal('show');
                                var availablebalance = data['data'][
                                    'totalavailablefundsforwithdrawal'
                                ];
                                $('#avlbldiv').text('QAR ' + availablebalance);
                                $('.availblddive').show();
                                $("#pin").hide();
                                $('.btn-next').hide();
                                $("#paywithsadadotp").show();
                                $(".paynowclass").removeAttr("disabled");
                            } else {
                                $('.divtext_error').text(data['data']);
                                $('#error_popup_id').modal('show');
                            }
                        }
                    });
                    // }
                }
            });
        });
    </script>

    <!--Sadad user pay start-->
    <script>
                    jQuery.validator.addMethod("validmobileno", function(value, element) {
                return this.optional(element) || /^[3567].*$/.test(value);
            }, "Please enter valid mobile number");
                $("body").on('click', '.paynowclass', function(e) {
            e.preventDefault();
            var stats = $("#customerlogin").valid();
            if (stats === true) {
                $('.paynowclass').attr("disabled", true);
                // if (totalavailablefund > totalpurchageamount) {
                //     alert("ff");
                //     return false;
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "https://sadadqa.com/postwebpaymentloginsadad",
                    data: $('form#customerlogin').serialize(),
                    success: function(data) {
                        if (data['undermaintenance'] === 1) {
                            window.top.location.href = data['urldata'];
                        } else if (data['code'] === 0) {
                            $('.paynowclass').attr("disabled", false);
                            $('.divtext_error').text(data['msg']);
                            $('#error_popup_id').modal('show');
                        } else {
                            $('.paynowclass').attr("disabled", false);
                            $('#sadaduser_otp_popup').html('');
                            $('#sadaduser_otp_popup').html(data);
                            $('#sadaduser_otp_popup').modal('show');
                            $('.otpsuccesstag').delay(5000).fadeOut('slow');
                            $('.resentotp_sadaduser').hide();
                            var minutes = 1;
                            var time = minutes * (60 * 1000);
                            setTimeout(function() {
                                enableButton_sadaduser();
                            }, time);
                        }
                    }
                });
            }
        });

        $("body").on('click', '.submitotpform', function() {
            var otp = $('#otp').val();
            $('#otptextbox').val(otp);
            if ($('#otptextbox').val() != '' && $('#otptextbox').val().length == 6) {
                $(".error-otp").css("cssText", "display: none !important;");
                var stats = $("#otpform").valid();
                if (stats === true) {
                    $('.submitotpform').attr("disabled", true);
                    var formData = new FormData($("form#customerlogin")[0]);
                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "https://sadadqa.com/paywebpaymentsadaduser",
                        data: $('form#customerlogin').serialize(),
                        async: false,
                        success: function(data) {
                            if (data['res'] === 1) {
                                window.location.href = data['urldata'];
                            } else {
                                if (data == 'Please enter valid OTP') {
                                    $(".error-otp").css("cssText",
                                        "display: block !important; margin-bottom: 15px;");
                                } else {
                                    $('.submitotpform').attr("disabled", false);
                                    $('.divtext_error').text(data);
                                    $('#error_popup_id').modal('show');
                                    $('#sadaduser_otp_popup').modal('hide');
                                }
                            }
                        }
                    });
                } else {
                    return false;
                }
            } else {
                $(".error-otp").css("cssText", "display: block !important; margin-bottom: 15px;");
            }
        });

        // resent otp
        $("body").on('click', '.resentotp_sadaduser', function(e) {
            $('.submitotpform').removeAttr('disabled')
            $('.resentotp_sadaduser').hide();
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "https://sadadqa.com/resendotpsadadwebpayment",
                data: $('form#customerlogin').serialize(),
                success: function(data) {
                    $('.resentotp_sadaduser').hide();
                    var minutes = 1;
                    var time = minutes * (60 * 1000);
                    setTimeout(function() {
                        enableButton_sadaduser();
                    }, time);
                    if (data === 1) {
                        $('.otpsuccesstag').show();
                        $('.otpsuccesstag').delay(5000).fadeOut('slow');
                    } else {
                        if (data != 1) {
                            $('.divtext_error').text(data);
                            $('#error_popup_id').modal('show');
                        }
                    }
                }
            });
        });
    </script>
    <!--Sadad user pay end-->

    <!--Credit card pay start-->
    <script>
        // Start : Sachin : Detact credit card type from number
        $("body").on('click', '.paynowclasscredit', function(e) {
            e.preventDefault();

            var expmonth = $('#expirymonth').val();
            var expdate = expmonth.split('/');
            var expyear = expdate[1];
            var currentyear = `24`;
            var currentmonth = `06`;
            if (expdate[0] > 12) {
                var html = `<h6>Enter valid expiry date.</h6>`;
                $("#alertModalToggle").modal('show');
                $(".alert-message").html(html);
                return false;
            } else if (expyear < currentyear) {
                var html = `<h6>Enter valid expiry date.</h6>`;
                $("#alertModalToggle").modal('show');
                $(".alert-message").html(html);
                return false;
            }

            if (expyear === currentyear) {
                if (expdate[0] < currentmonth) {
                    var html = `<h6>Enter valid expiry date.</h6>`;
                    $("#alertModalToggle").modal('show');
                    $(".alert-message").html(html);
                    return false;
                }
            }

            var stats = $("#creditcardform").valid();
            // var paymentType = $('.collapse.show[data-parent="#accordionExample1"]').attr('id');
            var paymentType = 'creditCard';
            if (paymentType !== undefined) {
                if (paymentType === 'savedCard') {
                    $("#paymentType").val('1');
                } else {
                    $("#paymentType").val('0');
                    $('#ccToken').val('');
                }
                if (stats === true) {
                    // var otp = $('#credit_phoneno').val();
                    // $('#credit_phoneno_hidden').val(otp);
                    $('.paynowclasscredit').attr("disabled", true);
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    callProgressBar();

                    // Optimized Credit card payment
                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "postpaycreditcard/",
                        data: $('form#creditcardform').serialize(),
                        success: function(data) {
                            //stopProgressBar();

                            if (data.status === 'success') {
                                if (data.msg !== undefined && data.msg.length > 150) {
                                    if (data.cardType !== undefined && data.cardType == 3) {

                                        document.write('<div style="display: none">' + data.msg.replace(
                                            'sadadSubmit', 'submit') + '</div>');

                                        document.echoForm.submit();
                                        stopProgressBar();
                                        //                                                                        $('#amexForm').submit();
                                    } else {
                                        // $('#mpgs_iframe_popup').modal('show');
                                        // $('#iframe_data').html(data.msg);
                                        if (data.authPayer_req_url !== undefined) {
                                            $.ajax({
                                                type: "GET",
                                                headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                                        .attr('content')
                                                },
                                                url: data.authPayer_req_url,
                                                success: function(data_auth_pay) {
                                                    var datatwo = JSON.parse(data_auth_pay);
                                                    $('#mpgs_iframe_popup').modal('show');
                                                    $('#iframe_data').html('');
                                                    $('#iframe_data').html(datatwo.msg);
                                                    stopProgressBar();
                                                }
                                            });
                                            // document.echoForm.submit();

                                        } else {
                                            stopProgressBar();

                                            $('#mpgs_iframe_popup').modal('show');
                                            $('#iframe_data').html(data.msg);
                                            return true;
                                        }
                                    }
                                } else if (data.urldata !== undefined) {
                                    stopProgressBar();
                                    window.location.href = data.urldata;
                                } else {
                                    $('.divtext_error').text("Something went wrong.");
                                    $('#error_popup_id').modal('show');
                                    stopProgressBar();
                                }
                            } else {
                                $('.paynowclasscredit').removeAttr("disabled");
                                if (data.isDebitCard !== undefined && data.isDebitCard === true) {
                                    $('#debitredirect_message').text(data.message);
                                    $('#debitredirect_popup').modal('show');
                                    stopProgressBar();
                                    return false;
                                }
                                $('.divtext_error').text(data.msg);
                                $('#error_popup_id').modal('show');
                                stopProgressBar();
                            }
                            // stopProgressBar();
                        }
                    });
                }
            } else {
                var msg = "Please select a payment type.";
                $('.divtext_error').text(msg);
                $('#error_popup_id').modal('show');
            }
        });

        // Pay with selected card - end
        $("body").on('click', '#delete_card_confirm', function(e) {
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "postdeletecreditcardtoken",
                data: {
                    externaltoken: externaltoken,
                    merchantId: merchantId,
                    merchantCode: merchantCode
                },
                success: function(data) {
                    if (data === 1) {
                        window.location.reload();
                    } else {
                        $('.divtext_error').text(data.error.message);
                        $('#error_popup_id').modal('show');
                    }
                }
            });
        });

        $("body").on('click', '#submit_credit_phoneform', function(e) {
            e.preventDefault();
            var otp = $('#credit_phoneno').val();
            $('#credit_phoneno_hidden').val(otp);
            var stats = $("#mobilenoform").valid();
            if (stats === true) {
                $('#submit_credit_phoneform').attr("disabled", true);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "https://sadadqa.com/postwebpaymentlogincredit",
                    data: $('form#creditcardform').serialize(),
                    success: function(data) {
                        if (data['code'] === 1) {
                            $('#submit_credit_phoneform').attr("disabled", false);
                            $("#credit_otp_expiry_hidden").val(data['res']);
                            $(".mobile_form_div").hide();
                            $(".otp_form_div").show();
                            $('.otpsuccesstag_credit').delay(5000).fadeOut('slow');
                        } else {
                            $('#submit_credit_phoneform').attr("disabled", false);
                            $('.divtext_error').text(data);
                            $('#error_popup_id').modal('show');
                        }
                    }
                });
            }
        });

        // resent otp
        $("body").on('click', '.resentotp_credit', function(e) {
            $('.resentotp_credit').hide();
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "https://sadadqa.com/resendotpcreditwebpayment",
                data: $('form#creditcardform').serialize(),
                success: function(data) {
                    $('.resentotp_credit').hide();
                    var minutes = 1;
                    var time = minutes * (60 * 1000);
                    setTimeout(function() {
                        enableButton_credit();
                    }, time);
                    if (data['code'] === 1) {
                        $("#credit_otp_expiry_hidden").val(data['res']);
                        $('.otpsuccesstag_credit').show();
                        $('.otpsuccesstag_credit').delay(5000).fadeOut('slow');
                    } else {
                        $('.divtext_error').text(data);
                        $('#error_popup_id').modal('show');
                    }
                }
            });
        });

        $("body").on('click', '#submit_credit_otpform', function(e) {
            e.preventDefault();
            var otp = $('#credit_otp').val();
            $('#credit_otp_hidden').val(otp);
            var stats = $("#otpform").valid();
            if (stats === true) {
                $('#submit_credit_otpform').attr("disabled", true);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "https://sadadqa.com/postpaywebpaymentcredit",
                    data: $('form#creditcardform').serialize(),
                    success: function(data) {
                        if (data['res'] === 1) {
                            $('#submit_credit_otpform').attr("disabled", false);
                            window.location.href = data['urldata'];
                        } else {
                            $('#submit_credit_otpform').attr("disabled", false);
                            $('.divtext_error').text(data);
                            $('#error_popup_id').modal('show');
                        }
                    }
                });
            }
        });
    </script>
    <!--Credit card pay end-->

    <!--Debit card pay start-->
    <script>
        $("body").on('click', '.paynowclassdebit', function(e) {
            e.preventDefault();
            var stats = $("#debitcardform").valid();
            if (stats === true) {
                // var otp = $('#debit_phoneno').val();
                // $('#debit_phoneno_hidden').val(otp);
                $('.paynowclassdebit').attr("disabled", true);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                callProgressBar();

                // Optimized Debit card payment
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "https://sadadqa.com/postpaydebitcard",
                    data: $('form#debitcardform').serialize(),
                    success: function(data) {
                        var data = JSON.parse(data);
                        stopProgressBar();

                        $('.paynowclassdebit').removeAttr("disabled");
                        if (data.status === 'success') {
                            if (data.msg.length > 150) {
                                document.write('<div style="display: none">' + data.msg.replace(
                                    'sadadSubmit', 'submit') + '</div>');

                                document.echoForm.submit();
                            }
                        } else {
                            $('.divtext_error').text(data.msg);
                            $('#error_popup_id').modal('show');
                        }
                    }
                });
            }
        });

        $("body").on('click', '#submit_debit_phoneform', function(e) {
            e.preventDefault();
            // var otp = $('#debit_phoneno').val();
            // $('#debit_phoneno_hidden').val(otp);
            var stats = $("#mobilenoform_credit").valid();
            if (stats === true) {
                $('#submit_debit_phoneform').attr("disabled", true);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "https://sadadqa.com/postwebpaymentlogindebit",
                    data: $('form#debitcardform').serialize(),
                    success: function(data) {
                        if (data['code'] === 1) {
                            $('#submit_debit_phoneform').attr("disabled", false);
                            $("#debit_otp_expiry_hidden").val(data['res']);
                            $(".mobile_form_div").hide();
                            $(".otp_form_div").show();
                            $('.otpsuccesstag_debit').delay(5000).fadeOut('slow');
                        } else {
                            $('#submit_debit_phoneform').attr("disabled", false);
                            $('.divtext_error').text(data);
                            $('#error_popup_id').modal('show');
                        }
                    }
                });
            }
        });

        // resent otp
        $("body").on('click', '.resentotp_debit', function(e) {
            $('.resentotp_debit').hide();
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "https://sadadqa.com/resendotpdebitwebpayment",
                data: $('form#debitcardform').serialize(),
                success: function(data) {
                    $('.resentotp_debit').hide();
                    $('#debit_otp').val('');
                    var minutes = 1;
                    var time = minutes * (60 * 1000);
                    setTimeout(function() {
                        enableButton_debit();
                    }, time);
                    if (data['code'] === 1) {
                        $("#debit_otp_expiry_hidden").val(data['res']);
                        $('.otpsuccesstag_debit').show();
                        $('.otpsuccesstag_debit').delay(5000).fadeOut('slow');
                    } else {
                        $('.divtext_error').text(data);
                        $('#error_popup_id').modal('show');
                    }
                }
            });
        });

        $("body").on('click', '#submit_debit_otpform', function(e) {
            e.preventDefault();
            var otp = $('#debit_otp').val();
            $('#debit_otp_hidden').val(otp);
            var stats = $("#otpform_credit").valid();
            if (stats === true) {
                $('#submit_debit_otpform').attr("disabled", true);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "https://sadadqa.com/postpaywebpaymentdebit",
                    data: $('form#debitcardform').serialize(),
                    success: function(data) {
                        if (data['res'] === 1) {
                            $('#submit_debit_otpform').attr("disabled", false);
                            window.location.href = data['urldata'];
                        } else {
                            $('#submit_debit_otpform').attr("disabled", false);
                            $('.divtext_error').text(data);
                            $('#error_popup_id').modal('show');
                        }
                    }
                });
            }
        });
    </script>

    <script>
        $("body").on('click', '.english_lang', function(e) {
            var val = 'en';
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "https://sadadqa.com/changelanguage",
                data: {
                    'val': val
                },
                success: function(data) {
                    location.reload();
                }
            });
        });

        $("body").on('click', '.arabic_lang', function(e) {
            var val = 'ar';
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "https://sadadqa.com/changelanguage",
                data: {
                    'val': val
                },
                success: function(data) {
                    location.reload();
                }
            });
        });

        // Restricts input for the given textbox to the given inputFilter.
    </script>
    <!--Debit card pay end-->

    <!--Google Pay Start-->
    <script>
        $("body").on('click', '.paynowclassgoogle', function(e) {
            e.preventDefault();
            var stats = $("#googleForm").valid();
            if (stats === true) {

                $('.paynowclassgoogle').attr("disabled", true);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                callProgressBar();


                // Optimized Debit card payment
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "https://sadadqa.com/postpaycreditcard",
                    data: $('form#googleForm').serialize(),
                    success: function(data) {
                        var data = JSON.parse(data);
                        stopProgressBar();

                        $('.paynowclassgoogle').removeAttr("disabled");
                        if (data.status === 'success') {
                            // Code added/modified for Google Pay by Rishabh on 2022-08-27.
                            if (data.msg !== undefined && data.msg.length > 150) {
                                // $('#mpgs_iframe_popup').modal('show');
                                // $('#iframe_data').html(data.msg);
                                if (data.authPayer_req_url !== undefined) {
                                    $.ajax({
                                        type: "GET",
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                                'content')
                                        },
                                        url: data.authPayer_req_url,
                                        success: function(data_auth_pay) {
                                            var datatwo = JSON.parse(data_auth_pay);
                                            $('#mpgs_iframe_popup').modal('show');
                                            $('#iframe_data').html('');
                                            $('#iframe_data').html(datatwo.msg);
                                            stopProgressBar();
                                        }
                                    });
                                    // document.echoForm.submit();

                                } else {
                                    stopProgressBar();

                                    $('#mpgs_iframe_popup').modal('show');
                                    $('#iframe_data').html(data.msg);
                                    return true;
                                }
                            } else if (data.urldata !== undefined) {
                                // window.location.href = data.urldata;
                                $('#processWalletPayData').val(data.paymentData);
                                var url = data.urldata;
                                $('#processWalletPayForm').attr('action', url).submit();
                            }
                        } else {
                            stopProgressBar();
                            $('.divtext_error').text(data.msg);
                            $('#error_popup_id').modal('show');
                        }
                    }
                });
            }
        });
    </script>
    <!--Google pay end-->

    <style>
    .apple-pay-button {
        display: inline-block;
        width: 100%;
        -webkit-appearance: -apple-pay-button;
        -apple-pay-button-type: pay;
    }

    .apple-pay-button-black {
        -apple-pay-button-style: black;
    }

    .apple-pay-button-white {
        -apple-pay-button-style: white;
    }

    .apple-pay-button-white-with-line {
        -apple-pay-button-style: white-outline;
    }
</style>

<script src="https://applepay.cdn-apple.com/jsapi/v1/apple-pay-sdk.js"></script>

<script>
    var isApplepayProcessing = 0;
    document.addEventListener('DOMContentLoaded', () => {
        if (isApplePayAvailable()) {
            $('#applePaybtnDiv').on('click', applePayButtonClicked);
            $('.paywithappleclass').css("display", "block");
            $('.paywithgoogleclass').remove();
        } else {
            $('.paywithappleclass').remove();
        }
    });

    function isApplePayAvailable() {
        var unavailable = false;
        unavailable = unavailable || !window.ApplePaySession;
        if (!unavailable) {
            var promise = ApplePaySession.canMakePaymentsWithActiveCard("merchant.sadad.qa");
            promise.then(function(canMakePayments) {
                return unavailable = unavailable || !!canMakePayments;
            });
        }
        return !unavailable;
    };

    function applePayButtonClicked() {
        if (isApplepayProcessing > 0) {
            return false;
        }
        $('#applePaybtnDiv').hide();
        var amountFinal = '600';
        var transactionEntityId = '7';
        if (inArray(transactionEntityId, [2, 6])) {
            if ($(".inputnumber").val() == '') {
                $(".mobile_error_velid").html('en.required_field');
                $('.divtext_error').text('en.new_cell_number_error');
                $('#error_popup_id').modal('show');
                $('#applePaybtnDiv').show();
                $("#detailsClick").trigger("click");
                return false;
            } 
            amountFinal = $('.productamount').val();
        }

        var paymentRequest = {
            countryCode: 'QA',
            currencyCode: 'QAR',
            total: {
                label: 'EVENTAT INTERNATIONAL EVENTS',
                amount: amountFinal
            },
            supportedNetworks: ['masterCard', 'visa'],
            merchantCapabilities: ['supports3DS']
        };

        var session = new ApplePaySession(3, paymentRequest);

        /**
         * Merchant Validation
         * We call our merchant session endpoint, passing the URL to use
         */
        session.onvalidatemerchant = (event) => {
            var receivedPaymentSession;

            $.ajax({
                url: "https://sadadqa.com/getapplepaymentsession",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    "isLive": '_prod'
                },
                success: function(data) {
                    console.log(data);
                    if (data.epochTimestamp == undefined) {
                        $('#applePaybtnDiv').show();
                        alert('Unable to create session. Please try again.');
                        return false;
                    } else {
                        receivedPaymentSession = data;
                        var paymentSession = receivedPaymentSession;
                        session.completeMerchantValidation(paymentSession);
                    }
                }
            });
        };

        /**
         * This is called when user dismisses the payment modal
         */
        session.oncancel = (event) => {
            // Re-enable Apple Pay button
            $('#applePaybtnDiv').show();
            alert('Payment was cancelled by you.');
            return false;
            // document.write('oncancel: ' + JSON.stringify(event));
            // $('#divtext_error').html("Payment was cancelled by you.");
            // $('#error_popup_id').modal('show');

        };


        session.onpaymentauthorized = (event) => {
            const payment = event.payment;
            document.getElementById('applepaymentToken').value = JSON.stringify(payment);
            document.getElementById('processWalletPayToken').value = JSON.stringify(payment);

            var stats = $("#appleForm").valid();
            if (stats === true) {
                isApplepayProcessing = 1;

                 

                $('.paynowclassapple').attr("disabled", true);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                // callProgressBar();
                // Optimized Debit card payment
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "https://sadadqa.com/postpaycreditcard",
                    data: $('form#appleForm').serialize(),
                    success: function(data) {
                        var data = JSON.parse(data);
                        // stopProgressBar();

                        $('.paynowclassapple').removeAttr("disabled");
                        if (data.status === 'success') {
                            // if (data.urldata !== undefined) {
                            //     window.location.href= data.urldata;
                            //     $('#processWalletPayData').val(data.paymentData);
                            //     var url = data.urldata;
                            //     $('#processWalletPayForm').attr('action', url).submit();
                            // }
                            session.completePayment(ApplePaySession.STATUS_SUCCESS);
                            //$('body').html(data.msg);
                                                            $('body').html(data.msg);
                                                    } else {
                            session.completePayment(ApplePaySession.STATUS_FAILURE);
                            $('.divtext_error').text(data.msg);
                            $('#error_popup_id').modal('show');
                            isApplepayProcessing = 0;
                        }
                    }
                });
            }
        };
        session.begin();
    }
</script>
    <script>
    var isGooglepayProcessing = 0;
    const baseRequest = {
        apiVersion: 2,
        apiVersionMinor: 0
    };
    const allowedCardNetworks = ["AMEX", "DISCOVER", "INTERAC", "JCB", "MASTERCARD", "VISA"];
    const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];

    // 'gatewayMerchantId': "Config::get('constants.mpgs_googlepay_merchant_id')"
    const tokenizationSpecification = {
        type: 'PAYMENT_GATEWAY',
        parameters: {
            'gateway': 'mpgs',
            'gatewayMerchantId': 'SPSQNB01'
        }
    };

    const baseCardPaymentMethod = {
        type: 'CARD',
        parameters: {
            allowedAuthMethods: allowedCardAuthMethods,
            allowedCardNetworks: allowedCardNetworks
        }
    };

    const cardPaymentMethod = Object.assign({},
        baseCardPaymentMethod, {
            tokenizationSpecification: tokenizationSpecification
        }
    );

    /**
     * An initialized google.payments.api.PaymentsClient object or null if not yet set
     *
     * @see  {@link  getGooglePaymentsClient}
     */
    let paymentsClient = null;

    function getGoogleIsReadyToPayRequest() {
        return Object.assign({},
            baseRequest, {
                allowedPaymentMethods: [baseCardPaymentMethod]
            }
        );
    }

    function getGooglePaymentDataRequest() {
        const paymentDataRequest = Object.assign({}, baseRequest);
        paymentDataRequest.allowedPaymentMethods = [cardPaymentMethod];
        paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
        paymentDataRequest.merchantInfo = {
            merchantId: 'BCR2DN6TR6Y7Z2CJ',
            merchantName: 'Sadad Payment Solutions'
        };
        return paymentDataRequest;
    }

    function getGooglePaymentsClient() {
        if (paymentsClient === null) {
            paymentsClient = new google.payments.api.PaymentsClient({
                environment: 'PRODUCTION'
            });
        }
        return paymentsClient;
    }

    function onGooglePayLoaded() {
        const paymentsClient = getGooglePaymentsClient();
        paymentsClient.isReadyToPay(getGoogleIsReadyToPayRequest())
            .then(function(response) {
                if (response.result) {
                    // @todo  prefetch payment data to improve performance after confirming site functionality
                    // prefetchGooglePaymentData();
                }
            })
            .catch(function(err) {
                // show error in developer console for debugging
                console.error(err);
            });
    }

    function addGooglePayButton() {
        const paymentsClient = getGooglePaymentsClient();
        const button =
            paymentsClient.createButton({
                buttonColor: 'default',
                buttonType: 'plain',
                buttonSizeMode: 'fill',
                onClick: onGooglePaymentButtonClicked
            });
        document.getElementById('googlePaybtnDiv').appendChild(button);
    }

    function getGoogleTransactionInfo() {
        var amountFinal = '600';
        var transactionEntityId = '7';
        if (inArray(transactionEntityId, [2, 6])) {
            amountFinal = $('.productamount').val();
        }

        return {
            countryCode: 'QA',
            currencyCode: 'QAR',
            totalPriceStatus: 'FINAL',
            // set to cart total
            totalPrice: amountFinal
        };
    }

    function prefetchGooglePaymentData() {
        const paymentDataRequest = getGooglePaymentDataRequest();
        // transactionInfo must be set but does not affect cache
        paymentDataRequest.transactionInfo = {
            totalPriceStatus: 'FINAL',
            currencyCode: 'QAR'
        };
        const paymentsClient = getGooglePaymentsClient();
        paymentsClient.prefetchPaymentData(paymentDataRequest);
    }

    /**
     * Show Google Pay payment sheet when Google Pay payment button is clicked
     */
    function onGooglePaymentButtonClicked() {
        if(isGooglepayProcessing > 0) {
            return false;
        }
        // return false;
        var transactionEntityId = '7';
        if (inArray(transactionEntityId, [2, 6])) {
            if ($(".inputnumber").val() == '') {
                $(".mobile_error_velid").html('en.required_field');
                $('.divtext_error').text('en.new_cell_number_error');
                $('#error_popup_id').modal('show');
                $("#detailsClick").trigger("click");
                return false;
            } 
        }
        const paymentDataRequest = getGooglePaymentDataRequest();
        paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

        const paymentsClient = getGooglePaymentsClient();
        paymentsClient.loadPaymentData(paymentDataRequest)
            .then(function(paymentData) {
                // handle the response
                processPayment(paymentData);
            })
            .catch(function(err) {
                // show error in developer console for debugging
                console.error(err);
            });
    }

    function processPayment(paymentData) {
        isGooglepayProcessing = 1;
        // show returned data in developer console for debugging
        console.log(paymentData);

        $('#googlepaymentToken').val(paymentData.paymentMethodData.tokenizationData.token);
        $('#processWalletPayToken').val(paymentData.paymentMethodData.tokenizationData.token);
        $('.paynowclassgoogle').trigger('click');
    }
</script>
</html>