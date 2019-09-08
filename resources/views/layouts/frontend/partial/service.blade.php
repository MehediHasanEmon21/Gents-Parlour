
    <section class="ftco-section ftco-bg-dark">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5"><h6>We are committed to bringing the best products service and advice to our customers.</h6></p>
          </div>
        </div>
            <div class="row">
          @foreach($special_services as $special_service)
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                <span class="{{ $special_service->icon_name }}"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">{{ $special_service->name }}</h3>
                <p>{{ $special_service->description }}</p>
              </div>
            </div>      
          </div>
          @endforeach
        
        </div>
        </div>
    </section>