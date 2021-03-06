<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>@import "https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css";</style>
    <style>
        .star::after {
            content: attr(data-end) ;
            color: red ;
        }
    </style>
    <title>Home</title>
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <img src="./img/logo.png" height="28">
          </a>

          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
              <a class="navbar-item" href="/">
                Home
              </a>

              <a class="navbar-item" href="/articles">
                Form Testing
              </a>
              </div>
            </div>




<div class="navbar-end">
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                  </a>
                </div>

                    <div class="navbar-item has-dropdown is-hoverable">
                      <a class="navbar-link">
                        <div>{{ Auth::user()->name }}</div>
                      </a>

                      <div class="navbar-dropdown">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                      </div>
                    </div>
                    </div>
            </div>
          </div>
        </nav>
      @yield('content')
</body>
</html>
