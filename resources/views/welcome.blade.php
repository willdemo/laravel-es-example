<!doctype html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div id="app" class="container">
        <div class="mt-5">
            <company-search></company-search>
        </div>
    </div>
    <!-- javascript -->
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
