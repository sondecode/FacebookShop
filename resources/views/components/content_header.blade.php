<section class="content-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h1 class="m-0  text-uppercase" style="font-size: 1.2rem; color: #3498db">{{ $data['title'] }}</h1>
            </div>
            <div class="col-sm-6 d-flex justify-content-end align-items-center">
                <ol class="breadcrumb float-sm-right">
                    @foreach ($data['breadcrumbs'] as $item)
                        <li class="breadcrumb-item {{ $item['active'] ? 'active' : '' }}">
                            @if ($item['active'])
                                {{ $item['name'] }}
                            @else
                                <a href="{{ $item['url'] ?? '#' }}">{{ $item['name'] }}</a>
                            @endif
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>
