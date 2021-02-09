

<!doctype html>
<html>
<head>
    <title>Battle of Ohmz Vape Cribs</title>
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img class="logo" src="/image/BOVC.jpg">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('', 'Battle of Ohmz Vape Cribs') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
</div>
</nav>
<div>
                    @yield('content')
                </div>
</div>
</body>
</html>