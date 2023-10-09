<div class="crm-sidebar">
    <button class="sidebar-close-btn"><i class="fa-solid fa-xmark"></i></button>
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </div>
    <ul class="sidebar-list">
        <li>
            <a href="{{ url('/dashboard') }}" class="{{ Request::is('dashboard*') ? 'active' : ''}}">
                <div class="sidebar-list-icon">
                    <img src="{{ asset('images/dashboard-blue-icon.svg')}}" class="blue-icon" alt="">
                    <img src="{{ asset('images/dashboard-white-icon.svg')}}" class="white-icon" alt="">
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/properties') }}" class="{{ Request::is('properties*') ? 'active' : ''}}">
                <div class="sidebar-list-icon">
                    <img src="{{ asset('images/properties-blue-icon.svg')}}" class="blue-icon" alt="">
                    <img src="{{ asset('images/properties-white-icon.svg')}}" class="white-icon" alt="">
                </div>
                <span>properties</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/brokers-list') }}" class="{{ Request::is('brokers-list*') ? 'active' : ''}}">
                <div class="sidebar-list-icon">
                    <img src="{{ asset('images/broker-blue-icon.svg')}}" class="blue-icon" alt="">
                    <img src="{{ asset('images/broker-white-icon.svg')}}" class="white-icon" alt="">
                </div>
                <span>brokers list</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/profile') }}" class="{{ Request::is('profile*') ? 'active' : ''}}">
                <div class="sidebar-list-icon">
                    <img src="{{ asset('images/profile-blue-icon.svg')}}" class="blue-icon" alt="">
                    <img src="{{ asset('images/profile-white-icon.svg')}}" class="white-icon" alt="">
                </div>
                <span>my profile</span>
            </a>
        </li>
    </ul>
</div>