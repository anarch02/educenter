@extends('layouts.app')

@section('title', 'Subjects')


@section('content')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">{{ isset($subject) ? $subject->name : __('app.create') }}</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('subjects.index') }}">{{ __('app.subjects') }}</a></li>
                <li class="breadcrumb-item {{ isset($subject) ? '' : 'active' }}" aria-current="page">{{ isset($subject) ? __('app.edit') : __('app.create') }}</li>
                @isset($subject)
                <li class="breadcrumb-item active" aria-current="page">{{ $subject->name }}</li>
                @endisset
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!-- Row -->
    <div class="row center">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($subject) ? __('app.edit') : __('app.create') }}</h3>
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
