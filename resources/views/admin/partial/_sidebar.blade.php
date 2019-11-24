<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.slider.index')}}">Slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#portfolio-nav" aria-controls="portfolio-nav"><i class="fas fa-fw fa-file"></i> Portfolio </a>
                        <div id="portfolio-nav" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.category.index')}}">Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.portfolio.index')}}">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.skill.index')}}">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.subscriber.index')}}">Subscriber</a>
                    </li>


                    <li class="nav-divider">
                        Features
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>