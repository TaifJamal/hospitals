<!-- Title -->
<title>@yield('title')</title>

@yield('css')

@livewireStyles

<link href="{{URL::asset('adminasset/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('adminasset/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('adminasset/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('adminasset/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('adminasset/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">

@if(App::getLocale() =='ar')
    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('adminasset/img/brand/favicon.png')}}" type="image/x-icon"/>
    <!-- Icons css -->
    <link href="{{URL::asset('adminasset/css/icons.css')}}" rel="stylesheet">
    <!--  Custom Scroll bar-->
    <link href="{{URL::asset('adminasset/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
    <!--  Sidebar css -->
    <link href="{{URL::asset('adminasset/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{URL::asset('adminasset/css-rtl/sidemenu.css')}}">
    <!--- Style css -->
    <link href="{{URL::asset('adminasset/css-rtl/style.css')}}" rel="stylesheet">
    <!--- Dark-mode css -->
    <link href="{{URL::asset('adminasset/css-rtl/style-dark.css')}}" rel="stylesheet">
    <!---Skinmodes css-->
    <link href="{{URL::asset('adminasset/css-rtl/skin-modes.css')}}" rel="stylesheet">

@else

    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('adminasset/img/brand/favicon.png')}}" type="image/x-icon"/>
    <!-- Icons css -->
    <link href="{{URL::asset('adminasset/css/icons.css')}}" rel="stylesheet">
    <!--  Custom Scroll bar-->
    <link href="{{URL::asset('adminasset/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
    <!--  Right-sidemenu css -->
    <link href="{{URL::asset('adminasset/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="{{URL::asset('adminasset/css/sidemenu.css')}}">
    <!-- Maps css -->
    <link href="{{URL::asset('adminasset/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
    <!-- style css -->
    <link href="{{URL::asset('adminasset/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('adminasset/css/style-dark.css')}}" rel="stylesheet">
    <!---Skinmodes css-->
    <link href="{{URL::asset('adminasset/css/skin-modes.css')}}" rel="stylesheet" />

@endif
