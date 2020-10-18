@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.reportAccident.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.report-accidents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.id') }}
                        </th>
                        <td>
                            {{ $reportAccident->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.location') }}
                        </th>
                        <td>
                            {{ $reportAccident->location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.offender') }}
                        </th>
                        <td>
                            {{ $reportAccident->offender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.offender_id_number') }}
                        </th>
                        <td>
                            {{ $reportAccident->offender_id_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.car_number') }}
                        </th>
                        <td>
                            {{ $reportAccident->car_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.issuer') }}
                        </th>
                        <td>
                            {{ $reportAccident->issuer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.date_of_accident') }}
                        </th>
                        <td>
                            {{ $reportAccident->date_of_accident }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.accident_time') }}
                        </th>
                        <td>
                            {{ $reportAccident->accident_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.estimate_reference') }}
                        </th>
                        <td>
                            {{ $reportAccident->estimate_reference }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.estimate_date') }}
                        </th>
                        <td>
                            {{ $reportAccident->estimate_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.accident_photos') }}
                        </th>
                        <td>
                            @foreach($reportAccident->accident_photos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>


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
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_1') ? 'is-invalid' : '' }}" type="text" name="damage_statement_1" id="damage_statement_1" value="{{ old('damage_statement_1', $reportAccident->damage_statement_1) }}">
                        @if($errors->has('damage_statement_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_1') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_1') ? 'is-invalid' : '' }}" type="number" name="damage_value_1" id="damage_value_1" value="{{ old('damage_value_1', $reportAccident->damage_value_1) }}" step="0.01">
                        @if($errors->has('damage_value_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_1') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_1') ? 'is-invalid' : '' }}" type="text" name="notes_1" id="notes_1" value="{{ old('notes_1', $reportAccident->notes_1) }}">
                        @if($errors->has('notes_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_1') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_2') ? 'is-invalid' : '' }}" type="text" name="damage_statement_2" id="damage_statement_2" value="{{ old('damage_statement_2', $reportAccident->damage_statement_2) }}">
                        @if($errors->has('damage_statement_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_2') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_2') ? 'is-invalid' : '' }}" type="number" name="damage_value_2" id="damage_value_2" value="{{ old('damage_value_2', $reportAccident->damage_value_2) }}" step="0.01">
                        @if($errors->has('damage_value_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_2') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_2') ? 'is-invalid' : '' }}" type="text" name="notes_2" id="notes_2" value="{{ old('notes_2', $reportAccident->notes_2) }}">
                        @if($errors->has('notes_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_2') }}
                            </div>
                        @endif</td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_3') ? 'is-invalid' : '' }}" type="text" name="damage_statement_3" id="damage_statement_3" value="{{ old('damage_statement_3', $reportAccident->damage_statement_3) }}">
                        @if($errors->has('damage_statement_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_3') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_3') ? 'is-invalid' : '' }}" type="number" name="damage_value_3" id="damage_value_3" value="{{ old('damage_value_3', $reportAccident->damage_value_3) }}" step="0.01">
                        @if($errors->has('damage_value_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_3') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_3') ? 'is-invalid' : '' }}" type="text" name="notes_3" id="notes_3" value="{{ old('notes_3', $reportAccident->notes_3) }}">
                        @if($errors->has('notes_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_3') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_4') ? 'is-invalid' : '' }}" type="text" name="damage_statement_4" id="damage_statement_4" value="{{ old('damage_statement_4', $reportAccident->damage_statement_4) }}">
                        @if($errors->has('damage_statement_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_4') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_4') ? 'is-invalid' : '' }}" type="number" name="damage_value_4" id="damage_value_4" value="{{ old('damage_value_4', $reportAccident->damage_value_4) }}" step="0.01">
                        @if($errors->has('damage_value_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_4') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_4') ? 'is-invalid' : '' }}" type="text" name="notes_4" id="notes_4" value="{{ old('notes_4', $reportAccident->notes_4) }}">
                        @if($errors->has('notes_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_4') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_5') ? 'is-invalid' : '' }}" type="text" name="damage_statement_5" id="damage_statement_5" value="{{ old('damage_statement_5', $reportAccident->damage_statement_5) }}">
                        @if($errors->has('damage_statement_5'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_5') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_5') ? 'is-invalid' : '' }}" type="number" name="damage_value_5" id="damage_value_5" value="{{ old('damage_value_5', $reportAccident->damage_value_5) }}" step="0.01">
                        @if($errors->has('damage_value_5'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_5') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_5') ? 'is-invalid' : '' }}" type="text" name="notes_5" id="notes_5" value="{{ old('notes_5', $reportAccident->notes_5) }}">
                        @if($errors->has('notes_5'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_5') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_6') ? 'is-invalid' : '' }}" type="text" name="damage_statement_6" id="damage_statement_6" value="{{ old('damage_statement_6', $reportAccident->damage_statement_6) }}">
                        @if($errors->has('damage_statement_6'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_6') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_6') ? 'is-invalid' : '' }}" type="number" name="damage_value_6" id="damage_value_6" value="{{ old('damage_value_6', $reportAccident->damage_value_6) }}" step="0.01">
                        @if($errors->has('damage_value_6'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_6') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_6') ? 'is-invalid' : '' }}" type="text" name="notes_6" id="notes_6" value="{{ old('notes_6', $reportAccident->notes_6) }}">
                        @if($errors->has('notes_6'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_6') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_7') ? 'is-invalid' : '' }}" type="text" name="damage_statement_7" id="damage_statement_7" value="{{ old('damage_statement_7', $reportAccident->notes_6) }}">
                        @if($errors->has('damage_statement_7'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_7') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_7') ? 'is-invalid' : '' }}" type="number" name="damage_value_7" id="damage_value_7" value="{{ old('damage_value_7', $reportAccident->damage_value_7) }}" step="0.01">
                        @if($errors->has('damage_value_7'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_7') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_7') ? 'is-invalid' : '' }}" type="text" name="notes_7" id="notes_7" value="{{ old('notes_7', $reportAccident->notes_7) }}">
                        @if($errors->has('notes_7'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_7') }}
                            </div>
                        @endif</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_8') ? 'is-invalid' : '' }}" type="text" name="damage_statement_8" id="damage_statement_8" value="{{ old('damage_statement_8', $reportAccident->damage_statement_8) }}">
                        @if($errors->has('damage_statement_8'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_8') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_8') ? 'is-invalid' : '' }}" type="number" name="damage_value_8" id="damage_value_8" value="{{ old('damage_value_8', $reportAccident->reportAccident) }}" step="0.01">
                        @if($errors->has('damage_value_8'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_8') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_8') ? 'is-invalid' : '' }}" type="text" name="notes_8" id="notes_8" value="{{ old('notes_8', $reportAccident->reportAccident) }}">
                        @if($errors->has('notes_8'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_8') }}
                            </div>
                        @endif</td>
                  </tr>

                  <tr>
                    <th scope="row">9</th>
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_9') ? 'is-invalid' : '' }}" type="text" name="damage_statement_9" id="damage_statement_9" value="{{ old('damage_statement_9', $reportAccident->damage_statement_9) }}">
                        @if($errors->has('damage_statement_9'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_9') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_9') ? 'is-invalid' : '' }}" type="number" name="damage_value_9" id="damage_value_9" value="{{ old('damage_value_9', $reportAccident->damage_value_9) }}" step="0.01">
                        @if($errors->has('damage_value_9'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_9') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_9') ? 'is-invalid' : '' }}" type="text" name="notes_9" id="notes_9" value="{{ old('notes_9', $reportAccident->notes_9) }}">
                        @if($errors->has('notes_9'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_9') }}
                            </div>
                        @endif</td>
                  </tr>

                  <tr>
                    <th scope="row">10</th>
                    <td><input disabled class="form-control {{ $errors->has('damage_statement_10') ? 'is-invalid' : '' }}" type="text" name="damage_statement_10" id="damage_statement_10" value="{{ old('damage_statement_10', $reportAccident->damage_statement_10) }}">
                        @if($errors->has('damage_statement_10'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_statement_10') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('damage_value_10') ? 'is-invalid' : '' }}" type="number" name="damage_value_10" id="damage_value_10" value="{{ old('damage_value_10', $reportAccident->damage_value_10) }}" step="0.01">
                        @if($errors->has('damage_value_10'))
                            <div class="invalid-feedback">
                                {{ $errors->first('damage_value_10') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('notes_10') ? 'is-invalid' : '' }}" type="text" name="notes_10" id="notes_10" value="{{ old('notes_10', $reportAccident->notes_10) }}">
                        @if($errors->has('notes_10'))
                            <div class="invalid-feedback">
                                {{ $errors->first('notes_10') }}
                            </div>
                        @endif</td>
                  </tr>
                </tbody>
            </table>


            <table class="table table-bordered">
                <thead>
                    <tr>
                        لجنة المعاينة
                    </tr>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">القسم- الادارة</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td> <input disabled class="form-control {{ $errors->has('name_1') ? 'is-invalid' : '' }}" type="text" name="name_1" id="name_1" required  value="{{ old('name_1', $reportAccident->name_1) }}">
                        @if($errors->has('name_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_1') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('dep_mang_1') ? 'is-invalid' : '' }}" type="text" name="dep_mang_1" id="dep_mang_1" required value="{{ old('dep_mang_1', $reportAccident->dep_mang_1) }}">
                        @if($errors->has('dep_mang_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dep_mang_1') }}
                            </div>
                        @endif</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td> <input disabled class="form-control {{ $errors->has('name_2') ? 'is-invalid' : '' }}" type="text" name="name_2" id="name_2" required  value="{{ old('name_2', $reportAccident->name_2) }}">
                        @if($errors->has('name_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_2') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('dep_mang_2') ? 'is-invalid' : '' }}" type="text" name="dep_mang_2" id="dep_mang_2" required value="{{ old('dep_mang_2', $reportAccident->dep_mang_2) }}">
                        @if($errors->has('dep_mang_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dep_mang_2') }}
                            </div>
                        @endif</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td> <input disabled class="form-control {{ $errors->has('name_3') ? 'is-invalid' : '' }}" type="text" name="name_3" id="name_3" required  value="{{ old('name_3', $reportAccident->name_3) }}">
                        @if($errors->has('name_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_3') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('dep_mang_3') ? 'is-invalid' : '' }}" type="text" name="dep_mang_3" id="dep_mang_3" required value="{{ old('dep_mang_3', $reportAccident->dep_mang_3) }}">
                        @if($errors->has('dep_mang_3'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dep_mang_3') }}
                            </div>
                        @endif</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td> <input disabled class="form-control {{ $errors->has('name_4') ? 'is-invalid' : '' }}" type="text" name="name_4" id="name_4" required  value="{{ old('name_4', $reportAccident->name_4) }}">
                        @if($errors->has('name_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_4') }}
                            </div>
                        @endif</td>
                    <td><input disabled class="form-control {{ $errors->has('dep_mang_4') ? 'is-invalid' : '' }}" type="text" name="dep_mang_4" id="dep_mang_4" required value="{{ old('dep_mang_4', $reportAccident->dep_mang_4) }}">
                        @if($errors->has('dep_mang_4'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dep_mang_4') }}
                            </div>
                        @endif</td>
                    </tr>
              </tbody>
            </table>

            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.report-accidents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
