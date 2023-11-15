<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Menu</li>
            <li>
                <a  href="{{ route('arsip.index') }}" class="nav-link {{ request()->routeIs('arsip.*') ? 'active' : '' }}" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i><span class="nav-text">Arsip</span>
                </a>
            </li>
            <li>
                <a href="{{ route('kategori.index') }}" class="nav-link {{ request()->routeIs('kategori.*') ? 'active' : '' }}" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">Kategori Surat</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">About</span>
                </a>
            </li>
        </ul>
    </div>
</div>
