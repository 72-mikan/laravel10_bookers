<!-- base_file_loading -->
@extends('layouts.base')

<!-- title -->
@section('title', 'bookers一覧')

<!-- main -->
@section('main')
  <!-- book_list -->
  <h1>Book List</h1>
  <table>
    <tr>
      <th>title</th>
      <th>body</th>
      <th colspan="3"></th>
    </tr>
    @foreach($books as $book)
    <tr>
      <td>{{ $book->title }}</td>
      <td>{{ $book->body }}</td>
      <td><a href="">Show</a></td>
      <td><a href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a></td>
      <td>
        <form method="post" action="/books/{{ $book->id }}" name="deleteForm_{{ $book->id }}">
          @method('DELETE')
        </form>
        <a href="javascript:document.deleteForm_{{ $book->id }}.submit()">Destroy</a>
      </td>
    </tr>
    @endforeach
  </table>

  <!-- book_form -->
  <h1>Book Form</h1>
  <form method="post" action="{{ $save_url }}">
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