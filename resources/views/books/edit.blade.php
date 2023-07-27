<!-- base_file_loading -->
@extends('layouts.base')

<!-- title -->
@section('title', 'bookers編集')

<!-- main -->
@section('main')
  <!-- book_edit_form -->
  <h1>Edit Book</h1>
  <form method="post" action="{{ route('books.update', ['book' => $book->id]) }}">
    @csrf
    @method('PATCH')
    <table>
      <tr>
        <td><label>title</label></td>
        <td><input type="text" name="title" value="{{  old('title', $book->title) }}" /></td>
      </tr>
      <tr>
        <td><label>body</label></td>
        <td><input type="text" name="body" value="{{  old('body', $book->body) }}" /></td>
      </tr>
      <tr>
        <td><input type="submit" value="編集" /></td>
        <td></td>
      </tr>
    </table>
  </form>
@endsection