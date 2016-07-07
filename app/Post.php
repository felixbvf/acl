<?php

namespace Acl;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
     'title',
     'user_id',
     
    ];
    protected $guarded = ['id'];

    public function user()
    {
    	return $this->belongsTo('Acl\User');
    }
}
