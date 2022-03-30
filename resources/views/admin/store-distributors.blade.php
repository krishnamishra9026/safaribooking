@extends('admin.app')
@section('title', 'Personal Users')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Store Operators and Distributors</li>
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
                            <h4 class="mt-2"> Store Operators and Distributors </h4>
                        </div>
                        <div class="col-md-2">
                            <select id="input" class="form-control" name="filter_type">
                                <option value="">Select Type</option>
                                <option value="Distributor" @if(@$filter_type=='Distributor') selected @endif>Distributor</option>
                                <option value="Store Operator"  @if(@$filter_type=='Store Operator') selected @endif>Store Operator</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                                <button type="button" id="button-filter" class="btn btn-danger"><i class="fa fa-filter"></i>&nbsp;Filter</button>
                                <button type="button" id="button-reset-filter" class="btn btn-danger"><i class="fa fa-filter"></i>&nbsp;Reset Filter</button>
                            </div>
                            <div class="form-group col-md-2 filter-btn col-md-2 text-right">
                                
                            </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-hover table-centered datatable datatable-ProductCategory">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Ref</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Lead Type</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Message</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($distributors as $distributor)
                                        <tr>
                                            <td># {{ $distributor->id }}</td>
                                            <td>{{ $distributor->name }}</td>
                                            <td>{{ $distributor->email }}</td>
                                            <td class="text-center">{{ $distributor->distributor }}</td>
                                            <td class="text-center">{{ $distributor->mobile }}</td>
                                            <td>{{\Illuminate\Support\Str::limit($distributor->message, 50, '....')}}</td>
                                            <td class="table-action text-center">
                                                <a href="{{ route('admin.store-distributors.show', $distributor) }}"
                                                    class="btn btn-primary"><i class="mdi mdi-eye-outline"></i> </a>
                                                {{-- <a href="{{ route('admin.personal-users.edit', $distributor) }}"
                                                    class="btn btn-warning"><i class="mdi mdi-pencil"></i> </a>
                                                <button type="button" onclick="confirmDelete({{ $distributor->id }})"
                                                    class="btn btn-danger"><i class="mdi mdi-delete"></i> </button>
                                                <form id='delete-form{{ $distributor->id }}'
                                                    action='{{ route('admin.personal-users.destroy', $distributor->id) }}'
                                                    method='POST'>
                                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                                    <input type='hidden' name='_method' value='DELETE'>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12">
                            {{ $distributors->links('vendor.pagination.custom') }}
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

    <script type="text/javascript">
    $('#button-reset-filter').on('click', function() {
         url = '{{route('admin.store-distributors.index')}}';
         location = url;
    });
    $('#button-filter').on('click', function() {
        url = '{{route('admin.store-distributors.index')}}?s=1';
        var filter_type = $('select[name=\'filter_type\']').val();
        if (filter_type) {
            url += '&filter_type=' + encodeURIComponent(filter_type);
        }
       

        location = url;
    });
  </script>
@endpush
