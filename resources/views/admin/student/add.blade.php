@extends ('layouts.app')


@section ('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Student</h1>
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
                                    <label>First Name <span style="color:red;">*</span></label>
                                    <input type ="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="First Name">
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Last Name <span style="color:red;">*</span></label>
                                    <input type ="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required placeholder="Last Name">
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Admission Number <span style="color:red;">*</span></label>
                                    <input type ="text" class="form-control" name="admission_number" value="{{ old('admission_nummber') }}" required placeholder="Admission Number">
                                </div>
                                <div class="form-group col-md-6" >
                                    <label> Roll Number <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="roll_number" value="{{ old('roll_number') }}" required placeholder="Roll Number">
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Class<span style="color:red;">*</span></label>
                                    <select class="form-control" required name="class_id">
                                        <option value="">Select Class</option>
                                        @foreach ($getClass as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>

                                            
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Gender<span style="color:red;">*</span></label>
                                    <select class="form-control" required name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Day Of Birth<span style="color:red;">*</span></label>
                                    <input type ="date" class="form-control" required name="date_of_birth" value="{{ old('date_of_birth') }}" >
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Caste <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="caste" value="{{ old('caste') }}"  placeholder="Caste">
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Religion <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="religion" value="{{ old('religion') }}"  placeholder="Religion">
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Mobile Number <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}"  placeholder=" Mobile Number">
                                </div>
                                <div class="form-group col-md-6" >
                                    <label> Admission Date <span style="color:red;">*</span></label>
                                    <input type ="date" class="form-control" name="admission_date" value="{{ old('admission_date') }}"  placeholder=" Admission Date" required>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Profile Picture <span style="color:red;"></span></label>
                                    <input type ="file" class="form-control" name="profile_pic" >
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Blood Group <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="blood_group" value="{{ old('blood_group') }}" placeholder="Blood Group">
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Height<span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="height" value="{{ old('height') }}" placeholder="Height">
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Weight <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="weight" value="{{ old('weight') }}" placeholder="Weight">
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Status<span style="color:red;">*</span></label>
                                    <select class="form-control" required name="status">
                                        <option value="">Select Status</option>
                                        <option value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    </select>
                                </div>

                            </div>

                            <hr />
                            
                            <div class="form-group">
                                <label>Email <span style="color:red;">*</span></label>
                                <input type ="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                                <div style = "color:red">
                                    {{ $errors->first('email') }}                            
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password<span style="color:red;">*</span></label>
                                <input type ="password" class="form-control" name="password" required placeholder="Password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                   

                </div>

            </div>
        </div>
    </div>


    </section>

</div>


  @endsection
