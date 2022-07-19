{{-- This file is the view of component : app\View\Components\BtnPrimary.php  --}}

<div class="btn btn-primary btn-{{ $className }}">
    <a class="btn-link {{ $background ? '' : 'no-bg' }}" href="{{$url}}">
        {{ $content }}
        {!! $fontawesome !!}
    </a>
</div>
