$(function(){
	$('.spanInput').live('blur',function(){
		$('#spanInput').removeClass('inputBG');	
		$('#singlespanInput').removeClass('inputBG');	
		$('.qspanInputText').removeClass('inputBG');
	})
	$('.spanInput').live('focus',function(){
		$('#spanInput').addClass('inputBG');		
		$('#singlespanInput').addClass('inputBG');		
		$('.qspanInputText').addClass('inputBG');		
	})
	//生成拼音目录
	$('#scDir').click(function(){
		var name = $('#name').val();
		if(!name){
			alert('请填写专题名称');
			$('#name').focus();
			return false;
		}	
		$.post('?m=Ajax&a=PinYinDir',{path:name},function(data){
			$('#path').val(data);
		});
	})
	//检测目录是否存在
	$('#isDir').click(function(){
		var path = $('#path').val();
		if(!path){
			alert('请填专题目录');
			$('#path').focus();
			return false;
		}
		path = path.replace(/\/$/,'');
		$.post('?m=Ajax&a=isDir',{path:path},function(data){
			if(data == 1){
				alert('目录 /'+path+' 已存在');
			}else{
				alert('恭喜，/'+path+' 检测通过');	
			}
		})
	})	
})

function checkZt(){
	var name = $('#name').val();
	if(!name){
		alert('专题名字不能为空');
		$('#name').focus();
		return false;	
	}
	
	var tem = $('#tem').val();
	if(!tem){
		alert('请选择模板');
		$('#tem').focus();	
		return false;
	}
	var path = $('#path').val();
	if(!path){
		alert('专题目录不能为空');
		$('#path').focus();
		return false;
	}
	if(!/^[a-zA-Z0-9_\/]+$/.test(path)){
		alert('请正确填专题目录');
		$('#path').focus();
		return false;
	}
}

//页码   总条数，总页数  当前页数  页面点击函数  关键字
function page_js(num,page,curr,funname,str){
	if(!curr){curr=1}
	var html = '';
	var size= '';
	if(page <= 1){ return false;}
	if(curr > page){ curr = page};
	var bothnum = 3;
	//计算上偏移
	if(curr + bothnum >= page){
		var s = bothnum + (curr + bothnum - page);
	}else{
		var s = bothnum;
	}
	//计算下偏移
	if(curr <= bothnum){
		var h = bothnum - curr + bothnum+1;
	}else{
		var h = bothnum;
	}
	for(var i=s;i>=1;i--){
		var size =curr-i;
		if(size < 1){
			continue;
		}
		html += '<a href="javascript:void(0);" onclick="'+funname+'('+size+','+str+');">'+size+'</a>';
	}
	html += "<span class='curr'>"+curr+"</span>";
	for(var i=1;i<=h;i++) {
		var size = curr+i;
		if (size > page) break;
		html += '<a href="javascript:void(0);" onclick="'+funname+'('+size+','+str+');">'+size+'</a>';
	}
	return html;
}



//ajax获取专题列表
function zt_ajax_get(page,keywords){
	keywords = keywords ? keywords : '';
	if(page <= 1){ page = 1};
	$.ajax({
		url : '?m=Zt&a=ajax_data',
		type : 'POST',
		data : {curr:page,name:keywords},
		timeout : 20000,
		dataType : 'json',
		beforeSend:function(){
			$("#zt_all_list tr:not(:first)").remove();
			$('#zt_all_list').append('<tr><td colspan="3" style=" text-align:center;"><img src="template/admin/img/load.gif" /></td></tr>');	 
		},
		success : function(data){
			$("#zt_all_list tr:not(:first)").remove();
			if(data.page <= 0){
				$("#zt_all_list tr:not(:first)").remove();
				$('#page').html('');
			}
			var trHtml = '';
			$.each(data.list,function(i,v){
				trHtml += "<tr>";
				trHtml += "<td>"+v.id+"</td>";
				trHtml += "<td class='padding'>"+v.name+"</td>";
				trHtml += "<td><input type='button' value='增加' class='inputSub1 add_zt' /><input type='hidden' class='change_id' value="+v.id+" /><input type='hidden' class='change_name' value="+v.name+" /></td>";
				trHtml += "</tr>";
			})
			$("#zt_all_list").append(trHtml);
			$('#page').html(page_js(data.count,data.page,page,'zt_ajax_get',"'"+keywords+"'"));
		},
		error : function(){
			$("#zt_all_list tr:not(:first)").remove();
			$('#zt_all_list').append('<tr><td colspan="3" style=" text-align:center;"><span style=" cursor:pointer;" onclick="zt_ajax_get('+page+','+keywords+');">获取专题失败，点击重试</span></td></tr>');
			
		},
	});
}


//增加一条
function addone(name,id){
	var html = '';
	html += "<tr>";
	html += "<td>"+id+"</td>";
	html += "<td class='padding'>"+name+"</td>";
	html += "<td><input type='button' value='移除' class='inputSub1 zt_change_remove' data-id="+id+" /></td>";
	html += "</tr>";
	var is_id = 0;
	//判断如果已经存在则不添加
	$('.zt_change_remove').each(function() {
		var a_id = $(this).attr('data-id');
		if(a_id == id){
			is_id = 1;
			return false;
		}
	});
	if(is_id == 0){
		$('#zt_change_list').append(html);
	}	
}






