@section('title')
    M-shop | add products and categories
@endsection

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid">
        <div class="row  align-items-center">
            <div class="col-lg-5 col-sm-12 mx-auto mt-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-center">Edit Product</h4>
                        <form method="POST" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div data-mdb-input-init class="form-outline mb-4">
                              <label class="form-label">Name :</label>
                              <input type="text" name="name" class="form-control" value="{{$product->name}}" />
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Description :</label>
                                <textarea class="form-control" name="description" rows="2">{{$product->description}}
                                </textarea>
                              </div>
                              <div data-mdb-input-init class="d-flex">
                                <label class="form-label">Category :</label>
                                <select name="category_id" class="mx-5 btn border border-secondary">
                                    <option>Select a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Price :</label>
                                <input type="number" name="price" value="{{$product->price}}" class="form-control" />
                              </div>
                              {{-- <div data-mdb-input-init class="form-outline d-none">
                                <label class="form-label">Price :</label>
                                <input type="number" name="category_id" value="{{$product->id}}" class="form-control" />
                              </div> --}}
                              <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Quantity :</label>
                                <input type="number" name="quantity"  value="{{$product->quantity}}" class="form-control" />
                              </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Image :</label>
                                <input type="file" name="image" class="file-control" />
                              </div>

                              <div class="d-flex justify-content-center mb-3">
                                <img src="{{asset('storage/'.$product->image)}}" class="img-fluid rounded" style="height: 250px"  alt="">
                              </div>
                          
                            <!-- Submit button -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-block mb-4">Edit</button>                                
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@include('layouts.master')