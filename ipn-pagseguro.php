<?php

$ipnkey = 'http://mysite.com/?s2member_paypal_notify=1&s2member_paypal_proxy=PagseGuro&s2member_paypal_proxy_verification=key&custom=mysite.com&txn_type=subscr_signup&mc_currency=BRL&';


/*Start Replacing Key values*/

/*email*/

$_POST['payer_email'] = $_POST['CliEmail'];
unset($_POST['CliEmail']);


/*item*/

$_POST['item_number'] = $_POST['ProdDescricao_1'];
unset($_POST['ProdDescricao_1']);


$string = $_POST['item_number']; 

function extract_numbers($string)
{
preg_match_all('/([\d]+)/', $string, $match);

return $match[0];
}


$numbers_array = extract_numbers($string);



$_POST['item_number'] = $numbers_array[0];




/*subscr_id*/

$_POST['subscr_id'] = $_POST['TransacaoID'];
unset($_POST['TransacaoID']);


/*date*/

$_POST['subscr_date'] = $_POST['DataTransacao'];
unset($_POST['DataTransacao']);





/*Build POST as simple string cause cURL can not handle complex arrays*/

$post_vars = http_build_query($_POST);

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $ipnkey.$post_vars,
    CURLOPT_USERAGENT => 'PagseGuro Data'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

/*cURL*/



//echo $post_vars['tname'];

    //echo $post_vars;
          
         /// echo $_POST["tname"];


?>
<html>
<head>
	<title>Redirecting...</title>
	<!--Or anything you like-->
</head>
<body>

	<script type="text/javascript">

location = '/pagseguro-obrigado/';

/*Or anything you like*/


	</script>

</body>
</html>
