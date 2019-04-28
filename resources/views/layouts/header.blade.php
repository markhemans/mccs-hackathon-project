<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">MCCS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/students') }}">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/resources') }}">Resources</a>
              </li>
              <li class="nav-item">
                    <a class="btn btn-login btn-sm nav-link" href="{{ url('/login') }}" tabindex="-1" aria-disabled="true">Login</a>
              </li>
            </ul>
          </div>
        </div>

      </nav>

      <!-- Code for Login -->
      <!-- @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a href="{{ url('/about') }}">About</a>
              @else
                  <a href="{{ route('login') }}">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          </div>
      @endif -->
