@extends('master')
@section('title', 'My App')
@section('content')
<form action="add_customers" method="post" class="pb-5">
  @csrf
  <div class="form-group pb-2">
    <label for="name">Name</label>
   <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
   <div>{{$errors->first('name')}}</div>
  </div>

  <div class="form-group pb-2">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
    <div>{{$errors->first('email')}}</div>
  </div>
  <div class="form-group">
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id" class="form-control" > 
      <option value="" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Company</option>
    @foreach ($companies as $company)
    <option value="{{$company->id}}">{{$company->name}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="active">Status</label>
    <select name="active" id="active" class="form-control" > 
      <option value=""> Select Customers Status</option>
      <option value="1">Active</option>
      <option value="0">Inactive</option>
    </select>
  </div>
    <button type="submit" class = " form-control btn btn-primary pb-2">Add Customer</button>

</form>
@endsection