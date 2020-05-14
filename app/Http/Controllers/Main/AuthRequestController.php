<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Config;
use Session;
use URL;
use Validator;
use Illuminate\Support\Facades\Mail;

class AuthRequestController extends Controller
{
	public function __construct(Request $request)
    {
//		$this->lang = SetLang();
    }

	public function employers_registration(Request $request)
	{
		$this->email = (string)$request->input('email');
		$this->firstname = (string)$request->input('firstname');
		$this->lastname = (string)$request->input('lastname');
		$this->phone = (string)$request->input('phone');
		$this->company = (string)$request->input('company_name');
		$this->description = (string)$request->input('description');

		if(empty($this->email)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введен Email!'));    
		} 
		if(empty($this->firstname)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введено Имя!'));    
		}
		if(empty($this->lastname)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введена Фамилия!'));    
		}
		if(empty($this->phone)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введен телефон!'));    
		}
		if(empty($this->company)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введено название компании!'));    
		}
		if(empty($this->description)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введено описание вакансии!'));    
		}

        $check_email = DB::table('job_employers')->where('email', '=', (string)$this->email)->count();

		if($check_email > 0)
		{
			return response()->json(array('response'=>false, 'error'=>'Введенный Email уже существует!'));    
		}

		$password = GeneratePassword();


		$data = array(
			'email' => (string)$this->email,
			'password' => $password,
			'firstname' => (string)$this->firstname,
			'lastname' => (string)$this->lastname,
			'phone' => (string)$this->phone,
			'company' => (string)$this->company,
			'description' => (string)$this->description,
		);


		DB::table('job_employers')->insert($data);

		return response()->json(array('response'=>true));
	}

	public function east_employers_registration(Request $request)
	{
		$this->email = (string)$request->input('email');
		$this->firstname = (string)$request->input('firstname');
		$this->lastname = (string)$request->input('lastname');
		$this->phone = (string)$request->input('phone');
		$this->company = (string)$request->input('company_name');
		$this->description = (string)$request->input('description');
		$east = 1;
		$this->quantity = (string)$request->input('quantity');

		if(empty($this->email)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введен Email!'));    
		} 
		if(empty($this->firstname)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введено Имя!'));    
		}
		if(empty($this->lastname)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введена Фамилия!'));    
		}
		if(empty($this->phone)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введен телефон!'));    
		}
		if(empty($this->company)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введено название компании!'));    
		}
		if(empty($this->description)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введено описание вакансии!'));    
		}
		if(empty($this->quantity)) 
		{
			return response()->json(array('response'=>false, 'error'=>'Не введено количество работников!'));    
		}

        $check_email = DB::table('job_employers')->where('email', '=', (string)$this->email)->count();

		if($check_email > 0)
		{
			return response()->json(array('response'=>false, 'error'=>'Введенный Email уже существует!'));    
		}

		$password = GeneratePassword();


		$data = array(
			'email' => (string)$this->email,
			'password' => $password,
			'firstname' => (string)$this->firstname,
			'lastname' => (string)$this->lastname,
			'phone' => (string)$this->phone,
			'company' => (string)$this->company,
			'description' => (string)$this->description,
			'east' => (int)$east,
			'east_qty' => (int)$this->quantity
		);


		DB::table('job_employers')->insert($data);

		return response()->json(array('response'=>true));
	}


}
