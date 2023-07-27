<!-- base_file_loading -->
@extends('layouts.base')

<!-- title -->
@section('title', 'users一覧')

<!-- main -->
@section('main')
<h1>User List</h1>

  <!-- user_list -->
  <table>
    <tr>
      <th>name</th>
      <th colspan="1"></th>
    </tr>
    @foreach($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td><a href="{{ route('users.show', ['user' => $user->id]) }}">Show</a></td>
    </tr>
    @endforeach
  </table>

@endsection