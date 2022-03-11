@extends('layout.base')

@section('title','comic-description')

@section('content')
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>
    <img src="{{$comic->thumb}}">

    <form action="{{route("comics.destroy", $comic->id)}}" method="POST"  onsubmit="return confirm('awant to delet this element?')">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger">cancella</button>
    </form>

    <a href="{{route("comics.index")}}"><button class="btn btn-primary ">back</button></a>
@endsection