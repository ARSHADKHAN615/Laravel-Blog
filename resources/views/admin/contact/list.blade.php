@extends('admin.layout.layout');
@section('page_title','Contact List')
@section('container')

    <div class="">
	  <div class="page-title">
		 <div class="title_left">
			<h4>Contacts</h4>
			{{-- <h2><a href="/admin/page/add">Add Page</a></h2> --}}
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
									<th>NAME</th>
									<th>Email</th>
									<th>PHONE</th>
									<th>MESSEGE</th>
									<th>DATE</th>
								 </tr>
							  </thead>
							  <tbody>
								  @foreach ($results as $item)	  
								  <tr>
									 <td>{{$item->id}}</td>
									 <td>{{$item->name}}</td>
									 <td>{{$item->email}}</td>
									 <td>{{$item->phone}}</td>
									 <td>{{substr($item->message,0,20)}}...</td>
									 <td>{{$item->adden_on}}</td>
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