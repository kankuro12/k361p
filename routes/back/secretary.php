<?php 
use Models\Secretary;
$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('back.secretary.list',['secretaries'=>Secretary::all()]);
});

$app->get('/add/',function($request,$response,$args){
    echo $this->view->make('back.secretary.add');
});

$app->post('/add/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $secret = new Secretary();
    $secret->name = $parsed['name'];
    $secret->designation = $parsed['designation'];
    $secret->address = $parsed['address'];
    $secret->phone = $parsed['phone'];
    $secret->email = $parsed['email'];
    $uploadedFile=$request->getUploadedFiles()['image'];
    $directory="assets/back/img/secretary";
    $uf=$uploadedFile;
    $filename = $uf->name;   
    $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
    $secret->image=$directory . DIRECTORY_SEPARATOR . $filename;
    $secret->save();
    return $response->withRedirect('/admin/secretary/list/');
});

$app->get('/edit/{id}/',function($request,$response,$args){
    echo $this->view->make('back.secretary.edit',['secretary'=>Secretary::where('id',$args)->first()]);
});

$app->post('/edit/{id}/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $secret = Secretary::where('id',$args)->first();
    $secret->name = $parsed['name'];
    $secret->designation = $parsed['designation'];
    $secret->address = $parsed['address'];
    $secret->phone = $parsed['phone'];
    $secret->email = $parsed['email'];

    if(isset($request->getUploadedFiles()['image'])){
        $uploadedFile=$request->getUploadedFiles()['image'];
                $directory="assets/back/img/secretary";
                $uf=$uploadedFile;
                $filename = $uf->name; 
                if($filename!=""){  
                $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
                $secret->image=$directory . DIRECTORY_SEPARATOR . $filename;
                }
        }
    $secret->save();
    return $response->withRedirect('/admin/secretary/list/');
});

$app->get('/del/{id}/',function($request,$response,$args){
    $secret = Secretary::where('id',$args)->first();
    $secret->delete();  
    return $response->withRedirect('/admin/secretary/list/');
});
