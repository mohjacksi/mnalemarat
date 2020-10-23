@extends('layouts.admin')
@section('content')
<div class="panel-body">
<form id="export" method="post" action="{{route('admin.report.export')}}">@csrf
    <div class="row">
        <div class="form-group col-md-3" style="margin-top: 15px;">
            <input form="export" name="type" value="projects" id="type" hidden>
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





@endsection
@section('scripts')
@parent
<script>

    function range_date(type) {
            if (type == 'on') {
                $('#date').removeAttr("disabled");
            } else {
                $('#date').attr("disabled", "disabled");
            }
        }

        $('#date').on('change', function () {
            if ($(this).val() == 2) {
                $('.range').removeAttr("readonly");
            } else {
                $('.range').attr("readonly", "readonly");
                $('.range').val('');
            }
        });

    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('project_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.projects.massDestroy') }}",
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
  let table = $('.datatable-Project:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection

