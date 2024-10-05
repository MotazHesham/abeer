@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.setting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Setting">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.facebook') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.twitter') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.linkedin') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.youtubte') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.about_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.about_photo') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.about_cv') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($settings as $key => $setting)
                        <tr data-entry-id="{{ $setting->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $setting->id ?? '' }}
                            </td>
                            <td>
                                {{ $setting->description ?? '' }}
                            </td>
                            <td>
                                {{ $setting->phone ?? '' }}
                            </td>
                            <td>
                                {{ $setting->address ?? '' }}
                            </td>
                            <td>
                                {{ $setting->email ?? '' }}
                            </td>
                            <td>
                                {{ $setting->facebook ?? '' }}
                            </td>
                            <td>
                                {{ $setting->twitter ?? '' }}
                            </td>
                            <td>
                                {{ $setting->linkedin ?? '' }}
                            </td>
                            <td>
                                {{ $setting->youtubte ?? '' }}
                            </td>
                            <td>
                                {{ $setting->about_description ?? '' }}
                            </td>
                            <td>
                                @if($setting->about_photo)
                                    <a href="{{ $setting->about_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $setting->about_photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($setting->about_cv)
                                    <a href="{{ $setting->about_cv->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                            <td>

                                @can('setting_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.settings.edit', $setting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
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
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  });
  let table = $('.datatable-Setting:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection