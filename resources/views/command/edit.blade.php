@section('title')
    M-shop|edit product
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mx-auto">
                <div class="card border-primary">
                  {{-- <img class="card-img-top" src="{{asset('storage/'.$command->products()->image)}}" alt=""> --}}
                  <div class="card-body">
                    <h4 class="card-title text-center">edit command:</h4>
                    {{-- <p class="card-text">Text</p> --}}
                    <form action="{{route('command.update', $command->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        @foreach ($command->products as $product)
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid rounded" style="height: 150px" src="{{asset('storage/'.$product->image)}}">
                        </div>
                        @endforeach
                        <input type="number" class="d-none" value="{{$command->product_id}}" name="product_id">
                        <div class="form-group">
                            <label>Quantity:</label>
                            <input type="number" name="quantity" class="form-control border border-primary" min="1" max="{{$product->quantity}}" value="{{$command->quantity}}">
                        </div>
                        <div class="d-flex justify-content-center my-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('layouts.master')