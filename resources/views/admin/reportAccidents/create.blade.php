@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.reportAccident.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.report-accidents.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="location">{{ trans('cruds.reportAccident.fields.location') }}</label>
                <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" type="text" name="location" id="location" value="{{ old('location', '') }}">
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="offender">{{ trans('cruds.reportAccident.fields.offender') }}</label>
                <input class="form-control {{ $errors->has('offender') ? 'is-invalid' : '' }}" type="text" name="offender" id="offender" value="{{ old('offender', '') }}">
                @if($errors->has('offender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('offender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.offender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="offender_id_number">{{ trans('cruds.reportAccident.fields.offender_id_number') }}</label>
                <input class="form-control {{ $errors->has('offender_id_number') ? 'is-invalid' : '' }}" type="text" name="offender_id_number" id="offender_id_number" value="{{ old('offender_id_number', '') }}">
                @if($errors->has('offender_id_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('offender_id_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.offender_id_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="car_number">{{ trans('cruds.reportAccident.fields.car_number') }}</label>
                <input class="form-control {{ $errors->has('car_number') ? 'is-invalid' : '' }}" type="text" name="car_number" id="car_number" value="{{ old('car_number', '') }}">
                @if($errors->has('car_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('car_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.car_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="issuer">{{ trans('cruds.reportAccident.fields.issuer') }}</label>
                <input class="form-control {{ $errors->has('issuer') ? 'is-invalid' : '' }}" type="text" name="issuer" id="issuer" value="{{ old('issuer', '') }}">
                @if($errors->has('issuer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('issuer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.issuer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_accident">{{ trans('cruds.reportAccident.fields.date_of_accident') }}</label>
                <input class="form-control date {{ $errors->has('date_of_accident') ? 'is-invalid' : '' }}" type="text" name="date_of_accident" id="date_of_accident" value="{{ old('date_of_accident') }}">
                @if($errors->has('date_of_accident'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_accident') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.date_of_accident_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="accident_time">{{ trans('cruds.reportAccident.fields.accident_time') }}</label>
                <input class="form-control timepicker {{ $errors->has('accident_time') ? 'is-invalid' : '' }}" type="text" name="accident_time" id="accident_time" value="{{ old('accident_time') }}">
                @if($errors->has('accident_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('accident_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.accident_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="estimate_reference">{{ trans('cruds.reportAccident.fields.estimate_reference') }}</label>
                <input class="form-control {{ $errors->has('estimate_reference') ? 'is-invalid' : '' }}" type="text" name="estimate_reference" id="estimate_reference" value="{{ old('estimate_reference', '') }}">
                @if($errors->has('estimate_reference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('estimate_reference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.estimate_reference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="estimate_date">{{ trans('cruds.reportAccident.fields.estimate_date') }}</label>
                <input class="form-control date {{ $errors->has('estimate_date') ? 'is-invalid' : '' }}" type="text" name="estimate_date" id="estimate_date" value="{{ old('estimate_date') }}">
                @if($errors->has('estimate_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('estimate_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.estimate_date_helper') }}</span>
            </div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">بيان الاضرار</th>
                    <th scope="col">قيمة الاضرار</th>
                    <th scope="col">ملاحظات</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_1') ? 'is-invalid' : '' }}" type="text" name="damage_statement_1" id="damage_statement_1" value="{{ old('damage_statement_1', '') }}">
                        @if($errors->has('damage_statement_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_1') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_1') ? 'is-invalid' : '' }}" type="number" name="damage_value_1" id="damage_value_1" value="{{ old('damage_value_1', '') }}" step="0.01">
                        @if($errors->has('damage_value_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_1') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_1') ? 'is-invalid' : '' }}" type="text" name="notes_1" id="notes_1" value="{{ old('notes_1', '') }}">
                        @if($errors->has('notes_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_1') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_2') ? 'is-invalid' : '' }}" type="text" name="damage_statement_2" id="damage_statement_2" value="{{ old('damage_statement_2', '') }}">
                        @if($errors->has('damage_statement_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_2') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_2') ? 'is-invalid' : '' }}" type="number" name="damage_value_2" id="damage_value_2" value="{{ old('damage_value_2', '') }}" step="0.01">
                        @if($errors->has('damage_value_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_2') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_2') ? 'is-invalid' : '' }}" type="text" name="notes_2" id="notes_2" value="{{ old('notes_2', '') }}">
                        @if($errors->has('notes_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_2') }}
                            </div>
                        @endif</td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_3') ? 'is-invalid' : '' }}" type="text" name="damage_statement_3" id="damage_statement_3" value="{{ old('damage_statement_3', '') }}">
                        @if($errors->has('damage_statement_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_3') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_3') ? 'is-invalid' : '' }}" type="number" name="damage_value_3" id="damage_value_3" value="{{ old('damage_value_3', '') }}" step="0.01">
                        @if($errors->has('damage_value_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_3') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_3') ? 'is-invalid' : '' }}" type="text" name="notes_3" id="notes_3" value="{{ old('notes_3', '') }}">
                        @if($errors->has('notes_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_3') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_4') ? 'is-invalid' : '' }}" type="text" name="damage_statement_4" id="damage_statement_4" value="{{ old('damage_statement_4', '') }}">
                        @if($errors->has('damage_statement_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_4') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_4') ? 'is-invalid' : '' }}" type="number" name="damage_value_4" id="damage_value_4" value="{{ old('damage_value_4', '') }}" step="0.01">
                        @if($errors->has('damage_value_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_4') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_4') ? 'is-invalid' : '' }}" type="text" name="notes_4" id="notes_4" value="{{ old('notes_4', '') }}">
                        @if($errors->has('notes_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_4') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_5') ? 'is-invalid' : '' }}" type="text" name="damage_statement_5" id="damage_statement_5" value="{{ old('damage_statement_5', '') }}">
                        @if($errors->has('damage_statement_5'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_5') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_5') ? 'is-invalid' : '' }}" type="number" name="damage_value_5" id="damage_value_5" value="{{ old('damage_value_5', '') }}" step="0.01">
                        @if($errors->has('damage_value_5'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_5') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_5') ? 'is-invalid' : '' }}" type="text" name="notes_5" id="notes_5" value="{{ old('notes_5', '') }}">
                        @if($errors->has('notes_5'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_5') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_6') ? 'is-invalid' : '' }}" type="text" name="damage_statement_6" id="damage_statement_6" value="{{ old('damage_statement_6', '') }}">
                        @if($errors->has('damage_statement_6'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_6') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_6') ? 'is-invalid' : '' }}" type="number" name="damage_value_6" id="damage_value_6" value="{{ old('damage_value_6', '') }}" step="0.01">
                        @if($errors->has('damage_value_6'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_6') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_6') ? 'is-invalid' : '' }}" type="text" name="notes_6" id="notes_6" value="{{ old('notes_6', '') }}">
                        @if($errors->has('notes_6'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_6') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_7') ? 'is-invalid' : '' }}" type="text" name="damage_statement_7" id="damage_statement_7" value="{{ old('damage_statement_7', '') }}">
                        @if($errors->has('damage_statement_7'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_7') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_7') ? 'is-invalid' : '' }}" type="number" name="damage_value_7" id="damage_value_7" value="{{ old('damage_value_7', '') }}" step="0.01">
                        @if($errors->has('damage_value_7'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_7') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_7') ? 'is-invalid' : '' }}" type="text" name="notes_7" id="notes_7" value="{{ old('notes_7', '') }}">
                        @if($errors->has('notes_7'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_7') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_8') ? 'is-invalid' : '' }}" type="text" name="damage_statement_8" id="damage_statement_8" value="{{ old('damage_statement_8', '') }}">
                        @if($errors->has('damage_statement_8'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_8') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_8') ? 'is-invalid' : '' }}" type="number" name="damage_value_8" id="damage_value_8" value="{{ old('damage_value_8', '') }}" step="0.01">
                        @if($errors->has('damage_value_8'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_8') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_8') ? 'is-invalid' : '' }}" type="text" name="notes_8" id="notes_8" value="{{ old('notes_8', '') }}">
                        @if($errors->has('notes_8'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_8') }}
                            </div>
                        @endif</td>
                  </tr>

                  <tr>
                    <th scope="row">9</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_9') ? 'is-invalid' : '' }}" type="text" name="damage_statement_9" id="damage_statement_9" value="{{ old('damage_statement_9', '') }}">
                        @if($errors->has('damage_statement_9'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_9') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_9') ? 'is-invalid' : '' }}" type="number" name="damage_value_9" id="damage_value_9" value="{{ old('damage_value_9', '') }}" step="0.01">
                        @if($errors->has('damage_value_9'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_9') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_9') ? 'is-invalid' : '' }}" type="text" name="notes_9" id="notes_9" value="{{ old('notes_9', '') }}">
                        @if($errors->has('notes_9'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_9') }}
                            </div>
                        @endif</td>
                  </tr>

                  <tr>
                    <th scope="row">10</th>
                    <td><input class="form-control {{ $errors->has('damage_statement_10') ? 'is-invalid' : '' }}" type="text" name="damage_statement_10" id="damage_statement_10" value="{{ old('damage_statement_10', '') }}">
                        @if($errors->has('damage_statement_10'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_10') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('damage_value_10') ? 'is-invalid' : '' }}" type="number" name="damage_value_10" id="damage_value_10" value="{{ old('damage_value_10', '') }}" step="0.01">
                        @if($errors->has('damage_value_10'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_10') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('notes_10') ? 'is-invalid' : '' }}" type="text" name="notes_10" id="notes_10" value="{{ old('notes_10', '') }}">
                        @if($errors->has('notes_10'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_10') }}
                            </div>
                        @endif</td>
                  </tr>
                </tbody>
            </table>
            <div class="form-group">
                <label for="accident_photos">{{ trans('cruds.reportAccident.fields.accident_photos') }}</label>
                <div class="needsclick dropzone {{ $errors->has('accident_photos') ? 'is-invalid' : '' }}" id="accident_photos-dropzone">
                </div>
                @if($errors->has('accident_photos'))
                    <div class="invalid-feedback">
                        {{ $errors->first('accident_photos') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.accident_photos_helper') }}</span>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        لجنة المعاينة
                    </tr>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">القسم- الادارة</th>
                    <th scope="col">التوقيع</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td> <input class="form-control {{ $errors->has('name_1') ? 'is-invalid' : '' }}" type="text" name="name_1" id="name_1" value="{{ old('name_1', '') }}">
                        @if($errors->has('name_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_1') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('dep_mang_1') ? 'is-invalid' : '' }}" type="text" name="dep_mang_1" id="dep_mang_1" value="{{ old('dep_mang_1', '') }}">
                        @if($errors->has('dep_mang_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dep_mang_1') }}
                            </div>
                        @endif</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td> <input class="form-control {{ $errors->has('name_2') ? 'is-invalid' : '' }}" type="text" name="name_2" id="name_2" value="{{ old('name_2', '') }}">
                        @if($errors->has('name_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_2') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('dep_mang_2') ? 'is-invalid' : '' }}" type="text" name="dep_mang_2" id="dep_mang_2" value="{{ old('dep_mang_2', '') }}">
                        @if($errors->has('dep_mang_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dep_mang_2') }}
                            </div>
                        @endif</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td> <input class="form-control {{ $errors->has('name_3') ? 'is-invalid' : '' }}" type="text" name="name_3" id="name_3" value="{{ old('name_3', '') }}">
                        @if($errors->has('name_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_3') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('dep_mang_3') ? 'is-invalid' : '' }}" type="text" name="dep_mang_3" id="dep_mang_3" value="{{ old('dep_mang_3', '') }}">
                        @if($errors->has('dep_mang_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dep_mang_3') }}
                            </div>
                        @endif</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td> <input class="form-control {{ $errors->has('name_4') ? 'is-invalid' : '' }}" type="text" name="name_4" id="name_4" value="{{ old('name_4', '') }}">
                        @if($errors->has('name_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_4') }}
                            </div>
                        @endif</td>
                    <td><input class="form-control {{ $errors->has('dep_mang_4') ? 'is-invalid' : '' }}" type="text" name="dep_mang_4" id="dep_mang_4" value="{{ old('dep_mang_4', '') }}">
                        @if($errors->has('dep_mang_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dep_mang_4') }}
                            </div>
                        @endif</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>



            <div class="form-group">
                <div class="form-check {{ $errors->has('confidence') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="confidence" value="0">
                    <input class="form-check-input" type="checkbox" name="confidence" id="confidence" value="1" {{ old('confidence', 0) == 1 || old('confidence') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="confidence">{{ trans('cruds.reportAccident.fields.confidence') }}</label>
                </div>
                @if($errors->has('confidence'))
                    <div class="invalid-feedback">
                        {{ $errors->first('confidence') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.reportAccident.fields.confidence_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    var uploadedAccidentPhotosMap = {}
Dropzone.options.accidentPhotosDropzone = {
    url: '{{ route('admin.report-accidents.storeMedia') }}',
    maxFilesize: 12, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 12,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="accident_photos[]" value="' + response.name + '">')
      uploadedAccidentPhotosMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedAccidentPhotosMap[file.name]
      }
      $('form').find('input[name="accident_photos[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($reportAccident) && $reportAccident->accident_photos)
      var files = {!! json_encode($reportAccident->accident_photos) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="accident_photos[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection
