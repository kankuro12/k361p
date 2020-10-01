<?php
         namespace Models;
         use Illuminate\Database\Eloquent\Model as Eloquent;
          class Galaryimage extends Eloquent{ 
            protected $fillable = ['id','image_id','galary_id','created_at','updated_at',];
            protected $appends = ['cdn'];

        public function image()
        {
            return $this->belongsTo('Models\Image');
        }
        public function galary()
        {
            return $this->belongsTo('Models\Galary');
        }

        public function getGalaryImageAttribute()
        {
            return $this->image->image;
        }

        
        public function getCdnAttribute()
        {
            return "/api/image/".$this->image_id."/";
        }

}