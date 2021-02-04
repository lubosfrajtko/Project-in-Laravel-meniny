<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new \GuzzleHttp\Client([ 'base_uri' => 'https://api.abalin.net']);

        $responsetoday = $client->request('GET', '/today', [
            'query' => [
                'timezone' => 'Europe/Bratislava',
                'country' => 'sk'
            ]
        ]);

        $responsetomorrow = $client->request('GET', '/tomorrow', [
            'query' => [
                'timezone' => 'Europe/Bratislava',
                'country' => 'sk'
            ]
        ]);

        $bodytoday = $responsetoday->getBody();
        $datatoday = json_decode($bodytoday);

        $bodytomorrow = $responsetomorrow->getBody();
        $datatomorrow = json_decode($bodytomorrow);

        $actuallyear = getDate();
    

        return view('main')
            ->with('nameday', $datatoday)
            ->with('namedaytomorrow', $datatomorrow)
            ->with('year', $actuallyear);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
