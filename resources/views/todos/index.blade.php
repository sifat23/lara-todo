@extends ('layouts.app')

@section ('content')
    <div class="text-center mt-3">
        <h1 class="app-title">Todo App</h1>
    </div>
    <div class="text-right my-3">
        <a href="\todos\create" class="btn btn-outline-info">Create Todo</a>
    </div>
    @include ('layouts.messages')
    @foreach ($todos as $todo)
        <div class="card my-3">
            <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <a href="/todos/{{ $todo->id }}">
                        <h3 class="mt-2 ml-2">{{ $todo->title }}</h3>
                    </a>
                </div>
                <div class="p-2 bd-highlight">
                    <span class="badge badge-danger mt-3 style">{{ $todo->due }}</span>
                </div>

                <div class="ml-auto p-2 mt-3 bd-highlight">
                    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'post']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-outline-danger'] )}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endforeach

@endsection
