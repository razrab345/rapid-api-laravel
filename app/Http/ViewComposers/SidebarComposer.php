<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;

class SidebarComposer
{

    protected $response_sidebar;

    
    public function __construct(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://livescore6.p.rapidapi.com/leagues/list?category=soccer",
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

        $leagues_arr = json_decode($response, true);

        $leagues_arr_item = $leagues_arr["Ccg"];


        $league_data = [];
        foreach ($leagues_arr_item as $leagues) {
            $l_name = $leagues["Cnm"]; //Лига name
            $l_value = $leagues["Ccd"]; //Лига value


            if (isset($leagues['Ccntr'])) {  // Чемпионат страны
                $ccntr = 1;

                $clv = [];
                foreach ($leagues['Stages'] as $cl) {
                    $clv[] = ['lv' => $cl,];
                }

            }
            else {      // лига
                $ccntr = 0;
                $clv = 0;
            }

            //var_dump($clv);

            $league_data[] = ['name'=> $l_name, 'value'=> $l_value, 'clv' => $clv,];
            
        }
        //var_dump($league_data);

        $this->response_sidebar = $league_data;

    }



    public function compose(View $view)
    {
        $t1 = $this->response_sidebar;
        return $view->with('t1', $t1);
    }
}



?>
