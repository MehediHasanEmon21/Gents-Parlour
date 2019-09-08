
    <section class="ftco-section">
        @foreach($abouts as $about)
        <div class="container">
            <div class="row justify-content-center mb-4">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">{{ $about->title }}</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
          </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-md-8 text-center ftco-animate">
                    <p>{{ $about->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </section>