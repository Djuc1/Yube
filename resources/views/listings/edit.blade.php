<x-create-layout>

   <section class="container my-5">
    <div class="row">     
        <div class="col-md-6 py-5 d-flex justify-content-center align-items-center">
          <img src="{{asset('/assets/imgs/header.png')}}"alt=""class="image-container img-fluid rounded my-auto" />
        </div>
             <div class="col-md-6">
            	 <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data" class="border mb-5 bg-light px-5 py-5 justify-content-center align-items-center">
      	      	@csrf
                @method('PUT')
                <h4 class="text-center">Edit Gig</h4>
                <p class="text-center">Edit: {{$listing->title}}</p>
                <div class="mb-3">
                  <label class="form-label">Company Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="company"
                    value="{{$listing->company}}"
                  />
                  @error('company')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Job Title</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Example: Senior Larvel Developer"
                    name="title"
                    value="{{$listing->title}}"
                  />
                  @error('title')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror

                </div>
                <div class="mb-3">
                  <label class="form-label">Job Location</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Example: Remote, Miami Fl, etc"
                    name="location"
                    value="{{$listing->location}}"
                  />
                  @error('location')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror

                </div> 
                <div class="mb-3">
                   <label class="form-label">Contact Email</label>
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    value="{{$listing->email}}"
                    />
                  @error('email')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror

                </div>
                <div class="mb-3">
                  <label class="form-label">Website/Application URL</label>
                  <input
                    type="url"
                    class="form-control"
                    name="website"
                    value="{{$listing->website}}"
                  />
                  @error('website')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror

                </div>
                <div class="mb-3">
                  <label class="form-label">Tags (Comma Separated)</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Example: Laravel, Postgres, Api, etc"
                    name="tags"
                    value="{{$listing->tags}}"
                  />
                  @error('tags')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror

                </div>
                <div class="mb-3">
                  <label class="form-label">Company Logo</label>
                  <input
                    type="file"
                    class="form-control"
                    name="logo"
                  />
                  <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/imgs/user icon.png')}}" alt="no-image logo" class="img-fluid my-3 float-center" style="width: 10%;">

                  @error('logo')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror

                </div>
                <div class="mb-3">
                  <label class="form-label">Job Description</label>
                  <textarea
                    type="text"
                    class="form-control p-2"
                    placeholder="Include tasks, requirements, salary, etc"
                    rows="10"
                    name="description"
                    value="{{$listing->description}}">	
                   </textarea>
					         @error('description')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror

                </div>

                <div class="mb-3">
                 <span>
                  	<input type="submit" value="Update Gig" class="btn btn-danger"/>
                  	<a href="/" class="btn">Back</a>
              	 </span>
                </div>
            </form>
          </div>
        </div>
        
    </section>

</x-create-layout>

