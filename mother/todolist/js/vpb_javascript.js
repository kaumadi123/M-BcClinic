/********************************************************************************
* This script is brought to you by Vasplus Programming Blog by whom all copyrights are reserved.
* Website: www.vasplus.info
* Email: info@vasplus.info
* Do not remove this information from the top of this code.
*********************************************************************************/


/* WaterMark To-do textarea fields */
$(document).ready(function() 
{
	$("#vpb_Todo_content").Watermark("Write new Todo content"); 
}); 


/* Expand Textarea Box on-focus-in */
$("#vpb_Todo_content").live("focusin",function() 
{
	if ($(this).val() == "" || $(this).val() == "Write new Todo content") 
	{
	    $(this).animate({
				"height": "30px"
		}, "fast" );
	}
	else { }
});


/* Adjust back Textarea Box on-focus-out */
$("#vpb_Todo_content").live("focusout",function() 
{
  if ($(this).val() == "" || $(this).val() == "Write new Todo content") 
  {
		$(this).animate({
				"height": "25px"
		}, "fast" );
  }
  else { }
});


/* Show To-do edit box */
function vpb_edit(id) 
{
	$("#edit_content"+id).slideUp('fast');
	$("#edit_box"+id).slideDown('slow');
	$("#edit_box"+id).slideDown('slow');
	$("#vpb_Todo_content"+id).animate({
			"height": "120px"
	}, "fast" );
	$("#vpb_Todo_content"+id).focus();
	
}

/* Cancel Item Editing */
function vpb_cancel(id) 
{
	$("#edit_box"+id).slideUp('fast');
	$("#edit_content"+id).slideDown('slow');
}

/* Update existing To-do item */
function VPB_Save_New_Todo(id) 
{	
	var vpb_Todo_content = $("#vpb_Todo_content"+id).val();
	
	if(vpb_Todo_content == "" || vpb_Todo_content === "Write new Todo content")
	{
		$("#display_new_todo_status"+id).html('<div class="info" style="width:268px;">Sorry, you can not submit or update an empty field. Please enter some content in the required field to proceed. Thanks.</div><br clear="all" />');
		$("#vpb_Todo_content"+id).focus();
	}
	else 
	{
		var dataString = 'id=' + id + '&vpb_Todo_content=' + vpb_Todo_content + '&page=save_todo_item';
		$.ajax({
			type: "POST",
			url: "vpb_php_script.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#display_new_todo_status"+id).html('<div style="width:268px;font-family: Verdana, Geneva, sans-serif;color: black;font-size:12px;">Please wait <img style="" src="images/loadings.gif" align="absmiddle" alt="Loading" /></div><br clear="all" />');
			},
			success: function(response) 
			{
				var to_status_brought = response.indexOf('updated');
				if (to_status_brought != -1 ) 
				{
					$("#display_new_todo_status"+id).html('');
					$("#edit_box"+id).slideUp('fast');
					$("#edit_content"+id).slideDown('slow').html(response);
				}
				else
				{
					$("#display_new_todo_status"+id).html(response);
				}
			}
		});
		return false;
	}
}


/* Delete existing Todo item */
function VPB_Delete_New_Todo(id) 
{	
	if(confirm("Are you really sure that you want to delete this item?"))
	{
		var dataString = 'id=' + id + '&page=delete_todo_item';
		$.ajax({
			type: "POST",
			url: "vpb_php_script.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#todo_deletion_status"+id).html('<font style="font-family: Verdana, Geneva, sans-serif;color: black;font-size:12px;">Deleting this item </font> <img style="" src="images/loadings.gif" align="absmiddle" alt="Loading" /><br clear="all" />');
			},
			success: function(response) 
			{
				$("#vpb_to_deletion"+id).fadeOut('slow'); 
				if ( response == "empty" )
				{
					$("#empty_completely").html('<div class="info" id="vpb_empty" style="width:450px;">Hello There!, It seems all the posted To-do Items have been deleted at the moment. Thanks.</div><br clear="all" />');
				}
				else {}
			}
		});
	}
	return false;
}

/* Add or post new Todo item */
function VPB_Add_New_Todo() 
{
	$("#vpb_empty").hide();
	var vpb_Todo_content = $("#vpb_Todo_content").val();
	
	if( vpb_Todo_content == "" || vpb_Todo_content === "Write new Todo content" )
	{
		$("#display_new_todo_status").html('<div class="info">Please type your new To-do content in the required field to proceed.</div><br clear="all" />');
		$("#vpb_Todo_content").focus();
	}
	else 
	{
		var dataString = 'vpb_Todo_content=' + vpb_Todo_content + '&page=new_todo_item';
		$.ajax({
			type: "POST",
			url: "vpb_php_script.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#display_new_todo_status").html('<div style="min-width:268px;font-family: Verdana, Geneva, sans-serif;color: black;font-size:12px;">Please wait <img style="" src="images/loadings.gif" align="absmiddle" alt="Loading" /></div><br clear="all" />');
			},
			success: function(response) 
			{
				var to_status_brought = response.indexOf('posted');
				if ( to_status_brought != -1 ) 
				{
					$("#vpb_Todo_content").val('').animate({
						"height": "25px"
					}, "fast" );
					$("#vpb_Todo_content").Watermark("Write new Todo content");
					$("#display_new_todo_status").html('');
					$("#display_new_todo_post").hide().fadeIn('slow').prepend(response);
				}
				else
				{
					$("#display_new_todo_status").html(response);
				}
			}
		});
	}
}