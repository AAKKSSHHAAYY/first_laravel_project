@extends('master')
@section('title', 'My App')
@section('content')
<div class="row">
  <div class="col-12"> <h1>Customers</h1></div>
</div>
   <div class="row">
     <div class="col-12">
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
     </div>
   </div>
   
  

    <hr>
<div class="row">
  <div class="col-6">
    <h3>Active Customers</h3>
    <table class="table">
      <tr>
        <th>Name</th><th>email</th>
      </tr>
      @foreach($activeCustomers as $activeCustomer)
     <tr>
       <td>
          {{$activeCustomer->name}} <span class="text-muted">{{$activeCustomer->company->name}}</span>
       </td>
        <td>
          {{$activeCustomer->email}}
        </td>
      </tr>
    </li>
      @endforeach
    </table>
  </div>
  <div class="col-6">
      <h3>Inactive Customers</h3>
      <table class="table">
        <tr>
          <th>Name</th><th>email</th>
        </tr>
        @foreach($inactiveCustomers as $customer)
        <tr>
          <td>
            {{$customer->name}}
          </td>
          <td>
            {{$customer->email}}
          </td>
        </tr>
      </li>
        @endforeach
      </table>
    </div>
</div>
<div class="row">
    <h3> Reverse relationship</h3>
    <div class="col-12">
      @foreach ($companies as $company)
      <h3>{{$company->name}}</h3>
        @foreach ($company->customers as $customer)
        <li>{{$customer->name}}</li>   
        @endforeach     
      @endforeach
    </div>
</div>
    @endsection

