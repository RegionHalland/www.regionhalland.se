@if(function_exists('get_region_halland_current_page_and_child_pages'))
	@php($myPages = get_region_halland_current_page_and_child_pages())
	@if(isset($myPages) && !empty($myPages['page_children']))
		<span>{{ $myPages['current_page']->post_title }}</span>
		@if (!empty($myPages['page_children']))
			@foreach ($myPages['page_children'] as $myChilds)
				<a href="{{ $myChilds->url }}">{{ $myChilds->post_title }}</a>
			@endforeach
		@endif
	@endif
@endif