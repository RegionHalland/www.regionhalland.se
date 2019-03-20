<nav aria-label="Undersidor">
    <ul class="flex flex-wrap pt3 mx3 mb4" aria-label="Undersidor" style="background-color: white; border-radius: 0.4ex;box-shadow: 1px 2px 6px grey;">
        @php($page_children = get_region_halland_page_children())
        @foreach($page_children as $index => $page)
            <li class="rh-navigation-card col-12 sm-col-6 md-col-4 lg-col-4 px3">
                <div class="rh-navigation-card-title">
                    <a href="{{ $page->url }}" class="rh-navigation-card-title-link">
                        {{ $page->post_title }}
                    </a>
                    <span class="rh-navigation-card-title-icon"></span>
                </div>
                <p class="rh-navigation-card-description">
                    {{ get_region_halland_acf_page_navigation_text($page->ID) }}
                </p>
            </li>
        @endforeach
    </ul>
</nav>