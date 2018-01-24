@extends('_layouts.admin.index')

@section('content')

    @script(easyui/easyui.js)
    @style(easyui/easyui.css)

    <table id="dg"></table>

    @push('scripts')
        <script>
            let dataGrid = $('#dg').datagrid({
                url: '{{ route('admin.permission.items') }}',
                columns: [[
                    {field: 'checkbox', checkbox: true},
                    {field: 'id', sortable: true, title: 'شناسه', align: 'center'},
                    {
                        field: 'name', sortable: true, title: 'نامک', align: 'center',
                        formatter: function (val, row) {
                            return '<a href="' + '{{ route('admin.permission.index') }}' + '/' + row.id + '" target="_blank">' + val + '</a>';
                        }
                    },
                    {field: 'display_name', sortable: true, title: 'نام نمایشی', align: 'center'},
                    {field: 'description', sortable: true, title: 'توضیحات', align: 'center'},
                    {field: 'created_at', sortable: true, title: 'تاریخ ایجاد', align: 'center'},
                    {field: 'updated_at', sortable: true, title: 'تاریخ ویرایش', align: 'center'},
                ]],

                // singleSelect: true,
                toolbar: [{
                    text: 'نمایش',
                    iconCls: 'fa fa-eye',
                    handler: function () {
                        window.open('{{ route('admin.permission.index') }}' + '/' + id(), '_blank');
                    }
                }, '-', {
                    text: 'ویرایش',
                    iconCls: 'fa fa-pencil',
                    handler: function () {
                        window.open('{{ route('admin.permission.index') }}' + '/' + 'edit' + '/' + id(), '_blank');
                    }
                }, '-', {
                    text: 'معلق/غیر معلق',
                    iconCls: 'fa fa-ban',
                    handler: function () {
                        $.post('{{ route('admin.permission.index') }}' + '/' + 'soft' + '/' + ids(), {_method: 'delete'}).done(function () {
                            $('#dg').datagrid('reload');
                        });
                    }
                }, '-', {
                    text: 'حذف',
                    iconCls: 'fa fa-trash-o',
                    handler: function () {
                        if (confirm('آیا از حذف این رکورد(ها) مطمئن هستید؟')) {
                            $.post('{{ route('admin.permission.index') }}' + '/' + ids(), {_method: 'delete'}).done(function () {
                                $('#dg').datagrid('reload');
                            });
                        }
                    }
                }
                ]
            });

            dataGrid.datagrid('enableFilter');


            function id() {
                return $('#dg').datagrid('getSelected').id;
            }

            function ids() {
                let ids = [];
                let rows = $('#dg').datagrid('getSelections');
                for (let i = 0; i < rows.length; i++) {
                    ids.push(rows[i].id);
                }
                return ids;
            }
        </script>
    @endpush

@stop

@section('helper_block')
    <div class="form-group helper-block">
        <div class="pull-left">
            <p>Breadcrumb</p>
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-info btn-ajax">ویرایش</button>
            <a href="{{ route('admin.permission.index') }}" class="btn btn-danger">انصراف</a>
        </div>
    </div>
@stop
