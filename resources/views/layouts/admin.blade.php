<!doctype html>
<html lang="en">

@include('admin.components.common.head')
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        @include('admin.components.common.header')

        <div class="app-main">

            @include('admin.components.sidebar')

            @yield('main')

        </div>

    </div>

@include('admin.components.common.scripts')
</body>

</html>
