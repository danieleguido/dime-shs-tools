/**
 * Juice is a collection of javascripts vars and methods that suits perfectly DIME-SHS projects.
 * Among others, squeeze class is an ajax sequencer call that you may find usefule (especially if your developer hasn't 
 * build a solid websocket architecture).
 */
 /* the desription*/
 var Juice = { adapt:{}, tooltip:{}, scroll:{}, navigation:{}, language:{ }};
 
 /* call this function on your window.onload method */
 Juice.init = function(){
 	if( window.location.hash == "#suite" ){
 		Juice.projects.toggle();
 	}
 	Juice.adapt.init(); // fix sidebar height
	Juice.tooltip.init(); // initialize tooltips
	Juice.scroll.init(); // activate smooth scrolling
	Juice.sidebar.init(); // activate flexible sidebar (fixed / absolute accordin to width
	Juice.modal.init(); // activate modals; KEEP AFTER SCROLL
	Juice.language.init(); // startr language
	Juice.console.log(); // printout init logging
	
	$("#dime-shs-family").click( Juice.projects.toggle );
 }
 
 Juice.adapt.init = function(){
 	Juice.adapt.sidebar();
 }
 
 Juice.adapt.sidebar = function(){
 	var sideh = Math.max($("#sidebar").height(),$("#page.inner").height());
	$("#sidebar").height(sideh);
	return sideh; 	
 }
 
 Juice.adapt.update = function( i, width ){
 	Juice.console.add( "adapt.update", {i:i, width:width} );	
 	if( i == 0 ){
 		Juice.sidebar.makeFixed();
 	} else {
 		Juice.sidebar.makeFlexible();
 	}
 	
 }
 
 
 /**
  * sidebar behaviour
  */
 Juice.sidebar = { isFlexible:null };
 
 Juice.sidebar.init = function(){ 
 	Juice.console.add( "sidebar.init", Juice.sidebar.isFlexible );
 	if ( Juice.sidebar.isFlexible ) {
 		$('#sidebar ul').scrollToFixed({
		   marginTop:
	     $('.header').outerHeight() + 15,
		    limit:
		        $('#footer').offset().top -
		        $('#sidebar ul').outerHeight() -
		        10
		});
 	}
 }
 
 Juice.sidebar.makeFlexible = function(){
 	Juice.console.add( "sidebar.makeFlexible", Juice.sidebar.isFlexible );
 	if( Juice.sidebar.isFlexible ) return;
 	
 	Juice.sidebar.isFlexible = true;
 	
 	if( !$('#sidebar ul').length ){ return; }
 	
 	// null or false
 	$('#sidebar ul').scrollToFixed({
		   marginTop:
	     $('.header').outerHeight() + 15,
		    limit:
		        $('#footer').offset().top -
		        $('#sidebar ul').outerHeight() -
		        10
	});
 	
 	
 }
 
 Juice.sidebar.makeFixed = function(){
 	Juice.console.add( "sidebar.makeFixed", Juice.sidebar.isFlexible );
 	if( Juice.sidebar.isFlexible === false ) return;
 	
 	Juice.sidebar.isFlexible = false;
 	
 	if( !$('#sidebar ul').length ){ return; }
 	
 	$('#sidebar ul').trigger('remove');	// remove scrolltofixed features...
 	
 }
 
 /**
  * console verbose message handler
  */
 Juice.console = {items:[]};
 Juice.console.add = function( k,v ){
 	Juice.console.items.push({k:k,v:v});
 }
 Juice.console.log = function(){
 	for ( var i in Juice.console.items ){
 		console.log( i, Juice.console.items[i].k, Juice.console.items[i] );	
 	}	
 }
 
 /** using .alternate object, display and allow language switch */
 Juice.language.init = function(){
 	$( "#menu-language" ).mouseenter( function(){
 		
 		var mla = $("#menu-language .alternate");
 		mla.show();
 		mla.css("left", ( $("#menu-language").width() - mla.width() )/ 2 );
 		
 			
 	}).mouseleave( function(){
 		$("#menu-language .alternate").hide()
 	});
 }
 
 Juice.modal = {};
 Juice.modal.init = function(){
 	Juice.console.add( 'modal.init', 'started' );
 	$('#login').modal({
 		show:false
 	});
 	$('#menu-login a').unbind().click(function(event){$('#login').modal('show'); return false;});
 }
 
 Juice.projects = { init:null, hide:null, show:null, hidden: true };
 
 Juice.projects.toggle = function(){
 	if ( Juice.projects.hidden ){
 		Juice.projects.hidden = false;
 		$("#dime-shs-family").attr("title","").text("-");
 		Juice.projects.show();
 	} else {
 		Juice.projects.hidden = true;
 		$("#dime-shs-family").attr("title","other projects").text("+");
 		Juice.projects.hide();	
 	}
 }
 
 Juice.projects.show = function(){
	// shift stuff		
	$("#the-others").animate({"margin-top":0},150);			
 }
 
 Juice.projects.hide = function(){
	$("#the-others").animate({"margin-top":-55},150);			
 }
		
 Juice.tooltip.init = function(){
 	$("[title]").css({cursor:"pointer"}).tooltipsy({
 		offset: [0, 1], 
 		delay: 0,
 		content: function(element, tip, title){
 			return title.
 				replace("__-","<span style='font-size:1.2em'>").
 				replace("-__","</span>").
 				replace("_-","<span style='color:#ccc'>").
 				replace("-_","</span>").
 				split("--").join("<br>");
 			
 		}
 	});// with non empy title
 	// check for window boundaries!!!
 	
 }
  
 Juice.resize = function(){
 	// Juice.adapt.sidebar(); 	
 }
 
 /** activate the dom element. add a class currentPage to the given element
 */
 Juice.navigation.spy = function( id ){
 	if( !id ) return;
 	if( Juice.navigation.previous != undefined ){
 		Juice.navigation.previous.removeClass( "currentPage" );	
 	}
 	
 	console.log( id, $( '[href$="#'+id+'"]' ) );
 	Juice.navigation.previous = $( '[href$="#'+id+'"]').parent().addClass( "currentPage");
 	// window.location.hash = "#" + id;
 }
 
 
 
 
 /**
  * activate the smooth scrolling. bind click events.
  */
 Juice.scroll.init = function(){
 	// scroll to top: set the link
 	$('#top-link').topLink({
		min: 100,
		fadeSpeed: 500
	});
	
	//smoothscroll
	$('#top-link').click(function(e) {
		e.preventDefault();
		$.scrollTo(0,300);
	});
 	// anchors
 	$('a[href*=#]:not([href=#])').click(function() {
 		
 		// unbind scrollspy, then redo?
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {
 			var _hash = this.hash
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
               if (target.length) {
                 $('html,body').animate({
                     scrollTop: target.offset().top
                }, 200, function(){
                	
                	 Juice.navigation.spy( _hash.slice(1) );
                });
                
                return false;
            }
        }
    });
    
    
	
	// sroll spy sidebar
	$('#page a').each( function(i){
		var position = $(this).position();
		$(this).scrollspy({
			
			min: position.top,
			max: position.top + $(this).height(),
			onEnter: function( element, position ){
				console.log( "spy enters ", element, element.id )	;
				Juice.navigation.spy( element.id )
			}
		})
	});
 }
 
 
 
 
 /**
  * the basic tuple, suitable for sorting methds
  */
 Juice.o = function(){this.k;this.v;}
 
 /**
  * load an url using settimeout 
  */
 Juice.squeeze = function(options){var instance=this;this.__ping_timer=0;this.hasBeenKilled=false;this.settings={'named':'unnamed','url':'null','data':{},'lines':18,'dataType':"json",'timeOut':1340,'timeOutOnError':5000,'success':function(message){console.log(message)},'start':function(message,instance){console.log(message)},'error':function(message){console.log(message)},clearTimeoutOnError:true};this.kill=function(){clearTimeout(this.__ping_timer);instance.hasBeenKilled=true;}
this.update=function(updatedSettings){if(updatedSettings){$.extend(instance.settings,updatedSettings);}}
this.loop=function(){if(instance.settings.url=='null'){return instance.settings.error("pinger '"+instance.settings.named+"' settings.url is null. Check your options object");}else if(killPing){return clearTimeout(instance.__ping_timer)};if(instance.hasBeenKilled){instance.hasBeenKilled=false;clearTimeout(instance.__ping_timer);return instance.settings.error("pinger '"+instance.settings.named+"' has been killed. Call update() to restart");}
instance.settings.start("pinger '"+instance.settings.named+"' looping...");try{$.ajax({url:instance.settings.url,dataType:instance.settings.dataType,data:instance.settings.data,success:function(result){instance.settings.success(result);instance.__ping_timer=setTimeout(instance.loop,instance.settings.timeOut);},error:function(event){instance.settings.error(event);if(instance.settings.clearTimeoutOnError){clearTimeout(instance.__ping_timer);}else{console.log("pinger '"+instance.settings.named+"' error code received, settings.clearTimeoutOnError = false, then reconnect...");instance.__ping_timer=setTimeout(instance.loop,instance.settings.timeOutOnError);}}});}catch(exc){settings.error(exc);}}
if(options){$.extend(this.settings,options);}
clearTimeout(this.__ping_timer);if(this.settings.url=='null'){return this.settings.error("pinger'"+this.settings.named+"' INIT settings.url is null. Check your options object");}else this.loop();};
  
 
 
