<section class="ftco-appointment">
     <div class="overlay"></div>
     <div class="container-wrap">
      <div class="row no-gutters d-md-flex align-items-center" style="background: firebrick">
      
        <div class="col-md-12 appointment ftco-animate">
            <h3 class="mb-4 text-center">Appointments</h3>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div style="margin: 0 auto; max-width: 600px">
            <form action="{{ route('appointment.store') }}" method="POST" class="appointment-form">
                @csrf
               <div class="d-md-flex">
                  <div class="form-group">
                     <input type="text" name="first_name" class="form-control" placeholder="First Name">
                 </div>
                 <div class="form-group ml-md-4">
                     <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                 </div>
             </div>

             @php
                 $services = DB::table('services')->get();
                 $barbers = DB::table('barbers')->get();
             @endphp

             <div class="d-md-flex">
                  <div class="form-group">
                     <select name="service_id" class="form-control">

                        <option selected="">Service Name</option>
                        @foreach($services as $service)
                        <option style="background: black"  value="{{ $service->service_id }}">{{ $service->service_name }}</option>
                        @endforeach
                         
                     </select>
                 </div>
                 <div class="form-group ml-md-4">
                     <select name="barber_id" class="form-control">

                        <option selected="">Barber Name</option>
                        @foreach($barbers as $barber)
                        <option style="background: black" value="{{ $barber->id }}">{{ $barber->name }}</option>
                        @endforeach
                         
                     </select>
                 </div>
             </div>

             <div class="d-md-flex">
              <div class="form-group">
                 <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="text" name="date" id="appointment_date" class="form-control" placeholder="Date">
                </div>
            </div>
            <div class="form-group ml-md-4">
             <div class="input-wrap">
                <div class="icon"><span class="ion-ios-clock"></span></div>
                <input type="text" name="time" id="appointment_time" class="form-control" placeholder="Time">
            </div>
        </div>
        <div class="form-group ml-md-4">
         <input type="text" name="phone" class="form-control" placeholder="Phone">
     </div>
 </div>
 <div class="form-group">
     <textarea name="message" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
 </div>
 <div class="form-group">
     <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
 </div>
</form>
</div>
</div>              
</div>
</div>
</section>