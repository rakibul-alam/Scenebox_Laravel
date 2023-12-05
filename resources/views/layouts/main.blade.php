<!doctype html>
<html lang="zxx">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sceneabox-A great source of Bangla video and audio contents</title>
    <title>@yield('title')</title>
    @include('layouts.style')
	<!-- Template CSS -->
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/fav-icon.png') }}">
</head>

<body>
<script src="https://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    @include('layouts.header')

    @yield('content')
	<div style="margin: 8px auto; display: block; text-align:center;">
</div>
	<!-- footer-66 -->
	@include('layouts.footer')
	<!--//footer-66 -->

    @include('layouts.script')
	</body>

    @stack('scripts')
</html>



