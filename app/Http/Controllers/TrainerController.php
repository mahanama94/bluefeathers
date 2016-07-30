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
use Symfony\Component\HttpFoundation\File\UploadedFile;

class TrainerController extends Controller{

    public function index(){

        $trainers = Trainer::where('status', true)->get();

        return view('trainer.index')->with('trainers', $trainers);
    }

    public function addNew(){

        $trainers = Trainer::where('status', true)->get();

        return view('trainer.newtrainer')->with('trainers', $trainers);

    }

    public function postNew(Request $request){

        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|unique:trainer|email|max:255',
            'qualifications' => 'required',
            'description' => 'required',
            'image' =>'required|mimes:jpeg,bmp,png'
        ]);

        $trainer = Trainer::create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "qualifications" =>$request->input('qualifications'),
            "description" => $request->input('description'),
            'email' => $request->input('email'),
            'status' => 1
        ]);

        $imageName = $trainer->getId().'_'.$trainer->getUpdateDate().'.'.$request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(base_path() . '/public/images/trainer/', $imageName);

        $trainer->update([
            'image' => 'images/trainer/'.$imageName
        ]);

        return redirect()->route('trainer.index',['id' => $trainer->getId()])
            ->with('success', 'Trainer profile has been created for '.$trainer->getName());

    }

    public function trainerProfile($id){

        $trainer = Trainer::where('id', $id)->first();
        if(!$trainer){
            return redirect()->route('trainers');
        }
        return view('trainer.profile')->with('trainer', $trainer);
    }
    
    public function getEdit($id){

        $trainer = Trainer::where('id', $id)->first();
        if(!$trainer){
            return redirect()->route('trainers');
        }

        return view('trainer.edit')->with('trainer', $trainer);
    }
    
    public function postEdit(Request $request){
        echo "Posted edit";
    }
}