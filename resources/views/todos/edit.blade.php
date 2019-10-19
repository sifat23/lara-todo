@extends ('layouts.app')

@section ('content')
    <div class="card mt-3">
        <div class="card-title mt-3 ">
            <div class="d-flex bd-highlight mb-3">
                <div class="mr-auto pl-3 bd-highlight">
                    <h1 class="">Edit Todo</h1>
                </div>
                <div class="pr-3 bd-highlight">
                    <a href="/todos/{{ $todo->id }}" class="btn btn-outline-secondary">Go Back</a>
                </div>
            </div>
            <hr>
        </div>
        <div class=" mx-3">
            {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'post']) !!}
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::bsText('title', $todo->title) }}
                {{ Form::bsTextArea('body', $todo->body) }}
                {{ Form::bsText('due', $todo->due) }}
                {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary'] )}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
