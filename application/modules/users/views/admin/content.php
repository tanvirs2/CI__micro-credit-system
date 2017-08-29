<div class="row">
	<div class="col-md-12">
		<!-- BEGIN VALIDATION STATES-->
		<div class="portlet light portlet-fit portlet-form bordered">
			<div class="portlet-title">


				<div class="portlet-body">
					<!-- BEGIN FORM-->
					<form action="<?php echo base_url('users/addMember');?>" method="post" class="form-horizontal" id="membersForm">
						<div class="form-body">
							<div class="alert alert-danger display-hide">
								<button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
							<div class="alert alert-success display-hide">
								<button class="close" data-close="alert"></button> Your form validation is successful! </div>
							<div class="form-group">
								<label class="control-label col-md-3">Name
                                    <span class="required"> * </span>
                                </label>
								<div class="col-md-4">
									<input type="text" name="memName" class="form-control" /> </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Email
                                    <span class="required"> * </span>
                                </label>
								<div class="col-md-4">
									<input type="text" name="memEmail" class="form-control" /> </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Phone
                                            <span class="required"> * </span>
                                        </label>
								<div class="col-md-4">
									<input type="text" name="memPhn" class="form-control" /> </div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Date of Birth
                                    <span class="required"> * </span>
                                </label>
								<div class="col-md-4">
									<input type="text" class="date-picker form-control" name="memDOB" data-date-format="yyyy/mm/dd" readonly/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Present Address
                                                    <span class="required"> * </span>
                                                </label>
								<div class="col-md-4">
									<input name="memPRaddrss" type="text" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Permanent Address
                                                    <span class="required"> * </span>
                                                </label>
								<div class="col-md-4">
									<input name="memPEaddrss" type="text" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">NID Number
                                                    <span class="required"> * </span>
                                                </label>
								<div class="col-md-4">
									<input name="memNID" type="number" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Field Officer
                                                    <span class="required"> * </span>
                                                </label>
								<div class="col-md-4">
									<select class="form-control" name="memFO">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Join Date
                                                    <span class="required"> * </span>
                                                </label>
								<div class="col-md-4">
									<input type="text" class="date-picker form-control" name="memJnDate" data-date-format="yyyy/mm/dd" readonly/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Password
                                                    <span class="required"> * </span>
                                                </label>
								<div class="col-md-4">
									<input name="memPass" type="password" class="form-control" />
								</div>
							</div>
							<div class="form-group last">
								<label class="control-label col-md-3">Member Image</label>
								<div class="col-md-9">
									<div class="fileinput fileinput-new" data-provides="fileinput">
										<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
											<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
										<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
										<div>
											<span class="btn default btn-file">
                                                <span class="fileinput-new"> Select image </span>
											<span class="fileinput-exists"> Change </span>
											<input type="file" name="memImg"> </span>
											<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
										</div>
									</div>
									<div class="clearfix margin-top-10">
										<span class="label label-danger">NOTE!</span> Image Size Must W132 X H170</div>
								</div>
							</div>

							<div class="form-actions">
								<div class="row">
									<div class="col-md-offset-3 col-md-9">
										<button type="button" id='uu' class="btn green">Submit</button>
										<button type="button" class="btn grey-salsa btn-outline">Cancel</button>
									</div>
								</div>
							</div>
					</form>
					<!-- END FORM-->
					</div>
				</div>
				<!-- END VALIDATION STATES-->
			</div>
		</div>
