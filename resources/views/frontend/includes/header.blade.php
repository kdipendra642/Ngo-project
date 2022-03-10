<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <title>{{$setting->site_title}}</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="{{$setting->meta_title}}">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap/bootstrap.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/sitesettings/'.$setting->favicon)}}">
    <!------ For Popup images -------->
    <link rel="stylesheet" href="{{ asset('frontend/css/sweetalert2.css')}}">
    <!--light box css -->
    <link rel="stylesheet" href="{{ asset('frontend/templates/css/lightbox.css') }}">
    <!-- Theme CSS -->
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" media="screen">
    <!-- Skins Theme -->
    <!-- Skins Theme -->
    <!-- Responsive CSS -->
    <link href="{{ asset('frontend/css/theme-responsive.css')}}" rel="stylesheet" media="screen">

    <style>
        /* The sticky class is added to the header with JS when it reaches its scroll position */
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
        }

        /* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
        .sticky+.content {
            padding-top: 102px;
        }
    </style>
</head>