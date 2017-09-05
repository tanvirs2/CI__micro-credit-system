<div class="row">
<div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <br>
    <div class="alert alert-danger <?php echo !empty($_SESSION['error'])?'':'display-hide'; ?>" id="errorMsg"><?php echo !empty($_SESSION['error'])?$_SESSION['error']:''; ?></div>
    <div class="alert alert-success <?php echo !empty($_SESSION['success'])?'':'display-hide'; ?>" id="successMsg"><?php echo !empty($_SESSION['success'])?$_SESSION['success']:''; ?></div>
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="tools"> </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_1">
                <thead>
                    <tr>
                        <th>IMG</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Present Add.</th>
                        <th>Parmanent Add.</th>
                        <th>Acc. Type</th>
                        <th>FO</th>
                        <th>Join date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($memberList as $each): ?>
                    <tr id="rowId-<?php echo $each['memId']; ?>">
                        <td><img src="<?php echo base_url('uploads/members/member').$each['memId'].'.jpg'; ?>" alt="" width="50px" height="50px"></td>
                        <td><?php echo $each['memName']; ?></td>
                        <td><?php echo $each['memPhn']; ?></td>
                        <td><?php echo $each['memPRaddrrs']; ?></td>
                        <td><?php echo $each['memPEaddrrs']; ?></td>
                        <td><?php echo $each['acType']; ?></td>
                        <td><?php echo $each['memFO']; ?></td>
                        <td><?php echo $each['memJnDate']; ?></td>
                        <td>
                            <a href="<?php echo base_url('users/editMember/').$each['memId'];?>" id="collapsSide" class="btn btn-info btn-xs">View/Edit</a>
                            <a href="#" class="btn btn-danger btn-xs confirmation_but" data-popout="true" data-singleton="true" data-placement="left" data-id="<?php echo $each['memId'];?>">Delete</a>
                        </td>
                    </tr>       
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>