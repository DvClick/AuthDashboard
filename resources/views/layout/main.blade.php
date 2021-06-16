<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
    <div class="page-container">
        @include('layout.sidebar')
        <div class="page-content">
            <div class="main-wrapper">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layout.script')
</body>

</html>