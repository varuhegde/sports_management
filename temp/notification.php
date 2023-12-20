   <?php include('header.html'); ?>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Notification</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Notification</li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">

               
                  <?php
   include('../db_connect/db_connect.php');
   $sl_no=1;
   $sql="select * from event e,sports s where e.sports_id=s.sports_id ORDER BY event_date DESC";
   $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($res))
   {
   ?><div class="row">
   <div class="container">
               <div class="col-md-7 ">
                  <div class="feature-post small-blog">
                     <div class="col-md-4">
                        <div class="feature-img">
                           <img src="../images/<?php echo $row['event_photo'];?>" class="img-responsive" alt="#" />
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="feature-cont">
                           <div class="post-info">
                              
                              <span>
                                 <h4><?php echo $row['event_name'];?></h4>
                                
                              </span>
                           </div>
                           <div class="post-heading">
                              <h3><?php echo $row['event_date'];?></h3>
                            
                              
                           </div>
                        </div>
                     </div>
                  </div>
                 
                  
                  
               </div>
                
                 
   <?php
   }
   ?>
                    
                   
                     
                  </div>
               </div>
              
                  
               </div>
            </div>
         </div>
      </section>
   <?php include('footer.html'); ?>   