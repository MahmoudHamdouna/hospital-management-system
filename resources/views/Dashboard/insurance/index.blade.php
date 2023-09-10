@extends('Dashboard.layouts.app')

@section('styles')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- Internal Data table css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link href="{{asset('assets/plugins/datatable/datatables.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/datatable/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

<!--Internal   Notify -->
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
    @endsection
@section('content')
@include('Dashboard.message_alert')
 <!-- breadcrumb -->
 <div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{trans('main-sidebar_trans.Services')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('main-sidebar_trans.Insurance')}}</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
 <!-- row -->
 <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{route('insurance.create')}}" class="btn btn-primary">{{trans('insurance.Add_Insurance')}}</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-md-nowrap text-center" id="example1">
                        <thead>
                        <tr class="table-secondary">
                            <th>#</th>
                            <th >{{trans('insurance.Company_code')}}</th>
                            <th >{{trans('insurance.Company_name')}}</th>
                            <th >{{trans('insurance.discount_percentage')}}</th>
                            <th >{{trans('insurance.Insurance_bearing_percentage')}}</th>
                            <th >{{trans('insurance.status')}}</th>
                            <th >{{trans('insurance.notes')}}</th>
                            <th >{{trans('insurance.Processes')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($insurances as $insurance)
                            <tr>
                                <td>{{$loop->iteration }}</td>
                                <td>{{$insurance->insurance_code}}</td>
                                <td>{{$insurance->name}}</td>
                                <td>{{$insurance->discount_percentage}}</td>
                                <td>{{$insurance->Company_rate}}</td>
                                <td class="{{$insurance->status == 1 ? 'bg-success':'bg-danger'}}">{{$insurance->status == 1 ? 'مفعل' : 'غير مفعل'}}</td>
                                <td>{{$insurance->notes}}</td>
                                <td>
                                    <a href="{{route('insurance.edit',$insurance->id)}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#Deleted{{$insurance->id}}"><i class="fas fa-trash"></i>
                                    </button>
                                </td>
                             @include('Dashboard.insurance.Deleted')
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->

@endsection('content')

@section('scripts')
    <!-- Internal Data tables -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{asset('assets/js/table-data.js')}}"></script>
<!--Internal  Notify js -->
<script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
<script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
    
@endsection

