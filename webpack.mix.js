let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const vendors = 'resources/assets/vendors/';
const resourcesAssets = 'resources/assets/';
const srcCss = resourcesAssets + 'css/';
const srcJs = resourcesAssets + 'js/';

//destination path configuration
const dest = 'public/assets/';
const destFonts = dest + 'fonts/';
const destCss = dest + 'css/';
const destJs = dest + 'js/';
const destImg = dest + 'img/';
const destImages = dest + 'images/';
const destVendors= dest + 'vendors/';


const paths = {
    'animate': vendors + 'animate.css/',
    'accwizard': vendors + 'acc-wizard/release/',
    'animationChart' : vendors + 'animatechart/',
    'autogrow': vendors + 'autogrow/',
    'backbone' : vendors + 'backbone/',
    'blueimpcanvas' : vendors + 'blueimp-canvas-to-blob/',
    'fileUpload' : vendors + 'blueimp-file-upload/',
    'imgLoad' : vendors + 'blueimp-load-image/',
    'bootstrap': vendors + 'bootstrap/dist/',
    'bootstrapFormBuilder': vendors + 'bootstrap-form-builder/',
    'blueimpgallery' : vendors + 'blueimp-gallery-with-desc/',
    'blueimptmpl' : vendors + 'blueimp-tmpl/',
    'formBuilder': vendors + 'form-builder/js/lib/',
    'wysihtml5': vendors + 'bootstrap3-wysihtml5-bower/dist/',
    'daterangepicker' : vendors + 'bootstrap-daterangepicker/',
    'magnify' : vendors + 'bootstrap-magnify/',
    'markdown' : vendors + 'bootstrap-markdown/',
    'maxlength' : vendors + 'bootstrap-maxlength/src/',
    'multiselect' : vendors + 'bootstrap-multiselect/dist/',
    'progressbar': vendors +'bootstrap-progressbar/',
    'rating' : vendors + 'bootstrap-rating/',
    'switch': vendors + 'bootstrap-switch/dist/',
    'tagsinput' : vendors + 'bootstrap-tagsinput/',
    'typeahead' : vendors + 'typeahead.js/dist/',
    'timepicker' : vendors + 'bootstrap-timepicker/',
    'touchspin': vendors +'bootstrap-touchspin/dist/',
    'jvectormap' : vendors + 'bower-jvectormap/',
    'buttons' : vendors + 'Buttons/',
    'card' : vendors + 'card/',
    'chartjs': vendors +'Chart.js/dist/',
    'ckeditor': vendors +'ckeditor/',
    'clockface': vendors +'clockface.js/',
    'fontawesome': vendors + 'font-awesome/',
    'flotchart': vendors + 'flotchart/',
    'countUp': vendors +'countUp.js/dist/',
    'dataTables': vendors + 'datatables/media',
    'devicon': vendors +'devicon/',
    'dropzone': vendors + 'dropzone/dist/',
    'fortjs': vendors +'fort.js/',
    'fancybox': vendors +'fancybox/',
    'fastclick': vendors +'fastclick/lib/',
    'gmaps': vendors +'gmaps/',
    'gridmanager' : vendors + 'gridmanager.js/',
    'handlebars' : vendors + 'handlebars/',
    'holderjs' : vendors + 'holderjs/',
    'html5sortable' : vendors + 'html.sortable/dist/',
    'intltelinput': vendors +'intl-tel-input/',
    'rangeslider' : vendors + 'ion.rangeslider/',
    'ionicons' : vendors + 'ionicons/',
    'jcrop' : vendors + 'Jcrop/',
    'jquery' : vendors + 'jquery/',
    'inputmask': vendors +'jquery.inputmask/dist/',
    'knob': vendors +'jquery-knob/js/',
    'select2': vendors + 'select2/dist/',
    'datetimepicker': vendors + 'eonasdan-bootstrap-datetimepicker/build/',
    'fullcalendar': vendors + 'fullcalendar/dist/',
    'summernote': vendors + 'summernote/dist/',
    'icheck': vendors + 'iCheck/',
    'jasnyBootstrap': vendors + 'jasny-bootstrap/dist/',
    'toastr': vendors + 'toastr/',
    'bootstrapValidator' : vendors + 'bootstrapvalidator/dist/',
    'select2BootstrapTheme': vendors + 'select2-bootstrap-theme/dist/',
    'c3': vendors + '/c3/',
    'spinner': vendors +'jquery.spinner/dist/',
    'jqueryui' : vendors + 'jquery-ui/',
    'Loader' : vendors + 'Loader/',
    'mixitup' : vendors + 'mixitup/',
    'colorpicker': vendors +'mjolnic-bootstrap-colorpicker/dist/',
    'modal': vendors +'ModalWindowEffects/',
    'moment' : vendors + 'moment/',
    'timezone' : vendors + 'moment-timezone/',
    'nestable' : vendors + 'nestable/',
    'noty' : vendors + 'noty/js/noty/',
    'owlcarousel': vendors +'OwlCarousel/owl-carousel/',
    'pace': vendors +'PACE/',
    'rangy': vendors +'rangy-1.3/',
    'bootstrapSlider': vendors +'seiyria-bootstrap-slider/dist/',
    'trumbowyg': vendors +'trumbowyg/dist/',
    'simplelineicons': vendors +'simple-line-icons/',
    'sortable': vendors +'Sortable/',
    'transitionize': vendors +'transitionize/dist',
    'switchery': vendors +'switchery/dist/',
    'twtrBootstrapWizard': vendors +'twitter-bootstrap-wizard/',
    'underscore' : vendors + 'underscore/',
    'wysihtml5x' : vendors + 'wysihtml5x/dist/',
    'xeditable' : vendors + 'x-editable/dist/',
    'nestablelist' : vendors + 'nestable-list/',
    'sparkline' : vendors + 'sparkline/src/',
    'tinymce': vendors + 'tinymce-dist/',
    'jqueryeasypiechart' : vendors + 'bower-jquery-easyPieChart/dist/',
    'datatables' : vendors + 'datatables.net/',
    'datatablesbs' : vendors + 'datatables.net-bs/',
    'datatablesbutton' : vendors + 'datatables.net-buttons/',
    'datatablesbsbuttons' : vendors + 'datatables.net-buttons-bs/',
    'datatablescolreorder' : vendors + 'datatables.net-colreorder/',
    'datatablescolreorderbs' : vendors + 'datatables.net-colreorder-bs/',
    'datatablesresponsive' : vendors + 'datatables.net-responsive/',
    'datatablesrowreorder' : vendors + 'datatables.net-rowreorder/',
    'datatablesrowreorderbs' : vendors + 'datatables.net-rowreorder-bs/',
    'datatablesscroll' : vendors + 'datatables.net-scroller/',
    'datatablesscrollbs' : vendors + 'datatables.net-scroller-bs/',
    'animatechart' : vendors + 'animatechart/',
    'datepicker' : vendors + 'bootstrap-datepicker/dist/',
    'jqvmap': vendors + 'jqvmap/',
    'flottooltip' : vendors + 'flot.tooltip/js/',
    'jquerymockjax' : vendors + 'jquery-mockjax/dist/',
    'wow' : vendors + 'wow/dist/',
    'raphael' : vendors + 'raphael/',
    'pdfmake' : vendors + 'pdfmake/build/',
    'selectize' : vendors + 'selectize/dist',
    'airDatepicker' : vendors + 'air-datepicker/dist',
    'awesomeBootstrapCheckbox' : vendors + 'awesome-bootstrap-checkbox',
    'starability' : vendors + 'starability',
    'bootstrapStarRating' : vendors + 'bootstrap-star-rating',
    'flatpickrCalendar' : vendors + 'flatpickr-calendar/dist/',
    'pickadate' : vendors + 'pickadate/lib/',
    'sifter' : vendors + 'sifter/',
    'microplugin' : vendors + 'microplugin/src/',
    'sweetalert' : vendors + 'sweetalert/dist/',
    'jstree': vendors + 'jstree/dist/',
    'hover': vendors + 'hover/css/',
    'jeditable': vendors + 'jeditable/js/',
    'd3' : vendors + 'd3/',
    'morrisjs' : vendors + 'morris.js/',
    'd3pie' : vendors + 'd3pie/',
    'treeview': vendors + 'bootstrap-treeview/'
};

