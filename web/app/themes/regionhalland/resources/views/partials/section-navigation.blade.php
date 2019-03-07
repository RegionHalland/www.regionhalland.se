<ul class="flex flex-wrap" aria-labelledby="Länklista">
	@php($page_children = get_region_halland_page_children())
	@foreach($page_children as $index => $page)
		<li class="rh-navigation-card col-12 md-col-6 lg-col-4 mx3">
			<div class="rh-navigation-card-title">
				<a href="{{ $page->url }}" class="rh-navigation-card-title-link">
					{{ $page->post_title }}
				</a>
				<span class="rh-navigation-card-title-icon"></span>
			</div>
			<p class="rh-navigation-card-description">
				@if(has_excerpt($page->ID)) 
					{{ $page->acf_excerpt }}
				@else
					{{ html_entity_decode(wp_trim_words(region_halland_remove_shortcode($page->post_content), 10, '...'))  }}
				@endif
			</p>
		</li>
	@endforeach
</ul>