<?php 
use Models\Boardinfo;

$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('back.boardinfo.list',['boardinfos'=>Boardinfo::all()]);
});

$app->get('/add/',function($request,$response,$args){
    echo $this->view->make('back.boardinfo.add');
});

$app->post('/add/',function($request,$response,$args){
      $parsed = $request->getParsedbody();
      $info = new Boardinfo();
      $info->title = $parsed['title'];
      $info->date = $parsed['date'];
      $info->descr = $parsed['descr'];

      $uploadedFile=$request->getUploadedFiles()['files'];
      $directory="assets/back/files";
      $uf=$uploadedFile;
      $filename = $uf->name;   
      $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
      $info->files=$directory . DIRECTORY_SEPARATOR . $filename;
      $info->save();
      return $response->withRedirect('/admin/boardinfo/list/');
});


$app->get('/edit/{id}/',function($request,$response,$args){
    echo $this->view->make('back.boardinfo.edit',['info'=>Boardinfo::find($args['id'])]);
});

$app->post('/edit/{id}/',function($request,$response,$args){
      $parsed = $request->getParsedbody();
      $info = Boardinfo::find($args['id']);
      $info->title = $parsed['title'];
      $info->date = $parsed['date'];
      $info->descr = $parsed['descr'];

      if(isset($request->getUploadedFiles()['files'])){
        $uploadedFile=$request->getUploadedFiles()['files'];
                $directory="assets/back/files";
                $uf=$uploadedFile;
                $filename = $uf->name; 
                if($filename!=""){  
                $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
                $info->files=$directory . DIRECTORY_SEPARATOR . $filename;
                }
        }
        $info->save();
        return $response->withRedirect('/admin/boardinfo/list/');
});

$app->get('/del/{id}/',function($request,$response,$args){
      $info = Boardinfo::find($args['id']);
      $info->delete();
      return $response->withRedirect('/admin/boardinfo/list/');
});
