window.onerror=Fehlerbehandlung;
			
function Fehlerbehandlung () {  
  return true;
}	
window.external.InitScriptInterface();
var fenster = SiteKiosk.WindowList.MainWindow.SiteKioskWindow.IsMainWindow;

if(fenster == true){
	document.write("<link rel='stylesheet' href='https://www.mcfit.com/files/kiosk/sitekiosk.css' type='text/css' media='screen' />");
}