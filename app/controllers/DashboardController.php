<?php

class DashboardController extends \BaseController {

	public function __construct()
	{
		// $this->beforeFilter('csrf', array('on' => 'post'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();

		return View::make('userpanel.index')->with('projects', $projects);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userpanel.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		// validate
        $rules = array(
            'name'       	=> 'required|unique:projects|alpha_dash',
            'description'   => 'required',
            'file'			=> 'image'
        );
        $validator = Validator::make($data, $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('userpanel/dashboard/create')->withInput($data)->withErrors($validator);
        } else {
            // store
            $project = new Project;
            if (Input::hasFile('file')) {
            	$imageName = Input::get('name') . '.' . Input::file('file')->getClientOriginalExtension();
		        $imagePath = public_path().'/img/projects/';
		        Input::file('file')->move($imagePath, $imageName);
		        $project->img 	= $imageName;
            	
            } else {
            	$project->img	= '';
            	// $project->url	= '';
            }            
            $project->name       	= Input::get('name');
            $project->description   = Input::get('description');
            $project->url 			= Input::get('url');
            $project->github 		= Input::get('github');
            $project->rating 		= Input::get('rating');
            $project->save();            

            // redirect
            Session::flash('message', 'Successfully created project!');
            return Redirect::to('userpanel/dashboard');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the project
        $project = Project::find($id);

        // show the view and pass the project to it
        return View::make('userpanel.show')
            ->with('project', $project);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
        $project = Project::find($id);

        // show the edit form and pass the nerd
        return View::make('userpanel.edit')
            ->with('project', $project);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();

		// validate
        $rules = array(
            'name'       	=> 'required|alpha_dash',
            'description'   => 'required',
            'file'			=> 'image'
        );
        $validator = Validator::make($data, $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('userpanel/dashboard/' . $id . '/edit')->withInput($data)->withErrors($validator);
        } else {
            // store
            $project = Project::find($id);
            if (Input::get('removeImage') == True) {
            	$project->img	= '';
            	$project->url	= '';
            	if (File::exists(Input::get('url'))) {
            		File::delete(Project::find($id)->url);
            	}
            }
            if (Input::hasFile('file')) {
            	$imageName = Input::get('name') . '.' . Input::file('file')->getClientOriginalExtension();
		        $imagePath = public_path().'/img/projects/';
		        Input::file('file')->move($imagePath, $imageName);
		        $project->img 	= $imageName;
            	
            } 
                      
            $project->name       	= Input::get('name');
            $project->description   = Input::get('description');
            $project->url 			= Input::get('url');
            $project->github 		= Input::get('github');
            $project->rating 		= Input::get('rating');
            $project->save(); 

            // redirect
            Session::flash('message', 'Successfully updated project!');
            return Redirect::to('userpanel/dashboard');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
        $project = Project::find($id);
        File::delete($project->url);
        $project->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the project!');
        return Redirect::to('userpanel/dashboard');
	}


}
