@extends('layouts.app')

@section('content')
<div class="center py4 px4" style="max-width:1440px;">
	<div class="left-align">
		@if (!have_posts())
			<h1 class="">{{ __('Sidan du söker efter verkar inte finnas.', 'halland') }}</h1>
		@endif
	</div>
</div>
@endsection
