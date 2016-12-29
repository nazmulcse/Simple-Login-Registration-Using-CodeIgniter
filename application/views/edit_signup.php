<?php include "asset/include/header.php";
function pagetitle(){
    $page = "Home";
    return $page;
}

function pagedes(){
    $des = "";
    return $des;
}

function keyword(){
    $keyword = "" ;
    return $keyword;
}
?>

<!-- banner start -->
<!-- ================ -->

<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
            <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.php">Home</a></li>
            <li class="active">Page About</li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->


<!-- banner end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container padding-bottom-clear">

    <div class="container">
        <div class="row">




            <!-- section start -->

            <div class="container">
                <?php echo $this->session->flashdata('msg'); ?>
                <div class="row">

                    <div class="col-md-12">
                        <?php $attributes = array("name" => "signupform");
                        echo form_open_multipart("signup/update", $attributes);?>
                        <h3 align="center" style="color:#33BEF2; font-weight:bold;">Fill-up The Form Carefully</h3>


                        <div class="col-md-6 well">
                            <div class="form-group">
                                <label for="name">Full Name <span style="color: red;">*</span></label>
                                <input class="form-control" name="full_name" required="required" placeholder="Your Full Name" type="text" value="<?php echo $user[0]->full_name?>" />
                                <input name="id"  type="hidden" value="<?php echo $user[0]->id?>" />
                                <span class="text-danger"><?php echo form_error('full_name'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="email">Email <span style="color: red;">*</span></label>
                                <input class="form-control" name="email" required="required" placeholder="Enter Your Email" type="text" value="<?php echo $user[0]->email; ?>" />
                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="subject">Password <span style="color: red;">*</span></label>
                                <input class="form-control" name="password" placeholder="Password" type="password" value="<?php echo $user[0]->password; ?>" />
                                <span class="text-danger"><?php echo form_error('password'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="subject">Confirm Password</label>
                                <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                                <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Email Password <span style="color: red;">*</span></label>
                                <input class="form-control" name="client_email_password" required="required" placeholder="Your Email Password" type="text" value="<?php echo $user[0]->client_email_password; ?>" />
                                <span class="text-danger"><?php echo form_error('client_email_password'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Date of Birth <span style="color: red;">*</span></label>
                                <input class="form-control" name="date_of_birth" required="required" placeholder="Date of Birth" type="text" value="<?php echo $user[0]->date_of_birth; ?>" />
                                <span class="text-danger"><?php echo form_error('date_of_birth'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Mobile Number <span style="color: red;">*</span></label>
                                <input class="form-control" name="mobile_no" required="required" placeholder="Enter Your Mobile No." type="text" value="<?php echo $user[0]->mobile_no; ?>" />
                                <span class="text-danger"><?php echo form_error('mobile_no'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Your NID No. <span style="color: red;">*</span></label>
                                <input class="form-control" name="nid" required="required" placeholder="Enter Your NID No." type="text" value="<?php echo $user[0]->nid; ?>" />
                                <span class="text-danger"><?php echo form_error('nid'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">BTC Address</label>
                                <input class="form-control" name="btc_address" required="required" placeholder="BTC Address" type="text" value="<?php echo $user[0]->btc_address; ?>" />
                                <span class="text-danger"><?php echo form_error('btc_address'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Address</label>
                                <input class="form-control" name="address" placeholder="Enter Your Address" type="text" value="<?php echo $user[0]->address; ?>" />
                                <span class="text-danger"><?php echo form_error('address'); ?></span>
                            </div>


                        </div>



                        <div class="col-md-6 well">

                            <div class="form-group">
                                <label for="name">Bank Name <span style="color: red;">*</span></label>
                                <input class="form-control" name="bank_name" required="required" placeholder="Your Bank Name" type="text" value="<?php echo $user[0]->bank_name; ?>" />
                                <span class="text-danger"><?php echo form_error('bank_name'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="email">Account Type <span style="color: red;">*</span></label>
                                <input class="form-control" name="account_type" required="required" placeholder="Account Type" type="text" value="<?php echo $user[0]->account_type; ?>" />
                                <span class="text-danger"><?php echo form_error('account_type'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="name">Account No. <span style="color: red;">*</span></label>
                                <input class="form-control" name="account_no" required="required" placeholder="Accont No." type="text" value="<?php echo $user[0]->account_no; ?>" />
                                <span class="text-danger"><?php echo form_error('account_no'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="name">Payza Id <span style="color: red;">*</span></label>
                                <input class="form-control" name="payza_id" required="required" placeholder="Payza Id" type="text" value="<?php echo $user[0]->payza_id; ?>" />
                                <span class="text-danger"><?php echo form_error('payza_id'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Payza Password <span style="color: red;">*</span></label>
                                <input class="form-control" name="payza_password" required="required" placeholder="Payza Password" type="text" value="<?php echo $user[0]->payza_password; ?>" />
                                <span class="text-danger"><?php echo form_error('payza_password'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Group Name <span style="color: red;">*</span></label>
                                <input class="form-control" name="group" required="required" placeholder="Group Name" type="text" value="<?php echo $user[0]->group; ?>" />
                                <span class="text-danger"><?php echo form_error('group'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Registration Date<span style="color: red;">*</span></label>
                                <input class="form-control" name="registration_date" required="required" placeholder="Registration Date" type="textarea" value="<?php echo $user[0]->registration_date; ?>" />
                                <span class="text-danger"><?php echo form_error('registration_date'); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="name">Your NID Photo <span style="color: red;">*</span></label>
                                <input class="form-control" name="nid_photo" type="file" />
                                <span class="text-danger"><?php echo form_error('nid_photo'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Photo <span style="color: red;">*</span></label>
                                <input class="form-control" name="user_photo" type="file"/>
                                <span class="text-danger"><?php echo form_error('user_photo'); ?></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Is Active <span style="color: red;">*</span></label>
                                <?php
                                    $active = $user[0]->is_active == 1 ? "checked='checked'":"";
                                    $inActive = $user[0]->is_active == 0 ? "checked='checked'":"";
                                ?>
                                <div class="radio">
                                    <label>
                                        <input name="is_active" <?php echo $active;?> type="radio" value="1">
                                        Yes
                                    </label>
                                    <label>
                                        <input name="is_active" <?php echo $inActive;?> type="radio" value="0">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-info">Update</button>
                                <button name="cancel" type="reset" class="btn btn-info">Reset</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>




                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        Already Registered? <a href="<?php echo base_url(); ?>login">Login Here</a>
                    </div>
                </div>
            </div>


            <!-- section end -->

            <?php include "asset/include/footer.php" ?>

        </div>
        <!-- page-wrapper end -->

        <!-- JavaScript files placed at the end of the document so the pages load faster -->
        <!-- ================================================== -->
        <!-- Jquery and Bootstap core js files -->
        <script type="text/javascript" src="asset/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>

        <!-- Modernizr javascript -->
        <script type="text/javascript" src="asset/plugins/modernizr.js"></script>

        <!-- jQuery Revolution Slider  -->
        <script type="text/javascript" src="asset/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="asset/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>


        <!-- Isotope javascript -->
        <script type="text/javascript" src="asset/plugins/isotope/isotope.pkgd.min.js"></script>

        <!-- Magnific Popup javascript -->
        <script type="text/javascript" src="asset/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Appear javascript -->
        <script type="text/javascript" src="asset/plugins/waypoints/jquery.waypoints.min.js"></script>

        <!-- Count To javascript -->
        <script type="text/javascript" src="asset/plugins/jquery.countTo.js"></script>

        <!-- Parallax javascript -->
        <script src="asset/plugins/jquery.parallax-1.1.3.js"></script>

        <!-- Contact form -->
        <script src="asset/plugins/jquery.validate.js"></script>



        <!-- Background Video -->
        <script src="asset/plugins/vide/jquery.vide.js"></script>

        <!-- Owl carousel javascript -->
        <script type="text/javascript" src="asset/plugins/owl-carousel/owl.carousel.js"></script>



        <!-- SmoothScroll javascript -->
        <script type="text/javascript" src="asset/plugins/jquery.browser.js"></script>
        <script type="text/javascript" src="asset/plugins/SmoothScroll.js"></script>



        <!-- Initialization of Plugins -->
        <script type="text/javascript" src="asset/js/template.js"></script>

        <!-- Custom Scripts -->
        <script type="text/javascript" src="asset/js/custom.js"></script>


        </body>


        </html>