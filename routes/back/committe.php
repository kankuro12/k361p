<?php
use Models\Committe;
use Models\Member;
use Models\Committemember;
use Models\Callback;
$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('back.committes.list',['committes'=>Committe::all()]);
});

$app->get('/add/',function($request,$response,$args){
    echo $this->view->make('back.committes.add',['members'=>Member::all()]);
});

$app->post('/add/',function($request,$response,$args){
      $parsed = $request->getParsedBody();
      $committe = Committe::create($parsed);
      return $response->withRedirect('/admin/committe/list/');
});

$app->get('/edit/{id}/',function($request,$response,$args){
    echo $this->view->make('back.committes.edit',['committe'=>Committe::where('id',$args)->first()]);
});

$app->post('/edit/{id}/',function($request,$response,$args){
    $parsed = $request->getParsedBody();    
    $committe = Committe::where('id',$args)->first();
    $committe->update($parsed);
    return $response->withRedirect('/admin/committe/list/');
});

$app->get('/del/{id}/',function($request,$response,$args){   
    $committe = Committe::where('id',$args)->first();
    $committe->delete();
    return $response->withRedirect('/admin/committe/list/');
});

$app->get('/manage/{id}/',function($request,$response,$args){   
    echo $this->view->make('back.committes.manage',['committe'=>Committe::where('id',$args)->first(),'members'=>Member::all()]);    
});

$app->post('/member/add/',function($request,$response,$args){   
    $parsed = $request->getParsedBody();
    $cm = Committemember::create($parsed);
    $cm->membername=$cm->member->name;
    return $response->withJson(new Callback(['member'=>$cm]));
});

$app->post('/member/edit/',function($request,$response,$args){   
    $parsed = $request->getParsedBody();
    $cm = Committemember::find($parsed['id']);
    $cm->update($parsed);
    return $response->withJson(new Callback(['member'=>$cm]));
});

$app->post('/member/del/',function($request,$response,$args){ 
    $parsed = $request->getParsedBody();
    $cm = Committemember::find($parsed['id']);
    $cm->delete();
    return $response->withJson(new Callback(['cms'=>$cm])); 
});
