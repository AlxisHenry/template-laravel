@extends('layouts.app')

@section('og:title', 'og:title')

@section('og:description', 'og:description')

@section('title', 'Homepage title')

@section('body')

    <h1> Hello, World !</h1>

@endsection

@section('scripts')

    @vite('resources/js/app.js')

@endsection
