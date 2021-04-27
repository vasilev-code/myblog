@extends('base')

           @section('main')
            @foreach($posts as $el)
                <div class="row">
                
                    <div class="card w-100">
                    <div class="card-header">
                    
                    <!-- <form method="post" action="image-upload" target="_blank">
                    @csrf
                    <input type="file" id='image' name="image" class="form-control">
                    <button type="submit" class="btn btn-success">Upload Image</button>
    
                    </form> -->
                    <!-- <img src="{{asset('/images' . $el->image_path)}}" class="d-block w-50 h-50 mx-auto carousel1"> -->
                    
                    <!-- <form method="POST" action="{{route('post-form')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name='image'>
                    <button type="submit">Upload</button>
                    </form> -->
                    </div>
                    <div class="card-body">
                    <h4 class="card-title" id="cart-title1">
                    
                    {{$el->postTitle}}
                    
                    </h4>
                    <p class="card-text">
                    
                    {{$el->postText}}
                   
                    </p>
                    </div>
                    </div>
                    </div>
                    @endforeach
                    <span class="paginator">
                    

                    {{ $posts->links() }}
                    </span>
                    @endsection
            


