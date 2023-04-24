@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Contact Page </h4>

                <form method="post" action="{{ route('update.contact') }}" >
                @csrf

                <input type="hidden" name="id" value="{{ $contact->id }}">

            <div class="row mb-3">
                <div class="col-sm-10">
                    <input name="footer_id" class="form-control" type="hidden" value="{{ $contact->footer_id }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Map Link</label>
                <div class="col-sm-10">
                    <input name="map" class="form-control" type="text" value="{{ $contact->map }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">  Contact Message</label>
                <div class="col-sm-10">
                    <input name="message" class="form-control" type="text" value="{{ $contact->message }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->






<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Footer Page">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>




@endsection
