<div id="header-wrapper" class="menu-swap">
   <?php 
      // Available Classes for #header:
      // .fixed: adds a fixed header
      // .forehead: adds some space above the nav.
      // .fivehead: adds a bunch of space above the nav.
      // .chin: adds some space below the nav.
   ?>
   <header id="header" class="menu-swap pinned <?php if ( $_GET['page'] == 'index'): echo 'home' ; endif; ?>">
      <div class="fs-row">
         <div id="header--nav_visible" class="fs-cell fs-all-full fs-contained">
            <nav id="header--nav_left" class="fs-cell fs-lg-2 fs-md-1 fs-sm-1">
               <a href="#" class="btn btn-nav btn-hamburg btn-menu swap <?php if ( $_GET['page'] == 'index'): echo 'white' ; endif; ?>" data-swap-linked=".btn-menu" data-swap-target=".menu-swap">&nbsp;</a>
            </nav>
            <nav id="header--nav_center" class="fs-cell fs-lg-8 fs-md-4 fs-sm-hide text-center">
               <a href="?page=search" class="btn btn-nav">January 14, 2015 — New Orleans, LA</a>
            </nav>
            <nav id="header--nav_right" class="fs-cell fs-lg-2 fs-md-hide fs-sm-1 text-right">
               <a href="#" class="btn btn-nav white">#cathandmax</a>
            </nav>
         </div>
         <div id="header--nav_hidden" class="fs-cell fs-all-full fs-contained">
            <nav id="header--nav_left" class="fs-cell fs-lg-2 fs-md-2 fs-sm-1">
               <a href="#" class="btn btn-nav ss-gizmo btn-menu ss-delete swap white" data-swap-linked=".btn-menu" data-swap-target=".menu-swap">Close</a>
            </nav>
            <nav id="header--nav_center" class="fs-cell fs-lg-8 fs-md-4 fs-sm-hide text-center">
               <?php if ( $_GET['page'] != 'index'): echo '<a href="/" class="btn btn-nav">Home</a>' ; endif; ?>
               <a href="?page=search" class="btn btn-nav">Wedding Details</a>
               <a href="?page=search" class="btn btn-nav">The Venue</a>
               <a href="?page=search" class="btn btn-nav">The After Party</a>
               <a href="?page=search" class="btn btn-nav">Registry</a>
            </nav>
            <nav id="header--nav_right" class="fs-cell fs-lg-2 fs-md-2 fs-sm-1 text-right">
               <a href="#" class="btn btn-nav white">#cathandmax</a>
            </nav>
         </div>
      </div>
   </header>
</div>