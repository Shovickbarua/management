@extends('layout.master')

@section('content')

<form id="myForm" method="POST" id="myForm" action="{{route('course.update',$course_data->id)}}">
  @method('PUT')
  @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="name">Course<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="" placeholder="Name" name="course_name" value="{{('$course_data->course_name')}}">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="group_id">Select Department</label>
                    <select class="form-control" id="dep_id" name="dep_id">
                      <option value="">--Select Department --</option>
                      @foreach($departments as $department)
                        <option value="{{$department->id}}" @if($course_data->dep_id == $department->id) selected @endif>{{$department->dep_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="code">Course Code<font style="color:red">*</font></label>
                    <input type="text" class="form-control" id="course_code" placeholder="Course Code" name="course_code" value="{{('$course_data->course_code')}}">
                  </div>
                 
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-primary btn-sm" name="sub_btn">Save</button>               
                </div>
              </div>
      </form>



@endsection