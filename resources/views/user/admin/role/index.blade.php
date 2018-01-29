@extends('_layouts.admin.index')

@section('content')

    @script(easyui/easyui.js)
    @style(easyui/easyui.css)

    <table id="dg"></table>

    @push('scripts')
        <script>
            let dataGrid = $('#dg').datagrid({
                url: '{{ route('admin.role.items') }}',
                columns: [[
                    {field: 'checkbox', checkbox: true},
                    {field: 'id', sortable: true, title: 'شناسه', align: 'center'},
                    {
                        field: 'display_name', sortable: true, title: 'عنوان', align: 'center',
                        formatter: function (val, row) {
                            return '<a href="' + '{{ route('admin.role.index') }}' + '/' + row.id + '" target="_blank">' + val + '</a>';
                        }
                    },
                    {field: 'description', sortable: true, title: 'توضیحات', align: 'center'},
                    {field: 'created_at', sortable: true, title: 'تاریخ ایجاد', align: 'center'},
                    {field: 'updated_at', sortable: true, title: 'تاریخ ویرایش', align: 'center'},
                ]],

                // singleSelect: true,
                toolbar: [{
                    text: 'نمایش',
                    iconCls: 'fa fa-eye',
                    handler: function () {
                        window.open('{{ route('admin.role.index') }}' + '/' + id(), '_blank');
                    }
                }, '-', {
                    text: 'ویرایش',
                    iconCls: 'fa fa-pencil',
                    handler: function () {
                        window.open('{{ route('admin.role.index') }}' + '/' + 'edit' + '/' + id(), '_blank');
                    }
                }, '-', {
                    text: 'حذف',
                    iconCls: 'fa fa-trash-o',
                    handler: function () {
                        if (confirm('آیا از حذف این رکورد(ها) مطمئن هستید؟')) {
                            $.post('{{ route('admin.role.index') }}' + '/' + ids(), {_method: 'delete'}).done(function (response) {

                                if (response['error'])
                                    alert(response['error']);

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
            <a href="{{ route('admin.role.index') }}" class="btn btn-danger">انصراف</a>
        </div>
    </div>
@stop
