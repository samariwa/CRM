<?php
include "nav.php";
?>
                        <h3 class="text-themecolor"><i class="fa fa-address-book"></i>&ensp;Client Contacts</h3>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <h6 style="margin-right: 20px;">Time: <span id="time"></span></h6>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Client Contacts</li>
                            </ol>
                            <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus"></i>&ensp;Add Contact</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Simple Basic Map</h4>
                                <div id="gmaps-simple" class="gmaps"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <?php
include "footer.php";
?>