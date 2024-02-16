@props(['listing'])

<x-card>
 
        <div class="row-cols-sm-12 themed-grid-col ">
          <div class="card">
            <div class="row g-0 themed-grid-col">
              <div class="d-flex justify-content-center align-items-center col-md-4">
                <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/imgs/user icon.png')}}" alt="no-image logo" class="m-3 img-fluid rounded-5" width="20%">

              </div>
              <div class="d-flex justify-content-center align-items-center col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><a href="/listings/{{$listing->id}}" class="text-decoration-none text-dark">{{$listing->title}}</a></h5>
                  <h6>{{$listing->company}}</h6>
                  <x-listing-tags :tagsCsv="$listing->tags"/>
                  <h6 class="mt-1">{{$listing->location}}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    



  </x-card>
