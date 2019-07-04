//플래시구동을 위한 스크립트
function flash(id, width, height, name){
document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+width+'" height="'+height+'" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="'+name+'">'
+'<param name="movie" value="'+id+'">'
+'<param name="quality" value="high">'
+'<param name="wmode" value="transparent">'
+'<param name="base" value=".">'
+'<param name="allowScriptAccess" value="always" />'
+'<embed base="." src="'+id+'" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" width="'+width+'" height="'+height+'" type="application/x-shockwave-flash" showLiveConnect="true" name="'+name+'" allowScriptAccess="always"></embed>'
+'</object>');
}
function document_write(value){
document.write(value);
}
//카운터관련
function RWindow(URL,WD,HT) { 
window.open(URL,'counter','width=430,height=400,scrollbars=yes,resizable=0,status=no,menubar=0'); 
} 