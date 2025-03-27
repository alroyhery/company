@extends('layout.app')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Digis</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>


<div class="row">
   

    <div class="col-md-4">
        <div
            class="card-box widget-chart-one bg-soft-primary bx-shadow-lg d-flex justify-content-between align-items-center p-3">
            <!-- Left Side: Product Info -->
            <div>
                <div>
                    <h3>Total Pengunjung selama 7 hari</h3>
                    <h5>{{ $activeUsers }}
                    </h5>
                </div>
            </div>

           
        </div>
    </div>

    <div class="col-md-5">
        <div
            class="card-box widget-chart-one bg-soft-success bx-shadow-lg d-flex justify-content-between align-items-center p-3">
            <!-- Left Side: Product Info -->
            {{-- <div>
                <div>
                    <h3>Page dengan pengunjung terbanyak</h3>
                    <h5> {{ $mostVisitedPage1}}</h5>
                </div>
            </div> --}}

            <div>
                <div>
                    <h3>Page dengan pengunjung terbanyak</h3>
                    <h5> {{ $mostVisitedPage1}}</h5>
                </div>
            </div>

        </div>
    </div>

    
   
    
</div>
@endsection