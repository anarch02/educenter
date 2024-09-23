@extends('layouts.app')

@section('title', 'Branches')

@section('js')
    <!-- DATA TABLE JS-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/table-data.js') }}"></script>

@endsection

@section('content')

<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">{{ __('app.branches') }}</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('app.dashboard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('app.branches') }}</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('branches.create') }}" class="btn btn-primary">Add Branch</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <x-table :table="$table" :array="$branches" :route="$route" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <x-modal>
        <x-form id="add-form" class="index" :route="route('branches.store')">
            @csrf
            @isset($branch)
                @method('PUT')
            @endisset
            <div class="modal-header">
                <h5 class="modal-title">{{ __('app.create') }}</h5>
                <button class="btn-close me-1" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <x-form.select :collection="$regions" :name="'region_id'" :label="'region'" />
                    <x-form.select :collection="$cities" :name="'city_id'" :label="'city'" />
                    <x-form.input :type="'text'" :name="'name'" />
                    <x-form.input :type="'text'" :name="'address'" />
                    <x-form.input :type="'text'" :name="'phone'" />
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" type="reset" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit" id="submit">Save changes</button>
            </div>

        </x-form>



    </x-modal>

@endsection


