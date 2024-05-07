@section('title')
    
@endsection

@section('content')
    <div class="container">
        {{-- products --}}
        <h2 class="text-secondary  mt-3">all products</h2>
        <div class="d-flex justify-content-end mb-2">
            <!-- Button to trigger modal -->
            <a type="button" href="{{route('product.create')}}" class="btn btn-primary">
                add product
            </a>
        </div>
        <table class="table align-middle text-center mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Product added</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                        src="{{asset('storage/'.$product->image)}}"
                        alt=""
                        style="width: 45px; height: 45px"
                        class="rounded-circle"
                        />
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{$product->name}}</p>
                </td>
                <td>
                  {{-- <span class="badge badge-success rounded-pill d-inline">Active</span> --}}
                  <p>{{$product->category->name}}</p>
                </td>
                <td>
                  {{Str::limit($product->description, 25)}}
                </td>
                <td>
                  {{$product->created_at}}
                </td>
                <td>
                  <span class="text-secondary">{{$product->price}} $</span>
                </td>
                <td>
                  <span class="text-secondary">{{$product->quantity}} pieces</span>
                </td>
                <td>
                  <a href="{{route('product.edit', $product->id)}}" class="btn btn-info btn-sm btn-rounded">
                    Edit
                  </a>
                  <button type="button" class="btn btn-danger btn-sm btn-rounded">
                    delete
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        {{-- pagination --}}
        <div class="d-flex justify-content-center my-2">
          <div class="pagination justify-content-center">
              {{$products->links()}}
          </div>
        </div>
    </div>
@endsection

@include('adminlte::page')