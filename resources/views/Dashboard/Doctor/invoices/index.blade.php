@extends('Dashboard.layouts.app')
@section('title')
    الكشوفات
@stop
@section('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Internal Data table css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="{{ asset('assets/plugins/datatable/datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/responsive.bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الكشوفات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    الفواتير</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    @include('Dashboard.message_alert')
    <!-- row -->
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>تاريخ الفاتورة</th>
                                    <th>اسم الخدمة</th>
                                    <th>اسم المريض</th>
                                    <th>سعر الخدمة</th>
                                    <th>قيمة الخصم</th>
                                    <th>نسبة الضريبة</th>
                                    <th>قيمة الضريبة</th>
                                    <th>الاجمالي مع الضريبة</th>
                                    <th>حالة الفاتورة</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $invoice->invoice_date }}</td>
                                        <td>{{ $invoice->Service->name ?? $invoice->Group->name }}</td>
                                        <td><a
                                                href="{{ route('patient_details', $invoice->patient_id) }}">{{ $invoice->Patient->name }}</a>
                                        </td>
                                        <td>{{ number_format($invoice->price, 2) }}</td>
                                        <td>{{ number_format($invoice->discount_value, 2) }}</td>
                                        <td>{{ $invoice->tax_rate }}%</td>
                                        <td>{{ number_format($invoice->tax_value, 2) }}</td>
                                        <td>{{ number_format($invoice->total_with_tax, 2) }}</td>
                                        <td>
                                            @if ($invoice->invoice_status == 1)
                                                <span class="badge badge-danger">تحت الاجراء</span>
                                            @elseif($invoice->invoice_status == 2)
                                                <span class="badge badge-warning">مراجعة</span>
                                            @else
                                                <span class="badge badge-success">مكتملة</span>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn ripple btn-outline-primary btn-sm"
                                                    data-bs-toggle="dropdown">
                                                    {{ trans('doctors.Processes') }}<i class="fas fa-caret-down mr-1"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li> <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#add_diagnosis{{ $invoice->id }}"><i
                                                                class="text-primary fa fa-stethoscope"></i>&nbsp;&nbsp;اضافة
                                                            تشخيص </a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#add_review{{ $invoice->id }}"><i
                                                                class="text-warning far fa-file-alt"></i>&nbsp;&nbsp;اضافة
                                                            مراجعة </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#xray_conversion{{ $invoice->id }}"><i
                                                                class="text-primary
                                                            fas fa-x-ray"></i>&nbsp;&nbsp;تحويل
                                                            الي
                                                            الاشعة</a></li>
                                                    <li><a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#laboratorie_conversion{{ $invoice->id }}"><i
                                                                class="text-warning fas fa-syringe"></i>&nbsp;&nbsp;تحويل
                                                            الي المختبر</a></li>
                                                    <li><a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete"><i
                                                                class="text-danger  ti-trash"></i>&nbsp;&nbsp;حذف
                                                            البيانات</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('Dashboard.Doctor.invoices.add_diagnosis')
                                    @include('Dashboard.Doctor.invoices.add_review')
                                    @include('Dashboard.Doctor.invoices.xray_conversion')
                                    @include('Dashboard.Doctor.invoices.laboratorie_conversion')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->

        <!-- /row -->

    </div>
    <!-- row closed -->

    <!-- Container closed -->

    <!-- main-content closed -->
@endsection
@section('scripts')
    <script>
        $('#review_date').datetimepicker({

        })
    </script>

    <!-- Internal Data tables -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>

    <!--Internal  Datatable js -->
    <script src="{{ asset('assets/js/table-data.js') }}"></script>

    <!--Internal  Notify js -->
    <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('/plugins/notify/js/notifit-custom.js') }}"></script>

@endsection
