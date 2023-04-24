@extends('admin.admin_master')
@section('content')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Blogs All</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Blogs All Data </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Blog Category</th>
                            <th>By</th>
                            <th>Painter's image</th>
                            <th>Blog Title</th>
                            <th>Blog description</th>
                            <th>Blog Image</th>
                            <th>Action</th>

                        </thead>


                        <tbody>
                        	@php($i = 1)
                        	@foreach($blogs as $item)
                        <tr>
                            <td> {{ $i++}} </td>
                             <td> {{ $item['category']['blog_category'] }} </td>
                             <td> {{ $item['team']['name'] }} </td>

                             @if($item['team']['team_image'] == null)
                             <td><img src="{{ asset('upload\default.jpg') }}" style="width: 60px; height: 50px;"> </td>
                             @else
                             <td><img src="{{ asset($item['team']['team_image']) }}" style="width: 60px; height: 50px;"> </td>
                             @endif




                            <td> {{ $item->blog_title }} </td>
                            <td> {!! Str::limit($item->blog_description, 30)  !!} </td>
                            <td> <img src="{{ asset($item->blog_image) }}" style="width: 60px; height: 50px;"> </td>

                            <td>
                                <a href="{{ route('edit.blog',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                                <a href="{{ route('delete.blog',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
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
