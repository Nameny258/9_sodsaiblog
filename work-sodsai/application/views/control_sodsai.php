<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <!-- User Profile-->
        <li>
          <!-- User Profile-->
          <div class="user-profile d-flex no-block dropdown m-t-20">
            <div class="user-pic">
              <img src="http://127.0.0.1/9-sodsaiblog/work-sodsai/asset/img/users/1.jpg" alt="users" class="rounded-circle" width="40">
            </div>
            <div class="user-content hide-menu m-l-10">
              <a href="#" class="" id="Userdd" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h5 class="m-b-0 user-name font-medium">GrizzlyB.
                  <i class="fa fa-angle-down"></i>
                </h5>
                <span class="op-5 user-email">nateekhundee22@gmail.com</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd">
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="ti-user m-r-5 m-l-5"></i>My Profile</a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="ti-wallet m-r-5 m-l-5"></i>My Balance</a>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="ti-email m-r-5 m-l-5"></i>Inbox</a>
                <div class="dropdown-divider">
                </div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="ti-settings m-r-5 m-l-5"></i>Account Setting</a>
                <div class="dropdown-divider">
                </div>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="fa fa-power-off m-r-5 m-l-5"></i>Logout</a>
              </div>
            </div>
          </div>
          <!-- End User Profile-->
        </li>
        <!-- User Profile-->
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://127.0.0.1/9-sodsaiblog/work-sodsai/" aria-expanded="false">
            <i class="mdi mdi-view-dashboard"></i>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.html" aria-expanded="false">
            <i class="mdi mdi-account-network"></i>
            <span class="hide-menu">Profile</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.html" aria-expanded="false">
            <i class="mdi mdi-border-all"></i>
            <span class="hide-menu">Table</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://127.0.0.1/9-sodsaiblog/work-sodsai/icons" aria-expanded="false">
            <i class="mdi mdi-face"></i>
            <span class="hide-menu">Icon</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://127.0.0.1/9-sodsaiblog/work-sodsai/ControlSodsai" aria-expanded="false">
            <img src="https://cdn-icons-png.flaticon.com/512/8300/8300390.png" alt="" width="30px" class="mr-2">
            <span class="hide-menu">Sodsai</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
<div class="page-wrapper">
  <div class="text-center">
    <h1 class="pt-3">
      ระบบจัดการ Blog Sodsai
    </h1>
  </div>
  <form class="page-show" action="http://127.0.0.1/9-sodsaiblog/work-sodsai/controlsodsai/add" method="POST">
    <div class="row">
      <div class="col-md-6 col-12">
        <div class="mt-3">
          <p> <b>หัวเรื่อง</b> </p>
          <input class="form-control w-75" id="nameproduct" type="text" name="__nameproduct" value="">
        </div>
        <div class="mt-2">
          <p> <b>Detail</b> </p>
          <textarea name="__detail" id="Detail" class="form-control w-75" aria-label="With textarea"></textarea>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="mt-3">
          <input type="file" name="__file" accept="image/*" onchange="loadFile(event)">
        </div>
        <img class="img-thumbnail show-img mt-2"  id="output"/>
      </div>
    </div>
    <button class="btn btn-success" type="submit" value="submit">Submit</button>
  </form>
</div>
