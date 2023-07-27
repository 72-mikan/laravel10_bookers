<form method="post" action="{{ $route }}">
  @csrf
  @method($method)
  <table>
    <tr>
      <td><label>title</label></td>
      <td><input type="text" name="title" value="{{ old('title', $title) }}" /></td>
    </tr>
    <tr>
      <td>body</td>
      <td><input type="text" name="body" value="{{ old('body', $body) }}" /></td>
    </tr>
    <tr>
      <td><input type="submit" value="{{ $type }}" /></td>
      <td></td>
    </tr>
  </table>
</form>