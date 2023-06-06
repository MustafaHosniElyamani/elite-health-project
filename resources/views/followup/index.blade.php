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
                        <li class="breadcrumb-item active">Follow-ups</li>
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
                <h3 class="card-title">List of followups</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div> @include('flash::message')
            <div class="card-body">


                <div class="card">

                </div>
                <!-- /.card-body -->


                @if (!$followups->isEmpty())
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>patient</th>
                                    <th>Message</th>
                                    <th>file</th>
                                    <th>Add reply</th>
                                    <th>Edit reply</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($followups as $record)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->patient->name }}</td>
                                        <td>{{ $record->message }}</td>
                                        <td> <a href="{{ route('files',['filename'=> $record->file,'id'=>$record->id]) }}">Download</a></td>
                                        <td>
                                            @if ($record->reply)
                                                Already replied
                                            @else
                                            <a href="{{ url(route('followup.edit', $record->id)) }}"
                                                class="btn btn-warning ">
                                                add reply</a>
                                            @endif


                                        </td>

                                        <td>

                                            @if ($record->reply)
                                                <a href="{{ url(route('followup.edit', $record->id)) }}"
                                                    class="btn btn-warning ">
                                                    edit reply</a>
                                        </td>
                                    @else
                                        no reply yet
                                @endif




                                <td>

                                    {!! Form::open([
                                        'action' => ['App\Http\Controllers\FollowupController@destroy', $record->id],
                                        'method' => 'delete',
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
                No follow up
            </div>
            @endif
        </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