//copy frontend skins to public
mix.copy(srcCss + 'frontend/skins', destCss + 'frontend/skins');

//simple-line-icons
mix.copy(paths.simplelineicons + 'css/simple-line-icons.css', destVendors + 'simple-line-icons/css');
mix.copy(paths.simplelineicons + 'fonts', destVendors + 'simple-line-icons/fonts');

//ionicons
mix.copy(paths.ionicons + 'css/ionicons.min.css', destVendors + 'ionicons/css');
mix.copy(paths.ionicons + 'fonts', destVendors + 'ionicons/fonts');

// Copy fonts straight to public
mix.copy(paths.bootstrap + 'fonts', destFonts);
mix.copy(paths.fontawesome + 'fonts', destFonts);
mix.copy(paths.ionicons + 'fonts', destFonts);
mix.copy(resourcesAssets + 'css/fonts.css', destCss);

// Copy images straight to public
mix.copy(paths.jqueryui + 'themes/base/images', destImg);
mix.copy(resourcesAssets + 'img', destImg, false);
mix.copy(resourcesAssets + 'img/authors', destImg + '/authors');
mix.copy(resourcesAssets + 'images', destImages, false);
mix.copy(resourcesAssets + 'images/authors', destImages + '/authors');
mix.copy(resourcesAssets + 'images/cart', destImages + '/cart');
mix.copy(resourcesAssets + 'images/gallery', destImages + '/gallery');


// daterange picker
mix.copy(paths.daterangepicker + 'daterangepicker.js', destVendors + 'daterangepicker/js');
mix.copy(paths.daterangepicker + 'daterangepicker.css',  destVendors + 'daterangepicker/css');

// air-datepicker
mix.copy(paths.airDatepicker + '/css/datepicker.min.css',  destVendors + 'airDatepicker/css');
mix.copy(paths.airDatepicker + '/js/datepicker.min.js', destVendors + 'airDatepicker/js');
mix.copy(paths.airDatepicker + '/js/i18n/datepicker.en.js', destVendors + 'airDatepicker/js');

// pickadate
mix.copy(paths.pickadate + '/themes/default.css',  destVendors + 'pickadate/css');
mix.copy(paths.pickadate + '/themes/default.date.css',  destVendors + 'pickadate/css');
mix.copy(paths.pickadate + '/themes/default.time.css',  destVendors + 'pickadate/css');
mix.copy(paths.pickadate + 'picker.js', destVendors + 'pickadate/js');
mix.copy(paths.pickadate + 'picker.date.js', destVendors + 'pickadate/js');
mix.copy(paths.pickadate + 'picker.time.js', destVendors + 'pickadate/js');

// flatpickr-calendar
mix.copy(paths.flatpickrCalendar + 'flatpickr.min.css',  destVendors + 'flatpickrCalendar/css');
mix.copy(paths.flatpickrCalendar + 'flatpickr.min.js', destVendors + 'flatpickrCalendar/js');
mix.copy( srcJs + 'pages/custom_datepicker.js', destJs + 'pages');

// awesome-bootstrap-checkbox
mix.copy(paths.awesomeBootstrapCheckbox + '/awesome-bootstrap-checkbox.css',  destVendors + 'awesomeBootstrapCheckbox');

// tinymce
mix.copy(paths.tinymce + 'tinymce.min.js',  destVendors + 'tinymce');
mix.copy(paths.tinymce + 'plugins/',  destVendors + 'tinymce/plugins', false);
mix.copy(paths.tinymce + 'themes/',  destVendors + 'tinymce/themes', false);
mix.copy(paths.tinymce + 'skins/',  destVendors + 'tinymce/skins', false);

//bootsdtrap starrating
mix.copy('resources/assets/vendors/bootstrap-star-rating/css/star-rating.min.css', 'public/assets/vendors/bootstrapRating/css' );
mix.copy('resources/assets/vendors/bootstrap-star-rating/js/star-rating.min.js', 'public/assets/vendors/bootstrapRating/js' );

// metis menu
mix.copy( srcJs + 'metisMenu.js', destJs);

//bootstrap-form-builder
mix.copy(paths.bootstrapFormBuilder + 'assets3',  destVendors + 'bootstrap-form-builder', false);

//  gui builder
mix.copy(srcCss + 'pages/custom_gui_builder.css', destCss + 'pages');
mix.copy(srcCss + 'pages/formbuilder.css', destCss + 'pages');
mix.copy(srcCss + 'pages/adv_date_pickers.css', destCss + 'pages');

// form builder
mix.copy(paths.formBuilder + 'beautify-html.js',  destVendors + 'form-builder/js');
mix.copy(paths.formBuilder + 'beautify-css.js',  destVendors + 'form-builder/js');
mix.copy(paths.formBuilder + 'beautify.js',  destVendors + 'form-builder/js');

// backbone
mix.copy(paths.backbone + 'backbone-min.js',  destVendors + 'backbone/js');

// dropzone
mix.copy(paths.dropzone + 'dropzone.css',  destVendors + 'dropzone/css');
mix.copy(paths.dropzone + 'dropzone.js',  destVendors + 'dropzone/js');

//form examples js
mix.copy(srcJs + 'pages/form_examples.js' ,destJs + 'pages');

