@extends('layouts.app')
@section('title')Сообщения@endsection
@section('content')
    @include('includes.messages')
    <h2 class="mb-3">Все сообщения</h2>
    <message-list></message-list>
@endsection
