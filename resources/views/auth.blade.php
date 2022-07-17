@extends('layouts.app')

@section('title', ucfirst($auth_type))

@section('body')

    <section class="layout auth-section {{$auth_type}}-section">
        <div class="container auth-container">
            <h1 class="auth-title mt-3">
                @if($auth_type === 'sign-in')
                    We've missed <span>you</span>.
                @elseif($auth_type === 'sign-up')
                    Begin a <span>unique experience</span> with us.
                @endif
            </h1>
            @include('components.auth-form')
        </div>
    </section>

@endsection

@section('scripts')

@endsection
