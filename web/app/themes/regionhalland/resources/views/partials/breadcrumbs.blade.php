@if(!is_front_page())
@php($breadcrumbs = get_region_halland_breadcrumbs())	
@if(isset($breadcrumbs))
	<div class="rh-breadcrum">
		<ul class="rh-breadcrumb-group">
			@foreach ($breadcrumbs as $breadcrumb)
				<li class="rh-breadcrumb-group-item" @if ($loop->last) aria-current="page" @endif itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
					@if ($breadcrumb['url'])
						<a class="rh-breadcrumb-group-link" href="{{ $breadcrumb['url'] }}">{!! $breadcrumb['name'] !!}</a>
					@else
						{!! $breadcrumb['name'] !!}
					@endif
					<meta itemprop="position" content="{{ $loop->iteration }}">
				</li>
			@endforeach
		</ul>
	</div>
@endif
@endif