<li class="nav-item">
    <a href="{{ route('blogs.index') }}"
       class="nav-link {{ Request::is('blogs*') ? 'active' : '' }}">
        <p>Blogs</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


