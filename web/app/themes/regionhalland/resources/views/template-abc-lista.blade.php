{{--
	Template Name: ABC-lista
--}}

@extends('layouts.app')

@section('content')

<main class="center bg-white px4 pb4 pt3 " id="main" style="max-width: 1440px;">
	<div class="left-align container mx-auto px-4">
		<h1 class="">{!! get_the_title() !!}</h1>
		@php($myLinks = get_region_halland_acf_abc_page_links())
		@if(isset($myLinks['allLetters']))
            <div class="rh-filter-alphabet">
            @foreach ($myLinks['allLetters'] as $link)
			    @if($link['has_content'] == 1)
			        <a class="rh-filter-alphabet-link" style="text-decoration: underline; color: blue;" href="#{{ $link['start_letter'] }}">{{ $link['start_letter_u'] }}</a>
			    @else
			        <span class="rh-filter-alphabet-link" style="color:grey;">{{ $link['start_letter_u'] }}</span>
			    @endif
		    @endforeach
            </div>
		@endif
                <br>
		@php($myLinks = get_region_halland_acf_abc_page_links())
		@if(isset($myLinks['content']))
		  @foreach ($myLinks['content'] as $link)
                @if($link['has_anchor_link'] == 1)
                    <h2><a name="{{ $link['start_letter'] }}">{{ $link['start_letter_u'] }}</a></h2>
			@endif
			<a href="{{ $link['link_url'] }}" target="{{ $link['link_target'] }}">{{ $link['link_title'] }}</a><br>
		  @endforeach
		@endif
	</div>
</main>

@endsection