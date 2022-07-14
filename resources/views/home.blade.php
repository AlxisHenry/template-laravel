@extends('layouts.app')

@section('title', 'Homepage title')

@section('body')

    <section class="layout homepage-layout">

        <div class="container">

            <div class="container-text">
                Welcome to our application,<br>
                <span>Build with <mark>Laravel</mark>.</span>
            </div>
            <div class="container-asset">
                <img src="{{ url('assets/svg/homepage_view.svg') }}" alt="">
            </div>

        </div>

    </section>

    <section class="layout homepage-layout">

        <div class="container">

            <div class="container-asset">
                <img src="{{ url('assets/svg/stats.svg') }}" alt="">
            </div>
            <div class="container-text">
                Improve your statistics,<br>
                <span>Its our <mark>Job</mark>.</span>
            </div>

        </div>

    </section>

@endsection

@section('scripts')

    @vite('resources/js/app.js')

@endsection
