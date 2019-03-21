@extends('layouts.app')

@section('content')

<main class="center" id="main" style="max-width: 1440px;">
	<div class="left-align px4 pt3 pb2">
		<div class="">
			@php($myItems = get_region_halland_acf_page_kulturkatalog_items())
			<ul class="rh-lists">
				<h4 class="rh-lists-title"> Kulturprogram </h4>
			@foreach($myItems as $item)
				<li class="rh-lists-items">
					<p class="rh-lists-items-left"><a href="{{ $item->url }}" style="color:black; text-decoration: none;">{{ $item->post_title }}</a></p>
					<p class="rh-lists-items-right"><strong>Målgrupp:</strong> {{ $item->malgrupp }}</p>
					<hr class="rh-lists-items-hr">
				</li>
			@endforeach
			</ul>
		</div>
	</div>
</main>

@endsection