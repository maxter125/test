<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
class CreatesController extends Controller
{
	public function home(){
	$articles=Article::all();
	
	
	return view('home',['articles' => $articles]);
	}
	public function add(Request $request){
		$this->validate($request, [
		'email'=>'required',
		'password'=>'required'
		
		]);
		$articles = new Article;
		$articles->title = $request->input('email');
		$articles->description = $request->input('password');
		$articles->save();
		return redirect('/')->with('info','article successfully saved');
		
	}
	public function update($id){
	$articles=Article::find($id);
	
	return view('inc.update',['articles' => $articles]);
	}
	public function edit(Request $request, $id){
	$this->validate($request, [
		'email'=>'required',
		'password'=>'required'
		
		]);
		
		$data = array(
		'title' => $request->input('email'),
		'description' => $request->input('password')
		);
		Article::where('id',$id)->update($data);
		
		return redirect('/')->with('info','Article Updated successfully');
	}
	
	public function read($id){
	$articles=Article::find($id);
	
	return view('inc.read',['articles' => $articles]);
	
	}
	public function delete($id){
		Article::where('id',$id)
		->delete();
		return redirect('/')->with('info','Article dELETED successfully');
	
	}
    //
	//public function creates(){
	//return view('create');
	//}
}
