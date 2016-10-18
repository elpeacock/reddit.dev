<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = [
    	'title' => 'required | max:100',
        'content' => 'required',
        'url' => 'required',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public static function searchPosts($searchTerm)
    {
    	return Post::where('title', 'LIKE', '%' . $searchTerm . '%')->get();
    }


}
