<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
    include '../db_connection.php';

$id=explode('/',$_GET['path']);
if($id[2] == 'checkout'){
$data = file_get_contents('php://input');

$data = json_decode($data);

$url = strval('/pay?amount='.$data->amount.'&currency=&tok='.base64_encode('name :'.$_COOKIE['name'].'#email :'.$_COOKIE['email'].'#phone :'.$_COOKIE['phone']));

$response =  '{"id":8246880,"number":"9fppkguotduemyyx5sju","status":"pending","amount":800.0,"currency":"QAR","amounts":{"QAR":{"rate":1.0,"amount":800.0}},"payment_methods":["sadad-qa"],"can_pay_by_link":false,"name":"466","email":"zzzzz@gmail.com","phone":"+2010000000","transactions":[{"id":8052031,"number":"5zd3x6ua1yk7v3nlg8nu","amount":800.0,"currency":"QAR","payment_method":"sadad-qa","note":null,"result":null,"ref":null,"refunded_on":null,"refunded_by":null,"refund_receipt_image":null,"response_code":null,"fraction_of_invoice":1.0,"reconciliation_confirm":null,"reconciliation_confirmed_by":null,"canceled_on":null,"canceled_by":null,"refund_receipt":null,"refund_trx_id":null,"bank_auth":null,"trans_id":null,"status":"pending","time_since_canceled":null,"paid_on":null,"created_on":"2024-06-14T02:40:17.156431+03:00"}],"timeout_datetime":"2024-06-14T02:54:15.381005+03:00","payment_response":{"url":"'.$url.'"},"items":[{"id":21673808,"status":"pending","resource":"booking","identifier":"9338042","name":{"en":"وتبقى ذكرى - قطر"},"description":{"ar":"الثلاثاء 18 يونيو, 8:00 م","en":"Tuesday 18 June, 8:00 PM"},"extra":{"link":"55k950ay5l34lzrt"},"amount":0.0,"currency":"QAR","amounts":{"QAR":{"rate":1.0,"amount":0.0}},"items":[{"id":21673809,"status":"pending","resource":"ticket","identifier":"21112864","name":{"en":"Diamond"},"description":"P9","extra":null,"amount":800.0,"currency":"QAR","amounts":{"QAR":{"rate":1.0,"amount":800.0}},"items":[]}]}],"pending_amounts":null,"created_on":"2024-06-14T02:39:58.795302+03:00","payment_link_generated":false}';

print_r($response);
}else{
     $sql = "SELECT url, name, description, image FROM events WHERE url = :event_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':event_id', explode('.',$id[1])[0]);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $ct = explode('.',$id[1])[1];
        if ($user) {
            $price = $_COOKIE['price'];
    
         date_default_timezone_set('Asia/Kuwait');
        $current_time = new DateTime();
        $future_time = $current_time->add(new DateInterval('PT20M'));
$response = '{"id":8387958,"number":"mpcsgzq16nf7kqjn7h2t","status":"pending","amount":'.$price.',"currency":"KWD","amounts":{"KWD":{"rate":1.0,"amount":'.$price.'}},"payment_methods":["mpgs","knet"],"can_pay_by_link":false,"name":"sadsd","email":"sdfsdf@gmail.com","phone":"+201023864504","transactions":[],"timeout_datetime":"'.$future_time->format('Y-m-d\TH:i:s.uP').'","payment_response":null,"items":[{"id":22112402,"status":"pending","resource":"booking","identifier":"9556760","name":{"ar":"'.$user['name'].'"},"description":{"ar":"الجمعة 26 يوليو, 4:00 م","en":"Friday 26 July, 4:00 PM"},"extra":{"link":"'.explode('/',$_GET['path'])[1].'.pay"},"amount":0.0,"currency":"KWD","amounts":{"KWD":{"rate":1.0,"amount":0.0}},"items":[{"id":22112405,"status":"pending","resource":"ticket","identifier":"21710027","name":{"ar":"Gold"},"description":"B27","extra":null,"amount":20.0,"currency":"KWD","amounts":{"KWD":{"rate":1.0,"amount":20.0}},"items":[]},{"id":22112404,"status":"pending","resource":"ticket","identifier":"21710028","name":{"ar":"Gold"},"description":"B28","extra":null,"amount":20.0,"currency":"KWD","amounts":{"KWD":{"rate":1.0,"amount":20.0}},"items":[]},{"id":22112403,"status":"pending","resource":"ticket","identifier":"21710029","name":{"ar":"Gold"},"description":"B29","extra":null,"amount":20.0,"currency":"KWD","amounts":{"KWD":{"rate":1.0,"amount":20.0}},"items":[]}]}],"pending_amounts":null,"created_on":"2024-07-19T03:09:35.466226+03:00","payment_link_generated":false}';
    // Print the response
   $response = json_decode($response);
  $response->payment_methods = ["sadad-qa"];
  $response = json_encode($response);
  print_r($response);
  
}
}

?>
