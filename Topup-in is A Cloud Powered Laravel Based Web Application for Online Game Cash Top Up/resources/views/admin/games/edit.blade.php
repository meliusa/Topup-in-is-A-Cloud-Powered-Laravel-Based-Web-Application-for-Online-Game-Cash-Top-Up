@extends('admin.layouts.main')


@section('content')
<div class="container-fluid">
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">{{ $title }}</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">{{ $title }}</li>
      </ol>
    </div>
    <div class="col-md-7 align-self-center">
      <a href="/admin/game"
        class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white"> Kembali</a>
    </div>
  </div>
  
  <!-- Row -->
  <div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-xlg-9 col-md-7">
      <div class="card">
        <!-- Tab panes -->
        <div class="card-body">
          <form class="form-horizontal form-material mx-2" action="/admin/game/{{ $arrays->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group row">
              <div class="col-md-6">
                <label class="col-md-12">Genre</label>
                <div class="col-md-12">
                  <select name="genre_id" id="id" class="form-control">
                    @foreach ($genres as $item)
                      <option value="{{ $item->id }}" {{ ($arrays->genre_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                  </select>
                  
                  @error('genre_id')
                    <span class="invalid-feedback" name="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="col-md-6">
                <label class="col-md-12">Game Type</label>
                <div class="col-md-12">
                  <select name="game_type_id" id="id" class="form-control">
                    @foreach ($types as $item)
                      <option value="{{ $item->id }}" {{ ($arrays->game_type_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                  </select>
                  
                  @error('game_type_id')
                    <span class="invalid-feedback" name="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12">Name of Game</label>
              <div class="col-md-12">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="" value="{{ $arrays->name }}">
                
                @error('name')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12">Description</label>
              <div class="col-md-12">
                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="" value="{{ $arrays->description }}">
                
                @error('description')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12">Photo</label>
              <div class="col-md-12">
                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="" value="{{ $arrays->photo }}">
                
                @error('photo')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
  
</div>
@endsection