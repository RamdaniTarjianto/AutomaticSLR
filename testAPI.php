<?php
        // set_time_limit(10000);
		// $query = "https://www.ebi.ac.uk/europepmc/webservices/rest/search?query=TMJ&resultType=core&pageSize=1000&format=json";
		// $url = file_get_contents($query);
		// $data = json_decode($url, true);
		// // var_dump($publishedYear = $data["resultList"]["result"][1]["bookOrReportDetails"]["publisher"]);
        // for ($i = 0; $i < 20; $i++) {
        //     $publishedYear = $data["resultList"]["result"][$i]["bookOrReportDetails"]["publisher"];
        //     echo $publishedYear;

        // } 

        // IEEE
        set_time_limit(10000);
		$query = "https://api.semanticscholar.org/graph/v1/paper/search?query=TMJ&limit=100&fields=title,authors,abstract,url,year";
		$url = file_get_contents($query);
		$data = json_decode($url, true);
		// var_dump($data['data'][0]["authors"][0]['name']);
        // echo $data['articles'][0]["authors"]["authors"];
        $aut = "Author: ";
        for ($i = 0; $i < sizeof($data['data'][0]["authors"]); $i++) {
            $aut .= $data['data'][0]["authors"][$i]['name'] . ", ";
        } 
        echo $aut;


?>