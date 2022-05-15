<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> M&BC| Do List</title>

<script type="text/javascript" src="js/jquery_1.5.2.js"></script>
<script type="text/javascript" src="js/vpb_javascript.js"></script>
<script type="text/javascript" src="js/post_watermarkinput.js"></script>
<link type="text/css" rel="stylesheet" href="css/vpb_style.css">
<link rel="shortcut icon" href="../../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<script src="../../js/modernizr.custom.63321.js"></script>



</head>

<body>


<center>
<div align="left" style="width:450px;" id="mainBoxWrappers">
<div style="width:380px; float:left;" align="left"><textarea id="vpb_Todo_content" placeholder="Write new Todo content" class="textAreaBox"></textarea></div>
<div style="width:70px; float:left;" align="left"><input style="width:70px;" type="button" id="vasplus_programming_blog_button_r" value="Add" onclick="VPB_Add_New_Todo();" /></div><br clear="all" />
</div>
</center>


<br clear="all" /><br clear="all" /><br clear="all" /><br clear="all" />
<span id="empty_completely"></span>
<center><div style="width:470px;" id="display_new_todo_status" align="left"></div></center>
<center><div id="display_new_todo_post" align="left"></div></center>
<center>
<?php
include "config.php"; //Database connection settings

//This function formats and adds link to all URLs in a content
function add_links_to_URLs($to_do_contents = '') {
	$to_do_contents = preg_replace('#(script|about|applet|activex|chrome):#is', "\\1:", $to_do_contents);
	$to_do_content_pr = ' ' . $to_do_contents;
	$to_do_content_pr = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<span class='ccc'><a href=\"\\2\" target=\"_blank\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:11px; line-height:20px;'>\\2</font></a></span>", $to_do_content_pr);
	$to_do_content_pr = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<span class='ccc'><a href=\"http://\\2\" target=\"_blank\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:11px; line-height:20px;'>\\2</font></a></span>", $to_do_content_pr);
	$to_do_content_pr = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<span class='ccc'><a href=\"mailto:\\2@\\3\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:11px; line-height:20px;'>\\2@\\3</font></a></span>", $to_do_content_pr);
	return substr($to_do_content_pr, 1);
}

$username = strip_tags($_SERVER['REMOTE_ADDR']); //Users Identity

$check_recently_added_item = mysql_query("select * from `to_do_list_contents` order by `id` desc");
if(mysql_num_rows($check_recently_added_item) < 1)
{
	echo "<div class='info' id='vpb_empty' style='width:450px;'>Hello, there are no new Todo items to display at the moment. Thanks.</div>";
}
else
{
	while($get_recently_added_item = mysql_fetch_array($check_recently_added_item))
	{
		?>
        <div id="vpb_to_deletion<?php echo strip_tags($get_recently_added_item["id"]); ?>">
        
		<div align="left" style="width:450px;" id="mainBoxWrappers">
        
        <div id="edit_content<?php echo strip_tags($get_recently_added_item["id"]); ?>">
        
		<div id="vpb_tod_text_contents" align="left">
        <span id="todo_deletion_status<?php echo strip_tags($get_recently_added_item["id"]); ?>"></span><?php echo add_links_to_URLs(nl2br(strip_tags($get_recently_added_item["content"]))); ?>
        </div>
        
		<div id="vpb_edit_and_delete_box" align="left">
		<div id="vpb_edit_body" onclick="vpb_edit('<?php echo strip_tags($get_recently_added_item["id"]); ?>');">
        <div id="vpv_edit_image" class="vpb_tooltips"><span>Edit this item</span></div>
        </div>
        
		<div id="vpb_delete_body" onclick="VPB_Delete_New_Todo('<?php echo strip_tags($get_recently_added_item["id"]); ?>');">
        <div class="vpb_tooltips" id="vpv_delete_image"><span>Delete this item</span></div>
        </div>
		</div>
        
        </div>
        <div style="display:none" id="edit_box<?php echo strip_tags($get_recently_added_item["id"]); ?>">
		
        <div style="width:320px; float:left;" align="left">
        <span id="display_new_todo_status<?php echo strip_tags($get_recently_added_item["id"]); ?>"></span>
        <textarea style="width:290px;" id="vpb_Todo_content<?php echo strip_tags($get_recently_added_item["id"]); ?>" class="textAreaBox"><?php echo strip_tags($get_recently_added_item["content"]); ?></textarea>
        </div>
        
        <div style="width:55px; float:left; margin-right:10px;" align="left">
        <input style="" type="button" id="vasplus_p_blog_save_button" value="Save" onclick="VPB_Save_New_Todo('<?php echo strip_tags($get_recently_added_item["id"]); ?>');" />
        </div> 
        
        <div style="width:65px; float:left;" align="left"><input type="button" id="vasplus_p_blog_cancel_button" value="Cancel" onclick="vpb_cancel('<?php echo strip_tags($get_recently_added_item["id"]); ?>');" />
        </div><br clear="all" />

        </div>
        
		<br clear="all" />
		</div><br clear="all" />
        </div>
	<?php
	}
}
?>
</center>
<script type="text/javascript" language="javascript" src="js/vasplus_p_programming_blog_textarea_box.js"></script><!--Textarea Box Plugin-->
<!--To-do Code Ends Here -->











<p style="padding-bottom:350px;">&nbsp;</p>
</center>



</body>
</html>