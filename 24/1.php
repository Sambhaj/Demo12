<?php
include('config.php');
?>
<?php
$req="";
$blank="";
$msg="";
$sucss="";
$req="";
$message="";
$main_id="";
$select="";

/* $sql=mysql_query("SELECT subfaculty FROM faculty where faculty="$faculty" ");
	echo"$sql"; */
if(isset($_POST['submit'])) {
	
// declare all variable
$ppr="";
$m=$_POST['country'];
$s=$_POST['state'];




{
	
	
	
	
	
	
mysql_query("INSERT INTO  tb_demo1(m,s) VALUES('$s','$m')");

	echo "<script>alert('Register succssefully')</script>";
} 
}
else {
			 $req="";
	 $msg="Please Fill In All Mandatory Fields!";
			}



?>



<html>
<script>// Countries
var country_arr = new Array("Art", "commerce", "science", "education", "engineering and technology", "home science", "law", "medicine", "social science")
// States
var s_a = new Array();
s_a[0] = "";
s_a[1] = "music|Urdu|sanskrit|hindi|english|marathi|persion";
s_a[2] = "business management|commerce|business economics|account n stats";
s_a[3] = "chemistry|botany|physics|biochemistry/micro|mathematices|biotechnology|zoology|statices|computer science|Geology|environmental scienc";
s_a[4] = "education|physical education";
s_a[5] = "computer engineering|civil engineering|production engineering|production engineering|electronic engineering|mechanical  engineering|information technology|textile engineering|chemical engineering|electrical engineering";
s_a[6] = "home science|home science";
s_a[7] = "law";
s_a[8] = "pharmaceutical science";
s_a[9] = "ecomomics|library science|sociology|mass communication|histroy|psycology|social work|geography|home economics|yog-shastra|philosophy|political science";
<!-- s_a[10] = "Aragatsotn|Ararat|Armavir|Geghark'unik'|Kotayk'|Lorri|Shirak|Syunik'|Tavush|Vayots' Dzor|Yerevan";
 -->

function populateStates(countryElementId, stateElementId) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select State', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Country', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }
}</script>
<body>
    <div align="center">
	<form method="post">
         <h1>Free JavaScript Country/State Selection Demo</h1>

        <hr/>
        <br/>Select Country (with states):
        <select id="country" name="country"></select>
        <br />State:
        <select name="state" id="state"></select>
        <br/>
<script language="javascript">
            populateCountries("country", "state");
            populateCountries("country2");
        </script>
        <br/>
		              <button class='btn-lg btn-primary' type='submit' name="submit" style="background-color:#689F1D;border-color:#689F1D">Submit</button>
</form>
        <br />
        <br />
    </div>
</body>
</html>