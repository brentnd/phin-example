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
<section class="hero is-info">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4">
                    <p class="title">{{ config('site.name') }} Tag</p>
                    <p class="subtitle">Check this big thing out!</p>
                </div>
            </div>
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
<section class="hero is-danger">
    <div class="hero-body">
        <div class="container">
            <div class="level">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Tweets</p>
                        <p class="title">3,456</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Following</p>
                        <p class="title">123</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Followers</p>
                        <p class="title">456K</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Likes</p>
                        <p class="title">789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection