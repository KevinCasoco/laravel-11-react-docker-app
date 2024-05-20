<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel React</title>
</head>
  @vite('resources/css/app.css')
<body>
    @viteReactRefresh
    {{-- choose what file to render in react js --}}
    {{-- @vite('resources/js/app.jsx') --}}
    @vite('resources/js/app.ts')
    <div id="root"></div>
</body>
    <script>
        window.env = {
            API_BASE_URL: '{{ env("API_BASE_URL") }}'
        }
    </script>
</html>
