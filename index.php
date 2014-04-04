function changeTOW($week,$sow){
	//epoch 315936000000 
	$epochDate = date_create("1980-01-05 17:00:00");
	$EPOCH= date_format($epochDate,"U")*1000;
	$ONE_DAY = 1000 * 60 * 60 * 24;
	$dateConv = $EPOCH + $week * 7 * $ONE_DAY + $sow * 1000;
    return gmdate("U = Y-m-d H:i:s", $dateConv/1000);
}

echo changeTOW(1756,470339);//e.g 1378435139 = 2013-09-06 02:38:59
