<!DOCTYPE html>
   <html lang="fr">
        <head>
            <title>big_store</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initialscale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        </head>
        <body>
            <a href="{{route('Familles.index')}}"><button class="btn btn-success">Liste des Famille</button></a><br/><br/>
            <a href="{{route('Produits.index')}}"><button class="btn btn-primary">Liste des Produit</button></a><br/><br/>
            <div class="container mt-5">
                @yield('content')
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>
    </html>
