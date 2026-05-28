<header class="header" style="width:100%; background:#fff; border-bottom:1px solid #ccc; font-family:Arial, sans-serif;">
         
      <!-- Top Bar -->
      <div class="top_bar" style="background:#f8f9fa; padding:5px 0;">
         <div class="top_bar_container">
            <div class="container" style="max-width:1200px; margin:auto;">
               <div class="row">
                  <div class="col">
                     <div class="top_bar_content d-flex flex-row align-items-center justify-content-start" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap;">
                        <ul class="top_bar_contact_list" style="list-style:none; margin:0; padding:0; display:flex; align-items:center; flex-wrap:wrap;">
                           <?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                           <li style="margin-right:15px; font-size:14px;"><div class="question" style="font-weight:bold; color:#333;">Have any questions?</div></li>
                           <li style="margin-right:15px; display:flex; align-items:center;">
                              <i class="fa fa-phone" aria-hidden="true" style="color:#007bff; margin-right:5px;"></i>
                              <div style="color:#333;"><?php  echo htmlentities($row->MobileNumber);?></div>
                           </li>
                           <li style="margin-right:15px; display:flex; align-items:center;">
                              <i class="fa fa-envelope-o" aria-hidden="true" style="color:#007bff; margin-right:5px;"></i>
                              <div style="color:#333;"><?php  echo htmlentities($row->Email);?></div>
                           </li><?php $cnt=$cnt+1;}} ?>
                        </ul>
                        <div class="top_bar_login ml-auto" style="margin-left:auto;">
                           <div class="login_button"><a href="alumni/registration.php" style="background:#007bff; color:#fff; padding:6px 12px; border-radius:4px; text-decoration:none; font-size:14px;">Alumni Registration</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>            
      </div>

      <!-- Header Content -->
      <div class="header_container" style="border-top:1px solid #eee;">
         <div class="container" style="max-width:1200px; margin:auto;">
            <div class="row">
               <div class="col">
                  <div class="header_content d-flex flex-row align-items-center justify-content-start" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; padding:10px 0;">
                     
                     <!-- Logo -->
                     <div class="logo_container">
                        <a href="index.php" style="text-decoration:none; color:#333;">
                           <div class="logo_text" style="font-size:22px; font-weight:bold;">College <span style="color:#007bff;">Alumni System</span></div>
                        </a>
                     </div>

                     <!-- Navigation -->
                     <nav class="main_nav_contaner ml-auto" style="flex:1; text-align:center;">
                        <ul class="main_nav" style="list-style:none; margin:0; padding:0; display:flex; justify-content:center; flex-wrap:wrap;">
                           <li style="margin:0 10px;"><a href="index.php" style="text-decoration:none; color:#333;">Home</a></li>
                           <li style="margin:0 10px;"><a href="about.php" style="text-decoration:none; color:#333;">About</a></li>
                           <li style="margin:0 10px;"><a href="contact.php" style="text-decoration:none; color:#333;">Contact</a></li>
                           <li style="margin:0 10px;"><a href="events.php" style="text-decoration:none; color:#333;">Events</a></li>
                           <li style="margin:0 10px;"><a href="online-job.php" style="text-decoration:none; color:#333;">Online Jobs</a></li>
                           <li style="margin:0 10px;"><a href="job-lists.php" style="text-decoration:none; color:#333;">Posted Jobs</a></li>
                           <li style="margin:0 10px;"><a href="alumni/login.php" style="text-decoration:none; color:#333;">Alumni</a></li>
                           <li style="margin:0 10px;"><a href="admin/login.php" style="text-decoration:none; color:#333;">Admin</a></li>
                        </ul>

                        <!-- Hamburger -->
                        <div class="hamburger menu_mm" style="display:none;">
                           <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                        </div>
                     </nav>

                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Header Search Panel -->
      <div class="header_search_container" style="background:#f8f9fa; padding:10px 0;">
         <div class="container" style="max-width:1200px; margin:auto;">
            <div class="row">
               <div class="col">
                  <div class="header_search_content d-flex flex-row align-items-center justify-content-end" style="display:flex; justify-content:flex-end;">
                     <form action="#" class="header_search_form" style="display:flex; align-items:center;">
                        <input type="search" class="search_input" placeholder="Search" required="required" style="padding:6px 10px; border:1px solid #ccc; border-radius:4px;">
                        <button class="header_search_button d-flex flex-column align-items-center justify-content-center" style="background:#007bff; color:#fff; border:none; padding:6px 10px; margin-left:5px; border-radius:4px;">
                           <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>         
      </div>         
   </header>
