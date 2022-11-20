<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    /**
	 * Index function for general listing.
	 *
	 * @param request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index(Request $request)
	{
		$companies = Company::all();

		return response()->json($companies);
	}
}
