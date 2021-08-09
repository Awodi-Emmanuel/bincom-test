@extends('layouts.main')

@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">storeresults</h1>

    </div>
   <div class="container">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Create new result')}}
               </div>


               <div class="card-body">
                    <form method="POST" action="{{ route('pollingunits.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="party_abbreviation" class="col-md-4 col-form-label text-md-right">{{ __('PartyName') }}</label>

                            <div class="col-md-6">
                                <input id="party_abbreviation" type="text" class="form-control @error('party_abbreviation') is-invalid @enderror" name="party_abbreviation" value="{{ old('party_abbreviation') }}" required autocomplete="party_name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!-- the coppied row -->

                        <div class="form-group row">
                            <label for="entered_by_user" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="entered_by_user" type="text" class="form-control @error('entered_by_user') is-invalid @enderror" name="entered_by_user" value="{{ old('entered_by_user') }}" required autocomplete="entered_by_user" autofocus>

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
                                    {{ __('Register') }}
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
