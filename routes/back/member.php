<?php
use Controllers\MessageManager;
use Models\Member;

$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('back.members.list',['members'=>Member::all()]);
});

$app->get('/add/',function($request,$response,$args){
    echo $this->view->make('back.members.add');
});

$app->post('/add/',function($request,$response,$args){
     $parsed = $request->getParsedBody();
     $mbrs = new Member();
     $mbrs->name = $parsed['name'];
     $mbrs->address = $parsed['address'];
     $mbrs->phone = $parsed['phone'];
     $mbrs->education = $parsed['education'];
     $mbrs->email = $parsed['email'];
     $mbrs->descr = $parsed['descr'];
     $mbrs->activity = $parsed['activity'];
     MessageManager::SendMail($mbrs->email,'propeace','Welcom to Mechi Chamber Of Commerce and Industry');
     $uploadedFile=$request->getUploadedFiles()['image'];
     $directory="assets/back/img/members";
     $uf=$uploadedFile;
     $filename = $uf->name;   
     $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
     $mbrs->image=$directory . DIRECTORY_SEPARATOR . $filename;
     $mbrs->save();
     return $response->withRedirect('/admin/member/list/');
});

$app->get('/edit/{id}/',function($request,$response,$args){
    echo $this->view->make('back.members.edit',['member'=>Member::where('id',$args)->first()]);
});

$app->post('/edit/{id}/',function($request,$response,$args){
     $parsed = $request->getParsedBody();
     $mbrs = Member::where('id',$args)->first();
     $mbrs->name = $parsed['name'];
     $mbrs->address = $parsed['address'];
     $mbrs->phone = $parsed['phone'];
     $mbrs->education = $parsed['education'];
     $mbrs->email = $parsed['email'];
     $mbrs->descr = $parsed['descr'];
     $mbrs->activity = $parsed['activity'];

     if(isset($request->getUploadedFiles()['image'])){
        $uploadedFile=$request->getUploadedFiles()['image'];
                $directory="assets/back/img/members";
                $uf=$uploadedFile;
                $filename = $uf->name; 
                if($filename!=""){  
                $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
                $mbrs->image=$directory . DIRECTORY_SEPARATOR . $filename;
                }
        }
    $mbrs->save();
    return $response->withRedirect('/admin/member/list/');

});

$app->get('/del/{id}/',function($request,$response,$args){
    $member = Member::where('id',$args)->first();
    $member->delete();
    return $response->withRedirect('/admin/member/list/');
});