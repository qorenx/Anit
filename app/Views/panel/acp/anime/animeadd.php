<div id="FlexGrid1">
<div class="basbar">
</div>
<div class="soltaraf">

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

        <div id="wb_Form1" style="position:absolute;width:656px;height:1021px;z-index:93;">
<form name="Contact" method="post" action="" enctype="multipart/form-data" id="Form1">
<label for="Editbox1" id="Label1" style="position:absolute;left:10px;top:15px;width:135px;height:26px;line-height:26px;z-index:0;">Anime Name:</label>
<label for="Editbox2" id="Label2" style="position:absolute;left:10px;top:52px;width:135px;height:26px;line-height:26px;z-index:1;">Alternative Name:</label>
<input type="submit" id="Button1" name="Send" value="Send" style="position:absolute;left:10px;top:972px;width:96px;height:25px;z-index:2;" title="Send">
<input type="text" id="Editbox1" style="position:absolute;left:176px;top:14px;width:455px;height:26px;z-index:3;" name="anime_name" value="" spellcheck="false" title="anime_name">
<input type="text" id="Editbox2" style="position:absolute;left:176px;top:51px;width:455px;height:26px;z-index:4;" name="alternative_name" value="" spellcheck="false" title="alternative_name">
<label for="Combobox1" id="Label3" style="position:absolute;left:10px;top:88px;width:135px;height:26px;line-height:26px;z-index:5;">Type:</label>
<select name="type" size="1" id="Combobox1" style="position:absolute;left:176px;top:86px;width:465px;height:28px;z-index:6;" title="type">
<option selected value="">TV</option>
<option>Movie</option>
<option>Ova</option>
</select>
<select name="status" size="1" id="Combobox2" style="position:absolute;left:176px;top:130px;width:465px;height:28px;z-index:7;" title="status">
<option selected value="">In Progress</option>
<option>Done</option>
<option>Canceled 	</option>
</select>
<label for="Combobox1" id="Label4" style="position:absolute;left:10px;top:132px;width:135px;height:26px;line-height:26px;z-index:8;">Status:</label>
<input type="text" id="Editbox3" style="position:absolute;left:176px;top:167px;width:455px;height:26px;z-index:9;" name="score" value="" spellcheck="false" title="score">
<label for="Editbox3" id="Label5" style="position:absolute;left:10px;top:168px;width:135px;height:26px;line-height:26px;z-index:10;">Score:</label>
<input type="text" id="Editbox4" style="position:absolute;left:176px;top:203px;width:455px;height:26px;z-index:11;" name="episodes" value="" spellcheck="false" title="episodes">
<label for="Editbox4" id="Label6" style="position:absolute;left:10px;top:204px;width:135px;height:26px;line-height:26px;z-index:12;">Episodes:</label>
<label for="Editbox4" id="Label7" style="position:absolute;left:10px;top:239px;width:135px;height:26px;line-height:26px;z-index:13;">Genres:</label>
<div id="wb_Checkbox1" style="position:absolute;left:176px;top:263px;width:20px;height:20px;z-index:14;">
<input type="checkbox" id="Checkbox1" name="Action" value="on" style="position:absolute;left:0;top:0;" title="Action"><label for="Checkbox1"></label></div>
<div id="wb_Checkbox2" style="position:absolute;left:176px;top:329px;width:20px;height:20px;z-index:15;">
<input type="checkbox" id="Checkbox2" name="Comedy" value="on" style="position:absolute;left:0;top:0;" title="Comedy"><label for="Checkbox2"></label></div>
<div id="wb_Checkbox3" style="position:absolute;left:176px;top:297px;width:20px;height:20px;z-index:16;">
<input type="checkbox" id="Checkbox3" name="Adventure" value="on" style="position:absolute;left:0;top:0;" title="Adventure"><label for="Checkbox3"></label></div>
<div id="wb_Checkbox4" style="position:absolute;left:272px;top:263px;width:20px;height:20px;z-index:17;">
<input type="checkbox" id="Checkbox4" name="Demons " value="on" style="position:absolute;left:0;top:0;" title="Demons"><label for="Checkbox4"></label></div>
<div id="wb_Checkbox5" style="position:absolute;left:272px;top:297px;width:20px;height:20px;z-index:18;">
<input type="checkbox" id="Checkbox5" name="Drama" value="on" style="position:absolute;left:0;top:0;" title="Drama"><label for="Checkbox5"></label></div>
<div id="wb_Checkbox6" style="position:absolute;left:272px;top:329px;width:20px;height:20px;z-index:19;">
<input type="checkbox" id="Checkbox6" name="Ecchi" value="on" style="position:absolute;left:0;top:0;" title="Ecchi"><label for="Checkbox6"></label></div>
<div id="wb_Checkbox7" style="position:absolute;left:367px;top:263px;width:20px;height:20px;z-index:20;">
<input type="checkbox" id="Checkbox7" name="Fantasy" value="on" style="position:absolute;left:0;top:0;" title="Fantasy"><label for="Checkbox7"></label></div>
<div id="wb_Checkbox8" style="position:absolute;left:367px;top:297px;width:20px;height:20px;z-index:21;">
<input type="checkbox" id="Checkbox8" name="Harem" value="on" style="position:absolute;left:0;top:0;" title="Harem"><label for="Checkbox8"></label></div>
<div id="wb_Checkbox9" style="position:absolute;left:367px;top:329px;width:20px;height:20px;z-index:22;">
<input type="checkbox" id="Checkbox9" name="Hentai" value="on" style="position:absolute;left:0;top:0;" title="Hentai"><label for="Checkbox9"></label></div>
<div id="wb_Checkbox10" style="position:absolute;left:464px;top:263px;width:20px;height:20px;z-index:23;">
<input type="checkbox" id="Checkbox10" name="Historical" value="on" style="position:absolute;left:0;top:0;" title="Historical"><label for="Checkbox10"></label></div>
<div id="wb_Checkbox11" style="position:absolute;left:464px;top:297px;width:20px;height:20px;z-index:24;">
<input type="checkbox" id="Checkbox11" name="Horror" value="on" style="position:absolute;left:0;top:0;" title="Horror"><label for="Checkbox11"></label></div>
<div id="wb_Checkbox12" style="position:absolute;left:464px;top:329px;width:20px;height:20px;z-index:25;">
<input type="checkbox" id="Checkbox12" name="Isekai" value="on" style="position:absolute;left:0;top:0;" title="Isekai"><label for="Checkbox12"></label></div>
<div id="wb_Checkbox13" style="position:absolute;left:552px;top:263px;width:20px;height:20px;z-index:26;">
<input type="checkbox" id="Checkbox13" name="Josei" value="on" style="position:absolute;left:0;top:0;" title="Josei"><label for="Checkbox13"></label></div>
<div id="wb_Checkbox14" style="position:absolute;left:552px;top:297px;width:20px;height:20px;z-index:27;">
<input type="checkbox" id="Checkbox14" name="Magic " value="on" style="position:absolute;left:0;top:0;" title="Magic"><label for="Checkbox14"></label></div>
<div id="wb_Checkbox15" style="position:absolute;left:552px;top:329px;width:20px;height:20px;z-index:28;">
<input type="checkbox" id="Checkbox15" name="Mecha" value="on" style="position:absolute;left:0;top:0;" title="Mecha"><label for="Checkbox15"></label></div>
<div id="wb_Text1" style="position:absolute;left:205px;top:267px;width:44px;height:12px;z-index:29;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Action</span></div>
<div id="wb_Text2" style="position:absolute;left:205px;top:301px;width:54px;height:12px;z-index:30;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Adventure</span></div>
<div id="wb_Text3" style="position:absolute;left:205px;top:364px;width:44px;height:12px;z-index:31;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Military </span></div>
<div id="wb_Text4" style="position:absolute;left:300px;top:267px;width:44px;height:12px;z-index:32;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Demons </span></div>
<div id="wb_Text5" style="position:absolute;left:300px;top:301px;width:44px;height:12px;z-index:33;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Drama </span></div>
<div id="wb_Text6" style="position:absolute;left:300px;top:333px;width:44px;height:12px;z-index:34;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Ecchi</span></div>
<div id="wb_Text7" style="position:absolute;left:397px;top:267px;width:44px;height:12px;z-index:35;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Fantasy </span></div>
<div id="wb_Text8" style="position:absolute;left:397px;top:301px;width:44px;height:12px;z-index:36;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Harem</span></div>
<div id="wb_Text9" style="position:absolute;left:397px;top:333px;width:44px;height:12px;z-index:37;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Hentai </span></div>
<div id="wb_Text10" style="position:absolute;left:495px;top:267px;width:44px;height:12px;z-index:38;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Historical </span></div>
<div id="wb_Text11" style="position:absolute;left:495px;top:301px;width:44px;height:12px;z-index:39;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Horror</span></div>
<div id="wb_Text12" style="position:absolute;left:495px;top:333px;width:44px;height:12px;z-index:40;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Isekai</span></div>
<div id="wb_Text13" style="position:absolute;left:584px;top:267px;width:44px;height:12px;z-index:41;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Josei</span></div>
<div id="wb_Text14" style="position:absolute;left:584px;top:301px;width:44px;height:12px;z-index:42;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Magic</span></div>
<div id="wb_Text15" style="position:absolute;left:584px;top:364px;width:57px;height:12px;z-index:43;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Apocolyptic </span></div>
<div id="wb_Checkbox16" style="position:absolute;left:176px;top:360px;width:20px;height:20px;z-index:44;">
<input type="checkbox" id="Checkbox16" name="Military" value="on" style="position:absolute;left:0;top:0;" title="Military"><label for="Checkbox16"></label></div>
<div id="wb_Text16" style="position:absolute;left:205px;top:333px;width:44px;height:12px;z-index:45;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Comedy </span></div>
<div id="wb_Checkbox17" style="position:absolute;left:272px;top:360px;width:20px;height:20px;z-index:46;">
<input type="checkbox" id="Checkbox17" name="Music" value="on" style="position:absolute;left:0;top:0;" title="Music"><label for="Checkbox17"></label></div>
<div id="wb_Text17" style="position:absolute;left:300px;top:364px;width:44px;height:12px;z-index:47;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Music </span></div>
<div id="wb_Checkbox18" style="position:absolute;left:367px;top:360px;width:20px;height:20px;z-index:48;">
<input type="checkbox" id="Checkbox18" name="Mystery" value="on" style="position:absolute;left:0;top:0;" title="Mystery"><label for="Checkbox18"></label></div>
<div id="wb_Text18" style="position:absolute;left:397px;top:364px;width:44px;height:12px;z-index:49;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Mystery </span></div>
<div id="wb_Checkbox19" style="position:absolute;left:464px;top:360px;width:20px;height:20px;z-index:50;">
<input type="checkbox" id="Checkbox19" name="Police" value="on" style="position:absolute;left:0;top:0;" title="Police"><label for="Checkbox19"></label></div>
<div id="wb_Text19" style="position:absolute;left:495px;top:397px;width:44px;height:12px;z-index:51;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Shoujo</span></div>
<div id="wb_Checkbox20" style="position:absolute;left:552px;top:360px;width:20px;height:20px;z-index:52;">
<input type="checkbox" id="Checkbox20" name="Apocolyptic" value="on" style="position:absolute;left:0;top:0;" title="Apocolyptic"><label for="Checkbox20"></label></div>
<div id="wb_Text20" style="position:absolute;left:584px;top:333px;width:44px;height:12px;z-index:53;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Mecha</span></div>
<div id="wb_Checkbox21" style="position:absolute;left:176px;top:393px;width:20px;height:20px;z-index:54;">
<input type="checkbox" id="Checkbox21" name="Romance " value="on" style="position:absolute;left:0;top:0;" title="Romance"><label for="Checkbox21"></label></div>
<div id="wb_Text21" style="position:absolute;left:205px;top:427px;width:67px;height:12px;z-index:55;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Slice of Life</span></div>
<div id="wb_Checkbox22" style="position:absolute;left:272px;top:393px;width:20px;height:20px;z-index:56;">
<input type="checkbox" id="Checkbox22" name="School" value="on" style="position:absolute;left:0;top:0;" title="School"><label for="Checkbox22"></label></div>
<div id="wb_Text22" style="position:absolute;left:300px;top:397px;width:44px;height:12px;z-index:57;">
<span style="color:#000000;font-family:Arial;font-size:13px;">School </span></div>
<div id="wb_Checkbox23" style="position:absolute;left:367px;top:393px;width:20px;height:20px;z-index:58;">
<input type="checkbox" id="Checkbox23" name="Sci-Fi " value="on" style="position:absolute;left:0;top:0;" title="Sci-Fi"><label for="Checkbox23"></label></div>
<div id="wb_Text23" style="position:absolute;left:397px;top:397px;width:44px;height:12px;z-index:59;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Sci-Fi</span></div>
<div id="wb_Checkbox24" style="position:absolute;left:464px;top:393px;width:20px;height:20px;z-index:60;">
<input type="checkbox" id="Checkbox24" name="Shoujo" value="on" style="position:absolute;left:0;top:0;" title="Shoujo"><label for="Checkbox24"></label></div>
<div id="wb_Text24" style="position:absolute;left:495px;top:364px;width:44px;height:12px;z-index:61;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Police </span></div>
<div id="wb_Checkbox25" style="position:absolute;left:552px;top:393px;width:20px;height:20px;z-index:62;">
<input type="checkbox" id="Checkbox25" name="Shounen" value="on" style="position:absolute;left:0;top:0;" title="Shounen"><label for="Checkbox25"></label></div>
<div id="wb_Text25" style="position:absolute;left:584px;top:397px;width:57px;height:12px;z-index:63;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Shounen </span></div>
<div id="wb_Checkbox26" style="position:absolute;left:176px;top:423px;width:20px;height:20px;z-index:64;">
<input type="checkbox" id="Checkbox26" name="Slice-of-Life" value="on" style="position:absolute;left:0;top:0;" title="Slice-of-Life"><label for="Checkbox26"></label></div>
<div id="wb_Text26" style="position:absolute;left:205px;top:397px;width:67px;height:12px;z-index:65;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Romance </span></div>
<div id="wb_Checkbox27" style="position:absolute;left:272px;top:423px;width:20px;height:20px;z-index:66;">
<input type="checkbox" id="Checkbox27" name="Sports" value="on" style="position:absolute;left:0;top:0;" title="Sports"><label for="Checkbox27"></label></div>
<div id="wb_Text27" style="position:absolute;left:300px;top:427px;width:44px;height:12px;z-index:67;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Sports</span></div>
<div id="wb_Checkbox28" style="position:absolute;left:367px;top:423px;width:20px;height:20px;z-index:68;">
<input type="checkbox" id="Checkbox28" name="Vampire" value="on" style="position:absolute;left:0;top:0;" title="Vampire"><label for="Checkbox28"></label></div>
<div id="wb_Text28" style="position:absolute;left:397px;top:427px;width:44px;height:12px;z-index:69;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Vampire</span></div>
<div id="wb_Checkbox29" style="position:absolute;left:464px;top:423px;width:20px;height:20px;z-index:70;">
<input type="checkbox" id="Checkbox29" name="Yaoi" value="on" style="position:absolute;left:0;top:0;" title="Yaoi"><label for="Checkbox29"></label></div>
<div id="wb_Text29" style="position:absolute;left:495px;top:427px;width:44px;height:12px;z-index:71;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Yaoi</span></div>
<div id="wb_Checkbox30" style="position:absolute;left:552px;top:423px;width:20px;height:20px;z-index:72;">
<input type="checkbox" id="Checkbox30" name="Yuri" value="on" style="position:absolute;left:0;top:0;" title="Yuri"><label for="Checkbox30"></label></div>
<div id="wb_Text30" style="position:absolute;left:584px;top:427px;width:57px;height:12px;z-index:73;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Yuri</span></div>
<label for="Editbox5" id="Label8" style="position:absolute;left:10px;top:468px;width:135px;height:26px;line-height:26px;z-index:74;">Video PV:</label>
<input type="text" id="Editbox5" style="position:absolute;left:176px;top:467px;width:455px;height:26px;z-index:75;" name="video_pv" value="" spellcheck="false" title="video_pv">
<input type="text" id="Editbox6" style="position:absolute;left:176px;top:509px;width:455px;height:26px;z-index:76;" name="fansub" value="" spellcheck="false" title="fansub">
<label for="Editbox6" id="Label9" style="position:absolute;left:10px;top:510px;width:135px;height:26px;line-height:26px;z-index:77;">Fansub:</label>
<label for="Editbox7" id="Label10" style="position:absolute;left:10px;top:547px;width:135px;height:26px;line-height:26px;z-index:78;">Prequel:</label>
<input type="text" id="Editbox7" style="position:absolute;left:176px;top:546px;width:455px;height:26px;z-index:79;" name="prequel" value="" spellcheck="false" title="prequel">
<input type="text" id="Editbox8" style="position:absolute;left:176px;top:581px;width:455px;height:26px;z-index:80;" name="sequel" value="" spellcheck="false" title="sequel">
<label for="Editbox8" id="Label11" style="position:absolute;left:10px;top:582px;width:135px;height:26px;line-height:26px;z-index:81;">Sequel:</label>
<label for="Editbox9" id="Label12" style="position:absolute;left:10px;top:620px;width:135px;height:26px;line-height:26px;z-index:82;">Anime İmage:</label>
<input type="text" id="Editbox9" style="position:absolute;left:176px;top:619px;width:455px;height:26px;z-index:83;" name="anime_image" value="" spellcheck="false" title="anime_image">
<input type="text" id="Editbox10" style="position:absolute;left:176px;top:662px;width:455px;height:26px;z-index:84;" name="myanimelist" value="" spellcheck="false" title="myanimelist">
<label for="Editbox8" id="Label13" style="position:absolute;left:10px;top:663px;width:135px;height:26px;line-height:26px;z-index:85;">MyAnimeList:</label>
<label for="Editbox11" id="Label14" style="position:absolute;left:10px;top:699px;width:135px;height:26px;line-height:26px;z-index:86;">AniList:</label>
<input type="text" id="Editbox11" style="position:absolute;left:176px;top:698px;width:455px;height:26px;z-index:87;" name="anilist" value="" spellcheck="false" title="anilist">
<label for="Editbox12" id="Label15" style="position:absolute;left:10px;top:733px;width:135px;height:26px;line-height:26px;z-index:88;">Official WebSite:</label>
<input type="text" id="Editbox12" style="position:absolute;left:176px;top:732px;width:455px;height:26px;z-index:89;" name="offical_website" value="" spellcheck="false" title="offical_website">
<label for="TextArea1" id="Label16" style="position:absolute;left:10px;top:769px;width:135px;height:26px;line-height:26px;z-index:90;">Description:</label>
<textarea name="description" id="TextArea1" style="position:absolute;left:176px;top:785px;width:455px;height:177px;z-index:91;" rows="10" cols="48" spellcheck="false" title="description"></textarea>
</form>
</div>

    
</div>
</div>
</div>
</div>
</div>
<div class="sagtaraf">
</div>
</div>