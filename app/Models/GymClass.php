<?php
/**
 * Created by PhpStorm.
 * User: mahan
 * Date: 7/15/2016
 * Time: 12:13 PM
 */

namespace BlueFeathers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GymClass extends Model{

    protected $table = 'class';

    protected $fillable = [
        'trainerId', 'name' , 'description', 'status', 'image'
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

    public function getImage(){
        if($this->image==''){
            return 'images/c4.jpg';
        }
        return $this->image;
    }

    public function getUpdateDate(){
        return date('Y_m_d', strtotime($this->updated_at));
    }

    /**
     *      SETTERS
     */

    public function setImage(Request $request){
        $imageName = $this->getId().'_'.$this->getUpdateDate().'.'.$request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(base_path() . '/public/images/class/', $imageName);

        $this->update([
            'image' => 'images/class/'.$imageName
        ]);
    }
    
}