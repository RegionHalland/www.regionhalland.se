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
            <div>
                {{ get_region_halland_acf_page_ingress() }}
            </div>


            <div class="">
                @include('partials.section-navigation')
            </div>
            <div class="">
                @include('partials.top-links')
            </div>


			@php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
			@if(isset($myBlurbs))
                <ul class="flex flex-wrap pb3">
				@foreach ($myBlurbs as $blurbs)
                    <li class="col-12 md-col-6 lg-col-4 mx3">
                    <div class="demo">
                    <div class="rh-block">
                        {!! $blurbs['image'] !!}
                        <div class="rh-text">
                            <h3><a href="{{ $blurbs['link_url'] }}" target="{{ $blurbs['link_target'] }}">{{ $blurbs['link_title'] }}</a></h3>
                            <p>{{ $blurbs['post_content'] }}</p>
                        </div>
                    </div>
                    </div>
                    </li>
                @endforeach
                </ul>
			@endif

            @if(function_exists('get_region_halland_page_news_taxonomi_category'))
                @php($newsitems = get_region_halland_page_news_taxonomi_category())
                <ul class="flex flex-wrap pb3">
                    @foreach($newsitems as $newsitem)
                        <li class="rh-article col-12 md-col-6 lg-col-4 mx3">
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