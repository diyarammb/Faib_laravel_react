  
	@extends('admin.layouts.app')
  @section('panel')
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
          <form>
            <i class="fa fa-search" aria-hidden="true"id="search-icon"></i>
            <input type="search" placeholder="Search Client Name project tasks" id="search">
          </form>
        </div>
        <div class="col">
         <button class="seebtn">See All</button>
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
            <button class="certificate">Preview Certificate</button>
            <br>
            <button class="edit">Edit</button>
          </td>
        </tr>
        <tr>
          <td>Will Smith</td>
          <td>FAIB Mental Health Trainer/Assessor</td>
          <td>10 Jan 2023</td>
          <td>Trainer/Assessor</td>
          <td>$320</td>
          <td>
            <button class="Approved">Approved</button>
          </td>
          <td>
            <button class="view">View</button>
            <br>
            <button class="certificate">Preview Certificate</button>
            <br>
            <button class="edit">Edit</button>
          </td>
        </tr>
        <tr>
          <td>Jason Brown</td>
          <td>FAIB Training Provider</td>
          <td>20 Jan 2023</td>
          <td>Training Provider</td>
          <td>$340</td>
          <td>
            <button class="Approved">Approved</button>
          </td>
          <td>
            <button class="view">View</button>
            <br>
            <button class="certificate">Preview Certificate</button>
            <br>
            <button class="edit">Edit</button>
          </td>
        </tr>
      </table>
      <div class="row">
        <div class="col">
          <h5 style="color: rgb(182, 178, 178);">Certificates</h5>
        </div>
        <div class="col">
        </div>
        <div class="col">
         <button class="seebtn">See All</button>
        </div>
      </div>
      <table>
        <tr>
          <th>Certificate No</th>
          <th>Membership</th>
          <th>User</th>
          <th>Type</th>
          <th>Date of Approval</th>
          <th>Date of Expiry</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>42/22/(917)</td>
          <td>FAIB Training Provider</td>
          <td>Jason Brown</td>
          <td>Training Provider</td>
          <td>
            <h5 class="success">23 Jan 2023</h5>
          </td>
          <td>
           <h5 class="success">23 Jan 2024</h5>
          </td>
          <td>
            <button class="view">View</button>
            <br>
            <button class="certificate">Download</button>
          </td>
        </tr>
        <tr>
          <td>42/22/(917)</td>
          <td>FAIB Mental Health Trainer/Assessor</td>
          <td>Will Smith</td>
          <td>Trainer/Assessor</td>
          <td>
            <h5 class="error">23 Jan 2022</h5>
          </td>
          <td>
            <h5 class="error">23 Jan 2023</h5>
          </td>
          <td>
            <button class="view">View</button>
            <br>
            <button class="certificate">Download</button>
          </td>
        </tr>
        <tr>
          <td>42/22/(917)</td>
          <td>FAIB Training Provider</td>
          <td>Jason Brown</td>
          <td>Training Provider</td>
          <td><h5 class="success">23 Jan 2023</h5></td>
          <td>
            <h5 class="success">23 Jan 2024</h5>
          </td>
          <td>
            <button class="view">View</button>
            <br>
            <button class="certificate">Download</button>
          </td>
        </tr>
      </table>
    </div>
    </div>
    
  </div>
</div>
	 
 
@endsection
 
@push('js')
 
@endpush