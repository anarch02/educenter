@extends('layouts.app')

@section('title', 'Subjects')


@section('content')

    <!-- Row -->
    <div class="row center">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($subject) ? 'Edit' : 'Create new' }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($subject) ? route('subjects.update', $subject->id ) : route('subjects.store') }}" method="POST">
                        @csrf
                        @isset($subject)
                            @method('PUT')
                        @endisset

                        <div class="form-group">
                            <label for="name">{{ __('app.name') }}</label>
                            <input type="text" @isset($subject)
                                value="{{ $subject->name }}"
                            @endisset class="form-control @error('name') mb-4 is-invalid state-invalid @enderror" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('app.description') }}</label>
                            <textarea class="form-control @error('description') mb-4 is-invalid state-invalid @enderror" id="description" name="description" required>@isset($subject){{ $subject->description }}@endisset</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ isset($subject) ? __('app.update') : __('app.save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->


@endsection
