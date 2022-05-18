<?php

include "config.php"; //Include database connection settings

//This function removes all magic quotes from the To-do content
function remove_magic_quotes($comment) 
{
	$vpb_data = explode("\\",$comment);
	$cleaned_data = implode("",$vpb_data);
	return $cleaned_data;
}


//This function formats and adds link to all URLs in a content
function add_links_to_URLs($to_do_contents = '') {
	$to_do_contents = preg_replace('#(script|about|applet|activex|chrome):#is', "\\1:", $to_do_contents);
	$to_do_content_pr = ' ' . $to_do_contents;
	$to_do_content_pr = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<span class='ccc'><a href=\"\\2\" target=\"_blank\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:11px; line-height:20px;'>\\2</font></a></span>", $to_do_content_pr);
	
	$to_do_content_pr = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<span class='ccc'><a href=\"http://\\2\" target=\"_blank\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:11px; line-height:20px;'>\\2</font></a></span>", $to_do_content_pr);
	$to_do_content_pr = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<span class='ccc'><a href=\"mailto:\\2@\\3\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:11px; line-height:20px;'>\\2@\\3</font></a></span>", $to_do_content_pr);
	return substr($to_do_content_pr, 1);
}
 
 


if(isset($_POST["page"]) && !empty($_POST["page"])) //Page Validation Process
{
	//************************************************The add new item or Todo item page and script starts here********************************
	if($_POST["page"] == "new_todo_item") 
	{
		$new_todo_item = trim(strip_tags(htmlspecialchars($_POST['vpb_Todo_content'])));
		$username = strip_tags($_SERVER['REMOTE_ADDR']);
		
		if($new_todo_item == "")
		{
			echo '<div class="info" style="width:450px;">Please type your new To-do content in the required field to proceed. Thanks.</div><br clear="all" />';
		}
		else
		{
			if(mysql_query("insert into `to_do_list_contents` values('', '".mysql_real_escape_string($username)."', '".mysql_real_escape_string(remove_magic_quotes($new_todo_item))."', '".mysql_real_escape_string(date('d-m-Y'))."')"))
			{
				$check_recently_added_item = mysql_query("select * from `to_do_list_contents` where `username` = '".mysql_real_escape_string($username)."' order by `id` desc limit 1");
				if(mysql_num_rows($check_recently_added_item) < 1)
				{
					echo "<div class='info' style='width:450px;'>Sorry, we could not find any new item from you at the moment.<br>Please try again or contact the site admin if this error persist. Thanks.</div><br clear='all' />";
				}
				else
				{
					$get_recently_added_item = mysql_fetch_array($check_recently_added_item);
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
					echo '<font style="font-size:0px;">posted</font>';
				}
				
			}
			else
			{
				echo "<div class='info' style='width:450px;'>Sorry, you can not add any new item at the moment.<br>Please try again or contact the site admin if this problem persist. Thanks.</div><br clear='all' />";
			}
		}
	}  
	//********************************************The add new item or Todo item page and script ends here*****************************************
	
	
	
	
	//******************************The delee item or Todo item page and script starts here*************************************************
	elseif($_POST["page"] == "delete_todo_item")
	{
		mysql_query("delete from `to_do_list_contents` where `id` = '".mysql_real_escape_string(strip_tags($_POST["id"]))."'");
		$check_all_added_item = mysql_query("select * from `to_do_list_contents`");
		if(mysql_num_rows($check_all_added_item) < 1)
		{
			echo 'empty';
		}
		else 
		{
			//Do nothing as there are still to do items in the database man
		}
	} 
	//****************************************The delete item or Todo item page and script ends here**********************************************
	
	
	
	//*****************************The save item or Todo item page and script starts here*********************************************************
	elseif($_POST["page"] == "save_todo_item") 
	{
		$vpb_todo_item_brought = trim(strip_tags(htmlspecialchars($_POST['vpb_Todo_content'])));
		
		if($vpb_todo_item_brought == "")
		{
			echo '<div class="info" style="width:268px;">Sorry, you can not submit or update an empty field. Please enter some content in the required field to proceed. Thanks.</div><br clear="all" />';
		}
		else
		{
		
			if(mysql_query("update `to_do_list_contents` set `content` = '".mysql_real_escape_string(remove_magic_quotes($vpb_todo_item_brought))."' where `id` = '".mysql_real_escape_string(strip_tags($_POST["id"]))."'"))
			{
				$check_recently_added_item = mysql_query("select * from `to_do_list_contents` where `id` = '".mysql_real_escape_string(strip_tags($_POST["id"]))."'");
				if(mysql_num_rows($check_recently_added_item) < 1)
				{
					echo "<div class='info' style='width:268px;'>Sorry, we could not find the new item you have just updated at the moment.<br>Please try again or contact the site admin if this problem persist. Thanks.</div><br clear='all' />";
				}
				else
				{
					$get_recently_added_item = mysql_fetch_array($check_recently_added_item);
					?>
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
					<?php
					echo '<font style="font-size:0px;">updated</font>';
				}
			}
			else
			{
				echo "<div class='info' style='width:268px;'>Sorry, your item could not be updated at the moment.<br>Please try again or contact the site admin if this problem persist. Thanks.</div><br clear='all' />";
			}
		}
	}
	//*****************************The save item or Todo item page and script ends here*********************************************************
	
	else
	{
		//Do nothing as the associate page does not exist man
	}
	
}
else
{
	echo "<div class='info' style='width:450px;'>Sorry, the identity of the page you were about to post your comment on could not be verified at the moment.<br>Please try again or contact the site admin if this problem persist. Thanks.</div>";
}
?>