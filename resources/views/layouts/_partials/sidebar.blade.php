<ul class="sidebar-menu">
    <li class="menu-header">Menu</li>
    <li>
        <a href="{{ route('admin.dashboard') }}" class="nav-link active">
            <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.our_team.index') }}" class="nav-link">
            <i class="fas fa-users"></i><span>Our Team</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.category.index') }}" class="nav-link">
            <i class="fas fa-list"></i><span>Category</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.portfolio.index') }}" class="nav-link">
            <i class="fas fa-briefcase"></i><span>Portfolio</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.sosmed.index') }}" class="nav-link">
            <i class="fas fa-share-alt"></i><span>Social Media</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.gallery_portfolio.index') }}" class="nav-link">
            <i class="fas fa-images"></i><span>Gallery Portfolio</span>
        </a>
    </li>
</ul>
