<li class="nav-item <?php echo activeMenu('users');?>">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-diamond"></i>
        <span class="title">Users</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item <?php echo activeMenu('users','Add Users');?>">
            <a href="<?php echo base_url('users');?>" class="nav-link ">
                <span class="title">Add Users</span>
            </a>
        </li>        
        <li class="nav-item <?php echo activeMenu('users','Test');?>">
            <a href="<?php echo base_url('users/test');?>" class="nav-link ">
                <span class="title">Test</span>
            </a>
        </li>        
    </ul>
</li>