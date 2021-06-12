@extends ('layout')

@section ('content')

<br>
<h4 class="top-list" style="text-align: center;">{{$article->title}}</h4>
<div class="bottom-list">
    <p>{{$article->body}}</p>
    <br>
    <a>{{$article->excerpt}}</a>
</div>
<br>

@endsection
