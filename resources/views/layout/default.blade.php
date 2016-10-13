@include('layout.header')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @yield('content')
            </div>
        </div>
    </div>
</div>

@include('layout.footer')