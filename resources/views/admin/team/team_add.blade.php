@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Team Page </h4>

            <form method="post" action="{{ route('store.team') }}" enctype="multipart/form-data">
                @csrf



            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Team full Name</label>
                <div class="col-sm-10">
                    <input name="name" class="form-control" type="text" id="example-text-input">

                    @error('testionial_name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Designation </label>
                <div class="col-sm-10">
                    <input name="designation" class="form-control" type="text" id="example-text-input">

                    @error('client_name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Facebook link</label>
                <div class="col-sm-10">
                    <input name="facebook" class="form-control" type="text" id="example-text-input">

                    @error('testionial_name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Whastapp</label>
                    <div class="col-sm-10">
                        <input name="whatsapp" class="form-control" type="text" id="example-text-input">

                        @error('testionial_name')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Team Image </label>
                <div class="col-sm-10">
           <input name="team_image" class="form-control" type="file" id="image">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
  <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/noimage.png') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Team Data">
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
