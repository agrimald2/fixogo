<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('head')
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
    @include('loader')
    @include('navigation')
    @include('header')
    @include('services')
    @include('details')
    @include('pricing')
    @include('video')
    @include('form')
    @include('footer')
    @include('floatings')
</body>
</html>
