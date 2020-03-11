@extends('main')
@section('title', '| Homepage')
@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
          <h1>Bulgaria Landmarks!</h1>
          <p class="lead">Explore our country and share your experience.</p>
        </div>
        </div>
      </div>
      <!--End of jumbotron-->
       <div class="row">
         <div class="col-md-12">

         @foreach($posts as $post)
           <div class="post">
             <h3>{{ $post->title }}</h3>
             <p>{{ substr(strip_tags($post->body), 0,100) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : ""}}</p>
             <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
           </div>

           <hr>

           @endforeach

         </div>
       </div>
@endsection