<div class="row">
    <div class="col-4">
        <div class="info-box p-0">
            <span class="info-box-icon bg-info rounded-0" style="font-size: 0.8rem">
                P.302
            </span>
            <div class="info-box-content">
                <span class="info-box-text ">09/09/2021</span>
                <span class="info-box-number mt-0">Nguyễn Văn Quyến</span>
                <span class="progress-description">
                    01:21:00
                </span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="info-box p-0">
            <span class="info-box-icon bg-danger rounded-0" style="font-size: 0.8rem">
                P.301
            </span>
            <div class="info-box-content ">
                <span class="info-box-number mt-0">TRỐNG</span>
                {{-- <span class="info-box-text ">09/09/2021</span>
              <span class="info-box-number mt-0">Nguyễn Văn Quyến</span>
              <span class="progress-description">
                01:21:00
              </span> --}}
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="info-box p-0">
            <span class="info-box-icon bg-info rounded-0" style="font-size: 0.8rem">
                P.102
            </span>
            <div class="info-box-content ">
                <span class="info-box-text ">09/03/2022</span>
                <span class="info-box-number mt-0">Phạm Hải Long</span>
                <span class="progress-description">
                    01:21:00
                </span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="info-box p-0">
            <span class="info-box-icon bg-danger rounded-0" style="font-size: 0.8rem">
                P.311
            </span>
            <div class="info-box-content">
                <span class="info-box-number mt-0">TRỐNG</span>
                {{-- <span class="info-box-text ">09/09/2021</span>
              <span class="info-box-number mt-0">Nguyễn Văn Quyến</span>
              <span class="progress-description">
                01:21:00
              </span> --}}
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="info-box  p-0">
            <span class="info-box-icon bg-danger rounded-0" style="font-size: 0.8rem">
                P.302
            </span>
            <div class="info-box-content ">
                <span class="info-box-text ">09/09/2021</span>
                <span class="info-box-number mt-0">Nguyễn Văn Quyến</span>
                <span class="progress-description">
                    01:21:00
                </span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="info-box  p-0">
            <span class="info-box-icon bg-danger rounded-0" style="font-size: 0.8rem">
                P.311
            </span>
            <div class="info-box-content ">
                <span class="info-box-number mt-0">TRỐNG</span>
                {{-- <span class="info-box-text ">09/09/2021</span>
              <span class="info-box-number mt-0">Nguyễn Văn Quyến</span>
              <span class="progress-description">
                01:21:00
              </span> --}}
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="info-box  p-0">
            <span class="info-box-icon bg-danger rounded-0" style="font-size: 0.8rem">
                P.321
            </span>
            <div class="info-box-content">
                <span class="info-box-number mt-0">TRỐNG</span>
                {{-- <span class="info-box-text ">09/09/2021</span>
              <span class="info-box-number mt-0">Nguyễn Văn Quyến</span>
              <span class="progress-description">
                01:21:00
              </span> --}}
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="info-box p-0">
            <span class="info-box-icon bg-info rounded-0" style="font-size: 0.8rem">
                P.302
            </span>
            <div class="info-box-content">
                <span class="info-box-text ">09/09/2021</span>
                <span class="info-box-number mt-0">Nguyễn Văn Quyến</span>
                <span class="progress-description">
                    01:21:00
                </span>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="info-box  p-0">
            <span class="info-box-icon bg-warning rounded-0" style="font-size: 0.8rem">
                P.321
            </span>
            <div class="info-box-content">
                <span class="info-box-number mt-0">ĐANG SỬA</span>
                {{-- <span class="info-box-text ">09/09/2021</span>
              <span class="info-box-number mt-0">Nguyễn Văn Quyến</span>
              <span class="progress-description">
                01:21:00
              </span> --}}
            </div>
        </div>
    </div>
</div>
@include('room.modals.setRoom')
@push('page_scripts')
    <script type='text/javascript'>
        $(function() {
            $('.info-box').click(function() {
                //  window.location='{{ route('profile') }}';
                $("#exampleModal").modal('show');
            })
        })
    </script>
@endpush
