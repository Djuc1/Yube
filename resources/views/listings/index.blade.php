<x-layout>

@include ('partials._hero')
@include ('partials._search')

<section class="container bg-light">

@if(count($listings) == 0)
<p>No listings found</p>
@endif


@foreach($listings as $listing)

<x-listing-card :listing="$listing" />        


@endforeach



</section>

<div class="ms-2 mt-4 p-4">
	{{$listings->links()}}
</div>

</x-layout>