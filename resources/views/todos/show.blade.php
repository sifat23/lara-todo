@extends ('layouts.app')

@section ('content')
    <div class="ml-auto mt-3 bd-highlight">
        <a href="/" class="btn btn-outline-secondary">Go Back</a>
    </div>
    <div class="card my-3">
        <div class="card-title">
            <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <h1>{{ $todo->title }}</h1>
                </div>
                <div class="p-2 bd-highlight">
                    <span class="badge badge-danger mt-3 style">{{ $todo->due }}</span>
                </div>
                <div class="ml-auto p-2 bd-highlight">
                    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-outline-info">Edit</a>
                </div>
            </div>
            <hr>
        </div>
        <div class="card-body">
            <p>{{ $todo->body }}</p>
        </div>
    </div>
@endsection
