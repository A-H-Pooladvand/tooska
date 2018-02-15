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
                title: '&nbsp;لیست اخبار بلاگ',
                url: '{{ route('admin.blog.items') }}',
                columns: [[
                    {field: 'checkbox', checkbox: true},
                    {field: 'id', sortable: true, title: 'شناسه', align: 'center'},
                    {
                        field: 'title', sortable: true, title: 'عنوان', align: 'center',
                        formatter: function (val, row) {
                            return '<a href="' + '{{ route('admin.blog.index') }}' + '/' + row.id + '" target="_blank">' + val + '</a>';
                        }
                    },
                    {field: 'summary', sortable: true, title: 'خلاصه', align: 'center'},
                    {
                        field: 'status', sortable: true, title: 'وضعیت', align: 'center',
                        formatter: function (val, row) {
                            return row.status_farsi;
                        }
                    },
                    {field: 'created_at', sortable: true, title: 'تاریخ ایجاد', align: 'center'},
                    {field: 'updated_at', sortable: true, title: 'تاریخ ویرایش', align: 'center'},
                ]],

                // singleSelect: true,
                toolbar: [{
                    text: 'نمایش',
                    iconCls: 'fa fa-eye',
                    handler: function () {
                        window.open('{{ route('admin.blog.index') }}' + '/' + id(), '_blank');
                    }
                }, '-', {
                    text: 'ویرایش',
                    iconCls: 'fa fa-pencil',
                    handler: function () {
                        window.open('{{ route('admin.blog.index') }}' + '/' + 'edit' + '/' + id(), '_blank');
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
                                        $.post('{{ route('admin.blog.index') }}' + '/' + ids(), {_method: 'delete'}).done(function (response) {
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
                field: 'status',
                type: 'combobox',
                options: {
                    panelHeight: 'auto',
                    data: [
                        {value: '', text: 'همه'},
                        {value: 'publish', text: 'منتشر شده'},
                        {value: 'draft', text: 'پیش نویس'}],
                    onChange: function (value) {
                        let fieldName = this.name;
                        doFilterOnChange(value, fieldName);
                    }
                }
            }]);
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
