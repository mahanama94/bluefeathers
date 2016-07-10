<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/10/16
 * Time: 8:35 PM
 */

namespace BlueFeathers\Http\Controllers;

class AboutController extends Controller{

    public function index(){
        return view('about.index'); 
    }
}