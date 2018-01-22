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