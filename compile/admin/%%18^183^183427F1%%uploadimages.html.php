<?php /* Smarty version 2.6.28, created on 2016-11-17 09:06:22
         compiled from Upload/uploadimages.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/content.js"></script>
<script type="text/javascript" src="plug/swfupload/swfupload.js"></script>
<script type="text/javascript" src="template/admin/js/upload.js"></script>
</head>

<body>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <div class="uploadBox">
            <h1 class="slideSub"><span class="curr">上传图片</span><a href="?m=Upload&a=imageList&dir=<?php echo $this->_tpl_vars['uploadDir']; ?>
&field=<?php echo $this->_tpl_vars['selectid']; ?>
<?php if ($this->_tpl_vars['ismore']): ?>&ismore=<?php echo $this->_tpl_vars['ismore']; ?>
<?php endif; ?>">图片列表</a></h1>
            <div class="mainUploadBox">
            	<div class="mainUploadSub">
                	<table cellspacing="0" cellspacing="0" border="0">
                    	<tr>
                        	<td><p class="swfupload_selectsub"><span id="swfu-placeholder"></span></p></td>
                        	<td><input type="hidden" id="upload_path" value="<?php echo $this->_tpl_vars['uploadDir']; ?>
" /><input type="button" value="开始上传" onClick="startUploadFile();" class="inputSub1" /></td>
                        	<td><span class="errorPoint">单次最多可选择上传10个文件 单文件最大<font> <?php echo $this->_tpl_vars['update_max_size']; ?>
 MB</font></span></td>
                        </tr>
                    </table>
                </div>
            	<p class="okgeshi">支持<?php echo $this->_tpl_vars['img_fix']; ?>
格式</p>
                <div class="mainUploadOtherSub"><label for="img_water"><input type="checkbox" value=1 <?php if ($this->_tpl_vars['public']['iswater'] == 1): ?> checked="checked"<?php endif; ?> id="img_water" />加水印</label> <label for="img_small"><input type="checkbox" value=1 id="img_small" <?php if ($this->_tpl_vars['public']['issmall'] == 1): ?> checked="checked"<?php endif; ?> />生成缩略图</label>：宽度 <input type="text" style="width:40px;" class="inputText" value="<?php echo $this->_tpl_vars['public']['small_width']; ?>
" id='img_width' />&nbsp;&nbsp;高度 <input type="text" style="width:40px;" class="inputText" value="<?php echo $this->_tpl_vars['public']['small_height']; ?>
" id='img_height' /> <label for="height_bl"><input type="checkbox" value="1" name="height_bl" id="height_bl" /> 高度等比例</label>
                <div class="fileduilie">
                    <h3>待上传文件</h3>
                    <ul></ul>
                </div>
            </div>
            <div class="mainUploadImgListBox" style="padding-bottom:10px;">
            	<h3>上传成功文件</h3>
            	<ul id="selectfile"></ul>
                <div class="okSub"><input type="button" class="inputSub1" onclick="okSelect('<?php echo $this->_tpl_vars['selectid']; ?>
',<?php echo $this->_tpl_vars['ismore']; ?>
);" value="确定选择" /> <input type="button" class="inputSub1" onclick="closeSelect();" value="关闭" /></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	//上传成功
	var uploadSuccess = function(file,data) {
		data = eval('('+data+')');  //解析json数据
		//判断上传失败和成功
		if(data.succ){
			//添加到成功列表
			$('#selectfile').prepend("<li onclick='selectFile(<?php echo $this->_tpl_vars['ismore']; ?>
,this);'><img src='"+data.info.url+"' /><em></em></li>");
			if(data.smallsrc){
				$('#selectfile').prepend("<li onclick='selectFile(<?php echo $this->_tpl_vars['ismore']; ?>
,this);'><img src='"+data.smallsrc+"' /><em></em><b>缩略图</b></li>");	
			}
			//处理队列
			setTimeout(function(){
				swfu.cancelUpload(file.id,false);	
				$('#'+file.id).remove();
			},3000); //移除队列和删除html代码
		}else{
			//处理失败
			$('#'+file.id+' .baifenbinum').html(data.info);
			$('#'+file.id+' p b.baifenbi').css('width','0px');
			//处理队列
			setTimeout(function(){
				swfu.cancelUpload(file.id,false);	
				$('#'+file.id).remove();
			},5000); //移除队列和删除html代码
		}
		
	}
	swfuOption['flash_url'] = "<?php echo $this->_tpl_vars['weburl']; ?>
plug/swfupload/swfupload.swf",
	swfuOption['file_size_limit'] ="<?php echo $this->_tpl_vars['update_max_size']; ?>
MB";//用户可以选择的文件大小，有效的单位有B、KB、MB、GB，若无单位默认为KB
	swfuOption['upload_url'] = "<?php echo $this->_tpl_vars['file_head']; ?>
?m=Upload&a=swfuploadImg"; //接收上传的服务端url
	swfuOption['upload_success_handler'] = uploadSuccess; //文件上传成功事件
	swfuOption['file_types'] = "<?php echo $this->_tpl_vars['js_img_fix']; ?>
"; //限制文件类型
	swfuOption['file_types_description'] = '请选择图像文件';
	var swfu = new SWFUpload(swfuOption);
	
	//开始上传
	function startUploadFile(){
		//获取post数据
		var img_small = $('#img_small').attr('checked') ? 1 : 0;
		var img_water = $('#img_water').attr('checked') ? 1 : 0;
		var is_height_bl = $('#height_bl').attr('checked') ? 1 : 0;
		var img_width = $('#img_width').val();
		var img_height = $('#img_height').val();
		var upload_path = $('#upload_path').val();
		var postData = {"upload_path":upload_path,"img_width":img_width,"height_bl":is_height_bl,"img_small":img_small ,"img_water":img_water,"img_height":img_height,"PHPSESSID": "<?php  echo session_id(); ?>"};
		swfu.setPostParams(postData);
		//开始上传
		swfu.startUpload();	
	}
</script>
</body>
</html>