<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MemCards</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">

       
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">[MemCards]</a>
            </div>
          </nav>

        </br></br>

        <div class="d-flex justify-content-center">
            <div class="bg-secondary rounded-4 p-3 pt-1 pb-1">
                <div class="d-flex justify-content-center">
                    <img alt="" src="/storage/bun.png"/>
                </div>
                <div class="d-flex justify-content-center text-center">
                    <h5>Make decks of flashcards and then study them!<br/>
                        Great for language learning.<br/>
                        Coded by Ben Jackson in September 2024.</h5>
                </div>
            </div>
        </div>

        </br></br>

        <div class="container">

            <div class="row">
                <div class="col">
                    <h3>Current Decks</h3>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end pe-1">
                        <button class="btn btn-primary">
                            <img src="/storage/plus-lg.svg" alt=""/>
                        </button>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row bg-secondary rounded-4 p-2 pe-1">
                <div class="col">
                    <h4 class="pt-2">DeckName</h4>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end">
                        <div class="p-1">
                            <button class="btn btn-info">
                                <img src="/storage/pencil-square.svg" alt=""/>
                            </button>
                        </div>
                        <div class="p-1">
                            <button class="btn btn-primary">
                                <img src="/storage/trash.svg" alt=""/>
                            </button>
                        </div>
                        <div class="p-1">
                            <button class="btn btn-success">Study!</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    </body>
</html>
