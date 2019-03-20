<article class="rh-search-elements">
	<a href="{{ $post['permalink'] }}" title="" class="rh-search-elements-title">
		<h2 class="h3">{{ $post['title'] }}</h2>
	</a>
	<span class="rh-search-elements-inline">Publicerad: <time itemprop="datePublished" datetime="{{ $post['date'] }}">{{ $post['date'] }}</time></span>
	<p class="rh-search-elements-description">{{ html_entity_decode(wp_trim_words($post['content'], 60, '...')) }}</p>
		@foreach($post['terms'] as $term)
			<a href="{{ $term['link'] }}" class="rh-labels" style="text-decoration:none">{{ $term['name'] }}</a>
		@endforeach	
</article>