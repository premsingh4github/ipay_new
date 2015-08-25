<?php namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller {
	
	public function __construct()
	{
		//$this->middleware('guest');
	}
	public function index(){
		return view('admin.home');
	}
	public function login(){
		return view('login');
	}
	public function transactionStatus(){
		return view('admin.transaction');
	}
	public function transactionCheck(Request $request){
			$code = $request->only('code');
			$client = SoapClient("https://www.ipayremitworldwide.com/webtracker/websiteapi.asmx?wsdl");
			$params = array('REFNO' => $code);
			$status =  $client->getTransactionStatus($params);
			return $status;
	}
}
