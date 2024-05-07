{{-- @section('title')
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
                <div class="d-flex justify-content-center">
                  <a href="{{route('user.edit')}}">
                    change profil image
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
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
    </section><!-- End Portfolio Details Section -->
    </div>
@endsection

@include('layouts.master') --}}