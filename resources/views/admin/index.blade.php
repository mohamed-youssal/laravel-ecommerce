

@section('tile')
    
@endsection

@section('content_header')
    
@endsection

@section('content')
    <div class="container">
        <!-- Small Box (Stat card) -->
        <h5 class="mb-2 mt-4">Numbers</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$products_head->count()}}</h3>
                <p>Products</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="{{route('product.create')}}" class="small-box-footer">
                add product <i class="fas fa-plus"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{$categories_head->count()}}</h3>
                <p>Categories</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="{{route('category.create')}}" class="small-box-footer">
                add category <i class="fas fa-plus"></i>              
                </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$users_head->count()}}</h3>
                <p>Users</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                add user <i class="fas fa-plus"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$commands_head->count()}}</h3>
                <p>Orders</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="" class="small-box-footer">
                more infos<i class="fas fa-arrow-circle-right"></i>
             </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        {{-- users --}}
        <h2 class="text-secondary  mt-3">all the users</h2>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>image</th>
                <th>name</th>
                <th>email</th>
                <th>Member since</th>
                <th>user orders</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($users as $user)
                 {{-- @foreach ($user->commands() as $command) --}}
                 <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img
                          src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                          alt=""
                          style="width: 45px; height: 45px"
                          class="rounded-circle"
                          />
                    </div>
                  </td>
                  <td>
                    <p class="fw-normal mb-1">{{$user->name}}</p>
                  </td>
                  <td>
                    <p>{{$user->email}}</p>
                  </td>
                  <td>
                    {{$user->created_at}}
                  </td>
                  <td>
                    {{-- @foreach ($user->commands() as $command)
                      <span class="badge badge-success rounded-pill d-inline">Active</span>
                    @endforeach --}}
                    <span>{{$user->commands->count()}} order</span>

                  </td>
                </tr>
                 {{-- @endforeach --}}
             @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center my-2">
          
        </div>
        {{-- show more --}}
        <div class="d-flex justify-content-center my-2">
          <a class="btn btn-info rounded" href="{{route('admin.users')}}">show more...</a>
        </div>

        {{-- products --}}
        <h2 class="text-secondary  mt-3">all products</h2>
        <div class="d-flex justify-content-end mb-2">
            <!-- Button to trigger modal -->
            <a type="button" href="{{route('product.create')}}" class="btn btn-primary">
                add product
            </a>
        </div>
        <div class="row">
          <table class="table  table-responsive col-sm-12 align-middle text-center mb-0 bg-white">
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
                  {{Str::limit($product->description, 30)}}
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
                <td class="d-flex justify-content-center">
                  <a href="{{route('product.edit', $product->id)}}" class="btn btn-info btn-sm mx-1 btn-rounded">
                    Edit
                  </a>
                  <form action="{{route('product.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm btn-rounded">
                      delete
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        </div>
        {{-- show more --}}
        <div class="d-flex justify-content-center my-2">
          <a class="btn btn-info rounded" href="{{route('admin.products')}}">show more...</a>
        </div>

        {{-- categories --}}
        <h2 class="text-secondary mt-3">all categories</h2>
        <div class="d-flex justify-content-end mb-2">
            <!-- Button to trigger modal -->
            <a href="{{route('category.create')}}" class="btn btn-primary" >
                add category
            </a>
        </div>
        <div class="d-flex justify-content-center">
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
                      <a href="{{route('category.edit', $category->id)}}" class="btn btn-info mx-1 btn-sm btn-rounded">
                        Edit
                      </a>
                      <form action="{{route('category.destroy', $category->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm btn-rounded">
                          delete
                        </button>
                      </form>
                    </td>
                  </tr>
                  {{-- @endforeach --}}
              @endforeach
            </tbody>
        </table>
        </div>
        {{-- show more --}}
        <div class="d-flex justify-content-center my-2">
          <a class="btn btn-info rounded" href="{{route('admin.categories')}}">show more...</a>
        </div>

        {{-- commands --}}
        <h2 class="text-secondary mt-3">all orders</h2>
        <table class="table table-responsive align-middle text-center mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>user</th>
                <th>Product</th>
                <th>Order date</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($commands as $command)
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="ms-3">
                      <p class="fw-bold mb-1">{{$command->user->name}}</p>
                      <p class="text-muted mb-0">{{$command->user->email}}</p>
                    </div>
                  </div>
                </td>
                <td>
                  @foreach ($products as $product)
                      @if ($product->id == $command->product_id)
                        <p class="fw-normal mb-1">
                          {{$product->name}}
                        </p>                          
                      @endif
                  @endforeach
                </td>
                <td>
                  {{$command->created_at}}
                </td>
                <td>
                  @foreach ($products as $product)
                  @if ($product->id == $command->product_id)
                    <p class="fw-normal mb-1">
                      {{$product->price}} $
                    </p>                          
                  @endif
              @endforeach
                </td>
                <td>{{$command->quantity}} unit</td>
                <td>{{$command->total_price}} $</td>
                <td class="d-flex justify-content-center">
                  <a href="{{route('command.edit', $command->id)}}" class="btn btn-info btn-sm btn-rounded">
                    Edit
                  </a>
                  <form action="{{route('command.destroy', $command->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm mx-1 btn-rounded">
                      delete
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        {{-- show more --}}
        <div class="d-flex justify-content-center my-2">
          <a class="btn btn-info rounded" href="{{route('admin.commands')}}">show more...</a>
        </div>
    </div>

    

@endsection

@include('adminlte::page')