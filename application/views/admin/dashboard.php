<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- main body -->
<div class="row ">
   <div class="col-sm-12">
      <div class="card text-white card-info">
         <div class="card-header">
            Welcome to dashboard
         </div>
        
      </div>
   </div>
   <!-- cards -->


   <!-- page info -->
   <div class="col-xl-3 col-md-6">
         <div class="card comp-card "  >
		      <div class="card-body">
		         <div class="row align-items-center">
		            <div class="col">
		               <h6 class="m-b-25">Total Page</h6>
		               <h3 class="f-w-700 text-c-green"><?=$total_page?></h3>
		            </div>
		            <div class="col-auto">
		               <i class="fas fa-clipboard bg-c-green"></i>
		            </div>

		         </div>
		          <p class="m-b-0 text-white text-center">
		               <a href="<?=base_url()?>admin/pages" class="btn btn-info btn-round waves-effect waves-light">View All</a>
		            </p>
		      </div>
		   </div>

   </div>
   
   <!-- user info -->

    <div class="col-xl-3 col-md-6">
         <div class="card comp-card "  >
		      <div class="card-body">
		         <div class="row align-items-center">
		            <div class="col">
		               <h6 class="m-b-25">Total User</h6>
		               <h3 class="f-w-700 text-c-blue"><?=$total_user?></h3>
		            </div>
		            <div class="col-auto">
		               <i class="fas fa-users bg-c-blue"></i>
		            </div>

		         </div>
		          <p class="m-b-0 text-white text-center">
		               <a href="<?=base_url()?>admin/users" class="btn btn-info btn-round waves-effect waves-light">View All</a>
		            </p>
		      </div>
		   </div>

   </div>
   <!-- category info -->
		    <div class="col-xl-3 col-md-6">
         <div class="card comp-card "  >
		      <div class="card-body">
		         <div class="row align-items-center">
		            <div class="col">
		               <h6 class="m-b-25">Total Category</h6>
		               <h3 class="f-w-700 text-c-yellow"><?=$total_gallery?></h3>
		            </div>
		            <div class="col-auto">
		               <i class="fas fa-list bg-c-yellow"></i>
		            </div>

		         </div>
		          <p class="m-b-0 text-white text-center">
		               <a href="<?=base_url()?>admin/gallery" class="btn btn-info btn-round waves-effect waves-light">View All</a>
		            </p>
		      </div>
		   </div>

   </div>


   <!-- slider ifno -->

   		    <div class="col-xl-3 col-md-6">
         <div class="card comp-card "  >
		      <div class="card-body">
		         <div class="row align-items-center">
		            <div class="col">
		               <h6 class="m-b-25">Total Slider</h6>
		               <h3 class="f-w-700 text-c-red"><?=$total_slider?></h3>
		            </div>
		            <div class="col-auto">
		               <i class="fas fa-television bg-c-red"></i>
		            </div>

		         </div>
		          <p class="m-b-0 text-white text-center">
		               <a href="<?=base_url()?>admin/sliders" class="btn btn-info btn-round waves-effect waves-light">View All</a>
		            </p>
		      </div>
		   </div>

   </div>

   <!-- bkup -->
   <div class="col-sm-6 col-md-4 ">
      <div class="card"  style="height: 250px;overflow: auto">
         <div class="card-header">
            <div class="card-header-left">
               <h5>Database</h5>
            </div>
            <div class="card-header-right">
               <ul class="list-unstyled card-option">
                  <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                  <li><i class="feather icon-maximize full-card"></i></li>
                  <li><i class="feather icon-minus minimize-card"></i></li>
                  <li><i class="feather icon-refresh-cw reload-card"></i></li>
                  <li><i class="feather icon-trash close-card"></i></li>
                  <li><i class="feather icon-chevron-left open-card-option"></i></li>
               </ul>
            </div>
         </div>
         <div class="card-block">
            <p><a href="http://localhost/voyager_junior/admin/dashboard/backup_db" class="btn btn-inverse waves-effect waves-light">Download Backup</a></p>
         </div>
      </div>
   </div>
   <!--bkup -->

   <!-- login history -->
   <div class="col-xl-4 col-md-12">
      <div class="card latest-update-card"  style="height: 250px;overflow: auto">
         <div class="card-header">
            <h5>Recent Login </h5>
            <div class="card-header-right">
               <ul class="list-unstyled card-option">
                  <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                  <li><i class="feather icon-maximize full-card"></i></li>
                  <li><i class="feather icon-minus minimize-card"></i></li>
                  <li><i class="feather icon-refresh-cw reload-card"></i></li>
                  <li><i class="feather icon-trash close-card"></i></li>
                  <li><i class="feather icon-chevron-left open-card-option"></i></li>
               </ul>
            </div>
         </div>
         <div class="card-block">
            <div class="latest-update-box">
               <?php if (!empty($login_logs)): ?>
               <?php foreach ($login_logs as $value):
                  if(isset($value['username'])){
                  
                  	$timestamp = $value['time'];
                  	$date = date('d-M-Y h:i', $timestamp); 
                  ?>
               <div class="row p-t-20 p-b-30">
                  <div class="col-auto text-right update-meta p-r-0">
                     <i class="feather icon-zap f-w-600 bg-c-blue update-icon"></i>
                  </div>
                  <div class="col p-l-5">
                     <a href="<?php echo base_url() ?>admin/users/edit/<?php echo $value['id'] ?>">
                        <h6><?php echo $value['username'] ?></h6>
                     </a>
                     <p>Name : <?php echo $value['first_name']. '  '.$value['last_name'] ?> </p>
                     <p>Email : <?php echo $value['email'] ?> </p>
                     <p>Time : <?php echo $date; ?></p>
                     <!-- <p class="text-muted m-b-0"><?php print_r($value) ?></p> -->
                  </div>
               </div>
               <?php } endforeach ?>
               <?php endif ?>
            </div>
         </div>
      </div>
   </div>
   <!--login history -->
   <!-- login history -->
   <div class="col-xl-4 col-md-12">
      <div class="card latest-update-card" style="height: 240px;overflow: auto">
         <div class="card-header">
            <h5>Failed Login Attempsts </h5>
            <div class="card-header-right">
               <ul class="list-unstyled card-option">
                  <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                  <li><i class="feather icon-maximize full-card"></i></li>
                  <li><i class="feather icon-minus minimize-card"></i></li>
                  <li><i class="feather icon-refresh-cw reload-card"></i></li>
                  <li><i class="feather icon-trash close-card"></i></li>
                  <li><i class="feather icon-chevron-left open-card-option"></i></li>
               </ul>
            </div>
         </div>
         <div class="card-block">
            <div class="latest-update-box">
               <?php if (!empty($login_attempts)): ?>
               <?php foreach ($login_attempts as $value):
                  if(isset($value['ip'])){
                  
                  	$date = strtotime($value['attempt'])
                  ?>
               <div class="row p-t-20 p-b-30">
                  <div class="col-auto text-right update-meta p-r-0">
                     <i class="feather icon-zap f-w-600 bg-c-blue update-icon"></i>
                  </div>
                  <div class="col p-l-5">
                     <h6>
                        IP : 
                        <?php if ($value['ip']=='::1'): ?>
                        localhost
                        <?php endif ?><?php echo $value['ip'] ?>
                     </h6>
                     <p>Time : <?php echo date('d-M-y',$date) ; ?></p>
                     <!-- <p class="text-muted m-b-0"><?php print_r($value) ?></p> -->
                  </div>
               </div>
               <?php } endforeach ?>
               <?php endif ?>
            </div>
         </div>
      </div>
   </div>
   <!--login history -->
