try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {
}

// Bootstrap-Select
import bootstrap_select from 'bootstrap-select';

// Importing persian language.
require('bootstrap-select/js/i18n/defaults-fa_IR');

// Initializing bootstrap-select
$('.bootstrap-select').selectpicker({
    style: 'btn-default',
    width: '100%'
});

// Data table(Bootstrap Version)
import datatables from 'datatables.net';

import datatables_bs from 'datatables.net-bs';

// Setting up persian language for dataTable

$.extend(true, $.fn.dataTable.defaults, {

    "language": {
        search: "_INPUT_",
        searchPlaceholder: "جستجو...",
        "sEmptyTable": "هیچ داده ای در جدول وجود ندارد",
        "sInfo": "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
        "sInfoEmpty": "نمایش 0 تا 0 از 0 رکورد",
        "sInfoFiltered": "(فیلتر شده از _MAX_ رکورد)",
        "sInfoPostFix": "",
        "sInfoThousands": ",",
        // "sLengthMenu": "نمایش _MENU_ رکورد",
        "sLengthMenu": "_MENU_",
        "sLoadingRecords": "در حال بارگزاری...",
        "sProcessing": "در حال پردازش...",
        "sSearch": "جستجو ",
        "sZeroRecords": "رکوردی با این مشخصات پیدا نشد",
        "oPaginate": {
            "sFirst": "ابتدا",
            "sLast": "انتها",
            "sNext": "بعدی",
            "sPrevious": "قبلی"
        },
        "oAria": {
            "sSortAscending": ": فعال سازی نمایش به صورت صعودی",
            "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
        }
    }
});


