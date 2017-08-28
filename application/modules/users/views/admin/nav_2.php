<li class="nav-item <?php echo activeMenu('users');?>">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-diamond"></i>
        <span class="title">Users</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item <?php echo activeMenu('users','Add Members');?>">
            <a href="<?php echo base_url('users');?>" class="nav-link ">
                <span class="title">Add Members</span>
            </a>
        </li>        
        <li class="nav-item <?php echo activeMenu('users','Member List');?>">
            <a href="<?php echo base_url('users/memberList');?>" class="nav-link ">
                <span class="title">Member List</span>
            </a>
        </li>
    </ul>
</li>