@extends('layout.app')

@section('title', $page->title)

@section('content')
    <section class="about about--style1 ">
        <div class="container">
            {!! $page->content !!}
        </div>
    </section>
@endsection
