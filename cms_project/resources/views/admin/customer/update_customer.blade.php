@extends('admin.home')
@section('main')
    <div class="container" style="padding: 100px">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="alert" data-dismiss="close"></button>
                    {{ session()->get('message') }}

                </div>
                @endif
                <form action="{{ url('customer_update',$customer->id) }}" method="post">
                    @csrf
                    <div>
                        <label style="padding:10px " for="name"> Customer Name</label>
                        <input type="text" name="name" value="{{ $customer->name }}" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="contact_no"> Customer Number</label>
                        <input type="number" name="contact_no"  value="{{ $customer->contact_no }}" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="email"> Customer Email</label>
                        <input type="text" name="email"  value="{{ $customer->email }}" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="address"> Customer Address</label>
                        <input type="text" name="address"  value="{{ $customer->address }}" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="company"> Customer Company</label>
                        <input type="text" name="company"  value="{{ $customer->company }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">save</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection