@props(['route'])

@php
$classes = Request::routeIs($route) ? 'px-6 hover:text-blue-400 text-blue-500' : 'px-6 hover:text-blue-400';
@endphp

<a {{ $attributes->merge(['class'=> $classes ]) }} href="{{ route($route) }}">
{{$slot}}
</a>
