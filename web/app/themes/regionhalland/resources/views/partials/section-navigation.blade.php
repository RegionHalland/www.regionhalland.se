<nav aria-label="Undersidor">
    <ul class="flex flex-wrap pt3 mx4" aria-label="Undersidor" style="background-color: #F4F4F4">
        @php($page_children = get_region_halland_page_children())
        @foreach($page_children as $index => $page)
            <li class="rh-navigation-card col-12 sm-col-6 md-col-4 lg-col-4 px2">
                <div class="rh-navigation-card-title">
                    <a href="{{ $page->url }}" class="rh-navigation-card-title-link">
                        {{ $page->post_title }}
                    </a>
                    <span class="rh-navigation-card-title-icon"></span>
                </div>
                <p class="rh-navigation-card-description">
                    @if(has_excerpt($page->ID))
                        {{ $page->acf_excerpt }}
                    @else
                        {{ html_entity_decode(wp_trim_words(region_halland_remove_shortcode($page->post_content), 10, '...'))  }}
                    @endif
                </p>
            </li>
        @endforeach
    </ul>
</nav>