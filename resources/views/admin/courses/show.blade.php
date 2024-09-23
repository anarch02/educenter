@extends('layouts.app')

@section('title', 'Subjects')

@section('content')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">{{ $course->name }}</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">{{ __('app.courses') }}</a></li>
                <li class="breadcrumb-item" aria-current="page">{{ __('app.show') }}</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $course->name }}</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->


    <!-- ROW-1 OPEN -->
    <div class="row justify-content-center">
        @if (session('message'))
            <div class="alert alert-warning">
                {{ __('messages.'.session('message'), ['item' => __('app.course')]) }}
            </div>
        @endif

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
                            <a href="{{ route('courses.index') }}">
                                <h5 class="mb-1 text-dark fw-semibold">{{ $course->name }}</h5>
                            </a>
                            <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{ __('app.course') }}</p>
                        </div>
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
                    <x-time-table :object="$course->timetable"></x-time-table>
                </div>
            </div>
        </div>
    </div>


@endsection


