<?php
/**
 * Created by PhpStorm.
 * User: mahan
 * Date: 7/15/2016
 * Time: 11:39 AM
 */

namespace BlueFeathers\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model{

    protected $table = 'trainer';

    protected $fillable = [
        'name' , 'qualifications' , 'description', 'email' , 'status'
    ];

    /*
     *      RELATIONSHIPS
     */

    private function gymClass(){
        return $this->hasMany('BlueFeathers\Models\GymClass', 'trainerId');
    }

    /**
     *      RELATIONSHIP - GETTERS
     */

    public function getClasses(){
        return $this->gymClass()->get();
    }

    /**
     *      GETTERS
     */

    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }

    public function  getQualifications(){
        return $this->qualifications;
    }

    public function getDesciption(){
        return $this->description;
    }

    public function getJoinDate(){
        return date('Y-m-d', strtotime($this->created_at));
    }

}