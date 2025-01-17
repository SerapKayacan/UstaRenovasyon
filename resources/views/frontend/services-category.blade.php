@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="row px-4" style="background-color:#f8caca">
            <div class="col-12 text-center py-4 ms-20 d-flex flex-column align-items-center">
                <form action="{{ route('search') }}" method="GET" class="search-bar justify-content-center mx-3" role="search" id="form">
                    <input class="search-bar-input" type="search" name="query"
                           placeholder="Epoxy-PVC..."
                           aria-label="Search through site content">
                    <button class="search-bar-button px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.5em" color=" #6E4EEF"
                             viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false"
                             class=""><title>search</title>
                            <path
                                d="M23.031 23.033c0.536-0.536 1.404-0.536 1.939 0l6.626 6.626c0.536 0.536 0.536 1.404 0 1.939s-1.404 0.536-1.94 0l-6.626-6.626c-0.536-0.536-0.536-1.404 0-1.939z"></path>
                            <path
                                d="M0.001 14.628c0.001-8.079 6.55-14.628 14.628-14.628 0 0 0 0 0 0 8.079 0 14.628 6.549 14.628 14.628s-6.549 14.628-14.628 14.628c-8.078 0-14.627-6.548-14.628-14.626zM2.744 14.628c0 6.564 5.321 11.886 11.886 11.886s11.886-5.321 11.886-11.886c0-6.564-5.321-11.886-11.886-11.886s-11.885 5.322-11.886 11.886z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="main-wrapper-services-1" style="margin-top:40px;margin-bottom:40px;">
            <div class="container main-container-services-1">
                <div class="row">
                    @foreach ($serviceCategories as $serviceCategory)
                    <div class="col-12 col-md-4 col-lg-4 col-xs-12">
                        <div class="card card-services rounded-5 border-4">
                            <div class="card-header card-services-header">
                                <div class="icon-box-services"> {!! $serviceCategory->icon !!}</div>
                                <div class="card-top-text">{{ $serviceCategory->title }}</div>
                                <div class="card-middle-text">{!! $serviceCategory->category_page_detail !!}
                                </div>
                            </div>
                            <div class="card-body card-services-body">
                                <div class="button-header">
                                    <p>Hizmetler</p>
                                </div>
                                <hr class="card-link-line-services">
                                @if ($serviceCategory->services->isNotEmpty())
                                <ul class="card-link" style="list-style-type: none;">
                                    @foreach ($serviceCategory->services->take(3) as $service)
                                    <li style="list-style: none">
                                        @if($service['is_active'])
                                        <a href="{{ route('services-detail.show', ['slug' => $service->slug]) }}" title="Hizmet Detayını Görüntüle." style="display:flex;text-decoration: none;">
                                            <p class="card-link-text-services"> {{ $service->title }}</p>
                                            <i class="bi bi-caret-right card-link-icon-services">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class=""><title>arrow_forward_ios</title>
                                                    <path
                                                        d="M9.42 32l-2.84-2.84 13.16-13.16-13.16-13.16 2.84-2.84 16 16-16 16z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                            @endif
                                    </li>
                                        <hr class="card-link-line-services">
                                    @endforeach
                                </ul>
                                @else
                                    <p>No services available for this category.</p>
                                @endif
                                    <div style="display:flex;">
                                        <a href="{{ route('services.byCategory', ['slug' => $serviceCategory->slug]) }}" title="Hizmetleri Görüntüle."
                                           style="display:flex;text-decoration:none;">
                                            <p class="card-link-bottom-text">Daha Fazlası</p>
                                            <i class="bi bi-arrow-right card-link-bottom-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="0.90em"
                                                     viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"
                                                     focusable="false" class="">
                                                    <path
                                                        d="M24.35 18h-24.35v-4h24.35l-11.2-11.2 2.85-2.8 16 16-16 16-2.85-2.8 11.2-11.2z"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
