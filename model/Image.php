<?php
         namespace Models;
         use Illuminate\Database\Eloquent\Model as Eloquent;
          class Image extends Eloquent{ 
            protected $fillable = ['id','name','filepath','created_at','updated_at',];
            protected $appends = ['image'];

        public function Galaryimages()
        {
            return $this->hasMany('Models\Galaryimage');
        }
        public function getImageAttribute()
        {
            return $this->filepath;
        }
}