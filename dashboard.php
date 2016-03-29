<?php 
require 'connection-db.php';
include 'header.php';
    if(!isset($_SESSION)){
        // session_start();
    }
    $query="SELECT * FROM item";
    $query_run=mysqli_query($connect,$query);
    $query_chk=mysqli_num_rows($query_run);
    // die("Nai chali");
    if (isset($_GET['itemId'])) {
        $id=$_GET['itemId'];
        $query_del="DELETE FROM item WHERE itemId='$id'";
        $query_run=mysqli_query($connect,$query_del);
        header("location:dashboard.php");
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
                    <li class="bold active"><a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold "><a href="addmusic.php" class="waves-effect waves-cyan"><i class="mdi-action-shop-two"></i>Add Music</a>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->
            <!--Hoverable Table-->
        <div class="container music-cont">
            <div id="hoverable-table">
              <p><h4 class="header">Item Info</h4></p>
              <div class="row">
                <div class="col s12 m12 32">
                  <table class="hoverable">
                    <thead>
                      <tr>                      
                        <th data-field="id">Name</th>
                        <th data-field="name">Writer</th>
                        <th data-field="price">Album</th>
                        <th data-field="price">year</th>
                        <th data-field="price">Filename</th>
                        <th data-field="price">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                <?php if ($query_chk):?>
                    <?php while ($row = mysqli_fetch_assoc($query_run)):?>
                      <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["writer"]; ?></td>
                        <td><?php echo $row["album"]; ?></td>
                        <td><?php echo $row["year"]; ?></td>
                        <td><?php echo $row["filename"]; ?></td>
                        <td>
                            <a href="updatemusic.php?itemId=<?=$row["itemId"];?>"><span class="mdi-content-add"></span></a>
                            <a href="dashboard.php?itemId=<?=$row["itemId"];  ?>"><span class="mdi-content-clear"></span></a>
                        </td>
                      </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
</div>
<?php include 'footer.php'; ?>
