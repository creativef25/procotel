<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('carrito/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('carrito/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('carrito/vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{ asset('carrito/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('carrito/vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript">
  $(".selection-1").select2({
    minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect1')
  });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('carrito/vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('carrito/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('carrito/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('carrito/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('carrito/vendor/sweetalert/sweetalert.min.js')}}"></script>
<script type="text/javascript">
  $('.block2-btn-addcart').each(function(){
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
    $(this).on('click', function(){
      swal(nameProduct, "is added to cart !", "success");
    });
  });

  $('.block2-btn-addwishlist').each(function(){
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
    $(this).on('click', function(){
      swal(nameProduct, "is added to wishlist !", "success");
    });
  });
</script>

<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('carrito/vendor/parallax100/parallax100.js')}}"></script>
<script type="text/javascript">
      $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="{{ asset('carrito/js/main.js')}}"></script>
@stack('scriptsC')
