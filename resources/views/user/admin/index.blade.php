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
                url: '{{ route('admin.user.items') }}',
                columns: [[
                    {field: 'checkbox', checkbox: true},
                    {field: 'id', sortable: true, title: 'شناسه', align: 'center'},
                    {
                        field: 'name', sortable: true, title: 'نام', align: 'center',
                        formatter: function (val, row) {
                            return '<a href="' + '{{ route('admin.user.index') }}' + '/' + row.id + '" target="_blank">' + val + '</a>';
                        }
                    },
                    {field: 'family', sortable: true, title: 'نام خانوادگی', align: 'center'},
                    {field: 'username', sortable: true, title: 'نام کاربری', align: 'center'},
                    {field: 'mobile', sortable: true, title: 'موبایل', align: 'center'},
                    {
                        field: 'is_active', sortable: true, title: 'وضعیت حساب', align: 'center',
                        formatter: function (val, row) {
                            if (val === true)
                                return 'فعال';
                            else
                                return 'غیرفعال';
                        }
                    },
                    {
                        field: 'deleted_at', sortable: true, title: 'تاریخ معلق شدن', align: 'center',
                        formatter: function (val, row) {
                            if (val === null)
                                return 'فعال';
                            else
                                return val;
                        }
                    },
                    {field: 'created_at', sortable: true, title: 'تاریخ ایجاد', align: 'center'},
                ]],

                // singleSelect: true,
                toolbar: [
                    {
                        text: 'نمایش',
                        iconCls: 'fa fa-eye',
                        handler: function () {
                            window.open('{{ route('admin.user.index') }}' + '/' + id(), '_blank');
                        }
                    },
                    {
                        text: 'دسترسی ها',
                        iconCls: 'fa fa-lock',
                        handler: function () {
                            window.open('{{ route('admin.user.index') }}' + '/permissions/edit/' + id(), '_blank');
                        }
                    }, '-', {
                        text: 'ویرایش',
                        iconCls: 'fa fa-pencil',
                        handler: function () {
                            window.open('{{ route('admin.user.index') }}' + '/' + 'edit' + '/' + id(), '_blank');
                        }
                    }, '-', {
                        text: 'معلق/غیر معلق',
                        iconCls: 'fa fa-ban',
                        handler: function () {
                            $.post('{{ route('admin.user.index') }}' + '/' + 'soft' + '/' + ids(), {_method: 'delete'}).done(function () {
                                $('#dg').datagrid('reload');
                            });
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
                                            $.post('{{ route('admin.user.index') }}' + '/' + ids(), {_method: 'delete'}).done(function (response) {
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

{{--@section('helper_block')
    <div class="form-group helper-block">
        <div class="pull-left">
            <p>Breadcrumb</p>
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-info btn-ajax">ویرایش</button>
            <a href="{{ route('admin.user.index') }}" class="btn btn-danger">انصراف</a>
        </div>
    </div>
@stop--}}
