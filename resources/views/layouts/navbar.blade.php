<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }} ">
                        <a class="nav-link " href="{{ route('home') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown {{ request()->is('mahasiswa*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                                    <line x1="12" y1="12" x2="20" y2="7.5" />
                                    <line x1="12" y1="12" x2="12" y2="21" />
                                    <line x1="12" y1="12" x2="4" y2="7.5" />
                                    <line x1="16" y1="5.25" x2="8" y2="9.75" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Mahasiswa
                            </span>
                        </a>
                        <div class="dropdown-menu ">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ request()->is('mahasiswa') ? 'active' : '' }}"
                                        href="{{ route('mahasiswa.index') }}">
                                        Mahasiswa
                                    </a>
                                    <a class="dropdown-item {{ request()->is('mahasiswa/create') ? 'active' : '' }}"
                                        href="{{ route('mahasiswa.create') }}">
                                        Add Mahasiswa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ request()->is('fakultas*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="6" height="5" rx="2" />
                                    <rect x="4" y="13" width="6" height="7"
                                        rx="2" />
                                    <rect x="14" y="4" width="6" height="7"
                                        rx="2" />
                                    <rect x="14" y="15" width="6" height="5"
                                        rx="2" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Fakultas
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ request()->is('fakultas') ? 'active' : '' }}"
                                        href="{{ route('fakultas.index') }}">
                                        Fakultas
                                    </a>
                                    <a class="dropdown-item {{ request()->is('fakultas/create') ? 'active' : '' }}"
                                        href="{{ route('fakultas.create') }}">
                                        Add Fakultas
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ request()->is('prodi*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="6" height="5"
                                        rx="2" />
                                    <rect x="4" y="13" width="6" height="7"
                                        rx="2" />
                                    <rect x="14" y="4" width="6" height="7"
                                        rx="2" />
                                    <rect x="14" y="15" width="6" height="5"
                                        rx="2" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Program Studi
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ request()->is('prodi') ? 'active' : '' }}"
                                        href="{{ route('prodi.index') }}">
                                        Program Studi
                                    </a>
                                    <a class="dropdown-item {{ request()->is('prodi/create') ? 'active' : '' }}"
                                        href="{{ route('prodi.create') }}">
                                        Add Program Studi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <a class="nav-link" href="./docs/index.html">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                <line x1="9" y1="9" x2="10" y2="9" />
                                <line x1="9" y1="13" x2="15" y2="13" />
                                <line x1="9" y1="17" x2="15" y2="17" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Documentation
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
