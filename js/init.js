(function($){
  $(function(){

    
    $('.parallax').parallax();
    $('.collapsible').collapsible();
    $('.sidenav').sidenav();
    $('.modal').modal();
    $('select').formSelect();
    $('textarea#alamat').characterCounter();
    $('.materialboxed').materialbox();
    $('.datepicker').datepicker();
    $('.timepicker').timepicker();
    $('.slider').slider();
    $('.fixed-action-btn').floatingActionButton();
    $('.tooltipped').tooltip();
    $(".dropdown-trigger").dropdown();
        

    // ajax
    $('#cari').on('keyup', function () {
        $('.ajax').load('app/module/cari/ajax.php?cari=' + $('#cari').val());
    })
    

  }); // end of document ready
})(jQuery); // end of jQuery name space
