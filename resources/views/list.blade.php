@extends('template')


@section('content')
<div class="container content-inside">
  <p class="description mt-3">登録されている会話一覧</p>
  <div class="your_posts mt-4">
    @foreach($posts as $post)
      <div class="your_posts_content row my-2">
        <div class="post_title col-8 align-middle" style="font-weight:bold;">
        {{$post->id}}：{{$post->title}}
        </div>
        <div class="col-1 ">
        </div>
    <!--作者名は非表示にしています 
        <div class="col-2 ">
          author：{{$post->user->name}}
        </div> -->
      </div>
    @endforeach
  </div>

  </div>


</div>


@endsection