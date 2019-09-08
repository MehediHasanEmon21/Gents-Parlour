    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">What We Do</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">We are committed to bringing the best products service and advice to our customers.</p>
          </div>
        </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                @foreach($services as $service)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url({{ $service->image }});"></a>
                        <div class="text p-4">
                            <h3>{{ $service->service_name }} </h3>
                            <p>{{ $service->long_description }} </p>
                            <span><a href="#">Read more</a></span>
                        </div>
                    </div>
                </div>
                @endforeach
          
            
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Plan &amp; Pricing</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Here are the price of our all services</p>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                @foreach($prices as $price)
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>{{ $price->service_name }}</span></h3>
                        <span class="price">BDT:{{ $price->price }}/-TK</span>
                    </div>
                    <div class="d-block">
                        <p>{{ $price->short_description }}</p>
                    </div>
                </div>
                @endforeach
                
            </div>

            <div class="col-md-6">

                @foreach($prices as $price)
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>{{ $price->service_name }}</span></h3>
                        <span class="price">BDT:{{ $price->price }}/-TK</span>
                    </div>
                    <div class="d-block">
                        <p>{{ $price->short_description }}</p>
                    </div>
                </div>
                @endforeach
             
            </div>
        </div>
        </div>
    </section>