
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bill</title>
  <style type="text/css">
/*     .container {
    width: 960px;
    margin: 0 auto;
}
.header-left {
    float: left;
}
.header-right {
    float: right;
}
.clear {
    overflow: hidden;
}
.header {

}
  .header-left h1 {
margin-top: 23px;
background: red;
color: white;
padding: 20px;
border-radius: 30px;
}

   .left {
float: left;
}

.right {
    float: right;
}

.info {
margin-top: 35px;
}
.service-info {
margin-left: 373px;
}
.service-info h3{

}
.service-info h3 {
font-size: 35px;
font-weight: bold;
}
.balance {
float: right;
} */
</style>
</head>
<body>
  <div class="container">
    


  <div class="header">
        <div class="header-left">
        <h1>Gents Parlour</h1>
        </div> 

      <div class="header-right">
          <h4>Gents World</h4>
          <p><strong>Address : </strong>Purana Paltan,Dhaka</p>
          <p><strong>Phone :</strong>01786656546</p>
          <p><strong>Email : </strong>gents@gmail.com</p>
      </div>

  </div>
  <hr>



<div class="info">


    <div class="left">
            <address>
              Name : <strong>{{ $appointment_detail->name }}</strong><br>
              Email : <strong>{{ $appointment_detail->email }}</strong><br>
              <abbr title="Phone">P:</abbr> {{ $appointment_detail->phone }}
          </address>
        </div>
    <div class="right">
      <p><strong>Today Date: </strong> {{ date('l jS \of F Y') }}</p>
            <p class="m-t-10"><strong>Service Status: </strong> <span class="label label-pink">Confirm</span></p>
            <p class="m-t-10"><strong>Order ID: </strong> {{ $appointment_detail->id }}</p>
    </div>
  
</div>

<div class="service-info">


    <div class="panel-heading"> 
        <h3 class="panel-title">Service Information</h3> 
    </div> 
    <div class="panel-body"> 
        <div class="about-info-p">
            <p><strong>Full Name  :  </strong>
            {{ $appointment_detail->first_name }} {{ $appointment_detail->last_name }}</p>
        </div>
        <div class="about-info-p">
            <p class="text-muted"><strong>Service Name  :  </strong>
            {{ $appointment_detail->service_name }}</p>
        </div>
        <div class="about-info-p">
            <p class="text-muted"><strong>Stylist Name  :  </strong>
            {{ $appointment_detail->barber_name }}</p>
        </div>
        <div class="about-info-p m-b-0">
            <p class="text-muted"><strong>Service Price  :  </strong>
            {{ $price->price }} Tk</p>
        </div>
    </div> 
</div>
                   <!-- Personal-Information -->

 <div class="balance">
    <p class="text-right"><b>Sub-total:</b> {{ $price->price }}</p>
    <p class="text-right">Discout: 0.00</p>
    <p class="text-right">VAT : 0.00</p>
    <hr>
    <h3 class="text-right">TOTAL : {{ $price->price }}</h3>
    <hr>
 </div>
      


                    

  



</div>
</div>
  
</body>
</html>







 


