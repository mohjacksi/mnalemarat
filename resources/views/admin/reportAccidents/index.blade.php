@extends('layouts.admin')
@section('content')
@can('report_accident_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.report-accidents.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.reportAccident.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="panel-body">
    <form id="export" method="post" action="{{route('admin.report.export')}}">@csrf
        <div class="row">
            <div class="form-group col-md-3" style="margin-top: 15px;">
                <input form="export" name="type" value="accidents" id="type" hidden>
                <label>حدد كيف تريد الحصول على التقرير
                </label>
                <select class="form-control" form="export" name="date" id="date">
                    <option value="0">الكل
                    </option>
                    <option value="1">اليوم</option>
                    <option value="2">حسب النطاق الزمني
                    </option>
                </select>
            </div>
            <div class="form-group col-md-3" style="margin-top: 15px;">
                <label for="start">تاريخ البداية</label>
                <input class="form-control range" type="date" form="export" name="start" id="start"
                readonly>
            </div>
            <div class="form-group col-md-3" style="margin-top: 15px;">
                <label for="start">تاريخ النهاية</label>
                <input class="form-control range" type="date" form="export" name="end" id="end"
                readonly>
            </div>

            <div class="form-group col-md-3" style="margin-top: 15px;">
                <label for="start">تصدير</label><br>

                <button style="width: 250px;" class="btn btn-primary" form="export" type="submit">
                                تصدير لإكسل
                 </button>

            </div>
        </div>
    </form>
    </div>

<div class="card">
    <div class="card-header">
        قائمة تقارير الحوادث
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ReportAccident">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.location') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.offender') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.offender_id_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.car_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.issuer') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.date_of_accident') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.accident_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.estimate_reference') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.estimate_date') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reportAccidents as $key => $reportAccident)
                        <tr data-entry-id="{{ $reportAccident->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $reportAccident->id ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->location ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->offender ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->offender_id_number ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->car_number ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->issuer ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->date_of_accident ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->accident_time ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->estimate_reference ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->estimate_date ?? '' }}
                            </td>
                            <td>
                                @can('report_accident_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.report-accidents.show', $reportAccident->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('report_accident_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.report-accidents.edit', $reportAccident->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('report_accident_delete')
                                    <form action="{{ route('admin.report-accidents.destroy', $reportAccident->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('report_accident_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.report-accidents.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-ReportAccident:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
