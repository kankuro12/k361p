@extends('back.app')
@section('title','Local Area listing')
@section('content')
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; ">
    <center><p style="padding:20px; font-size:18px; font-family:">Boardinfo Listing</h3></p>
</div>

<div class="container" >
               <div style=" padding:2rem 0 0 2rem;">
                        <a class="button primary" href="/admin/area/add/">Add</a>  
                </div>
    <div class="row" style=" padding:2rem;">
        <div class="cell-md-12" >    
            <table class="table table-border cell-border" data-role="table"  data-pagination-short-mode="true">
                <thead >
                <tr>
                    
                    <th class="sortable-column sort-asc">name</th>
                    <th class="sortable-column sort-asc">Date</th>
                   
                    <th class="sortable-column sort-asc">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($areas as $boardinfo)
                   <tr>
                        
                        <td>{{$boardinfo->name}}</td>
                        <td><img src="/{{$boardinfo->image}}" alt="" style="height:200px; width:200px;"></td>
                        
                        <td><a class="button link" href="/admin/area/edit/{{$boardinfo->id}}/">Edit</a> || 
                        <a class="button link" href="/admin/area/del/{{$boardinfo->id}}/">Delete</a> </td>
                   </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection