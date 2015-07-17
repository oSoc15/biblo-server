<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Illustration;

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
    public function recommendations()
    {
      //$server, $branch, $age, $illustrations
      //Temp Settings for input
      $server = "obgent";
      //$server = $_GET['server'];
      $branch = "all";
      //$branch = $_GET['branch'];
      $age = 3;
      //$age = $_GET['age'];
      $illustrations = "";
      //$illustrations = $_GET['illustrations'];

      //Settings for BIBnet API URL
      $format = "book";
      $language = "nederlands";

      switch ($age) {
        case 1:
          $age = '(doelgroep:"vanaf 3 jaar" OR doelgroep:"vanaf 4 jaar" OR doelgroep:"vanaf 5 jaar" OR doelgroep:"vanaf 6 jaar" OR doelgroep:"vanaf 7 jaar" OR doelgroep:"informatief -6 jaar" OR doelgroep:"informatief  6 jaar" OR doelgroep:"informatief -8 jaar")';
        break;
        case 2:
          $age = '(doelgroep:"vanaf 8 jaar" OR doelgroep:"vanaf 9 jaar" OR doelgroep:"vanaf 10-11 jaar" OR doelgroep:"informatief +8 jaar”)';
        break;
        case 3:
          $age = '(doelgroep:"vanaf 12-13 jaar" OR doelgroep:"vanaf 14 jaar" OR doelgroep:"informatief +12 jaar”)';
        break;
        default:
          return 'Invalid age.';
        break;
      }

      //Build BIBnet API URL
      $url = "http://" . $server . ".staging.aquabrowser.be//api/v0/search/?q=language:" . $language . " AND format:" . $format . " AND " . $age . "&authorization=26f9ce7cdcbe09df6f0b37d79b6c4dc2";

      $tags = self::getTagsForIllustrations($illustrations);

      //Add tags to URL
      foreach ($tags as $tag) {
        //$url = $url . " OR " . $tag;
      }

      $xml = simplexml_load_file(urlencode($url)); //retrieve URL and parse XML content
      $json = json_encode($xml);
      return $json;

      //Encode BIBnet API URL
      return urlencode($url);
    }

    /**
     * Get recommendations.
     * @
     * @return Recommended books
     */
    public function illustrations()
    {
      //Base URL where the illustrations can be found
      $base_path = "";

      $illustrations = Illustration::all(['id']);

          foreach ($illustrations as $index => $illustration) {
        $illustration["url"] = $base_path . $illustration['id'] . ".png";
      }

      return $illustrations;
    }
}
