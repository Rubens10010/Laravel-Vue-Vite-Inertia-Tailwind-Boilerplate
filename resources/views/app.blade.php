<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'Laravel') }}</title>
	@routes
	<!-- This two blade directives must be separated -->
	@vite
</head>

<body class="antialiased bg-gray-900">
	@inertia
</body>

</html>