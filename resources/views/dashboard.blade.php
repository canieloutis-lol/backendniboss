<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    @extends('layout.layout')
    @section('sidebar')
    @include('component.sidebar')
    @endsection

    @section('navbar')
    @include('component.navbar')
    @endsection

    @section('content')
    @include('component.content')
    @endsection

</body>
</html>