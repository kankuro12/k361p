<?php

use Models\Image;
    $app->get('/api/image/{id}/',function($request,$response,$vars){
        $image=Image::find($vars['id']);
        if($image!=null){

            $file=$image->filepath;
        }else{
            $file='images/pnf.jpg';
        }
        $response = $response->withHeader('Content-Description', 'File Transfer')
        ->withHeader('Content-Type', 'image')
        ->withHeader('Content-Disposition', 'inline;filename="'.basename($file).'"')
        ->withHeader('Expires', '0')
        ->withHeader('Cache-Control', 'must-revalidate')
        ->withHeader('Pragma', 'public')
        ->withHeader('Content-Length', filesize($file));
        readfile($file);
        return $response;
    });