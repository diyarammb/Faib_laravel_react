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
          
        </div>
       
      </div>
      <div class="row">
        <div class="col">
            Memberships
        </div>
         
        <div class="col">
        <span>Sort by: </span><button class="edit"> All</button><button id='myBtn' class="edit"> Add</button>
        </div>
      </div>
      <table>
        <tr>
          <th>File Name</th>
          <th>FIle Link</th>
          <th>Membership</th>
          <th>Type</th>
          
           
          <th>Action</th>
          
        </tr>
        @foreach($res as $r)
            
         
        <tr>
          <td>{{$r->file_name}}</td> 
          <td>{{$r->file_link}}</td>
          <td>{{$r->membership}}</td>
          <td><button class="Approved">Powerpoint</button></td>
          <td>
           <a href="{{$r->id}}">Edit  </a> 
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
        <div class="title">Add Resources</div>
        <div class="content">
          <form action="{{route('admin.resourceCreate')}}" method="POST">
            @csrf
            <div class="user-details">
              <div class="input-box">
                <span class="details">File Name</span>
                <input type="text" name =' file_name'   required>
              </div>
              <div class="input-box">
                <span class="details">File Link</span>
                <input type="text" name ='file_link'  required>
              </div>
              <div class="input-box">
                <span class="details">Membership</span>
                <input type="text" name ='membership'  required>
              </div>
              <div class="input-box">
                <span class="details">Type</span>
                <input type="text" name =' type' placeholder="Enter your email" required>
              </div>
               
               
              
               
             
            </div>
            <div class="button">
              <input type="submit" value="Add Resources" >
            </div>
          </form>
        </div>
      </div>
  </div>

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

  