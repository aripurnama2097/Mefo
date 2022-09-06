

@extends('layouts.main') 

@section('container')
<article>
    @foreach($posts as $post)
     <h2>
        <a href="/posts/"> {{$post["title"]}}</a>
     </h2>
      <p> {{$post["body"]}}</p>   
    @endforeach
</article>

@endsection