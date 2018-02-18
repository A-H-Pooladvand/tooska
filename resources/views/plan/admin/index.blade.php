@extends('_layouts.admin.index')

@section('content')

    @script(easyui/easyui.js)
    @style(easyui/easyui.css)
    @script(jquery-confirm/jquery-confirm.js)
    @style(jquery-confirm/jquery-confirm.css)

    <table id="dg"></table>

    @push('scripts')
        <script>
            let dataGrid = $('#dg').datagrid({
                title: '&nbsp;لیست کاربران',
                url: '{{ route('admin.plan.items') }}',
                columns: [[
                    {field: 'checkbox', checkbox: true},
                    {field: 'id', sortable: true, title: 'شناسه', align: 'center'},
                    {
                        field: 'title', sortable: true, title: 'عنوان', align: 'center',
                        formatter: function (val, row) {
                            return '<a href="' + '{{ route('admin.plan.index') }}' + '/' + row.id + '" target="_blank">' + val + '</a>';
                        }
                    },
                    {field: 'price', sortable: true, title: 'قیمت', align: 'center'},
                    {field: 'content', sortable: true, title: 'محتوا', align: 'center'},
                    {field: 'created_at', sortable: true, title: 'تاریخ ایجاد', align: 'center'},
                    {field: 'updated_at', sortable: true, title: 'تاریخ ویرایش', align: 'center'},
                ]],

                // singleSelect: true,
                toolbar: [
                    {
                        text: 'نمایش',
                        iconCls: 'fa fa-eye',
                        handler: function () {
                            window.open('{{ route('admin.plan.index') }}' + '/' + id(), '_blank');
                        }
                    }, '-', {
                        text: 'ویرایش',
                        iconCls: 'fa fa-pencil',
                        handler: function () {
                            window.open('{{ route('admin.plan.index') }}' + '/' + 'edit' + '/' + id(), '_blank');
                        }
                    }, '-', {
                        text: 'حذف',
                        iconCls: 'fa fa-trash-o',
                        handler: function () {
                            $.confirm({
                                title: 'حذف رکورد؟',
                                content: 'آیا از حذف این رکورد(ها) مطمئن هستید؟',
                                buttons: {
                                    close: {
                                        text: 'خیر',
                                        btnClass: 'btn-danger',
                                    },
                                    confirm: {
                                        text: 'بله',
                                        btnClass: 'btn-primary',
                                        action: function () {
                                            $.post('{{ route('admin.plan.index') }}' + '/' + ids(), {_method: 'delete'}).done(function (response) {
                                                if (response['error'])
                                                    $.alert({
                                                        title: 'خطا!',
                                                        content: response['error'],
                                                        buttons: {
                                                            ok: {
                                                                text: 'باشه',
                                                                btnClass: 'btn-primary',
                                                            }
                                                        }
                                                    });

                                                $('#dg').datagrid('reload');
                                            });
                                        }
                                    }
                                }
                            });
                        }
                    }
                ]
            });

            dataGrid.datagrid('enableFilter', [{
                field: 'is_active',
                type: 'combobox',
                options: {
                    panelHeight: 'auto',
                    data: [
                        {value: '', text: 'همه'},
                        {value: 1, text: 'فعال'},
                        {value: 0, text: 'غیرفعال'}],
                    onChange: function (value) {
                        let fieldName = this.name;
                        doFilterOnChange(value, fieldName);
                    }
                }
            }]);


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
