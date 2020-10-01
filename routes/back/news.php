<?php 
use Models\News;

$app->get('/list/',function($request,$response,$args){
    echo $this->view->make('back.news.list',['news'=>News::orderBy('id','desc')->get()]);
});

$app->get('/add/',function($request,$response,$args){
    echo $this->view->make('back.news.add',['galaries'=>\Models\Galary::all()]);
});

$app->post('/add/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $news = new News();
    $news->title = $parsed['title'];
    $news->publisher = $parsed['publisher'];
    $news->published = $parsed['published'];
    $news->descr = $parsed['descr'];
    $news->galary_id = $parsed['galary_id'];
    $uploadedFile=$request->getUploadedFiles()['image'];
    $directory="assets/back/img/news";
    $uf=$uploadedFile;
    $filename = $uf->name;   
    $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
    $news->image=$directory . DIRECTORY_SEPARATOR . $filename;
    $news->save();
    return $response->withRedirect('/admin/news/list/');

});

$app->get('/edit/{id}/',function($request,$response,$args){
    echo $this->view->make('back.news.edit',['news'=>News::where('id',$args)->first(),'galaries'=>\Models\Galary::all()]);
});

$app->post('/edit/{id}/',function($request,$response,$args){
    $parsed = $request->getParsedBody();
    $news = News::where('id',$args)->first();
    $news->title = $parsed['title'];
    $news->publisher = $parsed['publisher'];
    $news->published = $parsed['published'];
    $news->descr = $parsed['descr'];
    $news->galary_id = $parsed['galary_id'];
    if(isset($request->getUploadedFiles()['image'])){
        $uploadedFile=$request->getUploadedFiles()['image'];
                $directory="assets/back/img/event";
                $uf=$uploadedFile;
                $filename = $uf->name; 
                if($filename!=""){  
                $uf->moveTo($directory . DIRECTORY_SEPARATOR . $filename);       
                $news->image=$directory . DIRECTORY_SEPARATOR . $filename;
                }
        }
    $news->save();
    return $response->withRedirect('/admin/news/list/');
});

$app->get('/del/{id}/',function($request,$response,$args){
      $news=News::where('id',$args)->first();
      $news->delete();
      return $response->withRedirect('/admin/news/list/');

});