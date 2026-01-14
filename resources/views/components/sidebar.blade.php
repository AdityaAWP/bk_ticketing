<div className="drawer lg:drawer-open">
    <input id="my-drawer-4" type="checkbox" className="drawer-toggle" />
    <div className="drawer-content">
        {/* Navbar */}
        <nav className="navbar w-full bg-base-300">
            <label htmlFor="my-drawer-4" aria-label="open sidebar" className="btn btn-square btn-ghost">
                {/* Sidebar toggle icon */}
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" strokeLinejoin="round" strokeLinecap="round"
                    strokeWidth="2" fill="none" stroke="currentColor" className="my-1.5 inline-block size-4">
                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                    <path d="M9 4v16"></path>
                    <path d="M14 10l2 2l-2 2"></path>
                </svg>
                <div class="w-full flex items-center justify-center p-4">
                    <img src="{{ asset('assets/images/logo_bengkod.svg') }}" alt="Logo">
                </div>
            </label>
        </nav>
    </div>

    <div className="drawer-side is-drawer-close:overflow-visible">
        <label htmlFor="my-drawer-4" aria-label="close sidebar" className="drawer-overlay"></label>
        <div className="flex min-h-full flex-col items-start bg-base-200 is-drawer-close:w-14 is-drawer-open:w-64">
            {/* Sidebar content here */}
            <ul className="menu w-full grow">
                <li class="{{ request()->routeIs('dashboard') ? 'bg-gray-200 rounded-lg' : '' }}">
                    <a href="{{ route('dashboard') }}" class="is-drawer-close:tooltip is-drawer-close:tooltip-right"
                        data-tip="Dashboard">
                        <!-- Home icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M6 19h3v-5q0-.425.288-.712T10 13h4q.425 0 .713.288T15 14v5h3v-9l-6-4.5L6 10zm-2 0v-9q0-.475.213-.9t.587-.7l6-4.5q.525-.4 1.2-.4t1.2.4l6 4.5q.375.275.588.7T20 10v9q0 .825-.588 1.413T18 21h-4q-.425 0-.712-.288T13 20v-5h-2v5q0 .425-.288.713T10 21H6q-.825 0-1.412-.587T4 19m8-6.75" />
                        </svg>
                        <span class="is-drawer-close:hidden">Dashboard</span>
                    </a>
                </li>

                <!-- List item -->
                <li class="{{ request()->routeIs('categories') ? 'bg-gray-200 rounded-lg' : '' }}">
                    <a href="{{ route('categories.index') }}"
                        class="is-drawer-close:tooltip is-drawer-close:tooltip-right" data-tip="Kategori">
                        <!-- icon Kategori -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3a3 3 0 1 0 6 0a3 3 0 1 0-6 0" />
                        </svg>
                        <span class="is-drawer-close:hidden">Manajemen Kategori</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
