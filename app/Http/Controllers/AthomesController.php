<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AthomesController extends Controller
{
    /**
     * Display a list of resource.
     *
     * @return Response
     */
    public function index()
    {
        //

        echo 'ok';

    }

    /**
     * Show the form for creating a new resouce.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        //
       dd($request->input());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the spectified resource.
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        //
        echo 'id:' . $id .'</ br>';
    }

    /**
     * Show the form for editing the spectified resource.
     *
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * update the spectified resource.
     *
     * @param $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the spectified resource.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {

    }
}
