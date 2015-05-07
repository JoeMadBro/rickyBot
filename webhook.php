<?PHP
$webhookKey = 'jZHWS3bxv5IurLLKSaovtkEN'; // key from http://getredditalerts.com
$redditUsername = 'RickyismBot'; //username of your bot
$redditPassword = 'Frig0ffBerb'; //password of your bot

//you shouldn't need to edit anything below this line, unless you want to customize the response

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
echo "<pre>";
if(!isset($_POST['redditAlertJson'])){ 
	die('Missing redditAlertJson');
}
$redditAlertJson = $_POST['redditAlertJson'];
$redditAlert = json_decode($redditAlertJson);
if($redditAlert->webhookKey!=$webhookKey){
	die('Wrong webhookKey');
}
require 'reddit.php';
$reddit = new reddit($redditUsername,$redditPassword);

$ricky = array("Friends with benedicts", 
	       "What comes around is all around",
	       "Smokes, lets go!",
	       "Let guybonds be guybonds",
	       "Burn the hatchet at both ends",
	       "Beauty is in the eyes when you hold her.",
	       "it doesnt take rocket appliances to get your grade 10",
	       "One man's garbage is another man-person's good un-garbage",
	       "It's just water under the fridge",
	       "Get two birds stoned at once",
	       "That was my mothers mating name",
	       "Chicken pot pie, my three favorite things",
	       "A link is only as long as your longest strong chain",
	       "It's all about supply and command",
	       "I dont have enough people words to make it understand you the way it understands me",
	       "Make my words",
	       "It's better to have guns and need them, than to not have guns and not need them",
	       "I'm not a pessimist, I'm an optometrist",
               "Worst case Ontario");
//0-19
$response = $reddit->addComment($redditAlert->reddit->name,'I guess I'm here to randomically pick something from my databanks \n\n' . $ricky[rand(0-19)]);
var_dump($response);
exit;
?>