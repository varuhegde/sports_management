<?php include("header.html")?>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Facility</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Facility</li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team">
         
            
                  
                                   <?php
   include('../db_connect/db_connect.php');
   $sl_no=1;
   $sql="select * from facility";
   $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($res))
   {
   ?> <div class="row">
   <div class="container">
               <div class="col-md-9">
                  <div class="feature-post small-blog">
                     <div class="col-md-5">
                        <div class="feature-img">
                           <img src="../images/<?php echo $row['facility_photo'];?>" class="img-responsive" alt="#" />
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="feature-cont">
                           <div class="post-info">
                              
                              <span>
                                 <h4><?php echo $row['facility_name'];?></h4>
                                
                              </span>
                           </div>
                           <div class="post-heading">
                              
                              <p><?php echo $row['facility_description'];?></p>
                              
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
      </section>
     <?php include('footer.html'); ?> 