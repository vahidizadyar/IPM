<?php

namespace App\Http\Controllers;

use App\Request as RequestModel;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'job_id' => 'bail | required | integer'
        ]);
        $requestModel = new RequestModel();
        $requestModel->user_id = auth()->id();
        $requestModel->job_id = $request->post('job_id');
        $status = $requestModel->save();
        return back()->with("success", [$status, $status ? 'درخوسات شما با موفقیت ثبت شد' : "حطا! متاسفانه درخواست شما با خطا مواجه شده است. لطفا مجددا تلاش کنید"]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RequestModel $requestModel
     * @return void
     */
    public function update(RequestModel $requestModel)
    {
        $requestModel->update(['state' => 0]);
        return response()->json(makeMsgCode(true, 'success', '00'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RequestModel $requestModel
     * @return void
     */
    public function destroy(RequestModel $requestModel)
    {
        $requestModel->delete();
    }
}
