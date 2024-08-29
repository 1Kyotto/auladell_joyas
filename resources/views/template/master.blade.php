<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

    </head>
    <body class="grid h-screen text-center">
        
        <div class="nav w-100 bg-teal-500">
			NAVBAR
			<div class="nav-1">

			</div>
			<div class="nav-2">

			</div>
		</div>

        @yield('contenido')


        <footer class="bg-cyan-600">
			FOOTER
		</footer>
    </body>
</html>