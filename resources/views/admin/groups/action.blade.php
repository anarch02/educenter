@extends('layouts.app')

@section('title', 'Groups')


@section('content')

    <!-- Row -->
    <div class="row center">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($group) ? 'Edit' : 'Create new' }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($group) ? route('groups.update', $group->id ) : route('groups.store') }}" method="POST">
                        @csrf
                        @isset($group)
                            @method('PUT')
                        @endisset

                        <div class="form-group">
                            <label class="form-label"> {{__('app.branch')}} </label>
                            <select name="city_id" class="form-control @error('city_id') mb-4 is-invalid state-invalid @enderror form-select select2" data-bs-placeholder="Select Country">
                                @foreach ($branches as $item)
                                <option @isset($group)
                                    @if ($group->branch_id == $item->id)
                                        selected
                                    @endif
                                @endisset value="{{ $item->id }}">{{ $item->name }}</option>                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">{{ __('app.name') }}</label>
                            <input type="text" @isset($group)
                                value="{{ $group->name }}"
                            @endisset class="form-control @error('name') mb-4 is-invalid state-invalid @enderror" id="name" name="name" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ isset($group) ? __('app.update') : __('app.save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->


@endsection


