<!-- resources/views/event/create.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Event') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('event.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="nama_event" class="form-label">Nama Event:</label>
                                <input id="nama_event" type="text"
                                    class="form-control @error('nama_event') is-invalid @enderror" name="nama_event"
                                    value="{{ old('nama_event') }}" required>
                                @error('nama_event')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi:</label>
                                <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
