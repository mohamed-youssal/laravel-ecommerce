@section('title')
    profil
@endsection

@section('content')
    <div class="container">
      <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="d-flex justify-content-center">
                  @if ($user->image == null)
                    <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/avatar-3814049_1280.png" class="img-fluid w-75 h-75 rounded" alt="">  
                  @else
                    <img src="{{asset('storage/'.$user->image)}}" class="img-fluid w-75 h-75 rounded" alt="">  
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary rounded" href="{{route('user.edit', $user->id)}}">
                      update profil infos
                    </a>
                  </div>
              <h3 class="text-center my-3">{{$user->name}}</h3>
              <ul>
                <li><strong>E-mail</strong>: {{$user->email}}</li>
                <li><strong>City</strong>: {{$user->city}}</li>
                <li><strong>Phone</strong>: {{$user->phone}}</li>
                <li><strong>Member since</strong>: {{$user->created_at}}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div>
        </div>
        

      </div>

      <div class="row my-2">
        <div class="h2 d-flex justify-content-center">
            My orders
        </div>
        <div class="col col-lg-6 col-sm-12 mx-auto">
            <table class="table table-responsive table-light table-borderless table-hover text-center w-100 mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>order creating</th>
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
                                        <div class="col-6">
                                            <img src="{{asset('storage/'.$product->image)}}" class="rounded" style="width: 50px;"> 
                                        </div>
                                        <div class="col-6 d-flex align-items-center">
                                            {{$product->name}}
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                {{$product->created_at}}
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
    </div>
    </section><!-- End Portfolio Details Section -->
    </div>
@endsection

@include('layouts.master')