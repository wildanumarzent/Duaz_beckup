<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ $lastUrl ?? 'active' }}">
                    <a href="#">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#user-management">
                        <i class="fas fa-user-cog"></i>
                        <p>User Management</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="user-management">
                        <ul class="nav nav-collapse">
                            <li class="{{ $lastUrl == 'user' ?? 'active' }}">
                                <a href="{{ url('/user') }}">
                                    <span class="sub-item">User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#filesystem">
                        <i class="fas fa-folder"></i>
                        <p>Filesystem</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="filesystem">
                        <ul class="nav nav-collapse">
                            <li class="{{ $lastUrl == 'disk' ?? 'active' }}">
                                <a href="#">
                                    <span class="sub-item">Disk</span>
                                </a>
                            </li>
                            <li class="{{ $lastUrl == 'file-manager' ?? 'active' }}">
                                <a href="#">
                                    <span class="sub-item">File Manager</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#database">
                        <i class="fas fa-database"></i>
                        <p>Database</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="database">
                        <ul class="nav nav-collapse">
                            <li class="{{ $lastUrl == 'source' ?? 'active' }}">
                                <a href="#">
                                    <span class="sub-item">Source</span>
                                </a>
                            </li>
                            <li class="{{ $lastUrl == 'backup' ?? 'active' }}">
                                <a href="#">
                                    <span class="sub-item">Backup</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
