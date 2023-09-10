@extends('layouts.app')

@section('styles')

		<!-- Internal Select2 css -->
		<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">


@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Mail</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Compose-mail</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-info btn-icon btn-b" id="m-l-c-05"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-danger btn-icon" id="m-l-c-05"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-warning btn-icon" id="m-l-c-05"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->

				<!-- row opened -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4 col-xl-3 col-md-12 col-sm-12">
						<div class="card mg-b-20">
							<div class="main-content-left main-content-left-mail card-body">
								<a class="btn btn-primary btn-compose" href="" id="btnCompose">Compose</a>
								<div class="main-mail-menu">
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href=""><i class="bx bxs-inbox"></i> Inbox <span>18</span></a>
										<a class="nav-link" href=""><i class="bx bx-star"></i> Starred <span>8</span></a>
										<a class="nav-link" href=""><i class="bx bx-alarm-snooze"></i> Snoozed <span>6</span></a>
										<a class="nav-link" href=""><i class="bx bx-bookmarks"></i> Important <span>15</span></a>
										<a class="nav-link" href=""><i class="bx bx-send"></i> Sent Mail <span>24</span></a>
										<a class="nav-link" href=""><i class="bx bx-edit"></i> Drafts <span>2</span></a>
										<a class="nav-link" href=""><i class="bx bx-message-error"></i> Spam <span>32</span></a>
										<a class="nav-link" href=""><i class="bx bx-message-square-detail"></i> Chats <span>14</span></a>
										<a class="nav-link" href=""><i class="bx bx-folder"></i> All Mail <span>652</span></a>
										<a class="nav-link" href=""><i class="bx bx-book-content"></i> Contacts <span>547</span></a>
										<a class="nav-link" href=""><i class="bx bx-trash"></i> Trash <span>365</span></a>
									</nav>
									<label class="main-content-label main-content-label-sm">Settings</label>
									<nav class="nav main-nav-column">
										<a class="nav-link active" href="#">Email Settings</a>
										<a class="nav-link" href="#">Account Information</a>
									</nav>
								</div><!-- main-mail-menu -->
							</div>
						</div>
					</div>
					<!-- /Col -->
					<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Compose new message</h3>
							</div>
							<div class="card-body">
								<form >
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-2">To</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-2">Subject</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row ">
											<label class="col-sm-2">Message</label>
											<div class="col-sm-10">
												<textarea rows="10" class="form-control"></textarea>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="card-footer d-sm-flex">
								<div class="mt-2 mb-2">
									<a href="javascript:void(0)" class="m-e-c-3" data-bs-toggle="tooltip" title="Attach" data-bs-original-title="Attach"><i class="bx bx-paperclip text-muted tx-22"></i></a>
									<a href="javascript:void(0)" class="m-e-c-3" data-bs-toggle="tooltip" title="Link" data-bs-original-title="Link"><i class="bx bx-link text-muted tx-22"></i></a>
									<a href="javascript:void(0)" class="m-e-c-3" data-bs-toggle="tooltip" title="Photos" data-bs-original-title="Photos"><i class="bx bx-image text-muted tx-22"></i></a>
									<a href="javascript:void(0)" class="m-e-c-3" data-bs-toggle="tooltip" title="Delete" data-bs-original-title="Delete"><i class="bx bx-trash text-muted tx-22"></i></a>
								</div>
								<div class="btn-list ms-auto">
									<button type="button" class="btn btn-success btn-space">Discard</button>
									<button type="button" class="btn btn-primary btn-space">Save</button>
									<button type="button" class="btn btn-danger btn-space">Send</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection('content')

@section('scripts')

		<!--Internal Sparkline js -->
		<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
		
		<!-- Internal Select2.min js -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

@endsection