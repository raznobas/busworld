@extends('layouts.app')
@section('title')Написать сообщение@endsection
@section('content')
    <h2 class="mb-3">Написать сообщение</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <forms-inputs></forms-inputs>
        <button type="submit" class="btn btn-success mt-3">Отправить</button>
    </form>
@endsection

