
$(function(){
	//移除文件地址
	$('.morefile li span').live('click',function(){
		$(this).parent('li').remove();	
	})
	//增加上传地址表单
	$('.addfile').click(function(){
		var nameStr = $(this).parent('.morefile').find('ul').attr('id');
		$(this).parent('.morefile').find('ul').append("<li><input type='text' class='inputText inputWidth' name='"+nameStr+"[]' /> <span class='red'>移除</span></li>");	
	})
	//提取标题分词
	$('#tqTitle').click(function(){
		var str = $('#title').val();
		if(!str){
			alert('请填写标题');
			$('#title').focus();
			return false;	
		}
		$.post('?m=Ajax&a=ajax_str_split',{str:str},function(data){
			$('#keywords').val(data);
		});
	})
	//提取正文分词
	$('#tqContent').click(function(){
		var str = $('#content').val();
		if(!str){
			alert('请填写正文');
			$('#content').focus();
			return false;	
		}
		$.post('?m=Ajax&a=ajax_str_split',{str:str},function(data){
			$('#keywords').val(data);
		});
	})
})

function copytags(){
	var tagsname = $('#keywords').val();
	$('#tagsname').val(tagsname);
}
//文件选择
function selectFileF(ismore,s){
	if(ismore){
		if($(s).attr('checked')){
			$(s).parents('tr').addClass('curr');
		}else{
			$(s).parents('tr').removeClass('curr');
		}
	}else{
		$('.selectfilelist input:checked').removeAttr('checked');
		$(s).attr('checked',true);
	}
}

function checkContent(){
	var url = $('#url').val();
	if(url){
		var path =/^http:\/\//;
		if(!path.test(url)){
			alert('外部链接请以http://开头');
			$('#url').focus();
			return false;
		}
	}	
}
//确定选择文件并添加表单
function okSelectFile(id,ismore){
	var form = '';
	var src = '';
	if(ismore){
		$('.selectfilelist input:checked').each(function(index,element) {
			src = $(this).val();
			form += "<li><input type='text' name='"+id+"[]' class='inputText inputWidth' value='"+src+"' /> <span class='red'>移除</span></li>";
		})
		if(!form){
			alert('请选择文件');
			return;
		}
		$(opener.document).find('#'+id).append(form);
	}else{
		src	= $('.selectfilelist input:checked').val()
		if(!src){
			alert('请选择文件');
			return;
		}
		$(opener.document).find('#'+id).val(src);
	}
	parent.window.close();
}
//图片选择文件
function selectFile(ismore,s){
	if(ismore){
		s.className ? s.className = '' : s.className = 'curr';
	}else{
		$('#selectfile li').removeAttr('class');
		s.className = 'curr';
	}
}

//确定选择图片文件并添加表单
function okSelect(id,ismore){
	var form = '';
	var src = '';
	if(ismore){
		$('#selectfile li.curr img').each(function(index,element) {
			src = $(this).attr('src');
			form += "<li><input type='text' name='"+id+"[]' class='inputText inputWidth' value='"+src+"' /> <span class='red'>移除</span></li>";
		})
		if(!form){
			alert('请选择图片');
			return;
		}
		$(opener.document).find('#'+id).append(form);
	}else{
		src	= $('#selectfile li.curr img').attr('src');
		if(!src){
			alert('请选择图片');
			return;
		}
		$(opener.document).find('#'+id).val(src);
	}
	parent.window.close();
}
function add_pushzt(){
	var ztid = '';
	var val = $('#ztid').val();
	if(val){
		ztid = '&is_ztid='+val;	
	}
	var url = '?m=Zt&a=content_push'+ztid;
	window.open(url,'','width=700,height=550,scrollbars=yes');
}



