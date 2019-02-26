



<!-- theme nav -->
<div class="pcoded-inner-navbar main-menu">


                           <div class="pcoded-navigation-label">Navigation</div>

                           <ul class="pcoded-item pcoded-left-item">
                                    <li class=" ">
                                 <a target="_blank" href="<?=base_url()?>" class="waves-effect waves-dark">
                                 <span class="pcoded-micon">
                                 <i class="feather icon-aperture rotate-refresh"></i>
                                 </span>
                                 <span class="pcoded-mtext">View Site</span>
                                 </a>
                              </li>
                                <li class="<?php echo (uri_string() == 'admin' OR uri_string() == 'admin/dashboard') ? 'active' : ''; ?> ">
                                   <a href="<?=base_url()?>admin" class="waves-effect waves-dark">
                                 <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                 <span class="pcoded-mtext">Dashboard</span>
                                 </a>
                              </li>


                              <li class="pcoded-hasmenu <?php echo (uri_string() == 'admin/gallery') ? 'active' : ''; ?> <?php echo (uri_string() == 'admin/gallery/list') ? 'active' : ''; ?>">
                                 <a href="javascript:void(0)" class="waves-effect waves-dark">
                                 <span class="pcoded-micon"><i class="feather icon-film"></i></span>
                                 <span class="pcoded-mtext">Category</span>
                                 </a>
                                 <ul class="pcoded-submenu">
                                    <li class="">
                                       <a href="<?php echo base_url('/admin/gallery/list'); ?>" class="waves-effect waves-dark">
                                       <span class="pcoded-mtext">List</span>
                                       </a>

                                    </li>
                                    <li class=" <?php echo (uri_string() == 'admin/gallery/') ? 'active' : ''; ?>">
                                       <a href="<?php echo base_url('/admin/gallery/'); ?>" class="waves-effect waves-dark">
                                       <span class="pcoded-mtext">Add</span>
                                       </a>
                                    </li>
                                  
                                 </ul>
                              </li>
                              <li class="pcoded-hasmenu <?php echo (uri_string() == 'admin/images' OR uri_string() == 'admin/images/add') ? 'active' : ''; ?> <?php echo (uri_string() == 'admin/images/list') ? 'active' : ''; ?>">
                                 <a href="javascript:void(0)" class="waves-effect waves-dark">
                                 <span class="pcoded-micon"><i class="feather icon-film"></i></span>
                                 <span class="pcoded-mtext">Images</span>
                                 </a>
                                 <ul class="pcoded-submenu">
                                    <li class="">
                                       <a href="<?php echo base_url('/admin/images/'); ?>" class="waves-effect waves-dark">
                                       <span class="pcoded-mtext">List</span>
                                       </a>

                                    </li>
                                    <li class=" <?php echo (uri_string() == 'admin/images/add') ? 'active' : ''; ?>">
                                       <a href="<?php echo base_url('/admin/images/add'); ?>" class="waves-effect waves-dark">
                                       <span class="pcoded-mtext">Add</span>
                                       </a>
                                    </li>
                                  
                                 </ul>
                              </li>
                              <li class="pcoded-hasmenu <?php echo (uri_string() == 'admin/users') ? 'active' : ''; ?> <?php echo (uri_string() == 'admin/users/add') ? 'active' : ''; ?>">
                                 <a href="javascript:void(0)" class="waves-effect waves-dark">
                                 <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                 <span class="pcoded-mtext">Users</span>
                                 </a>
                                 <ul class="pcoded-submenu">
                                    <li class=" ">
                                       <a href="<?=base_url()?>admin/users" class="waves-effect waves-dark">
                                       <span class="pcoded-mtext">List</span>
                                       </a>
                                       
                                    </li>
                                    <li class="">
                                       <a href="<?=base_url()?>admin/users/add" class="waves-effect waves-dark">
                                       <span class="pcoded-mtext">Add</span>
                                       </a>
                                       
                                    </li>
                                    
                                 </ul>
                              </li>
                              <li class="<?php echo (uri_string() == 'admin/contact') ? 'active' : ''; ?>">
                                 <a href="<?php echo base_url('/admin/contact'); ?>" class="waves-effect waves-dark">
                                 <span class="pcoded-micon">
                                 <i class="feather icon-message-square"></i>
                                 </span>
                                 <span class="pcoded-mtext">Messages</span>
                                 </a>
                              </li>
                           <div class="pcoded-navigation-label">Site Setting</div>

                              <li class="<?php echo (uri_string() == 'admin/settings') ? 'active' : ''; ?>">
                                 <a href="<?php echo base_url('/admin/settings'); ?>" class="waves-effect waves-dark">
                                 <span class="pcoded-micon">
                                 <i class="feather icon-sliders"></i>
                                 </span>
                                 <span class="pcoded-mtext">Settings</span>
                                 </a>
                              </li>
                           <div class="pcoded-navigation-label">Site Status</div>


                        


                              <li class="pcoded-hasmenu <?php echo (uri_string() == 'admin/pages') ? 'active' : ''; ?>">
                                 <a href="javascript:void(0)" class="waves-effect waves-dark">
                                 <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                 <span class="pcoded-mtext">Pages</span>
                                 </a>
                                 <ul class="pcoded-submenu">
                                    <li class="<?php echo (uri_string() == 'admin/pages') ? 'active' : ''; ?>">
                                       <a href="<?=base_url()?>admin/pages" class="waves-effect waves-dark" class="<?php echo (uri_string() == 'admin/pages') ? 'active' : ''; ?>">
                                       <span class="pcoded-mtext">List</span>
                                       </a>

                                    </li>
                                    <li class=" <?php echo (uri_string() == 'admin/pages/add') ? 'active' : ''; ?>">
                                       <a href="<?=base_url()?>admin/pages/add" class="waves-effect waves-dark">
                                       <span class="pcoded-mtext">Add</span>
                                       </a>
                                    </li>
                                  
                                 </ul>
                              </li>


                              <li class="pcoded-hasmenu <?php echo (uri_string() == 'admin/sliders') ? 'active' : ''; ?>">
                                 <a href="javascript:void(0)" class="waves-effect waves-dark">
                                 <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                 <span class="pcoded-mtext">Sliders</span>
                                 </a>
                                 <ul class="pcoded-submenu">
                                    <li class="<?php echo (uri_string() == 'admin/sliders') ? 'active' : ''; ?>">
                                       <a href="<?=base_url()?>admin/sliders" class="waves-effect waves-dark" class="<?php echo (uri_string() == 'admin/sliders') ? 'active' : ''; ?>">
                                       <span class="pcoded-mtext">List</span>
                                       </a>

                                    </li>
                                    <li class=" <?php echo (uri_string() == 'admin/sliders/add') ? 'active' : ''; ?>">
                                       <a href="<?=base_url()?>admin/sliders/add" class="waves-effect waves-dark">
                                       <span class="pcoded-mtext">Add</span>
                                       </a>
                                    </li>
                                  
                                 </ul>
                              </li>

                              <li class="pcoded-hasmenu <?php echo (uri_string() == 'admin/services') ? 'active' : ''; ?>">
                                 <a href="javascript:void(0)" class="waves-effect waves-dark">
                                 <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                 <span class="pcoded-mtext">Services</span>
                                 </a>
                                 <ul class="pcoded-submenu">
                                    <li class="<?php echo (uri_string() == 'admin/services') ? 'active' : ''; ?>">
                                       <a href="<?=base_url()?>admin/services" class="waves-effect waves-dark" class="<?php echo (uri_string() == 'admin/services') ? 'active' : ''; ?>">
                                       <span class="pcoded-mtext">List</span>
                                       </a>

                                    </li>
                                    <li class=" <?php echo (uri_string() == 'admin/services/add') ? 'active' : ''; ?>">
                                       <a href="<?=base_url()?>admin/services/add" class="waves-effect waves-dark">
                                       <span class="pcoded-mtext">Add</span>
                                       </a>
                                    </li>
                                  
                                 </ul>
                              </li>

                              <div class="pcoded-navigation-label">Trash</div>

                                 <li class=" ">
                                 <a target="_blank" href="<?=base_url()?>/admin/trash" class="waves-effect waves-dark">
                                 <span class="pcoded-micon">
                                 <i class="feather icon-trash"></i>
                                 </span>
                                 <span class="pcoded-mtext">Trash</span>
                                 </a>
                              </li>


                        

                            
                           </ul>
                          
                        </div>
<!-- theme nav -->