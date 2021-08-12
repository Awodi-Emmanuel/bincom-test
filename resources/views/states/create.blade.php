@extends('layouts.main')
@section('content')

      <div class="container mt-5">
         <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="card">
                  <div class="card-header">
                     <h2 class="text-success">Laravel Country State City Dependent Dropdown List with Ajax - Tutsmake.COM</h2>
                  </div>
                  <div class="card-body">
                     <form>
                        <div class="form-group">
                           <label for="country">State</label>
                           <select class="form-control" id="country-dropdown">
                              <option value="">Select State</option>
                              @foreach ($states as $state)
                              <option value="{{$state->state_id}}">
                                 {{$state->state_name}}
                              </option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="state">LGA</label>
                           <select class="form-control" id="state-dropdown">
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="city">City</label>
                           <select class="form-control" id="city-dropdown">
                           </select>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

@endsection