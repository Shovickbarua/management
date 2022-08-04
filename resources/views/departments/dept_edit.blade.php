@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('department.update',$department_data->id)}}">
  @method('PUT')
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Department<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="name" placeholder="Subject" name="dep_name" value="{{('$department_data->dep_name')}}">
                  </div>
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="dep_btn">Save</button>
                </div>
              </div>
</form>



@endsection