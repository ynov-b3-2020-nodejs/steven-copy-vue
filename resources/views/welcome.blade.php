@extends('layouts.app')

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @extends('contacts')
    <p class="text-center">Laissez-nous un commentaire !</p>
    <comment-form></comment-form>
</head>

<body>
<div id="app">


</div>
<script src="/js/app.js"></script>
</body>
</html>
