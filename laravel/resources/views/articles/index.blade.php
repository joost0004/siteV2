@extends ('layout')

@section ('content')

<section class="section">
    <div class="container" id='page'>
        <div class="">
            <a class="button is-focused" href="/articles/create">Create New</a>
        </div>

    </div>
</section>
@foreach ($article as $articles)



<div id='wrapper'>
    <div id='page' class='container'>

        <br>
<div class="card" id="wrapper">
    <header class="card-header">
      <p class="card-header-title">
        {{$articles->title}}
      </p>
      <button class="card-header-icon" aria-label="more options">
        <span class="icon">
          <a class="fas fa-angle-down" aria-hidden="true" href="/articles/{{$articles->id}}/edit">+</a>
        </span>
      </button>
    </header>
    <div class="card-content">
      <div class="content">
        <a>{{$articles->excerpt}}</a>
        <br>
      </div>
    </div>
    <footer class="card-footer">
      <a href="articles/{{$articles->id}}/edit" class="card-footer-item">Edit</a>
    </footer>
  </div>
</div>

    </div>
</div>
@endforeach

@endsection
