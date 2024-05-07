@section('title')
    M-shop | edit user
@endsection

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12 mx-auto mt-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-center">Edit profil informations</h4>
                        <form method="POST" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data">
                            @csrf
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                              <label class="form-label">Name :</label>
                              <input type="text" value="{{$user->name}}" name="name" placeholder="name goes here..." class="form-control" />
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">City :</label>
                                <input type="text" value="{{$user->city}}" name="city" placeholder="city goes here..." class="form-control" />
                              </div>
                              <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Phone :</label>
                                <input type="text" value="{{$user->phone}}" name="phone" placeholder="phone number goes here..." class="form-control" />
                              </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label">Image :</label>
                                <input type="file" name="image" class="file-control" />
                              </div>
                              @if ($user->image != null)
                                <div class="d-flex justify-content-center mb-3">
                                  <img src="{{asset('storage/'.$user->image)}}" class="img-fluid rounded" style="height: 250px" alt="" srcset="">
                                </div>
                              @endif
                          
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