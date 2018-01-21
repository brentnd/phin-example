@extends('layout')

@section('title', 'Home page')

@section('body')
<section class="hero has-bg-header is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">
                A {{ config('site.name') }} site.
            </h1>
            <h2 class="subtitle">
                Something great
            </h2>
            <a href="#services" class="page-scroll button is-primary">Learn More</a>
        </div>
    </div>
</section>
<section id="services" class="section">
    <div class="container has-text-centered">
        <h1 class="title">Services</h1>
        <h2 class="subtitle">
            A list of our stuff
        </h2>
    </div>
    <div class="container">
        <div class="columns is-multiline">
            @foreach($services as $service)
            <div class="column is-one-third has-text-centered">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-{!! $service['icon'] !!} fa-stack-1x fa-inverse"></i>
                </span>
                <h4>{!! $service['title'] !!}</h4>
                <p class="text-muted">{!! $service['content'] !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection