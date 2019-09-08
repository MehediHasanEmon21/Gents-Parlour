<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


// ==== FRONTEND ROUTE IS GO HERE =====//



Route::get('/','HomeController@index')->name('home');
Route::get('/about','AboutController@index')->name('about');
Route::get('/service-price','ServicePriceController@index')->name('service.price');
Route::get('/gallery','GalleryController@index')->name('gallery');

Route::get('/contact','ContactController@index')->name('contact');
Route::post('/contact-store','ContactController@contact_store')->name('contact.store');


//==== Customer Login Route is Here ====//

Route::get('/login-check','LoginController@index')->name('login.index');
Route::post('/customer-register','LoginController@customer_register')->name('customer.register');
Route::post('/customer-login','LoginController@customer_login')->name('customer.login');
Route::get('/customer-logout','LoginController@customer_logout')->name('customer.logout');

// ======= Appointment Route is Here ========= //

Route::get('/appointment','ApointMentController@index')->name('appointment.index');
Route::post('/appointment-create','ApointMentController@appointment_store')->name('appointment.store');

// ======= Cart Route is Here ========= //
Route::get('/add-cart/{id}','CartController@add_cart')->name('cart.add');
Route::get('/show-cart','CartController@show_cart')->name('cart.show');
Route::post('/update-cart/{rowId}','CartController@update_cart')->name('cart.update');
Route::get('delete-cart/{rowId}','CartController@delete_cart')->name('cart.delete');

// ======= Checkout Route is Here ========= //
Route::get('/checkout','CheckoutController@checkout')->name('checkout.index');
// ======= Checkout Route is Here ========= //

Route::get('/product','ProductController@index')->name('product.index');

// ======= Shipping Route is Here ========= //
Route::post('/shipping-store','ShippingController@shipping_store')->name('shipping.store');
Route::get('/paytment','ShippingController@payment_index')->name('payment.index');
Route::post('/order-place','ShippingController@order_place')->name('order.place');
Route::get('/handcash','ShippingController@handcash')->name('handcash.index');


View::composer('layouts.frontend.partial.speech',function($view){
	$abouts = DB::table('abouts')->latest()->take(1)->get();
	$view->with('abouts',$abouts);
});

View::composer('layouts.frontend.partial.service',function($view){
	$special_services = DB::table('special__services')->latest()->take(4)->get();
	$view->with('special_services',$special_services);
});

View::composer('layouts.frontend.partial.service-price',function($view){
	$services = DB::table('services')->latest()->get();
	$prices = DB::table('prices')
				->join('services','prices.service_id','=','services.service_id')
				->select('prices.*','services.service_name','services.short_description')
				->inRandomOrder()
				->take(5)
				->get();
	$view->with(array('services'=>$services,'prices'=>$prices));

});


View::composer('layouts.frontend.partial.hair-stylist',function($view){
	$barbers = DB::table('barbers')
    				->join('roles','roles.role_id','=','barbers.role_id')
    				->select('barbers.*','roles.role')
    				->take(4)
    				->get();
	$view->with('barbers',$barbers);

});



View::composer('layouts.frontend.partial.page-banner',function($view){
	$page_banners = DB::table('page_banners')->latest()->take(1)->get();
	$view->with('page_banners',$page_banners);
});
	


















