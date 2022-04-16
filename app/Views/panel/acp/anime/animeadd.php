<div id="FlexGrid1">
<div class="soltaraf">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/panel/animeaddpanel.css">
<div class="vertical-menu">
<a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/" style="text-align: center">ACP</a>
<a style="text-align: center">Anime Control</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime-list">Anime List</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime-add" class="active">Anime Add</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime-edit">Anime Edit</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime-delete">Anime Delete</a>
</div> 
</div>
<div class="ortataraf">

<div id="wb_Form1" style="position:absolute;width:656px;height:961px;z-index:52;">
<form name="Contact" method="post" action="<?= site_url('admin/panel/anime-add/add') ?>" enctype="multipart/form-data" id="Form1">
<table>
<input type="text" id="Editbox1" style="position:absolute;left:158px;top:6px;width:488px;height:auto;z-index:1;" name="anime_name" value="" spellcheck="false" title="anime_name">
<input type="text" id="Editbox2" style="position:absolute;left:158px;top:44px;width:488px;height:auto;z-index:2;" name="alternative_name" value="" spellcheck="false" title="alternative_name">
<input type="text" id="Editbox3" style="position:absolute;left:158px;top:211px;width:488px;height:auto;z-index:3;" name="score" value="" spellcheck="false" title="score">
<input type="text" id="Editbox4" style="position:absolute;left:158px;top:255px;width:488px;height:auto;z-index:4;" name="episodes" value="" spellcheck="false" title="episodes">
<input type="text" id="Editbox5" style="position:absolute;left:158px;top:462px;width:488px;height:auto;z-index:5;" name="video_pv" value="" spellcheck="false" title="video_pv">
<input type="text" id="Editbox7" style="position:absolute;left:158px;top:553px;width:488px;height:auto;z-index:6;" name="prequel" value="" spellcheck="false" title="prequel">
<input type="text" id="Editbox8" style="position:absolute;left:158px;top:603px;width:488px;height:auto;z-index:7;" name="sequel" value="" spellcheck="false" title="sequel">
<input type="text" id="Editbox9" style="position:absolute;left:158px;top:649px;width:488px;height:auto;z-index:8;" name="anime_image" value="" spellcheck="false" title="anime_image">
<input type="text" id="Editbox10" style="position:absolute;left:158px;top:694px;width:488px;height:auto;z-index:9;" name="myanimelist" value="" spellcheck="false" title="myanimelist">
<textarea name="description" id="TextArea1" style="position:absolute;left:158px;top:831px;width:488px;height:120px;z-index:12;" rows="6" cols="52" spellcheck="false" title="description"></textarea>
<input type="text" id="Editbox13" style="position:absolute;left:158px;top:170px;width:488px;height:auto;z-index:42;" name="created" value="" spellcheck="false" title="created">
<input type="text" id="Editbox12" style="position:absolute;left:158px;top:785px;width:488px;height:auto;z-index:49;" name="offical_website" value="" spellcheck="false" title="offical_website">
<input type="text" id="Editbox11" style="position:absolute;left:158px;top:741px;width:488px;height:auto;z-index:50;" name="anilist" value="" spellcheck="false" title="anilist">
<input type="text" id="Editbox6" style="position:absolute;left:158px;top:507px;width:488px;height:auto;z-index:45;" name="fansub" value="" spellcheck="false" title="fansub">
<div style="position:absolute;left:158px;top:301px;width:498px;height:28px;z-index:44;"  class="mb-3">
  <label class="form-label"></label>
  <select  multiple="multiple" class="form-select" name="genres[]" size="1" id="Combobox3">
    <option>Action</option>
    <option>Adventure</option>
    <option>Comedy</option>
    <option>Demons</option>
    <option>Drama</option>
    <option>Ecchi</option>
    <option>Fantasy</option>
    <option>Harem</option>
    <option>Hentai</option>
    <option>Historical</option>
    <option>Horror</option>
    <option>Isekai</option>
    <option>Josei</option>
    <option>Magic</option>
    <option>Mecha</option>
    <option>Military</option>
    <option>Music</option>
    <option>Mystery</option>
    <option>Police</option>
    <option>Apocolyptic</option>
    <option>Romance</option>
    <option>School</option>
    <option>Sci-Fi</option>
    <option>Shoujo</option>
    <option>Shounen</option>
    <option>Slice-of-Life</option>
    <option>Sports</option>
    <option>Vampire</option>
    <option>Yaoi</option>
    <option>Yuri</option>
  </select>
</div>

