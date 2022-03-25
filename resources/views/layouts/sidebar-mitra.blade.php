<div class="navbar-toggle shadow">
    <i class='bx bx-chevrons-right align-middle' data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"></i>
</div>
<div class="shadow navbar-wrapper mr-5 show collapse-horizontal" id="sidebarCollapse">
    <div class="py-2">
        <a class="text-decoration-none text-black navbar-close text-center d-block py-md-3 py-2 my-2 my-md-0" href="#" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse">
            <i class='bx bx-x align-middle text-center d-block'></i>
        </a>
        <a class="{{ ($title == 'dashboard') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-md-3 py-2 my-2 my-md-0" href="#">
            <i class='bx bx-grid-alt align-middle text-center d-block'></i>
            <span>Dashboard</span>
        </a>
        <a class="{{ ($title == 'profil') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-md-3 py-2 my-2 my-md-0" href="#">
            <i class='bx bx-user-circle align-middle text-center d-block'></i>
            <span>Profil</span>
        </a>
        <a class="{{ ($title == 'loker') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-md-3 py-2 my-2 my-md-0" href="#">
            <i class='bx bx-briefcase-alt-2 align-middle text-center d-block'></i>
            <span>Loker</span>
        </a>
        <a class="{{ ($title == 'rekomendasi') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-md-3 py-2 my-2 my-md-0" href="#">
            <i class='bx bx-star align-middle text-center d-block'></i>
            <span>Rekomendasi</span>
        </a>
    </div>
</div>
