@extends('layouts.layout')

@section('body')
    <h1>{{ $page->title }}</h1>
    @foreach( $page->content as $content)
       @if($content->type === 'text')
           {!! $content->text  !!}
       @endif
    @endforeach
    {{ $page->updated_at->format('l jS \\of F Y h:i:s A') }}

@endsection


