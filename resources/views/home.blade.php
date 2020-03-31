@php


@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインしています！<br>
                    あなたの作成した会話の管理ができます。<br>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-8 mt-4" style="text-align:center;">
        <a class="btn btn-primary" href="/home/create" role="button" style="width:70%;">会話を作成</a>
      </div>
    </div>
    <div class="your_posts mt-4">
      作成した会話
      @foreach($posts as $post)
        <div class="your_posts_content row my-2">
          <div class="post_title col-8 align-middle" style="font-weight:bold;">
            {{$post->title}}
          </div>
          <div class="col-2 ">
            <a class="btn btn-success float-right" href="/home/edit/{{$post->id}}" role="button">
              編集
            </a>
          </div>
          <div class="col-2">
            <a class="btn btn-danger float-right" href="/home/delete/{{$post->id}}" role="button">
              削除
            </a>
          </div>
        </div>
      @endforeach
      <!-- @foreach($posts as $post)
        {{$post->title}}<br> -->
        <!-- {{$post->image_path}}<br> -->
      <!-- @endforeach -->
    </div>
</div>
@endsection
