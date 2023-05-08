@extends('main.layouts.app')

@section('content')
@include('main.additionals.jumbroton')
<div class="p-2"></div>
<div class="row m-md-1">
  <h4 class="fw-normal mb-3">Game Lists</h4>
  
  @foreach ($arrays as $item)
    <div class="col-md-4">
      <a href="/game/{{ $item->id }}/detail" class="text-decoration-none">
        <div class="card mb-3 w-100 shadow-sm border-0 radius-6 overflow-hidden">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="{{ asset('storage/'.$item->photo) }}" class="w-100 h-50" alt="...">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title text-dark">{{ $item->name }}</h5>
                <p style="text-align: justify; font-size: 10pt" class="card-text text-dark">{{ substr($item->description, 0,120) }}..</p>
                <p class="card-text" style="font-size: 10pt"><small class="text-muted">{{ $item->game_type->name.' - '.$item->genre->name }}</small></p>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  @endforeach

</div>
@endsection