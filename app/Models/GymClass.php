<?php
/**
 * Created by PhpStorm.
 * User: mahan
 * Date: 7/15/2016
 * Time: 12:13 PM
 */

namespace BlueFeathers\Models;

use Illuminate\Database\Eloquent\Model;

class GymClass extends Model{

    protected $table = 'class';

    protected $fillable = [
        'trainerId', 'name' , 'description', 'status'
    ];

    /**
     *      RELATIONSHIPS
     */

    private function trainer(){
        return $this->belongsTo('BlueFeathers\Models\Trainer', 'trainerId', 'id');
    }

    /**
     *      RELATIONSHIPS GETTERS
     */

    public function getTrainer(){
        return $this->trainer()->first();
    }

    /**
     *      GETTERS
     */

    public function getId(){
        return $this->id;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getName(){
        return $this->name;
    }

    public function getStatus(){
        if($this->status == '1'){
            return "Open";
        }
        return "Closed";
    }
    
}