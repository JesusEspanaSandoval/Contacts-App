@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-center flex-wrap">
    @forelse ($contacts as $contact)
      <div class="card text-center m-2" style="width: 20rem;">
        <div class="card-body d-flex flex-column align-items-center justify-content-center">
          <a href="{{ route('contact.show', $contact->id) }}"
            class="card-title fs-3 text-decoration-none text-white">{{ $contact->name }}</a>
          <h4 class="card-text">{{ $contact->phone_number }}</h4>
          <div>
            <form action="{{ route('contact.destroy', $contact->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger me-2">Delete</button>
              <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-info">Edit</a>
            </form>
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
