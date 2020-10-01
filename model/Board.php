<?php
         namespace Models;
         use Illuminate\Database\Eloquent\Model as Eloquent;
          class Board extends Eloquent{ 
            protected $fillable = ['id','startdate','enddate','active','created_at','updated_at',];

          public function boardmember(){
            return $this->hasMany('Models\Boardmember');
          }
 }