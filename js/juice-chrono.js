/**
 * I does not call date functions to handle time stuffs.
 * Since it just uses the settimeout to update a variable by using the same timing...
 * maybe it's faster? We need a comparative test.
 */
 if (Juice == undefined ){
	Juice = {};	
 }
 /** basic chrono settings. change dt according to your needs in terms of accuracy. do not use start, init, stop as variable, override the function instead */
 Juice.chrono = { dt: 10, time:0, start_time:0, end_time:0 };
 
 
 /* basic function */
 Juice.chrono.update = function(){
 	Juice.chrono.time += Juice.chrono.dt;
 }
 
 /* get the stored time, in seconds */
 Juice.chrono.getTime = function(){
 	return Juice.chrono.time * Juice.chrono.dt / 1000;
 }
 
 /* start */
 Juice.chrono.start = function (){
 	Juice.chrono.start_time = new Date();
 	Juice.chrono.timer = setInterval( Juice.chrono.update, Juice.chrono.dt );
 }

 /* stop */
  Juice.chrono.stop = function (){
 	Juice.chrono.timer = clearInterval( Juice.chrono.timer );
 	Juice.chrono.end_time = new Date();
 }
 
 Juice.chrono.reset = function(){
 	Juice.chrono.time = 0;	
 }