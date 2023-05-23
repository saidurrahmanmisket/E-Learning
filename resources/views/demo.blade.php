<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>

        <h1>Hello</h1>
    </header>

<section>
    @include('sidebar')
    @yield('test')
    @yield('test2')

</section>


    <footer>
        <p>this is footer</p>
    </footer>
</body>
</html>
