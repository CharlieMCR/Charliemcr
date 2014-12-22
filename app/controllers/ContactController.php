<?php

class ContactController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('contact');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return 'submit!';
		$data = Input::all();

		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required|min:5',
			'address' => 'max:0'
		);

		$validator = Validator::make($data, $rules);

		if ($validator->fails()) {
			return Redirect::to('contact')->withInput($data)->withErrors($validator);
		}else{
			Mail::send('emails.contact', $data, function($message) use ($data){
				$message->from($data['email'], $data['name']);
				$message->to('jobs@charliemcr.com', 'Charlie')->subject('Charlie Mcr Contact Form Submission | ' . $data['name']);
			});
			return Redirect::to('contact')->with('success', 'Thanks for the email. I&rsquo;ll be in touch shortly.');
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return "submit";
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
