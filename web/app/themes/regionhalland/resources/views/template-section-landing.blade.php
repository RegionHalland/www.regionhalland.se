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
                        {!! $blurbs['image'] !!}
                        <div class="rh-text">
                            <h3><a href="{{ $blurbs['link_url'] }}" target="{{ $blurbs['link_target'] }}">{{ $blurbs['link_title'] }}</a></h3>
                            <p>{{ $blurbs['post_content'] }}</p>
                        </div>
                    </div>
                    </div>
                @endforeach
			@endif

            @if(function_exists('get_region_halland_page_news_taxonomi_category'))
                @php($newsitems = get_region_halland_page_news_taxonomi_category())
                <ul>
                    @foreach($newsitems as $newsitem)
                        <li class="rh-article">
                            <h5 class="rh-article-title"><a class="rh-article-title-link" href="{{ $newsitem['permalink'] }}">{{ $newsitem['title'] }}<a/></h5>
                            <p class="rh-article-published">Publicerad: {{ $newsitem['date'] }}</p>
                            <p class="rh-article-description">
                                {{ $newsitem['content'] }}
                            </p>
                        </li>
                    @endforeach
                </ul>
            @endif
		</main>

	@endwhile

@endsection