@extends('admin.home')

@section('main')
    <div class="container-fluid mx-10" style="padding:100px;color:white;">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Service Name</th>
                            <th> Price</th>
                            <th>Description</th>
                   
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($service as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->service_name }}</td>
                                <td>{{ $service->price }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <a href="{{ url('update_customer',$service->id) }}" class="btn btn-success">update</a>
                                </td>
                                <td>
                                    <a href="{{ url('delete_customer',$service->id) }}" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection