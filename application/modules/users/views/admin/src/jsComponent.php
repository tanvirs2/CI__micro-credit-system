<script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/pages/scripts/form-validation.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<!-- AJAX FORM SUBMIT PLUGIN -->
<script src="http://malsup.github.com/jquery.form.js"></script> 

<script>

    $("#membersForm").validate({
        errorClass: "error-lavel",
    });
    
    $(document).ajaxStart( function() {  
        $("img#memberLoader").removeClass("display-hide"); 
    }).ajaxStop ( function(){ 
        setTimeout(function () {
            $("img#memberLoader").addClass("display-hide");
            $("html, body").animate({scrollTop: 0});
        }, 2000);       
    });

    function fadeOutFunc(value, val, time){
        
        setTimeout(function () {
            $(value).fadeOut('slow', function(){
                $(this).val('display-hide');
            });
        }, time); 
    }

    $(document).ready(function() { 
        //$("#memberAdd").click(function(e){
            $('#membersForm').ajaxForm({                    
            
                success: function (data){
                    if(!data){    
                        $('div#successMsg').addClass('display-hide');
                        $('div#errorMsg').removeClass('display-hide');
                        //fadeOutFunc('div#errorMsg','addClass',4000);
                    }else{
                        $('div#errorMsg').addClass('display-hide');
                        $('div#successMsg').removeClass("display-hide");
                        //fadeOutFunc('div#successMsg','addClass',4000);
                        $('#membersForm').resetForm();
                    }
                    
                }
            });
        //});
    }); 

    
</script> 