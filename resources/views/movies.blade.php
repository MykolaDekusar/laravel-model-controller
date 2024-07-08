<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Movies</title>
    @vite('resources/js/app.js')
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DB Movie List</title>
        <!-- css -->
        <link rel="stylesheet" href="./scss/app.scss">
    </head>

    <body>
        <div>
            <header>
                <h1>My database Movie List</h1>
            </header>
            <main>
                <div class="container">
                    <div class="row">
                        <ul>
                            @foreach ($movies as $movie)
                                <li>
                                    <div class="card">
                                        <div class="card-content">
                                            <h2 class="card-title">{{ $movie['title'] }}</h2>
                                            <h3 class="album-name">{{ $movie['original_title'] }}</h3>
                                            <p class="score">Score: {{ $movie['vote'] }}</p>
                                            <p class="album-year">{{ $movie['date'] }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </main>
            <footer>
                <p>Copyright||Created by <span class="creator">Draeknes</span></p>
            </footer>
        </div>
    </body>

    </html>
