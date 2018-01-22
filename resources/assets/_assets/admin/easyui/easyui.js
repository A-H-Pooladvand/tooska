require('./files/jquery.easyui.min');
require('./files/easyui-rtl');
require('./files/datagrid-filter');
require('./files/easyui-lang-fa');


// JEasyUi Default Setups


$('#dg').datagrid({
    pageList: [10, 20, 50, 100],
    remoteFilter: true,
    striped: true,
    fitColumns: true,
    pagination: true,
    filterBtnIconCls: 'fa fa-chevron-down',
    filterMenuIconCls: 'fa fa-check',
    filterDelay: 1000,
});