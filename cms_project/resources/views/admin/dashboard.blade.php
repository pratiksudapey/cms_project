@extends('admin.home')

@section('main')
    <div class="container-fluid" style="padding: 100px">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th> Name</th>
                            <th>Contact</th>
                            <th>Company</th>
                            <th>Service</th>
                            <th>Start date </th>
                            <th>Expire date </th>
                            <th>Total Price</th>
                            <th>Total Pay</th>
                            <th>Due</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($transaction as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->customer->name }}</td>
                                <td>{{ $transaction->customer->contact_no }}</td>
                                <td>{{ $transaction->customer->company }}</td>
                                <td>{{ $transaction->service->service_name }}</td>
                                <td>{{ $transaction->customer->start_date }}</td>
                                <td>{{ $transaction->end_date }}</td>
                                <td>rs. {{ $transaction->service->price }}</td>
                                <td>rs. {{ $transaction->pay }}</td>
                                <td>rs. {{ $transaction->due }}</td>
                                <td>
                                    <a href="{{ url('sentSmS') }}" class="btn btn-primary btn-sm">sentSms</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection