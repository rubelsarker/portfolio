@extends('admin.layout')
@section('admin-content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-1 pt-1 ">All Subscriber</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subscribers as $key => $subscriber)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $subscriber->email }}</td>
                        <td>{{ $subscriber->created_at->toDateString() }}</td>

                        <td class="text-center">
                            <a id="delete" href="{{route('admin.subscriber.destroy',$subscriber->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection