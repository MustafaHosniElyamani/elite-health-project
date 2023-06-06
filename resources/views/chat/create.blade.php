@extends('layouts.admin')
@inject('model', 'App\Models\Question')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Question</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('url', []) }}">Home</a></li>
                        <li class="breadcrumb-item active">Add Question</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Question</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">



                @include('partials.validation_errors')

                {!! Form::model($model, [
                    'action' => ['App\Http\Controllers\ChatController@store'],
                    'method' => 'post',
                ]) !!}
<div class="form-group">
    <label for="name">Name of question</label>
    {!! Form::text('name',null,[
        'class' => 'form-control '
    ]) !!}
</div>
                <div class="form-group">
                    <label for="answer">Answer</label>
                    {!! Form::textarea('answer', null, [
                        'class' => 'form-control',
                        'rows' => 8,
                    ]) !!}
                </div>





                <div class="form-group">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
        <!-- /.card -->

    </section>
@endsection
