<!-- base_file_loading -->
@extends('layouts.base')

<!-- title -->
@section('title', 'user詳細')

<!-- main -->
@section('main')
<h1>User Show</h1>
  <!-- book_list -->
  <h1>User Book List</h1>

  @include('books.components.list', [
    'books' => $user->books
  ])

@endsection