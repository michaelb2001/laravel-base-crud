@extends('layout.base')

@section('title','modify element')

@section('content')
<form action="{{route("comics.update",$comic->id)}}" method="post" class="d-flex flex-column m-5">
    @csrf
    @method("PUT")
        <div class="form-group row">
          <label for="title" class="col-sm-2 col-form-label">title</label>
          <div class="col-sm-10">
            <input name="title" type="text" class="form-control" id="title" 
            value="{{old("title")??$comic->title}}">
            @error("title")
                <div class="alert alert-danger">{{ $message}}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="description" class="col-sm-2 col-form-label">description</label>
          <div class="col-sm-10">
            <textarea name="description" type="text" class="form-control">{{old("title")??$comic->description}}</textarea>
            @error("description")
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
            <label for="thumb" class="col-sm-2 col-form-label">thumb</label>
            <div class="col-sm-10">
              <input name="thumb" type="text" class="form-control" value="{{old("thumb")??$comic->thumb}}">
              @error("thumb")
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
        <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">price</label>
        <div class="col-sm-10">
            <input name="price" type="text" class="form-control" name="price" class="form-control" 
            value="{{old("price")??$comic->price}}">
            @error("price")
                  <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="form-group row">
            <label for="series" class="col-sm-2 col-form-label">series</label>
            <div class="col-sm-10">
                <input name="series" type="text" class="form-control" name="series" class="form-control" 
                value="{{old("series")??$comic->series}}">
                @error("series")
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>
            <div class="form-group row">
                <label for="sale_date" class="col-sm-2 col-form-label">sale_date</label>
                <div class="col-sm-10">
                    <input name="sale_date" type="text" class="form-control" name="sale_date" class="form-control"
                    value="{{old("sale_date")??$comic->sale_date}}">
                    @error("sale_date")
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">type</label>
                <div class="col-sm-10">
                    <input name="type" type="text" class="form-control" name="type" class="form-control"
                    value="{{old("type")??$comic->type}}">
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
@endsection