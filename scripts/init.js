(function($){
  $(function(){
    $('.button-collapse').sideNav();
  });
})(jQuery);

$(document).ready(function() {
   $('select').material_select();
 });

 $(document).ready(function(){
   $('.tooltipped').tooltip({delay: 50});
 });

 $('.datepicker').pickadate({
  selectMonths: true,
  selectYears: 80,
  close: 'Ok',
  closeOnSelect: false
});