// jquery file upload
mix.copy(paths.fileUpload + 'css/jquery.fileupload.css',  destVendors + 'blueimp-file-upload/css');
mix.copy(paths.fileUpload + 'css/jquery.fileupload-ui.css',  destVendors + 'blueimp-file-upload/css');
mix.copy(paths.fileUpload + 'css/jquery.fileupload-noscript.css',  destVendors + 'blueimp-file-upload/css');
mix.copy(paths.fileUpload + '/css/jquery.fileupload-ui-noscript.css',  destVendors + 'blueimp-file-upload/css');
mix.copy(paths.fileUpload + 'js/vendor/jquery.ui.widget.js',  destVendors + 'blueimp-file-upload/js');
mix.copy(paths.fileUpload + 'js/jquery.iframe-transport.js',  destVendors + 'blueimp-file-upload/js');
mix.copy(paths.fileUpload + 'js/jquery.fileupload.js',  destVendors + 'blueimp-file-upload/js');
mix.copy(paths.fileUpload + 'js/jquery.fileupload-process.js',  destVendors + 'blueimp-file-upload/js');
mix.copy(paths.fileUpload + 'js/jquery.fileupload-image.js',  destVendors + 'blueimp-file-upload/js');
mix.copy(paths.fileUpload + 'js/jquery.fileupload-audio.js',  destVendors + 'blueimp-file-upload/js');
mix.copy(paths.fileUpload + 'js/jquery.fileupload-video.js',  destVendors + 'blueimp-file-upload/js');
mix.copy(paths.fileUpload + 'js/jquery.fileupload-validate.js',  destVendors + 'blueimp-file-upload/js');
mix.copy(paths.fileUpload + 'js/jquery.fileupload-ui.js',  destVendors + 'blueimp-file-upload/js');
mix.copy(paths.fileUpload + 'img/loading.gif',  destVendors + 'blueimp-file-upload/img');
mix.copy(paths.fileUpload + 'img/loading.gif', dest + 'img');

// blueimp-tmpl
mix.copy(paths.blueimptmpl + 'js/tmpl.min.js',  destVendors + 'blueimp-tmpl/js');

// blueimp-load-image
mix.copy(paths.imgLoad + 'js/load-image.all.min.js',  destVendors + 'blueimploadimage/js');
mix.copy(paths.imgLoad + 'js/load-image.js',  destVendors + 'blueimploadimage/js');



// blueimp-canvas-to-blob
mix.copy(paths.blueimpcanvas + 'js/canvas-to-blob.min.js',  destVendors + 'blueimp-canvas-to-blob/js');

// blueimp-gallery-with-desc
mix.copy(paths.blueimpgallery + 'css/blueimp-gallery.min.css',  destVendors + 'blueimp-gallery-with-desc/css');
mix.copy(paths.blueimpgallery + 'js/jquery.blueimp-gallery.min.js',  destVendors + 'blueimp-gallery-with-desc/js');

mix.copy(paths.blueimpgallery + 'img/',  destVendors + 'blueimp-gallery-with-desc/img', false);

// file upload page
// mix.copy('resources/assets/css/pages/blueimp-gallery.min.css', destCss + 'pages');
mix.copy( srcJs + 'pages/main.js', destJs + 'pages');

//fancybox
mix.copy(paths.fancybox + 'source',  destVendors + 'fancybox');
mix.copy(paths.fancybox + 'lib/jquery.mousewheel.pack.js',  destVendors + 'fancybox');

//grid manager
mix.copy(paths.gridmanager + 'dist/css/jquery.gridmanager.css',  destVendors + 'gridmanager/css');
mix.copy(paths.gridmanager + 'demo/css/demo.css',  destVendors + 'gridmanager/css');
mix.copy(paths.gridmanager + 'dist/js/jquery.gridmanager.js',  destVendors + 'gridmanager/js');

//jasny-bootstrap
mix.copy(paths.jasnyBootstrap + 'css/jasny-bootstrap.css',  destVendors + 'jasny-bootstrap/css');
mix.copy(paths.jasnyBootstrap + 'js/jasny-bootstrap.js',  destVendors + 'jasny-bootstrap/js');

// bootstrap3-wysihtml5-bower
mix.copy(paths.wysihtml5 + 'bootstrap3-wysihtml5.min.css',  destVendors + 'bootstrap3-wysihtml5-bower/css');
mix.copy(paths.wysihtml5 + 'bootstrap3-wysihtml5.all.min.js',  destVendors + 'bootstrap3-wysihtml5-bower/js');
mix.copy(paths.wysihtml5 + 'bootstrap3-wysihtml5.min.js',  destVendors + 'bootstrap3-wysihtml5-bower/js');

// summer note
mix.copy(paths.summernote + 'summernote.css',  destVendors + 'summernote');
mix.copy(paths.summernote + 'summernote.min.js',  destVendors + 'summernote');
mix.copy(paths.summernote + 'font',  destVendors + 'summernote/font');

// ckeditor
mix.copy(paths.ckeditor + 'ckeditor.js', destVendors + 'ckeditor/js');
mix.copy(paths.ckeditor + 'adapters/jquery.js', destVendors + 'ckeditor/js');
mix.copy(paths.ckeditor + 'config.js', destVendors + 'ckeditor/js');
mix.copy(paths.ckeditor + 'skins/moono/', destVendors + 'ckeditor/js/skins/moono', false);
mix.copy(paths.ckeditor + 'plugins/', destVendors + 'ckeditor/js/plugins', false);
mix.copy(paths.ckeditor + 'lang', destVendors + 'ckeditor/js/lang', false);
mix.copy(paths.ckeditor + 'styles.js', destVendors + 'ckeditor/js');
mix.copy(paths.ckeditor + 'contents.css', destVendors + 'ckeditor/js');

// starability
mix.copy(paths.starability + '/starability-css/starability-all.css',  destVendors + 'starability');
mix.copy(paths.starability + '/starability-images',  destVendors + 'starability-images');

// bootstrap-star-rating
mix.copy(paths.bootstrapStarRating + '/css/star-rating.min.css',  destVendors + 'bootstrapStarRating/css');
mix.copy(paths.bootstrapStarRating + '/js/star-rating.min.js',  destVendors + 'bootstrapStarRating/js');
mix.copy(paths.bootstrapStarRating + '/img',  destVendors + 'bootstrapStarRating/img');
mix.copy( srcJs + 'pages/custom_rating.js', destJs + 'pages');
mix.copy( srcCss + 'pages/custom_rating.css', destCss + 'pages');

//autogrow
mix.copy(paths.autogrow + 'js/jQuery-autogrow.min.js',  destVendors + 'autogrow/js');

// trumbowyg
mix.copy(paths.trumbowyg + 'ui/trumbowyg.min.css',  destVendors + 'trumbowyg/css');
mix.copy(paths.trumbowyg + 'plugins/colors/ui/trumbowyg.colors.min.css',  destVendors + 'trumbowyg/css');
mix.copy(paths.trumbowyg + 'trumbowyg.js',  destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'plugins/base64/trumbowyg.base64.min.js',  destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'plugins/colors/trumbowyg.colors.min.js',  destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'plugins/noembed/trumbowyg.noembed.min.js',  destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'plugins/pasteimage/trumbowyg.pasteimage.min.js',  destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'plugins/preformatted/trumbowyg.preformatted.min.js',  destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'plugins/upload/trumbowyg.upload.min.js',  destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'ui/icons.svg',  destVendors + 'trumbowyg/js/ui');

// bootstrapvalidator
mix.copy(paths.bootstrapValidator + 'css/bootstrapValidator.min.css',  destVendors + 'bootstrapvalidator/css');
mix.copy(paths.bootstrapValidator + 'js/bootstrapValidator.min.js',  destVendors + 'bootstrapvalidator/js');

//select2
mix.copy(paths.select2 + 'css/select2.min.css',  destVendors + 'select2/css');
mix.copy(paths.select2 + 'js/select2.js',  destVendors + 'select2/js');
mix.copy(paths.select2BootstrapTheme + 'select2-bootstrap.css',  destVendors + 'select2/css');

