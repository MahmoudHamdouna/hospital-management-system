

@if (App::getlocale() == 'ar')
<!-- Favicon -->
<link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>

<!-- Icons css -->
<link href="{{asset('assets/plugins/icons/icons.css')}}" rel="stylesheet">

<!-- Bootstrap css -->
<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.rtl.min.css')}}" rel="stylesheet">

<!--  Right-sidemenu css -->
<link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

<!-- P-scroll bar css-->
<link href="{{asset('assets/plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

<!--  Sidemenu css -->
<link rel="stylesheet" href="{{asset('assets/css-rtl/sidemenu.css')}}">

<!--- Style css --->
<link href="{{asset('assets/css-rtl/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css-rtl/boxed.css')}}" rel="stylesheet">
<link href="{{asset('assets/css-rtl/dark-boxed.css')}}" rel="stylesheet">

<!--- Dark-mode css --->
<link href="{{asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">

<!---Skinmodes css-->
<link href="{{asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet" />



<!--- Animations css-->
<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
@yield('styles')
@livewireStyles


@elseif (App::getlocale() == 'en')
	<!-- Favicon -->
	<link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>

	<!-- Icons css -->
	<link href="{{asset('assets/plugins/icons/icons.css')}}" rel="stylesheet">

	<!-- Bootstrap css -->
	<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	
	<!--  Right-sidemenu css -->
	<link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
	
	<!-- P-scroll bar css-->
	<link href="{{asset('assets/plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />
	
	<!-- Sidemenu css -->
	<link rel="stylesheet" href="{{asset('assets/css/sidemenu.css')}}">
	
	@yield('styles')
	@livewireStyles

	
	<!--- Style css --->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/boxed.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/dark-boxed.css')}}" rel="stylesheet">
	
	<!--- Dark-mode css --->
	<link href="{{asset('assets/css/style-dark.css')}}" rel="stylesheet">
	
	<!---Skinmodes css-->
	<link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
	
	<!--- Animations css-->
	<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">

@endif