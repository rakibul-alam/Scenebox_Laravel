<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleRequestController extends Controller
{
    public function index()
    {
        $client = new Client();

            $response = $client->post('https://banglaflix.com.bd/sceneabox/api/flix_json_app_data', [
                'form_params' => [
                    'view' => 'home',
                    'ct' => 'home',
                    // 'msisdn' =>8801841464612,
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            // dd($data);
            // dd(json_decode($response->getBody(), true));
            // Pass the data to the view
            return view('home', ['data' => $data]);

    }

    public function show($contentid){
        $client = new Client();

        $response = $client->post('https://banglaflix.com.bd/sceneabox/api/flixlist_json_app_single', [
            'form_params' => [
                'cc' => $contentid,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $content = $data ? $data[0]:'';
        // dd($content);
        // dd(json_decode($response->getBody(), true));
        // Pass the data to the view
        return view('layouts.show', ['content' => $content]);
    }

    public function showAll($ct,$catname,$tc){

        $client = new Client();

        $response = $client->post('https://banglaflix.com.bd/sceneabox/api/flixlist_json_app', [
            'form_params' => [
                'ct'   => $catname,
                'tc'   => $tc,
                'page' => 1,

            ],
        ]);

        $data = json_decode($response->getBody(), true);
        // dd($tc);
        // dd(json_decode($response->getBody(), true));
        // Pass the data to the view
        return view('layouts.show-all', ['data' => $data,'ct' => $ct,'tc'=>$tc]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
