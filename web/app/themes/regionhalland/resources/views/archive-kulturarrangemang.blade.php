@extends('layouts.app')

@section('content')

<main class="bg-white pt-12 pb-8" id="main">
	<div class="container mx-auto px-4">
		<div class="w-full mx-auto">
			@php($myItems = get_region_halland_acf_page_kulturarrangemang_items())
			@foreach($myItems as $item)
				<h2><a href="{{$item->url}}">{{ $item->post_title }}</a></h2><br>
				<span>{{ $item->post_ingress }}</span><br><br>
				<span>{!! $item->post_content !!}</span><br><br>
				<span><strong>Typ:</strong> {{ $item->kultur_typ }}</span><br>
				<span><strong>Kategori:</strong> {{ $item->kultur_category }}</span><br>
				<span><strong>Subkategori:</strong> {{ $item->kultur_sub_category }}</span><br>
				<span><strong>Fullbokat:</strong> {{ $item->kultur_fullbokat }}</span><br>
				<span><strong>Tid:</strong> {{ $item->kultur_tid }}</span><br>
				<span><strong>Plats:</strong> {{ $item->kultur_plats }}</span><br>
				<span><strong>Målgrupp:</strong> {{ $item->kultur_malgrupp }}</span><br><br>
			@endforeach	
		</div>
	</div>
</main>

@endsection