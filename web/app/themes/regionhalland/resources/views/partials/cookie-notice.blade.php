@php($checkCookieNotice = check_region_halland_cookie_notice())
@if ($checkCookieNotice == false)
	@php($cookie_notice = get_region_halland_cookie_notice())
	<div class="rh-cookie">
		<span class="rh-cookie-icon"></span>
		<p class="rh-cookie-description">
            {!! $cookie_notice['message'] !!}
		</p>
		<button class="rh-button rh-button--primary cookie-button" aria-label="Acceptera cookies och dölj meddelandet" role="button">{!! $cookie_notice['button'] !!}</button>
	</div>
@endif