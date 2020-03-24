@extends('layouts.app')

@section('content')
@if ($errors->any())
  <div class="errors">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<form method="post" action="/home/store" enctype="multipart/form-data" class="form">
  @csrf
  @method('POST')
  <div class="form-heading">
    <h4>会話の作成</h4>
    <p>一問一答形式の会話(3択)を作成しましょう。</p>
  </div>
  <div class="form-group">
    <label>会話の相手を入力<span class="attention">必須</span></label>
    <input type="text" class="form-control"
    name="title" value="{{ old('title') }}" placeholder="例）お決まりのことを聞く女性">
  </div>
    <!-- image -->
  <div class="form-group form-image-area">
    <label>画像をどうぞ（必須ではありません）</label>
    <div class="form-image js-area-drop">
      <i class="far fa-image fa-5x"></i>
      <input type="file" class="form-control-file dropify" name="image" value="{{ old('image') }}">
    </div>
  </div>

  <div class="form-group">
    <label>一言目を入力<span class="attention">必須</span></label>
    <input type="text" class="form-control{{ $errors->has('correct') ? ' is-invalid' : '' }}" 
    name="question" value="{{ old('question') }}" placeholder="例）仕事と私どっちが大事なの！？">

  </div>
  <div class="form-group">
    <label>返答の選択肢を入力<span class="attention">必須</span></label>
    <span>注意</span>

    <!-- グッドコミュニケーション -->
    <p>グッドコミュニケーション</p>
    <input type="text" class="form-control mt-2" 
    name="answer_good" value="{{ old('answer_good') }}" placeholder="例）君より大事なものはないよ">
    ノーマルコミュニケーション<br>
    <!-- ノーマルコミュニケーション -->
    <input type="text" class="form-control mt-2" 
    name="answer_normal" value="{{ old('answer_normal') }}" placeholder="例）どっちも大事だよ">
    バッドコミュニケーション<br>
    <!-- バッドコミュニケーション -->
    <input type="text" class="form-control mt-2" 
    name="answer_bad" value="{{ old('answer_bad') }}" placeholder="例）うるせぇなぁ！！">

  </div>
  <!-- reanswer -->
  <div class="form-group">
    <label>会話相手の返答を入力<span class="attention">必須</span></label>
    <!-- グッドコミュニケーション -->
    <p>グッドコミュニケーションに対して</p>
    <input type="text" class="form-control" 
    name="re_answer_good" value="{{ old('re_answer_good') }}" placeholder="例）…もう。">
    ノーマルコミュニケーションに対して<br>
    <!-- ノーマルコミュニケーション -->
    <input type="text" class="form-control mt-2" 
    name="re_answer_normal" value="{{ old('re_answer_normal') }}" placeholder="例）なにそれ…もういい！">
    バッドコミュニケーションに対して<br>
    <!-- バッドコミュニケーション -->
    <input type="text" class="form-control mt-2" 
    name="re_answer_bad" value="{{ old('re_answer_bad') }}" placeholder="例）大きな声出さないでよ！！">
  </div>

  <!-- explain -->
  <div class="form-group">
    <label>アドバイスを入力<span class="attention">必須</span></label>
    <!-- グッドコミュニケーション -->
    <p>グッドコミュニケーションに対して</p>
    <input type="text" class="form-control" 
    name="advice_good" value="{{ old('advice_good') }}" placeholder="例）大袈裟に言うくらいが良いでしょうね。">
    ノーマルコミュニケーションに対して<br>
    <!-- ノーマルコミュニケーション -->
    <input type="text" class="form-control mt-2" 
    name="advice_normal" value="{{ old('advice_normal') }}" placeholder="例）そんな答えが欲しいわけではないと思いますよ。">
    バッドコミュニケーションに対して<br>
    <!-- バッドコミュニケーション -->
    <input type="text" class="form-control mt-2" 
    name="advice_bad" value="{{ old('advice_bad') }}" placeholder="例）落ち着いてください。">
  </div>
  <div class="text-center mt-3">
    <button type="submit" class="btn btn-success btn-large" style="width:200px;">投稿</button>
  </div>
  
</form>

<script>
    // プラグイン読み込み
    $(document).ready(function(){
        $('.dropify').dropify();
    });
</script>
@endsection