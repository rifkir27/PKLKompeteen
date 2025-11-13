<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a class="brand-link">
        <div class="text-center">
            <span class=" font-weight-bold">{{ env('APP_NAME') }}</span>
        </div>
    </a>

    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @role('admin')
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ active('admin.dashboard') }} ">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-tabler nav-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 9l3 3l-3 3"></path>
                                <line x1="13" y1="15" x2="16" y2="15"></line>
                                <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                            </svg>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.categories.index') }}" class="nav-link {{ active('admin.categories*') }} ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category-2 nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 4h6v6h-6z"></path>
                                <path d="M4 14h6v6h-6z"></path>
                                <circle cx="17" cy="17" r="3"></circle>
                                <circle cx="7" cy="7" r="3"></circle>
                            </svg>
                            <p>
                                Category
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.benefits.index') }}" class="nav-link {{ active('admin.benefits*') }} ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2">
                                </path>
                            </svg>
                            <p>
                                Benefit
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.courses.index') }}" class="nav-link {{ active('admin.courses*') }} ">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-device-laptop nav-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="3" y1="19" x2="21" y2="19"></line>
                                <rect x="5" y="6" width="14" height="10" rx="1">
                                </rect>
                            </svg>
                            <p>
                                Course
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.showcase.index') }}"
                            class="nav-link {{ active('admin.showcase.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-source-code nav-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5"></path>
                                <path d="M6 5l-2 2l2 2"></path>
                                <path d="M10 9l2 -2l-2 -2"></path>
                            </svg>
                            <p>
                                Showcase
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.reviews.index') }}"
                            class="nav-link {{ active('admin.reviews.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-message-2 nav-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                                </path>
                                <line x1="8" y1="9" x2="16" y2="9"></line>
                                <line x1="8" y1="13" x2="14" y2="13"></line>
                            </svg>
                            <p>
                                Review
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.mycourse') }}" class="nav-link {{ active('admin.mycourse*') }} ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-devices nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="13" y="8" width="8" height="12" rx="1">
                                </rect>
                                <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9"></path>
                                <line x1="16" y1="9" x2="18" y2="9"></line>
                            </svg>
                            <p>
                                My Course
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.transactions.index') }}"
                            class="nav-link {{ active('admin.transactions*') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2">
                                </path>
                            </svg>
                            <p>
                                Transaction
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.vouchers.index') }}" class="nav-link {{ active('admin.vouchers*') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M20 3H5C3.346 3 2 4.346 2 6v12c0 1.654 1.346 3 3 3h15c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM5 19c-.552 0-1-.449-1-1V6c0-.551.448-1 1-1h15v3h-6c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h6.001v3H5zm15-9v4h-6v-4h6z">
                                </path>
                            </svg>
                            <p>
                                Voucher
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.articles.index') }}" class="nav-link {{ active('admin.article*') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M7 25V2.005C7 2.005 7 1 8 1H30C30 1 31 1.005 31 2.005V28.005C31 28.005 31 31 28 31H4C4 31 1 31.005 1 27.005V12.005C1 12.005 1 11 2 11H4M13 7H18M13 11H25M13 15H25M13 19H25M13 23H25">
                                </path>
                            </svg>
                            <p>
                                Article
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.testimonials.index') }}"
                            class="nav-link {{ active('admin.testimonial*') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M8 10.5H16M8 14.5H11M21.0039 12C21.0039 16.9706 16.9745 21 12.0039 21C9.9675 21 3.00463 21 3.00463 21C3.00463 21 4.56382 17.2561 3.93982 16.0008C3.34076 14.7956 3.00391 13.4372 3.00391 12C3.00391 7.02944 7.03334 3 12.0039 3C16.9745 3 21.0039 7.02944 21.0039 12Z">
                                </path>
                            </svg>
                            <p>
                                Testimonial
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link {{ active('admin.users.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.user.profile') }}" class="nav-link {{ active('admin.user.profile') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-user-circle nav-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <circle cx="12" cy="10" r="3"></circle>
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                            </svg>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.certificate.index') }}" class="nav-link {{ active('admin.certificate.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 15l9 6l9 -6l-9 -6l-9 6" />
                                <path d="M9 12l2 2l4 -4" />
                            </svg>
                            <p>
                                Certificate
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.mentor.index') }}" class="nav-link {{ active('admin.mentor.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-teacher" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M20 20h-16v-1a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v1z" />
                                <circle cx="12" cy="7" r="4" />
                                <path d="M12 11v8" />
                                <path d="M9 20h6" />
                                <path d="M16 8v4a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-4" />
                                <line x1="9" y1="4" x2="9" y2="6" />
                                <line x1="15" y1="4" x2="15" y2="6" />
                            </svg>
                            <p>
                                Mentor
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.infrastructure.index') }}" class="nav-link {{ active('admin.infrastructure.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 21v-13l9 -4l9 4v13" />
                                <line x1="9" y1="7" x2="15" y2="7" />
                                <line x1="9" y1="10" x2="15" y2="10" />
                                <line x1="9" y1="13" x2="15" y2="13" />
                                <line x1="9" y1="16" x2="15" y2="16" />
                            </svg>
                            <p>
                                Infrastructure
                            </p>
                        </a>
                    </li>
                @endrole
                @role('member')
                    <li class="nav-item">
                        <a href="{{ route('member.dashboard') }}" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-tabler nav-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 9l3 3l-3 3"></path>
                                <line x1="13" y1="15" x2="16" y2="15"></line>
                                <rect x="4" y="4" width="16" height="16" rx="4">
                                </rect>
                            </svg>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('member.mycourse') }}" class="nav-link {{ active('member.mycourse*') }} ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-devices nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="13" y="8" width="8" height="12" rx="1">
                                </rect>
                                <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9"></path>
                                <line x1="16" y1="9" x2="18" y2="9"></line>
                            </svg>
                            <p>
                                My Course
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('member.showcases.index') }}"
                            class="nav-link {{ active('member.showcases*') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-source-code nav-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14.5 4h2.5a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-5"></path>
                                <path d="M6 5l-2 2l2 2"></path>
                                <path d="M10 9l2 -2l-2 -2"></path>
                            </svg>
                            <p>
                                Showcase
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('member.transactions.index') }}"
                            class="nav-link {{ active('member.transactions*') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2">
                                </path>
                            </svg>
                            <p>
                                Transaction
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('member.voucher.redeem') }}" class="nav-link {{ active('member.voucher*') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt nav-icon"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M20 3H5C3.346 3 2 4.346 2 6v12c0 1.654 1.346 3 3 3h15c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM5 19c-.552 0-1-.449-1-1V6c0-.551.448-1 1-1h15v3h-6c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h6.001v3H5zm15-9v4h-6v-4h6z">
                                </path>
                            </svg>
                            <p>
                                Voucher
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('member.profile.index') }}"
                            class="nav-link {{ active('member.profile.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-user-circle nav-icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <circle cx="12" cy="10" r="3"></circle>
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                            </svg>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                @endrole
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout nav-icon"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                            </path>
                            <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                        </svg>
                        <p>
                            Sign Out
                        </p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>