<?php

use App\Repos\HeyRepo;
use App\Repos\NiceRepo;
use App\Repos\TestRepo;
use App\Repos\UserRepo;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	private $testRepo;
	private $userRepo;
	private $heyRepo;
	private $niceRepo;

	function __construct(TestRepo $testRepo,
	                     UserRepo $userRepo,
	                     HeyRepo $heyRepo,
	                     NiceRepo $niceRepo)
	{

		$this->testRepo = $testRepo;
		$this->userRepo = $userRepo;
		$this->heyRepo = $heyRepo;
		$this->niceRepo = $niceRepo;
	}

	public function showWelcome()
	{
		return $this->testRepo->hello();
		//return View::make('hello');
	}

	public function dude()
	{
		return $this->userRepo->test();
	}

	public function hey()
	{
		return $this->heyRepo->show();
	}

	public function nice()
	{
		return $this->niceRepo->show();
	}
}
