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

td table {
  margin: 0 auto;
}

td {
  padding: 25px 40px;
  background-color: #EEEEEE;
  text-align: center;
}

td table tbody tr td {
  background-color: #EEEEEE !important;
}
</style>
@section('title', 'author.index.blade.php')

@section('content')
<table>
  <tr>
    <th>Author</th>
    <th>Book</th>
  </tr>
  @foreach ($hasbooks as $book)
  <tr>
    <td>
      {{$book->getDetail()}}
    </td>
    <td>
      <table>
        @foreach ($book->books as $book)
        <tr>
          <td>{{ $book->getTitle() }}</td>
        </tr>
        @endforeach
      </table>
    </td>
  </tr>
  @endforeach
</table>
<table>
  <tr>
    <th>Author</th>
  </tr>
  @foreach ($nobooks as $book)
  <tr>
    <td>{{ $book->getDetail() }}</td>
  </tr>
  @endforeach
</table>
@endsection