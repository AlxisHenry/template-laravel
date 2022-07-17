@extends('layouts.app')

@section('title', $title)

@section('body')

    <section class="layout homepage-layout first-layout">

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

    <section class="layout homepage-layout secondary-layout">

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


@endsection
