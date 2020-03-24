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
        <a class="btn btn-success" href="/home/create" role="button">会話を作成</a>
      </div>
    </div>
    <div class="your_posts mt-4">
    ↓あなたが投稿した会話です<br>
      @foreach($posts as $post)
        {{$post->title}}<br>
        <!-- {{$post->image_path}}<br> -->
      @endforeach
    </div>
</div>
@endsection
