@section('title')
    M-shop | shopping cart
@endsection

@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>operations</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach ($commands as $command)
                            <tr>
                                <td class="align-middle">
                                    @foreach ($products as $product)
                                        @if ($product->id == $command->product_id)
                                        <div class="row">
                                            <div class="col-3">
                                                <img src="{{asset('storage/'.$product->image)}}" class="rounded" style="width: 50px;"> 
                                            </div>
                                            <div class="col-6 d-flex align-items-center">
                                                {{$product->name}}
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="align-middle">
                                    @foreach ($products as $product)
                                        @if ($product->id == $command->product_id)
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center align-items-center">
                                                {{$product->price}} $
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="align-middle">
                                     {{$command->quantity}}
                                </td>
                                <td class="align-middle">
                                    ${{$command->total_price}}
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('command.edit', $command->id)}}" type="submit" class="btn btn-md btn-warning rounded mx-2">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{route('command.destroy', $command->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-md btn-danger rounded">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        @foreach ($commands as $command)
                        <div class="d-flex justify-content-between mb-3">
                            @foreach ($products as $product)
                            @if ($command->product_id == $product->id) 
                                <h6>{{$product->name}}</h6>
                                <h6>${{$command->total_price}}</h6>
                            @endif
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h4 id="total" class="text-danger">
                               <div class="d-none">
                                {{$sum = 0}}
                                @foreach ($commands as $command)
                                    {{ $sum = $sum + $command->total_price }}
                                @endforeach
                               </div>
                               ${{$sum}}
                            </h4>
                            
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    
    
    
@endsection

@include('layouts.master')