@php($myMessage = get_region_halland_acf_site_message())    
@if($myMessage['show_message'] == true)
  <div class="center">
    <span>{!! $myMessage['rubrik'] !!}</span>&nbsp;|&nbsp;
    <span>{!! $myMessage['meddelande'] !!}</span>&nbsp;|&nbsp;
    <a href="{{ $myMessage['link_url'] }}" target="{{ $myMessage['link_target'] }}">{{ $myMessage['link_title'] }}</a>
  </div>
@endif