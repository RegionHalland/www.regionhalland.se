@if(function_exists('get_region_halland_vg_top_links'))
	@php($top_links = get_region_halland_vg_top_links())
	@if($top_links)
	<div class="sticky pin-t">
		<header class="relative pb-4 block mb-8">
			<span class="border-b-2 border-yellow text-2xl font-bold text-black pb-2 z-20 relative leading-none">Snabblänkar</span>
			<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-yellow-light z-10">
		</header>
		<ol class="list-reset bg-yellow-light relative rounded overflow-hidden" aria-labelledby="Snabblänkar">
			@foreach($top_links as $key => $top_link)
				@if($top_link["external_link_toggle"])
					<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
						<div class="absolute bg-yellow pin-l pin-t h-full w-1"></div>
						<a class="text-black whitespace-no-wrap hover:bg-blue-light focus:bg-blue hover:underline focus:underline focus:underline" href="{{ $top_link["external_link"]["link"] }}">{{ $top_link["external_link"]["link_label"] ? $top_link["external_link"]["link_label"] : $top_link["external_link"]["link"]}}</a>
						<svg class="h-4 w-4 align-middle ml-1">
							<use xlink:href="#external-link"/>
						</svg>
					</li>
				@else
					<li class="px-4 py-4 truncate overflow-hidden relative">
						<div class="absolute bg-yellow pin-l pin-t h-full w-1"></div>
						<a class="text-black whitespace-no-wrap hover:bg-blue-light focus:bg-blue-light hover:underline focus:underline focus:underline" href="{{ get_permalink($top_link["internal_link"]["link"][0]->ID) }}">{{ $top_link["internal_link"]["link_label"] ? $top_link["internal_link"]["link_label"] : $top_link["internal_link"]["link"][0]->post_title }}</a>
					</li>
				@endif
			@endforeach
		</ol>
	</div>
	@endif
@endif