@section('title')
    M-shop | shop
@endsection

@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by category</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form action="{{route('filter')}}" method="GET">
                        @csrf
                        <div class="custom-control d-flex align-items-center">
                            <input type="radio" class="custom-control" name="category_id" value="all">
                            <label class="mx-2 mt-2">All ({{$products->count()}})</label>
                        </div>
                        @foreach ($categories as $category)
                            <div class="custom-control d-flex align-items-center">
                                <input type="radio" class="custom-control" name="category_id" value="{{$category->id}}">
                                <label class="mx-2 mt-2">{{$category->name}} ({{$category->products()->count()}})</label>
                            </div>
                        @endforeach
                        <div class="custom-control d-flex justify-content-center mt-3">
                            <button class="btn btn-primary rounded" type="submit">filter</button>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
                
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100 rounded" src="{{asset('storage/'.$product->image)}}" style="height: 250px" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="text-center pt-2">
                                <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>category: {{$product->category->name}}</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>${{$product->price}}</h5><h6 class="text-muted ml-2"><del>{{$product->previous_price}}</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star-half-alt text-primary mr-1"></small>
                                    <small>(99)</small>
                                </div>
                                <div class="d-flex justify-content-end mt-2">
                                    <p class="text-muted mt-2">
                                        {{$product->created_at}}<i class="bi bi-alarm mx-1"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- pagination --}}
                    <div class="col-12">
                        <div class="d-flex pagination justify-content-center">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
@endsection

@include('layouts.master')