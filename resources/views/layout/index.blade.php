<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ config('app.name') }}</title>
		<link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">
		@stack('meta')
		@livewireStyles
	</head>
	<body>
		@include('layout.header')
		<main id="layout-main">
			@yield('content')
		</main>
		@include('layout.footer')
		<div id="layout-modals">
			@stack('modals')
		</div>
		@stack('scripts')
		<script src="{{ mix('assets/js/app.js') }}"></script>
		@livewireScripts
	</body>
</html>
