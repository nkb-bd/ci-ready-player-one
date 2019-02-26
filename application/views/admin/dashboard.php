<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

				<!-- main body -->
				<div class="row ">
					
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>Welcome to dashboard</h5>
							
							</div>
							<div class="card-block">
							
							</div>
						</div>
					</div>
					<!-- cards -->
					<div class="col-xl-3 col-md-6">
						<div class="card prod-p-card card-red">
							<div class="card-body">
								<div class="row align-items-center m-b-30">
									<div class="col">
										<h6 class="m-b-5 text-white">Total Page</h6>
										<h3 class="m-b-0 f-w-700 text-white"><?=$total_page?></h3>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard text-c-red f-18"></i>
									</div>
								</div>
								<p class="m-b-0 text-white text-center">
									<a href="<?=base_url()?>admin/pages" class="btn btn-inverse waves-effect waves-light">View All</a>
								</p>
							</div>
						</div>
					</div>
					<!-- cards -->
					<!-- cards -->
					<div class="col-xl-3 col-md-6">
						<div class="card prod-p-card card-blue">
							<div class="card-body">
								<div class="row align-items-center m-b-30">
									<div class="col">
										<h6 class="m-b-5 text-white">Total User</h6>
										<h3 class="m-b-0 f-w-700 text-white"><?=$total_user?></h3>
									</div>
									<div class="col-auto">
										<i class="fas fa-database text-c-blue f-18"></i>
									</div>
								</div>
								<p class="m-b-0 text-white text-center">
									<a href="<?=base_url()?>admin/users" class="btn btn-inverse waves-effect waves-light">View All</a>
								</p>
							</div>
						</div>
					</div>
					<!-- cards -->
					<div class="col-xl-3 col-md-6">
						<div class="card prod-p-card card-yellow">
							<div class="card-body">
								<div class="row align-items-center m-b-30">
									<div class="col">
										<h6 class="m-b-5 text-white">Total Category</h6>
										<h3 class="m-b-0 f-w-700 text-white"><?=$total_gallery?></h3>
									</div>
									<div class="col-auto">
										<i class="fas fa-dollar-sign text-c-yellow f-18"></i>
									</div>
								</div>
								<p class="m-b-0 text-white text-center">
									<a href="<?=base_url()?>admin/gallery"class="btn btn-inverse waves-effect waves-light">View All</a>
								</p>
							</div>
						</div>
					</div>
					<!-- cards -->
					<!-- cards -->
					<div class="col-xl-3 col-md-6">
						<div class="card prod-p-card card-green">
							<div class="card-body">
								<div class="row align-items-center m-b-30">
									<div class="col">
										<h6 class="m-b-5 text-white">Total Slider</h6>
										<h3 class="m-b-0 f-w-700 text-white"><?=$total_slider?></h3>
									</div>
									<div class="col-auto">
										<i class="fas fa-dollar-sign text-c-green f-18"></i>
									</div>
								</div>
								<p class="m-b-0 text-white text-center">
									<a href="<?=base_url()?>admin/sliders" class="btn btn-inverse waves-effect waves-light">View All</a>
								</p>
							</div>
						</div>
					</div>
					
					<!-- chat -->
					<div class="col-xl-4 col-md-12">
						<div class="card chat-card">
							<div class="card-header">
								<h5>Chat history</h5>
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
								<div class="row m-b-20 received-chat">
									<div class="col-auto p-r-0">
										<img data-cfsrc="../files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40" src="http://cdn-images-1.medium.com/max/1200/1*MccriYX-ciBniUzRKAUsAw.png">
									</div>
									<div class="col">
										<div class="msg">
											<p class="m-b-0">Nice to meet you!</p>
										</div>
										<p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
									</div>
								</div>
								<div class="row m-b-20 send-chat">
									<div class="col">
										<div class="msg">
											<p class="m-b-0">Nice to meet you!</p>
										</div>
										<p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
									</div>
									<div class="col-auto p-l-0">
										<img data-cfsrc="../files/assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40" src="http://cdn-images-1.medium.com/max/1200/1*MccriYX-ciBniUzRKAUsAw.png">
									</div>
								</div>
								<div class="row m-b-20 received-chat">
									<div class="col-auto p-r-0">
										<img data-cfsrc="../files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40" src="http://cdn-images-1.medium.com/max/1200/1*MccriYX-ciBniUzRKAUsAw.png">
									</div>
									<div class="col">
										<div class="msg">
											<p class="m-b-0">Nice to meet you!</p>
											<img data-cfsrc="../files/assets/images/mega-menu/01.jpg" alt="" src="file:///C:/My%20Web%20Sites/last_admin/colorlib.com/polygon/admindek/files/assets/images/mega-menu/01.jpg">
											<img data-cfsrc="../files/assets/images/mega-menu/03.jpg" alt="" src="file:///C:/My%20Web%20Sites/last_admin/colorlib.com/polygon/admindek/files/assets/images/mega-menu/03.jpg">
										</div>
										<p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
									</div>
								</div>
								<div class="row m-b-20 send-chat">
									<div class="col">
										<div class="msg">
											<p class="m-b-0">Come now to meet you!</p>
										</div>
										<p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
									</div>
									<div class="col-auto p-l-0">
										<img data-cfsrc="../files/assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40" src="http://cdn-images-1.medium.com/max/1200/1*MccriYX-ciBniUzRKAUsAw.png">
									</div>
								</div>
								<div class="right-icon-control">
									<div class="input-group input-group-button">
										<input type="text" class="form-control" placeholder="Send message">
										<div class="input-group-append">
											<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- login history -->
					<div class="col-xl-4 col-md-12">
						<div class="card latest-update-card">
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
						<div class="card latest-update-card">
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
			