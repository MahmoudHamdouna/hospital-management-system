@extends('Dashboard.layouts.app')
@section('title')
    الفواتير المكتملة
@stop
@section('styles')
    <link href="{{ URL::asset('dashboard/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection

@section('content')
    @include('Dashboard.message_alert')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الفواتير المكتملة</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    الفواتير</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
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
                                    <th>اسم المريض</th>
                                    <th>اسم الدكتور</th>
                                    <th>المطلوب</th>
                                    <th>حالة الفاتورة</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $invoice->created_at }}</td>
                                        <td><a
                                                href="{{ route('view_rays', $invoice->id) }}">{{ $invoice->Patient->name }}</a>
                                        </td>
                                        <td>{{ $invoice->doctor->name }}</td>
                                        <td>{{ $invoice->description }}</td>
                                        <td>
                                            @if ($invoice->case == 0)
                                                <span class="badge badge-danger">تحت الاجراء</span>
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
                                                    <li> <a class="dropdown-item" href=""><i
                                                                class="text-primary fa fa-stethoscope"></i>&nbsp;&nbsp;اضافة
                                                            تشخيص </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
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
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('dashboard/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
