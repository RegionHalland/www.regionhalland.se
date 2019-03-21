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

		<div class="center px4 pt3 pb4" style="max-width: 1440px;">
			<div class="left-align">
				<div class="">
					@while(have_posts()) @php(the_post())
					<article class="clearfix">
						<div class="col col-12 md-col-9 pr4">
							<h1 class="">{{ get_the_title() }}</h1>
							<p>{{ the_content() }}</p>
							@include('partials.author-info')
						</div>
						<div class="col col-12 md-col-3">
							<div class="" >
								<h2 class="h2" style="border-bottom: 2px solid #61A2D8;">Mer information</h2>
								<div class="mt2 pt2 pl2 pb2" style="border-left: 4px solid #61A2D8; background-color: #D0E3F3; border-bottom-left-radius: 5px; border-top-left-radius: 5px;">
									<p><strong>Publik:</strong> {{ get_region_halland_acf_page_kulturkatalog_publik() }}</p>
									<p><strong>Speltid:</strong> {{ get_region_halland_acf_page_kulturkatalog_speltid() }}</p>
									<p><strong>Lokal:</strong> {{ get_region_halland_acf_page_kulturkatalog_lokal() }}</p>
									<p><strong>Turnéperiod:</strong> {{ get_region_halland_acf_page_kulturkatalog_turne_period() }}</p>
									<p><strong>Pris:</strong> {{ get_region_halland_acf_page_kulturkatalog_pris() }}</p>
                                    <p><strong>Typ:</strong>
                                        @php($arrLabels = get_region_halland_acf_page_kulturkatalog_type_labels())
                                        @if(isset($arrLabels))
                                            @foreach ($arrLabels as $label)
                                                {{ $label['label'] }},
                                            @endforeach
                                        @endif
								    </p>
								</div>
							</div>
						</div>

					</article>
					@endwhile
				</div>

			</div>
		</div>
	</main>
@endsection
