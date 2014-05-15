<?php

class WorkoutsController extends \BaseController {

	/**
	 * Display a listing of workouts
	 *
	 * @return Response
	 */
	public function index()
	{
		$workouts = Workout::all();

		return View::make('workouts.index', compact('workouts'));
	}

	/**
	 * Show the form for creating a new workout
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('workouts.create');
	}

	/**
	 * Store a newly created workout in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Workout::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Workout::create($data);

		return Redirect::route('workouts.index');
	}

	/**
	 * Display the specified workout.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$workout = Workout::findOrFail($id);

		return View::make('workouts.show', compact('workout'));
	}

	/**
	 * Show the form for editing the specified workout.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$workout = Workout::find($id);

		return View::make('workouts.edit', compact('workout'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$workout = Workout::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Workout::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$workout->update($data);

		return Redirect::route('workouts.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Workout::destroy($id);

		return Redirect::route('workouts.index');
	}

}