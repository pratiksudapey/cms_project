@extends('admin.home')

@section('main')
    <div class="container" style="padding: 100px">
        <div class="row">
            <div class="col-md-10">
                <form action="{{ url('add_service') }}" method="POST">
                    @csrf
                    <div>
                        <label for="service_name">Service Name</label>
                        <input type="text" name="service_name"  class="form-control" required>
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control"  required>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control"  required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>

                </form>
            </div>
        </div>
    </div>
@endsection