@extends('Dashboard.layouts.app')
@section('title')
    برنامج ادارة المستشفيات
@endsection
@section('styles')
    <!--  Owl-carousel css-->
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!-- Maps css -->
    <link href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">لوحة تحكم موظفي المختبر</h2>
                <br>
                <p class="mg-b-0">مرحبا بعودتك مرة اخرى</p>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">اجمالي عدد الفواتير</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 fw-bold mb-1 text-white">{{ App\Models\Ray::count() }}</h4>
                            </div>
                            <span class="float-end my-auto ms-auto">
                                <i class="fas fa-arrow-circle-up text-white"></i>
                                <span class="text-white op-7"> +427</span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">اجمالي عدد الفواتير تحت الاجراء</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 fw-bold mb-1 text-white">{{ App\Models\Ray::where('case', 0)->count() }}
                                </h4>
                            </div>
                            <span class="float-end my-auto ms-auto">
                                <i class="fas fa-arrow-circle-down text-white"></i>
                                <span class="text-white op-7"> -23.09%</span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="ps-3 pt-3 pe-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">اجمالي عدد الفواتير المكتملة</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 fw-bold mb-1 text-white">{{ App\Models\Ray::where('case', 1)->count() }}
                                </h4>
                            </div>
                            <span class="float-end my-auto ms-auto">
                                <i class="fas fa-arrow-circle-up text-white"></i>
                                <span class="text-white op-7"> 52.09%</span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
            </div>
        </div>

    </div>
    <!-- row closed -->

    <!-- row opened -->
    <div class="row row-sm row-deck">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                    <h2 class="card-title mb-1">اخر 5 فواتير علي النظام</h2>
                </div><br>
                <div class="table-responsive country-table">
                    <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>تاريخ الفاتورة</th>
                                <th>اسم المريض</th>
                                <th>اسم الطبيب</th>
                                <th>المطلوب</th>
                                <th>حالة الفاتورة</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- هاد بيجيب اخر خمس حركات --}}
                            @forelse(\App\Models\Ray::latest()->take(5)->get() as $invoice)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="tx-right tx-medium tx-inverse">{{ $invoice->created_at }}</td>
                                    <td class="tx-right tx-medium tx-danger">{{ $invoice->patient->name }}</td>
                                    <td class="tx-right tx-medium tx-inverse">{{ $invoice->doctor->name }}</td>
                                    <td class="tx-right tx-medium tx-danger">{{ $invoice->description }}</td>
                                    <td class="tx-right tx-medium tx-inverse">
                                        @if ($invoice->case == 0)
                                            <span class="badge badge-danger">تحت الاجراء</span>
                                        @else
                                            <span class="badge badge-success">مكتملة</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                لاتوجد بيانات
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
@endsection('content')

@section('scripts')
    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>

    <!--Internal  Chart.bundle js -->
    <script src="{{ asset('assets/plugins/chartjs/Chart.bundle.min.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Internal Apexchart js-->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>

    <!-- Internal Map -->
    <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <!-- Apexchart js-->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.vmap.sampledata.js') }}"></script>
@endsection
