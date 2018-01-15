let mix = require('laravel-mix');

// Admin Panel Layout Scripts
mix.js([
    'resources/assets/admin/js/app.js',
    'resources/assets/admin/js/_layout/sidebar.js',
    'resources/assets/admin/js/_layout/ajax_post.js',
    'public/vendor/laravel-filemanager/js/lfm.js',
], 'public/js/admin.js')
    .sass('resources/assets/admin/sass/app.scss', 'public/css/admin.css');

// Tiny MCE
mix.js('resources/assets/_assets/admin/tinymce/init.js', 'public/assets/tinymce/tinymce.js')
    .copyDirectory('node_modules/tinymce/skins','public/assets/tinymce/skins')
    .copy('node_modules/tinymce-i18n/langs/fa_IR.js','public/assets/tinymce/lang s/fa_IR.js');