<?php
//print('<br />reached at the top of the page');
require_once('updateOSMClass.php');
//exit;

/* Remember; 
 * By default the class is configured to talk to the SANDBOX where you will not have
 * an account until you make it. http://api06.dev.openstreetmap.org/
 */
 
 //Catch variables coming from the HTTP Request
 $id=$_GET['id'];
 //print "<br />id = " . $id;
 $selectedBuilding=$_GET['building'];
 $selectedStories=$_GET['stories'];
 
 //print ("<br />reached here <br />");

/* Howto use */

/* To fetch an object from the API you use the osm class */
$osm = new osm();
if(defined('DEBUG'))print ("<br />new osm created");

/* If we watch to delete or update a node or a way we have to fetch this object first */
$todelete = $osm->getWay($id);
//sazal //to view the contents of $todelete. apparently it is a text file
if(defined('DEBUG'))
{
$tempfilename= tempnam(sys_get_temp_dir(), 'hell');
$handle1=fopen($tempfilename, 'w');
$count1=fwrite($handle1, $todelete);
fclose($handle1);

if (!isset($todelete))
print "<br />could not se todelete?";
print "<br />" . $todelete;
print_r ($todelete);
print "<br />";
print "hello";
print "<br />". $todelete;
}

/* In order to commit changes we can start a changeset, in auto-commit, or in one transaction
 * for structural integrety the atomic method (true) is preferred
 */
$changeset = new changeset('Sazal(Solaris)', 'sunshine', false);

/* Lets make some tags */
$tags = array();
$changeset->addTag($tags, 'created_by', 'Sazal');
$changeset->addTag($tags, 'created_by2', 'Sthapit');

/* Lets create a quick and simple Changeset */
$changesetid = $changeset->simpleCreate($tags);
if(defined("DEBUG"))
print "<br />simpleCreate(tags) ran successfully :)";

/* Ok; what is our changesetid */
if(defined('DEBUG'))
echo "<br />" . $changesetid. "this is the changeset id <br />";

/* Since we have to update the changeset (and version for updates) an XML parser can be handy */ 
$xml = new SimpleXMLElement($todelete);
$xml->way['changeset'] = $changesetid;
$way = $xml->xpath('way');

$oldTags=array();
$oldTags = $xml->xpath('//tag[@k="key 1"] | //tag[@k="key 2"]');

if(defined('DEBUG'))
{
$i=0;
print "<br /> Before doing anything<br />";
foreach($oldTags as $oldTag)
{
print_r($oldTag); print "<br />";
}
}


foreach($oldTags as $tag)
{
	if(defined('DEBUG'))print_r ($tag); print "<br />";
	
    if($tag['k'] == 'key 1' || $tag['k'] == 'key 2') 
	{
		if(defined('DEBUG'))
		{	print "<br /> found one"; 
			print_r ($tag); 
			print "<br />";
		}
        $dom=dom_import_simplexml($tag);
        $dom->parentNode->removeChild($dom);
		if(defined('DEBUG')) print "<br /> removed one";
    }
}

if(defined('DEBUG'))
{
print "<br /> <br />";
foreach($oldTags as $oldTag)
{
print_r($oldTag); print "<br />";
}
}




$childTag = $way[0]->addChild('tag');
$childTag['k'] ='key 1';
$childTag['v']=$selectedBuilding;

$childTag = $way[0]->addChild('tag');
$childTag['k'] ='key 2';
$childTag['v']=$selectedStories;





///////////////***********Engaging********************////////////////
/*
$tagsToAdd = array();
$changeset->addTag($tagsToAdd, 'key1', 'value1');
$changeset->addTag($tagsToAdd, 'key2', 'value2');
//have to call tags($tagsToAdd) but where to put it??????
$toBeOutput = $changeset->tags($tagsToAdd);
$xml->addChild('$toBeOutput');
*/

///////////////**********DisEngaging****************/////////////////


//sazal
		// $xml->way['version']++;
		if(defined('DEBUG')) print_r($xml);

/* Render the structure back to XML */
$todelete = $xml->way->asXML();

//sazal
if(defined('DEBUG'))
{
echo ("<br />$todelete=$xml->way->asXML() executed succesfully :)");
echo $todelete;
//$todelete = $osm->getWay($id);
//sazal //to view the contents of $todelete. apparently it is a text file
$tempfilename= tempnam(sys_get_temp_dir(), 'heaven');
$handle1=fopen($tempfilename, 'w');
$count1=fwrite($handle1, $todelete);
fclose($handle1);
}
//sazal

/* Now we can use the deleteWay or updateWay function to change an existing way */
//$changeset->deleteWay($id, $todelete);
///////////////****************************//////////////////////////////////
$changeset->modifyWay($id, $todelete);

/* Some other examples; */

/* Creating a new node, way and relation */

/*$members = array();
$nodes = array();
$nodes[] = $changeset->simpleNodeCreate(0.0,0.0,$tags);

$changeset->addMember($members, 'node', $nodes[0]);

$way = $changeset->simpleWayCreate($nodes, $tags);

$changeset->addMember($members, 'way', $way, '');

$changeset->simpleRelationCreate($members, $tags);*/



/* This would commit our changeset, or just close it */
$changeset->close();
?>