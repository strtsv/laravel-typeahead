<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
//use Response;
//use App\Airplane;

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
		return response()->json($airplanes);
	}
}
