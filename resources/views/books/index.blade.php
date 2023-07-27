<!-- base_file_loading -->
@extends('layouts.base')

<!-- title -->
@section('title', 'bookers一覧')

<!-- main -->
@section('main')
<h1>Book Form</h1>
  <!-- post error -->
  @include('books.components.error', [
    'errors' => $errors
  ])

  <!-- book_form -->
  @include('books.components.form', [
    'route' => route('books.store'),
    'method' => 'POST',
    'title' => '',
    'body' => '',
    'type' => '投稿'
  ])

  <!-- book_list -->
  <h1>Book List</h1>

  @include('books.components.list', [
    'books' => $books
  ])

@endsection