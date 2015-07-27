<?php

namespace App\Http\Controllers;


use Response;
use App\Http\Requests;
use App\Illustration;
use App\Tag;

class APIController extends Controller
{

  /**
  * Get recommendations.
  * @
  * @return Recommended books
  */
  public function recommendations()
  {
    //Settings
    $server = "obgent";
    //$server = $_GET['server'];
    $branch = "all";
    //$branch = $_GET['branch'];
    $age = 3;
    //$age = $_GET['age'];


    if(isset($_GET['likes'])) {
        $likes = explode(",",$_GET['likes']);
    }
    else{
        $likes = [];
    }
    //$likes = [1,2];
    //$illustrations = $_GET['liked'];
    $dislikes = "";
    //$illustrations = $_GET['disliked'];

    //$this->storeLikesDislikes($likes, $dislikes);

    $tagsString = "";
    $tags = $this->getTagsForIllustrations($likes);

    $tagsString = $tagsString . array_pop($tags);
    foreach($tags as $tag){
      $tagsString = $tagsString . " OR " . $tag;
    }

    //Settings for BIBnet API URL
    $format = "book";
    $language = "nederlands";

    //Select language
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
    $url = "http://" . $server . ".staging.aquabrowser.be//api/v0/search/?q=" . $tagsString . " AND (language:" . $language . " AND format:" . $format . " AND " . $age . ")&authorization=26f9ce7cdcbe09df6f0b37d79b6c4dc2";

    $xml = simplexml_load_file(urlencode($url)); //retrieve URL and parse XML content
    $json = json_encode($xml);

    //convert the json to an array
    $temp = json_decode($json,TRUE);
    $results = $temp['results']['result'];
    //will hold the final books
    $output = [];
    for ($x = 0; $x <= sizeof($results)-1; $x++) {
      //random index
      $result = $results[$x];

      //set array
      $temp = [
        "coverimage" => $result['coverimage']['url'] . "&coversize=large",
        "title" => $result['titles']['short-title']
      ];

      //check if author is set
      if(array_key_exists('authors', $result)){
          if(array_key_exists('main-author', $result['authors'])){
              $temp["author"] = $result['authors']['main-author'];
          }
          else{
              if(array_key_exists('author', $result['authors'])){
                  $temp["author"] = $result['authors']['author'][0];
              }
              else{
                  $temp["author"] = "Geen auteur te vinden.";
              }
          }

      }
      else{
        $temp["author"] = "Geen auteur te vinden.";
      }

      //check if summary is set
      if(array_key_exists('summaries', $result)){
        if(is_array($result['summaries']['summary'])){
          $temp["description"] = $result['summaries']['summary'][0];
        }
        else {
          $temp["description"] = $result['summaries']['summary'];
        }
      }
      else{
        $temp["description"] = "Geen beschrijving te vinden.";
      }

      if(array_key_exists('genres', $result)){
        //check if genres is set
        if(is_array($result['genres']['genre'])){
          $temp["genres"] = implode(", ",array_unique($result['genres']['genre']));
        }else{
          $temp["genres"] = $result['genres']['genre'];
        }
      }
      else{
        $temp["genres"] = "Geen genres te vinden.";
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
  public function illustrations()
  {
    //Base URL where the illustrations can be found
    $base_path = "http://api.bieblo.be/images/";

    $illustrations = Illustration::all(['id']);

    foreach ($illustrations as $index => $illustration) {
      $illustration["url"] = $base_path . $illustration['id'] . ".png";
    }

    return $illustrations;
  }

  public function storeLikesDislikes($likes, $dislikes){
  }

  public function getTagsForIllustrations($likes){
    $tags = array();
    foreach($likes as $liked){
        foreach(Illustration::find((int)$liked)->tags as $tag){
            array_push($tags,$tag['name']);
        }
    }
    return $tags;
  }
}
