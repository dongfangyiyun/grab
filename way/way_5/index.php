<?php

$url = 'https://show.re.taobao.com/feature_v1.htm?auction_ids=544157372370,538314577331,526517081069,541678016772,44979930310,523283774234,541745803989,536372992180,543814967859,539424007654,529116857145&user_ids=2857950427,277891388,1102790144,255503381,2452680732,720719831,2447728312,787758609,2925140193,1847413873,1698220480&feature_names=promoPrice,dsrDescribe,dsrService,dsrDeliver,dsrDescribeGap,dsrServiceGap,dsrDeliverGap&cb=tbcc_p4p_trident_c2016_8_131175_14847277759991484727776143';

$data = file_get_contents($url);

$json = substr($data, 63, strlen($data) - 64);
$data = json_decode($json);

$auction = $data->auction;
$user    = $data->user;

$new_auction = [];
$new_user    = [];

foreach ($auction as $key => $value) {
    $new_auction[] = [
        'auction_id' => $value->auction_id,
        'promoPrice' => $value->promoPrice,
    ];
}

foreach ($user as $key => $value) {
    $new_user[] = [
        'user_id'        => $value->user_id,
        'dsrServiceGap'  => $value->dsrServiceGap,
        'dsrDescribeGap' => $value->dsrDescribeGap,
        'dsrDescribe'    => $value->dsrDescribe,
        'dsrDeliverGap'  => $value->dsrDeliverGap,
        'dsrDeliver'     => $value->dsrDeliver,
        'dsrService'     => $value->dsrService,
    ];
}

echo "<pre>";
print_r($new_auction);
echo "====================================================================<br />";
echo "<pre>";
print_r($new_user);
