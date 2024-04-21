
								
@extends('layouts.app')


@section('content')

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row">
                                            <!-- Multiple Open Accordion start -->
                                            <div class="col-lg-7">
											    <div class="card m-round">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Update your image Here</h5>
                                                    </div>
                                                    <div class="card-block accordion-block">
                                                        <form action="{{ route('Profiles.update', $id = auth()->user()->employee_id) }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <label class="w-100">Your Image<br><input type="file" class="form-control" name="Image" id="fileToUpload" required=""></label><br>
                                                            <button class="btn btn-primary f-right" name="changelogo" type="submit"><i class="ti-reload"></i> Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="card m-round">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Update your Info Here</h5>
                                                    </div>
                                                    <div class="card-block accordion-block">
                                                        <form action="{{ route('Profiles.update', $id = auth()->user()->employee_id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="m-div">
                                                                <label class="m-label"> Your Name</label>
                                                                <input type="text" class="form-control m-field @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $data->name) }}" required="">
                                                                @error('name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                
                                                            <div class="m-div">
                                                                <label class="m-label">Email</label>
                                                                <input type="text" class="form-control m-field @error('Email') is-invalid @enderror" name="Email" value="{{ old('Email', $data->Email) }}" required="">
                                                                @error('Email')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                
                                                            <div class="m-div">
                                                                <label class="m-label">Phone Number</label>
                                                                <input type="tel" class="form-control m-field @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone', $data->Phone) }}" required="">
                                                                @error('Phone')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                
                                                            <div class="m-div">
                                                                <label class="m-label">Date of Birth</label>
                                                                <input class="form-control @error('DOB') is-invalid @enderror" type="date" name="DOB">
                                                                @error('DOB')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                
                                                            <div class="m-div">
                                                                <label class="m-label">Address</label>
                                                                <input type="text" class="form-control m-field @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address', $data->Address) }}" required="">
                                                                @error('Address')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                
                                                            <div class="m-div">
                                                                <label class="m-label">Education</label>
                                                                <input type="text" class="form-control m-t-10 @error('Education') is-invalid @enderror" name="Education" value="{{ old('Education') }}">
                                                                @error('Education')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                
                                                            <button class="btn btn-primary f-right m-t-20" name="changeinfo" type="submit"><i class="ti-reload"></i> Update</button>
                                                        </form>
														</div>
													</div>
												                                                    </div>
                <!-- Multiple Open Accordion ends -->
                <!-- Single Open Accordion start -->
                <div class="col-lg-5">
                    <div class="card m-round">
                        <div class="card-header">
                            <h5 class="card-header-text m-gray">Your Profile</h5>
                        </div>
                        <div class="card-block accordion-block text-center">
                            							
							<img src="{{asset($data->Image)}}" class="img-circle" style="width:80px;height:80px;">
							<h4 class="m-gray m-t-10 m-b-0">{{$data->name}}</h4>
							<h4 class="m-gray m-t-10 m-b-0">{{$data->Type}}</h4>
							
							<p class="text-right m-gray"><i class="ti-mobile m-orange f-left"></i> {{$data->Phone}} </p>
                            <p class="text-right m-gray"><i class="ti-email m-blue1 f-left"></i> {{$data->Email}} </p>
							<p class="text-right m-gray"><i class="ti-world m-blue f-left"></i> {{$data->Join_Date}} </p>
							
							<hr class="bg-m-orange">
							<p class="m-gray"><i class="ti-location-pin m-orange"></i><br>{{$data->Address}}</p>
							
							<p class="m-gray">{{$data->Gender}}</p>
											
							
							
							
							                        </div>
                    </div>
                </div>
                <!-- Single Open Accordion ends -->
            </div>
            <!-- Row end -->
            <!-- Row start -->
            
                    <!-- Row end -->
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <div id="styleSelector">

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection

