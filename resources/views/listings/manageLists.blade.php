<x-create-layout>

      <section class="container-fluid my-5 mb-5">
        <div class="container my-5 mb-5">
        <table class="table table-hover my-3">
          <thead>
          <tr>
            <th colspan="3" class="text-center"><h4 class="fw-semibold">MANAGE GIGS</h4></th>
          </tr>
          </thead>          
          <tbody>
          @unless($listings->isEmpty())
          @foreach($listings as $listing)
          <tr class="table-dark">
            <th scope="row">{{$listing->title}}</th>
            <td>
              <button class="m-1">
              <a href="/listings/{{$listing->id}}/edit" class="text-decoration-none">
                <i class="fa-solid fa-pencil"></i>Edit
              </a>
            </button>
            </td>
            <td>
              <form class="inline" action="/listings/{{$listing->id}}" method="POST">
                @csrf
                @method('POST')    
                <button type="submit" class="btn btn-danger m-1"><i class="fa-solid fa-trash">Delete</i></button>
              </form>
            </td>
          </tr>
          @endforeach
          @else
          <tr class="table-primary border-gray-300">
            <td><p class="text-center">No Listings Found</p></td>
          </tr>
          @endunless
          </tbody>
        </table>
      </div>
        
      </section>

</x-create-layout>
