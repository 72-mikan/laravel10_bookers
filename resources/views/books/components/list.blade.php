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
    <td><a href="{{ route('books.show', ['book' => $book->id]) }}">Show</a></td>
    <td><a href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a></td>
    <td>
      <form method="post" action="{{ route('books.destroy', ['book' => $book->id]) }}" name="deleteForm_{{ $book->id }}">
        @csrf
        @method('DELETE')
      </form>
      <a href="javascript:document.deleteForm_{{ $book->id }}.submit()">Destroy</a>
    </td>
  </tr>
  @endforeach
</table>