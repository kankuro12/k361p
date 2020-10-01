<?php
use Models\Area;
$app->get('area/list/',function($request,$response,$args){
    echo $this->view->make('back.area.list',['areas'=>Area::all()]);
});

$app->get('area/add/',function($request,$response,$args){
    echo $this->view->make('back.area.add');
});

$app->post('area/add/',function($request,$response,$args){
      $parsed = $request->getParsedBody();
      $area = new Area();
      $area->name = $parsed['name'];
      $area->detail = $parsed['detail'];
      
      $uploadedFile=$request->getUploadedFiles()['image'];
        $directory="assets/back/img/area";
        $uf=$uploadedFile;
        $filename = $uf->name;   
        $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
        $area->image=$directory . DIRECTORY_SEPARATOR . $filename;
        $area->save();
        return $response->withRedirect('/admin/area/list/');
});

$app->get('area/edit/{id}/',function($request,$response,$args){
    echo $this->view->make('back.area.edit',['area'=>Area::where('id',$args)->first()]);
});

$app->post('area/edit/{id}/',function($request,$response,$args){
     $parsed = $request->getParsedBody();
     $area = Area::find($args['id']);
     $area->name = $parsed['name'];
     $area->detail = $parsed['detail'];

     if(isset($request->getUploadedFiles()['image'])){
        $uploadedFile=$request->getUploadedFiles()['image'];
                $directory="assets/back/img/area";
                $uf=$uploadedFile;
                $filename = $uf->name; 
                if($filename!=""){  
                $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
                $area->image=$directory . DIRECTORY_SEPARATOR . $filename;
                }
        }
        $area->save();
        return $response->withRedirect('/admin/area/list/');
});

$app->get('area/del/{id}/',function($request,$response,$args){
      $area = Area::find($args['id']);
      $area->delete();
      return $response->withRedirect('/admin/area/list/');
});