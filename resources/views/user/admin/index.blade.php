@extends('_layouts.admin.index')

@section('content')

    <table id="data_table__grid" class="table table-hover dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>#</th>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>نام کاربر</th>
            <th>شماره موبایل</th>
            <th>تاریخ ایجاد</th>
            <th>تاریخ ویرایش</th>
        </tr>
        </thead>
    </table>

    @push('scripts')
        <script>
            $(document).ready(function () {
                $('#data_table__grid').DataTable({
                    ajax: {
                        url: '{{ route('admin.user.items') }}',
                        type: 'POST'
                    },
                    serverSide: true,
                    processing: true,

                    "sDom": '<"dataTables_paginate"<"text-center"><"row view-filter"<"col-sm-12"<"pull-right"l><"pull-left"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"p>>>',
                    "columns": [
                        {"data": "id"},
                        { "data": "name",
                            "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                                $(nTd).html('<a href="'+ '{{ route('admin.user.index') }}'+ '/' +oData.id +'">'+oData.name+'</a>');
                            }
                        },
                        {"data": "family"},
                        {"data": "username"},
                        {"data": "mobile"},
                        {"data": "created_at"},
                        {"data": "updated_at"}
                    ]
                });
            });
        </script>
    @endpush

@stop