<div class="shadow navbar-wrapper mr-5">
    <div class="py-2">
        <a class="text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/">
            <i class='bx bx-home-alt align-middle text-center d-block'></i>
            <span style="font-size: 12px;">Home</span>
        </a>
        <a class="{{ ($active == 'dashboard') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard">
            <i class='bx bx-grid-alt align-middle text-center d-block'></i>
            <span style="font-size: 12px;">Dashboard</span>
        </a>
        <a class="{{ ($active == 'alumni') ? 'nav-active ': '' }} text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/alumni">
            <i class='bx bx-book-reader align-middle text-center d-block'></i>
            <span style="font-size: 12px;">Alumni</span>
        </a>
        <a class="{{ ($active == 'account') ? 'nav-active ': '' }} text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/account">
            <i class='bx bx-user-circle align-middle text-center d-block'></i>
            <span style="font-size: 12px;">Account</span>
        </a>
        <a class="{{ ($active == 'informations') ? 'nav-active ': '' }} text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/informations">
            <i class='bx bx-news align-middle text-center d-block'></i>
            <span style="font-size: 12px;">Informations</span>
        </a>
        <a class="{{ ($active == 'vacancy') ? 'nav-active ': '' }} text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/vacancy">
            <i class='bx bx-briefcase-alt-2 align-middle text-center d-block'></i>
            <span style="font-size: 12px;">Job</span>
        </a>
        <a class="{{ ($active == 'mitra') ? 'nav-active ': '' }} text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/mitra">
            <i class='bx bx-building-house align-middle text-center d-block'></i>
            <span style="font-size: 12px;">Mitra</span>
        </a>
        <div class="navbar-logout text-center d-block py-3">
            <div class="btn btn-primary">
                <i class='bx bx-log-out-circle align-middle text-center d-block'></i>
                <span style="font-size: 12px;">Logout</span>
            </div>
        </div>
    </div>
</div>
