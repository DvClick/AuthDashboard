<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            {{session()->get('username')}}
        </li>

        <li>
            <a href="{{route('index')}}"><i data-feather="home"></i>Home</a>
        </li>
        <li>
            <a href="{{route('form.index')}}"><i data-feather="clipboard"></i>Form</a>
        </li>
        <li>
            <a href="{{route('form1.index')}}"><i data-feather="file"></i>Form 1</a>
        </li>

        <li>
            <a href="{{route('admin.index')}}"><i data-feather="user"></i>Admin</a>
        </li>
        <li>
            <a href="{{route('setting')}}"><i data-feather="settings"></i>Settings</a>
        </li>
        <li>
            <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
        </li>
    </ul>
</div>