@extends('adminlte::page')

@section('title', 'SuperBit')

@section('content_header')

	<a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.posts.create') }}">Nuevo post</a>

    <h1>Listado de posts</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop