@extends('layouts.main')

@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Individual Polling Units</h1>

    </div>
   <div class="row">


   <div class="card mx-auto">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <form method="GET" action="{{ route('pollingunits.index') }}">
                <div class="form-row align-items-center">
                  <div class="col">
                    <input type="search" name="search" class="form-control mb-2" id="inlineFormInput" placeholder="John Doe">
                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                  </div>
                </div>
              </form>
            </div>

            <div>


            </div>
        </div>
        </div>
        <div class="card-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Country Code</th>
      <th scope="col">Name</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pollingunits as $pollingunit)
    <tr>
      <th scope="row">{{ $pollingunit->polling_unit_id }}</th>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
   </div>


@endsection
