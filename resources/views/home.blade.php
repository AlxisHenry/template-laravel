@extends('layouts.app')

@section('title', 'Homepage title')

@section('body')

    <section class="layout">

        <div class="container">

            <div class="container-text">
                Welcome to our application,<br>
                Build with Laravel.
            </div>
            <div class="container-asset">
                <img src="{{ url('assets/svg/homepage_view.svg') }}" alt="">
            </div>

        </div>

    </section>

@endsection

@section('scripts')

    @vite('resources/js/app.js')

@endsection