<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/10/16
 * Time: 11:00 PM
 */


namespace BlueFeathers\Http\Controllers;

use BlueFeathers\Models\GymClass;

class ClassController extends Controller{

    public function index(){

        $classes = GymClass::all();

        return view('class.index')->with('classes', $classes);
    }

    public function addNew(){

        $classes = GymClass::all();

        return view('class.newclass')->with('classes', $classes);
    }


    public function postNew(Request $request){

        $this->validate($request, [
            'name' => 'required|max:30',
            'trainerId' => 'required',
            'description' => 'required',
        ]);

        GymClass::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            'trainerId' => $request->input('trainerId'),
        ]);

        return view('classes.new')->with('info', "Class successfully added");

    }

    public function trainerIndex($id){

        $class = GymClass::where('id', $id)->first();
        if(!$class){
            return redirect()->route('classes');
        }
        return view('classes.profile')->with('class', $class);

    }
}