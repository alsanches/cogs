<!DOCTYPE html>
<html lang="{{env('locale')}}">
    @includeIf('dashboard.layouts.head')
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @includeIf('dashboard.layouts.header')
            @includeIf('dashboard.layouts.sideBarLeft')
            <div class="content-wrapper">
              @yield('content')
            </div>
            @includeIf('dashboard.layouts.footer')
        </div>
        @includeIf('dashboard.layouts.javascript')
    </body>
</html>
