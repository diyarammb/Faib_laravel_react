
  <body>
<div class="container">
  <div class="navigation">
    <ul>
      <li>
        <a href="#">
          <span class="icon">
            <img src="{{asset('admin_assets/image/FAIB.jpg')}}" alt="" style="height:4rem;width:18em;border-bottom: 1px solid gray;">
          </span>
        </a>
      </li>
      <li>
        <a href="{{url('admin')}}" style=" color: #474545;">
          <span class="icon">
            <i class="fa fa-dashboard"></i>
          </span>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{url('users')}}">
          <span class="icon"><i class="fa fa-user"></i></span>
          <span class="title">User</span>
        </a>
      </li>
      <li>
        <a href="{{url('membership')}}">
          <span class="icon"><i class="fa fa-th"></i></span>
          <span class="title">Memberships</span>
        </a>
      </li>
      <li>
        <a href="{{url('resources')}}">
          <span class="icon"><img src="{{asset('admin_assets/image/orderHistory.jpg')}}" alt="order" style="width:1.75em"></span>
          <span class="title">Order History</span>
        </a>
      </li>
      <li>
        <a href="{{url('resources')}}">
          <span class="icon"><i class="fa fa-sitemap"></i></span>
          <span class="title">Resources</span>
        </a>
      </li>
    </ul>
  </div>