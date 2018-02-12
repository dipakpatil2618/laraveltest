<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dairy extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public $timestamps = true;
    protected $table = 'dairy';
    protected $fillable = ['id', 'user_id', 'title', 'description'];
    //protected $connection = 'mysql';

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
}
