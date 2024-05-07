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
                        <h4 class="card-title text-center">Add product</h4>
                        <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div data-mdb-input-init class="form-outline mb-4">
                              <label class="form-label">Name :</label>
                              <input type="text" name="name" class="form-control" placeholder="Product name goes here..." />
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Description :</label>
                                <textarea class="form-control" name="description"  placeholder="Product description goes here..." cols="" rows="2"></textarea>
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
                                <input type="number" name="price"  placeholder="example: 544" class="form-control" />
                              </div>
                              <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Quantity :</label>
                                <input type="number" name="quantity"  placeholder="Quantity goes here..." class="form-control" />
                              </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Image :</label>
                                <input type="file" name="image" class="file-control" />
                              </div>
                          
                            <!-- Submit button -->
                            <div class="d-flex justify-content-center"></div>
                            <button type="submit" class="btn btn-primary btn-block mb-4">Add</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@include('layouts.master')