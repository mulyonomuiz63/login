<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard" class="site_title"><i class="fa fa-building"></i> <span>ARETA AMANY</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="img/areta.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->usernm}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php if(Auth::user()->userlv == 2){ ?>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class=""></span></a>
                    <ul class="nav child_menu">
                      <li><a href="detail">Detail</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php }else{ ?> 
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>