@extends('admin.home')
@section('main')
    <div class="container-fluid " style="padding:100px;color:white;">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Customer Name</th>
                            <th> Number</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Company Name</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->contact_no }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ $customer->company }}</td>
                                <td> <a href="{{ url('details') }}" class="btn btn-primary btn-sm">details</a></td>

                                <td>
                                    <a href="{{ url('update_customer',$customer->id) }}" class="btn btn-success">update</a>
                                </td>
                                <td>
                                    <a href="{{ url('delete_customer',$customer->id) }}" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection