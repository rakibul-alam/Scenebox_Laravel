<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleRequestController extends Controller
{
    public function index()
    {

        $client = new Client();

        try {
            $response = $client->post('https://banglaflix.com.bd/sceneabox/api/flix_json_app_data', [
                'form_params' => [
                    'view' => 'home',
                    'ct' => 'home',
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            // dd($data);
            // dd(json_decode($response->getBody(), true));
            // Pass the data to the view
            return view('welcome', ['data' => $data]);
        } catch (\Exception $e) {
            // Handle exceptions (e.g., connection error, API error)
            return view('error', ['error' => $e->getMessage()]);
        }

    }

    public function makeHttpRequest()
    {
        // Create a Guzzle client instance
        // $client = new Client();

        // Make a GET request
        // $body = $response->getBody()->getContents();

        // Decode JSON if the response is in JSON format
        // $data = json_decode($body, true);

        // return response()->json($data);

        // $response = $client->post('https://banglaflix.com.bd/sceneabox/api/flix_json_app_data', [
        //     'form_params' => [
        //         'view' => 'home',
        //         'ct' => 'home',
        //     ],
        // ]);

        // dd(json_decode($response->getBody(), true));

        // return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
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
    public function show(string $id)
    {
        //
    }

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