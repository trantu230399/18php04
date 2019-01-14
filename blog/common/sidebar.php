 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/friend/tvat.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['login'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- User -->
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?action=add_user"><i class="fa fa-circle-o"></i> Add user</a></li>
            <li class="active"><a href="admin.php?action=list_user"><i class="fa fa-circle-o"></i> List users</a></li>
          </ul>
        </li>
        <!-- News -->
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa  fa-cubes"></i><span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?action=add_news"><i class="fa fa-circle-o"></i> Add News</a></li>
            <li><a href="admin.php?action=list_news"><i class="fa fa-circle-o"></i> List News</a></li>
          </ul>
        </li>
        <!-- CLB -->
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-table"></i><span>Thông Tin CLB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?action=add_detail"><i class="fa fa-circle-o"></i>ADD DETAIL</a></li>
            <li><a href="admin.php?action=list_detail"><i class="fa fa-circle-o"></i>SHOW DETAIL</a></li>
          </ul>
        </li>
        <!-- Tournaments -->
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-table"></i><span>Tournaments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?action=premier_league"><i class="fa fa-circle-o"></i>Premier League</a></li>
            <li><a href="admin.php?action=laliga"><i class="fa fa-circle-o"></i>Laliga</a></li>
          </ul>
        </li>
        <!-- Video -->
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-users"></i> <span>Video</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?action=add_video"><i class="fa fa-circle-o"></i> Add Video</a></li>
            <li class="active"><a href="admin.php?action=list_video"><i class="fa fa-circle-o"></i> List Video</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>