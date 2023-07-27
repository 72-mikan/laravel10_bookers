<!-- base_file_loading -->
@extends('layouts.base')

<!-- title -->
@section('title', 'bookers top page')

@section('main')
  <h1>bookers  top</h1>
  <p><a href="{{ route('books.index') }}">こちら</a>から</p>
@endsection