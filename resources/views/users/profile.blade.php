@extends('layouts.app')

@section('content')
    @php
    $content_header = [
        'title' => 'Thông tin hồ sơ',
        'breadcrumbs' => [['url' => route('users'), 'name' => 'Home', 'active' => false],['url' => route('profile'), 'name' => 'Thông tin hồ sơ', 'active' => true],  ],
    ];
    @endphp

    @include('components.content_header', ['data' => $content_header])
    <section class="content">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <form action="" class="row">
                    <div class="form-group col-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" readonly='true' value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Email</label>
                        <input type="text" class="form-control"  readonly='true'  value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Re-Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info text-white">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
