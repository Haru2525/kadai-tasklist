@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                 <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}</li>
            @endforeach
        </ul>
    @endif

 {!! link_to_route('tasks.create', '新規タスクの投稿') !!}

@endsection