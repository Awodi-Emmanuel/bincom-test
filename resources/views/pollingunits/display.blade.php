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
                   <div class="col-md-6">
                       <select name="state" id="state" class="form-control">

                   <option selected>select state</option>
                    @foreach ($pollingunits  as $pollingunit)
                           <option value="{{ $pollingunit->polling_unit_name }}">
                           {{ $pollingunit->polling_unit_name}}
                       </option>
                       @endforeach

                    </select>
                   </div>
                <div class="col-md-6">
                    <select name="party_score" id="" class="form-control">
                        <option selected="false">
                            Party Score
                        </option>
                    </select>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="lga_id"]').on('change',function(){
               var stateID = jQuery(this).val();
               if(stateID)
               {
                  jQuery.ajax({
                     url : 'pollingunits/result/' +stateID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="party_score"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="party_score"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="party_score"]').empty();
               }
            });
    });
    </script>

@endsection
