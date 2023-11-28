@extends('layouts.header')

@section('menu')
<li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}"><a class="d-flex align-items-center"
        href="{{ url('/dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate"
            data-i18n="Dashboard">Dashboard</span></a></li>
<li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="database"></i><span
            class="menu-title text-truncate" data-i18n="Data Master">Data Website</span></a>
    <ul class="menu-content">
        <li class="{{ request()->routeIs('admin.price.index*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.price.index')}}"><i data-feather="dollar-sign"></i><span
                    class="menu-title text-truncate" data-i18n="Harga">Harga</span></a>
        </li>
        <li class="{{ request()->routeIs('admin.testimonial.index*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.testimonial.index')}}"><i data-feather="users"></i><span
                    class="menu-title text-truncate" data-i18n="Testimonial">Testimonial</span></a>
        </li>
        <li class="{{ request()->routeIs('admin.banner.index*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.banner.index')}}"><i data-feather="credit-card"></i><span
                    class="menu-title text-truncate" data-i18n="Banner">Banner</span></a>
        </li>
        <li class="{{ request()->routeIs('admin.hero.index*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.hero.index')}}"><i data-feather="codepen"></i><span
                    class="menu-title text-truncate" data-i18n="hero">Hero</span></a>
        </li>
        <li class="{{ request()->routeIs('admin.started.index*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.started.index')}}"><i data-feather="globe"></i><span
                    class="menu-title text-truncate" data-i18n="started">Started Page</span></a>
        </li>
        <li class="{{ request()->routeIs('admin.icon.index*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.icon.index')}}"><i data-feather="eye"></i><span
                    class="menu-title text-truncate" data-i18n="Icon">Icon</span></a>
        </li>
        <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="tag"></i><span
                    class="menu-title text-truncate" data-i18n="Service">Service</span></a>
            <ul class="menu-content">
                <li class="{{ request()->routeIs('admin.service.index*') ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{route('admin.service.index')}}"><i data-feather="info"></i><span class="menu-title text-truncate"
                            data-i18n="Icon">Service Info</span></a>
                </li>
                <li class="{{ request()->routeIs('admin.service-card.index*') ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{route('admin.service-card.index')}}"><i data-feather="alert-octagon"></i><span class="menu-title text-truncate"
                            data-i18n="Icon">Service Card</span></a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="code"></i><span
            class="menu-title text-truncate" data-i18n="Footer">Footer</span></a>
    <ul class="menu-content">
        <li class="{{ request()->routeIs('admin.social.index*') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('admin.social.index')}}"><i data-feather="chrome"></i><span
                class="menu-title text-truncate" data-i18n="Social">Social</span></a>
        </li>
        <li class="{{ request()->routeIs('admin.product.index*') ? 'active' : ''}}"><a class="d-flex align-items-center" href="{{route('admin.product.index')}}"><i data-feather="package"></i><span
                class="menu-title text-truncate" data-i18n="Product">Product</span></a>
        </li>
    </ul>
</li>
<li class="navigation-header"><span data-i18n="Lainnya">Lainnya</span><i data-feather="more-horizontal"></i></li>
<li class="nav-item"><a
        class="d-flex align-items-center" href="#"><i
            data-feather="edit"></i><span class="menu-title text-truncate" data-i18n="Edit Profile">Edit
            Profile</span></a></li>
<li class="nav-item">
    <a class="d-flex align-items-center" href="#" id="logout-app">
        <i data-feather="log-out"></i>
        <span class="menu-title text-truncate" data-i18n="Logout">Logout</span>
    </a>
</li>
@endsection