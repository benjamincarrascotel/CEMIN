const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

    mix.js('resources/assets/js/accordion.js', 'public/assets/js')
    mix.js('resources/assets/js/alerts.js', 'public/assets/js')
    mix.js('resources/assets/js/apexchart-custom.js', 'public/assets/js')
    mix.js('resources/assets/js/apexcharts.js', 'public/assets/js')
    mix.js('resources/assets/js/apexcharts-rtl.js', 'public/assets/js')
    mix.js('resources/assets/js/app-calendar.js', 'public/assets/js')
    mix.js('resources/assets/js/app-calendar-events.js', 'public/assets/js')
    mix.js('resources/assets/js/chart.flot.sampledata.js', 'public/assets/js')
    mix.js('resources/assets/js/chart.js', 'public/assets/js')
    mix.js('resources/assets/js/charts.js', 'public/assets/js')
    mix.js('resources/assets/js/chat.js', 'public/assets/js')
    mix.js('resources/assets/js/chat2.js', 'public/assets/js')
    mix.js('resources/assets/js/chat-rtl.js', 'public/assets/js')
    mix.js('resources/assets/js/checkout-jquery-steps.js', 'public/assets/js')
    mix.js('resources/assets/js/contact.js', 'public/assets/js')
    mix.js('resources/assets/js/cookie.js', 'public/assets/js')
    mix.js('resources/assets/js/counterup.js', 'public/assets/js')
    mix.js('resources/assets/js/custom.js', 'public/assets/js')
    mix.js('resources/assets/js/dashboard.sampledata.js', 'public/assets/js')
    mix.js('resources/assets/js/datatables.js', 'public/assets/js')
    mix.js('resources/assets/js/daterange.js', 'public/assets/js')
    mix.js('resources/assets/js/daterangepicker.js', 'public/assets/js')
    mix.js('resources/assets/js/echarts.js', 'public/assets/js')
    mix.js('resources/assets/js/file-upload.js', 'public/assets/js')
    mix.js('resources/assets/js/filupload.js', 'public/assets/js')
    mix.js('resources/assets/js/flot.js', 'public/assets/js')
    mix.js('resources/assets/js/form-editor.js', 'public/assets/js')
    mix.js('resources/assets/js/form-editor2.js', 'public/assets/js')
    mix.js('resources/assets/js/formelementadvnced.js', 'public/assets/js')
    mix.js('resources/assets/js/form-elements.js', 'public/assets/js')
    mix.js('resources/assets/js/form-vallidations.js', 'public/assets/js')
    mix.js('resources/assets/js/form-wizard.js', 'public/assets/js')
    mix.js('resources/assets/js/form-wizard2.js', 'public/assets/js')
    mix.js('resources/assets/js/form-wizard-rtl.js', 'public/assets/js')
    mix.js('resources/assets/js/fullcalendar.js', 'public/assets/js')
    mix.js('resources/assets/js/gallery.js', 'public/assets/js')
    mix.js('resources/assets/js/image-comparision.js', 'public/assets/js')
    mix.js('resources/assets/js/img-crop.js', 'public/assets/js')
    mix.js('resources/assets/js/index1.js', 'public/assets/js')
    mix.js('resources/assets/js/invoice.js', 'public/assets/js')
    mix.js('resources/assets/js/jquery.bootstrap.newsbox.js', 'public/assets/js')
    mix.js('resources/assets/js/jvectormap.js', 'public/assets/js')
    mix.js('resources/assets/js/mapelmaps.js', 'public/assets/js')
    mix.js('resources/assets/js/map-leafleft.js', 'public/assets/js')
    mix.js('resources/assets/js/morris.js', 'public/assets/js')
    mix.js('resources/assets/js/newsticker.js', 'public/assets/js')
    mix.js('resources/assets/js/notifications.js', 'public/assets/js')
    mix.js('resources/assets/js/popover.js', 'public/assets/js')
    mix.js('resources/assets/js/rangeslider.js', 'public/assets/js')
    mix.js('resources/assets/js/rounded-barchart.js', 'public/assets/js')
    mix.js('resources/assets/js/select2.js', 'public/assets/js')
    mix.js('resources/assets/js/session.js', 'public/assets/js')
    mix.js('resources/assets/js/stiky.js', 'public/assets/js')
    mix.js('resources/assets/js/sweet-alert.js', 'public/assets/js')
    mix.js('resources/assets/js/tabs.js', 'public/assets/js')
    mix.js('resources/assets/js/timeline.js', 'public/assets/js')
    mix.js('resources/assets/js/tooltip.js', 'public/assets/js')
    mix.js('resources/assets/js/vertical-scroll.js', 'public/assets/js')
    mix.js('resources/assets/js/widgets.js', 'public/assets/js')
    mix.sass('resources/assets/scss/style.scss', 'public/assets/css')
    mix.sass('resources/assets/css/skin-modes.scss', 'public/assets/css')
    mix.sass('resources/assets/css/sidemenu.scss', 'public/assets/css')
    mix.sass('resources/assets/css/sidemenu-icontext.scss', 'public/assets/css')
    mix.sass('resources/assets/css/dark.scss', 'public/assets/css')
    mix.postCss('resources/assets/css/animated.css', 'public/assets/css')
    mix.sass('resources/assets/colors/color1.scss', 'public/assets/colors')
    mix.copyDirectory('resources/assets/images', 'public/assets/images')
    mix.copyDirectory('resources/assets/plugins', 'public/assets/plugins')
    mix.copyDirectory('resources/assets/iconfonts', 'public/assets/iconfonts')
    
    mix.options({
        processCssUrls: false
    });
   
    mix.browserSync('http://127.0.0.1:8000');
    
   