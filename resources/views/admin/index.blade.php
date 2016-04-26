@extends('app')

@section('content')

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <!-- Left column -->
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> Dashboard</strong></a>
            <hr>
            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Data <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"> <a href="/"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                        <li><a href="/lokasi"><i class="glyphicon glyphicon-map-marker"></i> Lokasi</a></li>
                        <li><a href="/peta"><i class="glyphicon glyphicon-globe"></i> Peta</a></li>
                    </ul>
                </li>

                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> Laporan <i class="glyphicon glyphicon-chevron-right"></i></a>

                    <ul class="nav nav-stacked collapse" id="menu2">
                        <li><a href="#"><i class="glyphicon glyphicon-stats"></i> Comming Soon</a>
                        </li>                        
                    </ul>
                </li>

                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3"> Sosial Media <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                    </ul>
                </li>
            </ul>
            <hr>            
        </div>

        <div class="col-sm-10">            
            <div class="row" id="map-canvas">
                @yield('content2')
            </div>
        </div>
    <!-- /Main -->
    </div>
</div>
@stop