<?php
use App\QuestionTable;

use Illuminate\Http\Request;
$tests=QuestionTable::find(1);
// echo $tests->title;
?>
@extends('template')


@section('content')
<div class="container content-inside">
  <div class="row">
    <div class="greet_start mt-3">
      <h2>mezase!</h2>
      <h2>goodkomyunike-syonn</h2>
      <a class="start_btn btn mt-2" href="/talk" role="button">会話を始める</a>
    </div>
  </div>
  <p class="description mt-3">gosetumei</p>
  <div class="row">
    <div class="description_content col-md-6">
      一問一答形式の会話を成立させコミュニケーション能力の向上を図ります。
      選択肢は3つ、グッドコミュニケーションなものを選んでください。
    </div>
    <div class="description_content col-md-6" style="text-align: center;">
      <img src="/images/top.jpg" alt="" style="margin: 0 auto" width="80%">
    </div>
  </div>

  <div class="row mt-5">
    <div class="description_content col-md-6">
      ログインしていただくと会話を作成することができます。作成した会話はマイページにて管理していただけます。
    </div>
    <div class="description_content col-md-6" style="text-align: center;">
      <img src="/images/top2.jpg" alt="" style="margin: 0 auto" width="80%">
    </div>
  </div>

  <p class="description mt-3">osirase</p>
  <div class="description_content">
    
  </div>
    
  </div>


</div>


@endsection