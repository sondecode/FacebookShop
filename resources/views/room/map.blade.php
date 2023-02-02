@extends('layouts.app')

@section('content')
    @php
    $content_header = [
        'title' => 'Sơ đồ phòng',
        'breadcrumbs' => [['url' => route('users'), 'name' => 'Trang chủ', 'active' => false], ['url' => route('profile'), 'name' => 'Sơ đồ phòng', 'active' => true]],
    ];
    @endphp

    @include('components.content_header', ['data' => $content_header])
    <section class="content">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item px-1" role="presentation">
                        <button class="nav-link active bg-white" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Tất cả Phòng</button>
                    </li>
                    <li class="nav-item px-1" role="presentation">
                        <button class="nav-link bg-danger text-white" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Phòng chưa đặt</button>
                    </li>
                    <li class="nav-item px-1" role="presentation">
                        <button class="nav-link bg-info text-white" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                            aria-selected="false">Phòng đã đặt</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active pt-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                        @include('room.tabs.mapRoom')
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>
    </section>
@endsection
