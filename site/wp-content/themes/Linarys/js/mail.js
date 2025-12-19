toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "8000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
  var wpcf7Elm = document.querySelector( '.wpcf7' );
 
  wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
   var inputs=event.detail.apiResponse.invalid_fields;
   var message=event.detail.apiResponse.message;
   for (var i=0;i<inputs.length;i++) {
     toastr.error(inputs[i].idref+': '+inputs[i].message);
   }
   toastr.error(message);
  }, false );
  wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
    console.log( event);
    var message=event.detail.apiResponse.message;
   toastr.success(message);
  }, false );