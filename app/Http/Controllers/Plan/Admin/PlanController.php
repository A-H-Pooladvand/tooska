<?php

namespace App\Http\Controllers\Plan\Admin;

use App\Http\Controllers\Controller;
use App\Plan;
use Exception;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return view('plan.admin.index');
    }

    public function items(Request $request)
    {
        $plans = Plan::select('id', 'title', 'content', 'price', 'created_at', 'updated_at');

        return $this->getGrid($request)->items($plans);
    }

    public function create()
    {
        $form = ['action' => route('admin.plan.store')];

        return view('plan.admin.form', compact('form'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validator($request));

        auth()->user()->plans()->create($this->fields($request));

        return ['message' => 'طرح جدید با موفقیت ثبت شد.'];
    }

    public function show($id)
    {
        $plan = Plan::with('user')->findOrFail($id);


        return view('plan.admin.show', compact('plan'));
    }

    public function edit($id)
    {
        $plan = Plan::findOrFail($id);

        $form = [
            'action' => route('admin.plan.update', $plan['id']),
            'method' => 'PUT'
        ];

        return view('plan.admin.form', compact('form', 'plan'));
    }

    public function update(Request $request, $id)
    {
        $plan = Plan::find($id);
        $this->validate($request, $this->validator($request));
        $plan->update($this->fields($request, $plan));

        return ['message' => 'طرح با موفقیت ویرایش گردید.'];
    }

    /**
     * @param $id
     * @throws Exception
     */
    public function destroy($id)
    {
        $ids = explode(',', $id);

        try {
            Plan::whereIn('id', $ids)->delete();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    // Methods

    /**
     * @param Request $request
     * @return array
     */
    private function validator(Request $request)
    {
        return[
            'title' => 'required|max:40',
            'price' => 'required|numeric',
            'content' => 'required',
        ];
    }

    /**
     * @param Request $request
     * @param Plan|null $plan
     * @return array
     */
    private function fields(Request $request, Plan $plan = null)
    {
        return [
            'title' => $request['title'],
            'price' => $request['price'],
            'content' => $request['content']
        ];
    }
}
