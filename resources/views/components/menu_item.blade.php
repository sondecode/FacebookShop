@php
$data = [
    [
        'title' => 'Sơ đồ phòng',
        'icon' => 'fas fa-home',
        'class_names' => '',
        'route_name' => 'home',
        'permission' => 'system_user,user,outsourcer',
        'childrens' => [],
    ],
    [
        'title' => 'Khách hàng',
        'icon' => 'fas fa-users',
        'class_names' => '',
        'route_name' => 'customers',
        'permission' => 'system_user,user,outsourcer',
        'childrens' => [],
    ],
    [
        'title' => 'Phòng',
        'icon' => 'fas fa-hotel',
        'class_names' => '',
        'route_name' => 'room.list',
        'permission' => 'system_user,user,outsourcer',
        'childrens' => [
            [
                'title' => 'Danh sách',
                'icon' => 'fas fa-circle',
                'class_names' => '',
                'route_name' => 'room.list',
                'permission' => 'system_user,user,outsourcer',
                'children' => [],
            ],
            [
                'title' => 'Thêm mới',
                'icon' => 'fas fa-circle',
                'class_names' => '',
                'route_name' => 'room.list',
                'permission' => 'system_user,user,outsourcer',
                'children' => [],
            ],
            [
                'title' => 'Cập nhật',
                'icon' => 'fas fa-circle',
                'class_names' => '',
                'route_name' => 'logout',
                'permission' => 'system_user,user,outsourcer',
                'children' => [],
            ],
        ],
    ],
    [
        'title' => 'Dịch vụ',
        'icon' => 'fas fa-cloud',
        'class_names' => '',
        'route_name' => 'service',
        'permission' => 'system_user,user,outsourcer',
        'childrens' => [],
    ],
    [
        'title' => 'Hồ sơ của tôi',
        'icon' => 'fas fa-solid fa-id-card',
        'class_names' => '',
        'route_name' => 'profile',
        'permission' => 'system_user,user,outsourcer',
        'childrens' => [],
    ],
    [
        'title' => 'Người dùng ',
        'icon' => 'fas fas fa-user-cog',
        'class_names' => '',
        'route_name' => 'users',
        'permission' => 'system_user,user,outsourcer',
        'childrens' => [],
    ],
    [
        'title' => 'Báo cáo & Thống kê ',
        'icon' => 'fas fa-file-alt',
        'class_names' => '',
        'route_name' => 'reports',
        'permission' => 'system_user,user,outsourcer',
        'childrens' => [
            [
                'title' => 'Báo cáo tình trạng phòng',
                'icon' => 'fas fa-circle',
                'class_names' => '',
                'route_name' => 'logout',
                'permission' => 'system_user,user,outsourcer',
                'children' => [],
            ],
            [
                'title' => 'Báo cáo doanh thu',
                'icon' => 'fas fa-circle',
                'class_names' => '',
                'route_name' => 'logout',
                'permission' => 'system_user,user,outsourcer',
                'children' => [],
            ],
            [
                'title' => 'Báo cáo công nợ',
                'icon' => 'fas fa-circle',
                'class_names' => '',
                'route_name' => 'logout',
                'permission' => 'system_user,user,outsourcer',
                'children' => [],
            ],
        ],
    ],

    [
        'title' => 'Đăng xuất',
        'icon' => 'fas fa-sign-out-alt',
        'class_names' => '',
        'route_name' => 'logout',
        'permission' => 'system_user,user,outsourcer',
        'childrens' => [],
    ],
];
@endphp

@foreach ($data as $item)
    @if ($item['childrens'])
        <li
            class="nav-item {{ Request::route()->getName() == $item['route_name'] ? 'active' : '' }} has-treeview menu-item">

            <a href="{{ route($item['route_name']) }}" class="nav-link {{ $item['class_names'] }} text-dark w-100"
                onclick="beforeHref('{{ $item['route_name'] == 'logout' ? $item['route_name'] : '' }}')">
                <i class="nav-icon {{ $item['icon'] }}"></i>
                <p>{{ $item['title'] }}</p>
                <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
                @foreach ($item['childrens'] as $children)
                    <li class="nav-item {{ Request::route()->getName() == $item['route_name'] ? 'active' : '' }}">

                        <a href="{{ route($children['route_name']) }}"
                            class="nav-link {{ $children['class_names'] }} text-dark"
                            onclick="beforeHref('{{ $children['route_name'] == 'logout' ? $children['route_name'] : '' }}')">
                            <i class="nav-icon {{ $children['icon'] }}" style="font-size: 0.5rem"></i>
                            <p>{{ $children['title'] }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @else
        <li
            class="nav-item {{ Request::route()->getName() == $item['route_name'] ? 'active' : '' }} has-treeview menu-item">

            <a href="{{ route($item['route_name']) }}" class="nav-link {{ $item['class_names'] }} text-dark  w-100"
                onclick="beforeHref('{{ $item['route_name'] == 'logout' ? $item['route_name'] : '' }}')">
                <i class="nav-icon {{ $item['icon'] }}"></i>
                <p>{{ $item['title'] }}</p>

            </a>

        </li>
    @endif
@endforeach
