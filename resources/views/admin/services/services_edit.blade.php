@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    }
</style>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Edit Service Page </h4>

            <form method="post" action="{{ route('update.service') }}" enctype="multipart/form-data">
                @csrf

            <input type="hidden" name="id" value="{{ $services->id }}">

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Service Category Name</label>
                <div class="col-sm-10">
        <select name="serviceCategory_id" class="form-select" aria-label="Default select example">
            <option selected="">Open this select menu</option>
            @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ $cat->id == $services->serviceCategory_id ? 'selected' : '' }} >{{ $cat->service_category }}</option>
            @endforeach
            </select>
               </div>
            </div>
            <!-- end row -->

        

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Service Title </label>
                <div class="col-sm-10">
                    <input name="service_title" value="{{ $services->service_title }}" class="form-control" type="text" id="example-text-input">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Published date </label>
                <div class="col-sm-10">
                    <input name="date" value="{{ $services->date }}" class="form-control" type="date" >
                </div>
            </div>
            <!-- end row -->



            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Service Description </label>
                <div class="col-sm-10">
      <textarea id="elm1" name="service_description">
      {{ $services->service_description }}
      </textarea>
                </div>
            </div>
            <!-- end row -->

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Service Image </label>
                <div class="col-sm-10">
           <input name="service_image" class="form-control" type="file" id="image">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
  <img id="showImage" class="rounded avatar-lg" src="{{ asset($services->service_image) }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Service Data">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
