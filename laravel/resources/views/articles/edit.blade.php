@extends('layout')

@section('content')

    <section class="section"></section>
    <div id='wrapper'>
        <div id='page' class='container'>
            <h1 class='has-text-weight-bold is-size-4'>Edit Article</h1>

            <form method='POST' action="/articles">
                @method('PUT')
                @csrf


                 <div class='field'>
                     <label class='label' for='title'>Title</label>

                     <div class='control'>
                     <input
                     class='input @error('title') is-danger @enderror'
                     type='text'
                     name='title'
                     id='title'
                     value='{{$article->title }}'>

                     @error('title')
                         <p class="help is-danger">{{$errors->first('title')}}</p>
                     @enderror
                 </div>
                 </div>



                 <div class='field'>
                     <label class='label' for='excerpt'>Excerpt</label>

                     <div class='control'>
                     <textarea
                     class='textarea @error('excerpt') is-danger @enderror'
                     name='excerpt'
                     id='excerpt'
                     >{{$article->excerpt }}</textarea>

                     @error('excerpt')
                         <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                     @enderror
                 </div>
                 </div>



                 <div class='field'>
                     <label class='label' for='body'>Body</label>

                     <div class='control'>
                     <textarea
                     class='textarea @error('body') is-danger @enderror'
                     name='body'
                     id='body'
                     >{{$article->body }}</textarea>

                     @error('body')
                         <p class="help is-danger">{{$errors->first('body')}}</p>
                     @enderror
                 </div>
                 </div>

                 <div classs='field is-grouped'>
                     <div class="control">
                         <button class='button is-link' type='submit'>Submit</button>
                     </div>
                 </div>

             </form>
            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('DELETE')
                <button class='button is-link' type="submit">Delete</button>
            </form>
        </div>
    </div>

@endsection
