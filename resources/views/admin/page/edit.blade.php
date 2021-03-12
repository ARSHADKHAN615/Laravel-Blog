@extends('admin/layout.layout')

@section('page_title','Manage Pages')

@section('container')

   <div class="">
                  <div class="page-title">
                     <div class="title_left">
                        <h3>Manage Pages</h3>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="x_panel">
                           <div class="x_content">
                              <br />
                              <form class="form-horizontal form-label-left" method="POST" action="{{url("admin/page/update/".$results[0]->id)}}">
                                 @csrf
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Name</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="text" class="form-control"  name="name" value="{{$results[0]->name}}">
                                       @error('name')
                                       {{$message}}    
                                       @enderror
                                    </div>
                                 </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Short Desc</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <textarea class="form-control"  name="slug">{{$results[0]->slug}}</textarea>
                                       @error('slug')
                                       {{$message}}    
                                       @enderror
                                    </div>
                                 </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <textarea class="form-control"  name="description">{{$results[0]->description}}</textarea>
                                       @error('description')
                                       {{$message}}    
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="ln_solid"></div>
                                 <div class="form-group">
                                    <div class="col-md-9 col-sm-9  offset-md-3">
                                       <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
@endsection