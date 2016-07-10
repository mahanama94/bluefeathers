<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/11/16
 * Time: 12:53 AM
 */

namespace BlueFeathers\Http\Controllers;

class PriceController extends Controller{

    public function index(){
        return view('prices.index');
    }
}