@section('title')
    
@endsection

@section('content')
<div class="container">
    {{-- categories --}}
    <h2 class="text-secondary mt-3">all categories</h2>
    <div class="d-flex justify-content-end mb-2">
        <!-- Button to trigger modal -->
        <a href="{{route('category.create')}}" class="btn btn-primary" >
            add category
        </a>
    </div>
    <table class="table text-center align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>image</th>
            <th>name</th>
            <th>products</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
              {{-- @foreach ($category->products as $product) --}}
              <tr>
                <td class="d-flex justify-content-center">
                  <div class="d-flex align-items-center">
                    <img
                        src="{{asset('storage/'.$category->image)}}"
                        alt=""
                        style="width: 45px; height: 45px"
                        class="rounded-circle"
                        />
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{$category->name}}</p>
                </td>
                <td>
                  <span class="text-secondary">{{$category->products->count()}} products</span>
                </td>
                <td class="d-flex justify-content-center">
                  <a href="{{route('category.edit', $category->id)}}" class="btn  btn-info btn-sm btn-rounded">
                    Edit
                  </a>
                  <button type="button" class="btn btn-danger btn-sm btn-rounded mx-2">
                    delete
                  </button>
                </td>
              </tr>
              {{-- @endforeach --}}
          @endforeach
        </tbody>
    </table>
    {{-- pagination --}}
    <div class="d-flex justify-content-center my-2">
      <div class="pagination justify-content-center">
          {{$categories->links()}}
      </div>
    </div>
</div>    
@endsection

@include('adminlte::page')