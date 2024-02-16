@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

@foreach ($tags as $tag)
    <span class="badge rounded-pill bg-dark">
        <a href="/?tag={{$tag}}" class="text-decoration-none text-white">{{$tag}}</a>
    </span>
@endforeach    