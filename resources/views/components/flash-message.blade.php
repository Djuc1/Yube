
@if(session()->has('message'))

<div x-data="{show:true}" x-init = "setTimeout(() => show = false, 3000)" x-show = "show" class="text-center alert alert-success alert-block ">
	<p>
		{{session('message')}}
	</p>
	
</div>

@endif
