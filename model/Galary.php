<?php
         namespace Models;
         use Illuminate\Database\Eloquent\Model as Eloquent;
          class Galary extends Eloquent{ 
            protected $fillable = ['id','name','descr','created_at','updated_at',];
public function Galaryimages()
        {
            return $this->hasMany('Models\Galaryimage');
        }

        public function news(){
          return $this->belongsTo('Models\News');
        }
}