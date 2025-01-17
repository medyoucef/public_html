@extends('master.back')
@section('styles')
	<link rel="stylesheet" href="{{asset('assets/back/css/datepicker.css')}}">
	
	<style>
	    
	    #dropdownMenuButton{
	            background-color: #5b841b8f;
    color: white;
	        
	    }
	</style>
@endsection
@section('content')



<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b>{{request()->input('type') ? request()->input('type') : __('All')}} {{ __('Orders') }}</b></h3>
                <div class="right">
                <!--<a class="btn btn-primary btn-sm" href="generate-pdf" target="_blank"><i class="fas fa-print"></i> {{ __('print') }}</a>-->
                <!--<a href="{{route('back.csv.order.export')}}" class="btn btn-info btn-sm d-inline-block">{{__('CSV Export')}}</a>-->

                  <!--<form class="d-inline-block" action="{{route('back.bulk.delete')}}" method="get">-->
                  <!--  <input type="hidden" value="" name="ids[]" id="bulk_delete">-->
                  <!--  <input type="hidden" value="orders" name="table">-->
                  <!--  <button class="btn btn-danger btn-sm">{{__('Delete')}}</button>-->
                  <!--</form>-->
                  
              </div>
              </div>
        </div>
    </div>

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">

  


			@include('alerts.alerts')
			<div class="gd-responsive-table">
				<table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">

					<thead>
						<tr>
              <!--<th> <input type="checkbox" data-target="order-bulk-delete" class="form-control bulk_all_delete"> </th>-->
              <th>{{ __('User') }}</th>
                            <th>رقم الجوال</th>

              <th>{{ __('Total Amount') }}</th>
              <th>الدفعة الأولي </th>
							<th> الدفعة الشهرية </th>
							<th>شهور التقسيط</th>
							<th>ايصاالات الدفع </th>
							<th>{{ __('Actions') }}</th>
						</tr>
					</thead>

					<tbody>
              @include('back.order.table',compact('datas'))
					</tbody>

				</table>
			</div>
		</div>
	</div>

</div>



{{-- STATUS MODAL --}}

<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

		<!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ __('Update Status?') }}</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
		</div>

		<!-- Modal Body -->
        <div class="modal-body" style="text-align:center">
			{{ __('You are going to update the status.') }} {{ __('Do you want proceed?') }}
		</div>

		<!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
            <a href="" class="btn btn-ok btn-success">{{ __('Update') }}</a>
		</div>

      </div>
    </div>
  </div>

{{-- STATUS MODAL ENDS --}}

{{-- DELETE MODAL --}}

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

  <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ __('Confirm Delete?') }}</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
  </div>

  <!-- Modal Body -->
      <div class="modal-body">
        {{ __('You are going to delete this order. All contents related with this order will be lost.') }} {{ __('Do you want to delete it?') }}
  </div>

  <!-- Modal footer -->
      <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
    <form action="" class="d-inline btn-ok" method="POST">

      @csrf
      @method('DELETE')
   <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>

    </form>
  </div>

    </div>
  </div>
</div>

{{-- DELETE MODAL ENDS --}}
@endsection
