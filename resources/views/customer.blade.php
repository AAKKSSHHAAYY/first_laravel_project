<h1>Customers</h1>
<form action="add_customers" method="post" class="pb-5">
  @csrf
  <div class="input-group">
    <input type="text" name="name" id="">
    <input type="text" name="email" id="">
    <button type="submit btn btn-suucess">Add Customer</button>
  </div>
</form>
<div>{{$errors->first('name')}}</div>
<div>{{$errors->first('email')}}</div>
<table>
  <tr>
    <th>Name</th><th>email</th>
  </tr>
  @foreach($customers as $customer)
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
<ul>

</ul>