<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    
    
    
    public function testMail()
{
	$mail = 'saiedramy56@gmail.com';
	Mail::to($mail)->send(new OrderMail);

	dd('Mail Send Successfully !!');
}
    
    
    
    
}
