@extends('layouts.app')

@section('title', 'Branches')

@section('content')

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ __('app.main') }}</div>
                </div>
                <div class="card-body">
                    <div class="text-center chat-image mb-5">
                        {{-- <div class="avatar avatar-xxl chat-profile mb-3 brround">
                            <a class="" href="profile.html"><img alt="avatar" src="../assets/images/users/7.jpg" class="brround"></a>
                        </div> --}}
                        <div class="main-chat-msg-name">
                            <a href="profile.html">
                                <h5 class="mb-1 text-dark fw-semibold">{{ $group->name }}</h5>
                            </a>
                            <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{ __('app.group') }}</p>
                        </div>
                    </div>
                    <div>
                        <ul class="list-group no-margin">
                            <li class="list-group-item d-flex ps-3">
                                <div class="social social-profile-buttons me-2">
                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-book"></i></a>
                                </div>
                                <a href="javascript:void(0)" class="my-auto">
                                    {{ $group->subject->name}}
                                </a>
                            </li>
                            <li class="list-group-item d-flex ps-3">
                                <div class="social social-profile-buttons me-2">
                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-user"></i></a>
                                </div>
                                <a href="javascript:void(0)" class="my-auto">
                                    {{ $group->teacher->name }}
                                </a>
                            </li>
                            <li class="list-group-item d-flex ps-3">
                                <div class="social social-profile-buttons me-2">
                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-phone"></i></a>
                                </div>
                                <a href="javascript:void(0)" class="my-auto">
                                    {{ $group->start }}
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
                    <h3 class="card-title">{{ __('app.group_structure') }}</h3>
                </div>
                <div class="card-body">
                    <div class="">
                        <ul class="list-group">
                            @foreach ($group->students as $student)
                            <li class="list-group-item justify-content-between">
                                {{ $student->name }}
                                <a href="{{ route('students.show', $student->id) }}" class="badgetext badge bg-primary rounded-pill">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </li>
                            @endforeach
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
                    <x-time-table :object="$group->timetable" ></x-time-table>
                </div>
            </div>
        </div>
    </div>


@endsection


