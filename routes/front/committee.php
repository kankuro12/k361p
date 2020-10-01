<?php 
use Models\Committe;
use Models\Committemember;
use Models\Boardmember;
use Models\Secretary;
$app->get('committee/',function($request,$response,$args){
    echo $this->view->make('front.committee.committee',['committee'=>Committe::orderBy('id','desc')->get()]);
});

$app->get('committeemember/{id}/',function($request,$response,$args){
    echo $this->view->make('front.committee.committeemember',
    ['cm'=>Committemember::where('committe_id',$args['id'])->get()]);
});

$app->get('boardmember/',function($request,$response,$args){
    echo $this->view->make('front.committee.boardmember',['bm'=>Boardmember::all()]);
});

$app->get('secretariat/',function($request,$response,$args){
    echo $this->view->make('front.secretary.list',['secretaries'=>Secretary::all()]);
});
$app->get('pastpresident/',function($request,$response,$args){
    echo $this->view->make('front.committee.pastpre',['presidents'=>Boardmember::all()]);
});

$app->get('general/member/',function($request,$response,$args){
    echo $this->view->make('front.secretary.general',['generals'=>\Models\Member::orderBy('id','desc')->get()]);
});
