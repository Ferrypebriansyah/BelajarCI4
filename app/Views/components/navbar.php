<!-- Sidebar -->
<div class="d-flex">
    <nav class="sidebar p-3">
        <h2 class="text-white mb-4">
            <i class='bx bx-store-alt'></i> HalalIndo.
        </h2>
        <hr class="text-white">
        <ul class="nav flex-column">
            <h5 class="text-white bold">Main Menu</h5>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('allhalal') ? 'active fw-bold' : '' }}" href="/allhalal"><i class="bi bi-house"></i> All HalalIndo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('halalfood') ? 'active fw-bold' : '' }}" href="/halalfood"><i class="bi bi-basket-fill"></i> Halal Food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('halaldrink') ? 'active fw-bold' : '' }}" href="/halaldrink"><i class="bi bi-cup"></i> Halal Drink</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('addon') ? 'active fw-bold' : '' }}" href="/addon"><i class="bi bi-plus-circle"></i> Add On</a>
            </li>
            <hr class="text-white">
            <h5 class="text-white bold">Management</h5>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('menumanagement') ? 'active fw-bold' : '' }}" href="/menumanagement"><i class="bi bi-grid"></i> Menu Management</a>
            </li>
            <hr class="text-white">
            <h5 class="text-white bold">Cashier</h5>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('transaction') ? 'active fw-bold' : '' }}" href="/transaction"><i class="bi bi-cash"></i> Transaction</a>
            </li>
            <hr class="text-white">
            <h5 class="text-white bold">Options</h5>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('settings') ? 'active fw-bold' : '' }}" href="/settings"><i class="bi bi-gear"></i> Settings</a>
            </li>
            <hr class="text-white">
            <li class="nav-item mt-auto ">
                <a class="nav-link logout text-center rounded" href="/"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Main content -->
    <div class="flex-grow-1">
        <!-- Navbar -->
        <nav class="navbar shadow-sm navbar-expand-lg p-3">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Ferry Benzema</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-person-circle"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>