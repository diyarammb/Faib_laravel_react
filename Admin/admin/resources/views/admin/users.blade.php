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
        <div class="col-md-6">
          <span style="color: rgb(182, 178, 178);">USERS</span>
        </div>
        <div class='col-md-6'>
         
       <div class='row'>
        <div class='col-md-3 col-sm-3'>
       <span> Status <br/><select name="" id="" class=''>
            <option value="">
               active
            </option>
            <option value="">
               d-active
            </option>
        </select>
        </span>
        </div>
        <div class='col-md-3 col-sm-3'>
       <span> Awareness <br/><select class=' ' name="" id="">
            <option value="">
               social media
            </option>
            <option value="">
               manual
              
            </option>
        </select>
        </span>
        </div>
        <div class='col-md-3 col-sm-3'>
        <span>Membership<br/> <select class='m-1' name="" id="">
          <option value="">
              Membership
          </option>
          <option value="">
             manual
            
          </option>
      </select>
      </span> 
       
        </div>
        <div class='col-md-3'>
        <button id='myBtn' class='btn btn-info '>Add user</button>
        </div>
       </div>
       
      
       
     
      
         
       
     
     
     
     
     
    

   </div>
  </div>
      <table class='' style="margin-top: 20px">
        <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Memberships</th>
          <th>Trainer</th>
          <th>Awareness</th>
          <th>Status</th>
        </tr>
         
         @foreach($user as $u)
        <tr>
          <td>{{$u->first_name}}</td>
          <td>{{$u->email}}</td>
          <td>{{$u->number}}</td>
          <td> Faib Training Provider</td>
          <td>
            <select name="" id="" class='form-control'>
                <option value="">
                    T-William
                </option>
                <option value="">
                    L-William
                </option>
            </select>
          </td>
          <td>
            social media
          </td>
          <td>
           
          <div class="form-check form-switch">
            <input type="checkbox" class="form-check-input" id="darkSwitch">
            
          </div>

          </td>
        </tr>
        @endforeach
      </table>
      
      
    </div>
    </div>
    
  </div>
</div>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container1">
      <div class="title">Add User</div>
      <div class="content">
        <form action="{{route('admin.create')}}" method="POST">
          @csrf
          <div class="user-details">
            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" name =' first_name' placeholder="Enter First name" required>
            </div>
            <div class="input-box">
              <span class="details">Last Name</span>
              <input type="text" name =' last_name' placeholder="Enter last username" required>
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" name ='email' placeholder="Enter your email" required>
            </div>
            <div class="input-box">
              <span class="details">Confirm Email</span>
              <input type="text" name =' cemail' placeholder="Enter your email" required>
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" name =' number' placeholder="Enter your number" required>
            </div>
            <div class="input-box">
              <span class="details">Where You here About FAIB ?</span>
              <select class="details" name='hereby'>
                <option value="facebook">
                  facebook
                </option>
                <option value="youtube">
                  youtube
                 </option>
              </select>
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="text" name =' pass' placeholder="Enter your password" required>
            </div>
            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="text" name =' cpass' placeholder="Confirm your password" required>
            </div>
          </div>
          <div class="input-box">
          
            <input type="checkbox" name ='newsletter' placeholder="Confirm your password" required>
            <span class="details">Do You Want to Sign Up Newsletter </span>
          </div>
          <div class="button">
            <input type="submit" value="Add user" >
          </div>
        </form>
      </div>
    </div>
</div>
{{-- model end --}}
<script>
  var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

 </script>
 @endsection