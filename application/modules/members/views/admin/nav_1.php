<li class="nav-item <?php echo activeMenu('members');?>">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-diamond"></i>
        <span class="title">Members</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item <?php echo activeMenu('members','Add Member');?>">
            <a href="<?php echo base_url('members');?>" class="nav-link ">
                <span class="title">Add Member</span>
            </a>
        </li>        
        <li class="nav-item <?php echo activeMenu('members','Test');?>">
            <a href="<?php echo base_url('members/test');?>" class="nav-link ">
                <span class="title">Test</span>
            </a>
        </li>        
    </ul>
</li>