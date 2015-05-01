<?php namespace App\Http\Controllers;

//We include the models and their namespace here so we can use them later in the functions
//of this controller
// App\Emotion is our Emotion model, we need to access this in our wall controller
// App\Wall is our base Wall mode, we definitely need to access this in our wall controller
// Illuminate\Http\Request allows us to access $_POST and $_GET the Laravel way

use App\Emotion;
use App\Wall;
use Illuminate\Http\Request;

class WallController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
     //the root of the views folder is in resources/views
  	//this blade is the folder emotion
  	//the actual template is index.blade.php
  	//wall will be an array, we load it with all of the posts using the model
     return view('wall.index', ['walls' => Wall::all()]);
 
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
  	//we don't need to retrieve anything from the database to create a new wall
  	//this just returns the resource found in views/wall/create.blade.php
	return view('wall.create', ['emotions' => Emotion::lists('name', 'id')]);

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
  	//this function runs when the create form has been submitted
  	
  	//first we create a new Wall object
		$wall = new Wall;
	//with the model created, we can access it's properties and assign it values
		$wall->title = $request->input('title');
		$wall->body = $request->input('body');
		$wall->emotion_id = $request->input('emotion');
	//we run the save method, the database gets updated
		$wall->save();
	//we return the template, including the data for the newly created model
	    return view('wall.stored', ['wall' => $wall]);
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
		$wall = Wall::find($id);
		return view('wall.detail', ['wall' => $wall]);

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $wall = Wall::find($id);
    return view('wall.edit', ['wall' => $wall]);

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    $wall = Wall::find($id);
  	$wall->title = $request->input('title');
  	$wall->body = $request->input('body');
  	$wall->emotion_id = $request->input('emotion_id');
  	$wall->save();
  	
  	return redirect('wall');  	
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $wall = Wall::find($id);
    $wall->delete();
	return view('wall.index', ['wall' => Wall::all()]);

  }
  
}

?>