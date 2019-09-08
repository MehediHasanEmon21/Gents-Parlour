 <!-- ========== Left Sidebar Start ========== -->
                
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="{{ asset('public/assets/backend/images/users/emon1.jpg') }}" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect {{ Request::is('admin/dashboard') ? 'active' : '' }}"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                                  <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-appointment'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-clock"></i><span>Appointments </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">

                                    <li class="{{ Request::is('admin/all-appointment') ? 'active' : '' }}"><a href="{{ route('admin.appointment.index') }}">All Appointment</a></li>
                
                                </ul>
                            </li>

                              <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-order'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-bicycle"></i><span>Orders </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-order') ? 'active' : '' }}"><a href="{{ route('admin.order.index') }}">Manage Order</a></li>
                
                                </ul>
                            </li>

                              <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-product') || Request::is('admin/add-product'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-cart-plus"></i><span>Product </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-product') ? 'active' : '' }}"><a href="{{ route('admin.product.index') }}">All Product</a></li>
                                    <li class="{{ Request::is('admin/add-product') ? 'active' : '' }}"><a href="{{ route('admin.product.create') }}">Add Product </a></li>
                
                                </ul>
                            </li>

                                 <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/monthly-salary') || Request::is('admin/add-salary') || Request::is('admin/all-salary'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-calculator"></i><span>Salary </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    
                                     <li class="{{ Request::is('admin/all-salary') ? 'active' : '' }}"><a href="{{ route('admin.salary.index') }}">All Salary </a></li>

                                    <li class="{{ Request::is('admin/monthly-salary') ? 'active' : '' }}"><a href="{{ route('admin.monthly.salary') }}">Monthly Salary </a></li>

                                      <li class="{{ Request::is('admin/add-salary') ? 'active' : '' }}"><a href="{{ route('admin.salary.create') }}">Pay Salary</a></li>
                
                                </ul>
                            </li>

                              <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/take-attendance') || Request::is('admin/all-attendance'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-calendar"></i><span>Attendance </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">

                                    <li class="{{ Request::is('admin/take-attendance') ? 'active' : '' }}"><a href="{{ route('admin.take.attendance') }}">Take Attendance </a></li>

                                    <li class="{{ Request::is('admin/all-attendance') ? 'active' : '' }}"><a href="{{ route('admin.all.attendance') }}">All Attendance </a></li>
                
                                </ul>
                            </li>

                                <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-service') || Request::is('admin/add-service'))
                                {{ 'active' }}
                                @endif"><i class="md-layers"></i><span>Services </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-service') ? 'active' : '' }}"><a href="{{ route('admin.service.index') }}">All Service</a></li>
                                    <li class="{{ Request::is('admin/add-service') ? 'active' : '' }}"><a href="{{ route('admin.service.create') }}">Add Service </a></li>
                
                                </ul>
                            </li>

                            
                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-barber') || Request::is('admin/add-barber') || Request::is('admin/all-role') || Request::is('admin/add-role')) 
                                {{ 'active' }}
                                @endif"><i class="md-stars"></i><span>Our Barber </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    
                                    <li class="{{ Request::is('admin/all-barber') ? 'active' : '' }}"><a href="{{ route('admin.barber.index') }}">All Barber </a></li>
                                    <li class="{{ Request::is('admin/add-barber') ? 'active' : '' }}"><a href="{{ route('admin.barber.create') }}">Add Barber </a></li>

                                    <li class="{{ Request::is('admin/all-role') ? 'active' : '' }}"><a href="{{ route('admin.role.index') }}">All Barber Role</a></li>
                                    <li class="{{ Request::is('admin/add-role') ? 'active' : '' }}"><a href="{{ route('admin.role.create') }}">Add Barber Role </a></li>
                
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-slider') || Request::is('admin/add-slider'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-shopping-basket"></i><span> Slider </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-slider') ? 'active' : '' }}"><a href="{{ route('admin.slider.index') }}">All Slider</a></li>
                                    <li class="{{ Request::is('admin/add-slider') ? 'active' : '' }}"><a href="{{ route('admin.slider.create') }}">Add Slider </a></li>
                
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-shop-address') || Request::is('admin/add-shop-address'))
                                {{ 'active' }}
                                @endif"><i class="fab fa-shopware"></i></i><span> Shop Address </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-shop-address') ? 'active' : '' }}"><a href="{{ route('admin.shop-address.index') }}">All Address</a></li>
                                    <li class="{{ Request::is('admin/add-shop-address') ? 'active' : '' }}"><a href="{{ route('admin.shop-address.create') }}">Add Address </a></li>
                
                                </ul>
                            </li>

                     

                            
                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-about') || Request::is('admin/add-about'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-shopping-basket"></i><span> About Shop </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-about') ? 'active' : '' }}"><a href="{{ route('admin.about.index') }}">All About</a></li>
                                    <li class="{{ Request::is('admin/add-about') ? 'active' : '' }}"><a href="{{ route('admin.about.create') }}">Add About </a></li>
                
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-special-service') || Request::is('admin/add-special-service'))
                                {{ 'active' }}
                                @endif"><i class="fab fa-servicestack"></i></i><span> Special Services </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-special-service') ? 'active' : '' }}"><a href="{{ route('admin.special-service.index') }}">All Special Service</a></li>
                                    <li class="{{ Request::is('admin/add-special-service') ? 'active' : '' }}"><a href="{{ route('admin.special-service.create') }}">Add Special Service </a></li>
                
                                </ul>
                            </li>

                         

                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-price') || Request::is('admin/add-price'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-dollar-sign"></i><span>Price </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-price') ? 'active' : '' }}"><a href="{{ route('admin.price.index') }}">All Price</a></li>
                                    <li class="{{ Request::is('admin/add-price') ? 'active' : '' }}"><a href="{{ route('admin.price.create') }}">Add Price </a></li>
                
                                </ul>
                            </li>

                          

                          



                         


                          


                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-gallery') || Request::is('admin/add-gallery'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-images"></i><span>Gallery Image </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-gallery') ? 'active' : '' }}"><a href="{{ route('admin.gallery.index') }}">All Gallery</a></li>
                                    <li class="{{ Request::is('admin/add-gallery') ? 'active' : '' }}"><a href="{{ route('admin.gallery.create') }}">Add Gallery </a></li>
                
                                </ul>
                            </li>



                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-page-banner') || Request::is('admin/add-page-banner'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-briefcase"></i></i><span>Page Banner </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li class="{{ Request::is('admin/all-page-banner') ? 'active' : '' }}"><a href="{{ route('admin.page-banner.index') }}">All Page Banner</a></li>
                                    <li class="{{ Request::is('admin/add-page-banner') ? 'active' : '' }}"><a href="{{ route('admin.page-banner.create') }}">Add Page Banner </a></li>
                
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-customer'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-users"></i><span>Customers </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">

                                    <li class="{{ Request::is('admin/all-customer') ? 'active' : '' }}"><a href="{{ route('admin.customer.index') }}">All Customer</a></li>
                
                                </ul>
                            </li>

                      

                            <li class="has_sub">
                                <a href="#" class="waves-effect @if(Request::is('admin/all-message'))
                                {{ 'active' }}
                                @endif"><i class="fas fa-sms"></i><span>Message </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">

                                    <li class="{{ Request::is('admin/all-message') ? 'active' : '' }}"><a href="{{ route('admin.message.index') }}">All Message</a></li>
                
                                </ul>
                            </li>
                            

                            
                     
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 