<?php 
require 'connection-db.php';
include 'header.php';
    if(!isset($_SESSION)){
        session_start();
    }
    if (isset($_POST['upload'])){
        $name=$_POST['name'];
        $writer=$_POST['writer'];
        $album=$_POST['album'];
        $year=$_POST['year'];
        $filename=$_POST['filename'];
        $query="INSERT INTO item (name,writer,album,year,filename)
                VALUES ('$name','$writer','$album','$year','$filename')";
        $query_run=mysql_query($query);
        if (!$query_run){
            echo "Query not run";
           // die();
        }
        // header('location:index.php');
    }
?>
    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">
            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="sess-dest.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION['user_name']; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold "><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold active"><a href="addmusic.php" class="waves-effect waves-cyan"><i class="mdi-action-shop-two"></i>Add Music</a>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

<!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START CONTENT -->
<div class="container music-cont">
  
  <section id="content">
      <!--start container-->
      <div class="container">
          <div class="col s12 m12 18">
              <!--Input fields-->
              <div id="input-fields">
                <h4 class="header">Add Music Details</h4>
                <div class="row">
                  <div class="col s12 m8 32">
                    <div class="row">
                      <form class="col s12" method="POST" action="addmusic.php">
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="text" class="validate" name="name" required>
                            <label for="Name">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="text" class="validate" name="writer" required>
                            <label for="password">Writer/Director</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="text" class="validate" name="album" required>
                            <label for="password">Album Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="text" class="validate" name="year" required>
                            <label for="password">Year</label>
                          </div>
                        </div>
                        <div class="file-field input-field">
                        <input class="file-path validate" type="text" disabled />
                        <div class="btn">
                          <span>File</span>
                          <input type="file" name="filename" required/>
                        </div>
                      </div>
                      <div class="row">
                      <div class="input-field col s10 m10"></div>
                          <div class="input-field col s3 m2">
                            <input class="btn cyan waves-effect waves-light right sbmit" type="Submit"  name="upload">
                            <label class="sbmit-lbl" for="submit">Submit</label>
                          </div>
                        </div
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </section>
</div>
<?php include 'footer.php'; ?>