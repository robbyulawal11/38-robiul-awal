@extends('template/app')
@section('content')
    <h1 class="text-center mb-3">Edit Appointment</h1>
    <form class="container d-flex flex-column justify-content-center mb-5"
        action="{{ route('appointment.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" for="name">Name
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ $data->name }}">
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" name="gender">Gender
                    <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                        <option>Choice Gender</option>
                        <option value="male" @selected('male' == $data->gender)>Male</option>
                        <option value="female" @selected('female' == $data->gender)>Female</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" id="service" for="service">Service
                    <select class="form-control @error('service') is-invalid @enderror" name="service">
                        <option>Choice Service</option>
                        <option value="sport massase" @selected('sport massase' == $data->service)>Sport Massase</option>
                        <option value="sport injury" @selected('sport injury' == $data->service)>Sport Injury</option>
                        <option value="exercise therapy" @selected('exercise therapy' == $data->service)>Exercise Therapy</option>
                    </select>
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="therapist_id" for="therapist_id">Therapist
                    <select type="text" class="form-control @error('therapist_id') is-invalid @enderror"
                        name="therapist_id">
                        <option>Pilih Kategori</option>
                        @foreach ($user as $item)
                            <option value="{{ $item->id }}" @selected($item->id == $data->therapist_id)>{{ $item->name }}</option>
                        @endforeach

                    </select>
                </label>
            </div>
        </div>
        <div class="d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" id="location" for="location">Location
                    <select type="text" class="form-control @error('location') is-invalid @enderror" name="location">
                        <option>Choice Location</option>
                        <option value="unit 1" @selected('unit 1' == $data->location)>Unit 1 - Warung Bata</option>
                        <option value="unit 2" @selected('unit 2' == $data->location)>Unit 2 - Karang Malang</option>
                    </select>
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="phone" for="phone">Phone
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                        value="{{ $data->phone }}">
                </label>
            </div>
        </div>
        <div class="d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" id="event_date" for="event_date">Date
                    <input type="date" class="form-control @error('event_date') is-invalid @enderror" name="event_date"
                        value="{{ $data->event_date }}">
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="start_time" for="start_time">Time
                    <input type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time"
                        value="{{ $data->start_time }}">
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="w-100" id="complaint" for="complaint">Complaint
                <textarea type="text" class="form-control @error('complaint') is-invalid @enderror" name="complaint">{{ $data->complaint }}</textarea>
            </label>
        </div>
        <div class="d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" id="status" for="status">Status
                    <select type="text" class="form-control @error('status') is-invalid @enderror" name="status">
                        <option>Choice Status</option>
                        <option value="new" @selected('new' == $data->status)>New</option>
                        <option value="on progress" @selected('on progress' == $data->status)>On Progress</option>
                        <option value="done" @selected('done' == $data->status)>Done</option>
                    </select>
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="price" for="price">Price
                    <input type="integer" class="form-control @error('price') is-invalid @enderror" name="price"
                        value="{{ $data->price }}">
                </label>
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('appointment.index') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
@endsection