</div>
<div class="row">
<h2>test</h2>
<nav class="navbar">
   <div class="">
      <p>dynamic menu</p>
      <ul class="nav navbar-nav">
         <?php $bu = base_url(); ?>
         <li class="active"><a href="<?php echo $bu ?>" class="category01 active"><i class=" fa fa-home">    </i></a></li>
         <?php
            $menu_slug = $this->uri->segment(1); 
            if ($main_menu!=NULL) {
               $i = 2;
               foreach ($main_menu as $key => $value) {
                   $query1 = $this->db->query("SELECT * FROM menu_content WHERE parents_id='$value->menu_content_id' ORDER BY menu_position ASC");
                   $num_rows1 = $query1->result();
                   
                   if($value->slug!=NULL){
                       $slug1 = $bu.$value->slug;
                   }elseif ($value->link_url!=NULL) {
                       $slug1 = $value->link_url;
                   }else{
                       $slug1 = $bu."#";
                   }
            
                   if ($num_rows1) {
                       echo '<li class="dropdown">';
                       echo '<a  href="' . $slug1 . '" class="dropdown-toggle category0' . $i++ . '" data-toggle="dropdown">' . $value->menu_lavel . '<span class="pe-7s-angle-down"></span></a>';
                       echo '<ul class="dropdown-menu menu-slide">';
                       foreach ($num_rows1 as $key1 => $value1) {
                           if($value1->slug!=NULL){
                               $slug2 = $bu.$value1->slug;
                           }elseif ($value1->link_url!=NULL) {
                               $slug2 = $value1->link_url;
                           }else{
                               $slug2 = $bu."#";
                           }
                           echo' <li><a '.(($value1->slug == $menu_slug) ? $selected : '').' href="' . $slug2. '">' . $value1->menu_lavel . '</a></li>';
                       }
                       echo '</ul>';
                   } else {
                       if($value->parents_id!=false){
            
                       }else{
                       echo '<li> <a '.(($value->slug == $menu_slug) ? $selected : '').' href="' . $slug1 . '" class="category0' . $i++ . '">' . $value->menu_lavel . '</a>';
                           }            
                       }
                   echo '</li>';
               }
            }
               ?>
      </ul>
   </div>
</nav>