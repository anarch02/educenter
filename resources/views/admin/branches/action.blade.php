@extends('layouts.app')

@section('title', 'Branches')


@section('content')


    <x-pages.action :title="isset($branch) ? 'Edit' : 'Create new'" > 
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

        </x-form>
    </x-pages.action>

@endsection


