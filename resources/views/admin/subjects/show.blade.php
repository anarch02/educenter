@extends('layouts.app')

@section('title', 'Subjects')

@section('content')

    <!-- ROW-1 OPEN -->
    <div class="row justify-content-center">
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
                                <h5 class="mb-1 text-dark fw-semibold">{{ $subject->name }}</h5>
                            </a>
                            <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{ __('app.subject') }}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('app.subject') }}</h3>
                </div>
                <div class="card-body">
                    <div class="">
                        <ul class="list-group">
                            @foreach ($subject->groups as $group)
                            <li class="list-group-item justify-content-between">
                                <a href="{{ route('groups.show', $group->id) }}">{{ $group->name }}
                                <span class="badgetext badge bg-primary rounded-pill">
                                    {{ $group->subject->name }}
                                </span>
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


@endsection