<select name="type" size="1" id="Combobox1" style="position:absolute;left:158px;top:82px;width:498px;height:28px;z-index:10;" title="type">
<option selected value="">Select</option>
<option>TV</option>
<option>Movie</option>
<option>Ova</option>
</select>
<select name="status" size="1" id="Combobox2" style="position:absolute;left:158px;top:124px;width:498px;height:28px;z-index:11;" title="status">
<option selected value="">Select</option>
<option >In Progress</option>
<option>Done</option>
<option>Canceled 	</option>
</select>
<input type="submit" id="Button1" name="submit" value="save" style="position:absolute;left:15px;top:920px;width:96px;height:25px;z-index:50000;" title="Send">

<label  id="Label1" style="position:absolute;left:15px;top:7px;width:135px;height:auto;line-height:auto;z-index:13;" tabindex="1">Anime Name:</label>
<label  id="Label2" style="position:absolute;left:15px;top:45px;width:135px;height:auto;line-height:auto;z-index:14;">Alternative Name:</label>
<label  id="Label3" style="position:absolute;left:15px;top:84px;width:135px;height:auto;line-height:auto;z-index:15;">Type:</label>
<label  id="Label4" style="position:absolute;left:15px;top:126px;width:135px;height:auto;line-height:auto;z-index:16;">Status:</label>
<label  id="Label5" style="position:absolute;left:15px;top:212px;width:135px;height:auto;line-height:auto;z-index:17;">Score:</label>
<label  id="Label6" style="position:absolute;left:15px;top:256px;width:135px;height:auto;line-height:auto;z-index:18;">Episodes:</label>
<label  id="Label7" style="position:absolute;left:15px;top:303px;width:135px;height:auto;line-height:auto;z-index:19;">Genres:</label>
<label  id="Label8" style="position:absolute;left:15px;top:463px;width:135px;height:auto;line-height:auto;z-index:20;">Video PV:</label>
<label  id="Label9" style="position:absolute;left:15px;top:508px;width:135px;height:auto;line-height:auto;z-index:21;">Fansub:</label>
<label  id="Label10" style="position:absolute;left:15px;top:554px;width:135px;height:auto;line-height:auto;z-index:22;">Prequel:</label>
<label  id="Label11" style="position:absolute;left:15px;top:604px;width:135px;height:auto;line-height:auto;z-index:23;">Sequel:</label>
<label id="Label12" style="position:absolute;left:15px;top:650px;width:135px;height:auto;line-height:auto;z-index:24;">Anime İmage:</label>
<label  id="Label13" style="position:absolute;left:15px;top:695px;width:135px;height:auto;line-height:auto;z-index:25;">MyAnimeList:</label>
<label  id="Label14" style="position:absolute;left:15px;top:742px;width:135px;height:auto;line-height:auto;z-index:26;">AniList:</label>
<label  id="Label15" style="position:absolute;left:15px;top:786px;width:135px;height:auto;line-height:auto;z-index:27;">Official WebSite:</label>
<label  id="Label16" style="position:absolute;left:15px;top:831px;width:135px;height:auto;line-height:auto;z-index:28;">Description:</label>
<label  id="Label17" style="position:absolute;left:15px;top:171px;width:135px;height:auto;line-height:auto;z-index:41;">Years:</label>
<hr id="Line2" style="position:absolute;left:0px;top:775px;width:656px;z-index:29;">
<hr id="Line4" style="position:absolute;left:0px;top:683px;width:656px;z-index:30;">
<hr id="Line5" style="position:absolute;left:0px;top:639px;width:656px;z-index:31;">
<hr id="Line7" style="position:absolute;left:0px;top:540px;width:656px;z-index:32;">
<hr id="Line8" style="position:absolute;left:0px;top:497px;width:656px;z-index:33;">
<hr id="Line9" style="position:absolute;left:0px;top:291px;width:656px;z-index:34;">
<hr id="Line10" style="position:absolute;left:0px;top:245px;width:656px;z-index:35;">
<hr id="Line11" style="position:absolute;left:0px;top:159px;width:656px;z-index:36;">
<hr id="Line12" style="position:absolute;left:0px;top:116px;width:656px;z-index:37;">
<hr id="Line13" style="position:absolute;left:0px;top:76px;width:656px;z-index:38;">
<hr id="Line14" style="position:absolute;left:0px;top:38px;width:656px;z-index:39;">
<hr id="Line15" style="position:absolute;left:0px;top:451px;width:656px;z-index:40;">
<hr id="Line16" style="position:absolute;left:0px;top:202px;width:656px;z-index:43;">
<hr id="Line6" style="position:absolute;left:0px;top:592px;width:656px;z-index:46;">
<hr id="Line3" style="position:absolute;left:0px;top:730px;width:656px;z-index:47;">
<hr id="Line1" style="position:absolute;left:0px;top:818px;width:656px;z-index:48;">
<table>
</form>
</div>


</div>
</div>
<div class="sagtaraf">
</div>