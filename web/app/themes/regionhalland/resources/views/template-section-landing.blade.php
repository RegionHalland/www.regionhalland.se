{{--
	Template Name: Section Page
--}}

@extends('layouts.app')

@section('content')

	@while (have_posts()) @php the_post() @endphp

		<main id="main">
            <div class="mx4 pt3 pb4">
                <h1 class="mx3 pb2">{!! get_the_title() !!}</h1>
                <div class="mx3 col-12 sm-col-8 md-col-8 lg-col-8">{{ get_region_halland_acf_page_ingress() }}</div>
            </div>


            <div class="">
                @include('partials.section-navigation')
            </div>
            <div class="">
                @include('partials.top-links')
            </div>


			@php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
			@if(isset($myBlurbs))
                <ul class="flex flex-wrap pt4 pb3 mx4" aria-label="Puffar" style="border-top: 3px solid green">
				@foreach ($myBlurbs as $blurbs)
                    <li class="col-12 sm-col-6 md-col-4 lg-col-4 pr3">
                    <div class="demo">
                    <div class="rh-block">
                        <img src="{!! $blurbs['image_url'] !!}">
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
                <div style="background-color: #F4F4F4;" class="mb3 pb3 pt3">
                    <div class="mx4 pt3 pb2">
                        <h1 class="mx3 pb2">Nyheter</h1>
                    </div>
                    @php($newsitems = get_region_halland_page_news_taxonomi_category())
                    <ul class="flex flex-wrap pb3 mx4 pt3 px2" aria-label="Nyheter" style="background-color: white; border-radius: 1ex; box-shadow: 1px 2px 6px grey;">
                        @foreach($newsitems as $newsitem)
                            <li class="rh-article col-12 sm-col-6 md-col-4 lg-col-4 px2">
                                <h5 class="rh-article-title"><a class="rh-article-title-link" href="{{ $newsitem['permalink'] }}">{{ $newsitem['title'] }}<a/></h5>
                                <p class="rh-article-published">Publicerad: {{ $newsitem['date'] }}</p>
                                <p class="rh-article-description">
                                    {{ wp_trim_words(region_halland_remove_shortcode($newsitem['content']), 20, '...') }}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                    <div class="col-12 center mt3">
                        <button class="rh-button rh-button--secondary" aria-label="Visa fler nyheter" role="button">Visa fler nyheter</button>
                    </div>
                </div>
            @endif

		</main>

	@endwhile

@endsection