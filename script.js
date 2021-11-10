document.getElementById("main").style.marginLeft = "250px";
document.getElementById("open").style.display = "none";
function openNav() {
  document.getElementById("open").style.display = "none";	
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
	document.getElementById("open").style.display = "inline";
	document.getElementById("bottom").style.display = "none";
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}