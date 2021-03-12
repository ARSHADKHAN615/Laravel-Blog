@extends('admin.layout.layout');
@section('page_title','Page List')
@section('container')

    <div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Pages</h4>
			<h2><a href="/admin/page/add">Add Page</a></h2>
		 </div>
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		 <div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
			   <div class="x_content">
				  <div class="row">
					 <div class="col-sm-12">
						 <div class="col-sm-12 text-center"><h1>{{@session("msg")}}</h1></div>
						<div class="card-box table-responsive">
						   <table id="datatable" class="table table-striped table-bordered" style="width:100%">
							  <thead>
								 <tr>
									<th>S.No</th>
									<th  width="10%">NAME</th>
									<th  width="20%">SLUG</th>
									<th  width="30%">DESCRIPTION</th>
									<th  width="10%">Date</th>
									<th>Action</th>
								 </tr>
							  </thead>
							  <tbody>
								  @foreach ($results as $item)	  
								  <tr>
									 <td>{{$item->id}}</td>
									 <td>{{$item->name}}</td>
									 <td>{{$item->slug}}</td>
									 <td>{{substr($item->description,0,100)}}...</td>
									 <td>{{$item->adden_on}}</td>
									 <td> 
										<a href="{{url('admin/page/delete/'.$item->id)}}"  class="btn btn-danger text-white">Delete</a>
										<a href="{{url('admin/page/edit/'.$item->id)}}" class="btn btn-primary text-white">Edit</a>
									 </td>
								  </tr>
								 @endforeach
							  </tbody>
						   </table>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
   </div>
@endsection