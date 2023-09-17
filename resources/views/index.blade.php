<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Insafee Online Store</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </script>

<body>
    <div class="container text-center rounded border-primary border mt-3" style="max-width:400px;">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <h1>Login</h1>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="username">
            </div>
            <div class="mb-3">

                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>

    </div>
</body>

</html>