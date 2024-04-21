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
                                            <div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
                                                <div class="col-md-6 col-xl-4" style=" white-space: nowrap;">
                                                
                                                
                                                <form action="allstudents.php" method="post">
                                                <input type="text" id="tags1" placeholder="Search Student" style="background:none;border:none;border-bottom:1px solid gray;padding:9px 10px 8px 10px;display:inline-block;width:80%;">
                                                <input class="button" id="idsearch" type="text" name="searchby" placeholder="ID" style="display:none;" required>
                                                <button type="submit" class="btn" name="searchid" style="background:none;border:none;border-bottom:1px solid gray;padding:9px 10px 8px 10px;display:inline-block;"><i class="ti-search"></i></button>
                                                </form>
                                                </div>
                                                <div class="col-md-6 col-xl-4">
                                                <form action="allstudents.php" method="post"  id="myform">
                                                
                                                <select class="button" name="searchby" style="background:none;border:none;border-bottom:1px solid gray;padding:9px 10px 8px 10px;width:80%;" >
                                                <option value=""> --select class-- </option>
                                                                                            <option value="119513">english</option>
                                                                                            </select>
                                                <button type="submit" name="searchclass" class="btn" style="background:none;border:none;border-bottom:1px solid gray;padding:9px 10px 8px 10px;"><i class="ti-search"></i></button>
                                                
                                                
                                                </form>
                                                </div>
                                                <div class="col-md-6 col-xl-4 f-right" style="margin-top:10px;">
                                                <a href="printinfo.php" class="f-right"><button class="btn" title="Print Details"><i class="ti-printer"></i></button></a>
                                                <a href="studentcards.php" class="f-right"><button class="btn" title="Student ID Cards"><i class="ti-id-badge"></i></button></a>
                                                <a href="allstudents.php" class="f-right"><button class="btn" title="Reload All"><i class="ti-reload"></i></button></a>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:20px;">
     
                                                @if(auth()->user()->role_id=="1")

                                                <a href="{{route('Student.create')}}">
                                                <button class="btn bg-m-blue m-white" style="float:left;text-align:center;margin:15px;width:155px;height:155px;border-radius:50%;">
                                                <i class="ti-plus"></i><br>Add New</button>
                                                </a>
                                                @endif
                                            @if($students->count()>0)
                                               
                                  
                                              @foreach ($students as $student)
    
                                               <div style="float:left;text-align:center;margin:10px;width:155px;line-height:15px;background:#fff;padding:15px;" class="m-round">
                                                <img src="{{asset($student->Image)}}" class="img-circle" style="width:80px;height:80px;">
                                                <br><span style="font-size:11px;color:#333;">{{$student->id}}</span><br>
                                                <b style="font-size:11px;color:#555;">{{$student->name}}</b><br>
                                                <b style="font-size:11px;color:#555;">{{$student->class->name}}</b><br>
                                                {{-- <form action="" method="post"> --}}
                                                <input type="text" name="id" value="3248" style="display:none;"><br>
                                               
                                                @if(auth()->user()->role_id=="1")

                                                <button class="btn btn-sm m-round bg-m-gray m-white" type="submit" style="border:0px;width:30px;height:30px;padding:8px;"  title="view"><i class='bx bx-search-alt-2' ></i></button>
                                                
                                                <a href="{{ route('Student.edit',$student->id) }}">
                                                    <button class="btn btn-sm m-round bg-m-blue1 m-white" type="submit" style="border:0px;width:30px;height:30px;padding:8px;"  title="edit"><i class='bx bx-pencil' ></i></button>
                                                </a>
                                                <form action="{{ route('Student.destroy',$student->id) }}" method="POST" onsubmit="return confirm('Are You Sure You Want To Delete Student Record ?')">
                                                
                                                   @csrf
                                                   @method('DELETE')
                                                    <button class="btn btn-sm m-round bg-m-orange m-white" type="submit"  style="border:0px;width:30px;height:30px;padding:9px;"  title="delete"><i class='bx bx-trash'></i></button>
                                                </form>
                                                @endif
                                                {{-- </form> --}}
                                                <br><span style="font-size:9px;color:#333; font-style: italic; ">By: {{$student->user->name}}</span>
                                                <br><span style="font-size:9px;color:#333; font-style: italic;">at: {{Date('d-m-Y',$student->updated_it)}}</span>

                                                </div>
    
                                                @endforeach
                                               
                                                    
                                        
                                                    
                                                
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