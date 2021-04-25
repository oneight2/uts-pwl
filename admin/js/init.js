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
    $('#cariProduk').on('keyup', function () {
        $('.ajax').load('app/module/produk/ajax.php?cariProduk=' + $('#cariProduk').val());
    })
    $('#cariArtikel').on('keyup', function () {
        $('.ajax').load('app/module/artikel/ajax.php?cariArtikel=' + $('#cariArtikel').val());
    })   


    

  }); // end of document ready
})(jQuery); // end of jQuery name space
 tinymce.init({
    selector: '#ckeditor',
     height : "480px"
  });