<!DOCTYPE html>
<html lang="en">

@include('back.head', ['title' => '首页-信息面板'])

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('back.top')
            <!-- 头部信息栏 -->

            @include('back.left')
            <!-- 左边栏 -->
        </nav>

        @yield('main')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @include('back.footer')

</body>

</html>
