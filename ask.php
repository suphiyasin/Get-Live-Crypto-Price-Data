function price($birim){
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.moonpay.com/v3/currencies/ask_price?cryptoCurrencies=bat,bch,bnb,btc,comp,doge,dot,eth,ltc,shib,uni,usdc,usdt,wbtc,xlm,xrp&fiatCurrencies=aud,bgn,brl,cad,chf,cny,cop,czk,dkk,dop,egp,eur,gbp,hkd,hrk,idr,ils,jod,jpy,kes,krw,kwd,lkr,mad,mxn,myr,ngn,nok,nzd,omr,pen,pkr,pln,ron,sek,sgd,thb,try,twd,usd,vnd,zar&apiKey=pk_live_k6WSd0AaHVEXPV4WlBBrsvRMrAhRH');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: api.moonpay.com';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Cookie: ';
$headers[] = 'Origin: https://buy.moonpay.com';
$headers[] = 'Referer: https://buy.moonpay.com/';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"101\", \"Google Chrome\";v=\"101\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36';
$headers[] = 'X-Trace-Id: KEFSNQYD';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$kah = json_decode($result, true);
echo $kah['BTC'][$birim].' '.$birim;
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
	
	
	
}
price("USD");
