<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">Gent's World</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
              <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
              <li class="nav-item {{ Request::is('service-price') ? 'active' : '' }}"><a href="{{ route('service.price') }}" class="nav-link">Services &amp; Pricing</a></li>
              <li class="nav-item {{ Request::is('product') ? 'active' : '' }}"><a href="{{ route('product.index') }}" class="nav-link">Product</a></li>
              <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
              <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
              
              @if(Cart::count() > 0)
                <li class="nav-item {{ Request::is('show-cart') ? 'active' : '' }}"><a href="{{ route('cart.show') }}" class="nav-link">Cart</a></li>
              
              @endif

              @php
                $customer_id = Session::get('customer_id');
              @endphp
              @if($customer_id!=NULL)
              <li class="nav-item"><a href="{{ route('customer.logout') }}" class="nav-link">Logout</a></li>
              @else
              <li class="nav-item {{ Request::is('login-check') ? 'active' : '' }}"><a href="{{ route('login.index') }}" class="nav-link">Login</a></li>
              @endif
              
          </ul>
      </div>
  </div>
</nav>