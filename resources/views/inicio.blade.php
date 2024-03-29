@extends('layouts.sitio')

@section('content')



<div class="lqd-particles-bg-wrap" style="position: absolute; left:15%; top:30%; width: 70%; height: 35%; z-index: 5">
	<div class="ld-particles-container">
		<div
		class="ld-particles-inner"
		id="particles-1559739661542-e9d04c39-a9eb"
		data-particles="true"
		data-particles-options='{"particles":{"number":{"value":12}, "color":{"value":["#f9ad9b", "#079dd8", "#fc9127", "#f39323", "#8ec045"]}, "shape":{"type":["circle"]}, "opacity":{"random":true, "anim":{"enable":true, "opacity_min":0.80000000000000004, "speed":1, "sync":true}}, "size":{"value":6, "random":true, "anim":{"enable":true, "size_min":52}}, "move":{"enable":true, "direction":"none", "speed":1, "random":true, "out_mode":"out"}}, "interactivity":[]}'>
		</div> <!--/.ld-particles-inner -->
	</div>
</div>





<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
  	  

    @foreach($slides as $slide)
	    @php
	    $cont=1;
	    @endphp
	    <div class="carousel-item @if($cont==1) active @endif"  >

	     @if($slide->imagen!="")	
	      <img src="/img/comunidad/{{ $slide->imagen }}" class="d-block w-100" alt="Slider nativo">	
	      @else
	      @php
	      $video=substr_replace($slide->texto, ' class="VideoSlide" ', 8 , 25);
	    @endphp 
	      {!! $video !!}
	    @endif
	      
	    </div>
	    @php
	    	$cont++;
	    @endphp

    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>

<div class="row ">
	<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3 lqd-column" data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
		<div class=" fSize20 col-sm-6">CONOCÉ TODOS LOS CONTENIDOS POR <span class="celeste">EJES TEMÁTICOS</span></div>
		<div class="fontClimate fSize45 col-sm-36"><span class="celeste"># </span>TEMAS</div>
	</div>
</div>


<div
		class="row mt-5 mb-5 text-center"
		data-custom-animations="true"
		data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>
		@php
		$imagenTarjeta = "ejemplo1.png";
		@endphp

		@foreach($ejes as $eje)
			
			<div class="lqd-column wid20 @switch($eje->nombre) 
					@case('Biotecnología')
			        	bgceleste
			        	@php $imagenTarjeta = "biotecnologia2.png"; @endphp
			        @break 
			        @case('Educación')
			        	bgfucsia
			        	@php $imagenTarjeta = "educacion2.png"; @endphp
			        @break 
			        @case('Tecnología e Ingeniería')
			        	bgnaranja
			        	@php $imagenTarjeta = "tecnologia2.png"; @endphp
			        @break 
			        @case('Salud Comunitaria')
			        	bgturquesa
			        	@php $imagenTarjeta = "salud_comunitaria2.png"; @endphp
			        @break  
			         @case('General')
			        	bgazulo
			        	@php $imagenTarjeta = "General.png"; @endphp
			        @break  
		        @endswitch">
		        <a href="/ver_contenidos?id_eje={{ $eje->id }}">
		        <h4 class="titTarjetas mt-4">{{ $eje->nombre }}</h4>
				<div class="row">
					<div class="col pb-3">
						<img width="50" src="/img/viborita.png" />
					</div>
				</div>
				<div class="row">
					<div class="col px-5 py-2">
						<img width="100%" src="/img/{{ $imagenTarjeta }}" width="" />
					</div>
				</div>
				<div class="row">
					<div class="col pb-3">
						<img width="50" src="/img/viborita.png" />
					</div>
				</div>
				<div class="row">
					<div class="col pb-3">
						<a href="/ver_contenidos?id_eje={{ $eje->id }}"  ><div class="btn btn-vermas" data-localscroll="true" data-localscroll-options='{"scrollBelowSection":true}' >Ver Más +</div></a>
					</div>
				</div>
				</a>
			</div><!-- /.lqd-column col-md-4 -->
		
			@endforeach
			

		</div><!-- /.row -->

	

				
			

	<div class="row ">
		<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3 lqd-column" 	data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
			<div class=" fSize20">MIRÁ LAS ÚLTIMAS PRODUCCIONES SUBIDAS</div>
			<div class="fontClimate fSize45"><span class="celeste"># </span>LO ÚLTIMO</div>
		</div>
	</div>
	<div class="container">
		<div class="row pt-4 " data-custom-animations="true"
		data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>
		
			<div class="col-lg-4 offset-lg-2 col-md-8 pt-4 pb-3  ">

				<img class="radius1" src="/img/portada/{{ $contenido->portada }}" width="100%" alt="{{ $contenido->titulo }}" />
			</div>
			<div class="col-lg-5 col-md-8 pt-4 pb-3 colorazul">
				<h3 class="comunidadTit">{{ $contenido->titulo }}</h3>
				<p>{{ $contenido->resumen }}
				</p>
				<a href="/detalle_contenido/{{ $contenido->id }}"><div class="btn-vermas">VER MÁS +</div></a>
			</div>
			
		


		</div>
	</div>
	<div class="row pt-4" >
		<div class="d-flex justify-content-between align-items-center fdoTriang pt-3 pb-3 lqd-column" 	data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
			<div class="fSize20 ">IDEAS, TIPS Y HERRAMIENTAS </div>
			<div class="fontClimate fSize45 colorazul"><span class="celeste"># </span>COMUNIDAD</div>
		</div>
	</div>

	<div class="container" id="NovWeb">
		<div class="row pt-5" data-custom-animations="true"
		data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>
		@php $con=1; @endphp
		@foreach($novedades as $novedad)

			@php 
				$resumen = substr($novedad->texto, 0, 400); 
			@endphp
			@if($con!=1)

			<div class="col-lg-4">
				<div class="radius2 py-2 pl-1 ">
					<div class="row">
						<div class="col">
							<img  src="/img/comunidad/{{ $novedad->imagen }}" width="100%" />
							<p class="titNove">{{ $novedad->titulo }}</p>
							<a href="/detalle_novedad/{{ $novedad->id }}"><div class="btn-vermas">VER MÁS +</div></a>
						</div>
						<div class="col-2">
							
						</div>
					</div>
				</div>
			</div>

			@endif
			@php 
			$con++;
			@endphp
		@endforeach	

		</div>
	</div>

	<div class="container" id="NovMov">
		
		@php $con=1; @endphp
		@foreach($novedades as $novedad)

			@php 
				$resumen = substr($novedad->texto, 0, 400); 
			@endphp
			@if($con!=1)
			<div class="row pt-5" >
			<div class="col">
				<div class="radius2 py-2 pl-1 ">
					<div class="row">
						<div class="col">
							<img  src="/img/comunidad/{{ $novedad->imagen }}" width="100%" />
							<p class="titNove">{{ $novedad->titulo }}</p>
							<a href="/detalle_novedad/{{ $novedad->id }}"><div class="btn-vermas">VER MÁS +</div></a>
						</div>
						<div class="col-2">
							
						</div>
					</div>
				</div>
			</div>
			</div>

			@endif
			@php 
			$con++;
			@endphp
		@endforeach	
		
		
	</div>




	

@endsection



@section('script')

<script>
    $(document).load(function () {
        $("#adornos").fadeIn('8000');
    });
</script>
@endsection

