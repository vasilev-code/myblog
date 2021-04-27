@extends('base')
@section('adminpanel')
<form method="post" action="{{route('post-form')}}" enctype="multipart/form-data">
@csrf

    <textarea class="container" id="postTitle" name="postTitle"></textarea>
    <textarea class="container" id="postText" name="postText" rows="10"></textarea>
    <button class="btn btn-primary" type="submit">Отправить</button>
    
</form>
@endsection