@extends('admin.layouts.app')
@section('panel')
  <!--main-->
  <div class="main">
    <div class="topbar">
      <div class="toggle"><i class="fa fa-bars"></i></div>
      <!--title-->
    <div class="center-title">
      <h1>Welcome to First Aid Industry Body (FAIB) Admin Panel</h1>
    </div>
    <!--user and bell-->
    <div class="user">
      <div class="user-bell"><i class="fa fa-bell"></i></div>
      <div class="user-circle">
        <i class="fa fa-user-circle"></i>
        <i class="fa fa-sort-desc"></i>
      </div>
    </div>
    </div>
    <!--cardtable-->
    <div class="card">
      <div class="row">
        <div class="col">
          <h5 style="color: rgb(182, 178, 178);">Memberships</h5>
        </div>
        <div class="col">
          
        </div>
       
      </div>
      <div class="row">
        <div class="col">
            <span>All</span>
            <span>Approved</span>
            <span>Pending</span>
            <span>Declined</span>
        </div>
        <div class="col">
            <span>select duration: </span><button class="edit"> 25-1-2023</button>
        </div>
        <div class="col">
        <span>Membership: </span><button class="edit"> All</button>
        </div>
      </div>
      <table>
        <tr>
          <th>User</th>
          <th>Membership</th>
          <th>Application Date</th>
          <th>Type</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>Jay Smith</td>
          <td>FAIB Training Provider</td>
          <td>20 Jan 2023</td>
          <td>Training Provider</td>
          <td>$340</td>
          <td>
            <button class="pending">Pending</button>
          </td>
          <td>
            <button class="view">View</button>
            <br>
            <button class="certificate">issued Certificate</button>
            
          </td>
        </tr>
         
        
      </table>
      
      
    </div>
    </div>
    
  </div>
</div>
 @endsection