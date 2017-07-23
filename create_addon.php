<!DOCTYPE html>
<html>
<head><br>
<center><img src="img/Addon_Creator.jpg" width="70%"></center>
<br>
<style>
body {
    background-color: #99bbff;
}
</style>
</head>
</html>

<fieldset>
<legend>BECOME A DEVELOPER IN 10 STEPS:</legend>
<p>
1. Sign up at <a href="https://github.com/" target="_blank"><font color="blue">github</font></a> (it's free of charge).<br>
2. Once you have a username registered on github use the repository creator <a href="create_repo.php"><font color="blue">here</font></a>.<br>
3. Create a new repository on github and give it the same name as the repo id you created in the previous step.<br>
4. Download the <a href="https://desktop.github.com/" target="_blank"><font color="blue">Github Desktop app</font></a> (unless you prefer command line stuff) and clone the newly created repository.<br>
5. Download and install <a href="https://www.python.org/downloads/" target="_blank"><font color="blue">Python 2.7.x</font></a>. Make sure it's 2.7.x and not 3.x, also if asked make sure you install IDLE.<br>
6. Download the <a href="xml_generator/_repo_xml_generator.py"><font color="blue">_repo_xml_generator.py</font></a> file and copy to the root directory of your cloned repo.<br>
7. Using the form below create an add-on and then extract the contents to the root of your cloned repo.<br>
8. Extract the contents of your repository zip file to the root of your cloned repo (you should now have a repo folder and a plugin folder).<br>
9. Run the _repo_xml_generator.py file in Python IDLE. This will zip up your add-ons and create the necessary extra files.<br>
10. Using the Github Desktop app simply commit your changes and press the sync button.<br><br>

CONGRATULATIONS! By following these 10 simple steps you've gone from total noob to dev!!! Ok maybe not but hopefully this framework will help you on your development journey. For any questions please use the dedicated forum at <a href="http://www.noobsandnerds.com/support/forumdisplay.php?fid=246" target="_blank"><font color="blue">noobsandnerds.com</font></a>
</fieldset>
<br><br><form action="/create_addon.php" method="post">
	<fieldset>
		<legend>CREATE AN ADD-ON</legend>
		<h3>Please enter an add-on id and choose the type of add-on this is going to be.<br>
		Please only use lowercase ASCII characters in your add-on id. Certain Kodi functions can struggle with mixed case.</h3><br>

		<label>Add-on ID:  </label>
		<input type="text" name="addon_id" value="plugin.video.test">
		<br><br>
		<label>Add-on Name:  </label>
		<input type="text" name="addon_name" value="My Test Add-on">
		<br><br>
		<label>Developer Name:  </label>
		<input type="text" name="dev_name" value="Me">
		<br><br>
		<label>Add-on Summary:  </label>
		<input type="text" style="width: 80%;" name="summary" value="Quick one liner about the add-on">

		<br><br>

		<label>Add-on Description:  </label>
		<input type="text" style="width: 80%;" name="description" value="Full add-on description.">

		<br><br>

		<label>Content type this add-on provides (tick all that apply):  </label>
		<input type="checkbox" name="provides_list[]" value="audio"><label>Audio</label>
		<input type="checkbox" name="provides_list[]" value="image"><label>Pictures</label>
		<input type="checkbox" name="provides_list[]" value="executable"><label>Program</label>
		<input type="checkbox" name="provides_list[]" value="video"><label>Video</label>

		<br><br>

		<label>Platform (tick "All" if not platform specific):  </label>
		<input type="checkbox" name="platform_list[]" value="all"><label>All</label>
		<input type="checkbox" name="platform_list[]" value="android"><label>Android</label>
		<input type="checkbox" name="platform_list[]" value="ios"><label>iOS</label>
		<input type="checkbox" name="platform_list[]" value="linux"><label>Linux</label>
		<input type="checkbox" name="platform_list[]" value="osx"><label>OSX</label>
		<input type="checkbox" name="platform_list[]" value="osx32"><label>OSX 32</label>
		<input type="checkbox" name="platform_list[]" value="osx64"><label>OSX 64</label>
		<input type="checkbox" name="platform_list[]" value="windx"><label>Windows</label>
		<input type="checkbox" name="platform_list[]" value="xbox"><label>XBMC4Xbox</label>

		<br><br>
		<label>Genres your repository supplies content for (tick all that apply):  </label><br>
		<font color="red"><strong>*</strong></font> Please note: Only set as adult if your add-on contains explicit XXX content. We have built adult filter software which can toggle adult based addons on/off. Marking as adult will mean on some systems your add-on will be disabled unless the system has the adult feature unlocked. See our TRMC software for further details.<br><br>
		<table>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="adult"><label>Adult</label></td>
		<td><input type="checkbox" name="genre_list[]" value="anime"><label>Anime</label></td>
		<td><input type="checkbox" name="genre_list[]" value="audiobooks"><label>Audiobooks</label></td>
		<td><input type="checkbox" name="genre_list[]" value="comedy"><label>Comedy</label></td>
		<td><input type="checkbox" name="genre_list[]" value="comics"><label>Comics</label></td>
		<td><input type="checkbox" name="genre_list[]" value="devtools"><label>Developer Tools</label></td>
		<td><input type="checkbox" name="genre_list[]" value="documentary"><label>Documentary</label></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="downloads"><label>Downloads</label></td>
		<td><input type="checkbox" name="genre_list[]" value="food"><label>Food & Drink</label></td>
		<td><input type="checkbox" name="genre_list[]" value="gaming"><label>Gaming</label></td>
		<td><input type="checkbox" name="genre_list[]" value="health"><label>Health & Fitness</label></td>
		<td><input type="checkbox" name="genre_list[]" value="howto"><label>How To...</label></td>
		<td><input type="checkbox" name="genre_list[]" value="kids"><label>Kids</label></td>
		<td><input type="checkbox" name="genre_list[]" value="livetv"><label>Live TV</label></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="movies"><label>Movies</label></td>
		<td><input type="checkbox" name="genre_list[]" value="music"><label>Music</label></td>
		<td><input type="checkbox" name="genre_list[]" value="news"><label>News</label></td>
		<td><input type="checkbox" name="genre_list[]" value="podcasts"><label>Podcasts</label></td>
		<td><input type="checkbox" name="genre_list[]" value="radio"><label>Radio</label></td>
		<td><input type="checkbox" name="genre_list[]" value="religion"><label>Religion</label></td>
		<td><input type="checkbox" name="genre_list[]" value="space"><label>Space</label></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="sports"><label>Sports</label></td>
		<td><input type="checkbox" name="genre_list[]" value="subscription"><label>Subscription</label></td>
		<td><input type="checkbox" name="genre_list[]" value="tech"><label>Technology</label></td>
		<td><input type="checkbox" name="genre_list[]" value="trailers"><label>Trailers</label></td>
		<td><input type="checkbox" name="genre_list[]" value="tvshows"><label>TV Shows</label></td>
		<td><input type="checkbox" name="genre_list[]" value="wizard"><label>Wizard</label></td>
		</tr>
		</table>

		<br><br>

		<label>Regions/Languages your add-no provides content for (tick all that apply):  </label><br>
		<table>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="african"><label>African</label></td>
		<td><input type="checkbox" name="genre_list[]" value="arabic"><label>Arabic</label></td>
		<td><input type="checkbox" name="genre_list[]" value="asian"><label>Asian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="australian"><label>Australian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="austrian"><label>Austrian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="belgian"><label>Belgian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="brazilian"><label>Brazilian</label></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="canadian"><label>Canadian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="columbian"><label>Colombian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="czech"><label>Czech</label></td>
		<td><input type="checkbox" name="genre_list[]" value="danish"><label>Danish</label></td>
		<td><input type="checkbox" name="genre_list[]" value="dominican"><label>Dominican</label></td>
		<td><input type="checkbox" name="genre_list[]" value="dutch"><label>Dutch</label></td>
		<td><input type="checkbox" name="genre_list[]" value="egyptian"><label>Egyptian</label></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="filipino"><label>Filipino</label></td>
		<td><input type="checkbox" name="genre_list[]" value="finnish"><label>Finnish</label></td>
		<td><input type="checkbox" name="genre_list[]" value="french"><label>French</label></td>
		<td><input type="checkbox" name="genre_list[]" value="german"><label>German</label></td>
		<td><input type="checkbox" name="genre_list[]" value="greek"><label>Greek</label></td>
		<td><input type="checkbox" name="genre_list[]" value="hebrew"><label>Hebrew</label></td>
		<td><input type="checkbox" name="genre_list[]" value="hungarian"><label>Hungarian</label></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="icelandic"><label>Icelandic</label></td>
		<td><input type="checkbox" name="genre_list[]" value="indian"><label>Indian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="irish"><label>Irish</label></td>
		<td><input type="checkbox" name="genre_list[]" value="italian"><label>Italian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="japanese"><label>Japanese</label></td>
		<td><input type="checkbox" name="genre_list[]" value="Korean"><label>Korean</label></td>
		<td><input type="checkbox" name="genre_list[]" value="lebanese"><label>Lebanese</label></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="mongolian"><label>Mongolian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="moroccan"><label>Moroccan</label></td>
		<td><input type="checkbox" name="genre_list[]" value="nepali"><label>Nepali</label></td>
		<td><input type="checkbox" name="genre_list[]" value="newzealand"><label>New Zealand</label></td>
		<td><input type="checkbox" name="genre_list[]" value="norwegian"><label>Norwegian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="pakistani"><label>Pakistani</label></td>
		<td><input type="checkbox" name="genre_list[]" value="polish"><label>Polish</label></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="portuguese"><label>Portuguese</label></td>
		<td><input type="checkbox" name="genre_list[]" value="romanian"><label>Romanian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="russian"><label>Russian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="singapore"><label>Singapore</label></td>
		<td><input type="checkbox" name="genre_list[]" value="spanish"><label>Spanish</label></td>
		<td><input type="checkbox" name="genre_list[]" value="swedish"><label>Swedish</label></td>
		<td><input type="checkbox" name="genre_list[]" value="swiss"><label>Swiss</label></td>
		</tr>
		<tr>
		<td><input type="checkbox" name="genre_list[]" value="syrian"><label>Syrian</label></td>
		<td><input type="checkbox" name="genre_list[]" value="tamil"><label>Tamil</label></td>
		<td><input type="checkbox" name="genre_list[]" value="thai"><label>Thai</label></td>
		<td><input type="checkbox" name="genre_list[]" value="turkish"><label>Turkish</label></td>
		<td><input type="checkbox" name="genre_list[]" value="uk"><label>UK</label></td>
		<td><input type="checkbox" name="genre_list[]" value="usa"><label>USA</label></td>
		<td><input type="checkbox" name="genre_list[]" value="vietnamese"><label>Vietnamese</label></td>
		</tr>
		</table>

	<h2><input type="submit" name="submit" value="Submit"></h2>

	</fieldset>