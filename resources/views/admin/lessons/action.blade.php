@extends('layouts.app')

@section('title', 'lessons')


@section('content')

    <!-- Row -->
    <div class="row center">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($lesson) ? 'Edit' : 'Create new' }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($lesson) ? route('lessons.update', $lesson->id ) : route('lessons.store') }}" method="POST">
                        @csrf
                        @isset($lesson)
                            @method('PUT')
                        @endisset

                        <div class="form-lesson">
                            <label for="name">{{ __('app.name') }}</label>
                            <input type="text" @isset($lesson)
                                value="{{ $lesson->name }}"
                            @endisset class="form-control @error('name') mb-4 is-invalid state-invalid @enderror" id="name" name="name" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col form-lesson">
                                <label for="start_time">{{ __('app.start_time') }}</label>
                                <input type="text" @isset($lesson)
                                    value="{{ $lesson->start_time }}"
                                @endisset class="form-control @error('start_time') mb-4 is-invalid state-invalid @enderror" id="start_time" name="start_time" required>
                            </div>
    
                            <div class="col form-lesson">
                                <label for="end_time">{{ __('app.end_time') }}</label>
                                <input type="text" @isset($lesson)
                                    value="{{ $lesson->end_time }}"
                                @endisset class="form-control @error('end_time') mb-4 is-invalid state-invalid @enderror" id="end_time" name="end_time" required>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">
                            {{ isset($lesson) ? __('app.update') : __('app.save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->


@endsection


