@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
    <nav class="page-breadcrumb"></nav>
        <ol class="breadcrumb">
            <a href="{{ route('add.admin') }}" class="btn btn-inverse-info"> Add Admin </a>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Admin All</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>S1 </th>
                                        <th>Image </th>
                                        <th>Name </th>
                                        <th>Email </th>
                                        <th>Phone </th>
                                        <th>Role </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($alladmin as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <img src="{{ (!empty($item->photo)) ? url('upload/admin_images/'.$item->photo) : url('upload/no_image.jpg') }}" style="width:70px; height:40px;">
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>Roles</td>
                                        <td>
                                            <a href="" class="btn btn-inverse-warning" title="Edit"> <i data-feather="edit"></i></a>
                                            <a href="" class="btn btn-inverse-danger" id="delete"title="Delete"> <i data-feather="trash-2"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                        </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection