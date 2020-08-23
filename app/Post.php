<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $table='posts';
	public $primaryKey='id';
	
    protected $fillable = [
        'body', 'user_id', 'image', 'file', 'videos'];

        public function category() {
        return $this->belongsTo('App\Category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function likes() {
        return $this->hasMany('App\Like');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function friends() {
        return $this->belongsToMany('App\Friend');
    }
}