@extends('admin/layout.layout')

@section('page_title','Manage Post')

@section('container')

   <div class="">
                  <div class="page-title">
                     <div class="title_left">
                        <h3>Manage Post</h3>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="x_panel">
                           <div class="x_content">
                              <br />
                              <form class="form-horizontal form-label-left" method="POST" action="{{url("admin/post/update/".$results[0]->id)}}" enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="text" class="form-control" placeholder="Title" name="title" value="{{$results[0]->title}}">
                                       @error('title')
                                       {{$message}}    
                                       @enderror
                                    </div>
                                 </div>
                                   <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Slug</label>
                                            <div class="col-md-9 col-sm-9 ">
                                               <textarea class="form-control"  name="slug">{{$results[0]->slug}}</textarea>
                                               @error('slug')
                                               {{$message}}    
                                               @enderror
                                            </div>
                                         </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Short Desc</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <textarea class="form-control"  name="short_desc">{{$results[0]->short_desc}}</textarea>
                                       @error('short_desc')
                                       {{$message}}    
                                       @enderror
                                    </div>
                                 </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Desc</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <textarea class="form-control"  name="long_desc">{{$results[0]->long_desc}}</textarea>
                                       @error('long_desc')
                                       {{$message}}    
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Image</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="file" name="image">
                                       @error('image')
                                       {{$message}}    
                                       @enderror
                                    </div>
                                 </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Post Date</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="date" name="post_date" class="form-control" value="{{$results[0]->post_date}}">
                                       @error('post_date')
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