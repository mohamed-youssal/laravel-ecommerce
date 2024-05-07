@section('title')
    
@endsection

@section('content')
    <div class="container">
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
                  <button type="button" class="btn btn-info btn-sm btn-rounded mx-1">
                    Edit
                  </button>
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
              {{$commands->links()}}
          </div>
        </div>
    </div>
@endsection

@include('adminlte::page')