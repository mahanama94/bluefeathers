<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/10/16
 * Time: 9:46 PM
 */

namespace BlueFeathers\Http\Controllers;

use BlueFeathers\Models\Trainer;

use Illuminate\Http\Request;

class TrainerController extends Controller{

    public function index(){

        $trainers = Trainer::where('status', true)->get();

        return view('trainer.index')->with('trainers', $trainers);
    }

    public function addNew(){

        return view('trainer.newtrainer');

    }

    public function postNew(Request $request){

        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|unique:trainer|email|max:255',
            'qualifications' => 'required',
            'description' => 'required'
        ]);

        Trainer::create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "qualifications" =>$request->input('qualifications'),
            "description" => $request->input('description'),
            'email' => $request->input('email'),
            'status' => 1
        ]);

        return redirect()->route('trainers.new')->with('success', 'Trainer profile has been created');

    }

    public function trainerIndex($id){
        echo "Trainer for id ".$id;
    }
}