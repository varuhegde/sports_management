   <?php include('header.html'); ?>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Events</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Events</li>
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
   ?> 
                 <div class="news-post-holder">
                     <div class="col-lg-6 col-sm-6 col-xs-12"> 
  
                        <div class="news-post-widget">
                           <img class="img-responsive" src="../images/<?php echo $row['event_photo'];?>" alt="">
                           
                           <div class="news-post-detail">
                              <span class="date"><?php echo $row['event_date'];?></span>
                              <h2><a href="blog-detail.html"><?php echo $row['event_name'];?></a></h2>
                              <p><?php echo $row['event_description'];?></p>
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