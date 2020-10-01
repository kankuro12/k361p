<?php
use Models\Event;
$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('back.event.list',['events'=>Event::all()]);
});

$app->get('/add/',function($request,$response,$args){
    echo $this->view->make('back.event.add');
});

$app->post('/add/',function($request,$response,$args){
    $parsedBody = $request->getParsedBody();
    $event = new Event();
    $event->title = $parsedBody['title'];
    $event->descr = $parsedBody['descr'];
    $event->eventtime = $parsedBody['eventtime'];
    $event->eventdate = $parsedBody['eventdate'];
    $event->address = $parsedBody['address'];
   
    $uploadedFile=$request->getUploadedFiles()['image'];
    $directory="assets/back/img/event";
    $uf=$uploadedFile;
    $filename = $uf->name;   
    $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
    $event->image=$directory . DIRECTORY_SEPARATOR . $filename;
    $event->save();
    return $response->withRedirect('/admin/event/list/');
});

$app->get('/edit/{id}/',function($request,$response,$args){
    echo $this->view->make('back.event.edit',['event'=>Event::where('id',$args)->first()]);
});

$app->post('/edit/{id}/',function($request,$response,$args){
    $parsedBody = $request->getParsedBody();
    $event = Event::where('id',$args)->first();
    $event->title = $parsedBody['title'];
    $event->descr = $parsedBody['descr'];
    $event->eventtime = $parsedBody['eventtime'];
    $event->eventdate = $parsedBody['eventdate'];
    $event->address = $parsedBody['address'];

    if(isset($request->getUploadedFiles()['image'])){
        $uploadedFile=$request->getUploadedFiles()['image'];
                $directory="assets/back/img/event";
                $uf=$uploadedFile;
                $filename = $uf->name; 
                if($filename!=""){  
                $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
                $event->image=$directory . DIRECTORY_SEPARATOR . $filename;
                }
        }
    $event->save();
    return $response->withRedirect('/admin/event/list/');
});


$app->get('/del/{id}/',function($request,$response,$args){
  $event = Event::where('id',$args)->first();
  $event->delete();
  return $response->withRedirect('/admin/event/list/');
});
