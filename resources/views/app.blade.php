<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel React</title>
</head>
  @vite('resources/css/app.css')
<body>
    @viteReactRefresh
    {{-- @vite('resources/js/app.jsx') --}}
    @vite('resources/js/app.ts')
    <div id="root"></div>
</body>
</html>
