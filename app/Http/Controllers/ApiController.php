<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ApiController extends Controller
{
  public function getGuzzleRequest()
  {
      $client = new \GuzzleHttp\Client();
      $request = $client->get('https://jsonplaceholder.typicode.com/posts');
      $response = $request->getBody();
     
      // return $response;
      return view('layouts.front')->with('res',json_decode($response));
  }
}
