<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/10/16
 * Time: 9:46 PM
 */

namespace BlueFeathers\Http\Controllers;

class TrainerController extends Controller{

    public function index(){
        return view('trainer.index');
    }
}