@extends('layouts.app')

@section('content')
  <div class="d-flex flex-column">
    @forelse ($contacts as $contact)
      <div
        class="d-flex flex-column flex-md-row text-center text-md-left justify-content-md-between justify-content-center border-1 border-dark border-top border-bottom p-2">
        <div>
          <h4 class="ms-md-4">
            <a href="{{ route('contact.show', $contact->id) }}"
              class="text-white text-decoration-none">{{ $contact->name }}</a>
              <br class="d-md-none" />
            {{ $contact->phone_number }}
          </h4>
        </div>
        <form class="me-md-4" action="{{ route('contact.destroy', $contact->id) }}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger me-2">Delete</button>
          <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-info">Edit</a>
        </form>
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
