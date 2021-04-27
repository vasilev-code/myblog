@extends('base')
<form method='POST' action="{{route('image.add')}}" enctype="multipart/form-data">
@csrf
<input type="file" name="image">
<button type="submit">Upload</button>

</form>
