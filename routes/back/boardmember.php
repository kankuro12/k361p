<?php
use Models\Board;
use Models\Member;
use Models\Boardmember;
use Models\Callback;
$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('back.boardmember.list',['boards'=>Board::all()]);
});

$app->get('/add/',function($request,$response,$args){
    echo $this->view->make('back.boardmember.add');
});

$app->post('/add/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $board = Board::create($parsed);
    return $response->withRedirect('/admin/board/list/');
});

$app->get('/edit/{id}/',function($request,$response,$args){
    echo $this->view->make('back.boardmember.edit',['board'=>Board::where('id',$args)->first()]);
});

$app->post('/edit/{id}/',function($request,$response,$args){
     $parsed = $request->getParsedBody();
     $board = Board::where('id',$args)->first();
     $board->update($parsed);
    return $response->withRedirect('/admin/board/list/');
});

$app->get('/del/{id}/',function($request,$response,$args){
      $board = Board::where('id',$args)->first();
      $board->delete();
     return $response->withRedirect('/admin/board/list/');
});

$app->get('/manage/{id}/',function($request,$response,$args){
      echo $this->view->make('back.boardmember.manage',['board'=>Board::where('id',$args)->first(),'members'=>Member::all()]);       
});

$app->post('/member/add/',function($request,$response,$args){   
    $parsed = $request->getParsedBody();
    $bm = Boardmember::create($parsed);
    $mem=$bm->member;
    $bm->membername=$mem->name;
    if($mem->password=="" || $mem->password==null ){
        $mem->password=md5($mem->phone);
        $mem->save();
    }
    return $response->withJson(new Callback(['member'=>$bm]));
});

$app->post('/member/edit/',function($request,$response,$args){   
    $parsed = $request->getParsedBody();
    $bm = Boardmember::find($parsed['id']);
    $bm->update($parsed);
    return $response->withJson(new Callback(['member'=>$bm]));
});

$app->post('/member/del/',function($request,$response,$args){ 
    $parsed = $request->getParsedBody();
    $bm = Boardmember::find($parsed['id']);
    $bm->delete();
    return $response->withJson(new Callback(['member'=>$bm])); 
});