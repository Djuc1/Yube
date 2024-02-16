<x-create-layout>

   <section class="container my-5">
          <div class=" container col-md-8 justify-content-center align-items-center px-5 py-5"> 
            	 <form method="POST" action="{{route('store')}}" enctype="multipart/form-data" class="border mb-5 bg-light px-5 py-5 justify-content-center align-items-center">
      	      	@csrf
                <h4 class="text-center">CREATE A GIG</h4>
                <p class="text-center">Post a gig to find a Developer</p>
                <div class="mb-3">
                  <label class="form-label">Company Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="company"
                    value="{{old('company')}}"
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
                    value="{{old('title')}}"
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
                    value="{{old('location')}}"
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
                    value="{{old('email')}}"
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
                    value="{{old('website')}}"
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
                    value="{{old('tags')}}"
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
                  @error('logo')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror

                </div>
                <div class="mb-3">
                  <label class="form-label">Job Description</label>
                  <textarea
                    type="text"
                    class="form-control p-2"
                    rows="10"
                    placeholder="Include tasks, requirements, salary, etc"
                    name="description"
                    value="{{old('description')}}">	
                   </textarea>
					         @error('description')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror

                </div>

                <div class="mb-3">
                 <span>
                  	<input type="submit" value="Create Gig" class="btn btn-danger"/>
                  	<a href="/" class="btn">Back</a>
              	 </span>
                </div>
            </form>
          </div>
        
    </section>

</x-create-layout>

