<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/10/16
 * Time: 11:00 PM
 */


namespace BlueFeathers\Http\Controllers;

use BlueFeathers\Models\GymClass;
use BlueFeathers\Models\Trainer;

use Illuminate\Http\Request;

class ClassController extends Controller{

    public function index(){

        $classes = GymClass::all();

        return view('class.index')
            ->with('classes', $classes);
    }

    public function addNew(){

        $classes = GymClass::all();

        $trainers = Trainer::all();

        return view('class.newclass')
            ->with('classes', $classes)
            ->with('trainers', $trainers);
    }


    public function postNew(Request $request){

        $this->validate($request, [
            'name' => 'required|max:30',
            'trainerId' => 'required',
            'description' => 'required',
        ]);


        $class = GymClass::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'),
            'trainerId' => $request->input('trainerId'),
            "status" => $request->input('status'),
        ]);


        return redirect()->route('classes.new')->with('success', 'New class has been created');
    }

    public function classIndex($id){

        $class = GymClass::where('id', $id)->first();
        if(!$class){
            return redirect()->route('classes');
        }
        return view('class.profile')
            ->with('class', $class);

    }
}