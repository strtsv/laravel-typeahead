<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirplanesController extends Controller
{
	public function show($term)
	{
		$airplanes = DB::table('airplanes')
			->where('registration', 'LIKE', '%' . $term . '%')
			->orWhere('operator', 'LIKE', '%' . $term . '%')
			->orWhere('manufacturer', 'LIKE', '%' . $term . '%')
			->orWhere('type', 'LIKE', '%' . $term . '%')
			->get();

		return Response::json($airplanes, 200);
	}
}
