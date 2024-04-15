@extends('layouts.app')
@section('title')
    {{$message->subject}}
@endsection
@section('content')
    <h4 class="col">{{$message->subject}}</h4>
    <div class="alert alert-info">
        <p>{{ $message->message }}</p>
        <p>{{ $message->email }} - {{ $message->name }}</p>
        <p class="mb-0">Создано <small>{{ $message->created_at }}</small></p>
        <p>Редактировано <small>{{ $message->updated_at }}</small></p>
        <a href="{{ route('data-one-delete', $message->id) }}">
            <button class="btn btn-danger">Удалить</button>
        </a>
    </div>
@endsection
