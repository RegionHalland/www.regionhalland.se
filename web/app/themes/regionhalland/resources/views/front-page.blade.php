@extends('layouts.app')

@php($id = uniqid())

@section('content')

    <nav aria-label="Undersidor">
        <ul class="flex flex-wrap pt3 mx4" aria-label="Undersidor" style="background-color: #F4F4F4">
        @php($first_level_pages = get_region_halland_tree_first_level())
            @foreach($first_level_pages as $index => $page)
                <li class="rh-navigation-card col-12 sm-col-6 md-col-4 lg-col-4 px2">
                    <div class="rh-navigation-card-title">
                        <a href="{{ $page->url }}" class="rh-navigation-card-title-link">
                            {{ $page->post_title }}
                        </a>
                        <span class="rh-navigation-card-title-icon"></span>
                    </div>
                    <p class="rh-navigation-card-description">
                        @if(has_excerpt($page->ID))
                            {{ $page->acf_excerpt }}
                        @else
                            {{ html_entity_decode(wp_trim_words(region_halland_remove_shortcode($page->post_content), 10, '...'))  }}
                        @endif
                    </p>
                </li>
            @endforeach
        </ul>
    </nav>
    {!! the_content() !!}
    {{ get_region_halland_acf_page_ingress() }}
	<div>PUFFAR i tredjedelar här - blurb</div>
<div>PUFFAR i halvbredd här - visit halland + 1177. Blurb?</div>

{{--
<main id="main">
	<div class="bg-blue-dark">
		<div class="container mx-auto px-4 pt-16 pb-12">
			<div class="w-full mx-auto flex justify-between flex-wrap">
				<div class="w-full md:w-6/12">
					@while(have_posts()) @php(the_post())
						<h1 class="text-3xl md:text-4xl text-white mb-4">{{ the_title() }}</h1>
						<div class="text-blue-light text-lg leading-tight md:text-xl mb-6">{!! the_content() !!}</div>
					@endwhile
					<form action="{{ home_url() }}" role="search">
						<div class="bg-white rounded overflow-hidden relative">
							<label for="search" class="visually-hidden">Sök: </label>
							<input name="s" aria-label="Sök på webbplatsen" id="search" placeholder="Sök på webbplatsen" class="text-lg bg-transparent h-12 md:h-16 pin-t px-4 md:px-6 pin-l w-full" type="search">
							<button type="submit" aria-label="Sök" class="bg-yellow flex items-center justify-center absolute pin-r pin-b h-12 w-12 md:h-16 md:w-16">
								<svg class="h-6 w-6">
									<use xlink:href="#search"/>
								</svg>
							</button>
						</div>
					</form>
				</div>
				<div class="w-full md:w-4/12 mt-12 md:mt-0">
				@if(function_exists('get_region_halland_acf_front_page_links'))
					@php($frontPageLinks = get_region_halland_acf_front_page_links())
					@if(isset($frontPageLinks) && !empty($frontPageLinks))
						<header class="text-lg font-bold text-white block mb-2">Snabblänkar</header>
						<ol aria-labelledby="Snabblänkar" class="list-reset bg-white relative rounded overflow-hidden">
							@foreach($frontPageLinks as $link)
							<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
								<div class="absolute bg-blue pin-l pin-t h-full w-1"></div>
								<a class="text-black whitespace-no-wrap hover:bg-yellow-light focus:bg-yellow-light" href="{{ $link['url'] }}">{{ $link['title'] }}</a>
								<svg class="h-4 w-4 align-middle ml-1">
									<use xlink:href="#link-2"/>
								</svg>
							</li>
							@endforeach
						</ol>
					@endif
				@endif
				</div>
			</div>
		</div>
	</div>

	<div class="bg-white pt-16 pb-8">
		<div class="container mx-auto px-4">
			<div class="w-full mx-auto">

				<header class="relative pb-4 block mb-8">
					<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">Vad letar du efter?</span>
					<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
				</header>

				<ul class="flex flex-wrap items-stretch -mx-4 list-reset" aria-labelledby="Länklista">
				@php($top_level_pages = get_region_halland_tree_first_level())
				@if(isset($top_level_pages) && !empty($top_level_pages))
					@foreach($top_level_pages as $top_level_page)
						<li class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8">
							<a href="{{ $top_level_page->url }}" class="text-blue-dark hover:bg-yellow-light focus:bg-yellow-light inline-block">
								<h2 class="mb-2 text-xl md:text-2xl">{{ $top_level_page->post_title }}</h2>
							</a>
							<p class="leading-tight text-lg text-grey-darkest">
								@if(get_field('excerpt', $top_level_page->ID))
									{{ the_field('excerpt', $top_level_page->ID) }}
								@else
									{{ html_entity_decode(wp_trim_words($top_level_page->post_content, 10, '...')) }}
								@endif
							</p>
						</li>
					@endforeach
				@endif
				</ul>
				
			</div>
		</div>
	</div>

	<div class="bg-white pt-16 pb-8">
		<div class="container mx-auto px-4">
			<div class="w-full mx-auto">
				<header class="relative pb-4 block mb-8">
					<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">Nyheter</span>
					<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
				</header>
				<div class="flex flex-wrap -mx-4">
					<div class="w-full w-full lg:w-6/12 px-4 mb-8">
						@include('partials.news-list')
					</div>
					<div class="w-full lg:w-6/12 px-4 mb-8">
						@include('partials.blurb-list')
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
--}}

@endsection
