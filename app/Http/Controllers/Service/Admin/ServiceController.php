<?php

namespace App\Http\Controllers\Service\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Exception;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service.admin.index');
    }

    public function items(Request $request)
    {
        $services = Service::select('id', 'title', 'created_at', 'updated_at');

        return $this->getGrid($request)->items($services);
    }

    public function create()
    {
        $form = ['action' => route('admin.service.store')];

        return view('service.admin.form', compact('form'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validator());

        Service::create($this->fields($request));

        return ['message' => 'سرویس جدید با موفقیت ثبت شد.'];
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view('service.admin.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        $form = [
            'action' => route('admin.service.update', $service['id']),
            'method' => 'PUT'
        ];

        return view('service.admin.form', compact('form', 'service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $this->validate($request, $this->validator());
        $service->update($this->fields($request, $service));

        return ['message' => 'سرویس با موفقیت ویرایش گردید.'];
    }

    /**
     * @param $id
     * @throws Exception
     */
    public function destroy($id)
    {
        $ids = explode(',', $id);

        try {
            Service::whereIn('id', $ids)->delete();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    // Methods

    /**
     * @return array
     */
    private function validator()
    {
        $rules = [
            'title' => 'required|max:100',
            'content' => 'required|max:1000',
            'image' => 'required',
        ];

        if (\request()->method() === 'PUT')
            $rules['image'] = 'nullable';

        return $rules;
    }

    /**
     * @param Request $request
     * @param Service|null $service
     * @return array
     */
    private function fields(Request $request, Service $service = null)
    {
        return [
            'title' => $request->title,
            'content' => $request['content'],
            'image' => $request->image ?? $service->image
        ];
    }
}
