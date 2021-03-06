@extends('carrito')
@section('containerC')
  <section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categorias
						</h4>

						<ul class="p-b-54">
              @foreach ($cate as $catego)
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									{{$catego->nombre}}
								</a>
							</li>
              @endforeach
						</ul>

					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!-- Product -->
					<div class="row">
            @foreach ($produ as $producto)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="{{ !empty($producto->Imagen[0]->id_producto) && !empty($producto->Imagen[0]->imgPrincipal) ? asset('imagenes/'.$producto->Imagen[0]->path) : ""}}" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
                        <a href="{{ route('carrito-add', $producto->id)}}" role="button" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Agregar</a>
										</div>
									</div>
								</div>

                <div class="block2-txt p-t-20">
                  <a href="{{ route('detalleProd', $producto->id)}}" class="block2-name dis-block s.text3 p-b-5">
                    {{ substr($producto->descripcion, 0, 60)."..."}}
                  </a>
                  <span class="block2-price m-text6 p-r-5">
                    ${{$producto->precio}}.00
                  </span>
                </div>
							</div>
						</div>
          @endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@push('scriptsC')

  <!--===============================================================================================-->
  	<script type="text/javascript" src="{{ asset('carrito/vendor/select2/select2.min.js')}}"></script>
  	<script type="text/javascript">
  		$(".selection-1").select2({
  			minimumResultsForSearch: 20,
  			dropdownParent: $('#dropDownSelect1')
  		});

  		$(".selection-2").select2({
  			minimumResultsForSearch: 20,
  			dropdownParent: $('#dropDownSelect2')
  		});
  	</script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="{{ asset('carrito/vendor/daterangepicker/moment.min.js')}}"></script>
  	<script type="text/javascript" src="{{ asset('carrito/vendor/daterangepicker/daterangepicker.js')}}"></script>
  <!--===============================================================================================-->
  	<script type="text/javascript" src="{{ asset('carrito/vendor/noui/nouislider.min.js')}}"></script>
  	<script type="text/javascript">
  		/*[ No ui ]
  	    ===========================================================*/
  	    var filterBar = document.getElementById('filter-bar');

  	    noUiSlider.create(filterBar, {
  	        start: [ 50, 200 ],
  	        connect: true,
  	        range: {
  	            'min': 50,
  	            'max': 200
  	        }
  	    });

  	    var skipValues = [
  	    document.getElementById('value-lower'),
  	    document.getElementById('value-upper')
  	    ];

  	    filterBar.noUiSlider.on('update', function( values, handle ) {
  	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
  	    });
  	</script>
  <!--===============================================================================================-->
@endpush
