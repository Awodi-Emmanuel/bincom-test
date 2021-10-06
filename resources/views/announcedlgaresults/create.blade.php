@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Polling Unit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('announcedlgaresults.storeResult') }}">
                        @csrf



                        <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('Lga Name') }}</label>

                            <div class="col-md-6">
                                <input id="lga_name" type="text" class="form-control @error('lga_name') is-invalid @enderror" lga_name="lga_name" value="{{ old('lga_name') }}" required autocomplete="lga_name" autofocus>

                                @error('ward_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

               <div class="card-body">
                   <div class="col-md-6">
                       <select name="state" id="state" class="form-control">

                   <option selected>select state</option>
                    @foreach ($announcedlgaresults as $announcedlgaresult)
                           <option value="{{ $announcedlgaresult->party_abbreviation}}" key="">
                           {{ $announcedlgaresult->party_abbreviation}}
                       </option>
                       @endforeach

                    </select>
                   </div>
                <div class="col-md-6">
                    <select name="party_name" id="" class="form-control">
                        <option selected="false">
                            Party name
                        </option>
                    </select>
                </div>

                        <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('party score') }}</label>

                            <div class="col-md-6">
                                <input id="party_score" type="text" class="form-control @error('party_score') is-invalid @enderror" party_score="party_score" value="{{ old('party_score') }}" required autocomplete="party_score" autofocus>

                                @error('party_score')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="entered_by_user" type="text" class="form-control @error('unique ward number') is-invalid @enderror" unique ward number="unique ward number" value="{{ old('entered_by_user') }}" required autocomplete="unique ward number" autofocus>

                                @error('entered_by_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('User Ip') }}</label>

                            <div class="col-md-6">
                                <input id="user_ip_address" type="text" class="form-control @error('user_ip_address') is-invalid @enderror" user_ip_address="user_ip_address" value="{{ old('user_ip_address') }}" required autocomplete="user_ip_address" autofocus>

                                @error('user_ip_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="unique ward number" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date_entered" type="text" class="form-control @error('date_entered') is-invalid @enderror" date_entered="date_entered" value="{{ old('date_entered') }}" required autocomplete="date_entered" autofocus>

                                @error('date_entered')
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
