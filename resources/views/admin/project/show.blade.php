@extends('admin.layout')
@section('admin-content')
    <div class="container">
        <div class="row">
           <div class="col-lg-6">
               <img src="{{URL::to($project->image)}}" class="img-fluid" alt="project_image">
           </div>
           <div class="col-lg-6">
               <div class="card">
                   <div class="card-header">
                       <h4 class="float-left">Project Details</h4>
                       <a class="btn btn-primary float-right" href="{{route('admin.portfolio.index')}}" >Back</a>
                   </div>
                   <div class="card-body">
                       <h4>{{$project->title}}</h4>
                       <p class="text-justify text-muted">{{Str::limit($project->description, 200, '...')}}</p>
                       <p>Website : {{$project->website_link}}</p>
                       <p>Rating :
                           <i  class=" bg-warning far fa-star"></i>
                           <i  class=" bg-warning far fa-star"></i>
                           <i  class=" bg-warning far fa-star"></i>
                           <i  class=" bg-warning far fa-star"></i>
                           <i  class=" bg-warning far fa-star"></i>
                       </p>
                       <p>Completed Date : {{$project->completed_date}}</p>
                       <p>Client : {{$project->type}}</p>
                       <p>
                           @if( $project->status == 1)
                               <span class="badge badge-success ">Active</span>
                           @else
                               <span class="badge badge-danger">Un Active</span>
                           @endif
                       </p>
                       <a id="delete" href="{{route('admin.portfolio.destroy',$project->id)}}" class="btn  btn-danger">DELETE</a>

                   </div>
               </div>
           </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12">
                <p class="text-muted text-justify" >{{$project->description}}</p>
            </div>
        </div>
    </div>


@endsection