@extends('layouts.app')

@section('content')

{{-- Container --}}
<div class="mx-auto clearfix" style="max-width: 1440px">
	<div>
		<div class="{{ isset($nav_sidebar) && !empty($nav_sidebar) ? 'justify-start' : 'justify-between' }}">

		{{-- Sidebar --}}
		@if(function_exists('get_region_halland_nav_sidebar'))
			@php($nav_sidebar = get_region_halland_nav_sidebar())
			@if(isset($nav_sidebar) && !empty($nav_sidebar))
				<aside class="pl4 pt3 pb4 col col-12 sm-col-4 md-col-3 lg-col-3">
					{{-- Sidebar Navigation --}}
					@include('partials.nav-sidebar')
					{{-- Sidebar Navigation END--}}
				</aside>
			@endif
		@endif
		{{-- Sidebar END --}}

		{{-- Main Content --}}
		<main class="pl4 pt3 pb4 col col-12 sm-col-6 md-col-7 lg-col-7" id="main">
			@while(have_posts()) @php(the_post())
				
				<h1>{{ the_title() }}</h1>
				
				{{-- Content --}}
				
				@if(function_exists('get_region_halland_prepare_the_content'))
					@php(get_region_halland_prepare_the_content())
				@endif

				<article class="article">
					<span class="italic">{{ get_region_halland_acf_page_ingress() }}</span>
					{!! the_content() !!}
				</article>
				{{-- Content END --}}

				{{-- Author --}}
				@include('partials.author-info')
				{{-- Author END --}}

			@endwhile

		</main>
		{{-- Main Content END --}}

		<aside class="pt4 col col-12 sm-col-2 md-col-2 lg-col-2">
			{{-- Content Navigation --}}
			@include('partials.content-nav')
			{{-- Content Navigation END --}}
		</aside>

		</div>
	</div>
</div>
{{-- Container END --}}
@endsection
