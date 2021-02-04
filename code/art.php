<?php    
require 'connection.php';
$conn    = Connect();

$ID =isset($_POST['id'])?$conn->real_escape_string($_POST['id']):null;

$amount   = isset($_POST['amount'])?$conn->real_escape_string($_POST['amount']):null;


$query   = "INSERT into item1 (amount) VALUES('" . $amount . "')";

if($ID)
{
    $query="UPDATE item1 SET amount='".$amount."' WHERE ID='$ID'";
    
}

if($conn->query($query)){
    
} else{
    echo $conn->error_log();
}

$conn->close();

?>










<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Bootstrap Template</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">


    <style>
.container
{
  margin-left: 200px;
  margin-right: 150px;
  margin-top: 150px;
}
    .cons
    {
      text-align: center;

    }

    .cons1
    {
      text-align: center;
       margin-left: 300px;
      margin-right: 300px;
    }
    .crown___2qJ5m {
    background-color: #fbf6f4;
    border-bottom: 1px solid #e6e2e0;
    font-size: 12px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 7px 60px;
}
.hey
{
  margin-left: 300px;
  margin-right: 300px;
}
.radio
{
  margin-left: 300px;
  margin-right: 300px;
}
.text-center
{
  margin-left: 120px;
  margin-right: 300px;
}

.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
  border-right:0; 
  box-shadow:0 0 0; 
  border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}


@media (min-width: 1240px)
.crown-inner___RNy0Z {
    margin: 0 auto;
    max-width: 1240px;
    padding: 0 20px;
}
.crown-inner___RNy0Z {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}
.crown-inner___RNy0Z {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}
.link___33BvM.secondary___3t2Ai {
    color: #65605b;
    text-decoration: none;
}
.sclass {
  
  
  margin-right: 10px; /** Change this value to whatever you wish **/
}
.live-item-bidding___2dKxe .footer___YQHNW .estimate___2AED- {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    text-align: center;
    text-transform: uppercase;
    font-family: "HelveticaNeueW01-65Medi";
}

.item-live-right___277t0 {
    overflow: hidden;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 40%;
    flex: 0 0 40%;
    max-width: 500px;
    margin-top: -410px;
    margin-left: 750px;
}
.live-item-right-top___25W-J {
    border-bottom: 1px solid #e6e2e0;
}
.live-item-header___3qTMy {
    display: block;
    padding: 0;
}
.live-item-header___3qTMy h1 {
    font-size: 28px;
    font-family: "Futura W01 Book";
    font-weight: normal;
    letter-spacing: 1px;
    margin: 0 0 20px;
    line-height: 33px;
    margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 40px;
}
.live-item-right-top___25W-J {
    border-bottom: 1px solid #e6e2e0;
}
.item-live-right___277t0 {
    overflow: hidden;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 40%;
    flex: 0 0 40%;
    max-width: 500px;
}
.live-item-detail-specs___3XDvf span {
    margin-right: 4px;
    float: left;
}
.live-item-detail-specs___3XDvf {
    font-size: 14px;
    color: #65605b;
    margin: 0 0 20px;
    width: 100%;
    height: 20px;
}
.live-item-bidding___2dKxe {
    background: #fbf6f4;
    border: 1px solid #e6e2e0;
    border-radius: 0.43em;
    min-height: 288px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-bottom: 30px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.live-item-bidding___2dKxe .header___3glH8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    border-bottom: 1px solid rgba(170, 170, 170, 0.2);
    padding: 15px 30px;
    font-size: 12px;
    font-family: "HelveticaNeueW01-55Roma";
    color: #65605b;
}

.live-item-bidding___2dKxe .header___3glH8 .countdown___XYSA0 {
    display: block;
}

