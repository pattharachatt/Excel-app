<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-tags nav-icon">

                        </i>
                        {{ 'Artists' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is('admin/restaurants') || request()->is('admin/restaurants/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-shopping-basket nav-icon">

                        </i>
                        {{ 'Artworks' }}
                    </a>
                </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>