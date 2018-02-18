<?php

namespace App\Http\Controllers\WhyChooseUs\Admin;

use App\Http\Controllers\Controller;
use App\WhyChooseUs;
use Exception;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    public function index()
    {
        return view('why_choose_us.admin.index');
    }

    public function items(Request $request)
    {
        $whyChooseUs = WhyChooseUs::select('id', 'title', 'summary', 'created_at', 'updated_at');

        return $this->getGrid($request)->items($whyChooseUs);
    }

    public function create()
    {
        $form = ['action' => route('admin.why_choose_us.store')];

        return view('why_choose_us.admin.form', compact('form'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validator($request));

        auth()->user()->why_choose_us()->create($this->fields($request));

        return ['message' => 'چرا ما جدید با موفقیت ثبت شد.'];
    }

    public function show($id)
    {
        $whyChooseUs = WhyChooseUs::with('user')->findOrFail($id);


        return view('why_choose_us.admin.show', compact('whyChooseUs'));
    }

    public function edit($id)
    {
        $whyChooseUs = WhyChooseUs::findOrFail($id);

        $form = [
            'action' => route('admin.why_choose_us.update', $whyChooseUs['id']),
            'method' => 'PUT'
        ];

        return view('why_choose_us.admin.form', compact('form', 'whyChooseUs'));
    }

    public function update(Request $request, $id)
    {
        $whyChooseUs = WhyChooseUs::find($id);
        $this->validate($request, $this->validator($request));
        $whyChooseUs->update($this->fields($request, $whyChooseUs));

        return ['message' => 'چرا ما با موفقیت ویرایش گردید.'];
    }

    /**
     * @param $id
     * @throws Exception
     */
    public function destroy($id)
    {
        $ids = explode(',', $id);

        try {
            WhyChooseUs::whereIn('id', $ids)->delete();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    // Methods

    /**
     * @param Request $request
     * @param WhyChooseUs $whyChooseUs
     * @return array
     */
    private function validator(Request $request)
    {
        $rules = [
            'title' => 'required|max:80',
            'summary' => 'required|max:700',
            'image' => 'required',
        ];

        if ($request->method() === 'PUT')
            $rules['image'] = 'nullable';

        return $rules;
    }

    /**
     * @param Request $request
     * @param WhyChooseUs|null $whyChooseUs
     * @return array
     */
    private function fields(Request $request, WhyChooseUs $whyChooseUs = null)
    {
        return [
            'title' => $request->title,
            'summary' => $request->summary,
            'image' => $request->image ?? $whyChooseUs->image
        ];
    }
}
