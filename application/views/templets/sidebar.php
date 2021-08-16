 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon">
             <img src="<?= base_url('assets/img/logo.png') ?>" hight=50 width=50>
         </div>
         <div class="sidebar-brand-text mx-3">SIAK</div>
     </a>


     <!-- Divider -->
     <hr class="sidebar-divider my-0">
     <?php foreach ($menu as $m) : ?>
         <!-- Nav Item - Dashboard -->
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url($m['url']) ?>">

                 <span><?= $m['nama']; ?></span></a>
         </li>
         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">
     <?php endforeach; ?>

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->