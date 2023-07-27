<!-- base_file_loading -->
@extends('layouts.base')

<!-- title -->
@section('title', 'bookers編集')

<!-- main -->
@section('main')
  <h1>Edit Book</h1>
  
  <!-- post error -->
  @include('books.components.error', [
    'errors' => $errors
  ])

  <!-- book_edit_form -->
  @include('books.components.form', [
    'route' => route('books.update', ['book' => $book->id]),
    'method' => 'PATCH',
    'title' => $book->title,
    'body' => $book->body,
    'type' => '編集'
  ])
@endsection