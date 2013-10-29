var $ = {};
if(!$){
	$ = {};
}
else if(typeof $ != 'object'){
	throw new Error('$ already exists and is not an object!');
}

$.trim = function(str) {
  return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}
 
/* 判断标签是否含有指定的类名 */
$.hasClass = function(obj, value){
	if(obj && obj.nodeType===1 && (' ' + obj.className + ' ').replace(/[\n\t\r]/g, ' ').indexOf(' ' + value + ' ')>-1){
		return true;
	}
	return false;
};
/* 添加类名 */
$.addClass = function(obj, value){
	if(value && typeof(value)==='string'){
		var cs = value.split(/\s+/);
		if(obj && obj.nodeType===1){
			if(!obj.className && cs.length===1){
				obj.className = value;
			}
			else{
				var dc = ' ' + obj.className + ' ';
				for(var i=0, l=cs.length; i<l; i++){
					if(!~dc.indexOf(' ' + cs[i] + ' ')){
						dc += cs[i] + ' ';
					}
				}
				obj.className = $.trim(dc);
			}
		}
	}
};
/* 移除类名 */
$.removeClass = function(obj, value){
	if((value && typeof(value)==='string') || value===undefined){
		var cs = (value || '').split(/\s+/);
		if(obj && obj.nodeType===1 && obj.className){
			if(value){
				var dc = (' ' + obj.className + ' ').replace(/[\n\t\r]/g, ' ');
				for(var i=0, l=cs.length; i<l; i++){
					dc = dc.replace(' ' + cs[i] + ' ', ' ');
				}
				obj.className = $.trim(dc);
			}
			else{
				obj.className = '';
			}
		}
	}
};


/* ajax */
$.xhr = new XMLHttpRequest();

/*
*		// 该函数IE7以下不适用
*		
*		op参数 ：{
*		  *	url : String
*			type : [ "get" | "post" ]
*			dataType : [ "text" | "json" ]
*			data : [ String | Object ]
*			success : Function()
*		}
*
*/

$.ajax = function( op ){
	var xhr = this.xhr,
		dataType = op.dataType,
		type = op.type;
		
	if( typeof op.url === "undefined" ) return false;
	
	if( typeof dataType === "undefined" ){
		dataType = "text";
	} else if( dataType.toLowerCase() === "json" ) {
		op.data = JSON.stringify( op.data );
	}
	
	if ( type.toLowerCase() === "post" && !(typeof type === "undefined") ) {
		xhr.open( type, op.url, true );
		xhr.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
		xhr.send( op.data );
	} else {
		type = "get";
		xhr.open( type, op.url, true );
		xhr.send();
	}
	
	
	xhr.onreadystatechange = function (){
		if ( xhr.readyState==4 && xhr.status==200 ) {
			if( typeof op.success == "function" ) {
				op.success( xhr.responseText );
			}
		} 
	}
}
