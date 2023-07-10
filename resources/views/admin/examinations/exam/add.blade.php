@extends ('layouts.app')


@section ('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Exam</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
     <div class="container-fluid">
        <div class='row'>
            <div class="col-md-12">
                <div class="card card-primary">
                    <form method="post" action="">
                    {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Exam Name</label>
                                <input type ="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Exam Name">
                            </div>
                            <div class="form-group">
                                <label>Note</label>
                                <textarea class="form-control" name="note" placeholder="Note"></textarea>
                               
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
