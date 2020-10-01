<?php
use Models\Galary;
use Models\Galaryimage;
use Models\Image;
use Models\Callback;
$app->get('/',function($request,$response,$args){
    echo $this->view->make('back.gallery.add',['galleries'=>Galary::all()]);
});

$app->get('/show/',function($request,$response,$args){
    echo $this->view->make('back.gallery.show',['galleries'=>Galary::all()]);
});

$app->post('/add/',function($request,$response,$args){
     $parsed = $request->getParsedBody();
     $gallery = Galary::create($parsed);
     return $response->withJson(new Callback(['gallery'=>$gallery]));
});

$app->post('/update/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $gallery = Galary::find($parsed['id']);
    $gallery->name=$parsed['name'];
    $gallery->save();
    return $response->withJson(new Callback(['gallery'=>$gallery]));
});

$app->post('/del/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $gallery = Galary::find($parsed['id']);
    $gallery->delete();
    return $response->withJson(new Callback(['gallery'=>$gallery]));
});

$app->get('/manage/{id}/',function($request,$response,$args){
    echo $this->view->make('back.gallery.manage',['gallery'=>Galary::find($args['id'])]);

});

$app->post('/image/add/',function($request,$response,$args){
    $parsed=$request->getParsedBody();
    $files=$request->getUploadedFiles()['image'];
    // print_r($files);
    $gallery_id=$parsed['galary_id'];
    $callback=new Callback();
    foreach ($files as $file) {
        $galaryimage=new Galaryimage();
        $galaryimage->galary_id=$gallery_id;
        $image=new Image();
        $uf=$file;
        $filename = $uf->name;   
        $uf->moveTo("images" . DIRECTORY_SEPARATOR . $filename);       
        $image->filepath='images'. DIRECTORY_SEPARATOR . $filename;
        $image->save();

        $galaryimage->image_id=$image->id;
        $galaryimage->save();

        array_push($callback->data,$galaryimage);
    }
    return $response->withJson($callback); 
});

$app->post('/image/del/',function($request,$response,$vars){
    $parsed=$request->getParsedBody();
    $galaryimage=Galaryimage::find($parsed['id']);
    $galaryimage->delete();
    return $response->withJson(new Callback(['image'=>$galaryimage])); 
});

