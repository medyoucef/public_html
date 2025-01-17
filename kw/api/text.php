<?php
function html($id){
    include '../db_connection.php';
        $sql = "SELECT VIP,Platinum,Gold,Silver,Bronze, start_datetime, end_datetime ,name FROM events WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', explode('/', $id)[1]);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(explode('/', $id)[2]=='map'){
        $modifiedContent2 = file_get_contents('text.txt');
        
        
        $modifiedContent2 = str_replace('VIP',
            $user['VIP'],
           $modifiedContent2 
       );
        $modifiedContent2 = str_replace('Platinum',
            $user['Platinum'],
           $modifiedContent2 
       );
       $modifiedContent2 = str_replace('Gold',
            $user['Gold'],
           $modifiedContent2 
       );
       $modifiedContent2 = str_replace('Silver',
            $user['Silver'],
           $modifiedContent2 
       );
       $modifiedContent2 = str_replace('Bronze',
            $user['Bronze'],
           $modifiedContent2 
       );
       
      
      echo $modifiedContent2;
            
            exit();
        }
        echo '{"id":'.explode('/', $id)[1].',"name":null,"note":null,"start_datetime":"'.$user['start_datetime'].'","end_datetime":"'.$user['end_datetime'].'","status":"published","is_hidden":false,"location":{"ar":"مسرح دار المهن الجابرية"},"maximum_tickets_per_booking":20,"timezone":"Asia/Kuwait","gap":false,"event":{"id":'.explode('/', $id)[1].',"name":{"ar":"'.$user['name'].'"},"slug":"aljzzar","location":{"ar":"مسرح دار المهن الجابرية"},"book_button_title":null,"image":"https://www.dawratmedia.com/eventat/event/'.explode('/', $id)[1].'-1afbecde-ca73-4756-88ff-c82b2e1048b2.jpeg","image_hash":"LCE_jmGF01s:~VE1R5x]5lict7tR","people_title":null,"currency":"KWD","published_count":3,"booking_details":null,"country":"EGP","timezone":"Asia/Kuwait","theme":{},"datetime":{"ar":"إبتداء من ٢٦ يوليو"},"specification_title":null,"specifications":null,"terms_of_agreement":{"ar":"<ul>\r\n<li>يرجى الحضور قبل العرض بـ ٣٠ دقيقة&nbsp;</li>\r\n<li>التذاكر المباعة لاترد ولاتستبدل</li>\r\n<li>لايسمح بدخول الأكل والمشروبات بكافة أنواعها من خارج المسرح</li>\r\n<li>ممنوع دخول الأطفال الذين تقل أعمارهم عن ١٢ سنة&nbsp;</li>\r\n</ul>"},"payment_methods":["knet","mpgs","cash"],"occurrence_name":"show","event_page_redirect":null,"booking_mode":"seats","always_show_occurrences_list":true,"login_to_book":false,"require_captcha":"never","map_id":1282,"discounts":[]},"sold_out":false,"days":[],"map_id":1282,"bookables":null,"discounts":[],"show_start_date":true,"show_end_date":false,"show_start_time":true,"show_end_time":true}';
        
}
        
                
    ?>