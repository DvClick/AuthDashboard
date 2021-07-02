<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            <center>
                <h1>{{session()->get('name')}}</h1>
            </center>
        </li>

        <li>
            <a href="{{route('index')}}"><i data-feather="home"></i>Home</a>
        </li>
        <li>
            <a href="{{route('AllRequest.index')}}"><i data-feather="inbox"></i>Inbox</a>
        </li>
        <li>
            <a href="{{route('index')}}"><i data-feather="send"></i>Sent</a>
        </li>
        <li>
            <a href="index.html"><i data-feather="file-minus"></i>Requests Form<i
                    class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul class="">
                <li><a href="{{route('IMS_01_F02.index')}}" class="text-danger"><i
                            class="far fa-circle"></i>IMS-01-F02</a>
                </li>
                <li><a href="{{route('IMS_06_F06.index')}}" class="text-danger"><i
                            class="far fa-circle"></i>IMS-06-F06</a>
                </li>
                <li><a href="{{route('IMS_09_F01.index')}}"><i class="far fa-circle"></i>IMS-09-F01</a></li>
                <li><a href="{{route('IMS_24_F01.index')}}" class="text-danger"><i
                            class="far fa-circle"></i>IMS-24-F01</a>
                </li>
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