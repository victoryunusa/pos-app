@extends('layouts.layout')

@section("content")
<div class="row">
    <div class="col-md-12">
        
        <div class="d-flex flex-wrap mb-4">
            <div class="mr-auto">
                <span class="text-title">{{ __("Kitchen Displays") }}</span>
            </div>
            <div class="">
                @if (check_access(array('A_ADD_KITCHEN_DISPLAY'), true))
                    <a href="{{ route('add_kitchen_display')}}" role="button" class="btn btn-primary">{{ __("New Kitchen Display") }}</a>
                @endif
            </div>
        </div>

        <div class="table-responsive">
            <table id="listing-table" class="table display nowrap w-100">
                <thead>
                    <tr>
                        <th>{{ __("Kitchen Display Code") }}</th>
                        <th>{{ __("Name") }}</th>
                        <th>{{ __("Status") }}</th>
                        <th>{{ __("Created On") }}</th>
                        <th>{{ __("Updated On") }}</th>
                        <th>{{ __("Created By") }}</th>
                        <th>{{ __("Action") }}</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="{{ asset('js/pages/kitchen_displays.js') }}"></script>
    <script>
        'use strict';
        var kitchen_displays = new KitchenDisplays();
        kitchen_displays.load_listing_table();
    </script>
@endpush