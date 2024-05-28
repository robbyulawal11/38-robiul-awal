@extends('template/app')
@section('content')
    <h1 class="text-center mb-3">Create Appointment</h1>
    <form class="container d-flex flex-column justify-content-center mb-5" action="{{ route('appointment.store') }}"
        method="POST">
        @csrf
        <div class=" d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" for="name">Name
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}">
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" name="gender">Gender
                    <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                        <option>Choice Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </label>
            </div>
        </div>
        <div class=" d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" id="service" for="service">Service
                    <select class="form-control @error('service') is-invalid @enderror" name="service">
                        <option>Choice Service</option>
                        <option value="sport massase">Sport Massase</option>
                        <option value="sport injury">Sport Injury</option>
                        <option value="exercise therapy">Exercise Therapy</option>
                    </select>
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="therapist_id" for="therapist_id">Therapist
                    <select type="text" class="form-control @error('therapist_id') is-invalid @enderror"
                        name="therapist_id">
                        <option>Choice Therapist</option>
                        @foreach ($user as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach

                    </select>
                </label>
            </div>
        </div>
        <div class=" d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" id="location" for="location">Location
                    <select type="text" class="form-control @error('location') is-invalid @enderror" name="location">
                        <option>Choice Location</option>
                        <option value="unit 1">Unit 1 - Warung Bata</option>
                        <option value="unit 2">Unit 2 - Karang Malang</option>
                    </select>
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="phone" for="phone">Phone
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                        value="{{ old('phone') }}">
                </label>
            </div>
        </div>
        <div class=" d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" id="event_date" for="event_date">Date
                    <input type="date" class="form-control @error('event_date') is-invalid @enderror" name="event_date"
                        value="{{ old('event_date') }}">
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="start_time" for="start_time">Time
                    <input type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time"
                        value="{{ old('start_time') }}">
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="w-100" id="complaint" for="complaint">Complaint
                <textarea type="text" class="form-control @error('complaint') is-invalid @enderror" name="complaint"
                    value="{{ old('complaint') }}"></textarea>
            </label>
        </div>
        <div class=" d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" id="status" for="status">Status
                    <select type="text" class="form-control @error('status') is-invalid @enderror" name="status">
                        <option>Choice Status</option>
                        <option value="new">New</option>
                        <option value="on progress">On Progress</option>
                        <option value="done">Done</option>
                    </select>
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="price" for="price">Price
                    <input type="integer" class="form-control @error('price') is-invalid @enderror" name="price"
                        value="{{ old('price') }}">
                </label>
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('appointment.index') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
@endsection
