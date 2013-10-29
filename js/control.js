/* index */

	/** 告示 **/
	function slider (){
		var content =  document.getElementById( "notice-bar" ).getElementsByTagName( "ul" )[0],
			unit = document.getElementById( "notice-bar" ).offsetHeight,
			total = content.getElementsByTagName( "li" ).length,
			t = 4000,
			duration = 300,
			transition = "-webkit-transition:" + duration + "ms;transition:" + duration + "ms;",
			count = 0;
		
		function sliding (){
			content.setAttribute( "style", "top : " + (-count*unit) + "px;" + transition);
			count += 1;
			if( count >= total ){
				setTimeout( 
					function (){
						content.setAttribute( "style", "top : 0;-webkit-transition:0;transition:0;" );
					},
					duration
				);
				count = 1;
			}
			setTimeout( sliding, t );
		}
		
		sliding();
	}
	
	/** 关于和反馈 **/
	function rotater(){
		var r = document.querySelectorAll( "#rotate-tiles .j_tiles" ),
			front = false,
			t = 3500,
			style = [ "background:"+r[0].style.background, "background:"+r[1].style.background ];
			
		function rotating(){
			if ( front ) {
				r[1].setAttribute( "style", "-webkit-transform : rotate3d(0,1,0,0deg);z-index:999;" + style[1] );
				r[0].setAttribute( "style", "-webkit-transform : rotate3d(0,1,0,-180deg);" + style[0] );
				front = false;
			} else{
				r[0].setAttribute( "style", "-webkit-transform : rotate3d(0,1,0,0deg);z-index:999;" + style[0] );
				r[1].setAttribute( "style", "-webkit-transform : rotate3d(0,1,0,-180deg);" + style[1] );
				front = true;
			}
			
			setTimeout( rotating, t );
		}
		
		rotating();
	}

//  take_out_p

function take_out_p(){
	var navs = document.querySelectorAll(".take_out-nav a");
	var list = document.querySelectorAll( ".j_dto > li" );

	for( var i = 0; i < navs.length; i++ ) {
		(function(i){
			var n = i;
			var li = list[n];
			var status = [ 'fadeOut', 'fadeIn'];
			navs[i].onclick = function(){
				var className = 'ton'+(n+1);
				if( $.hasClass( this, className ) ){
					$.removeClass( this, className );
					$.addClass( li, status[0] );
					$.removeClass( li, status[1] );
					
				} else{
					$.addClass( this, className );
					$.addClass( li, status[1] );
					$.removeClass( li, status[0] );
				}
				return false;
			};
		})(i);
	}
}

//  organizations

function organizations(){
	var academy = document.querySelectorAll( ".academy" );
	
	for( var i = 0; i < academy.length; i++ ) {
		(function(){
			var n = i,
			toggleClass = "showO",
			p = academy[n].parentNode;
			academy[n].onclick = function(){
				if( $.hasClass( p, toggleClass ) ){
					$.removeClass( p, toggleClass );
				}else {
					$.addClass( p, toggleClass );
				}
			};
		})();
	}
}

/* timetable_p */

function mark() {
	var d = new Date(),
		x = d.getDay(),
		h = d.getHours() + d.getMinutes() *0.01,
		y = 0,
		grid = document.querySelectorAll( "#timetable td" ),
		head = document.querySelectorAll( "#timetable thead th" );
	
	switch (true){
		case 8 < h && h < 9.4:
			y = 1;
			break;
		case 10 < h && h < 11.4:
			y = 2;
			break;
		case 14.3 < h && h < 16.1:
			y = 3;
			break;
		case 16.2 < h && h < 17.5:
			y = 4;
			break;
		case 19.4 < h && h < 21.2:
			y = 5;
			break;
		default:
			break;
	}
	
	if ( 1<= x && x <= 5){
		head[x].setAttribute( "class", "cur-day" );
		if( y > 0 ){
			grid[ x+((y-1)*5)-1 ].setAttribute( "class", "cur-course" );
		}
	}
}

/* sel1 */

	function sel1() {
		var colleges = document.querySelectorAll( "#selection li" ),
			cur = {},
			className = "actived",
			btn = document.getElementById( "next-btn" ),
			l = btn.getAttribute( "href" ),
			value = 0,
			name = "";
		
		for ( var i = 0; i < colleges.length; i++ ){
			var j = i;
			( function(j){
				colleges[j].onclick = function (){
					
					if ( cur.tagName ){
						cur.removeAttribute( "class" );
					} else {
						btn.setAttribute( "style", "display:block;" );
					}
					
					this.setAttribute( "class", className );
					cur = this;
					value = this.getElementsByTagName( "input" )[0].getAttribute("value");
					btn.setAttribute( "href", l+value );
					name = this.childNodes[0].nodeValue;
					
				};
			} )(j);
		}
		
		btn.onclick = function (){
			if( window.localStorage ){
				var ud = {
					college : value,
					collegeName : name
				};
				
				localStorage.setItem ( "ud", JSON.stringify( ud ) );
			};
//			return false;
		}
		
	}
	
	
/* sel2 */

	function sel2( department ){
		var sel = document.querySelectorAll( "#selection select" ),
			btn = document.getElementById( "next-btn" );
			span = document.querySelectorAll( "#sel-result span" ),
			v = 0,
            href = btn.getAttribute( 'href' ) + department + '.2013-2014.',
			index = 0,
			majorName = "";
			
		sel[0].onchange = function (){
            v = this.value;
			if ( v === ""){
				span[0].innerHTML = "";
				btn.setAttribute( "style", "display:none;" );
				return false;
			}
			if ( span[0].innerHTML === "" ) {
				btn.setAttribute( "style", "display:block;" );
			}
			
			btn.setAttribute( "href", href + v );
			index = this.selectedIndex;
                        
			majorName = this.options[index].innerHTML
			span[0].innerHTML =  majorName;
                        
		};
			
		btn.onclick = function (){
			if( window.localStorage ){
				
				var ud = JSON.parse(localStorage.getItem ( "ud" ));
				
				ud.major = v;
				ud.course = href+v;
				ud.majorName = majorName;
				localStorage.setItem ( "ud", JSON.stringify(ud) );
			};
			
		}
	}