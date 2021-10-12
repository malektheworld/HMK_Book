<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class commentReply extends Model
{
    //
    protected $fillable = [ 
        
        'comment_id',
        'author' ,
        'email' ,
        'photo' ,
        'body' ,
        'is_active'
    ] ;





    public function comment() {

        return $this->BelongsTo('App\Comment') ; 
    }
}
