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

  <!-- book_form -->
  <h1>Book Form</h1>
  <!-- post error -->
  @if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form method="post" action="{{ route('books.store') }}">
    @csrf
    <table>
      <tr>
        <td><label>title</label></td>
        <td><input type="text" name="title" value="{{ old('title') }}" /></td>
      </tr>
      <tr>
        <td>body</td>
        <td><input type="text" name="body" value="{{ old('body') }}" /></td>
      </tr>
      <tr>
        <td><input type="submit" value="送信" /></td>
        <td></td>
      </tr>
    </table>
  </form>
@endsection