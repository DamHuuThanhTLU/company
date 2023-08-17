@extends('layouts.base')

@section('title','home page')

@section('main')
<div class="row mt-4">
    @foreach($aricles as $article)
   <div class="col-md-3 mb-2">
        <div class="card" style="width: 18rem;">
             <img src="{{$article->hinhanh}}" class="card-img-top" alt="...">
             <div class="card-body">
                 <h5 class="card-title">{{$article->ten_bviet}}</h5>
                 <p class="card-text">
                    <a href="{{route('$article.show', $article->ma_bviet)}}" class="text-decoration-none">
                    {{$article->tomtat}}
                    </a>
                 </p>
            </div>
        </div>
   </div>
   @endforeach

</div>
@endsection