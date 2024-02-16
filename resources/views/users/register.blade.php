<x-layout>

  <main class="bg-light">
    <section id="contact" class="container row">
      <div class="col-md-6 py-5 d-flex justify-content-center align-items-center">
      <img
        src="{{asset('./assets/imgs/contact.png')}}"
        alt=""
        class="image-container img-fluid thumbnail" />
      </div>

      <div class="col-md-6 mt-5 pt-5 d-flex flex-column">
        <div class="row">
            <div class="text-container">
              <h3>
                <span class="text-secondary"><i class="fa fa-shake">YUBE|</i></span><span class="text-danger">GIGS</span>
              </h3><hr>
              <h5>Create an account to post gigs</h5>

              <form action="/users" method="POST" enctype="multipart/form-data" class="mb-5">
              	@csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    value="{{old('name')}}"
                  />
                   @error('name')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
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
                  <label class="form-label">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                    value="{{old('password')}}"
                  />
                   @error('password')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                   <label class="form-label">Confirm Password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="password_confirmation"
                    value="{{old('password_confirmation')}}"
                    />
                   @error('password_confirmation')
                  	<p class="text-danger mt-1">{{$message}}</p>
                  @enderror
                </div>
                <div class="d-grid gap-2 mb-3">
                  <input
                    type="submit"
                    value="SignUp"
                    class="btn btn-danger btn-block"
                  />
                </div>
                Already have an account? <a href="/login" class="text-decoration-none text-danger">Login</a>
                <hr>
                <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
              </form>
            </div>
        </div>
      </div>
    </section>
  </main>


</x-layout>