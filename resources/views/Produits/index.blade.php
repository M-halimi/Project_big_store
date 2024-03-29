<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@extends('layout.app')
@section('content')
<div class="pull-right">
            <a class="btn btn-primary" href="{{ route('Produits.create') }}">Ajouter New Produit</a>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <h1 >List do Produits</h1>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Designation</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Famille</th>
            <th>Creted_at</th>
            <th>Updated_at</th>
            <th>Action</th>
        </tr>
        <tbody>
        @foreach ($produits as $produit)
        <tr>
            <td>{{$produit->id}}</td>
            <td>{{$produit->designation}}</td>
            <td>{{$produit->prix}}</td>
            <td>{{$produit->stock}}</td>
            <td>{{$produit->famille->famille}}</td>
            <td>{{$produit->created_at}}</td>
            <td>{{$produit->updated_at}}</td>
            <td>
            <form action="{{ route('Produits.destroy',$produit->id)}}" method="POST" >
                        <a class="btn btn-primary" href="{{route('Produits.edit',$produit->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </thead>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection
</body>
</html>