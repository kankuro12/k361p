<?php
         namespace Models;
         use Illuminate\Database\Eloquent\Model as Eloquent;
          class User extends Eloquent{ 
            protected $fillable = ['id','username','password','token','role','email','tokenexpired','updated_at','created_at',];
}