@extends('layouts.app')

@section('content')
<div class="center pt3 px4 pb4 clearfix" style="max-width: 1440px;">
	<div class="left-align col col-12 lg-col-9">
		<main class="">
			@while(have_posts()) @php(the_post())
				<h1 class="">{{ get_the_title() }}</h1>
				<div class="">
					<p>{{ the_content() }}</p>
				</div>
				@include('partials.author-info')
			@endwhile
		</main>
	</div>
</div>
@endsection
