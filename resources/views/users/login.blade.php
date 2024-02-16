<x-layout>

    <main class="bg-light">
    <section id="contact" class="container row">
      <div class="col-md-6 py-5">
      <img
        src="./assets/imgs/details-1.jpg"
        alt=""
        class="rounded-5 shadow img-fluid" />
      </div>

      <div class="col-md-6 mt-5 pt-5">
        <div class="row">
            <div class="text-container">
              <h3>
                <span class="text-secondary"><i class="fa fa-shake">YUBE|</i></span><span class="text-danger">GIGS</span>
              </h3>
              <h5>Login to your account to post gigs</h5>

              <form action="/users/authenticate" method="POST" enctype="multipart/form-data" class="mb-5">
                @csrf
                <div class="mb-3 form-floating">
                  <input
                    type="email"
                    class="form-control"
                    id="floatingInput"
                    placeholder="name@example.com"
                    name="email"
                    value="{{old('email')}}"
                  />
                  @error('email')
                    <p class="text-danger mt-1">{{$message}}</p>
                  @enderror
                <label for="floatingInput">Email address</label>
                </div>
                <div class="mb-3 form-floating">
                  <input
                    type="Password"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Password"
                    name="password"
                    value="{{old('password')}}"
                  />
                  @error('password')
                    <p class="text-danger mt-1">{{$message}}</p>
                  @enderror
                <label for="floatingInput">Password</label>
                </div>
                <div class="d-grid gap-2 mb-3">
                  <input
                    type="submit"
                    value="SignIn"
                    class="btn btn-danger btn-block"
                  />
                </div>
                Don't have an account? <a href="/register" class="text-decoration-none text-danger">Register</a>
              </form>
            </div>
        </div>
      </div>
    </section>
  </main>

</x-layout>

