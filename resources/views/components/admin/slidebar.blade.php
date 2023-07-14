<aside class="page-sidebar">
    <div class="h-100 flex-column d-flex" data-simplebar>

        <!--Aside-logo-->
        <div class="aside-logo p-3 position-relative">
            <a href="/admin/dashboard" class="d-block pe-2">
                <div class="d-flex align-items-center flex-no-wrap text-truncate">
                    <!--Sidebar-icon-->
                    <span class="sidebar-text">
                        <!--Sidebar-text-->
                        <span class="sidebar-text text-truncate fs-4 text-uppercase fw-bolder">
                            {{ env('APP_NAME_SHORT', "AdminPanel") }}
                        </span>
                    </span>
                </div>
            </a>
        </div>
        <!--Aside-Menu-->
        <div class="aside-menu pe-2 my-auto flex-column-fluid">
            <nav class="flex-grow-1 h-100" id="page-navbar">
                <ul class="nav flex-column collapse-group collapse d-flex pt-4">
                    <li class="nav-item sidebar-title text-truncate opacity-50 small">
                        <i class="fas fa-ellipsis-h align-middle"></i>
                        <span>Asosiy</span>
                    </li>
                    <li class="nav-item">
                        <a href="#dashboards" data-bs-toggle="collapse"
                            class="nav-link d-flex align-items-center text-truncate active" aria-expanded="false">
                            <span class="sidebar-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M12.97 2.59a1.5 1.5 0 00-1.94 0l-7.5 6.363A1.5 1.5 0 003 10.097V19.5A1.5 1.5 0 004.5 21h4.75a.75.75 0 00.75-.75V14h4v6.25c0 .414.336.75.75.75h4.75a1.5 1.5 0 001.5-1.5v-9.403a1.5 1.5 0 00-.53-1.144l-7.5-6.363z">
                                    </path>
                                </svg>
                            </span>
                            <!--Sidebar nav text-->
                            <span class="sidebar-text">Boshqaruv paneli</span>
                        </a>
                        <ul data-bs-target="#dashboards" id="dashboards"
                            class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item"><a class="sidebar-link" href="/admin/dashboard">Asosiy</a></li>
                        </ul>
                        </ul>
                    </li>
                </ul>
                <ul class="nav flex-column collapse-group collapse d-flex pt-4">
                    <li class="nav-item sidebar-title text-truncate opacity-50 small">
                        <i class="fas fa-ellipsis-h align-middle"></i>
                        <span>Ma'lumotlar ombori</span>
                    </li>
                    <li class="nav-item">
                        <a href="#showAll" data-bs-toggle="collapse"
                            class="nav-link d-flex align-items-center text-truncate active" aria-expanded="false">
                            <span class="sidebar-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z"/></svg>
                            </span>
                            <!--Sidebar nav text-->
                            <span class="sidebar-text">Ma'lumotlari ko'rish</span>
                        </a>
                        <ul data-bs-target="#showAll" id="showAll"
                            class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item"><a class="sidebar-link" href="/admin/mainPageNew">Asosiy qism yangiligi</a></li>
                        </ul>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
