@extends('layout.base')

@section('title','form')

@section('content')
    <form action="{{route("comics.store")}}" method="post" class="d-flex flex-column m-5">
        @csrf
            <div class="form-group row">
              <label for="title" class="col-sm-2 col-form-label">title</label>
              <div class="col-sm-10">
                <input name="title" type="text" class="form-control @error("title") is-invalid @enderror" id="title" 
                value="{{old("title")}}">
                @error("title")
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="description" class="col-sm-2 col-form-label">description</label>
              <div class="col-sm-10">
                <textarea name="description" type="text" class="form-control  @error("description") is-invalid @enderror">{{old("title")}}</textarea>
                @error("description")
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
                <label for="thumb" class="col-sm-2 col-form-label">thumb</label>
                <div class="col-sm-10">
                  <input name="thumb" type="text" class="form-control
                  @error("thumb") is-invalid @enderror">
                  @error("thumb")
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">price</label>
            <div class="col-sm-10">
                <input name="price" type="text" class="form-control" name="price" class="form-control
                @error("price") is-invalid @enderror">
                @error("price")
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            </div>
            <div class="form-group row">
                <label for="series" class="col-sm-2 col-form-label">series</label>
                <div class="col-sm-10">
                    <input name="series" type="text" class="form-control" name="series" class="form-control
                    @error("series") is-invalid @enderror">
                    @error("series")
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="form-group row">
                    <label for="sale_date" class="col-sm-2 col-form-label">sale_date</label>
                    <div class="col-sm-10">
                        <input name="sale_date" type="text" class="form-control" name="sale_date" class="form-control
                        @error("sale_date") is-invalid @enderror">
                        @error("sale_date")
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">type</label>
                    <div class="col-sm-10">
                        <input name="type" type="text" class="form-control" name="type" class="form-control
                        @error("type") is-invalid @enderror">
                        @error("type")
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-warning rounded-pill ms-0 my-3">add</button>
              </div>
            </div>
    </form>

    @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
    @endif
@endsection