<?php

function http_request($url){

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);

	curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);


	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);



	$output = curl_exec($ch);


	curl_close($ch);


	return $output;
}

   $data = http_request("https://api.kawalcorona.com/");

    $data = json_decode($data, TRUE);



$jumlah = count($data);

$nomor = 1;

for($i = 0; $i < $jumlah; $i++){

	$hasil = $data[$i]['attributes'];

?>
<tr>
  <td><?=$nomor++?></td>
  <td><?=$hasil['Country_Region']?></td>
  <td><?=$hasil['Confirmed']?></td>
  <td><?=$hasil['Recovered']?></td>
  <td><?=$hasil['Deaths']?></td>
</tr>

<?php

}

?>
