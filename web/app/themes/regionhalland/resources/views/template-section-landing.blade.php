{{--
	Template Name: Section Page
--}}

@extends('layouts.app')

@section('content')

	@while (have_posts()) @php the_post() @endphp

		<main id="main">
			<div class="pt-16 pb-8 relative bg-blue-dark">
				<div class="container mx-auto px-4 relative">
					<div class="w-full mx-auto">
						<h1 class="mb-4 text-white">{!! get_the_title() !!}</h1>
						<div class="text-lg leading-tight md:text-xl mb-12 text-white white-link lg:w-5/12">
							@php the_content() @endphp
						</div>
					</div>
				</div>
			</div>


			<div class="bg-white pt-12 pb-8">
				<div class="container mx-auto px-4">
					<div class="w-full mx-auto">
						<div class="flex flex-wrap -mx-4">
							<div class="w-full lg:w-8/12 px-4">
								@include('partials.section-navigation')
							</div>
							<div class="w-full lg:w-4/12 px-4 mt-12 lg:mt-0">
								@include('partials.top-links')
							</div>
						</div>
					</div>
				</div>
			</div>

			@php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
			@if(isset($myBlurbs))
				@foreach ($myBlurbs as $blurbs)
                    <div class="demo">
                    <div class="rh-block">
                        <img src="{!! $blurbs['image'] !!}">
                        <div class="rh-text">
                            <h3><a href="{{ $blurbs['link_url'] }}" target="{{ $blurbs['link_target'] }}">{{ $blurbs['link_title'] }}</a></h3>
                            <p>{{ $blurbs['post_content'] }}</p>
                        </div>
                    </div>
                    </div>
                @endforeach
			@endif

			<div class="bg-white pt-16 pb-8">
				<div class="container mx-auto px-4">
					<div class="w-full mx-auto">
						@if(function_exists('get_region_halland_vg_news_categories'))
							@php($news = get_region_halland_vg_news_categories())
							@if($news)
								<header class="relative pb-4 block mb-8">
									<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">Nyheter</span>
									<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
								</header>
							@endif
						@endif
						<div class="flex flex-wrap -mx-4">
							<div class="w-full w-full lg:w-6/12 px-4 mb-8">
								@include('partials.news-list-category')
							</div>
							<div class="w-full lg:w-6/12 px-4 mb-8">
								@include('partials.blurb-list')
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

	@endwhile

@endsection