//测试列表地址
function testCjurl(){
	var list_url_tem = $('#list_url_tem').val();
	if(!list_url_tem){
		alert('请填写目标列表地址模板');
		$('#list_url_tem').focus();
		return false;
	}
	var start_page = $('#start_page').val();
	if(!start_page){
		alert('请填写起始页码');
		$('#start_page').focus();
		return false;
	}
	var end_page = $('#end_page').val();
	if(!end_page){
		alert('请填写结束页码');
		$('#end_page').focus();
		return false;
	}
	var jg_page = $('#jg_page').val();
	if(!jg_page){
		alert('请填写间隔倍数');
		$('#jg_page').focus();
		return false;
	}
	var desc_page = !!$('#desc_page').attr('checked') ? 1 : 0;
	if(desc_page){//倒序
		if(start_page < end_page){
			alert('开始页码必须大于等于结束页码');
			return false;
		}
	}else{//正序
		if(start_page > end_page){
			alert('开始页码必须小于等于结束页码');
			return false;
		}
	}
	var remove_page_fix = !!$('#remove_page_fix').attr('checked') ? 1 : 0;
	var pre_page = $('#pre_page').val();
	var fix_page = $('#fix_page').val();
	var url = '?m=Acquisi&a=test_list_url&list_url_tem='+encodeURIComponent(list_url_tem)+'&start_page='+start_page+'&end_page='+end_page+'&jg_page='+jg_page+'&desc_page='+desc_page+'&remove_page_fix='+remove_page_fix+'&pre_page='+encodeURIComponent(pre_page)+'&fix_page='+encodeURIComponent(fix_page);
	window.open(url,'','width=700,height=550,scrollbars=yes');
}

//测试提取列表页面内容页面链接地址
function testList_a(){
	var listurl = $('#test_list_url').val();
	if(!listurl){
		alert('请输入列表地址测试获取内容地址');
		$('#test_list_url').focus();
		return false;
	}
	var content_url_box = $('#content_url_box').val();
	if(!content_url_box){
		alert('请输入目标列表页面中内容链接地址区域正则');
		$('#content_url_box').focus();
		return false;
	}
	var content_url_regular = $('#content_url_regular').val();
	if(!content_url_regular){
		alert('请输入目标列表页面中内容地址正则');
		$('#content_url_regular').focus();
		return false;
	}
	var url = '?m=Acquisi&a=testListContentUrl&listurl='+encodeURIComponent(listurl)+'&content_url_box='+content_url_box+'&content_url_regular='+content_url_regular;
	window.open(url,'','width=700,height=550,scrollbars=yes');

}

//测试提取内容页面页码
function testContentPage(){
	var url = $('#testContentPageUrl').val();
	if(!url){
		alert('请输入内容页面地址');
		$('#testContentPageUrl').focus();
		return false;
	}	
	var info_page_regular = $('#info_page_regular').val();
	if(!info_page_regular){
		alert('请输入内容分页地址正则');
		$('#info_page_regular').focus();
		return false;
	}	
	var url = '?m=Acquisi&a=testContentPage&contenturl='+encodeURIComponent(url)+'&info_page_regular='+info_page_regular;
	window.open(url,'','width=700,height=550,scrollbars=yes');
}

//验证采集表单
function checkAddCaiji(){
	var lname = $('#lname').val();
	if(!lname){
		alert('采集名称不能为空');
		$('#lname').focus();
		return false;	
	}
}


