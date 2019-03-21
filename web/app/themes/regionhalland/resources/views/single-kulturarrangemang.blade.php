@extends('layouts.app')

@section('content')
<main>
	<div class="center rh-hero">
		<img class="rh-image-hero" src="{{ get_the_post_thumbnail_url() }}" alt="">
		<div class="rh-caption-hero">
			<h5 class="rh-caption-hero-title">
				{{ get_the_title() }}
			</h5>
		</div>
	</div>

	<div class="center px4 pt3 pb2" style="max-width: 1440px;">
		<div class="left-align">
			<div class="">
				@while(have_posts()) @php(the_post())
					<article class="">
						<h1 class="">{{ get_the_title() }}</h1>
						<div class="">
							{{ get_region_halland_acf_page_kulturarrangemang_ingress() }}
							<p>{{ the_content() }}</p>
						</div>
						@include('partials.author-info')
					</article>
				@endwhile
			</div>
			<div class="">
				<div class="">
					<header class="">
						<span class="">Mer information</span>
					</header>
					<ol class="">
						<li class="">
							<span><strong>Typ:</strong> {{ get_region_halland_acf_page_kulturarrangemang_type_name() }}</span>
						</li>
						<li class="">
							<span><strong>Kategori:</strong> {{ get_region_halland_acf_page_kulturarrangemang_category_name() }}</span>
						</li>
						<li class="">
							<span><strong>Subkategori:</strong> {{ get_region_halland_acf_page_kulturarrangemang_subcategory_name() }}</span>
						</li>
						<li class="">
							<span><strong>Fullbokat:</strong> {{ get_region_halland_acf_page_kulturarrangemang_fullbokat() }}</span>
						</li>
						<li class="">
							<span><strong>Ttid:</strong> {{ get_region_halland_acf_page_kulturarrangemang_tid() }}</span>
						</li>
						<li class="">
							<span><strong>Plats:</strong> {{ get_region_halland_acf_page_kulturarrangemang_plats() }}</span>
						</li>
						<li class="">
							<span><strong>Sista anmälningsdag:</strong> {{ get_region_halland_acf_page_kulturarrangemang_sista_anmalningstid() }}</span>
						</li>
						<li class="">
							<span><strong>Målgrupp:</strong> {{ get_region_halland_acf_page_kulturarrangemang_malgrupp() }}</span>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
