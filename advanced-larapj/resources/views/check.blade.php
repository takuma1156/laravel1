@extends('layouts.default')
<style>
p {
　　background-color: #289ADC;
　　color: white;
　　padding: 5px 10px;
　　width: 500px;
}
</style>
@section('title', 'check.blade.php')

@section('content')
<form action="/back" method="GET">
  @csrf
  <p>入力した値は「{{$data}}」でお間違いないでしょうか</p>
  <button type="submit" class="check-btn" value="true">入力画面に戻る</button>
</form>
@endsection