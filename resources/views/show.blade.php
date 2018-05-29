@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
  <h1>id = {{ $message->id }} のタスク詳細ページ</h1>

    <p>{{ $message->content }}</p>

    {!! link_to_route('messages.edit', 'このタスク編集', ['id' => $message->id]) !!}

    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
@endsection