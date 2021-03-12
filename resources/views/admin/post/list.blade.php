@extends('admin.layout.layout');
@section('page_title','Post List')
@section('container')

    <div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Post</h4>
			<h2><a href="/admin/post/add">Add Post</a></h2>
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
									<th width="10%">S.No</th>
									<th width="10%">Title</th>
									<th width="30%">Short Desc</th>
									<th width="10%">Image</th>
									<th width="10%">Date</th>
									<th width="20%">Action</th>
								 </tr>
							  </thead>
							  <tbody>
								  @foreach ($results as $item)	  
								  <tr>
									 <td>{{$item->id}}</td>
									 <td>{{$item->title}}</td>
									 <td>{{$item->short_desc}}</td>
									 <td><img src="{{asset('storage/post/'.$item->image)}}" alt="" width="100px">
										 </td>
									 <td>{{$item->post_date}}</td>
									 <td> 
										<a href="{{url('admin/post/delete/'.$item->id)}}"  class="btn btn-danger text-white">Delete</a>
										<a href="{{url('admin/post/edit/'.$item->id)}}" class="btn btn-primary text-white">Edit</a>
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