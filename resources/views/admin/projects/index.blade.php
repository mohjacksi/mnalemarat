@extends('layouts.admin')
@section('content')
@can('project_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.projects.create') }}">
                إضافة مشروع
            </a>
        </div>
    </div>
@endcan
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


<div class="card">
    <div class="card-header">
        قائمة المشاريع
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Project">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.project.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.project.fields.project_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.project.fields.eng_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.project.fields.operating_permission_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.project.fields.the_contractor') }}
                        </th>
                        <th>
                            {{ trans('cruds.project.fields.date_of_commencement') }}
                        </th>
                        <th>
                            {{ trans('cruds.project.fields.project_duration') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $key => $project)
                        <tr data-entry-id="{{ $project->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $project->id ?? '' }}
                            </td>
                            <td>
                                {{ $project->project_name ?? '' }}
                            </td>
                            <td>
                                {{ $project->eng_name ?? '' }}
                            </td>
                            <td>
                                {{ $project->operating_permission_date ?? '' }}
                            </td>
                            <td>
                                {{ $project->the_contractor ?? '' }}
                            </td>
                            <td>
                                {{ $project->date_of_commencement ?? '' }}
                            </td>
                            <td>
                                {{ $project->project_duration ?? '' }}
                            </td>
                            <td>
                                @can('project_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.projects.show', $project->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('project_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.projects.edit', $project->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('project_delete')
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    order: [[ 1, 'desc' ]],
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

