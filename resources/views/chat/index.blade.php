@extends('layouts.admin')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Stats</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('url', []) }}">Home</a></li>
                        <li class="breadcrumb-item active">Questions</li>
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
                <h3 class="card-title">List of Questions</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div> @include('flash::message')
            <div class="card-body"><a href="{{ url(route('chat.create')) }}" class="btn btn-primary "> <i
                        class="fa fa-plus"></i> new Question</a>


                <div class="card">

                </div>
                <!-- /.card-body -->


                @if ($chats)
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($chats as $record)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->answer }}</td>


                                        <td><a href="{{ url(route('chat.edit', $record->id)) }}"
                                                class="btn btn-warning "> <i class="fa fa-edit"></i></a></td>
                                        <td>

                                            {!! Form::open([
                                                'action' => ['App\Http\Controllers\ChatController@destroy',$record->id],
                                                  'method' => 'delete'
                                            ]) !!}
                                            {!! Form::token() !!}
                                            <button type="submit" class="btn btn-danger "> <i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}




                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        No questions
                    </div>
                @endif
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
