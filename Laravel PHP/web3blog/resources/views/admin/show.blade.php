@extends('main')

@section('title', '| Profile Page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

            <h2>{{ $user->name }}'s Activity</h2>

        </div>
    </div>

<div id="backend-comments" style="margin-top: 50px;">
    <h3>Posts by User: <strong>{{ $user->name }}</strong></h3>
    <hr>
        <div class="col-md-12">
        <table class="table">
            <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
            </thead>

            <tbody>

                @foreach ($posts as $post)
                @if($post->user_id == $user->id)
                <tr>
                    <th>{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</td>
                    <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                    <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a><a href="{{ url('/api/landmark/'. $post->id) }}" class="btn btn-default btn-sm">API</a></td>
                </tr>
                @endif
                @endforeach

            </tbody>
        </table>
            
        </div>    
    </div>
<br><br><br>
    <div id="backend-comments" style="margin-top: 50px;">
                <h3>Comments by User: <strong>{{ $user->name }}</strong></h3>
                <hr>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Comment</th>
                            <th>Post Id</th>
                            <th width="70px"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($comments as $comment)
                        @if ($user->email == $comment->email)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>{{ $comment->post_id }}</td>
                            <td>
                                <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>




</div>

@endsection