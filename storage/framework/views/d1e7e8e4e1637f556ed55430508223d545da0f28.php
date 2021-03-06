<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="<?php echo e(backpack_url('dashboard')); ?>"><i class="fa fa-dashboard nav-icon"></i> <?php echo e(trans('backpack::base.dashboard')); ?></a></li>
<li class=nav-item><a class=nav-link href="<?php echo e(backpack_url('elfinder')); ?>"><i class="nav-icon fa fa-files-o"></i> <span><?php echo e(trans('backpack::crud.file_manager')); ?></span></a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-newspaper-o"></i>News</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item"><a class="nav-link" href="<?php echo e(backpack_url('article')); ?>"><i class="nav-icon fa fa-newspaper-o"></i> Articles</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo e(backpack_url('category')); ?>"><i class="nav-icon fa fa-list"></i> Categories</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo e(backpack_url('tag')); ?>"><i class="nav-icon fa fa-tag"></i> Tags</a></li>
    </ul>
</li><?php /**PATH D:\Laravel\skyPlus\resources\views/vendor/backpack/base/inc/sidebar_content.blade.php ENDPATH**/ ?>