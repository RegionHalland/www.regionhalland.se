@php($deviceType = get_region_halland_device_type())
<nav class="" aria-label="Huvudmeny">
	{{-- Top bar --}}
	<div class="w-full border-b border-grey-lighter bg-white relative z-50">
		<div class="container mx-auto py-3 px-4">
			<div class="flex flex-wrap items-center justify-between -mx-4">

				{{-- Logo Container --}}
				<a class="" title="Gå till startsida" aria-label="Gå till startsida" href="{{ esc_url( home_url( '/' ) ) }}">
					<img class="block w-40" alt="Region Halland" src="{!! env('WP_HOME') !!}/include/img/navigation_logo.svg')" alt="">
				</a>
				{{-- Logo Container END--}}

				{{-- Right Container --}}
				<div class="flex flex-wrap px-4">
					
					{{-- Utilities --}}
                    <div class="rh-toplinks">
                        <ul class="rh-toplinks-nav">
                            <li class="rh-toplinks-nav-item">
                                <i class="feather icon-alert-triangle rh-toplinks-nav-link-icon"></i>
                                <a class="rh-toplinks-nav-link" href="#">Driftinformation</a>
                            </li>
                            <li class="rh-toplinks-nav-item">
                                <i class="feather icon-headphones rh-toplinks-nav-link-icon"></i>
                                <a class="rh-toplinks-nav-link" href="#">Talande webb</a>
                            </li>
                            <li class="rh-toplinks-nav-item">
                                <i class="feather icon-log-in rh-toplinks-nav-link-icon"></i>
                                <a class="rh-toplinks-nav-link" href="#">E-tjänster</a>
                            </li>
                        </ul>
                    </div>
					{{-- Utilities END --}}


					{{-- Search Field --}}
                    <div class="rh-search-field">
                        <input type="text" class="rh-search-term rh-search-term-larger" placeholder="Placeholder">
                        <button type="submit" class="rh-search-button rh-search-button-larger">
                            Sök
                        </button>
                    </div>
					{{-- Search Field END --}}

					{{-- Mobile Menu Button --}}
					{{--<button type="submit" class="js-site-nav--toggle bg-yellow flex rounded-full ml-2 items-center justify-center block md:hidden pin-r pin-b h-8 w-8 md:h-12 md:w-12">
						<svg class="h-4 w-4 md:h-6 md:w-6" title="Meny">
							<use xlink:href="#menu"/>
						</svg>
					</button>--}}
					{{-- Mobile Menu Button END --}}

				</div>
				{{-- Right Container END --}}
			</div>
		</div>
	</div>
	{{-- Top bar END --}}
	
	{{-- Mobile Menu Drawer --}}
	{{--
    @if($deviceType == "computer")
		<nav class="js-site-nav hidden md:hidden w-full pin-t pin-l bg-white z-40">
			@include('partials.nav-mobile')
		</nav>
	@endif
	--}}
	{{-- Mobile Menu Drawer END --}}

	{{-- Bottom bar --}}
	@php($top_level_pages = get_region_halland_tree_first_level())	
	@if(isset($top_level_pages) && !empty($top_level_pages))
		<nav class="rh-navbar">
			<ul class="rh-navbar-nav">
				@foreach($top_level_pages as $top_level_page)
					<li class="rh-nav-item">
						@if($top_level_page->active === true)
							<a class="rh-nav-link" href="{{ $top_level_page->url }}">{{ $top_level_page->post_title }}
							</a>
						@else
							<a class="rh-nav-link" href="{{ $top_level_page->url }}">{{ $top_level_page->post_title }}</a>
						@endif
					</li>
				@endforeach
			</ul>
		</nav>
	@endif
	
	{{-- Bottom bar END --}}
</nav>