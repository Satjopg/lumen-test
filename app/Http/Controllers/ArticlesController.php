<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticlesController extends Controller {

    const MODEL = "App\Article";

	public function index () 
	{
		$m = self::MODEL;
		return $this->respond(Response::HTTP_OK, $m::all());
	}

	public function first ()
	{
		$m = self::MODEL;
		return $this->respond(Response::HTTP_OK, $m::all()->first());
	}

	public function find($id)
	{
		$m = self::MODEL;
		$model = $m::find($id);
		if(is_null($model)){
			return $this->respond(Response::HTTP_NOT_FOUND);
		}
		return $this->respond(Response::HTTP_OK, $model);
	}

	protected function respond($status, $data = [])
	{
		return response()->json($data, $status);
	}
}