.p
{
  display: block;
  margin: 0 8px 0 0;

}
.count-down___qpsYU {
    display: block;
}
.live-item-bidding___2dKxe .body___us5bz {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 30px;
}
.live-item-bidding___2dKxe .footer___YQHNW {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    border-top: 1px solid rgba(170, 170, 170, 0.2);
    padding: 20px 30px;
    font-size: 11px;
    letter-spacing: 1.12px;
    font-family: "HelveticaNeueW01-55Roma";
    color: #65605b;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: wrap;
    flex-flow: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.live-item-right-top___25W-J .register-for-auction___3AvQn {
    cursor: pointer;
    text-decoration: underline;
    display: block;
    color: #0097ba;
    padding-bottom: 25px;
}
.register-for-auction___ds_Fj {
    font-size: 13px;
    font-family: "HelveticaNeueW01-55Roma";
}
.link___33BvM {
    color: #0097ba;
    cursor: pointer;
    text-decoration: underline;
}
a {
    background-color: transparent;
}
.live-item-detail-specs___3XDvf .date____QUF6 {
    display: inline-block;


}
.live-item-header___3qTMy {
    display: block;
    padding: 0;
}
.live-item-bidding___2dKxe .footer___YQHNW .estimate___2AED- {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    text-align: center;
    text-transform: uppercase;
    font-family: "HelveticaNeueW01-65Medi";
}

.live-item-bidding___2dKxe .header___3glH8 {
    font-size: 12px;
    font-family: "HelveticaNeueW01-55Roma";
    color: #65605b;
  }
  .count-down___qpsYU .second___3F3Oe {
    margin: 0 8px 0 0;
    text-transform: uppercase;
}
.live-item-detail-specs___3XDvf span {
    margin-right: 4px;
    float: left;
}

.count-down___qpsYU .starts___1K22P {
    font-size: 10px;
    text-transform: uppercase;
}
  </style>


</head>
 <body>
 

  <div class="crown___2qJ5m">
  <div class="crown-inner___RNy0Z">
  <a class="link___33BvM secondary___3t2Ai" href="front.php"><span class="sclass">Home</span></a>
  <a class="link___33BvM secondary___3t2Ai" href="directory.php"><span class="sclass">Directory</span></a>
  
  <a class="link___33BvM secondary___3t2Ai" rel="noopener" target="_blank" href="consign.php"><span class="sclass">Consign</span></a>
  <a class="link___33BvM secondary___3t2Ai" href="logout.php"><span class="sclass">Logout</span></a><span class="sclass">|</span>
  <a class="link___33BvM secondary___3t2Ai" rel="nofollow" href="help.php"><span class="sclass">Help</span></a>
  </div>
  </div>


<div class="container">
    <div class><a href="/"><img  src="item1.jpg" height="400" width="400" ></a></div>
    </div>
<div class="item-live-right___277t0"><div class="live-item-right-top___25W-J"><div class="live-item-header___3qTMy"><h1><span>PIERRE AUGUSTE PAINTING</span></h1><div class="live-item-detail-specs___3XDvf"><span class="date____QUF6">Sun, Apr 15, 2018 9:30 PM IST</span></div></div><div class="live-item-bidding___2dKxe"><div class="header___3glH8"><div class="countdown___XYSA0 count-down___qpsYU"><div class="starts___1K22P"><span>Auction starts in</span></div><!--span class="day___3LgKg"><span>1 Day</span></span><span class="hour___wfHuJ"><span>1 Hr</span></span><span class="minute___2ehQo"><span>52 Min</span></span><span class="second___3F3Oe"><span>25 Sec</span></span></div></div><div class="body___us5bz"><div><div class="bid-status___2lBvR"><span class="leading___2zvWp"><span>$1,100</span></span-->
<p id=demo> </p></div><div class="bid-now___46_uK">
<form action ="" method="post">
<div class="label-group___P8p0d form-group">
<label class="label___3Vx-1 control-label"><span>Last Bid Was</span> <?php echo $amount; ?></label></div><div class="wrapper___lPVrb"><div class="inline-wrapper___3GO4n form-group">
<select class="select___jM2lu form-control" name="amount"><option value="1200">$1,200</option><option value="1300">$1,300</option><option value="1400">$1,400</option><option value="1500">$1,500</option><option value="1600">$1,600</option><option value="1700">$1,700</option><option value="1800">$1,800</option><option value="1900">$1,900</option><option value="2000">$2,000</option><option value="2250">$2,250</option><option value="2500">$2,500</option><option value="2750">$2,750</option><option value="3000">$3,000</option><option value="3250">$3,250</option><option value="3500">$3,500</option><option value="3750">$3,750</option><option value="4000">$4,000</option><option value="4250">$4,250</option><option value="4500">$4,500</option><option value="4750">$4,750</option><option value="5000">$5,000</option><option value="5500">$5,500</option><option value="6000">$6,000</option><option value="6500">$6,500</option><option value="7000">$7,000</option><option value="7500">$7,500</option><option value="8000">$8,000</option><option value="8500">$8,500</option><option value="9000">$9,000</option><option value="9500">$9,500</option><option value="10000">$10,000</option><option value="11000">$11,000</option><option value="12000">$12,000</option><option value="13000">$13,000</option><option value="14000">$14,000</option><option value="15000">$15,000</option><option value="16000">$16,000</option><option value="17000">$17,000</option><option value="18000">$18,000</option><option value="19000">$19,000</option><option value="20000">$20,000</option><option value="22500">$22,500</option><option value="25000">$25,000</option><option value="27500">$27,500</option><option value="30000">$30,000</option><option value="32500">$32,500</option><option value="35000">$35,000</option><option value="37500">$37,500</option><option value="40000">$40,000</option><option value="42500">$42,500</option><option value="45000">$45,000</option><option value="47500">$47,500</option><option value="50000">$50,000</option><option value="55000">$55,000</option><option value="60000">$60,000</option><option value="65000">$65,000</option><option value="70000">$70,000</option><option value="75000">$75,000</option><option value="80000">$80,000</option><option value="85000">$85,000</option><option value="90000">$90,000</option><option value="95000">$95,000</option><option value="100000">$100,000</option><option value="105000">$105,000</option><option value="110000">$110,000</option><option value="115000">$115,000</option><option value="120000">$120,000</option><option value="125000">$125,000</option><option value="130000">$130,000</option><option value="135000">$135,000</option><option value="140000">$140,000</option><option value="145000">$145,000</option><option value="150000">$150,000</option><option value="155000">$155,000</option><option value="160000">$160,000</option><option value="165000">$165,000</option><option value="170000">$170,000</option><option value="175000">$175,000</option><option value="180000">$180,000</option><option value="185000">$185,000</option><option value="190000">$190,000</option><option value="195000">$195,000</option><option value="200000">$200,000</option><option value="205000">$205,000</option><option value="210000">$210,000</option><option value="215000">$215,000</option><option value="220000">$220,000</option><option value="225000">$225,000</option><option value="230000">$230,000</option><option value="235000">$235,000</option><option value="240000">$240,000</option><option value="245000">$245,000</option><option value="250000">$250,000</option><option value="255000">$255,000</option><option value="260000">$260,000</option><option value="265000">$265,000</option><option value="270000">$270,000</option><option value="275000">$275,000</option><option value="280000">$280,000</option><option value="285000">$285,000</option><option value="290000">$290,000</option><option value="295000">$295,000</option><option value="300000">$300,000</option><option value="305000">$305,000</option><option value="310000">$310,000</option><option value="315000">$315,000</option><option value="320000">$320,000</option><option value="325000">$325,000</option><option value="330000">$330,000</option><option value="335000">$335,000</option><option value="340000">$340,000</option><option value="345000">$345,000</option><option value="350000">$350,000</option><option value="355000">$355,000</option><option value="360000">$360,000</option><option value="365000">$365,000</option><option value="370000">$370,000</option><option value="375000">$375,000</option><option value="380000">$380,000</option><option value="385000">$385,000</option><option value="390000">$390,000</option><option value="395000">$395,000</option><option value="400000">$400,000</option><option value="405000">$405,000</option><option value="410000">$410,000</option><option value="415000">$415,000</option><option value="420000">$420,000</option><option value="425000">$425,000</option><option value="430000">$430,000</option><option value="435000">$435,000</option><option value="440000">$440,000</option><option value="445000">$445,000</option><option value="450000">$450,000</option><option value="455000">$455,000</option><option value="460000">$460,000</option><option value="465000">$465,000</option><option value="470000">$470,000</option><option value="475000">$475,000</option><option value="480000">$480,000</option><option value="485000">$485,000</option><option value="490000">$490,000</option><option value="495000">$495,000</option><option value="500000">$500,000</option><option value="505000">$505,000</option><option value="510000">$510,000</option><option value="515000">$515,000</option><option value="520000">$520,000</option><option value="525000">$525,000</option><option value="530000">$530,000</option><option value="535000">$535,000</option><option value="540000">$540,000</option><option value="545000">$545,000</option><option value="550000">$550,000</option><option value="555000">$555,000</option><option value="560000">$560,000</option><option value="565000">$565,000</option><option value="570000">$570,000</option><option value="575000">$575,000</option><option value="580000">$580,000</option><option value="585000">$585,000</option><option value="590000">$590,000</option><option value="595000">$595,000</option><option value="600000">$600,000</option><option value="605000">$605,000</option><option value="610000">$610,000</option><option value="615000">$615,000</option><option value="620000">$620,000</option><option value="625000">$625,000</option><option value="630000">$630,000</option><option value="635000">$635,000</option><option value="640000">$640,000</option><option value="645000">$645,000</option><option value="650000">$650,000</option><option value="655000">$655,000</option><option value="660000">$660,000</option><option value="665000">$665,000</option><option value="670000">$670,000</option><option value="675000">$675,000</option><option value="680000">$680,000</option><option value="685000">$685,000</option><option value="690000">$690,000</option><option value="695000">$695,000</option><option value="700000">$700,000</option><option value="705000">$705,000</option><option value="710000">$710,000</option><option value="715000">$715,000</option><option value="720000">$720,000</option><option value="725000">$725,000</option><option value="730000">$730,000</option><option value="735000">$735,000</option><option value="740000">$740,000</option><option value="745000">$745,000</option><option value="750000">$750,000</option><option value="755000">$755,000</option><option value="760000">$760,000</option><option value="765000">$765,000</option><option value="770000">$770,000</option><option value="775000">$775,000</option><option value="780000">$780,000</option><option value="785000">$785,000</option><option value="790000">$790,000</option><option value="795000">$795,000</option><option value="800000">$800,000</option><option value="805000">$805,000</option><option value="810000">$810,000</option><option value="815000">$815,000</option><option value="820000">$820,000</option><option value="825000">$825,000</option><option value="830000">$830,000</option><option value="835000">$835,000</option><option value="840000">$840,000</option><option value="845000">$845,000</option><option value="850000">$850,000</option><option value="855000">$855,000</option><option value="860000">$860,000</option><option value="865000">$865,000</option><option value="870000">$870,000</option><option value="875000">$875,000</option><option value="880000">$880,000</option><option value="885000">$885,000</option><option value="890000">$890,000</option><option value="895000">$895,000</option><option value="900000">$900,000</option><option value="905000">$905,000</option><option value="910000">$910,000</option><option value="915000">$915,000</option><option value="920000">$920,000</option><option value="925000">$925,000</option><option value="930000">$930,000</option><option value="935000">$935,000</option><option value="940000">$940,000</option><option value="945000">$945,000</option><option value="950000">$950,000</option><option value="955000">$955,000</option><option value="960000">$960,000</option><option value="965000">$965,000</option><option value="970000">$970,000</option><option value="975000">$975,000</option><option value="980000">$980,000</option><option value="985000">$985,000</option><option value="990000">$990,000</option><option value="995000">$995,000</option><option value="1000000">$1,000,000</option><option value="1005000">$1,005,000</option><option value="1010000">$1,010,000</option><option value="1015000">$1,015,000</option><option value="1020000">$1,020,000</option><option value="1025000">$1,025,000</option><option value="1030000">$1,030,000</option><option value="1035000">$1,035,000</option><option value="1040000">$1,040,000</option><option value="1045000">$1,045,000</option><option value="1050000">$1,050,000</option><option value="1055000">$1,055,000</option><option value="1060000">$1,060,000</option><option value="1065000">$1,065,000</option><option value="1070000">$1,070,000</option><option value="1075000">$1,075,000</option><option value="1080000">$1,080,000</option><option value="1085000">$1,085,000</option><option value="1090000">$1,090,000</option><option value="1095000">$1,095,000</option><option value="1100000">$1,100,000</option><option value="1105000">$1,105,000</option><option value="1110000">$1,110,000</option><option value="1115000">$1,115,000</option><option value="1120000">$1,120,000</option><option value="1125000">$1,125,000</option><option value="1130000">$1,130,000</option><option value="1135000">$1,135,000</option><option value="1140000">$1,140,000</option><option value="1145000">$1,145,000</option><option value="1150000">$1,150,000</option><option value="1155000">$1,155,000</option><option value="1160000">$1,160,000</option><option value="1165000">$1,165,000</option><option value="1170000">$1,170,000</option><option value="1175000">$1,175,000</option><option value="1180000">$1,180,000</option><option value="1185000">$1,185,000</option><option value="1190000">$1,190,000</option><option value="1195000">$1,195,000</option><option value="1200000">$1,200,000</option><option value="1205000">$1,205,000</option><option value="1210000">$1,210,000</option><option value="1215000">$1,215,000</option><option value="1220000">$1,220,000</option><option value="1225000">$1,225,000</option><option value="1230000">$1,230,000</option><option value="1235000">$1,235,000</option><option value="1240000">$1,240,000</option><option value="1245000">$1,245,000</option><option value="1250000">$1,250,000</option><option value="1255000">$1,255,000</option><option value="1260000">$1,260,000</option><option value="1265000">$1,265,000</option><option value="1270000">$1,270,000</option><option value="1275000">$1,275,000</option><option value="1280000">$1,280,000</option><option value="1285000">$1,285,000</option></select></div><div class="inline-wrapper___3GO4n form-group"><span class=""><button class="btn btn-default" id="button"><span>Place Bid</span></button></span></div></div></form></div></div></div></span></span>



<script>
document.getElementById("button").disabled = true;
// Set the date we're counting down to
var countDownDate = new Date("Apr 15, 2018 21:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;



    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        document.getElementById("button").disabled = false;
    }
}, 1000);

</script>
</body>
</html>