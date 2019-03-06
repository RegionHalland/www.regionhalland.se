@php($checkCookieNotice = check_region_halland_cookie_notice())
@if ($checkCookieNotice == false)
	@php($cookie_notice = get_region_halland_cookie_notice())	
	<div id="cookie-notice" class="cookie-notice__container">
		<div class="cookie-notice__text-container">
			{!! $cookie_notice['message'] !!}
		</div>
		<div class="cookie-notice__btn-container">
			<button id="cookie-consent" class="rh-button rh-button--primary">{!! $cookie_notice['button'] !!}</button>
		</div>
	</div>
@endif