<?php 
extract($memberInfo[0]);
?>
<br>
<div class="alert alert-danger <?php echo !empty($_SESSION['error'])?'':'display-hide'; ?>" id="errorMsg"><?php echo !empty($_SESSION['error'])?$_SESSION['error']:''; ?></div>
<div class="alert alert-success <?php echo !empty($_SESSION['success'])?'':'display-hide'; ?>" id="successMsg"><?php echo !empty($_SESSION['success'])?$_SESSION['success']:''; ?></div>

<!-- END PAGE HEADER-->
<div class="row">
<div class="col-md-12">
    <!-- BEGIN PROFILE SIDEBAR -->
    <div class="profile-sidebar">
        <!-- PORTLET MAIN -->
        <div class="portlet light profile-sidebar-portlet ">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
                <img src="<?php echo base_url('uploads/members/member').$memId.'.jpg'; ?>" class="img-responsive" alt=""> </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"> <?php echo $memName; ?> </div>
                <div class="profile-usertitle-job"> Member </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class="profile-userbuttons">
                <button type="button" class="btn btn-circle red btn-sm">Account Type: <?php echo $acType; ?></button>
                <br><br>
            </div>
            <!-- END SIDEBAR BUTTONS -->
        </div>
        <!-- END PORTLET MAIN -->
        <!-- PORTLET MAIN -->
        <div class="portlet light ">
            <!-- STAT -->
            <div class="row list-separated profile-stat">
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="uppercase profile-stat-title"> 37 </div>
                    <div class="uppercase profile-stat-text"> Loan </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="uppercase profile-stat-title"> 51 </div>
                    <div class="uppercase profile-stat-text"> Account </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="uppercase profile-stat-title"> 61 </div>
                    <div class="uppercase profile-stat-text"> Amount </div>
                </div>
            </div>
            <!-- END STAT -->
            <div>
                <h4 class="profile-desc-title">About <?php echo $memName; ?></h4>
                <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                <div class="margin-top-20 profile-desc-link">
                    <i class="fa fa-envelope"></i>
                    <a href="http://www.keenthemes.com"><?php echo !empty($memEmail)?$memEmail:'No Email'; ?></a>
                </div>
                <div class="margin-top-20 profile-desc-link">
                    <i class="fa fa-phone"></i>
                    <a href="http://www.twitter.com/keenthemes/"><?php echo !empty($memPhn)?$memPhn:'No Phone Number'; ?></a>
                </div>
                <div class="margin-top-20 profile-desc-link">
                    <i class="fa fa-facebook"></i>
                    <a href="http://www.facebook.com/keenthemes/">Fild Officer Name And Phone</a>
                </div>
            </div>
        </div>
        <!-- END PORTLET MAIN -->
    </div>
    <!-- END BEGIN PROFILE SIDEBAR -->
    <!-- BEGIN PROFILE CONTENT -->
    <div class="profile-content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light ">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                            </li>
                            <li>
                                <a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <!-- PERSONAL INFO TAB -->
                            <div class="tab-pane active" id="tab_1_1">
                            <form action="<?php echo base_url('users/updateMember');?>" method="post" class="form-horizontal validateForm" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $memId; ?>" name="memId"/>
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" value="<?php echo $memName; ?>" name="memName" class="form-control" required /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" value="<?php echo $memEmail; ?>" name="memEmail" class="form-control" required /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input type="text" value="<?php echo $memPhn; ?>" name="memPhn" class="form-control" required /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Date of birth</label>
                                        <input type="text" value="<?php echo $memDOB; ?>" class="date-picker form-control" name="memDOB" data-date-format="yyyy-mm-dd" required readonly/> </div>
                                    <div class="form-group">
                                        <label class="control-label">Present Address</label>
                                        <input name="memPRaddrrs" value="<?php echo $memPRaddrrs; ?>" type="text" class="form-control" required /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Parmanent Address</label>
                                        <input name="memPEaddrrs" value="<?php echo $memPEaddrrs; ?>" type="text" class="form-control" required /> </div>
                                    <div class="form-group">
                                        <label class="control-label">NID Number</label>
                                        <input name="memNID" value="<?php echo $memNID; ?>" type="number" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Account Type</label>
                                        <select class="form-control" name="acType" required>
                                            <option value="">Select...</option>
                                            <option value="General Savings" <?php echo select($acType,'General Savings'); ?>>General Savings</option>
                                            <option value="DPS" <?php echo select($acType,'DPS'); ?>>DPS</option>
                                            <option value="FDR" <?php echo select($acType,'FDR'); ?>>FDR</option>
									    </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Field Officer</label>
                                        <select class="form-control" name="memFO" required>
                                            <option value="">Select...</option>
                                            <option value="Category 1" <?php echo select($memFO,'Category 1'); ?>>Category 1</option>
                                            <option value="Category 2" <?php echo select($memFO,'Category 2'); ?>>Category 2</option>
                                            <option value="Category 3" <?php echo select($memFO,'Category 3'); ?>>Category 5</option>
                                            <option value="Category 4" <?php echo select($memFO,'Category 4'); ?>>Category 4</option>
									    </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Join Date</label>
                                        <input type="text" value="<?php echo $memJnDate; ?>" class="date-picker form-control" name="memJnDate" data-date-format="yyyy-mm-dd" required readonly/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="fileinput fileinput-exists" data-provides="fileinput" data-name="myimage">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> 
                                            <img src="<?php echo base_url('uploads/members/member').$memId.'.png'; ?>" alt="" style="max-width: 200px; max-height: 150px;"/>
                                            </div>
                                            <div>
                                                <span class="btn default btn-file">
                                                    <span class="fileinput-new"> Select image </span>
                                                    <span class="fileinput-exists"> Change </span>
                                                    <input type="file" name="memImg"> </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                        <div class="clearfix margin-top-10">
                                            <span class="label label-danger">NOTE!</span> Image Size Must W132 X H170 And only JPG format.
                                        </div>
                                    </div>




                                    <div class="margiv-top-10">
                                    <button type="submit" id='memberUpdate' class="btn green">Update</button>
                                    <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <!-- END PERSONAL INFO TAB -->                         
                            <!-- PRIVACY SETTINGS TAB -->
                            <div class="tab-pane" id="tab_1_4">
                                <p><b>For Future Use</b></p>
                                <form action="#">
                                    <table class="table table-light table-hover">
                                        <tr>
                                            <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                            <td>
                                                <div class="mt-radio-inline">
                                                    <label class="mt-radio">
                                                        <input type="radio" name="optionsRadios1" value="option1" /> Yes
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio">
                                                        <input type="radio" name="optionsRadios1" value="option2" checked/> No
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                            <td>
                                                <div class="mt-radio-inline">
                                                    <label class="mt-radio">
                                                        <input type="radio" name="optionsRadios11" value="option1" /> Yes
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio">
                                                        <input type="radio" name="optionsRadios11" value="option2" checked/> No
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                            <td>
                                                <div class="mt-radio-inline">
                                                    <label class="mt-radio">
                                                        <input type="radio" name="optionsRadios21" value="option1" /> Yes
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio">
                                                        <input type="radio" name="optionsRadios21" value="option2" checked/> No
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                            <td>
                                                <div class="mt-radio-inline">
                                                    <label class="mt-radio">
                                                        <input type="radio" name="optionsRadios31" value="option1" /> Yes
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-radio">
                                                        <input type="radio" name="optionsRadios31" value="option2" checked/> No
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <!--end profile-settings-->
                                    <div class="margin-top-10">
                                        <a href="javascript:;" class="btn red"> Save Changes </a>
                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                    </div>
                                </form>
                            </div>
                            <!-- END PRIVACY SETTINGS TAB -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PROFILE CONTENT -->
</div>
</div>