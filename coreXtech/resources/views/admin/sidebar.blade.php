<style>
.sidebar {
  background-color: #1E1F29; 
  border-right: none;
  padding: 10px;
}


.sidebar .menu-title,
.sidebar .nav-link,
.sidebar .nav-item span {
  color: #FFFFFF;
  font-weight: 500;
  margin: 10px;
}


.sidebar .nav-link.active,
.sidebar .nav-link:hover {
  background-color: #D10024; 
  color: #FFFFFF !important;
  border-radius: 10px;
}


.menu-icon i {
  color: #FFFFFF;
}


.profile-desc {
  background-color: #2C2D38;
  border-radius: 12px;
  padding: 15px;
  margin-bottom: 20px;
  color: #ffffff;
}

.profile-name h5 {
  color: #FFFFFF;
}

.profile-name span {
  color: #D10024; 
}


.dropdown-menu.preview-list {
  background-color: #2C2D38;
}

.dropdown-item .preview-subject {
  color: #ffffff;
}

.dropdown-item:hover {
  background-color: #D10024;
}


</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
  <a class="sidebar-brand brand-logo d-flex align-items-center"  style="text-decoration: none;">
    <span style="font-size: 30px; font-weight: bold; color: #D10024;">coreXtech</span>
  </a>
</div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="admin/assets/images/faces/face16.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
              <li class="nav-item menu-items">
      <a class="nav-link " href="index.html">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

          <!-- Product-->
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/view_product')}}">Add Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/manage_product')}}">Manage Product</a></li>
              </ul>
            </div>
          </li>
          <!-- Category-->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_category')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Category</span>
            </a>
          </li>
        </ul>
      </nav>