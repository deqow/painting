@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Edit Service Category Page </h4> <br><br>

            <form method="post" action="{{ route('update.service.category',$servicecategory->id) }}" >
                @csrf



            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">service Category Name</label>
                <div class="col-sm-10">
                    <input name="service_category" class="form-control" type="text" value="{{ $servicecategory->service_category }}" id="example-text-input">
                    
                </div>
            </div>
            <!-- end row -->


<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Service Category">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>




@endsection