//icheck
mix.copy(paths.icheck + 'icheck.js', destVendors + 'iCheck/js');
mix.copy(paths.icheck + 'skins/', destVendors + 'iCheck/css', false);

//hover
mix.copy(paths.hover + 'hover-min.css', destVendors + 'hover/css');

// countUp js
mix.copy(paths.countUp + 'countUp.js',  destVendors + 'countUp_js/js');

// bower-jquery-easyPieChart
mix.copy(paths.jqueryeasypiechart + 'jquery.easypiechart.min.js',  destVendors + 'bower-jquery-easyPieChart/js');
mix.copy(paths.jqueryeasypiechart + 'easypiechart.min.js',  destVendors + 'bower-jquery-easyPieChart/js');
mix.copy( srcJs + 'pages/jquery.easingpie.js',  destVendors + 'bower-jquery-easyPieChart/js');

// moment
mix.copy(paths.moment + 'min/moment.min.js',  destVendors + 'moment/js');

// underscore
mix.copy(paths.underscore + 'underscore-min.js', destVendors + 'underscore/js');

// datepicker
mix.copy( srcJs + 'pages/datepicker.js', destJs + 'pages');

// bootstrap-datetimepicker
mix.copy(paths.datetimepicker + 'css/bootstrap-datetimepicker.min.css',  destVendors + 'datetimepicker/css');
mix.copy(paths.datetimepicker + 'js/bootstrap-datetimepicker.min.js',  destVendors + 'datetimepicker/js');

// clockface
mix.copy(paths.clockface + 'css/clockface.css',  destVendors + 'clockface/css');
mix.copy(paths.clockface + 'js/clockface.js',  destVendors + 'clockface/js');

// Buttons
mix.copy(paths.buttons + 'css/buttons.css',  destVendors + 'Buttons/css');
mix.copy(paths.buttons + 'showcase/js/scrollto.js',  destVendors + 'Buttons/js');
mix.copy(paths.buttons + 'js/buttons.js',  destVendors + 'Buttons/js');

// bootstrap color picker
mix.copy(paths.colorpicker + 'css/bootstrap-colorpicker.min.css',  destVendors + 'colorpicker/css');
mix.copy(paths.colorpicker + 'js/bootstrap-colorpicker.min.js',  destVendors + 'colorpicker/js');
mix.copy(paths.colorpicker + 'img/bootstrap-colorpicker',  destVendors + 'colorpicker/img/bootstrap-colorpicker');

// owl-carousel
mix.copy(paths.owlcarousel + 'owl.carousel.css',  destVendors + 'owl_carousel/css');
mix.copy(paths.owlcarousel + 'owl.theme.css',  destVendors + 'owl_carousel/css');
mix.copy(paths.owlcarousel + 'owl.transitions.css',  destVendors + 'owl_carousel/css');
mix.copy(paths.owlcarousel + 'owl.carousel.min.js',  destVendors + 'owl_carousel/js');

// advanced modals
mix.copy(paths.modal + 'css',  destVendors + 'modal/css');
mix.copy(srcCss + 'pages/advmodals.css',  destCss + 'pages');
mix.copy(paths.modal + 'js/',  destVendors + 'modal/js');

// bootstrap tagsinput
mix.copy(paths.tagsinput + 'dist/bootstrap-tagsinput.css',  destVendors + 'bootstrap-tagsinput/css');
mix.copy(paths.tagsinput + 'examples/assets/app.css',  destVendors + 'bootstrap-tagsinput/css');
mix.copy(paths.tagsinput + 'examples/assets/app_bs3.js',  destVendors + 'bootstrap-tagsinput/js');
mix.copy(paths.tagsinput + 'dist/bootstrap-tagsinput.js',  destVendors + 'bootstrap-tagsinput/js');

//typeahead
mix.copy(paths.typeahead +'bloodhound.min.js', destVendors + 'typeahead/js');
mix.copy(paths.typeahead +'typeahead.bundle.min.js', destVendors + 'typeahead/js');

mix.copy(srcJs + 'tags_data/cities.json', destJs + 'tags_data');
mix.copy(srcJs + 'tags_data/citynames.json', destJs + 'tags_data');
mix.copy(srcJs + 'pages/Categorizing_tags.js', destJs + 'pages');

// sortable list
mix.copy( srcCss + 'pages/sortable_list.css', destCss + 'pages');
mix.copy(paths.sortable + 'Sortable.js',  destVendors + 'Sortable/js');
mix.copy( srcJs + 'pages/sortable_list.js', destJs + 'pages');

// toastr
mix.copy(paths.toastr + 'toastr.css',  destVendors + 'toastr/css');
mix.copy(paths.toastr + 'toastr.min.js',  destVendors + 'toastr/js');
mix.copy( srcJs + 'pages/ui-toastr.js',  destVendors + 'toastr/js/pages');

// noty
mix.copy(paths.noty + 'packaged/jquery.noty.packaged.min.js',  destVendors + 'noty/js');

// bootstrap progressbar
mix.copy(paths.progressbar + 'css/bootstrap-progressbar-3.3.4.css',  destVendors + 'bootstrap-progressbar/css');
mix.copy(paths.progressbar + 'bootstrap-progressbar.js',  destVendors + 'bootstrap-progressbar/js');

// bootstrap touchspin
mix.copy(paths.touchspin + 'jquery.bootstrap-touchspin.css',  destVendors + 'bootstrap-touchspin/css');
mix.copy(paths.touchspin + 'jquery.bootstrap-touchspin.js',  destVendors + 'bootstrap-touchspin/js');

// bootstrap multiselect
mix.copy(paths.multiselect + 'css/bootstrap-multiselect.css',  destVendors + 'bootstrap-multiselect/css');
mix.copy(paths.multiselect + 'js/bootstrap-multiselect.js',  destVendors + 'bootstrap-multiselect/js');

// bootstrap switch
mix.copy(paths.switch + 'css/bootstrap3/bootstrap-switch.css',  destVendors + 'bootstrap-switch/css');
mix.copy(paths.switch + 'js/bootstrap-switch.js',  destVendors + 'bootstrap-switch/js');

// font-awesome
mix.copy(paths.fontawesome + 'css/font-awesome.min.css', 'public/assets/css');

// jquery-spinner
mix.copy(paths.spinner + 'css/bootstrap-spinner.css',  destVendors + 'jquery-spinner/css');
mix.copy(paths.spinner + 'js/jquery.spinner.min.js',  destVendors + 'jquery-spinner/js');

// bootstrap-timepicker
mix.copy(paths.timepicker + 'css/timepicker.less',  destVendors + 'bootstrap-timepicker/css');
mix.copy(paths.timepicker + 'js/bootstrap-timepicker.js',  destVendors + 'bootstrap-timepicker/js');

// animate
mix.copy(paths.animate + 'animate.min.css',  destVendors + 'animate');

