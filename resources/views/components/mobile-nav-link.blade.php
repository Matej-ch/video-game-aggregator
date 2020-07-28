@props(['route'])

@php
    $classes = /*Request::is($route) ? 'px-6 hover:text-blue-400 text-blue-500' :*/ 'block py-2 rounded';
@endphp

<a {{ $attributes->merge(['class'=> $classes ]) }} href="{{--{{ route($route) }}--}}">
    {{$slot}}
</a>
