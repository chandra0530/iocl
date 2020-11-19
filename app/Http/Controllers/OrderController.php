<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stack = HandlerStack::create();

        $middleware = new Oauth1([
            'consumer_key'    => 'tuzmb385i09hqz433r85y1yz',
            'consumer_secret' => 'yefj0uy7q7',
            'token'           => 'e0fad8d8a376802b87a7296d67c46b',
            'token_secret'    => '18c4bd3910'
        ]);
        $stack->push($middleware);

        $client = new Client([
            'handler' => $stack
        ]);

        // Set the "auth" request option to "oauth" to sign using oauth
        // shops/18818012/receipts
        $res = $client->get('https://openapi.etsy.com/v2/shops/18818012/transactions', ['auth' => 'oauth']);
        return $res;
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
        $stack = HandlerStack::create();

        $middleware = new Oauth1([
            'consumer_key'    => 'tuzmb385i09hqz433r85y1yz',
            'consumer_secret' => 'yefj0uy7q7',
            'token'           => 'e0fad8d8a376802b87a7296d67c46b',
            'token_secret'    => '18c4bd3910'
        ]);
        $stack->push($middleware);

        $client = new Client([
            'handler' => $stack
        ]);

        // Set the "auth" request option to "oauth" to sign using oauth
        // shops/18818012/receipts
        $res = $client->get('https://openapi.etsy.com/v2/transactions/2146808345', ['auth' => 'oauth']);
        return $res;
        // return json_encode(json_decode($res, true));
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
    public function showreciptdetails($id){
        $stack = HandlerStack::create();

        $middleware = new Oauth1([
            'consumer_key'    => 'tuzmb385i09hqz433r85y1yz',
            'consumer_secret' => 'yefj0uy7q7',
            'token'           => 'e0fad8d8a376802b87a7296d67c46b',
            'token_secret'    => '18c4bd3910'
        ]);
        $stack->push($middleware);

        $client = new Client([
            'handler' => $stack
        ]);

        // Set the "auth" request option to "oauth" to sign using oauth
        // shops/18818012/receipts
        $res = $client->get('https://openapi.etsy.com/v2/receipts/1830210487', ['auth' => 'oauth']);
        return $res;
    }
}
