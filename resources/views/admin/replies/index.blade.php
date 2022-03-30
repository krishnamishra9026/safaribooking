@extends('admin.app')
@section('title', 'Personal Players')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Players</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @include('admin.sections.flash-message')
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="mt-2">Previous Replies</h4>
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
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-hover table-centered datatable datatable-ProductCategory">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Ref</th>
                                        <th>Message</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($replies as $reply)
                                        <tr>
                                            <td># {{ $reply->id }}</td>
                                            <td>{{ $reply->body }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12">
                            {{ $replies->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-warning h1 text-warning"></i>
                        <h4 class="mt-2">Account Verification</h4>
                        <p class="mt-3">Are you Sure ? </p>
                        <p class="mt-3">This Business Account will be activated</p>
                        <form method="post" action="{{ route('admin.verify-user') }}" id="verifyForm">
                            @csrf
                            <input type="hidden" value="" id="userid" name="userid">
                            <button type="button" class="btn btn-light my-2" data-dismiss="modal"> Cancel</button>
                            <button type="submit" class="btn btn-warning my-2" form="verifyForm">
                                Confirm</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function confirmDelete(no) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form' + no).submit();
                }
            })
        };
    </script>
    <script type="text/javascript">
        $('#warning-alert-modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
		var user_id = button.data('userid');
		var modal = $(this)
		modal.find('.modal-body #userid').val(user_id);
        });
    </script>
@endpush
