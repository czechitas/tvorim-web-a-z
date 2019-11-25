<?php

mb_internal_encoding("UTF-8");

function generateMessageID()
{
    return sprintf(
	"<%s.%s@%s>",
	base_convert(microtime(), 10, 36),
	base_convert(bin2hex(openssl_random_pseudo_bytes(8)), 16, 36),
	$_SERVER['SERVER_NAME']
    );
}

function validate_and_send() {
    if (!isset($_POST["tajnyklic"]) || ($_POST["tajnyklic"] != 'czechitas')) {
	return "Nezadala jsi supertajný kód!";
    }

    if (!isset($_POST["email"]) || empty($_POST["email"])) {
	return "Nezadala jsi emailovou adresu!";
    }
    $email = $_POST["email"];

    if (!isset($_POST["subject"]) || empty($_POST["subject"])) {
	$subject = "Nezadaný předmět";
    } else {
	$subject = $_POST["subject"];
    }

    $body = "Ahoj Czechito!\n\n" .
	    "Tohle je obsah formuláře, který jsi mi odeslala:\n\n";

    foreach ($_POST as $key => $value) {
	$body .= $key . "=\"" . $value . "\"\n";
    }

    $headers = "From: " . mb_encode_mimeheader("Tvořím Web") ." <tvorim.web@czechitas.cz>\n" .
	       "To: $email\n" .
	       "Date: " . date("r") . "\n" .
	       "Message-ID: " . generateMessageID() ."\n" .
	       "Content-Type: text/plain; charset=utf-8\n" .
	       "Reply-to: Dan Vratil <me@dvratil.cz>";

    if (!mail($email, mb_encode_mimeheader($subject), $body, $headers)) {
	return "Email se nepodařilo odeslat :( Řekni Danovi, ať se na to podívá ;-)";
    }

    return true;
}

$res = validate_and_send();
if ($res === true) {
    $ok = true;
    $msg = "Zpráva byla úspěšně odeslána. Podívej se do své emailové schránky.";
} else {
    $ok = false;
    $msg = $res;
}

?>

<!DOCTYPE>
<html>
    <head>
	<title>Emailovací formulář</title>
	<style>
	body {
	    font-size: 1.3em;
	    font-family: sans-serif;
	}
	.container {
	    width: 100%; height: 100%;
	    display: flex; justify-content: center; align-items: center;
	}
	.msg {
	    padding: 30px 30%;
	    border-radius: 4px;
	}
	.ok { color: #000; background-color: #13EBA2; border: 1px solid #056644; }
	.error { color: #FFF; background-color: #D5212E; border: 1px solid #680101; }
	</style>
    </head>
    <body>
	<div class="container">
	    <p class="msg <?php if ($ok) { echo "ok"; } else { echo "error"; } ?>"><?php echo $msg; ?></p>
	</div>
    </body>
</html>
