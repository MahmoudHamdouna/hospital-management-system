@extends('layouts.app')

@section('styles')

		<!---Internal  Prism css-->
		<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!---Internal Input tags css-->
		<link href="{{asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Elements</h4><span
								class="text-muted mt-1 tx-13 ms-2 mb-0">/ Toast</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-info btn-icon btn-b" id="m-l-c-05"><i
									class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-danger btn-icon" id="m-l-c-05"><i
									class="mdi mdi-star"></i></button>
						</div>
						<div class="mb-xl-0" id="p-r-c-1">
							<button type="button" class="btn btn-warning btn-icon" id="m-l-c-05"><i
									class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
									id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate"
									x-placement="bottom-end">
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

				<!-- Row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card custom-card" id="basic">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="text-muted card-sub-title">Toasts are as flexible as you need and have
										very little required markup. At a minimum, we require a single element to
										contain your “toasted” content and strongly encourage a dismiss button.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show w-100-res"
												role="alert">
												<div class="toast-header justify-content-between">
													<h6 class="tx-14 mg-b-0 flex-grow-1">Notification</h6><small
														class="text-muted">11 ago mins</small>
													<button aria-label="Close" class="ms-2 mb-1 close tx-normal"
														data-bs-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code"
												data-bs-toggle="tab" href="#html-code" role="tab"
												aria-controls="html-code" aria-selected="true"><i
													class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
									<!-- Prism Precode -->
									<figure class="highlight clip-widget" id="toast1">
										<pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-1 flex-grow-1">Notification</h6><small class="text-muted">11 ago mins</small>
			<button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
	</div></script></code></pre>
										<div class="clipboard-icon" data-clipboard-target="#toast1"><i
												class="las la-clipboard"></i></div>
									</figure>
									<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card" id="tarns">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Translucent</h6>
									<p class="text-muted card-sub-title">Toasts are slightly translucent, too, so they
										blend over whatever they might appear over.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show w-100-res"
												role="alert">
												<div class="toast-header">
													<h6 class="tx-1 flex-grow-1">Notification</h6><small
														class="text-muted">11 ago mins</small>
													<button aria-label="Close" class="ms-2 mb-1 close tx-normal"
														data-bs-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code2" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code2"
												data-bs-toggle="tab" href="#html-code2" role="tab"
												aria-controls="html-code2" aria-selected="true"><i
													class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
									<!-- Prism Precode -->
									<figure class="highlight clip-widget" id="toast2">
										<pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-1 flex-grow-1">Notification</h6><small class="text-muted">11 ago mins</small>
			<button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
	</div></script></code></pre>
										<div class="clipboard-icon" data-clipboard-target="#toast2"><i
												class="las la-clipboard"></i></div>
									</figure>
									<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card" id="stacking">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Stacking</h6>
									<p class="text-muted card-sub-title">When you have multiple toasts, we default to
										vertiaclly stacking them in a readable manner.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show w-100-res"
												role="alert">
												<div class="toast-header">
													<h6 class="tx-1 flex-grow-1">Notification</h6><small
														class="text-muted">Just now</small>
													<button aria-label="Close" class="ms-2 mb-1 close"
														data-bs-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													See? Just like this.
												</div>
											</div>
											<div aria-atomic="true" aria-live="assertive" class="toast fade show w-100-res"
												role="alert">
												<div class="toast-header">
													<h6 class="tx-1 flex-grow-1">Notification</h6><small
														class="text-muted">11 ago mins</small> <button
														aria-label="Close" class="ms-2 mb-1 close tx-normal"
														data-bs-dismiss="toast" type="button"><span
															aria-hidden="true">&times;</span></button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code3" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code3"
												data-bs-toggle="tab" href="#html-code3" role="tab"
												aria-controls="html-code3" aria-selected="true"><i
													class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
									<!-- Prism Precode -->
									<figure class="highlight clip-widget" id="toast3">
										<pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-1 flex-grow-1">Notification</h6><small class="text-muted">Just now</small>
			<button aria-label="Close" class="ms-2 mb-1 close" data-bs-dismiss="toast" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="toast-body">
			See? Just like this.
		</div>
	</div>
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-1 flex-grow-1">Notification</h6><small class="text-muted">11 ago mins</small> <button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
	</div></script></code></pre>
										<div class="clipboard-icon" data-clipboard-target="#toast3"><i
												class="las la-clipboard"></i></div>
									</figure>
									<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card" id="place">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Placement</h6>
									<p class="text-muted card-sub-title">Place toasts with custom CSS as you need them.
										The top right is often used for notifications, as is the top middle.</p>
								</div>
								<div class="text-wrap mb-3">
									<div class="example">
										<div class="ht-150 pos-relative mb-3">
											<div class="demo-static-toast pos-absolute t-10 r-10">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show w-100-res"
													role="alert">
													<div class="toast-header">
														<h6 class="tx-1 flex-grow-1">Notification</h6><small
															class="text-muted">11 ago mins</small> <button
															aria-label="Close" class="ms-2 mb-1 close tx-normal"
															data-bs-dismiss="toast" type="button"><span
																aria-hidden="true">&times;</span></button>
													</div>
													<div class="toast-body">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code4" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code4"
												data-bs-toggle="tab" href="#html-code4" role="tab"
												aria-controls="html-code4" aria-selected="true"><i
													class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
									<!-- Prism Precode -->
									<figure class="highlight clip-widget" id="toast4">
										<pre><code class="language-markup"><script type="html-dashlead/script"><div class="ht-150 pos-relative mb-3">
	<div class="demo-static-toast pos-absolute t-10 r-10">
		<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
			<div class="toast-header">
				<h6 class="tx-1 flex-grow-1">Notification</h6><small class="text-muted">11 ago mins</small> <button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="toast-body">
				Hello, world! This is a toast message.
			</div>
		</div>
	</div>
	</div></script></code></pre>
										<div class="clipboard-icon" data-clipboard-target="#toast4"><i
												class="las la-clipboard"></i></div>
									</figure>
									<!-- End Prism Precode -->
								</div>
								<div class="text-wrap mb-3">
									<div class="example">
										<div class="demo-static-toast d-flex justify-content-center align-items-center">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show w-100-res"
												role="alert">
												<div class="toast-header">
													<h6 class="tx-1 flex-grow-1">Notification</h6><small
														class="text-muted">11 ago mins</small> <button
														aria-label="Close" class="ms-2 mb-1 close tx-normal"
														data-bs-dismiss="toast" type="button"><span
															aria-hidden="true">&times;</span></button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code5" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code5"
												data-bs-toggle="tab" href="#html-code5" role="tab"
												aria-controls="html-code5" aria-selected="true"><i
													class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
									<!-- Prism Precode -->
									<figure class="highlight clip-widget" id="toast5">
										<pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast d-flex justify-content-center align-items-center">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-1 flex-grow-1">Notification</h6><small class="text-muted">11 ago mins</small> <button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
	</div></script></code></pre>
										<div class="clipboard-icon" data-clipboard-target="#toast5"><i
												class="las la-clipboard"></i></div>
									</figure>
									<!-- End Prism Precode -->
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="ht-150 pos-relative">
											<div class="demo-static-toast pos-absolute b-10 r-10">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show w-100-res"
													role="alert">
													<div class="toast-header">
														<h6 class="tx-1 flex-grow-1">Notification</h6><small
															class="text-muted">11 ago mins</small> <button
															aria-label="Close" class="ms-2 mb-1 close tx-normal"
															data-bs-dismiss="toast" type="button"><span
																aria-hidden="true">&times;</span></button>
													</div>
													<div class="toast-body">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-tabs html-source" id="html-source-code6" role="tablist">
										<li class="nav-item">
											<a class="nav-link active html-code" id="html-code6"
												data-bs-toggle="tab" href="#html-code6" role="tab"
												aria-controls="html-code6" aria-selected="true"><i
													class="fab fa-html5 text-orange pe-2"></i>HTML</a>
										</li>
									</ul>
									<!-- Prism Precode -->
									<figure class="highlight clip-widget" id="toast6">
										<pre><code class="language-markup"><script type="html-dashlead/script"><div class="ht-150 pos-relative">
	<div class="demo-static-toast pos-absolute b-10 r-10">
		<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
			<div class="toast-header">
				<h6 class="tx-1 flex-grow-1">Notification</h6><small class="text-muted">11 ago mins</small> <button aria-label="Close" class="ms-2 mb-1 close tx-normal" data-bs-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="toast-body">
				Hello, world! This is a toast message.
			</div>
		</div>
	</div>
	</div></script></code></pre>
										<div class="clipboard-icon" data-clipboard-target="#toast6"><i
												class="las la-clipboard"></i></div>
									</figure>
									<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Row closed -->

@endsection('content')

@section('scripts')

        <!--Internal  Clipboard js-->
        <script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

        <!-- Internal Prism js-->
        <script src="{{asset('assets/plugins/prism/prism.js')}}"></script>
    
        <!--Internal  Datepicker js -->
		<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Select2 js-->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Input tags js-->
		<script src="{{asset('assets/plugins/inputtags/inputtags.js')}}"></script>

@endsection