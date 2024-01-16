@extends('layouts.app')

@section('title', isset($teacher) ? 'Edit Teacher' : 'Create Teacher')

@section('content')

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($teacher) ? 'Edit Teacher' : 'Create Teacher' }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($teacher) ? route('teachers.update', $teacher->id ) : route('teachers.store') }}" method="POST">
                        @csrf
                        @isset($teacher)
                            @method('PUT')
                        @endisset

                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        

                        <div class="form-group">
                            <label class="form-label"> {{__('app.branch')}} </label>
                            <select name="branch_id" class="form-control @error('branch_id') mb-4 is-invalid state-invalid @enderror form-select select2" data-bs-placeholder="Select Country">
                                @foreach ($branches as $item)
                                <option @isset($teacher)
                                    @if ($teacher->branch_id == $item->id)
                                        selected
                                    @endif
                                @endisset value="{{ $item->id }}">{{ $item->name }}</option>                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" @isset($teacher)
                                value="{{ $teacher->name }}"
                            @endisset class="form-control @error('name') mb-4 is-invalid state-invalid @enderror" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" @isset($teacher)
                                value="{{ $teacher->surname }}"
                            @endisset class="form-control @error('surname') mb-4 is-invalid state-invalid @enderror" id="surname" name="surname" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" @isset($teacher)
                                value="{{ $teacher->email }}"
                            @endisset class="form-control @error('email') mb-4 is-invalid state-invalid @enderror" id="email" name="email" required>
                        </div>

                    

                        <button type="submit" class="btn btn-primary">
                            {{ isset($teacher) ? 'Update Teacher' : 'Save Teacher' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection
