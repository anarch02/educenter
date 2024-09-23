@extends('layouts.app')

@section('title', 'Branches')

@section('content')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">{{ $branch->name }}</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('branches.index') }}">{{ __('app.branches') }}</a></li>
                <li class="breadcrumb-item" aria-current="page">{{ __('app.show') }}</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $branch->name }}</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->


    <!-- ROW-1 OPEN -->
    <div class="row">

        @if (session('message'))
            <div class="alert alert-warning">
                {{ __('messages.'.session('message'), ['item' => __('app.branch')]) }}
            </div>
        @endif


        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ __('app.main') }}</div>
                </div>
                <div class="card-body">
                    <div class="text-center chat-image mb-5">
                        <div class="main-chat-msg-name">
                            <a href="profile.html">
                                <h5 class="mb-1 text-dark fw-semibold">{{ $branch->name }}</h5>
                            </a>
                            <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{ __('app.branch') }}</p>
                        </div>
                    </div>
                    <div>
                        <ul class="list-group no-margin">
                            <li class="list-group-item d-flex ps-3">
                                <div class="social social-profile-buttons me-2">
                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-mail"></i></a>
                                </div>
                                <a href="javascript:void(0)" class="my-auto">support@demo.com</a>
                            </li>
                            <li class="list-group-item d-flex ps-3">
                                <div class="social social-profile-buttons me-2">
                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-map"></i></a>
                                </div>
                                <a href="javascript:void(0)" class="my-auto">
                                    {{ $branch->address }}
                                </a>
                            </li>
                            <li class="list-group-item d-flex ps-3">
                                <div class="social social-profile-buttons me-2">
                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-phone"></i></a>
                                </div>
                                <a href="javascript:void(0)" class="my-auto">
                                    {{ $branch->phone }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('app.branch_structure') }}</h3>
                </div>
                <div class="card-body">
                    <div class="">
                        <ul class="list-group">
                            <li class="list-group-item justify-content-between">
                                Количество аудиторий
                                <span class="badgetext badge bg-primary rounded-pill">
                                    {{ count($branch->class_rooms) }}
                                </span>
                            </li>
                            <li class="list-group-item justify-content-between">
                                Количество студентов
                                <span class="badgetext badge bg-danger rounded-pill">
                                    {{ count($branch->students) }}
                                </span>
                            </li>
                            <li class="list-group-item justify-content-between">
                                Количество учителей
                                <span class="badgetext badge bg-success rounded-pill">
                                    {{ count($branch->teachers) }}
                                </span>
                            </li>
                            <li class="list-group-item justify-content-between">
                                Количество курсов
                                <span class="badgetext badge bg-warning rounded-pill">0</span>
                            </li>
                            <li class="list-group-item justify-content-between">
                                Количество групп
                                <span class="badgetext badge bg-info rounded-pill">
                                    {{ count($branch->groups) }}
                                </span>
                            </li>
                            <li class="list-group-item justify-content-between">
                                Количество предметов
                                <span class="badgetext badge bg-secondary rounded-pill">0</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 CLOSED -->

    <div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">{{ __('app.timetable') }}</h1>
            </div>
            <div class="card-body">
                <x-time-table :object="$branch->timetable" ></x-time-table>
            </div>
        </div>
    </div>
    </div>

@endsection


