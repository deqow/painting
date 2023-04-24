@extends('admin.admin_master')
@section('content')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Team All</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Team All Data </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Team full name</th>
                            <th>Designation</th>
                            <th>Team Image</th>
                            <th>Facebook</th>
                            <th>Whatsapp</th>

                        </thead>


                        <tbody>
                        	@php($i = 1)
                        	@foreach($team as $item)
                        <tr>
                            <td> {{ $i++}} </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->designation }} </td>
                            @if($item->team_image == null)
                            <td> <img src="{{ url('upload/noimage.png') }}" style="width: 60px; height: 50px;"> </td>
                            @else
                            <td> <img src="{{ asset($item->team_image) }}" style="width: 60px; height: 50px;"> </td>
                            @endif
                            <td> {{ $item->facebook }} </td>
                            <td> {{ $item->whatsapp }} </td>

                            <td>
   <a href="{{ route('edit.team',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
     <a href="{{ route('delete.team',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection
