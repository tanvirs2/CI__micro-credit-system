<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-bubble font-dark"></i>
            <span class="caption-subject font-dark bold uppercase">User Overview Table</span>
        </div>

    </div>
    <div class="portlet-body">
        <div class="table-scrollable">


            <table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
                <thead>
                <thead>
                <tr>
                    <th> # </th>
                    <th> Amount </th>
                    <th> DepositDate </th>
                    <th> Action </th>
                    <th> Status </th>
                </tr>
                </thead>
                </thead>
                <tbody>
                <?php
                foreach ($userOverView as $singleOverView) { ?>
                    <tr class="gradeX odd" role="row">
                        <td> 1 </td>
                        <td> <?php echo $singleOverView->dpAmount; ?> </td>
                        <td> <?php echo $singleOverView->depositDate; ?> </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#<?php echo base_url('');?>" data-target="" data-toggle=""><i class="icon-docs"></i> aaa </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <span class="label label-sm label-warning"> Suspended </span>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td></td>
                    <td><b>Total</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><b><?php echo $dpAmountSum->dpAmount ?> TK</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>