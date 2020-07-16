<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>It.Next - IT Service Responsive Html Theme</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icons -->
    <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <!-- Site css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/responsive.css')}}">
    <!-- colors css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/colors1.css')}}">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/custom.css')}}">
    <!-- wow Animation css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/animate.css')}}">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/revolution/css/navigation.css')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
@include('front.includes.loader')
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
    <!-- header top -->
    @include('front.includes.header-top')
    <!-- end header top -->
    <!-- header bottom -->
    @include('front.includes.header-bottom')
    <!-- header bottom end -->
</header>
<!-- end header -->
<!-- section -->
@include('front.includes.slider')
<!-- end section -->
<!-- section -->

@yield('content')
<!-- end section -->

<!-- footer -->
@include('front.includes.footer')
<!-- end footer -->
<!-- js section -->
<script src="{{asset('assets/front/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- menu js -->
<script src="{{asset('assets/front/js/menumaker.js')}}" type="text/javascript"></script>
<!-- wow animation -->
<script src="{{asset('assets/front/js/wow.js')}}" type="text/javascript"></script>
<!-- custom js -->
<script src="{{asset('assets/front/js/custom.js')}}" type="text/javascript"></script>
<!-- revolution js files -->
<script src="{{asset('assets/front/revolution/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.actions.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.kenburn.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.migration.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/front/revolution/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
<!-- map js -->
<script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {lat: 40.645037, lng: -73.880224},
            styles: [
                {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                },
                {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
                {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                },
                {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                },
                {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                },
                {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                },
                {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                },
                {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                }
            ]
        });

        var image = 'images/it_service/location_icon_map_cont.png';
        var beachMarker = new google.maps.Marker({
            position: {lat: 40.645037, lng: -73.880224},
            map: map,
            icon: image
        });
    }
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>
