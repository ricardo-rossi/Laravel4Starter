<?php

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

	function __construct(\App\Repos\TestRepo $testRepo,
	                     \App\Repos\UserRepo $userRepo,
	                     \App\Repos\HeyRepo $heyRepo,
	                     \App\Repos\NiceRepo $niceRepo)
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
