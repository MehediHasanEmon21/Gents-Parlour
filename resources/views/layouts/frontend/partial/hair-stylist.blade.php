
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Hair Stylist</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Here is our experience hair stylist whose are eagerly wanted to you come</p>
          </div>
        </div>
        <div class="row">
            @foreach($barbers as $barber)
            <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="img mb-4" style="background-image: url({{ $barber->image }});"></div>
                    <div class="info text-center">
                        <h3><a href="teacher-single.html">{{ $barber->name }}</a></h3>
                        <span class="position">{{ $barber->role }}</span>
                        <div class="text">
                            <p>{{ $barber->about }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>