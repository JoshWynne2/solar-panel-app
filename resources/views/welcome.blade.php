<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased bg-gray">
        <div class="min-h-screen bg-gray dark:bg-gray min-h-screen">

	<style>
		.my-shadow{
			text-shadow: 0px 1px 4px #00000033;
		}
		.block-shadow{
			box-shadow: 0px 1px 4px #00000033;
		}

		canvas {
			position:absolute;
			top:0;
			left:0;
			width:100%;
			height:100%;
			overflow: clip;
			z-index: 11;
        }
	</style>
	<!-- wide box -->
	<div class="p-3 overflow-hidden">

		<div class="relative z-10 rounded-xl bg-white text-black text-center font-medium py-5 block-shadow overflow-clip">
			<div class="relative text-base my-shadow z-20">
				App Version: 0.2
			</div>
			<div class="relative text-5xl my-shadow z-20">
				Solimeter
			</div>
		</div>

		

	</div>
	
	<div class="relative text-white bg-slate w-100 p-5">
		<div onclick="location.href = '{{route('login')}}'" class="relative text-2xl my-shadow z-20">
			Log in
		</div>
	</div>

	<div class="relative text-white bg-slate w-100 p-5 mt-2">
		<div onclick="location.href = '{{route('register')}}'" class="relative text-2xl my-shadow z-20">
			Register
		</div>
	</div>

</div>
    </body>
</html>
