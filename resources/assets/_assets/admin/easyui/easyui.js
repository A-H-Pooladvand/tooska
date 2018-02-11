require('./files/jquery.easyui.min');
require('./files/easyui-rtl');
require('./files/datagrid-filter');
require('./files/easyui-lang-fa');


// JEasyUi Default Setups

let $datagrid = $('#dg');
$datagrid.datagrid({
    pageList: [10, 20, 50, 100],
    remoteFilter: true,
    striped: true,
    pagination: true,
    filterBtnIconCls: 'fa fa-chevron-down',
    filterMenuIconCls: 'fa fa-check',
    filterDelay: 1000,
    rownumbers: true,
    height: 500,
    iconCls: 'fa fa-diamond',
    collapsible: true,
    maximizable: true,
});








