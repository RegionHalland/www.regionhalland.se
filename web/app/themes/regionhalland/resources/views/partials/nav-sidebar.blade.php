@if(function_exists('get_region_halland_current_page_and_child_pages'))
	@php($myPages = get_region_halland_current_page_and_child_pages())
	@if(isset($myPages))
		<ul class="rh-secondary-nav">
			<li class="rh-secondary-nav-item-parentlevel">
				<a class="rh-secondary-nav-link">{{ $myPages['current_page']->post_title }}</a>
			</li>
			@if (!empty($myPages['page_children']))
				@foreach ($myPages['page_children'] as $myChilds)
					<li class="rh-secondary-nav-item-toplevel">
						<a class="rh-secondary-nav-link" href="{{ $myChilds->url }}">{{ $myChilds->post_title }}</a>
					</li>
				@endforeach
			@endif
		</ul>
	@endif
@endif


{{--

<ul class="rh-secondary-nav">

	<li class="rh-secondary-nav-item-parentlevel">
		<a class="rh-secondary-nav-link" href="#">Navigationsalternativ</a>
	</li>

	<li class="rh-secondary-nav-item-toplevel">
		<a class="rh-secondary-nav-link" href="#">Navigationsalternativ</a>
	</li>

	<li class="rh-secondary-nav-item-toplevel-subsides">
		<a class="rh-secondary-nav-link" href="#">Navigationsalternativ</a>
		<span class="rh-secondary-nav-item-icon"></span>
	</li>

	<li class="rh-secondary-nav-item-sublevel">
		<a class="rh-secondary-nav-link" href="#">Navigationsalternativ</a>
	</li>

</ul>

--}}