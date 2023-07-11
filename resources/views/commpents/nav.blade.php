@extends('layouts.app')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/ugive-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-wrap" id="navbarSupportedContent">
            <form class="d-flex search-form">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>

            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="ugive-btn" href="#">Create Donation</a>
                </li>
                <li class="nav-item">
                    <a class="ugive-btn" href="#">Create Request</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item ">
                        <img class="" src="assets/icons/message.png">
                    </li>
                    <li class="nav-item ">
                        <img class="" src="{{asset('assets/icons/noti.png')}}">
                    </li>
                    <li class="nav-item ">
                        <img class="" src="assets/icons/help.png">
                    </li>
                    <a href="{{url('/logout')}}">{{Auth::user()->name}}</a>
                @else
                    <li class="nav-item">
                        <a class="ugive-btn" href="{{url('/login')}}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@endsection
