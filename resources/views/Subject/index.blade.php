@extends('layouts.app')

@section('content')


                                        
                                        <!-- Page-body start -->
                                        <div class="page-body">
                                        @if (Session::has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{Session::get('success')}}

                                            </div>
                                                
                                            @endif
                                            <!-- Row start -->
                                            <div class="row">
                                                @if(auth()->user()->role_id=="1")

                                                <div class="col-md-6 col-xl-3">
                                                    <a href="{{route('Subject.create')}}">
                                                    <div class="card bg-m-orange order-card m-round">
                                                        <div class="card-block ">
                                                            <h6 class="m-b-20"></h6>
                                                            <h4 class="text-center"><i class='bx bx-plus' ></i></i><br><span>Add Subject</span></h4>
                                                            <p class="m-b-20"></p>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                                @endif
                                            
                                             @foreach ($subject as $subject)
                                                 
                                            
                                                <div class="col-md-6 col-xl-6">
                                            <div class="card m-round">
                                            <div class="card-header">
                                               <h5 class="m-blue1">{{$subject->class->name}}</h5>
                                               @if(auth()->user()->role_id=="1")

                                               <div class="card-header-right">
                                                    <form action="{{ route('Subject.destroy',$subject->id) }}" method="POST" onsubmit="return confirm('Are You Sure You Want To Delete Student Record ?')">
                                                
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{route('Subject.edit',$subject->id)}}"><button class="btn btn-xs bg-m-orange" style="padding:2px;margin:none;"><i class='bx bx-trash'></i></button></a>
                                                    </form>
                                               
                                                    <br>

                                                    <a href="{{route('Subject.edit',$subject->id)}}"><button class="btn btn-xs bg-m-orange" style="padding:2px;margin:none;"><i class='bx bx-pencil'></i></button></a>
                                               </div>
                                           @endif
                                            </div>
                                            <div class="card-block">
                                             <table class="table table-striped">
                                                <br>
                                                <br>
                                             <tr class="m-dblue"><td><b>Subject Name</b></td><td><b>Marks</b></td></tr>
                                            
                                            <tr><td class="" style="">{{$subject->name}}</td><td>{{$subject->Marks}}</td></tr>
                                            </table>
                                            <br><span style="font-size:9px;color:#333; font-style: italic; ">By: {{$subject->user->name}}</span>
                                            <br><span style="font-size:9px;color:#333; font-style: italic;">at: {{Date('d-m-Y',$subject->updated_it)}}</span>
                                            </div>
                                            </div>
                                            </div>

                                                
                                            @endforeach
                                             
                                            </div>
                                        
                                            <!-- Row end -->
                                            <!-- Row start -->
                                            
                                                    <!-- Row end -->
                                        </div>
                                        <!-- Page-body end -->
                                    </div>
                                </div>
           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
@endsection