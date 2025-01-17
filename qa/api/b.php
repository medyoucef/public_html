<?php
function bjosn($id, $input) {
    include '../db_connection.php';
     date_default_timezone_set('Asia/Kuwait');
        $current_time = new DateTime();
        $future_time = $current_time->add(new DateInterval('PT20M'));
        
    if(isset(explode('.', $id)[2]) == 'pay'){
        $sql = "SELECT url, location, name, description, image, id, start_datetime, end_datetime FROM events WHERE url = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', explode('.',explode('/', $id)[1])[0]);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $ct = explode('.',explode('/', $id)[1])[1];
        if ($user) {
            $id = $user['id'];
            $price = $_COOKIE['price'];
             $tok = '{"id":21710029,"status":"pending","bookable":{"id":5927601,"meta_id":14646,"seat_id":"seat_343776","name":{"ar":""},"price":'.$price.',"color":"#FFD700","number":29,"row":2,"section":null,"row_name":"B","seat_name":"B29"},"bookable_id":5927601,"sale_price":'.$price.',"price":'.$price.',"details":null,"remove":false,"checked_in":false,"checked_in_on":null}';
            $result = [];

           for ($i = 0; $i < $ct; $i++) {
               $result[] = json_decode($tok, true);
           }

        echo '{"status":"pending","link":"'.explode('.', $id)[0].'","payment_method":null,"cancelation_reason":null,"pay_by_link":false,"code":null,"sale_price":'.$price.',"price":'.$price.',"currency":"KWD","occurrence":{"id":94748,"name":null,"note":null,"start_datetime":"'.$user['start_datetime'].'","end_datetime":"'.$user['end_datetime'].'","status":"published","location":{"ar":"'.$user['location'].'"},"gps_latitude":null,"gps_longitude":null,"upgrade":true,"downgrade":false,"change_date":false,"timezone":"Asia/Kuwait","change_tickets":false,"auto_assign":false,"gap":false,"cancelation":false,"cancelation_start":null,"cancelation_end":null,"event":{"id":6471,"name":{"ar":"'.$user['name'].'"},"slug":"aljzzar","location":{"ar":"'.$user['location'].'"},"book_button_title":null,"image":"https://www.dawratmedia.com/eventat/event/6471-1afbecde-ca73-4756-88ff-c82b2e1048b2.jpeg","image_hash":"LCE_jmGF01s:~VE1R5x]5lict7tR","people_title":null,"currency":"KWD","booking_details":null,"country":"kw","timezone":"Asia/Kuwait","theme":{},"datetime":{"ar":"إبتداء من ٢٦ يوليو"},"specification_title":null,"specifications":null,"terms_of_agreement":{"ar":"<ul>\r\n<li>يرجى الحضور قبل العرض بـ ٣٠ دقيقة&nbsp;</li>\r\n<li>التذاكر المباعة لاترد ولاتستبدل</li>\r\n<li>لايسمح بدخول الأكل والمشروبات بكافة أنواعها من خارج المسرح</li>\r\n<li>ممنوع دخول الأطفال الذين تقل أعمارهم عن ١٢ سنة&nbsp;</li>\r\n</ul>"},"organizer":{"id":53,"name":{"ar":"Back Stage Group","en":"Back Stage Group"},"links":null,"image":"https://www.dawratmedia.com/eventat/organizer/53-cc9d1fd4-8a3a-4fbc-b879-f16e9fc2b152.jpg"},"payment_methods":["knet","mpgs","cash"],"occurrence_name":"show","event_page_redirect":null,"booking_mode":"seats","always_show_occurrences_list":true,"login_to_view_ticket":false,"login_to_book":false,"require_captcha":"never","map_id":1282,"discounts":null},"map_id":1282},"tickets": '.json_encode($result, JSON_PRETTY_PRINT).'
            
            ,"occurrence_id":94748,"checked_in":false,"checked_in_on":null,"timeout_datetime":"'.$future_time->format('Y-m-d\TH:i:s.uP').'","invoice_number":"mpcsgzq16nf7kqjn7h2t","can_cancel":[true,null],"can_modify":[false,"booking.modify.not-allowed"],"change_date":false,"change_tickets":false,"code_is_hidden":false}';
        exit();
        }
    }
    
    
    
    
    $data = json_decode($input, true);
    if ($input && isset($data["tickets"])) {
        $ct = count($data["tickets"]);
        $id = $data["occurrence_id"];
        
        $sql = "SELECT url, name, description, image, id, start_datetime, end_datetime FROM events WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            $id = $user['id'];
            $price = 0;
            foreach ($data["tickets"] as $key => $value) {
                $price += $value['bookable_id'];
            }
            setcookie('price', $price, time() + (86400 * 30), "/");
            setcookie('$ct', $ct, time() + (86400 * 30), "/");
        } else {
            echo json_encode(["Success" => false, "error" => "Event not found."]);
        }
    } else {
        $sql = "SELECT url, name, description, image, id, start_datetime, end_datetime FROM events WHERE url = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', explode('.',explode('/', $id)[1])[0]);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $ct = explode('.',explode('/', $id)[1])[1];
        if ($user) {
            $id = $user['id'];
            $price = $_COOKIE['price'];
            if(isset($data["email"])){
                foreach ($data as $key => $value){
                    setcookie($key, $value, time() + (86400 * 30), "/");
                }
             
           echo '{"id":'.$id.',"status":"pending","link":"'.$user['url'].'.'.strval($ct).'","payment_method":null,"name":"sadsd","email":"sdfsdf@gmail.com","phone":"+201023864504","app":"eventat","ip":"196.157.9.178","cancelation_reason":null,"pay_by_link":false,"code":null,"sale_price":'.$price.',"price":'.$price.',"currency":"KWD","foc":false,"occurrence":{"id":94748,"name":null,"note":null,"start_datetime":"'.$user['start_datetime'].'","end_datetime":"'.$user['end_datetime'].'","status":"published","location":{"ar":"مسرح دار المهن الجابرية"},"gps_latitude":null,"gps_longitude":null,"upgrade":true,"downgrade":false,"change_date":false,"timezone":"Asia/Kuwait","change_tickets":false,"auto_assign":false,"gap":false,"cancelation":false,"cancelation_start":null,"cancelation_end":null,"event":{"id":6471,"name":{"ar":"الجزار"},"slug":"aljzzar","location":{"ar":"مسرح دار المهن الجابرية"},"book_button_title":null,"image":"https://www.dawratmedia.com/eventat/event/6471-1afbecde-ca73-4756-88ff-c82b2e1048b2.jpeg","image_hash":"LCE_jmGF01s:~VE1R5x]5lict7tR","people_title":null,"currency":"KWD","booking_details":null,"country":"kw","timezone":"Asia/Kuwait","theme":{},"datetime":{"ar":"إبتداء من ٢٦ يوليو"},"specification_title":null,"specifications":null,"terms_of_agreement":{"ar":"<ul>\r\n<li>يرجى الحضور قبل العرض بـ ٣٠ دقيقة&nbsp;</li>\r\n<li>التذاكر المباعة لاترد ولاتستبدل</li>\r\n<li>لايسمح بدخول الأكل والمشروبات بكافة أنواعها من خارج المسرح</li>\r\n<li>ممنوع دخول الأطفال الذين تقل أعمارهم عن ١٢ سنة&nbsp;</li>\r\n</ul>"},"organizer":{"id":53,"name":{"ar":"Back Stage Group","en":"Back Stage Group"},"links":null,"image":"https://www.dawratmedia.com/eventat/organizer/53-cc9d1fd4-8a3a-4fbc-b879-f16e9fc2b152.jpg"},"payment_methods":["knet","mpgs","cash"],"occurrence_name":"show","event_page_redirect":null,"booking_mode":"seats","always_show_occurrences_list":true,"login_to_view_ticket":false,"login_to_book":false,"require_captcha":"never","map_id":1282,"discounts":null},"map_id":1282},"tickets":[{"id":21710029,"status":"pending","bookable":{"id":5927601,"meta_id":14646,"seat_id":"seat_343776","name":{"ar":"Gold"},"price":20.0,"color":"#FFD700","number":29,"row":2,"section":null,"row_name":"B","seat_name":"B29"},"bookable_id":5927601,"sale_price":20.0,"price":20.0,"details":null,"remove":false,"checked_in":false,"checked_in_on":null},{"id":21710028,"status":"pending","bookable":{"id":5927600,"meta_id":14646,"seat_id":"seat_343775","name":{"ar":"Gold"},"price":20.0,"color":"#FFD700","number":28,"row":2,"section":null,"row_name":"B","seat_name":"B28"},"bookable_id":5927600,"sale_price":20.0,"price":20.0,"details":null,"remove":false,"checked_in":false,"checked_in_on":null},{"id":21710027,"status":"pending","bookable":{"id":5927599,"meta_id":14646,"seat_id":"seat_343774","name":{"ar":"Gold"},"price":20.0,"color":"#FFD700","number":27,"row":2,"section":null,"row_name":"B","seat_name":"B27"},"bookable_id":5927599,"sale_price":20.0,"price":20.0,"details":null,"remove":false,"checked_in":false,"checked_in_on":null}],"occurrence_id":94748,"details":null,"created_on":"2024-07-19T01:54:22.335827+03:00","booked_on":null,"checked_in":false,"checked_in_on":null,"timeout_datetime":"'.$future_time->format('Y-m-d\TH:i:s.uP').'","invoice_number":"'.$user['url'].'.'.strval($ct).'","can_cancel":[true,null],"can_modify":[false,"booking.modify.not-allowed"],"offline_purchase":false,"created_by":null,"change_date":false,"change_tickets":false,"code_is_hidden":false}';
           exit();
            }
           
           
        } else {
            echo json_encode(["Success" => false, "error" => "Event not found."]);
        }
    }
    
    
    $tok = '{"id": 21709690,"status": "pending"}';
    $result = [];

    for ($i = 0; $i < $ct; $i++) {
       $result[] = json_decode($tok, true);
    }

        date_default_timezone_set('Asia/Kuwait');
        $current_time = new DateTime();
        $future_time = $current_time->add(new DateInterval('PT20M'));
      echo '{
    "id":'.$id.',
    "status": "pending",
    "link": "'.$user['url'].'.'.strval($ct).'",
    "payment_method": null,
    "name": null,
    "email": null,
    "phone": null,
    "app": "eventat",
    "ip": "196.157.9.178",
    "cancelation_reason": null,
    "pay_by_link": false,
    "code": null,
    "sale_price":'.$price.',
    "price":'.$price.',
    "currency": "KWD",
    "foc": false,
    "occurrence": {
        "id":'.$id.',
        "name": null,
        "note": null,
        "start_datetime": "'.$user['start_datetime'].'",
        "end_datetime": "'.$user['end_datetime'].'",
        "status": "published",
        "location": {
            "en": "مسرح نادي السالمية - السالمية "
        },
        "gps_latitude": null,
        "gps_longitude": null,
        "upgrade": true,
        "downgrade": false,
        "change_date": false,
        "timezone": "Asia/Kuwait",
        "change_tickets": false,
        "auto_assign": false,
        "gap": false,
        "cancelation": false,
        "cancelation_start": null,
        "cancelation_end": null,
        "event": {
            "id": 6425,
            "name": {
                "ar": "'.$user['name'].'"
            },
            "slug": "banatwalsaher",
            "location": {
                "en": "مسرح نادي السالمية - السالمية "
            },
            "book_button_title": null,
            "image": "https://www.dawratmedia.com/eventat/event/6425-c50fac32-b183-401f-a7d3-ef9965e8bf78.jpeg",
            "image_hash": "LSEV7ws:0hWB%0ofNHjsJ7R*w|j[",
            "people_title": null,
            "currency": "KWD",
            "booking_details": null,
            "country": "kw",
            "timezone": "Asia/Kuwait",
            "theme": {},
            "datetime": {
                "ar": "إبتداء من 19 سبتمبر 2024"
            },
            "specification_title": null,
            "specifications": null,
            "terms_of_agreement": {
                "ar": "<ul>\r\n<li>يرجى الحضور قبل العرض بـ ٣٠ دقيقة&nbsp;</li>\r\n<li>التذاكر المباعة لاترد ولاتستبدل</li>\r\n<li>لايسمح بدخول الأكل والمشروبات بكافة أنواعها من خارج المسرح</li>\r\n<li>يحتاج جميع الأطفال الذين تبلغ أعمارهم اكثر من سنتين إلى تذكرة دخول.</li>\r\n<li>يسمح للأطفال الذين تقل أعمارهم عن سنتين بالدخول مجانًا بشرط أن يجلسوا في حضن أحد الوالدين أو المرافقين.</li>\r\n</ul>"
            },
            "organizer": {
                "id": 53,
                "name": {
                    "ar": "Back Stage Group",
                    "en": "Back Stage Group"
                },
                "links": null,
                "image": "https://www.dawratmedia.com/eventat/organizer/53-cc9d1fd4-8a3a-4fbc-b879-f16e9fc2b152.jpg"
            },
            "payment_methods": [
                "knet",
                "mpgs",
                "cash"
            ],
            "occurrence_name": "show",
            "event_page_redirect": null,
            "booking_mode": "seats",
            "always_show_occurrences_list": true,
            "login_to_view_ticket": false,
            "login_to_book": false,
            "require_captcha": "never",
            "map_id": 1256,
            "discounts": null
        },
        "map_id": 1256
    },
    "tickets": 
       '.json_encode($result, JSON_PRETTY_PRINT).'
       
       
    ,
    "occurrence_id": 94169,
    "details": null,
    "created_on": "2024-07-18T23:46:51.161584+03:00",
    "booked_on": null,
    "checked_in": false,
    "checked_in_on": null,
    "timeout_datetime":"'.$future_time->format('Y-m-d\TH:i:s.uP').'",
    "invoice_number": null,
    "can_cancel": [
        true,
        null
    ],
    "can_modify": [
        false,
        "booking.modify.not-allowed"
    ],
    "offline_purchase": false,
    "created_by": null,
    "change_date": false,
    "change_tickets": false,
    "code_is_hidden": false
}';
    
    

            
            exit();
        }