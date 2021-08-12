@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Polling Unit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('newpollingunits.store') }}">
                        @csrf



                        <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('Ward') }}</label>

                            <div class="col-md-6">
                                <input id="ward_id" type="text" class="form-control @error('ward_id') is-invalid @enderror" ward_id="ward_id" value="{{ old('ward_id') }}" required autocomplete="ward_id" autofocus>

                                @error('ward_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('LGA ID') }}</label>

                            <div class="col-md-6">
                                <input id="lga_id" type="text" class="form-control @error('lga_id') is-invalid @enderror" lga_id="lga_id" value="{{ old('lga_id') }}" required autocomplete="lga_id" autofocus>

                                @error('lga_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('unique ward id') }}</label>

                            <div class="col-md-6">
                                <input id="uniquewardid" type="text" class="form-control @error('uniquewardid') is-invalid @enderror" uniquewardid="uniquewardid" value="{{ old('uniquewardid') }}" required autocomplete="uniquewardid" autofocus>

                                @error('uniquewardid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('uniqid ward number') }}</label>

                            <div class="col-md-6">
                                <input id="unique_ward_number" type="text" class="form-control @error('unique ward number') is-invalid @enderror" unique ward number="unique ward number" value="{{ old('unique_ward_number') }}" required autocomplete="unique ward number" autofocus>

                                @error('unique_ward_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('polling unit name') }}</label>

                            <div class="col-md-6">
                                <input id="polling_unit_name" type="text" class="form-control @error('polling_unit_name') is-invalid @enderror" polling_unit_name="polling_unit_name" value="{{ old('polling_unit_name') }}" required autocomplete="polling_unit_name" autofocus>

                                @error('polling_unit_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('polling unit description') }}</label>

                            <div class="col-md-6">
                                <input id="polling_unit_description" type="text" class="form-control @error('polling_unit_description') is-invalid @enderror" polling_unit_description="polling_unit_description" value="{{ old('polling_unit_description') }}" required autocomplete="polling_unit_description" autofocus>

                                @error('polling_unit_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lat" class="col-md-4 col-form-label text-md-right">{{ __('Lat') }}</label>

                            <div class="col-md-6">
                                <input id="lat" type="text" class="form-control @error('lat') is-invalid @enderror" lat="lat" value="{{ old('lat') }}" required autocomplete="lat" autofocus>

                                @error('lat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="long" class="col-md-4 col-form-label text-md-right">{{ __('Long') }}</label>

                            <div class="col-md-6">
                                <input id="long" type="text" class="form-control @error('long') is-invalid @enderror" long="long" value="{{ old('long') }}" required autocomplete="long" autofocus>

                                @error('long')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="lat" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>

                            <div class="col-md-6">
                                <input id="entered_by_user" type="text" class="form-control @error('entered_by_user') is-invalid @enderror" entered_by_user="entered_by_user" value="{{ old('entered_by_user') }}" required autocomplete="entered_by_user" autofocus>

                                @error('entered_by_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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
