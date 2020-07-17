<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="#"><i class="la la-home"></i><span class="menu-title"
                                                                              data-i18n="nav.dash.main">Language</span><span
                        class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\language::count()}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.languages')}}"
                           >All Language</a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.languages.create')}}"
                           >Add Language</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-copy"></i><span class="menu-title"
                                                                              data-i18n="nav.changelog.main">Categories</span><span
                        class="badge badge badge-pill badge-warning float-right mr-2">{{App\Models\MainCategory::count()}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.maincategories')}}"
                        >All Categories</a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.maincategories.create')}}"
                        >Add Category</a>
                    </li>
                </ul>

            </li>
            <li class=" nav-item"><a href="#"><i class="la la-copy"></i><span class="menu-title"
                                                                              data-i18n="nav.changelog.main">Organizers</span><span
                        class="badge badge badge-pill badge-warning float-right mr-2">{{App\Models\Organisor::count()}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.organisor')}}"
                        >All Organizers</a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.organisor.create')}}"
                        >Add Organisor</a>
                    </li>
                </ul>

            </li>
            <li class=" nav-item"><a href="#"><i class="la la-envelope"></i><span
                        class="menu-title" data-i18n="">Email Application</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-tablet"></i><span class="menu-title"
                                                                                data-i18n="nav.cards.main">Cards</span><span
                        class="badge badge badge-success float-right mr-2">New</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#"
                           data-i18n="nav.cards.card_bootstrap">Bootstrap</a>
                    </li>
                    <li><a class="menu-item" href="#"
                           data-i18n="nav.cards.card_headings">Headings</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.cards.card_options">Options</a>
                    </li>
                    <li><a class="menu-item" href="#" data-i18n="nav.cards.card_actions">Action</a>
                    </li>
                    <li><a class="menu-item" href="#"
                           data-i18n="nav.cards.card_draggable">Draggable</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-share-alt"></i><span
                        class="menu-title" data-i18n="nav.morris_charts.main">Morris Charts</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-bolt"></i><span class="menu-title"
                                                                              data-i18n="nav.flot_charts.main">Flot Charts</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#"
                           data-i18n="nav.flot_charts.flot_line_charts">Line charts</a>
                    </li>
                    <li><a class="menu-item" href="#"
                           data-i18n="nav.flot_charts.flot_bar_charts">Bar charts</a>
                    </li>
                    <li><a class="menu-item" href="#"
                           data-i18n="nav.flot_charts.flot_pie_charts">Pie charts</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-map"></i><span class="menu-title"
                                                                             data-i18n="nav.maps.main">Maps</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#" data-i18n="nav.maps.google_maps.main">google Maps</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="#"
                                   data-i18n="nav.maps.google_maps.gmaps_basic_maps">Maps</a>
                            </li>
                            <li><a class="menu-item" href="#"
                                   data-i18n="nav.maps.google_maps.gmaps_services">Services</a>
                            </li>
                            <li><a class="menu-item" href="#"
                                   data-i18n="nav.maps.google_maps.gmaps_overlays">Overlays</a>
                            </li>
                            <li><a class="menu-item" href="#"
                                   data-i18n="nav.maps.google_maps.gmaps_routes">Routes</a>
                            </li>
                            <li><a class="menu-item" href="#"
                                   data-i18n="nav.maps.google_maps.gmaps_utils">Utils</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a
                    href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i
                        class="la la-text-height"></i>
                    <span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</div>
