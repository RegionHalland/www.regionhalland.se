	{{--
    HSA KONTAKTKORT
    beroende av plugin regionhaland/rhkontaktkort
  --}}


 @if(function_exists('rh_hsafrontend'))
  	@php( $rh_hak = rh_hsafrontend(get_the_ID()))
		 @if($rh_hak['pub']==1)
			<div class="relative p-3 bg-grey-light">
	           @if(!empty($rh_hak['images']))
							 <img src="{{ $rh_hak['images'] }}" width="200" align="right" />
							 @endif

             <h2>{{ $rh_hak['name'] }}</h2>
             <p>{{ $rh_hak['title'] }}</p>
             <p>{{ $rh_hak['email'] }}</p>
             <p>{{ $rh_hak['phone'] }}</p>
	 		</div>
			@endif
  @endif
