<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $tables = 'articles';
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'excerpt',
        'user_id'  //temporarilly

    ];

    protected $dates = ['published_at'];

    public function scopePublished($query){

        $query->where('published_at','<=',Carbon::now());
    }

    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function scopeUnpublished($query){

        $query->where('published_at','>=',Carbon::now());
    }


    /**
     *An article is owned by a user
     *
     * Method name singular owned by one user
     *
     *@return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user(){

        return $this->belongsTo('App\User');
    }


}
