<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardsType extends Model {
    
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = [];
    protected $attributes = array(
        'price' => 0,
    );
    
}
