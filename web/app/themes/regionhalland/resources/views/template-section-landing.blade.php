{{--
	Template Name: Section Page
--}}

@extends('layouts.app')

@section('content')

	@while (have_posts()) @php the_post() @endphp

		<main id="main">
            <div style="background-color: #F4F4F4;">
            <div class="pb2 center" style="max-width: 1440px;">
                <div class="left-align">

                <div class="mx3 pt3 pb3">
                    <h1 class="mx3 pb1">{!! get_the_title() !!}</h1>
                    <div class="mx3 col-12 sm-col-8 md-col-8 lg-col-8">{{ get_region_halland_acf_page_ingress() }}</div>
                </div>
                <div class="">
                    @include('partials.section-navigation')
                </div>
                <div class="">
                    @include('partials.top-links')
                </div>
                </div>
                </div>
            </div>

            @include('partials.new_blurbs-list')

            @if(function_exists('get_region_halland_page_news_taxonomi_category'))
                @php($newsitems = get_region_halland_page_news_taxonomi_category())
                @if($newsitems)
                    <div style="background-color: #F4F4F4;" class="pb3 pt3">
                        <div class="center" style="max-width:1440px;">
                            <div class="left-align">
                        <div class="mx4 pt3 pb2">
                            <h1 class="pb2">Nyheter</h1>
                        </div>
                        <ul class="flex flex-wrap pb3 mx4 pt3 px2" aria-label="Nyheter" style="background-color: white; border-radius: 0.4ex; box-shadow: 1px 2px 6px grey;">
                            @foreach($newsitems as $newsitem)
                                <li class="rh-article pb2 col-12 sm-col-6 md-col-6 lg-col-6 px2">
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
                        </div>
                    </div>
                @endif
            @endif

		</main>

	@endwhile

@endsection