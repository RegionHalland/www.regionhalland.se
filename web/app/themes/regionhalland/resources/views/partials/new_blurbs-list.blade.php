@php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
@if(isset($myBlurbs))
    <div>
    <ul class="flex flex-wrap pt4 pb3 mx4" aria-label="Puffar">
        @foreach ($myBlurbs as $blurbs)
            <li class="col-12 sm-col-6 md-col-4 lg-col-4 pr3">
                <div class="demo">
                    <div class="rh-block">
                        <img src="{!! $blurbs['image_url'] !!}">
                        <div class="rh-text">
                            <h3><a href="{{ $blurbs['link_url'] }}" target="{{ $blurbs['link_target'] }}">{{ $blurbs['link_title'] }}</a></h3>
                            <p>{{ $blurbs['post_content'] }}</p>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    </div>
@endif