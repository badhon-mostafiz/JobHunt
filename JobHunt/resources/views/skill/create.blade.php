@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Skillset</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('skill.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="skill" class="col-md-4 col-form-label text-md-right">Skill</label>

                            <div class="col-md-6">
                                <input id="skill" type="text" class="form-control @error('skill') is-invalid @enderror" name="skill" value="{{ old('skill') }}" required autocomplete="skill" autofocus>

                                @error('skill')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right">Level</label>

                            <div class="col-md-6">
                                <input id="level" type="text" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ old('level') }}" required autocomplete="level">

                                @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Skillset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection