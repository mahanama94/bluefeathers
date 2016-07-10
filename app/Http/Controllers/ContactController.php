<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/11/16
 * Time: 12:59 AM
 */

namespace BlueFeathers\Http\Controllers;

class ContactController extends Controller{

    public function index(){
        return view('contact.index');
    }
}