@extends('layouts.default')
<style>
th {
  background-color: #289ADC;
  color: white;
  padding: 5px 40px;
}

tr:nth-child(odd) td {
  background-color: #FFFFFF;
}

td {
  padding: 25px 40px;
  background-color: #EEEEEE;
  text-align: center;
}

</style>

@section('title', 'book.index.blade.php')

@section('content')
<table>
  <tr>
    <th>Books</th>
  </tr>
  @foreach($books as $book)
  <tr>
    <td>
      {{$book->getTitle()}}
    </td>
  </tr>
  @endforeach
</table>
@endsection


