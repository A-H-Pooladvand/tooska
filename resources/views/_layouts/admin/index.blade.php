<!doctype html>
<html lang="{{ config('app.locale') }}" dir="rtl">

<head>
    @include('_layouts.admin.includes.styles')
    @stack('page-styles')
    @stack('styles')
</head>

<body>

<header>
    @include('_layouts.admin.includes.header')
</header>

<section>
    <!-- Sidebar -->
    @include('_layouts.admin.includes.sidebar')

    <div class="container-fluid" id="admin-layout">

        @yield('helper_block')

        @yield('content')
    </div>

</section>

<footer>
    @include('_layouts.admin.includes.footer')
</footer>

@include('_layouts.admin.includes.scripts')
@stack('page-scripts')
@stack('scripts')
<script>

    // >>> JEasyUi Setups DO NOT TOUCH THESE SCRIPS ! <<<
    if (typeof dataGrid !== 'undefined') {
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

        dataGrid.datagrid('enableFilter', [
            {
                field: 'created_at',
                type: 'datebox',
            },
            {
                field: 'updated_at',
                type: 'datebox',
            },
            {
                field: 'deleted_at',
                type: 'datebox',
            },
        ]);

        function doFilterOnChange(value, fieldName) {
            if (value === '') {
                dataGrid.datagrid('removeFilterRule', fieldName);
            } else {
                dataGrid.datagrid('addFilterRule', {
                    field: fieldName,
                    op: 'equal',
                    value: value
                });
            }
            dataGrid.datagrid('doFilter');

        }
    }
</script>
</body>

</html>

