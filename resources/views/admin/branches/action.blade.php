@extends('layouts.app')

@section('title', 'Branches')


@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">{{ isset($branch) ? $branch->name : __('app.create') }}</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('branches.index') }}">{{ __('app.branches') }}</a></li>
                <li class="breadcrumb-item {{ isset($branch) ? '' : 'active' }}" aria-current="page">{{ isset($branch) ? __('app.edit') : __('app.create') }}</li>
                @isset($branch)
                <li class="breadcrumb-item active" aria-current="page">{{ $branch->name }}</li>
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



    <x-pages.action :title="isset($branch) ? __('app.edit') : __('app.create')" >
        <x-form class="index" :route="isset($branch) ? route('branches.update', $branch->id ) : route('branches.store')">
            @csrf
            @isset($branch)
                @method('PUT')
            @endisset

            @if (isset($branch))
                <x-form.select type="form-select" :collection="$regions" :name="'region_id'" :object="$branch" :label="'region'" />
                <x-form.select type="form-select" :collection="$cities" :name="'city_id'" :object="$branch" :label="'city'" />
                <x-form.input :type="'text'" :name="'name'"  :object="$branch" />
                <x-form.input :type="'text'" :name="'address'"  :object="$branch"  />
                <x-form.input :type="'text'" :name="'phone'" :object="$branch"  />
            @else
                <x-form.select :collection="$regions" :name="'region_id'" :label="'region'" />
                <x-form.select :collection="$cities" :name="'city_id'" :label="'city'" />
                <x-form.input :type="'text'" :name="'name'" />
                <x-form.input :type="'text'" :name="'address'" />
                <x-form.input :type="'text'" :name="'phone'" />
            @endif

            <button class="btn btn-{{ isset($branch) ? 'warning' : 'primary' }}" type="submit">{{ isset($branch) ? __('app.edit') : __('app.create') }}</button>
        </x-form>
    </x-pages.action>

@endsection


