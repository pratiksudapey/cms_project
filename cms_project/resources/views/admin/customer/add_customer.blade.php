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
                <form action="{{ url('customer_add') }}" method="post">
                    @csrf
                    <div>
                        <label style="padding:10px " for="name"> Customer Name</label>
                        <input type="text" name="name" placeholder="name" class="form-control" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="contact_no"> Customer Number</label>
                        <input type="number" name="contact_no" placeholder="number" class="form-control" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="email"> Customer Email</label>
                        <input type="text" name="email" placeholder="email" class="form-control" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="address"> Customer Address</label>
                        <input type="text" name="address" placeholder="address" class="form-control" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="start_date"> Start Date</label>
                        <input type="date" name="start_date" placeholder="start_date" class="form-control" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="no_days"> Number of days </label>
                        <input type="text" name="no_days" placeholder="no_days" class="form-control" required>
                    </div>
                    <div>
                        <label style="padding:10px" for="company"> Customer Company</label>
                        <input type="text" name="company" placeholder="company" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">save</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection