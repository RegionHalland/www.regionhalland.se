@extends('layouts.app')

@section('content')
<div class="bg-white pt-16 pb-8">
	<div class="container mx-auto px-4">
		<div class="w-full mx-auto">
			<div class="flex flex-wrap -mx-4">
				<div class="w-full sm:w-full md:w-7/12 px-4">
					@while(have_posts()) @php(the_post())
						<article class="">
							<h1 class="mb-8">{{ get_the_title() }}</h1>
							<div class="article">
								<p>{{ the_content() }}</p>
							</div>
							@include('partials.author-info')
						</article>
					@endwhile
				</div>
				<div class="w-full sm:w-full md:w-5/12 px-4 mt-8 md:mt-0">
					<div class="sticky pin-t">
						<header class="relative pb-4 block mb-4">
							<span class="border-b-2 border-yellow text-2xl font-bold text-black pb-2 z-20 relative leading-none">Mer information</span>
							<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-yellow-light z-10">
						</header>
						<ol class="list-reset bg-yellow-light relative rounded border border-grey-lightest overflow-hidden">
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<span><strong>Typ:</strong> {{ get_region_halland_acf_page_kulturevenemang_type_name() }}</span>
							</li>
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<span><strong>Kategori:</strong> {{ get_region_halland_acf_page_kulturevenemang_category_name() }}</span>
							</li>
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<span><strong>Subkategori:</strong> {{ get_region_halland_acf_page_kulturevenemang_subcategory_name() }}</span>
							</li>
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<span><strong>Fullbokat:</strong> {{ get_region_halland_acf_page_kulturevenemang_fullbokat() }}</span>
							</li>
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<span><strong>Starttid:</strong> {{ get_region_halland_acf_page_kulturevenemang_start_tid() }}</span>
							</li>
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<span><strong>Sluttid:</strong> {{ get_region_halland_acf_page_kulturevenemang_slut_tid() }}</span>
							</li>
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<span><strong>Plats:</strong> {{ get_region_halland_acf_page_kulturevenemang_plats() }}</span>
							</li>
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<span><strong>Sista anmälningsdag:</strong> {{ get_region_halland_acf_page_kulturevenemang_sista_anmalningstid() }}</span>
							</li>
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<span><strong>Målgrupp:</strong> {{ get_region_halland_acf_page_kulturevenemang_malgrupp() }}</span>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
