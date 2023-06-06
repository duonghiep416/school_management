@extends ('layouts.app')


@section ('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Parent</h1>
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
                                    <div style = "color:red">{{ $errors->first('name') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Last Name <span style="color:red;">*</span></label>
                                    <input type ="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required placeholder="Last Name">
                                    <div style = "color:red">{{ $errors->first('last_name') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Gender<span style="color:red;">*</span></label>
                                    <select class="form-control" required name="gender">
                                        <option value="">Select Gender</option>
                                        <option {{ (old('gender') == 'Male') ? 'selected' : '' }} value="Male">Male</option>
                                        <option {{ (old('gender') == 'Female') ? 'selected' : '' }} value="Female">Female</option>
                                        <option {{ (old('gender') == 'Other') ? 'selected' : '' }} value="Other">Other</option>
                                    </select>
                                    <div style = "color:red">{{ $errors->first('gender') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Occupation <span style="color:red;"></span></label>
                                    <input type ="text" class="form-control" name="occupation" value="{{ old('occupation') }}"  placeholder="Occupation">
                                    <div style = "color:red">{{ $errors->first('occupation') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Mobile Number <span style="color:red;">*</span></label>
                                    <input type ="text" class="form-control" name="mobile_number" required value="{{ old('mobile_number') }}"  placeholder=" Mobile Number">
                                    <div style = "color:red">{{ $errors->first('mobile_number') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Address <span style="color:red;">*</span></label>
                                    <input type ="text" class="form-control" name="address" required value="{{ old('address') }}"  placeholder="Address">
                                    <div style = "color:red">{{ $errors->first('address') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Profile Picture <span style="color:red;"></span></label>
                                    <input type ="file" class="form-control" name="profile_pic" >
                                    <div style = "color:red">{{ $errors->first('profile_pic') }}</div>
                                </div>

                                <div class="form-group col-md-6" >
                                    <label> Status<span style="color:red;">*</span></label>
                                    <select class="form-control" required name="status">
                                        <option value="">Select Status</option>
                                        <option  <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Active</option>
                                        <option  <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inactive</option>
                                    </select>
                                    <div style = "color:red">{{ $errors->first('status') }}</div>
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