<!-- resources/views/event/create.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Event') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('event.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="nama_event" class="form-label">Nama Event:</label>
                                <input type="text" name="nama_event" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi:</label>
                                <textarea name="deskripsi" class="form-control" required></textarea>
                            </div>

                            <a href="{{ route('event.index') }}" type="button" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
