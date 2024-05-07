@section('title')
    
@endsection
    
@section('content')
<div class="container">
    {{-- users --}}
    <h2 class="text-secondary  mt-3">all the users</h2>
    <table class="table table-responsive align-middle mb-0 bg-white">
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
    {{-- pagination --}}
    <div class="d-flex justify-content-center my-2">
      <div class="pagination justify-content-center">
          {{$users->links()}}
      </div>
    </div>
</div>
@endsection

@include('adminlte::page')