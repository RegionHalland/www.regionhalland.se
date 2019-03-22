<div style="background-color: #C3DCC1">
    <div class="clearfix center pt3 px3" style="max-width: 1440px;">
        <div class="left-align col col-12 sm-col-6 md-col-6 lg-col-4">
            <p class="h2">Kontakta oss</p>
            <p>
                Region Halland<br>
                Box 517<br>
                301 80 Halmstad
            </p>
            <p>
                <strong>Telefon:</strong> 035 - 13 48 00<br>
                <strong>E-post:</strong> <a href="mailto:regionen@regionhalland.se">regionen@regionhalland.se</a>
            </p>
            <p class="h2 pt3">
                Fler kontaktvägar
            </p>
            <p>
                <a href="">Visselblås</a>
            </p>

        </div>

        <div class="left-align col col-12 sm-col-6 md-col-6 lg-col-4">
            <p class="h2">Nyheter och press</p>
            <p><a href="">(länk till sida)</a></p>
            <p class="h2 pt3">Följ oss</p>
            <p><a href="">Region Halland i sociala medier</a></p>
            <p class="h2 pt3">Ämnesområden</p>
            @php($first_level_pages = get_region_halland_tree_first_level())
            @if(isset($first_level_pages) && !empty($first_level_pages))
                @foreach($first_level_pages as $first_level_page)
                    @if($first_level_page->active === true)
                        <a class="active" href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a><br>
                    @else
                        <a href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a><br>
                    @endif
                @endforeach
            @endif

        </div>
        <div class="left-align col col-12 sm-col-6 md-col-6 lg-col-4">
            <p class="h2">Om webbplatsen<p>
            <p>
                <a href="">Om webbplatsen</a><br>
                <a href="">Behandling av personuppgifter</a>
            </p>
            <p class="h2 pt3">
                Felanmälan och synpunkter
            </p>
            <a href="">Felanmälanssystem</a>
            <p class="h2 pt3">Demokrati och politik</p>
            <p>
                @if(function_exists('get_region_halland_page_children'))
                    @php($myPages = get_region_halland_page_children(14))
                    @if(isset($myPages))
                        @foreach ($myPages as $myChilds)
                            <a href="{{ $myChilds->url }}">{{ $myChilds->post_title }}</a><br>
                        @endforeach
                    @endif
                @endif

            </p>

        </div>
    </div>
</div>
{{--
<div class="rh-footer">

	<div class="rh-footer-section">
		<h5>Kontakta oss </h5>
		<hr class="rh-footer-title-hr">
		<p>
			Region Halland </br>
			Box 517 </br>
			301 80 Halmstad
		</p>
		<p><strong> Telefon:</strong> 035 - 13 48 00 </p>
		<p><strong> E-post:</strong> <a class="rh-link"> regionen@regionhalland.se</a> </p>
		<br>
		<p><a class="rh-link"> Kontakta mottagning</a></p>
		<p><a class="rh-link"> Kontakta personal</a></p>
	</div>

	<div class="rh-footer-section">
		<h5>Övriga webbplatser </h5>
		<hr class="rh-footer-title-hr">
		<ul>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					Regionhalland.se
				</a>
			</li>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					Vardgivare.regionhalland.se
				</a>
			</li>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					Intra.regionhalland.se
				</a>
			</li>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					Hallandstrafiken.se
				</a>
			</li>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					1177.se
				</a>
			</li>
		</ul>
	</div>

	<div class="rh-footer-section">
		<h5>Om webbplatsen </h5>
		<hr class="rh-footer-title-hr">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation allamco laboris nisi ut aliquip ex ea commodo consequat. </p>
	</div>

</div>
 --}}
<script src="{!! env('WP_HOME') !!}/include/scripts/jquery.3.3.1.min.js?ver=3.3.1"></script>
{{--<script type='text/javascript' src='{!! env('WP_HOME') !!}/include/scripts/digitaliseringbyran.js'></script>--}}
<script src="{!! env('WP_HOME') !!}/styleguide2.2.1/js/components.js"></script>