<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>My_bookshelf</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
        </x-slot>
        <style>
            body{ 
                font-size:20pt; text-align: center; 
                
                margin:0 auto; width:80%; background-color:#f5deb3;
            }
            h2{
                font-size:18pt;
            }
        </style>
   <body>
       @yield('content')
   </body>
</x-app-layout>