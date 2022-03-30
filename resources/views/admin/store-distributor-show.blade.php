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
					<li class="breadcrumb-item"><a href="{{route('admin.store-distributors.index')}}">Store Operators and Distributors</a></li>
					<li class="breadcrumb-item active">{{$store_distributor->name}} </li>
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
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->name}} </p></dd>
							<!-- end Name -->

							<!-- Email -->
							@if(!is_null($store_distributor->email))
							<dt class="col-sm-4"><h5 class="card-title">Email</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->email}}</p></dd>
							@endif
							<!-- end Email -->

							<!-- Mobile -->
							@if(!is_null($store_distributor->mobile))
							<dt class="col-sm-4"><h5 class="card-title">Mobile</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->mobile}}</p></dd>
							@endif


							@if(!is_null($store_distributor->distributor))
							<dt class="col-sm-4"><h5 class="card-title">Distributor Store Operator</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->distributor}}</p></dd>
							@endif


							@if(!is_null($store_distributor->state))
							<dt class="col-sm-4"><h5 class="card-title">State</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->state}}</p></dd>
							@endif


							@if(!is_null($store_distributor->city))
							<dt class="col-sm-4"><h5 class="card-title">City</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->city}}</p></dd>
							@endif


							@if(!is_null($store_distributor->zip_code))
							<dt class="col-sm-4"><h5 class="card-title">Zip Code</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->zip_code}}</p></dd>
							@endif

							@if(!is_null($store_distributor->message))
							<dt class="col-sm-4"><h5 class="card-title">Message</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->message}}</p></dd>
							@endif

							<!-- end -->

							<dt class="col-sm-4"><h5 class="card-title">Created At</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->created_at->format('d-m-Y H:i:s') }}</p></dd>

							<!-- Last Updated -->
							<dt class="col-sm-4"><h5 class="card-title">Last Updated</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$store_distributor->updated_at->diffForHumans() }}</p></dd>

							@if($replies>0)
							<dt class="col-sm-4"><h5 class="card-title">Previous replies</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: <a href="{{ route('admin.replies.show',[$store_distributor->id,'type'=>'store_distributors']) }}"> Previous replies </a> </p></dd>
							@endif


							<dt class="col-sm-4"><h5 class="card-title">Reply with message</h5></dt>
							<dd class="col-sm-8">
								<form method="POST" action="{{ route('admin.send-reply.store') }}">
									@csrf
									<input type="hidden" value="store_distributors" name="enquiry_type">
									<input type="hidden" value="{{ $store_distributor->id }}" name="enquiry_id">
								<textarea required class="form-control" cols="10" rows="5" name="body" >{{ old('body') }}</textarea>
								<br/>
								<input type="submit">
								</form>
							</dd>

							<!-- end Last Updated -->
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
