@if(isset($nav_sidebar) && !empty($nav_sidebar))
	<ul class="rh-secondary-nav" aria-label="Navigation till undersidor">
		@each('partials.child-list', $nav_sidebar, 'item')
	</ul>
@endif