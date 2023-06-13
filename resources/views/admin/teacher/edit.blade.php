@extends ('layouts.app')


@section ('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Teacher</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
     <div class="container-fluid">
        <div class='row'>
            <div class="col-md-12">
                <div class="card card-primary">
                    <form method="post" action="" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6" >
                                    <label>First Name <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="name" value="{{ old('name', $getRecord->name) }}"  placeholder="First Name">
                                    <div style = "color:red">{{ $errors->first('name') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Last Name <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="last_name" value="{{ old('last_name', $getRecord->last_name) }}" placeholder="Last Name">
                                    <div style = "color:red">{{ $errors->first('last_name') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Gender<span style="color:red;"></span></label>
                                    <select class="form-control" name="gender">
                                        <option value="">Select Gender</option>
                                        <option {{ (old('gender', $getRecord->gender) == 'Male') ? 'selected' : '' }} value="Male">Male</option>
                                        <option {{ (old('gender', $getRecord->gender) == 'Female') ? 'selected' : '' }} value="Female">Female</option>
                                        <option {{ (old('gender', $getRecord->gender) == 'Other') ? 'selected' : '' }} value="Other">Other</option>
                                    </select>
                                    <div style = "color:red">{{ $errors->first('gender') }}</div>
                                </div>
                                
                                <div class="form-group col-md-6" >
                                    <label> Date Of Birth<span style="color:red;"></span></label>
                                    <input type ="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth', $getRecord->date_of_birth) }}" >
                                    <div style = "color:red">{{ $errors->first('date_of_birth') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Date Of Joining<span style="color:red;"></span></label>
                                    <input type ="date" class="form-control" name="admission_date" value="{{ old('admission_date', $getRecord->admission_date) }}" >
                                    <div style = "color:red">{{ $errors->first('admission_date') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Mobile Number <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="mobile_number" value="{{ old('mobile_number', $getRecord->mobile_number) }}"  placeholder=" Mobile Number">
                                    <div style = "color:red">{{ $errors->first('mobile_number') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Marital Status <span style="color:red;">*</span></label>
                                    <input type ="text" class="form-control" name="marital_status" value="{{ old('marital_status', $getRecord->marital_status) }}" required placeholder="Admission Number">
                                    <div style = "color:red">{{ $errors->first('marital_status') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Profile Picture <span style="color:red;"></span></label>
                                    <input type ="file" class="form-control" name="profile_pic" >
                                    <div style = "color:red">{{ $errors->first('profile_pic') }}</div>
                                    @if(!empty($getRecord->getProfile()))
                                    <img src="{{ $getRecord->getProfile() }}" style="width: 100px;">
                                    @endif
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Current Address <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="address" value="{{ old('address', $getRecord->address) }}"  placeholder="Current Address">
                                    <div style = "color:red">{{ $errors->first('address') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Permanent Address <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="permanent_address" value="{{ old('permanent_address', $getRecord->permanent_address) }}"  placeholder="Permanent Address">
                                    <div style = "color:red">{{ $errors->first('permanent_address') }}</div>
                                </div>
                                
                                <div class="form-group col-md-6" >
                                    <label> Qualification <span style="color:red;">*</span></label>
                                    <input type ="text" class="form-control" name="qualification" value="{{ old('qualification', $getRecord->qualification) }}"  placeholder=" Admission Date" required>
                                    <div style = "color:red">{{ $errors->first('qualification') }}</div>
                                   
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Work Experience <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="work_experience" value="{{ old('work_experience', $getRecord->work_experience) }}" placeholder="Blood Group">
                                    <div style = "color:red">{{ $errors->first('work_experience') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Note<span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="height" value="{{ old('note', $getRecord->note) }}" placeholder="Note">
                                    <div style = "color:red">{{ $errors->first('note') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Status<span style="color:red;">*</span></label>
                                    <select class="form-control" required name="status">
                                        <option value="">Select Status</option>
                                        <option  <option {{ (old('status', $getRecord->status) == 0) ? 'selected' : '' }} value="0">Active</option>
                                        <option  <option {{ (old('status', $getRecord->status) == 1) ? 'selected' : '' }} value="1">Inactive</option>
                                    </select>
                                    <div style = "color:red">{{ $errors->first('status') }}</div>
                                </div>

                            </div>

                            <hr />
                            
                            <div class="form-group">
                                <label>Email <span style="color:red;"></span></label>
                                <input type ="email" class="form-control" name="email" value="{{ old('email', $getRecord->email) }}"placeholder="Email">
                                <div style = "color:red">
                                    {{ $errors->first('email') }}                            
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password<span style="color:red;"></span></label>
                                <input type ="text" class="form-control" name="password" placeholder="Password">
                                <p>Due you want to change password so Please add new password</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                   

                </div>

            </div>
        </div>
    </div>
    </section>
</div>
 @endsection





