@php($content_nav = get_region_halland_find_on_page())
@if(isset($content_nav) && count($content_nav) > 0)
@php($id = uniqid())
<nav class="">
	<header class="">
		<span class="">Hitta på sidan</span>
		<hr class="">
	</header>
	<ul class="" itemscope itemtype="http://schema.org/ItemList">
		@foreach ($content_nav as $item)
		<li class="" itemprop="itemListElement">
			<a class="" href="#{{ $item['slug'] }}" data-pointstoid="{{ $item['slug'] }}">{!! $item['content'] !!}</a>
			<meta itemprop="position" content="{{ $loop->iteration }}" />
		</li>
		@endforeach
	</ul>
</nav>
@endif

