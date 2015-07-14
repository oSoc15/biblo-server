<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
      //$age = $_GET['age'];
      //$level = $_GET['level'];

      $format = "boek";
      $age = "ageYouth";

      $url = urlencode("http://obgent.staging.aquabrowser.be//api/v0/search/?q=age:" . $age . " AND format:" . $format . "&authorization=26f9ce7cdcbe09df6f0b37d79b6c4dc2");

      $xml = simplexml_load_file($url); //retrieve URL and parse XML content

      //convert the xml to json
      $json = json_encode($xml);

      return $json;

      //convert the json to an array
      $results = json_decode($json,TRUE);

      //will hold the final books
      $output = [];

      for ($x = 0; $x <= sizeof($results['results']['result'])-1; $x++) {
        //random index
        $result = $results['results']['result'][$x];

        //set array
        $temp = [
          "coverimage" => $result['coverimage']['url'],
          "title" => $result['titles']['short-title']
        ];

        //check if author is set
        if(array_key_exists('authors', $result) && array_key_exists('main-author', $result['authors'])){
          $temp["author"] = $result['authors']['main-author'];
        }
        else{
          $temp["author"] = "Geen auteur te vinden.";
        }

        //check if summary is set
        if(array_key_exists('summaries', $result)){
          $temp["description"] = $result['summaries']['summary'];
        }
        else{
          $temp["description"] = "Geen beschrijving te vinden.";
        }

        //check if genres is set
        if(array_key_exists('genres', $result) && is_array($result['genres']['genre'])){
          $temp["genres"] = implode(", ",array_unique($result['genres']['genre']));
        }else{
          if(array_key_exists('genres', $result)){
            $temp["genres"] = $result['genres']['genre'];
          }
          else{

          }
        }

        array_push($output, $temp);
      }
      //encode the array to json and return it
      return json_encode($output);
    }

    /**
     * Get recommendations.
     * @
     * @return Recommended books
     */
    public function recommendations($preferences)
    {
      return Response::json(array('name' => 'Steve', 'state' => 'CA'));
    }

    public function getDataFromBIBNet(){
      $page = 200;
      $format = "boek";
      $age = "ageYouth";
      $data = [];
      for($x = 1; $x <= 1; $x++){
        $url = urlencode("http://obgent.staging.aquabrowser.be//api/v0/search/?page=" . $x . "&q=age:" . $age . " AND format:" . $format . "&authorization=26f9ce7cdcbe09df6f0b37d79b6c4dc2");

        $xml = simplexml_load_file($url); //retrieve URL and parse XML content

        //convert the xml to json
        $json = json_encode($xml);

        $results = json_decode($json,TRUE);
        $data = array_merge($data, $results['results']['result']);
      }
      $fp = fopen('results.json', 'w');
      fwrite($fp, json_encode($data));
      fclose($fp);
      return $data;
    }
}