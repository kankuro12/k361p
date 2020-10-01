<?php 
use Models\Notice;
$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('back.notice.list',['notices'=>Notice::all()]);
});

$app->get('/add/',function($request,$response,$args){
    echo $this->view->make('back.notice.add');
});

$app->post('/add/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $notice = new Notice();
    $notice->title = $parsed['title'];
    $notice->published = $parsed['published'];
    $notice->publisher = $parsed['publisher'];
    $notice->desc = $parsed['desc'];

    $uploadedFile=$request->getUploadedFiles()['image'];
    $directory="assets/back/img/notice";
    $uf=$uploadedFile;
    $filename = $uf->name;   
    $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
    $notice->image=$directory . DIRECTORY_SEPARATOR . $filename;
    $notice->save();
    return $response->withRedirect('/admin/notice/list/');
});

$app->get('/edit/{id}/',function($request,$response,$args){
    echo $this->view->make('back.notice.edit',['notice'=>Notice::where('id',$args)->first()]);
});

$app->post('/edit/{id}/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $notice = Notice::where('id',$args)->first();
    $notice->title = $parsed['title'];
    $notice->published = $parsed['published'];
    $notice->publisher = $parsed['publisher'];
    $notice->desc = $parsed['desc'];

    if(isset($request->getUploadedFiles()['image'])){
        $uploadedFile=$request->getUploadedFiles()['image'];
                $directory="assets/back/img/notice";
                $uf=$uploadedFile;
                $filename = $uf->name; 
                if($filename!=""){  
                $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
                $notice->image=$directory . DIRECTORY_SEPARATOR . $filename;
                }
        }
    $notice->save();
    return $response->withRedirect('/admin/notice/list/');
});

$app->get('/del/{id}/',function($request,$response,$args){
    $notice = Notice::where('id',$args)->first();
    $notice->delete();
    return $response->withRedirect('/admin/notice/list/');
});