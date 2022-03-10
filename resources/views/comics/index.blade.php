@extends('layout.base')

@section('title','comics-table')

@section('content')

<a href="{{route("comics.create")}}"><button class="btn btn-warning rounded-pill m-2">crea elemento </button></a>
<table class="table table-bordered p-5">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">thumb</th>
        <th scope="col">price</th>
        <th scope="col">series</th>
        <th scope="col">sale_date</th>
        <th scope="col">type</th>
      </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</th>
            <td>{{$comic->description}}</th>
            <td><img src="{{$comic->thumb}}" alt=""></th>
            <td>{{$comic->price}}</th>
            <td>{{$comic->series}}</th>
            <td>{{$comic->sale_date}}</th>
            <td>{{$comic->type}}</th>
            <td><a href="{{route("comics.show",$comic->id)}}"><button class="btn btn-primary rounded-pill my-2">info</button></a>
            <a href="{{route("comics.edit",$comic->id)}}"><button class="btn btn-warning rounded-pill my-2">modify</button></a>
            <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-danger">delete</button>
          </form>
        </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection