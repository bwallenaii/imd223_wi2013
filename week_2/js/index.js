function updateTime()
{
	document.id("timer").load("time.php");
}

document.addEvent("domready", function(){
	$$("nav a").addEvent("click", function(e){
		e.stop();

		var loc = this.get("href");
		document.id("content").load(loc);
		return false;
	});

	updateTime.periodical(1000);

});