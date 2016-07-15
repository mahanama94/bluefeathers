<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/10/16
 * Time: 9:46 PM
 */

namespace BlueFeathers\Http\Controllers;

use BlueFeathers\Models\Trainer;

class TrainerController extends Controller{

    public function index(){

        $trainers = Trainer::where('status', true)->get();

        return view('trainer.index')->with('trainers', $trainers);
    }

    public function addNew(){

        return view('trainer.newtrainer');

    }

    public function postNew(){
        echo "post of add new trainer lands here";
    }

    public function trainerIndex($id){
        echo "Trainer for id ".$id;
    }
}