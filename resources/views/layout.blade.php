<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <h5 class="my-0 mr-md-auto font-weight-normal">Welcome</h5>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="p-2 text-dark" href="/">Главная</a>
            <a class="p-2 text-dark" href="/about">Про нас</a>
        </nav>
        <a class="btn btn-lg btn-primary" href="/review">Отзывы</a>
    </div>
</div>
<div class="container">
    @yield('main_content')
</div>
   <!--файл служит как шаблон
в цей район ми будемо ставити контент котрий буде змінюватись-->
</body>
</html>
