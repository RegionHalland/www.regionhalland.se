@php($myMessage = get_region_halland_acf_site_message())    
@if($myMessage['show_message'] == true)
    <div style="background-color: #E3B7BE;">
    <div class="rh-message mx-auto" style="max-width: 1440px">
            <span class="rh-message-icon"></span>
            <div class="rh-message-text">
                <h1 class="h2 rh-message-text-title">{!! $myMessage['rubrik'] !!}</h1>
                <p>{!! $myMessage['meddelande'] !!}</p>
                <p>
                    <a class="rh-message-text-link" href="{{ $myMessage['link_url'] }}" target="{{ $myMessage['link_target'] }}">{{ $myMessage['link_title'] }}</a>
                </p>
            </div>

    </div>
    </div>
@endif

