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
                            <div class="rh-event-card-calendar-date" style="position: relative; top:50%; transform: translateY(+35%);">
                                <h4 class="rh-event-card-calendar-date-day">14</h4>
                                <h6 class="rh-event-card-calendar-date-month">sep</h6>
                            </div>
                            <div class="py2 rh-event-card-calendar-description">
                                <h5 class="rh-event-card-calendar-title">
                                    <a href="{{ $item->url }}" class="rh-event-card-calendar-title-link">
                                        {{ $item->post_title }}
                                    </a>
                                </h5>
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
