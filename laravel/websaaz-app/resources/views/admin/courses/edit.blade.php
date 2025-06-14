@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-6">
        <!--begin::Quick Example-->
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Edit Course</div>
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{ route('courses.update',$course->id) }}" method="post" enctype="multipart/form-data">
                @csrf @method('PUT')
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}" >
                        @error('title')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" >{{ $course->description }}</textarea>
                        @error('description')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="duration" value="{{ $course->duration }}" name="duration" >
                        @error('duration')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="mentor" class="form-label">Mentor</label>
                        <input type="text" class="form-control" id="mentor" value="{{ $course->mentor }}" name="mentor" >
                        @error('mentor')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="fees" class="form-label">Fees</label>
                        <input type="text" class="form-control" id="fees" value="{{ $course->fees }}" name="fees" >
                        @error('fees')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <img src="{{ asset($course->image) }}" alt="Course Image" width="100" class="img-thumbnail me-2">
                        <input type="file" class="form-control" id="image" name="image">
                        <label class="input-group-text" for="image">Upload Image</label>
                        @error('image')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        
                    </div>
                </div>
                <!--end::Body-->

                <!--begin::Footer-->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!--end::Footer-->
            </form>

            <!--end::Form-->
        </div>
        <!--end::Quick Example-->
        <!--begin::Input Group-->
    @endsection
