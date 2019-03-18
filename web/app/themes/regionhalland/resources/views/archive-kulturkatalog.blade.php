@extends('layouts.app')

@section('content')

<main class="bg-white pt-12 pb-8" id="main">
	<div class="container mx-auto px-4">
		<div class="w-full mx-auto">
			@php($myItems = get_region_halland_acf_page_kulturkatalog_items())
			@foreach($myItems as $item)
				<h2>{{ $item->post_title }}</h2><br>
				<span>{{ $item->post_content }}</span><br><br>
				<span>
					<strong>Typ:</strong>
					@foreach($item->labels as $label)
						{{ $label['label'] }}
					@endforeach
				</span><br>
				<span><strong>Målgrupp:</strong> {{ $item->malgrupp }}</span><br>
				<span><strong>Publik:</strong> {{ $item->publik }}</span><br>
				<span><strong>Speltid:</strong> {{ $item->speltid }}</span><br>
				<span><strong>Lokal:</strong> {{ $item->lokal }}</span><br>
				<span><strong>Period:</strong> {{ $item->period }}</span><br>
				<span><strong>Pris:</strong> {{ $item->pris }}</span><br><br><br>
			@endforeach	
		</div>
	</div>
</main>

@endsection