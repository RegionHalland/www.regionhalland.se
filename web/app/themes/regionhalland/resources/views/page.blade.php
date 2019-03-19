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

					{{-- Left Sidebar END --}}
					@if (is_active_sidebar('sidebar-left'))
						@include('partials.sidebar-left')
					@endif
					{{-- Left Sidebar END --}}
				</aside>
			@endif
		@endif
		{{-- Sidebar END --}}

		{{-- Main Content --}}
		<main class="pl4 pt3 pb4 col col-12 sm-col-8 md-col-9 lg-col-9" id="main">
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

				{{-- Sidebar Bottom --}}
				@if (is_active_sidebar('sidebar-article-bottom'))
				<aside class="">
					@include('partials.sidebar-article-bottom')
				</aside>
				@endif
				{{-- Sidebar Bottom END --}}

				{{-- Author --}}
				@include('partials.author-info')
				{{-- Author END --}}

			@endwhile

				{{-- HSA KONTAKTKORT --}}
				@include('partials.rh-hsa')
			

		</main>
		{{-- Main Content END --}}

		<aside class="">
			{{-- Content Navigation --}}
			@include('partials.content-nav')
			{{-- Content Navigation END --}}
		</aside>

		</div>
	</div>
</div>
{{-- Container END --}}
@endsection
