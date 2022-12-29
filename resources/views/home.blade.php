@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-center">
    @forelse ($contacts as $contact)
      <div class="card text-center mx-2" style="width: 20rem;">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <h3 class="card-title">{{ $contact->name }}</h3>
          <h4 class="card-text">{{ $contact->phone_number }}</h4>
          <div>
            <a href="#" class="btn btn-danger me-2">Delete</a>
            <a href="#" class="btn btn-info">Edit</a>
          </div>
        </div>
      </div>
    @empty
      <div class="card text-center" style="width: 20rem;">
        <div class="card-body">
          <h4 class="card-text">You don't have contacts</h4>
          <a href="{{ route('contact.create') }}" class="btn btn-info">Add a contact</a>
        </div>
      </div>
    @endforelse
  </div>
@endsection
