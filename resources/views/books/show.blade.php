<!-- base_file_loading -->
@extends('layouts.base')

<!-- title -->
@section('title', 'bookers投稿詳細')

<!-- main -->
@section('main')
  <!-- post flash -->
  @if(session('alert'))
  <div>{{ session('alert') }}</div>
  @endif
  
  <!-- book_form -->
  @include('books.components.form', [
    'route' => route('books.store'),
    'method' => 'POST',
    'title' => '',
    'body' => '',
    'type' => '投稿'
  ])

  <!-- book_show -->
  <h1>Book Show</h1>
  <table>
    <thead>
      <tr>
        <th>title</th>
        <th>body</th>
        <th colspan="3"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->body }}</td>
        <td><a href="{{ route('books.index') }}">Back</a></td>
        <td><a href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a></td>
        <td>
          <form method="post" action="{{ route('books.destroy', ['book' => $book->id]) }}" name="deleteForm">
            @csrf
            @method('DELETE')
          </form>
          <a href="javascript:document.deleteForm.submit()">Delete</a>
        </td>
      </tr>
    </tbody>
  </table>
@endsection
