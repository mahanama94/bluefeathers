<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/10/16
 * Time: 11:00 PM
 */

namespace BlueFeathers\Http\Controllers;

class ClassController extends Controller{

    public function index(){
        return view('class.index');
    }
}