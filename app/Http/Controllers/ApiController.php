<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ApiController extends Controller
{
  public function getGuzzleRequest()
  {
      $client = new \GuzzleHttp\Client();
      $request = $client->get('https://content.guardianapis.com/search?api-key=test');
      $response = $request->getBody();
     
      // return $response;
      return view('layouts.front')->with('res',$response);
  }
}
