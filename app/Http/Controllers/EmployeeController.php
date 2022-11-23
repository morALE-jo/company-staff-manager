<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;

class EmployeeController extends Controller
{
    /**
	 * Index function for general listing.
	 *
	 * @param request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index(Request $request)
	{

		return EmployeeResource::collection(Employee::all());
	}


	/**
	 * Store Action
	 *
	 * @param request $request
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function store(Request $request)
	{
		$employee = Employee::create($request->all());
		return response()->json($employee);
	}

	/**
	 * Show action
	 *
	 * @param request $request
	 * @param int $id
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show(Request $request, $id)
	{
		$employee = Employee::find($id);

		return response()->json($employee);
	}


	/**
	 * Update action
	 *
	 * @param request $request
	 * @param int $id
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function update(Request $request, $id)
	{
		$employee = Employee::findOrFail($id);
		$employee->update($request->all());

		return response()->json($employee);
	}


	/**
	 * Destroy action
	 *
	 * @param request $request
	 * @param int $id
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function destroy(Request $request, $id)
	{
		Employee::find($id)->delete();

		return response()->json([], 204);
	}
}
