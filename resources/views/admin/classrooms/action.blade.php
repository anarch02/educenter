@extends('layouts.app')

@section('title', __('app.class_rooms'))


@section('content')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">{{ isset($class_room) ? $class_room->name : __('app.create') }}</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('class_rooms.index') }}">{{ __('app.class_rooms') }}</a></li>
                <li class="breadcrumb-item {{ isset($class_room) ? '' : 'active' }}" aria-current="page">{{ isset($class_room) ? __('app.edit') : __('app.create') }}</li>
                @isset($class_room)
                <li class="breadcrumb-item active" aria-current="page">{{ $class_room->name }}</li>
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


<x-pages.action :title="isset($class_rooms) ? __('app.edit') : __('app.create')" >
    <x-form class="index" :route="isset($class_rooms) ? route('class_rooms.update', $class_rooms->id ) : route('class_rooms.store')">
        @csrf
        @isset($class_rooms)
            @method('PUT')
        @endisset


        <div class="form-group">
            <label class="form-label"> {{__('app.branch')}} </label>
            <select name="branch_id" class="form-control @error('branch_id') mb-4 is-invalid state-invalid @enderror form-select select2" data-bs-placeholder="Select Country">
                @foreach ($branches as $item)
                <option @isset($class_room)
                    @if ($class_room->branch_id == $item->id)
                        selected
                    @endif
                @endisset value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="name">{{ __('app.name') }}</label>
            <input type="text" @isset($class_room)
                value="{{ $class_room->name }}"
            @endisset class="form-control @error('name') mb-4 is-invalid state-invalid @enderror" id="name" name="name" required>
        </div>

        <button class="btn btn-{{ isset($class_rooms) ? 'warning' : 'primary' }}" type="submit">{{ isset($class_rooms) ? __('app.edit') : __('app.create') }}</button>
    </x-form>
</x-pages.action>

@endsection


