@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="row justify-content-center  px-5" style="background-color:#f8dfe4;">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 d-flex justify-content-center pt-4 pb-2">
                <img class="services-detail-page-img"
                     src="{{ $service->getFirstMediaUrl('banner', 'large') }}"
                     alt="Service Banner">
            </div>
            <div class="col-lg-5 services-detail-page-text col-lg-5 pt-4 pb-2">
                <h1 class="services-detail-page-header">{{ $service->title }}</h1>
                <p>
                    {!! $service->sort_detail !!}
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 position-relative ">
                <div class=" card appointment-card mt-4 mb-2  top-0 end-0 ">
                    <div class="card-body">
                        <h5 class="card-title appointment-card-title">Online Randevu Al</h5>
                        <div class="appointment-time-container">
                            <div style="display: flex; flex-direction: column; gap: 20px;">
                                @if ($service['can_be_appointment'])
                                    @foreach($days as $day => $times)
                                        @php
                                            $formattedDate = \Carbon\Carbon::parse($day);
                                            $uniqueTimes = collect($times)->unique('time'); // Get unique appointment times
                                        @endphp
                                        <div class="appointment-day-container">
                                            <div style="display:flex;">
                                                <div class="appointment-day-header">
                                                    <h2 class="appointment-day">{{ $formattedDate->translatedFormat('l') }}</h2>
                                                    <h2 class="appointment-date">{{ $formattedDate->translatedFormat('d F') }}</h2>
                                                </div>

                                                @foreach($times as $time)
                                                    <div>
                                                        @if ($time['is_available'])
                                                            <!-- Available time -->
                                                            <a href="https://wa.me/9005354694234?text={{ $service->title.' ' .' hizmetine '. $formattedDate->translatedFormat('d F l').' '.$time['time'] }}%20Randevu%20oluşturmak%20istiyorum"
                                                               target="_blank">
                                                                <button class="appointment-time-button"
                                                                        style=" cursor: pointer;">
                                                                    {{ $time['time'] }}
                                                                </button>
                                                            </a>
                                                        @else
                                                            <!-- Unavailable time -->
                                                            <button class="appointment-time-button" title="Randevu Almak İçin Tıklayın"
                                                                    style="background-color: lightgrey; cursor: not-allowed; pointer-events: none;">
                                                                {{ $time['time'] }}
                                                            </button>
                                                        @endif
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="row px-4 justify-content-center align-items-center text-center">
                                        <p style="text-align: center;" class="no-appointments-message">
                                            Uygun
                                            Randevu Saati
                                            Belirtilmemiştir.</p>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 my-2 px-2">
                                            <a style="text-decoration: none;" title="Bizi hemen arayın!" href="tel:02125910911" target="_blank">
                                                <button
                                                    style="background-color:#cc4b6a;border-radius:15px;border:none;height:60px;width:100%;display:flex;">
                                                    <div style="color:white; margin-top:15px;flex:1;">
                                                        <i style="background-color:white; border-radius:12px;padding-right:4px;padding-left:4px;padding-bottom:2px ;padding-top:1px;color:#cc4b6a;"
                                                           class="bi bi-telephone-outbound">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 width="1em"
                                                                 height="1em" viewBox="0 0 32 32"
                                                                 fill="currentColor"
                                                                 aria-hidden="true"
                                                                 focusable="false" class=""><title>
                                                                    call</title>
                                                                <path
                                                                    d="M24.512 31.997c-0.443 0-0.904-0.035-1.365-0.124-5.143-0.975-10.374-3.919-14.736-8.281s-7.306-9.611-8.281-14.736c-0.443-2.323 0.266-4.664 1.88-6.277l1.153-1.153c1.897-1.897 5.001-1.897 6.898 0l2.075 2.075c1.578 1.578 1.507 4.132-0.142 5.799l-1.454 1.454c0.993 2.27 2.518 4.469 4.38 6.331 1.88 1.88 4.079 3.405 6.348 4.398l1.596-1.614c1.507-1.507 4.132-1.507 5.639 0l2.075 2.075c1.897 1.897 1.897 5.001 0 6.898l-1.153 1.153c-1.294 1.294-3.068 2.004-4.912 2.004zM6.62 2.649c-0.585 0-1.153 0.231-1.561 0.656l-1.153 1.153c-0.993 0.993-1.419 2.447-1.135 3.901 0.869 4.628 3.547 9.363 7.536 13.353s8.725 6.668 13.353 7.537c1.454 0.284 2.908-0.16 3.901-1.135l1.153-1.153c0.869-0.869 0.869-2.27 0-3.139l-2.075-2.075c-0.514-0.514-1.365-0.514-1.88 0l-1.596 1.596c-0.762 0.78-1.951 1.011-2.944 0.567-2.571-1.135-5.054-2.855-7.164-4.965s-3.813-4.575-4.947-7.164c-0.426-0.993-0.213-2.163 0.567-2.944l1.454-1.454c0.638-0.638 0.692-1.49 0.142-2.039l-2.075-2.075c-0.426-0.426-0.975-0.656-1.561-0.656l-0.018 0.035z"></path>
                                                            </svg>
                                                        </i>
                                                    </div>
                                                    <div
                                                        style="color:white;font-size:17px;flex:4;margin-top:15px;margin-left:-4px;font-weight:600;">
                                                        <p>Bizi Arayın</p>
                                                    </div>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 px-2 ">
                                            <a style="text-decoration: none;" title="WhatsApp'tan bizimle iletişime geçin!"
                                               href="https://wa.me/9005354694234?text={{ $service->title.' ' }} %20Hizmetine%20uygun%20randevu%20bulunmamakta%20yardımcı%20olur%20musunuz?"
                                               target="_blank">
                                                <button
                                                    style="background-color:#69C140;border-radius:15px;border:none;height:60px;width:100%;display:flex;">
                                                    <div
                                                        style="color:white;  margin-top:15px;margin-left:-4px;flex:2">
                                                        <i class="bi bi-whatsapp"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="20" height="20"
                                                             fill="white"
                                                             class="bi bi-whatsapp"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                                        </svg>
                                                        </i>
                                                    </div>
                                                    <div
                                                        style="color:white;font-size:16px;flex:4;margin-left:-10px;margin-top:8px;font-weight:600;line-height:1.3;">
                                                        <p>Whatsapp'tan Destek Al</p>
                                                    </div>
                                                </button>
                                            </a>
                                        </div>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="row px-4">
                <div class="col-md-12 col-lg-12 col-xs-12 mx-2">
                    <p class="services-detail-page-text-bottom"> {!! $service->detail !!} </p>
                </div>
            </div>
        </div>
    </main>

@endsection
