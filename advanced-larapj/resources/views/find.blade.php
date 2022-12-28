@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'find.blade.php')

@section('content')
<form action="find" method="POST">
@csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="見つける">
</form>
@if (@isset($author))
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>
  <tr>
    <td>{{$author->id}}</td>
    <td>{{$author->name}}</td>
    <td>{{$author->age}}</td>
    <td>{{$author->nationality}}</td>
  </tr>
</table>
@endif
@endsection