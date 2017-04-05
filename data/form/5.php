<?php 
 if(!defined('LMXCMS')){exit();} 
 //本文件为缓存文件 无需手动更改
 ?><tr>
<td align='right' width='12%'>正文：</td>
<td width='88%'><textarea class='textarea' name='lbzw' id='lbzw'><{if $update}><{$lbzw}><{else}><{/if}></textarea></td>
</tr>
<tr>
<td align='right' width='12%'>图片：</td>
<td width='88%'><input type='text' id='lbpic' name='lbpic' class='inputText inputWidth' value='<{if $update}><{$lbpic}><{else}><{/if}>' /> <input type='button' value='上传' class='inputSub1' onclick="selectUpload(1,'file/d/<{$classData.classpath}>','lbpic',0)" /></td>
</tr>
