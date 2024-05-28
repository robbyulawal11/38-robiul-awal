@extends('template/app')
@section('content')
    <h1 class="text-center mb-3">Edit User</h1>
    <form class="container d-flex flex-column justify-content-center mb-5" action="{{ route('user.update', $data->id) }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class=" d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" for="name">Name
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ $data->name }}">
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" for="email">Email
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ $data->email }}">
                </label>
            </div>
        </div>
        <div class=" d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" name="role">Role
                    <select class="form-control @error('role') is-invalid @enderror" name="role">
                        <option>Choice role</option>
                        <option value="admin" @selected('admin' == $data->role)>Admin</option>
                        <option value="user" @selected('user' == $data->role)>User</option>
                    </select>
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="position" for="position">Position
                    <select class="form-control @error('position') is-invalid @enderror" name="position">
                        <option>Choice Position</option>
                        <option value="masseur" @selected('masseur' == $data->position)>Masseur</option>
                        <option value="masseus" @selected('masseus' == $data->position)>Masseus</option>
                    </select>
                </label>
            </div>
        </div>
        <div class=" d-flex gap-5">
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
                <label class="w-100" id="age" for="age">Age
                    <input type="integer" class="form-control @error('age') is-invalid @enderror" name="age"
                        value="{{ $data->age }}">
                </label>
            </div>
        </div>
        <div class=" d-flex gap-5">
            <div class="form-group w-100">
                <label class="w-100" id="phone" for="phone">Phone
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                        value="{{ $data->phone }}">
                </label>
            </div>
            <div class="form-group w-100">
                <label class="w-100" id="salary" for="salary">Salary
                    <input type="integer" class="form-control @error('salary') is-invalid @enderror" name="salary"
                        value="{{ $data->salary }}">
                </label>
            </div>
        </div>
        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
@endsection
