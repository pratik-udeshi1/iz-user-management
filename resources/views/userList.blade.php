@extends('mainLayout')

	@section('css')
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	@stop

    @section('content')

    <div class="container">
    	<section>
    		<h1 align="center">User List</h1>
    		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addEditUserModal">Add New User</button>
    	</section>
    </div>

    <p></p>
    <p></p>

	<div class="container">
		<div class="row">
		<table id="userListTbl" class="table table-striped table-bordered" style="width:100%">
	        <thead>
	            <tr>
	                <th>#</th>
	                <th>Name</th>
	                <th>Email</th>
	                <th>Phone</th>
	                <th>City</th>
	                <th>Action</th>
	            </tr>
	        </thead>
	        <tbody>
	        	@foreach ($users as $user)
	            	<tr>
		                <td>{{$loop->iteration}}</td>
		                <td>{{$user->name}}</td>
		                <td>{{$user->email}}</td>
		                <td>{{$user->phone}}</td>
		                <td>{{$user->city}}</td>
		                <td>
		                	<button type="button" class="btn btn-primary addEditUserModal" data-toggle="modal" data-target="#addEditUserModal" userId="{{$user->id}}">Edit</button>
		                	<button type="button" class="btn btn-danger deleteUserBtn" userId="{{$user->id}}">Delete</button>
		                </td>
	            	</tr>
	            @endforeach
	        </tbody>
	    </table>
		</div>
	</div>

    @include('userModalPopup')

@stop

@section('scripts')
	<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/user.js') }}"></script>
@stop