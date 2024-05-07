@section('title')
    M-shop | edit category
@endsection

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12 mx-auto mt-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-center">Edit category</h4>
                        <form method="POST" action="{{route('category.update', $category->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                              <label class="form-label">Name :</label>
                              <input type="text" value="{{$category->name}}" name="name" placeholder="name goes here..." class="form-control" />
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Image :</label>
                                <input type="file" name="image" class="file-control" />
                              </div>
                              <div class="d-flex justify-content-center mb-3">
                                <img src="{{asset('storage/'.$category->image)}}" class="img-fluid rounded" style="height: 250px" alt="" srcset="">
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