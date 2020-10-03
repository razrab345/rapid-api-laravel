<?php


namespace App\Http\Controllers;

// use App\Category;
// use App\Page;
use App\Http\Controllers\Controller;





class SoccerHomeController extends Controller {

	// protected $category;
 //    protected $catalog;

	public function __construct()
	{
	  // // Коллекция всех категорий
	  // $this->category = Category::all();
	  // // Коллекция всех страниц
	  // $this->page = Page::all();
	}

	public function Home() {
		// $catalog = $this->category;
		// $page = $this->page;

		$l = "Лиги";
		
		return view('soccer-home', ['l' => $l]);
	}

	public function leagues($league_id) {
		

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://livescore6.p.rapidapi.com/matches/list-by-league?category=soccer&league=$league_id",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"x-rapidapi-host: livescore6.p.rapidapi.com",
				"x-rapidapi-key: d7094f1ba1mshf98d32f067ad916p185c3djsn1defff624ff1"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);


		$matches_arr = json_decode($response, true);


		$title_l = $matches_arr["Stages"][0]["Cnm"];


		$events = [];
		foreach ($matches_arr as $matches) {
			//dd($matches);
			foreach ($matches as $m) {
				$events[] = $m["Events"];
			}
			//dd($m);

		}


		  //dd($events);

		$match_event = [
		    'wait' => [], // Матчи еще не состоялись, но есть дата матчей
		    'true' => [], // Матчи состоялись
		    'false' => [] // Матчи еще не состоялись и нету даты
		];

		foreach ($events[0] as $e) {

		    if (isset($e['LuUT'])) {  // Матч еще не состоялись но есть дата матча
		        $match_event['wait'][] = $e;
		    }

		    if (!isset($e['LuUT']) && isset($e['Tr1'])) {   // Матч состоялся
		        $match_event['true'][] = $e;
		    }

		    if (!isset($e['LuUT']) && !isset($e['Tr1'])) {  // Матч еще не состоялся нету даты
		        $match_event['false'][] = $e;
		    }
		    //dd($e);
		}



		//dd($match_event);



		
		return view('soccer-leagues', ['match_event' => $match_event, "title_l" => $title_l]);
	}



	public function sub_leagues($count, $league_id) {


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://livescore6.p.rapidapi.com/matches/list-by-league?category=soccer&league=$count",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"x-rapidapi-host: livescore6.p.rapidapi.com",
				"x-rapidapi-key: d7094f1ba1mshf98d32f067ad916p185c3djsn1defff624ff1"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);


		$matches_arr = json_decode($response, true);

		$title_l = $matches_arr["Stages"][$league_id]["Snm"];


		$events = [];
		foreach ($matches_arr as $matches) {
			//dd($matches);
			foreach ($matches as $m) {
				$events[] = $m["Events"];
			}
			//dd($m);

		}


		//dd($events);

		$match_event = [
		    'wait' => [], // Матчи еще не состоялись, но есть дата матчей
		    'true' => [], // Матчи состоялись
		    'false' => [] // Матчи еще не состоялись и нету даты
		];

		foreach ($events[$league_id] as $e) {

		    if (isset($e['LuUT'])) {  // Матч еще не состоялись но есть дата матча
		        $match_event['wait'][] = $e;
		    }

		    if (!isset($e['LuUT']) && isset($e['Tr1'])) {   // Матч состоялся
		        $match_event['true'][] = $e;
		    }

		    if (!isset($e['LuUT']) && !isset($e['Tr1'])) {  // Матч еще не состоялся нету даты
		        $match_event['false'][] = $e;
		    }
		    //dd($e);
		}



		//dd($match_event);



		
		return view('soccer-leagues', ['match_event' => $match_event, "title_l" => $title_l]);


	}



	public function matches ($matches_id) {


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://livescore6.p.rapidapi.com/matches/get-table?p=1&category=soccer&id=$matches_id",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"x-rapidapi-host: livescore6.p.rapidapi.com",
				"x-rapidapi-key: 7c8e63cc0bmshe5138c5c9def179p152440jsn6724b736be66"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$matches = json_decode($response, true);





		return view('soccer-matches', ['match' => $matches]);

	}

}

