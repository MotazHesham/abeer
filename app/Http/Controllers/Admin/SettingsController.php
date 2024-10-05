<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SettingsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $settings = Setting::with(['media'])->get();

        return view('admin.settings.index', compact('settings'));
    }

    public function edit(Setting $setting)
    {
        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());

        if ($request->input('about_photo', false)) {
            if (! $setting->about_photo || $request->input('about_photo') !== $setting->about_photo->file_name) {
                if ($setting->about_photo) {
                    $setting->about_photo->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('about_photo'))))->toMediaCollection('about_photo');
            }
        } elseif ($setting->about_photo) {
            $setting->about_photo->delete();
        }

        if ($request->input('about_cv', false)) {
            if (! $setting->about_cv || $request->input('about_cv') !== $setting->about_cv->file_name) {
                if ($setting->about_cv) {
                    $setting->about_cv->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('about_cv'))))->toMediaCollection('about_cv');
            }
        } elseif ($setting->about_cv) {
            $setting->about_cv->delete();
        }

        return redirect()->route('admin.settings.index');
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('setting_create') && Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Setting();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
