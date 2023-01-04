@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Show <a>{{ $contact->name }}</a></div>

          <div class="card-body">
            <p>Phone number: <a class="text-decoration-none"
                href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a></p>
            <p>Email: <a class="text-decoration-none" href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
            <p>Age: <a>{{ $contact->age }}</a></p>
            <p>Created at: <a>{{ $contact->created_at }}</a></p>
            <p>Updated at <a>{{ $contact->updated_at }}</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
