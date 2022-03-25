<div class="shadow navbar-wrapper mr-5">
    <div class="py-2">
        <a class="text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/">
            <i class='bx bx-home-alt align-middle text-center d-block'></i>
            <span>Home</span>
        </a>
        <a class="{{ ($title == 'dashboard') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard">
            <i class='bx bx-grid-alt align-middle text-center d-block'></i>
            <span>Dashboard</span>
        </a>
        <a class="{{ ($title == 'alumni') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/alumni">
            <i class='bx bx-book-reader align-middle text-center d-block'></i>
            <span>Alumni</span>
        </a>
        <a class="{{ ($title == 'akun') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/akun">
            <i class='bx bx-user-circle align-middle text-center d-block'></i>
            <span>Akun</span>
        </a>
        <a class="{{ ($title == 'informasi') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/informasi">
            <i class='bx bx-news align-middle text-center d-block'></i>
            <span>Informasi</span>
        </a>
        <a class="{{ ($title == 'loker') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/lowongankerja">
            <i class='bx bx-briefcase-alt-2 align-middle text-center d-block'></i>
            <span>Loker</span>
        </a>
        <a class="{{ ($title == 'mitra') ? 'nav-active ': '' }}text-decoration-none text-black navbar-item text-center d-block py-2 my-2" href="/dashboard/mitra">
            <i class='bx bx-building-house align-middle text-center d-block'></i>
            <span>Mitra</span>
        </a>
        <div class="navbar-logout text-center d-block py-3">
            <div class="btn btn-primary">
                <i class='bx bx-log-out-circle align-middle text-center d-block'></i>
                <span>Logout</span>
            </div>
        </div>
    </div>
</div>