// ion.rangeslider
mix.copy(paths.rangeslider + 'css/ion.rangeSlider.skinFlat.css',  destVendors + 'ion_rangeslider/css');
mix.copy(paths.rangeslider + 'css/ion.rangeSlider.css',  destVendors + 'ion_rangeslider/css');
mix.copy(paths.rangeslider + 'js/ion.rangeSlider.js',  destVendors + 'ion_rangeslider/js');
mix.copy(paths.rangeslider + 'img/sprite-skin-flat.png',  destVendors + 'ion_rangeslider/img');

// seiyria-bootstrap-slider
mix.copy(paths.bootstrapSlider + 'css/bootstrap-slider.min.css',  destVendors + 'bootstrap-slider/css');
mix.copy(paths.bootstrapSlider + 'bootstrap-slider.js',  destVendors + 'bootstrap-slider/js');

// knob
mix.copy(paths.knob + 'jquery.knob.js',  destVendors + 'jquery-knob/js');

// datatables
mix.copy(paths.datatables + 'js/jquery.dataTables.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesbs + 'js/dataTables.bootstrap.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesbs + 'css/dataTables.bootstrap.css',  destVendors + 'datatables/css');
mix.copy(paths.datatablesbutton + 'js/buttons.print.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/dataTables.buttons.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesbsbuttons + 'css/buttons.bootstrap.css',  destVendors + 'datatables/css');
mix.copy(paths.datatablesbsbuttons + 'js/buttons.bootstrap.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablescolreorder + 'js/dataTables.colReorder.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablescolreorderbs + 'css/colReorder.bootstrap.css',  destVendors + 'datatables/css');
mix.copy(paths.datatablesresponsive + 'js/dataTables.responsive.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesrowreorder + 'js/dataTables.rowReorder.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.html5.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.colVis.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.print.min.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesrowreorderbs + 'css/rowReorder.bootstrap.css',  destVendors + 'datatables/css');
mix.copy(paths.datatablesscroll + 'js/dataTables.scroller.js',  destVendors + 'datatables/js');
mix.copy(paths.datatablesscrollbs + 'css/scroller.bootstrap.css',  destVendors + 'datatables/css');
mix.copy(paths.pdfmake + 'pdfmake.js',  destVendors + 'datatables/js');
mix.copy(paths.pdfmake + 'vfs_fonts.js',  destVendors + 'datatables/js');
mix.copy(paths.jeditable + 'jquery.jeditable.js', destVendors + 'jeditable/js');

//datatables page
mix.copy( srcJs + 'pages/table-advanced.js', destJs + 'pages');
mix.copy( srcCss + 'pages/tables.css', destCss + 'pages');
mix.copy( srcJs + 'pages/table-advanced2.js', destJs + 'pages');
mix.copy( srcJs + 'pages/table-editable.js', destJs + 'pages');
mix.copy( srcJs + 'pages/data.txt', destJs + 'pages');
mix.copy( srcJs + 'pages/table-responsive.js', destJs + 'pages');

// flot charts
mix.copy(paths.flotchart + 'jquery.flot.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.stack.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.crosshair.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.time.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.selection.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.symbol.js' , destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.resize.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.categories.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.pie.js', destVendors + 'flotchart/js');
mix.copy(paths.flottooltip + 'jquery.flot.tooltip.js',  destVendors + 'flot_tooltip/js');
mix.copy( srcCss + 'pages/flot.css', destCss + 'pages');
mix.copy( srcJs + 'pages/customcharts.js', destJs + 'pages');

//animationchart page
mix.copy(paths.animatechart + 'jquery.flot.animator.js',  destVendors + 'animatechart');

// Chart.js
mix.copy(paths.chartjs + 'Chart.js', destVendors + 'Chartjs/js');

// fullcalendar
mix.copy(paths.fullcalendar + 'fullcalendar.css', destVendors + 'fullcalendar/css');
mix.copy(paths.fullcalendar + 'fullcalendar.print.css', destVendors + 'fullcalendar/css');
mix.copy(paths.fullcalendar + 'fullcalendar.min.js', destVendors + 'fullcalendar/js');

// bootstrap-datepicker
mix.copy(paths.datepicker + 'js/bootstrap-datepicker.js', destVendors + 'bootstrap-datepicker/js');
mix.copy(paths.datepicker + 'css/bootstrap-datepicker.css', destVendors + 'bootstrap-datepicker/css');

// bootstrap treeview
mix.copy(paths.treeview + 'dist/bootstrap-treeview.min.css', destVendors + 'treeview/css');
mix.copy(paths.treeview + 'dist/bootstrap-treeview.min.js', destVendors + 'treeview/js');
mix.copy(paths.treeview + 'public/css/bootstrap-treeview.css', destVendors + 'treeview/css');

// jstree
mix.copy(paths.jstree + 'themes/default/', destVendors + 'jstree/css');
mix.copy(paths.jstree + 'jstree.min.js', destVendors + 'jstree/js');
mix.copy(srcJs + 'pages/treeview_jstree.js', destJs + 'pages');
mix.copy(srcCss + 'pages/treeview_jstree.css', destCss + 'pages');

// Sweet Alert
mix.copy(paths.sweetalert + 'sweetalert.css', destVendors + 'sweetalert/css');
mix.copy(paths.sweetalert + 'sweetalert.min.js', destVendors + 'sweetalert/js');
mix.copy(paths.sweetalert + 'sweetalert-dev.js', destVendors + 'sweetalert/js');
mix.copy(srcJs + 'pages/custom_sweetalert.js', destJs + 'pages');

// gmaps
mix.copy(paths.gmaps + 'examples/examples.css', destVendors + 'gmaps/css');
mix.copy(paths.gmaps + 'gmaps.min.js', destVendors + 'gmaps/js');
mix.copy( srcJs + 'pages/maps_api.js',destJs + 'pages');
mix.copy( srcJs + 'pages/custommaps.js',destJs + 'pages');
mix.copy( srcJs + 'pages/adv_maps.js',destJs + 'pages');

//  bower-jvectormap
mix.copy(paths.jvectormap + 'jquery-jvectormap-1.2.2.css',  destVendors + 'bower-jvectormap/css');
mix.copy(paths.jvectormap + 'jquery-jvectormap-1.2.2.min.js',  destVendors + 'bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js');
mix.copy(paths.jvectormap + 'jquery-jvectormap-world-mill-en.js',  destVendors + 'bower-jvectormap/js/jquery-jvectormap-world-mill-en.js');

//jvector map
mix.copy( srcCss + 'pages/jqvmap.css', destCss + 'pages');
mix.copy(paths.jqvmap + 'dist/jquery.vmap.js',  destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.world.js',  destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.usa.js',  destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.europe.js',  destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.germany.js',  destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.russia.js',  destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'examples/js/jquery.vmap.sampledata.js',  destVendors + 'jqvmap/js');

//fort.js
mix.copy(paths.fortjs + 'fort.css',  destVendors + 'fort_js/css');
mix.copy(paths.fortjs + 'fort.js',  destVendors + 'fort_js/js');

//c3 charts
mix.copy(paths.c3 + 'c3.min.css', destVendors + 'c3' );
mix.copy(paths.c3 + 'c3.min.js', destVendors + 'c3' );
mix.copy(paths.d3 + 'd3.min.js', destVendors + 'd3' );
mix.copy(paths.d3pie + 'd3pie/d3pie.min.js', destVendors + 'd3pie' );
mix.copy(paths.morrisjs + 'morris.css', destVendors + 'morrisjs' );
mix.copy(paths.morrisjs + 'morris.min.js', destVendors + 'morrisjs' );

// Jcrop
mix.copy(paths.jcrop + 'css/jquery.Jcrop.css',  destVendors + 'Jcrop/css');
mix.copy(paths.jcrop + 'css/Jcrop.gif',  destVendors + 'Jcrop/css');
mix.copy( srcCss + 'pages/cropcustom.css', destCss + 'pages');
mix.copy(paths.jcrop + 'js/jquery.Jcrop.min.js',  destVendors + 'Jcrop/js');
mix.copy(paths.jcrop + 'js/jquery.color.js',  destVendors + 'Jcrop/js');
mix.copy( srcJs + 'pages/cropcustom.js', destJs + 'pages');

//jquery input-mask
mix.copy(paths.inputmask ,  destVendors + 'inputmask');

// bootstrap-maxlength
mix.copy(paths.maxlength + 'bootstrap-maxlength.js',  destVendors + 'bootstrap-maxlength/js');

// invoice page
mix.copy( srcCss + 'pages/invoice.css', destCss + 'pages');
mix.copy( srcJs + 'pages/invoice.js', destJs + 'pages');

// 404 page
mix.copy( srcCss + 'pages/404.css', destCss + 'pages');
mix.copy( srcJs + '404.js', destJs);

// 500 page
mix.copy( srcCss + 'pages/500.css', destCss + 'pages');

// login 2 page
mix.copy( srcJs + 'TweenLite.min.js', destJs);
mix.copy( srcJs + 'pages/login.js', destJs + 'pages');
mix.copy( srcJs + 'pages/login2.js', destJs + 'pages');
mix.copy( srcCss + 'pages/login2.css', destCss + 'pages');
mix.copy(srcJs + 'pages/register2.js', destJs + 'pages');

// news page
mix.copy( srcCss + 'pages/news.css', destCss + 'pages');

// news item page
mix.copy( srcCss + 'pages/blog.css', destCss + 'pages');

// tasks page
mix.copy( srcCss + 'pages/todolist.css', destCss + 'pages');
mix.copy( srcCss + 'only_dashboard.css', destCss + 'pages');
mix.copy( srcJs + 'tasklist.js', destJs + 'pages');

// indexpage
mix.copy( srcJs + 'dashboard.js', destJs + 'pages');
mix.copy( srcJs + 'todolist.js', destJs + 'pages');

//compose page
mix.copy( srcJs + 'pages/add_newblog.js', destJs + 'pages');

// inbox page
mix.copy( srcCss + 'pages/alertmessage.css', destCss + 'pages');
mix.copy( srcCss + 'pages/mail_box.css', destCss + 'pages');
mix.copy(srcJs + 'pages/mail_box.js', destJs + 'pages');

// gallery page
mix.copy( srcCss + 'pages/animated-masonry-gallery.css', destCss + 'pages');
mix.copy( srcJs + 'pages/gallery.js', destJs + 'pages');
mix.copy( srcJs + 'pages/jquery.isotope.min.js', destJs + 'pages');
mix.copy( srcJs + 'pages/animated-masonry-gallery.js', destJs + 'pages');

//imgmagnify
mix.copy(paths.magnify + 'css/bootstrap-magnify.css',  destVendors + 'bootstrap-magnify');
mix.copy(paths.magnify + 'js/bootstrap-magnify.js',  destVendors + 'bootstrap-magnify');

// calendar page
mix.copy( srcCss + 'pages/calendar_custom.css', destCss + 'pages');
mix.copy( srcJs + 'pages/calendar.js', destJs + 'pages');

// pie chart page
mix.copy( srcCss + 'pages/piecharts.css', destCss + 'pages');
mix.copy( srcJs + 'pages/custompiecharts.js', destJs + 'pages');

//animation charts page
mix.copy( srcCss + 'pages/charts.css', destCss + 'pages');
mix.copy( srcCss + 'jquery.circliful.css',  destVendors + 'animationcharts');
mix.copy( srcJs + 'jquery.circliful.min.js',  destVendors + 'animationcharts');
mix.copy( srcJs + 'pages/animation-chart.js', destJs + 'pages');

// js charts page
mix.copy( srcCss + 'pages/jscharts.css', destCss + 'pages');
mix.copy( srcJs + 'pages/chartjs.js', destJs + 'pages');

// sparkline charts page
mix.copy( srcCss + 'pages/sparklinecharts.css', destCss + 'pages');
mix.copy( srcJs + 'pages/sparkline.js', destJs + 'pages');
mix.copy( srcJs + 'jquery.sparkline.js',  destVendors + 'sparklinecharts');
mix.copy( srcJs + 'jquery.flot.spline.js',  destVendors + 'splinecharts');

// editable datatables pages
mix.copy( srcCss + 'pages/tables.css', destCss + 'pages');
mix.copy( srcJs + 'pages/table-editable.js', destJs + 'pages');
mix.copy( srcJs + 'pages/table-responsive.js', destJs + 'pages');

// circle sliders (knob) page
mix.copy( srcJs + 'pages/knob_page.js', destJs + 'pages');

// slider page
mix.copy( srcCss + 'pages/ion.css', destCss + 'pages');
mix.copy( srcJs + 'pages/sliders.js', destJs + 'pages');

// transition page
mix.copy( srcCss + 'pages/transitions.css', destCss + 'pages');
mix.copy( srcJs + 'pages/transitions.js', destJs + 'pages');

// pickers page
mix.copy( srcJs + 'pages/pickers.js', destJs + 'pages');

// portlet draggable page
mix.copy( srcCss + 'pages/portlet.css', destCss + 'pages');

// general components page
mix.copy( srcCss + 'pages/alertmessage.css', destCss + 'pages');
mix.copy( srcJs + 'pages/general.js', destJs + 'pages');

// session timeout page
mix.copy( srcCss + 'pages/session_timeout.css', destCss + 'pages');
mix.copy( srcJs + 'jquery.sessionTimeout.min.js', destJs + 'pages');

// notifications page
mix.copy( srcCss + 'pages/fluid.css', destCss + 'pages');
mix.copy( srcCss + 'pages/toastr.css', destCss + 'pages');
mix.copy( srcJs + 'pages/noty_script.js', destJs + 'pages');

// timeline
mix.copy( srcCss + 'pages/timeline.css', destCss + 'pages');
mix.copy( srcCss + 'pages/timeline2.css', destCss + 'pages');

// tagsinputs page
mix.copy( srcCss + 'pages/tagsinput.css', destCss + 'pages');

//toastr page
mix.copy( srcCss + 'pages/toastr.css', destCss + 'pages');

// userprofile page
mix.copy( srcCss + 'pages/user_profile.css', destCss + 'pages');
mix.copy( srcJs + 'pages/user_profile.js', destJs + 'pages');

//adduser page
mix.copy( srcJs + 'pages/adduser.js', destJs + 'pages');
mix.copy( srcJs + 'pages/edituser.js', destJs + 'pages');

// carousel page
mix.copy( srcCss + 'pages/carousel.css', destCss + 'pages');
mix.copy( srcJs + 'carousel.js', destJs + 'pages');

// color-picker page
mix.copy( srcJs + 'pages/color-picker.js', destJs + 'pages');

// x-editable
mix.copy(paths.xeditable + 'bootstrap3-editable/css/bootstrap-editable.css',  destVendors + 'x-editable/css');
mix.copy(paths.xeditable + 'bootstrap3-editable/js/bootstrap-editable.js',  destVendors + 'x-editable/js');
mix.copy(paths.xeditable + 'bootstrap3-editable/img',  destVendors + 'x-editable/img');

mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/lib/typeahead.js',  destVendors + 'x-editable/js');
mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css',  destVendors + 'x-editable/css');
mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/typeaheadjs.js',  destVendors + 'x-editable/js');
mix.copy(paths.xeditable + 'inputs-ext/address/address.js',  destVendors + 'x-editable/js');

// x-editable page
mix.copy( srcCss + 'x-select.css',  destVendors + 'x-editable/css');
mix.copy( srcCss + 'x-selectbootstrap.css',  destVendors + 'x-editable/css');
mix.copy( srcCss + 'pages/inlinedit.css', destCss + 'pages');
mix.copy( srcJs + 'demo.js', destJs + 'pages');
mix.copy( srcJs + 'demo-mock.js', destJs + 'pages');

// jquery-mockjax
mix.copy(paths.jquerymockjax + 'jquery.mockjax.js',  destVendors + 'jquery-mockjax/js');

// tabs_accordions page
mix.copy( srcCss + 'pages/tab.css', destCss + 'pages');
mix.copy( srcJs + 'pages/tabs_accordions.js', destJs + 'pages');

// adv buttons page
mix.copy( srcCss + 'pages/advbuttons.css', destCss + 'pages');

// buttons page
mix.copy( srcCss + 'pages/buttons.css', destCss + 'pages');
mix.copy(srcJs + 'pages/custom_buttons.js', destJs + 'pages');

//animated icons and font icons page
mix.copy( srcCss + 'pages/icon.css', destCss + 'pages');

// login page
mix.copy(paths.bootstrap + 'css/bootstrap.min.css',  destCss);
mix.copy( srcCss + 'pages/login.css', destCss + 'pages');

// form layouts
mix.copy( srcCss + 'pages/form_layouts.css', destCss + 'pages');
mix.copy(srcJs + 'pages/form_layouts.js', destJs + 'pages');

//google maps
mix.copy( srcCss + 'pages/googlemaps_custom.css', destCss + 'pages');

//advanced maps
mix.copy( srcCss + 'pages/advancedmaps_custom.css', destCss + 'pages');

// form elements page
mix.copy( srcCss + 'pages/formelements.css', destCss + 'pages');
mix.copy( srcJs + 'pages/formelements.js', destJs + 'pages');
mix.copy( srcJs + 'pages/autogrow.js', destJs + 'pages');
mix.copy(paths.card + 'lib/js/',  destVendors + 'card/lib/js');
mix.copy(paths.card + 'src',  destVendors + 'card');

// form validation page
mix.copy( srcCss + 'pages/form2.css', destCss + 'pages');
mix.copy( srcCss + 'pages/form3.css', destCss + 'pages');
mix.copy( srcJs + 'pages/validation.js', destJs + 'pages');
mix.copy(paths.intltelinput +'build' ,  destVendors + 'intl-tel-input/');
mix.copy(paths.intltelinput +'lib/libphonenumber/build/',  destVendors + 'intl-tel-input/lib/libphonenumber/build/');

// form editor page
mix.copy( srcCss + 'pages/editor.css', destCss + 'pages');
mix.copy( srcJs + 'pages/editor.js', destJs + 'pages');

// form editor2 page
mix.copy( srcJs + 'pages/editor2.js', destJs + 'pages');

// image magnifier page css
mix.copy( srcCss + 'pages/image_magnifier.css', destCss + 'pages');

// form builder2 page
mix.copy( srcCss + 'pages/formbuilder1.css', destCss + 'pages');
mix.copy( srcJs + 'pages/form_builder2.js', destJs + 'pages');

//button builder page
mix.copy( srcCss + 'pages/buttonbuilder2.css', destCss + 'pages');
mix.copy( srcJs + 'pages/buttonbuilder.js', destJs + 'pages');
mix.copy( srcJs + 'pages/scripts.min.js', destJs + 'pages');

// page builder
mix.copy( srcCss + 'pages/grid_manager.css', destCss + 'pages');
mix.copy( srcJs + 'pages/grid_manager.js', destJs + 'pages');

//nestable list page
mix.copy( srcCss + 'pages/sortable.css', destCss + 'pages');
mix.copy(paths.html5sortable + 'html.sortable.js',  destVendors + 'html5sortable/html.sortable.js');
mix.copy(paths.nestablelist + 'jquery.nestable.js',  destVendors + 'nestable-list/jquery.nestable.js');
mix.copy( srcJs + 'pages/ui-nestable.js', destJs + 'pages');

//sifter
mix.copy(paths.sifter + 'sifter.js', destVendors + 'sifter/sifter.js');

//micrplugin
mix.copy(paths.microplugin + 'microplugin.js', destVendors + 'microplugin/microplugin.js');

//form wizard page
mix.copy( srcCss + 'pages/wizard.css', destCss + 'pages');
mix.copy( srcJs + 'pages/form_wizard.js', destJs + 'pages');
mix.copy(paths.twtrBootstrapWizard + 'jquery.bootstrap.wizard.js',  destVendors + 'bootstrapwizard');
mix.copy( srcJs + 'pages/form_wizard.js', destJs + 'pages');

//accordianform wizard page
mix.copy( srcCss + 'pages/accordionformwizard.css', destCss + 'pages');
mix.copy( srcJs + 'pages/accordionformwizard.js', destJs + 'pages');
mix.copy(paths.accwizard + 'acc-wizard.min.css',  destVendors + 'acc-wizard');
mix.copy(paths.accwizard + 'acc-wizard.min.js',  destVendors + 'acc-wizard');

// selectize
mix.copy(paths.selectize + '/css/selectize.css',  destVendors + 'selectize/css');
mix.copy(paths.selectize + '/css/selectize.bootstrap3.css',  destVendors + 'selectize/css');
mix.copy(paths.selectize + '/js/selectize.js',  destVendors + 'selectize/js');
mix.copy(paths.selectize + '/js/selectize.min.js',  destVendors + 'selectize/js');
mix.copy(srcJs + 'pages/custom_elements.js', destJs + 'pages');
mix.copy(srcJs + 'pages/radio_checkbox.js', destJs + 'pages');

// lockscreen builder
mix.copy( srcCss + 'pages/lockscreen.css', destCss + 'pages');
mix.copy( srcJs + 'lockscreen.js', destJs + 'pages');

//  default layout page
mix.copy( srcJs + 'jquery-1.11.1.min.js', destJs);
mix.copy( srcJs + 'bootstrap.min.js', destJs);
mix.copy( srcJs + 'livicons-1.4.min.js', destJs);
mix.copy( srcJs + 'josh.js', destJs);
mix.copy(paths.jqueryui + 'jquery-ui.min.js', destJs);
mix.copy(paths.raphael + 'raphael-min.js', destJs);
mix.copy(paths.holderjs + 'holder.js', destJs);
mix.copy(paths.holderjs + 'holder.min.js', destJs);

// frontend pages

// default layout
mix.copy( srcCss + 'frontend/custom.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/josh_frontend.js', destJs + 'frontend');
mix.copy( srcJs + 'frontend/style-switcher.js', destJs + 'frontend');

// index page
mix.copy( srcCss + 'frontend/tabbular.css', destCss + 'frontend');
mix.copy( srcCss + 'frontend/jquery.circliful.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/carousel.js', destJs + 'frontend');
mix.copy( srcJs + 'frontend/index.js', destJs + 'frontend');
mix.copy( srcJs + 'frontend/jquery.circliful.js', destJs + 'frontend');

// typography
mix.copy( srcCss + 'frontend/features.css', destCss + 'frontend');

// advanced features
mix.copy( srcCss + 'frontend/panel.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/advfeatures.js', destJs + 'frontend');
mix.copy( srcCss + 'frontend/timeline.css', destCss + 'frontend');

// switchery
mix.copy(paths.switchery + 'switchery.css',  destVendors + 'switchery/css');
mix.copy(paths.switchery + 'switchery.js',  destVendors + 'switchery/js');

// devicon
mix.copy(paths.devicon + 'devicon.min.css',  destVendors + 'devicon');
mix.copy(paths.devicon + 'fonts',  destVendors + 'devicon/fonts');
mix.copy(paths.devicon + 'devicon-colors.css',  destVendors + 'devicon');

//pages section
// about us
mix.copy( srcCss + 'frontend/aboutus.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/aboutus.js', destJs + 'frontend');

//timeline
mix.copy( srcCss + 'frontend/timeline1.css', destCss + 'frontend');

//price
mix.copy( srcCss + 'frontend/price.css', destCss + 'frontend');

//404
mix.copy( srcCss + 'frontend/404.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/404.js', destJs + 'frontend');

//500
mix.copy( srcCss + 'frontend/500.css', destCss + 'frontend');

//frontend forgotpwd js
mix.copy( srcJs + 'frontend/forgotpwd_custom.js', destJs + 'frontend');

//frontned login js
mix.copy( srcJs + 'frontend/login_custom.js', destJs + 'frontend');

//frontned register js
mix.copy( srcJs + 'frontend/register_custom.js', destJs + 'frontend');

//faq
mix.copy( srcCss + 'frontend/faq.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/faq.js', destJs + 'frontend');
mix.copy(paths.mixitup + 'src/jquery.mixitup.js',  destVendors + 'mixitup');

// register
mix.copy( srcCss + 'frontend/register.css', destCss + 'frontend');
mix.copy( srcJs + 'jquery.min.js', destJs);

// login
mix.copy( srcCss + 'frontend/login.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/jquery.min.js', destJs + 'frontend');
mix.copy( srcJs + 'frontend/bootstrap.min.js', destJs + 'frontend');

// forgot
mix.copy( srcCss + 'frontend/forgot.css', destCss + 'frontend');

//shoping section
//products page
mix.copy( srcCss + 'frontend/shopping.css', destCss + 'frontend');

//single_product
mix.copy(paths.rating + 'bootstrap-rating.js',  destVendors + 'bootstrap-rating');
mix.copy(paths.rating + 'bootstrap-rating.css',  destVendors + 'bootstrap-rating');
mix.copy( srcCss + 'frontend/cart.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/cart.js', destJs + 'frontend');
mix.copy( srcJs + 'frontend/elevatezoom.js', destJs + 'frontend');

mix.copy( srcCss + 'pages/pickers.css', destCss + 'pages');

//portfolio section
//portfolio
mix.copy( srcCss + 'frontend/portfolio.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/portfolio.js', destJs + 'frontend');
mix.copy( srcJs + 'frontend/elevatezoom.js', destJs + 'frontend');

//portfolioitem
mix.copy( srcCss + 'frontend/portfolio.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/carousel.js', destJs + 'frontend');

//news section
mix.copy( srcCss + 'frontend/news.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/carousel.js', destJs + 'frontend');

//newsitem
mix.copy( srcCss + 'frontend/blog.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/carousel.js', destJs + 'frontend');

//contact page
mix.copy( srcCss + 'frontend/contact.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/gmap.js', destJs + 'frontend');

//user account
mix.copy( srcCss + 'frontend/user_account.css', destCss + 'frontend');
mix.copy( srcJs + 'frontend/user_account.js', destJs + 'frontend');

//jtable json data
mix.copy(resourcesAssets + 'jtable_data/jtable.json' ,dest + 'jtable_data/' );
mix.copy(resourcesAssets + 'jtable_data/create.json' ,dest + 'jtable_data/' );
mix.copy(resourcesAssets + 'jtable_data/delete.json', dest + 'jtable_data/');
mix.copy(resourcesAssets + 'jtable_data/update.json', dest + 'jtable_data/');
mix.copy(resourcesAssets + 'jtable_data/cityOptions.json' ,dest + 'jtable_data/' );

// Custom Styles
// wow
mix.copy(paths.wow + 'wow.min.js',  destVendors + 'wow/js');
// Custom Styles

//products page
mix.copy( srcCss + 'pages/log_viewer.css', destCss + 'pages');

//css section
// Custom Styles
//black color scheme
mix.combine(
    [
        srcCss + 'fonts.css',
        srcCss + 'bootstrap.min.css',
        srcCss + 'font-awesome.min.css',
        srcCss + 'black.css',
        srcCss + 'panel.css',
        srcCss + 'metisMenu.css'
    ], destCss + 'app.css');

//white color scheme
mix.combine(
    [
        /*replace "black.css" with "white.css" to apply white theme for template*/
        srcCss + 'fonts.css',
        srcCss + 'bootstrap.min.css',
        srcCss + 'font-awesome.min.css',
        srcCss + 'styles/white.css',
        srcCss + 'panel.css',
        srcCss + 'metisMenu.css'
    ], destCss + 'app_white.css');

/*frontend css mix*/
/*default skin*/
mix.combine(
    [
        srcCss + 'fonts.css',
        srcCss +  'bootstrap.min.css',
        srcCss +  'font-awesome.min.css',
        srcCss +  'frontend/custom.css'
    ], destCss + 'lib.css');

// all global js files into app.js
mix.combine(
    [
        srcJs + 'jquery-1.11.1.min.js',
        vendors + 'jquery-ui/jquery-ui.min.js',
        srcJs + 'bootstrap.min.js',
        vendors + 'raphael/raphael-min.js',
        srcJs + 'livicons-1.4.min.js',
        srcJs + 'metisMenu.js',
        srcJs + 'josh.js',
        vendors+ 'holderjs/holder.min.js'
    ], destJs + 'app.js');

/*frontend js mix*/

mix.combine(
    [
        srcJs + 'jquery-1.11.1.min.js',
        srcJs + 'bootstrap.min.js',
        vendors + 'raphael/raphael-min.js',
        srcJs + 'livicons-1.4.min.js',
        srcJs + 'frontend/josh_frontend.js'
    ], destJs + 'frontend/lib.js');

