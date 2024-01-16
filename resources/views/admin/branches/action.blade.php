@extends('layouts.app')

@section('title', 'Branches')


@section('content')

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($branch) ? 'Edit' : 'Create new' }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($branch) ? route('branches.update', $branch->id ) : route('branches.store') }}" method="POST">
                        @csrf
                        @isset($branch)
                            @method('PUT')
                        @endisset

                        <div class="form-group">
                            <label class="form-label"> {{__('app.region')}} </label>
                            <select name="region_id" class="form-control @error('region_id') mb-4 is-invalid state-invalid @enderror form-select select2" data-bs-placeholder="Select Country">
                                @foreach ($regions as $item)
                                <option @isset($branch)
                                    @if ($branch->region_id == $item->id)
                                        selected
                                    @endif
                                @endisset value="{{ $item->id }}">{{ $item->name }}</option>                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label"> {{__('app.city')}} </label>
                            <select name="city_id" class="form-control @error('city_id') mb-4 is-invalid state-invalid @enderror form-select select2" data-bs-placeholder="Select Country">
                                @foreach ($cities as $item)
                                <option @isset($branch)
                                    @if ($branch->city_id == $item->id)
                                        selected
                                    @endif
                                @endisset value="{{ $item->id }}">{{ $item->name }}</option>                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" @isset($branch)
                                value="{{ $branch->name }}"
                            @endisset class="form-control @error('name') mb-4 is-invalid state-invalid @enderror" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" @isset($branch)
                                value="{{ $branch->address }}"
                            @endisset class="form-control @error('address') mb-4 is-invalid state-invalid @enderror" id="address" name="address" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('app.phone') }}</label>
                            <input type="text" @isset($branch)
                                value="{{ $branch->phone }}"
                            @endisset class="form-control @error('phone') mb-4 is-invalid state-invalid @enderror" id="phone" value="+998" name="phone" required>
                        </div>


                        <button type="submit" class="btn btn-primary">
                            {{ isset($branch) ? __('app.update') : __('app.save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->


@endsection


