@extends('layouts.app')

@section('title', isset($student) ? 'Edit Student' : 'Create Student')

@section('content')

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($student) ? 'Edit Student' : 'Create Student' }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($student) ? route('students.update', $student->id ) : route('students.store') }}" method="POST">
                        @csrf
                        @isset($student)
                            @method('PUT')
                        @endisset

                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        

                        <div class="form-group">
                            <label class="form-label"> {{__('app.branch')}} </label>
                            <select name="branch_id" class="form-control @error('branch_id') mb-4 is-invalid state-invalid @enderror form-select select2" data-bs-placeholder="Select Country">
                                @foreach ($branches as $item)
                                <option @isset($student)
                                    @if ($student->branch_id == $item->id)
                                        selected
                                    @endif
                                @endisset value="{{ $item->id }}">{{ $item->name }}</option>                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" @isset($student)
                                value="{{ $student->name }}"
                            @endisset class="form-control @error('name') mb-4 is-invalid state-invalid @enderror" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" @isset($student)
                                value="{{ $student->email }}"
                            @endisset class="form-control @error('email') mb-4 is-invalid state-invalid @enderror" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" @isset($student)
                                value="{{ $student->phone }}"
                            @endisset class="form-control @error('phone') mb-4 is-invalid state-invalid @enderror" id="phone" name="phone" required>
                        </div>

                    

                        <button type="submit" class="btn btn-primary">
                            {{ isset($student) ? 'Update Student' : 'Save Student' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection
