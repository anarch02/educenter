@extends('layouts.app')

@section('title', __('app.courses'))


@section('content')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">{{ isset($course) ? $course->name : __('app.create') }}</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">{{ __('app.courses') }}</a></li>
                <li class="breadcrumb-item {{ isset($course) ? '' : 'active' }}" aria-current="page">{{ isset($course) ? __('app.edit') : __('app.create') }}</li>
                @isset($course)
                <li class="breadcrumb-item active" aria-current="page">{{ $course->name }}</li>
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


<x-pages.action :title="isset($course) ? __('app.edit') : __('app.create')" >
    <x-form class="index" :route="isset($course) ? route('courses.update', $course->id ) : route('courses.store')">
        @csrf
        @isset($course)
            @method('PUT')
        @endisset


        <div class="form-group">
            <label class="form-label"> {{__('app.subject')}} </label>
            <select name="subject_id" class="form-control @error('subject_id') mb-4 is-invalid state-invalid @enderror form-select select2" data-bs-placeholder="Select Country">
                @foreach ($subjects as $item)
                <option @isset($course)
                    @if ($course->subject_id == $item->id)
                        selected
                    @endif
                @endisset value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="name">{{ __('app.name') }}</label>
            <input type="text" @isset($course)
                value="{{ $course->name }}"
            @endisset class="form-control @error('name') mb-4 is-invalid state-invalid @enderror" id="name" name="name" required>
        </div>

        <button class="btn btn-{{ isset($courses) ? 'warning' : 'primary' }}" type="submit">{{ isset($courses) ? __('app.edit') : __('app.create') }}</button>
    </x-form>
</x-pages.action>

@endsection


