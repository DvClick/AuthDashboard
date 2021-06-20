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
            <a href="index.html"><i data-feather="file"></i>Form 1<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul class="">
                <li><a href="{{route('form1.index')}}"><i class="far fa-circle"></i>All Documents</a></li>
                <li><a href="{{route('form1.create')}}"><i class="far fa-circle"></i>Add New Documrnt</a></li>
            </ul>
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