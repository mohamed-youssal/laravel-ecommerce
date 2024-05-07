@section('title')
    M-store | home
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative" style="height: 480px;">
                            <img class="position-absolute w-100 h-100 img-fluid rounded" src="https://media.istockphoto.com/id/1306668349/fr/photo/isol%C3%A9-des-bo%C3%AEtes-en-papier-dexp%C3%A9dition-%C3%A0-lint%C3%A9rieur-du-chariot-bleu-de-chariot-dachat-sur.jpg?s=612x612&w=0&k=20&c=q9oEtgbZIc3LTXRuzZWzeeFTsXU3tPkTZ3hun0gflRk=" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Online shopping</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                                        Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam
                                    </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('product.index')}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative active rounded" style="height: 480px;">
                            <img class="position-absolute w-100 h-100 img-fluid rounded" src="https://media.istockphoto.com/id/1311600080/fr/photo/petits-paquets-dexp%C3%A9dition-sur-un-cahier-avec-linscription-achats-en-ligne.jpg?s=612x612&w=0&k=20&c=ALrwGts7O1pH1n7IuOBIcTjpS9EHl-8LeU1M6Xw6IJo=" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">New products</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                                        Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam
                                    </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('product.index')}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative rounded" style="height: 480px;">
                            <img class="position-absolute img-fluid w-100 h-100 rounded" src="https://media.istockphoto.com/id/1250152532/fr/photo/achats-en-ligne-et-concept-de-marketing-num%C3%A9rique-femme-utilisant-la-tablette-num%C3%A9rique-avec.jpg?s=612x612&w=0&k=20&c=Rek4yC-X2-4IAnYTalRFi5FLRhnDd21AQEYUUFkqiU4=" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men and Women Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                                        Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam
                                    </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{route('product.index')}}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            @foreach ($categories as $category)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded" src="{{ asset('storage/'.$category->image) }}" style="height: 95px" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>{{$category->name}}</h6>
                            <small class="text-body">{{$category->products()->count()}} Products</small>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        {{-- pagination --}}
        <div class="d-flex justify-content-center my-2">
            <div class="pagination justify-content-center">
                {{$categories->links()}}
            </div>
          </div>
    </div>
    <!-- Categories End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
        <div class="row px-xl-5">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100 rounded" style="height: 300px" src="{{asset('storage/'.$product->image)}}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href="{{route('product.show', $product->id)}}"><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>${{$product->price}}</h5>
                            @if ($product->previous_price != null)
                            <h6 class="text-muted ml-2"><del>${{$product->previous_price}}</del></h6>
                            @endif
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <p class="text-muted">
                            {{$product->created_at}}<i class="bi bi-alarm mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- pagination --}}
    <div class="d-flex justify-content-center my-2">
        <a href="{{route('product.index')}}" class="btn btn-info rounded">
            Show more products...
        </a>
    </div>
    <!-- Products End -->

    
@endsection

@include('layouts.master')