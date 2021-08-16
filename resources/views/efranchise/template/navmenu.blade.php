<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">

    <div class="sidebar-header">
        <div class="d-flex justify-content-center">
            <div class="logo">
                <a href="/"><img src="assets/images/ayslogo.jpg" style="width: 150px; height: 80px;" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>

    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item {{ Request::is('efranchisee') ? 'active':''}}">
                <a href="/efranchisee" class='sidebar-link'>
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="sidebar-item {{ Request::is('withdraw') ? 'active':''}}">
                <a href="/withdraw" class='sidebar-link'>
                    <i class="fas fa-credit-card"></i>
                    <span>Withdraw</span>
                </a>
            </li>
            
            <li class="sidebar-item {{ Request::is('tagrider') ? 'active':''}}">
                <a href="/tagrider" class='sidebar-link'>
                    <i class="fas fa-motorcycle"></i>
                    <span>Tag Rider</span>
                </a>
            </li>
            
            <li class="sidebar-item {{ Request::is('tagmanpower') ? 'active':''}}">
                <a href="/tagmanpower" class='sidebar-link'>
                    <i class="fas fa-users-cog"></i>
                    <span>Tag Manpower</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('tagstore') ? 'active':''}}">
                <a href="/tagstore" class='sidebar-link'>
                    <i class="fas fa-store"></i>
                    <span>Tag Store</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('networklist') ? 'active':''}}">
                <a href="/networklist" class='sidebar-link'>
                        <i class="fas fa-project-diagram"></i>
                    <span>Network List</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::is('logout') ? 'active':''}}">             
                <a href="/elogout" class='sidebar-link' data-bs-toggle="modal" data-bs-target="#logout"> 
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>

</div>
</div>

