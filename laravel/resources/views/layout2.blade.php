<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>@import "https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css";</style>
    <link rel="stylesheet" href="css/mystyles.scss">
    <title>Home</title>
    <?php
        $randomPhoto = rand(1,11);
    ?>
</head>
<body>

    <section class="hero is-fullheight has-bg-img" style="background: url('/img/backgrounds/<?php echo($randomPhoto) ?>.jpg')center center; background-size:cover;">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <header class="navbar">
              <div class="container">
                <div class="navbar-brand">
                  <a class="navbar-item">
                    <img src="/img/logo.png" alt="Logo">
                  </a>
                  <span class="navbar-burger" data-target="navbarMenuHeroC">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </div>
                <div id="navbarMenuHeroC" class="navbar-menu">
                  <div class="navbar-end">
                    <a class="navbar-item" href="/">
                      Home
                    </a>
                    <a class="navbar-item" href="/articles">
                      Form Testing
                    </a>
                    <a class="navbar-item">
                      Documentation
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <span class="navbar-item">
                            <a class="button is-inverted">
                            <span :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </span>
                            </a>
                          </span>
                    </form>
                  </div>
                </div>
              </div>
            </header>
          </div>
      @yield('content')
</body>
</html>
