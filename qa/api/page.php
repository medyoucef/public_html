<?php

function ojson($id){
     include '../db_connection.php';

    try {
        $sql = "SELECT start_datetime, end_datetime, location FROM events WHERE id = :url";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':url', explode('/', $id)[1]);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
        echo '{"display_as":"list","count":3,"next":null,"previous":null,"results":[{"id":'.explode('/', $id)[1].',"name":null,"note":null,"start_datetime":"'.$user['start_datetime'].'","end_datetime":"'.$user['end_datetime'].'","location":{"ar":"'.$user['location'].' "},"timezone":"Asia/Kuwait","sold_out":false,"days":[],"map_id":1282,"show_start_date":true,"show_end_date":false,"show_start_time":true,"show_end_time":true}]}';
        } else {
            echo json_encode(["Success" => false, "error" => "Event not found."]);
        }
        
    } catch (PDOException $e) {
        echo json_encode(["Success" => false, "error" => $e->getMessage()]);
    }
   
}





function ejson($id){
    include '../db_connection.php';

    try {
        $sql = "SELECT id, location, name, description,start_datetime, end_datetime, image FROM events WHERE url = :url";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':url', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            $response = [
                "id" => $user['id'],
                "name" => [
                    "ar" => $user['name'],
                    "en" => $user['name']
                ],
                "slug" => "aladdin-show",
                "location" => [
                    "ar" =>'"'.$user['location'].'"',
                    "en" => '"'.$user['location'].'"'
                ],
                "book_button_title" => null,
                "image" => $user['image'],
                "image_hash" => "LSC=+8ab5FxsI%s;oIayRqt6$|a~",
                "people_title" => null,
                "currency" => "KWD",
                "occurrence" => [
                    "id" => 94741,
                    "name" => null,
                    "note" => null,
                    "start_datetime" => $user['start_datetime'],
                    "end_datetime" => $user['end_datetime'],
                    "status" => "published",
                    "location" => [
                        "ar" => $user['location'],
                        "en" => $user['location']
                    ],
                    "gps_latitude" => 29.34802325075796,
                    "gps_longitude" => 48.088642360062984,
                    "maximum_tickets" => null,
                    "maximum_tickets_per_booking" => 20,
                    "maximum_bookings" => null,
                    "timezone" => "Asia/Kuwait",
                    "order" => 0,
                    "price_from" => 5.0,
                    "sold_out" => false,
                    "days" => []
                ],
                "published_count" => 6,
                "booking_details" => null,
                "country" => "kw",
                "timezone" => "Asia/Kuwait",
                "theme" => [],
                "datetime" => [
                    "ar" => explode(' ',$user['start_datetime'])[0],
                    "en" => explode(' ',$user['start_datetime'])[0]
                ],
                "description" => [
                    "ar" => $user['description'],
                    "en" => $user['description']
                ],
                "specification_title" => null,
                "specifications" => null,
                "gps_latitude" => 29.34802325075796,
                "gps_longitude" => 48.088642360062984,
                "terms_of_agreement" =>[
                    "ar" => "<ul><li>يرجى العلم ان فئة الأطفال الذين تقل اعمارهم عن ٤ سنوات يكون دخولهم للمتحف مجاني ، كما ان دخول فئة ذوي الهمم العالية مجانًا</li>\n<li>باختيار التذاكر الخاصة بك، توافق على الالتزام بالفئات المذكورة أدناه وجميع قواعد الدخول الأخرى.</li>\n<li>الدخول مسموح فقط لحاملي التذاكر الصالحة.</li>\n<li>التذكرة صالحة فقط لتاريخ و وقت الدخول الذي تم حجزه من قبل الزائر.</li>\n<li>في حالة عدم حضور الزائر في الوقت المحجوز لا يجوز له استرجاع قيمة التذكرة.</li>\n<li>لا يجوز لك إدخال الأطعمة والمشروبات إلى المتحف إلا إذا تم شراؤها من مقصف المتحف.</li>\n<li>يجب عليك اتباع قواعدنا واتباع تعليماتنا في المتحف.</li>\n<li>يعتبر السلوك المسيء أو التهديدي الجسدي أو اللفظي تجاه موظفينا أو أفراد جمهورنا أمرًا مسيء وغير مقبول وسيتم التحقيق في أي حوادث من هذا القبيل واتخاذ الإجراء المناسب.</li>\n<li>لا يمكن تفعيل التذاكر إلا باستخدام رمز الاستجابة السريعة QR-Code الذي تلقيته. إذا لم يكن لديك رمز الاستجابة السريعة الخاص بك معك، فلن يتم إصدار التذاكر.</li>\n</ul>",
                    "en" => "<ul><li>Please note that entry to the museum is free for children under 4 years of age, and entry for people of high determination is free.</li>\n<li>By selecting your tickets, you agree to abide by the categories listed below and all other entry rules.</li>\n<li>Entry is only permitted for valid ticket holders.</li>\n<li>The ticket is only valid for the entry date and time booked by the visitor.</li>\n<li>If the visitor does not appear at the reserved time, he is not permitted to refund the ticket value.</li>\n<li>You may not bring food and beverages into the museum unless they have been purchased from the museum canteen.</li>\n<li>You must follow our rules and follow our instructions at the museum.</li>\n<li>Physically or verbally abusive or threatening behavior towards our staff or members of the public is offensive and unacceptable and any such incidents will be investigated and appropriate action taken.</li>\n<li>Tickets can only be activated using the QR-Code you received. If you do not have your QR code with you, tickets will not be issued.</li>\n</ul>"
                ],
                "occurrences_listing" => "list",
                "contacts" => [
                     [
                        "type" => "whatsapp",
                        "contact" => file_get_contents('../dash/cont/te')
                    ],
                    [
                        "type" => "instagram",
                        "contact" => file_get_contents('../dash/cont/is')
                    ]
                ],
                "organizer" => [
                    "id" => 1268,
                    "name" => [
                        "en" => file_get_contents('../dash/cont/name')
                    ],
                    "links" => null,
                    "image" => "../dash/cont/log.jpeg"
                ],
                "payment_methods" => [
                    "knet",
                    "mpgs",
                    "cash"
                ],
                "permissions" => [],
                "occurrence_name" => "show",
                "event_page_redirect" => null,
                "booking_mode" => "tickets",
                "always_show_occurrences_list" => true,
                "login_to_book" => false,
                "require_captcha" => "never",
                "discounts" => []
            ];
            
            echo json_encode($response);
        } else {
            echo json_encode(["Success" => false, "error" => "Event not found."]);
        }
        
    } catch (PDOException $e) {
        echo json_encode(["Success" => false, "error" => $e->getMessage()]);
    }
}

?>
