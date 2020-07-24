<?php
include "nav.php";
?>
                        <h3 class="text-themecolor"><i class="fa fa-home"></i>&ensp;Dashboard</h3>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                             <h6 style="margin-right: 20px;">Time: <span id="time"></span></h6>
                            <a class="btn btn-success d-none d-lg-block m-l-15" href="#"> Action</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Yearly Sales -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                    <div class="col-lg-12">
                        <div class="card oh">
                            <div class="card-body">
                                <div class="d-flex m-b-30 align-items-center no-block">
                                    <h5 class="card-title ">Yearly Sales</h5>
                                    <div class="ml-auto">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-circle text-info"></i> Iphone</li>
                                            <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="morris-area-chart" style="height: 200px;"></div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row text-center m-b-20">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h2 class="m-b-0 font-light">6000</h2><span class="text-muted">Total sale</span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h2 class="m-b-0 font-light">4000</h2><span class="text-muted">Iphone</span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h2 class="m-b-0 font-light">2000</h2><span class="text-muted">Ipad</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 50px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 20px">
                                            <p><b>Weather</b><i class="mdi-weather-partly-cloudy"></i></p>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 130px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row">
                                            <div class="col-md-3" style="margin-left: 20px">
                                                <br>
                                            <span class="text-xs font-weight-bold  text-uppercase mb-1" style="text-decoration: none;margin-left: 30px;font-size: 25px" ><i class="fa fa-user-plus text-primary"></i></span> 
                                            </div>
                                            <div class="col-md-8">
                                                
                                            <span style="font-size: 50px">12</span>
                                            <p style="font-size: 13px">New Contacts</p>
                                            </div>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 130px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row">
                                            <div class="col-md-3">
                                                <br>
                                            <span class="text-xs font-weight-bold  text-uppercase mb-1" style="text-decoration: none;margin-left: 30px;font-size: 30px" ><i class="fa fa-money text-success"></i></span> 
                                            </div>
                                            <div class="col-md-8">
                                                <br>
                                            <span style="font-size: 23px;margin-left: 10px;">Ksh. 178,520</span>
                                            <br><br>
                                            <p style="font-size: 13px;margin-left: 10px;">Revenue Earned Today</p>
                                            </div>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 130px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row">
                                            <div class="col-md-3" style="margin-left: 10px">
                                                <br>
                                            <span class="text-xs font-weight-bold  text-uppercase mb-1" style="text-decoration: none;margin-left: 30px;font-size: 25px" ><i class="fa fa-shopping-cart text-info"></i></span> 
                                            </div>
                                            <div class="col-md-8">
                                                
                                            <span style="font-size: 50px">+18%</span>
                                            <p style="font-size: 13px">Sales Volume</p>
                                            </div>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 130px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row">
                                            <div class="col-md-3" style="margin-left: 10px">
                                                <br>
                                            <span class="text-xs font-weight-bold  text-uppercase mb-1" style="text-decoration: none;margin-left: 30px;font-size: 25px" ><i class="fa fa-envelope text-info"></i></span> 
                                            </div>
                                            <div class="col-md-8">
                                                
                                            <span style="font-size: 50px">900</span>
                                            <p style="font-size: 13px">Campaign Emails Sent</p>
                                            </div>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="margin-top: -30px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Today's Schedule</h5>
                                <h6 class="card-subtitle">check out your daily schedule</h6>
                                <div class="steamline m-t-40">
                                    <div class="sl-item">
                                        <div class="sl-left bg-success"> <i class="fa fa-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                            <div class="desc">you can write anything </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Send documents to Clark</div>
                                            <div class="desc">Lorem Ipsum is simply </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="../assets/images/users/1.jpg"> </div>
                                        <div class="sl-right">
                                            <div class="font-medium">John Doe <span class="sl-date"> 5pm</span></div>
                                            <div class="desc">Call today with gohn doe </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="../assets/images/users/2.jpg"> </div>
                                        <div class="sl-right">
                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="img-circle" alt="user" src="../assets/images/users/3.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="#">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Approve meeting with tiger
                                                <br><a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <div class="row">
                            <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 120px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 40px">
                                            <h1><i class="bx bxl-whatsapp text-success" style="font-size: 60px;float: center;"></i></h1>
                                            <p>Whatsapp</p>
                                            <p style="margin-left: 20px;margin-top: -15px;font-size: 12px">103 Messages</p>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 120px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 40px">
                                            <h1><i class="bx bxl-instagram text-danger" style="font-size: 60px;float: center;"></i></h1>
                                            <p>Instagram</p>
                                            <p style="margin-left: 37px;margin-top: -15px;font-size: 12px">436 Feeds</p>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: -210px">
                            <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 120px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 40px">
                                              <h1><i class="bx bxl-twitter text-info" style="font-size: 60px;float: center;"></i></h1>
                                            <p>Twitter</p>
                                            <p style="margin-left: 37px;margin-top: -15px;font-size: 12px">105 Feeds</p>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 120px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 40px">
                                            
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-2">
                    <div class="row">
                            <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 120px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 40px">
                                            <h1><i class="bx bxl-facebook text-info" style="font-size: 60px;float: center;"></i></h1>
                                            <p>facebook</p>
                                            <p style="margin-left: 37px;margin-top: -15px;font-size: 12px">192 Feeds</p>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 120px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 40px">
                                            <h1><i class="bx bxl-telegram text-dark" style="font-size: 60px;float: center;"></i></h1>
                                            <p>Telegram</p>
                                            <p style="margin-left: 20px;margin-top: -15px;font-size: 12px">67 Messages</p>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div> 
                      <div class="col-md-4">
                    <div class="row">
                            <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 340px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 20px">
                                            <h4>Calendar&ensp;<i class="fa fa-calendar"></i></h4>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 40px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 20px">
                                           
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                 <div class="card-body" style="height: 40px;">
                                     <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <div class="row"style="margin-left: 20px">
                                            
                                            </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>     
                </div>

                
                <!-- ============================================================== -->
                <!-- To do chat and message -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                            </div>
                            <ul class="feeds p-b-20">
                                <li>
                                    <div class="bg-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <li>
                                    <div class="bg-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                                <li>
                                    <div class="bg-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="text-muted">31 May</span></li>
                                <li>
                                    <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-dark"><i class="fa fa-bell-o"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                                <li>
                                    <div class="bg-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <li>
                                    <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-dark"><i class="fa fa-bell-o"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Messages (5 New)</h5>
                                <div class="message-box">
                                    <div class="message-widget message-scroll">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Welcome to the Elite Admin</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
       <?php
include "footer.php";
?>