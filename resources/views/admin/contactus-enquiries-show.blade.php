@extends('admin.app')
@section('title', 'Show Personal User')
@section('content')
<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="{{route('admin.contactus-enquiries.index')}}">Contactus Enquiry</a></li>
					<li class="breadcrumb-item active">{{$contactus_enquiry->name}} </li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card border-info border">
			<div class="card-header">
				<div class="row">
					<div class="col-md-4">
						<h4 class="mt-2">Details</h4>
					</div>
					<div class="col-md-8 text-right">
						<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back </a>
					</div>
					@if (\Session::has('success'))
					<div class="alert alert-success col-sm-12" style="height: 45px;">
						<p>{!! \Session::get('success') !!}</p>
					</div>
					@endif
				</div>
			</div>
			<div class="card-body">
				<div class="row no-gutters">
					<div class="col-md-8">
						<dl class="row mb-0">

							<!-- Name -->
							<dt class="col-sm-4"><h5 class="card-title">Full Name</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$contactus_enquiry->name}} </p></dd>
							<!-- end Name -->

							<!-- Email -->
							@if(!is_null($contactus_enquiry->email))
							<dt class="col-sm-4"><h5 class="card-title">Email</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$contactus_enquiry->email}}</p></dd>
							@endif
							<!-- end Email -->

							<!-- Mobile -->
							@if(!is_null($contactus_enquiry->mobile))
							<dt class="col-sm-4"><h5 class="card-title">Mobile</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$contactus_enquiry->mobile}}</p></dd>
							@endif


							@if(!is_null($contactus_enquiry->distributor))
							<dt class="col-sm-4"><h5 class="card-title">Distributor</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$contactus_enquiry->distributor}}</p></dd>
							@endif

							@if(!is_null($contactus_enquiry->subject))
							<dt class="col-sm-4"><h5 class="card-title">Subject</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$contactus_enquiry->subject}}</p></dd>
							@endif


							@if(!is_null($contactus_enquiry->message))
							<dt class="col-sm-4"><h5 class="card-title">Message</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$contactus_enquiry->message}}</p></dd>
							@endif

							<!-- end -->

							<dt class="col-sm-4"><h5 class="card-title">Created At</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$contactus_enquiry->created_at->format('d-m-Y H:i:s') }}</p></dd>

							<!-- Last Updated -->
							<dt class="col-sm-4"><h5 class="card-title">Last Updated</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$contactus_enquiry->updated_at->diffForHumans() }}</p></dd>
							<!-- end Last Updated -->

							@if($replies>0)
							<dt class="col-sm-4"><h5 class="card-title">Previous replies</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: <a href="{{ route('admin.replies.show',[$contactus_enquiry->id,'type'=>'contactus_enquiries']) }}"> Previous replies </a> </p></dd>
							@endif


							<dt class="col-sm-4"><h5 class="card-title">Reply with message</h5></dt>
							<dd class="col-sm-8">
								<form method="POST" action="{{ route('admin.send-reply.store') }}">
									@csrf
									<input type="hidden" value="contactus_enquiries" name="enquiry_type">
									<input type="hidden" value="{{ $contactus_enquiry->id }}" name="enquiry_id">
								<textarea required class="form-control" cols="10" rows="5" name="body" >{{ old('body') }}</textarea>
								<br/>
								<input type="submit">
								</form>
							</dd>

						</dl>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')
@endpush
