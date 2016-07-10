<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/10/16
 * Time: 6:43 PM
 */
namespace BlueFeathers\Http\Controllers;

class HomeController extends Controller{

    public function index(){
        return view('home');
    }
}