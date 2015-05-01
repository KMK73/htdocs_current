<?php namespace App\Http\Controllers;

//We include the models and their namespace here so we can use them later in the functions
//of this controller
// App\Emotion is our Emotion model
// Illuminate\Http\Request allows us to access $_POST and $_GET the Laravel way

use App\Emotion;
use Illuminate\Http\Request;

class EmotionController extends Controller {

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
  	//emotions will be an array, we load it with all of the emotions using the model
     return view('emotion.index', ['emotions' => Emotion::all()]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {    
  	//we don't need to retrieve anything from the database to create a new emotion
  	//this just returns the resource found in views/emotion/create.blade.php
     return view('emotion.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
  	//this function runs when the create form has been submitted
  	
  	//first we create a new Emotion object
		$emotion = new Emotion;
	//with the model created, we can access it's properties and assign it values
		$emotion->name = $request->input('name');
	//we run the save method, the database gets updated
		$emotion->save();
	//we return the template, including the data for the newly created model
	    return view('emotion.stored', ['emotion' => $emotion]);
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
	$emotion = Emotion::find($id);
	return view('emotion.detail', ['emotion' => $emotion]);

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
  	$emotion = Emotion::find($id);
    return view('emotion.edit', ['emotion' => $emotion]);

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
  	$emotion = Emotion::find($id);
  	$emotion->name = $request->input('name');
  	$emotion->save();
  	return redirect('emotions');  	
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $emotion = Emotion::find($id);
    $emotion->delete();
	return view('emotion.index', ['emotions' => Emotion::all()]);

  }
  
}

?>