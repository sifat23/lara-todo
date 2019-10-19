@extends ('layouts.app')

@section ('content')
    <div class="card mt-3">
        <div class="card-title mt-3 ">
            <div class="d-flex bd-highlight mb-3">
                <div class="mr-auto pl-3 bd-highlight">
                    <h1 class="">Create Todo</h1>
                </div>
                <div class="pr-3 bd-highlight">
                    <a href="/" class="btn btn-outline-secondary">Go Back</a>
                </div>
            </div>
            <hr>
        </div>
        <div class=" mx-3">
            {!! Form::open(['action' => "TodosController@store", 'method' => 'post']) !!}
                {{ Form::bsText('title') }}
                {{ Form::bsTextArea('body') }}
                {{ Form::bsText('due') }}
                {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary'] )}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
