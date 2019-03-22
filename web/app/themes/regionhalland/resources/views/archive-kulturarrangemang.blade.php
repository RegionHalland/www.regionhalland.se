@extends('layouts.app')

@section('content')

<main class="" id="main">
	<div class="center px4 pt3 pb2" style="max-width: 1440px;">
        <h1 class="left-align pb2">
            Arrangemangskalender
        </h1>
    </div>
    <div style="background-color: #E4E4E4">
        <div class="center px4 pt4 pb4" style="max-width:1440px">
            @php($myItems = get_region_halland_acf_page_kulturarrangemang_items())
            <ul class="left-align" aria-label="Arrangemangskalender">
                @foreach($myItems as $item)
                    <li>
                        <div class="rh-event-card-calendar mb2 l2" style="background-color: white;">
                            <div class="pl3 pr1" style="color: black; position: relative; top:50%; transform: translateY(+100%);">
                                <span class="h2 rh-event-card-calendar-date-day" style="color:black">{{ $item->kultur_starttid }}</span>
                            </div>
                            <div class="py2 rh-event-card-calendar-description">
                                <h2 class="rh-event-card-calendar-title">
                                    <a href="{{ $item->url }}" class="rh-event-card-calendar-title-link" style="color: black;">
                                        {{ $item->post_title }}
                                    </a>
                                </h2>
                                <p class="rh-event-card-calendar-inline rh-event-card-calendar-time">
                                    {{ $item->kultur_tid }}
                                </p>
                                <p class="">
                                    {{ $item->kultur_plats }}
                                </p>
                                <span class="rh-labels">
                                    {{ $item->kultur_sub_category }}
                                </span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</main>

@endsection