//==== BACKEND ROUTE IS GO HERE ==== //

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin','as'=>'admin.'],function(){

	Route::get('/dashboard','DashboardController@index')->name('dashboard');

	//==== HOME BANNER ROUTE IS HERE ====//

	Route::get('/all-home-banner','HomeBannerController@index')->name('home-banner.index');
	Route::get('/add-home-banner','HomeBannerController@create')->name('home-banner.create');

	Route::post('/add-home-banner','HomeBannerController@store')->name('home-banner.store');
	
	Route::get('/edit-home-banner/{id}','HomeBannerController@edit')->name('home-banner.edit');
	Route::post('/update-home-banner/{id}','HomeBannerController@update')->name('home-banner.update');
	Route::get('/delete-home-banner/{id}','HomeBannerController@destroy')->name('home-banner.destroy');
	


    //==== SHOP ADDRESS ROUTE IS HERE ====//
	Route::get('/all-shop-address','ShopAddressController@index')->name('shop-address.index');
	Route::get('/add-shop-address','ShopAddressController@create')->name('shop-address.create');

	Route::post('/add-shop-address','ShopAddressController@store')->name('shop-address.store');
	Route::get('/edit-shop-address/{id}','ShopAddressController@edit')->name('shop-address.edit');
	Route::post('/update-shop-address/{id}','ShopAddressController@update')->name('shop-address.update');
	Route::get('/delete-shop-address/{id}','ShopAddressController@destroy')->name('shop-address.destroy');

	//==== SHOP ABOUT ROUTE IS HERE ====//

	Route::get('/all-about','AboutController@index')->name('about.index');
	Route::get('/add-about','AboutController@create')->name('about.create');

	Route::post('/add-about','AboutController@store')->name('about.store');


	//==== SPECIAL SERVICES ROUTE IS HERE ====//

	Route::get('/all-special-service','SpecialServiceConroller@index')->name('special-service.index');
	Route::get('/add-special-service','SpecialServiceConroller@create')->name('special-service.create');

	Route::post('/add-special-service','SpecialServiceConroller@store')->name('special-service.store');


	//==== Service ROUTE IS HERE ====//

	Route::get('/all-service','ServiceController@index')->name('service.index');
	Route::get('/add-service','ServiceController@create')->name('service.create');

	Route::post('/add-service','ServiceController@store')->name('service.store');
	
	Route::get('/edit-service/{id}','ServiceController@edit')->name('service.edit');
	Route::post('/update-service/{id}','ServiceController@update')->name('service.update');
	Route::get('/delete-service/{id}','ServiceController@destroy')->name('service.destroy');

	//==== PRICE ROUTE IS HERE ====//
	Route::get('/all-price','PriceController@index')->name('price.index');
	Route::get('/add-price','PriceController@create')->name('price.create');

	Route::post('/add-price','PriceController@store')->name('price.store');

	//==== ROLE ROUTE IS HERE ====//
	Route::get('/all-role','RoleController@index')->name('role.index');
	Route::get('/add-role','RoleController@create')->name('role.create');

	Route::post('/add-role','RoleController@store')->name('role.store');

	//==== BARBER ROUTE IS HERE ====//
	Route::get('/all-barber','BarberController@index')->name('barber.index');
	Route::get('/add-barber','BarberController@create')->name('barber.create');

	Route::post('/add-barber','BarberController@store')->name('barber.store');
	Route::get('/edit-barber/{id}','BarberController@edit')->name('barber.edit');
	Route::post('/update-barber/{id}','BarberController@update')->name('barber.update');
	Route::get('/delete-barber/{id}','BarberController@destroy')->name('barber.destroy');


	//====  GALLERY ROUTE IS HERE =====//
	Route::get('/all-gallery','GalleryController@index')->name('gallery.index');
	Route::get('/add-gallery','GalleryController@create')->name('gallery.create');

	Route::post('/add-gallery','GalleryController@store')->name('gallery.store');




	//==== PAGE BANNER ROUTE IS HERE ====//

	Route::get('/all-page-banner','PageBannerController@index')->name('page-banner.index');
	Route::get('/add-page-banner','PageBannerController@create')->name('page-banner.create');

	Route::post('/add-page-banner','PageBannerController@store')->name('page-banner.store');
	
	Route::get('/edit-page-banner/{id}','PageBannerController@edit')->name('page-banner.edit');
	Route::post('/update-page-banner/{id}','PageBannerController@update')->name('page-banner.update');
	Route::get('/delete-page-banner/{id}','PageBannerController@destroy')->name('page-banner.destroy');


	//==== CUSTOMER ROUTE IS HERE =====  //
	Route::get('/all-customer','CustomerController@index')->name('customer.index');

	//==== APPOINTMENT ROUTE IS HERE ====//
	Route::get('/all-appointment','AppointmentController@index')->name('appointment.index');
	Route::get('/unactive-appointment/{id}','AppointmentController@unactive_appointment')->name('unactive.appointment');
	Route::get('/delete-appointment/{id}','AppointmentController@destroy')->name('appointment.destroy');
	Route::get('/view-details/{id}','AppointmentController@view_details')->name('appointment.view_details');
	Route::get('/generate-bill/{id}','AppointmentController@generate_bill')->name('generate.bill');


	//===== CUSTOMER ROUTE IS HERE =====//
	Route::get('/all-message','ContactController@index')->name('message.index');
	Route::get('/delete-contact/{id}','ContactController@destroy')->name('contact.destroy');


	//===== SLIDER ROUTE IS HERE =====//
	Route::get('/all-slider','SliderController@index')->name('slider.index');
	Route::get('/add-slider','SliderController@create')->name('slider.create');
	Route::post('/add-slider','SliderController@store')->name('slider.store');
	Route::get('/edit-slider/{id}','SliderController@edit')->name('slider.edit');
	Route::post('/update-slider/{id}','SliderController@update')->name('slider.update');
	Route::get('/delete-slider/{id}','SliderController@destroy')->name('slider.destroy');

	//===== PRODUCT ROUTE IS HERE =====//
	Route::get('/all-product','ProductController@index')->name('product.index');
	Route::get('/add-product','ProductController@create')->name('product.create');
	Route::post('/add-product','ProductController@store')->name('product.store');
	Route::get('/edit-product/{id}','ProductController@edit')->name('product.edit');
	Route::post('/update-product/{id}','ProductController@update')->name('product.update');
	Route::get('/delete-product/{id}','ProductController@destroy')->name('product.destroy');



	//===== SALARY ROUTE IS HERE =====//
	Route::get('/all-salary','SalaryController@index')->name('salary.index');
	Route::get('/add-salary','SalaryController@create')->name('salary.create');
	Route::post('/add-salary','SalaryController@store')->name('salary.store');
	Route::get('/edit-salary/{id}','SalaryController@edit')->name('salary.edit');
	Route::post('/update-salary/{id}','SalaryController@update')->name('salary.update');
	Route::get('/delete-salary/{id}','SalaryController@destroy')->name('salary.delete');
	Route::get('/monthly-salary','SalaryController@monthly_salary')->name('monthly.salary');

	//////  ====MONTHLY ROUTE IS HERE====  //////
	Route::get('january-salary','SalaryController@january_salary')->name('january.salary');
	Route::get('february-salary','SalaryController@february_salary')->name('february.salary');
	Route::get('march-salary','SalaryController@march_salary')->name('march.salary');
	Route::get('april-salary','SalaryController@april_salary')->name('april.salary');
	Route::get('may-salary','SalaryController@may_salary')->name('may.salary');
	Route::get('june-salary','SalaryController@june_salary')->name('june.salary');
	Route::get('july-salary','SalaryController@july_salary')->name('july.salary');
	Route::get('august-salary','SalaryController@august_salary')->name('august.salary');
	Route::get('september-salary','SalaryController@september_salary')->name('september.salary');
	Route::get('october-salary','SalaryController@october_salary')->name('october.salary');
	Route::get('november-salary','SalaryController@november_salary')->name('november.salary');
	Route::get('december-salary','SalaryController@december_salary')->name('december.salary');

	//////  ====ATTENDANCE ROUTE IS HERE====  //////
	Route::get('take-attendance','AttendanceController@take_attendance')->name('take.attendance');
	Route::post('add-attendance','AttendanceController@store_attendance')->name('attendance.store');
	Route::get('all-attendance','AttendanceController@all_attendance')->name('all.attendance');
	Route::get('edit-attendance/{edit_date}','AttendanceController@edit_attendance')->name('attendance.edit');
	Route::post('update-attendance','AttendanceController@update_attendance')->name('attendance.update');
	Route::get('show-attendance/{edit_date}','AttendanceController@show_attendance')->name('attendance.show');

	//////  ====ORDER ROUTE IS HERE====  //////
	Route::get('/all-order','OrderController@index')->name('order.index');
	Route::get('/view-order/{id}','OrderController@show')->name('order.show');
	Route::get('/approve-order/{id}','OrderController@approve_order')->name('approve.order');

});
	