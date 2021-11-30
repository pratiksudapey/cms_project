@extends('admin.home')
@section('main')
    <div class="container" style="padding: 100px">
        <div class="row">
            <div class="col-md-8">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="alert" data-dismiss="close"></button>
                    {{ session()->get('message') }}

                </div>
                @endif
                <form action="{{ url('transaction_add') }}" method="post">
                    @csrf
        
                    <div>
                        <label for="customer_name">Customer Name</label>
                        <select name="customer_id" class="form-control" >
                            @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">
                               {{ $customer->name }} 
                            </option>
                            @endforeach

                        </select>

                                
                    </div>
                    <div>
                        <label for="service_name">Service </label>
                        <select name="service_id" class="form-control">
                            @foreach ($service as $service)
                            <option value="{{ $service->id }}">
                               {{ $service->service_name }} 
                            </option>
                            @endforeach

                        </select>

                                
                    </div>
                    <div>
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control" name="amount">
                    </div>
                    <div>
                        <label for="start_date">Start date</label>
                        <input type="date" name="start_date" class="form-control">
                    </div>
                    <div>
                        <label for="end_date">End date</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                    <div style="margin: 10px">
                        <button type="submit" class="btn btn-primary btn-sm">save</button>

                    </div>
                    
                </form>
           
            </div>
        </div>
    </div>
@endsection