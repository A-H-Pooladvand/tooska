<?php

namespace App\Http\Controllers\Sample\Admin;

use App\Http\Controllers\Controller;
use App\Sample;
use Exception;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        return view('sample.admin.index');
    }

    public function items(Request $request)
    {
        $samples = Sample::select('id', 'title', 'link', 'created_at', 'updated_at');

        return $this->getGrid($request)->items($samples);
    }

    public function create()
    {
        $form = ['action' => route('admin.sample.store')];

        return view('sample.admin.form', compact('form'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validator());

        Sample::create($this->fields($request));

        return ['message' => 'نمونه کار جدید با موفقیت ثبت شد.'];
    }

    public function show($id)
    {
        $sample = Sample::findOrFail($id);

        return view('sample.admin.show', compact('sample'));
    }

    public function edit($id)
    {
        $sample = Sample::findOrFail($id);

        $form = [
            'action' => route('admin.sample.update', $sample['id']),
            'method' => 'PUT'
        ];

        return view('sample.admin.form', compact('form', 'sample'));
    }

    public function update(Request $request, $id)
    {
        $sample = Sample::find($id);
        $this->validate($request, $this->validator());
        $sample->update($this->fields($request, $sample));

        return ['message' => 'نمونه کار با موفقیت ویرایش گردید.'];
    }

    /**
     * @param $id
     * @throws Exception
     */
    public function destroy($id)
    {
        $ids = explode(',', $id);

        try {
            Sample::whereIn('id', $ids)->delete();
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
            'link' => 'required|max:100',
            'content' => 'required|max:1000',
            'image' => 'required',
        ];

        if (\request()->method() === 'PUT')
            $rules['image'] = 'nullable';

        return $rules;
    }

    /**
     * @param Request $request
     * @param Sample|null $sample
     * @return array
     */
    private function fields(Request $request, Sample $sample = null)
    {
        return [
            'title' => $request->title,
            'link' => $request->link,
            'content' => $request['content'],
            'image' => $request->image ?? $sample->image
        ];
    }
}
