<x-layout>

@include ('partials._search')
    
    <div class="my-3">
        <span><strong><-</strong><a href="/" class="text-decoration-none text-dark">Back</a></span>
    </div>
    <section id="contact" class="container-fluid bg-light mb-5">
        <div class="d-flex justify-content-center align-items-center">
        <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/imgs/user icon.png')}}" alt="no-image logo" class="img-fluid my-3 float-center" style="width: 10%;">
        </div>
        <div class="container">
            <h5 class="fw-normal text-center">{{$listing->title}}</h5>
            <h6 class="text-center">{{$listing->company}}</h6>
            <div class="text-center mb-3">
                <x-listing-tags :tagsCsv="$listing->tags"/>
            </div>
             <h6 class="text-center">{{$listing->location}}</h6>
          <hr>
            <div class="row">
                <h3 class="text-center">Job Description</h3>
                {{$listing->description}}
                <a href="mailto:{{$listing->email}}" class="btn btn-danger w-100 mt-1 mb-3"><i class="fa fa-envelope"></i>Contact Employer</a>
                <a href="{{$listing->website}}" class="btn btn-dark w-100 mb-3" target="blank"><i class="fa fa-google-plus"></i>Visit Website</a>
            </div>
        </div>
    <!-- <div class="mt-4 p-2 ms-5">
        <div class="row">
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a> 

            <form class="inline" action="/listings/{{$listing->id}}" method="POST">
                @csrf
                
                <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash">Delete</i></button>
            </form>
        </div> 
      </div> -->
 
    </section>

</x-layout>