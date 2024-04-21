@extends('layouts.app')


@section('content')  


                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->

                                        @if (Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('success')}}

                                        </div>
                                            
                                        @endif
                                    <div class="row">
                                       @if ($Class->count()>0)
                                           
                                       @foreach ($Class as $class)
                                           
                                      
                                        
										      <div class="col-md-6 col-xl-3">
											    <a href="{{route('Classes.show',$class->id)}}">
                                                <div class="card bg-m-dblue order-card m-round">
                                                    <div class="card-block ">
                                                        <h6 class="m-b-20">{{$class->name}}</h6>
                                                        <h2 class="text-left"><i class="fa fa-graduation-cap f-right"></i><span>0</span></h2>
                                                        <p class="m-b-0"><span class="f-left">STUDENTS</span></p>
                                                    </div>
                                                    {{-- <br><span style="font-size:9px;color:#333; font-style: italic; ">By: {{$class->user}}</span> --}}
                                                    <br><span style="font-size:9px;color:#dad1d1; font-style: italic;">  #at: {{Date('d-m-Y',$class->updated_it)}}</span>
                                                </div>
												</a>
                                        
                                            </div>
                                        @endforeach
                                         @endif
										  
                                         @if(auth()->user()->role_id=="1")

										    <div class="col-md-6 col-xl-3">
											    <a href="{{route('Classes.create')}}">
                                                <div class="card bg-m-orange order-card m-round">
                                                    <div class="card-block ">
                                                        <h6 class="m-b-20"></h6>
                                                        <h4 class="text-center"><i class="ti-plus"></i><br><span>Add New</span></h4>
                                                        <p class="m-b-20"></p>
                                                    </div>
                                                </div>
												</a>
                                            </div>
                                            @endif
											
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

