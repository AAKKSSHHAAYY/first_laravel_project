@extends('master')
@section('title', 'My App')
@section('content')
<div class="row">
  <div class="col-12"> <h1>Add New Customers</h1></div>
</div>
   <div class="row">
     <div class="col-12">
      <p><a href="customers/create">Add New Customer</a></p>
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

{{-- this will show us how to get employes with inverse reltionship --}}
<div class="row py-5">
    <h4> Reverse relationship comapnies and there employees</h4>
    <div class="col-12">
      @foreach ($companies as $company)
      <h5>{{$company->name}}</h5>
        @foreach ($company->customers as $customer)
        <li>{{$customer->name}}</li>   
        @endforeach     
      @endforeach
    </div>
</div>
    @endsection

