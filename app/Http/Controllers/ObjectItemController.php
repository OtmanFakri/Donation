<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeobject_itemRequest;
use App\Http\Requests\Updateobject_itemRequest;
use App\Models\object_item;

class ObjectItemController extends Controller
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
     * @param  \App\Http\Requests\Storeobject_itemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeobject_itemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\object_item  $object_item
     * @return \Illuminate\Http\Response
     */
    public function show(object_item $object_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\object_item  $object_item
     * @return \Illuminate\Http\Response
     */
    public function edit(object_item $object_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateobject_itemRequest  $request
     * @param  \App\Models\object_item  $object_item
     * @return \Illuminate\Http\Response
     */
    public function update(Updateobject_itemRequest $request, object_item $object_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\object_item  $object_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(object_item $object_item)
    {
        //
    }
}
