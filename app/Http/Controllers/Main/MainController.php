<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use URL;
use Config;

class MainController extends Controller
{

	public function __construct()
    {

//		$this->lang = SetLang();

    }

	public function index()
	{
		return view('main/home');
	}

	public function employers_registration()
	{
		return view('main/employers_registration');
	}

	public function workers_registration()
	{
		return view('main/workers_registration');
	}

	public function east_employers()
	{
		return view('main/east_employers');
	}

	public function vacancies()
	{
		return view('main/vacancies');
	}

	public function about()
	{
		return view('main/about');
	}

	public function contacts()
	{
		return view('main/contacts');
	}





}
