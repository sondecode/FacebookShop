@extends('layouts.app')

@section('content')
    @php
    $content_header = [
        'title' => 'Phòng',
        'breadcrumbs' => [['url' => route('users'), 'name' => 'Trang chủ', 'active' => false], ['url' => route('profile'), 'name' => 'Phòng', 'active' => true]],
    ];
    @endphp

    @include('components.content_header', ['data' => $content_header])
    <section class="content">
        <div class="card">
            @include('users.add')
            <div class="card-body ">
                <table class="table table-bordered  w-100" id="tbl_users">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Ngày tạo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td class="d-flex">
                                    <a href="" class="delete"><i class="far fa-trash-alt"></i></a>
                                    <a href="" class="update ml-2"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach --}}

                    </tbody>
                </table>

            </div>
        </div>
    </section>
@endsection

@push('page_scripts')
    <script type="text/javascript">
        $(function() {
            $('#tbl_users').DataTable({

            });
        })
    </script>
@endpush
