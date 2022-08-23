<html><center>
<form method="GET"> 

    <input type="text" name="url" placeholder="masukin link shopee">
    <input type="submit">
    <p><h5>Coded With ❤️‍ <a href="wwww.instagram.com/yaelahvannn">Irvan D.S</a></h5>
</form>
</center>
</html>
<?php
if(isset($_GET['url'])){
$url = $_GET['url'];
$explodeUrl = explode("-i.",$url);

if(preg_match("/\?sp_atk=/", $explodeUrl[1])){
    $id = explode(".", $explodeUrl[1]);
    $shopId = $id[0];
    $explodeItemId = explode("?sp_atk=", $id[1]);
    $itemId = str_replace("?sp_atk=",'',$explodeItemId[0]);
}else{
    $id = explode(".", $explodeUrl[1]);
    $shopId = $id[0];
    $itemId = $id[1];
}

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://shopee.co.id/api/v4/item/get?itemid=$itemId&shopid=$shopId");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: www.google-analytics.com';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Cookie: REC_T_ID=dd719b0f-f770-11ec-8ec0-2cea7f961189; _gcl_au=1.1.1977272451.1656482557; _fbp=fb.2.1656482561944.311221545; G_ENABLED_IDPS=google; _gid=GA1.3.218166655.1659543323; SPC_CLIENTID=NTMzZ29URHpNOXE1ztlcgteabzknppqx; SC_DFP=ZDvwOTNARqtRwhcdVmZhIHgtcJyZwioB; SPC_F=ncNnxHYCXFNqA9GSjhg3KqJ9SFrNMLN8; _ga_KK6LLGGZNQ=GS1.1.1659668262.2.0.1659668262.0; _gcl_aw=GCL.1659668263.CjwKCAjw3K2XBhAzEiwAmmgrAuTc_QyHcMTOHqeFJH6RobNFE_0kJmtsNkV78DF7chPWrdIYn9VviBoCqr8QAvD_BwE; _gac_UA-61904553-8=1.1659668265.CjwKCAjw3K2XBhAzEiwAmmgrAuTc_QyHcMTOHqeFJH6RobNFE_0kJmtsNkV78DF7chPWrdIYn9VviBoCqr8QAvD_BwE; SPC_SC_TK=adcdb399460d40d9d4183dc2ea01aa32; SPC_SC_UD=833376014; SPC_STK=kPgf98BMU5GGUXDvLxTNKCxGG1kZeehWEKfsPvfxKpJXgQOym8cAz70LHwpCkiTcsFNLoVu3hIdwZFyb/QFQYEtMMSgjDM7y29smKtDz+DMi2QUm3njfF7uilBcazETSJA/ycL6Cw+L8Srvf9DeMVE6gc+lEM6IlA0XjT9K/XPQ=; _med=affiliates; SPC_SI=NS3qYgAAAAA0ampyVlAzMgqlAQAAAAAAMUZoMk1mblU=; SPC_EC=-; SPC_U=-; SPC_R_T_ID=9OB4XB8PwUxmO5Z1AphkM9ybReKSxRiaJGtTvmqRWrXDdtwKV1Lm8z7iHN5vnh+lmk8PDQ6BI8FGgIUZ5r6EJEaWrAWSFNO3uprYhs3GXjI=; SPC_R_T_IV=wLzdWq6b/9Dm15Hm06WD2A==; SPC_T_ID=9OB4XB8PwUxmO5Z1AphkM9ybReKSxRiaJGtTvmqRWrXDdtwKV1Lm8z7iHN5vnh+lmk8PDQ6BI8FGgIUZ5r6EJEaWrAWSFNO3uprYhs3GXjI=; SPC_T_IV=wLzdWq6b/9Dm15Hm06WD2A==; cto_bundle=nWp74F9oRG1RWjklMkJaRWFaUEdhUzJ1MUlRQ3dIekY3VEh3SXlUMFp4MkVyMWclMkJ3M0lneFB4cyUyQktKanZjMjExb0dHYkFvTmJCJTJCc3RiSlVaUzh1TEV1NVR5Nm9KcElOMGkwN2s0MXJKN3kwcG5LVCUyQiUyRllWVDhQZ3l5bFdWakJoZm5BTE1hQlJIb0xmVkl3cVRPUWJuYnkwYTdyU1ElM0QlM0Q; _ga=GA1.1.1335098810.1656482573; _gali=modal; _ga_SW6D8G0HXK=GS1.1.1659798052.19.0.1659798052.60';
$headers[] = 'If-None-Match: W/\"36c289a1b744d497d7f9481f71d560ec\"';
$headers[] = 'Referer: https://shopee.co.id/';
$headers[] = 'Sec-Ch-Ua: \"Chromium\";v=\"104\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"104\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'Sec-Ch-Ua-Platform: \"Android\"';
$headers[] = 'Sec-Fetch-Dest: script';
$headers[] = 'Sec-Fetch-Mode: no-cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36';
$headers[] = 'If-Modified-Since: Tue, 22 Oct 2019 18:15:00 GMT';
$headers[] = 'Origin: https://shopee.co.id';
$headers[] = 'Content-Type: text/plain';
$headers[] = 'Purpose: prefetch';
$headers[] = 'Service-Worker: script';
$headers[] = 'X-Api-Source: rweb';
$headers[] = 'X-Csrftoken: sccIvHAPkb0UKZCyfnomH3jyHn1wmaCk';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'X-Shopee-Language: id';
$headers[] = 'If-None-Match-: 55b03-4e66abd314ae965ebc1cbcc51c4721c5';
$headers[] = 'X-Api-Src-List: android,rweb';
$headers[] = 'Content-Length: 0';
$headers[] = 'X-Client-Data: CIS2yQEIo7bJAQjEtskBCKmdygEIk6HLAQijvMwBCN+8zAEIssHMAQjEwcwBCNfBzAE=';
$headers[] = 'Af-Ac-Enc-Dat: AAYyLjIuMTAAAAGCc6x2qwAAAAABXQAAAAAAAAAB9vIEY/xv/G8r7/oASvj8D23+N9hEP75UIWHrpFcDypO+H8uT+Gosv1E9pzadbBz2+rg2Go7CQbn5zj2ra7nY1JFjs4yw8pGWNnYQjtmnppb3oYiX+jpZVvxIGK2fCyHAo/2ZtgJKzLhYtYX9iH4/kKjnZNpryLZEMMkCWnPWEMe/MtVgPHspVplZEp7UEzaaFvGXHKcJWjhLlRAl7YkyiT+Nb4u1WHdUbCpXPApg4mao52Taa8i2RDDJAlpz1hDHfYFqRMJ1SAq7hhTyGTAR5DusTfq2UZn05nCDFMzBRHM5BO2ZnDH0ec6NZLJNZWqpFcGRGHKxkY6cFkOLvuvvaz2ndw8bsuUHRXeCngrQZiLRe1RgsdJGl2STYvA6TngIDk9ORAwF0Wi7jzmzabIekpFjs4yw8pGWNnYQjtmnppar7MK2/ZqLJl0dSNbMCoOodwNiLEbIPUbu/3cEQGAp/A==';
$headers[] = 'Connection: keep-alive';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$decode = json_decode($result, true);
$variant = $decode['data']['tier_variations'];
$images = $variant[0]['images'];
$variant_name = $variant[0]['options'];
$variant_stock = $variant[0]['summed_stocks'];
$countimg = count($images);
$no=1;

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
); 

$localpath = "D:\shopee\/";
echo '============LINK FOTO============'.'<br>';
for($i=0; $i<$countimg; $i++){

    print('<a href="'.'https://cf.shopee.co.id/file/'.$images[$i].'">'.'Foto ke '.$no++.'=> '.$variant_name[$i].'</a>'.'<br>');
    $imageUrl = 'https://cf.shopee.co.id/file/'.$images[$i];
    $imageName = $variant_name[$i].'.jpg';
    $saveImage = $localpath.$imageName;
    file_put_contents($saveImage, file_get_contents($imageUrl));
   
}
echo '============STOCK============'.'<br>';
 for($a=0; $a<$countimg; $a++){

    print($variant_name[$a].' = '.$variant_stock[$a].'<br>');

   
}


// foreach($variant as $images){

// }
}
?>