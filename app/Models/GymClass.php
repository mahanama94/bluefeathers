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
        'name'
    ];
    
}