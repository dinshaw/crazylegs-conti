// JavaScript Document

function doPopup(){
window.open('popup.php','CrazyLegsPopup','scrollbars=yes,toolbar=yes,resizable=yes,menubar=yes,height=450,width=300');
}
function popup(id){
	window.open('eventPopup.php?id=' + id,'CrazyLegs','scrollbars=yes,toolbar=yes,resizable=yes,menubar=yes,height=350,width=300');
}

// error check the add evebt form
function errorCheck(){

	var errors = "";
	
	if (window.document.addEvent.title.value == ""){
		errors = 'Please specify a title.\n';
		}
		
	if (window.document.addEvent.what.value == ""){
		errors += 'What is it?\n';
		}
		
	if (window.document.addEvent.location.value == ""){
		errors += 'Where is it?\n';
		}
			
	if (window.document.addEvent.year.value == "year"){
		errors += 'Please specify a year.\n';
		}
		
	if (window.document.addEvent.hour.value == "hour"){
		errors += 'Please specify a Hour.\n';
		}
	
	if (window.document.addEvent.month.value == "month"){
		errors += 'Please specify a month.\n';
		}
		
	if(window.document.addEvent.day.value == "day"){
		errors += 'Please specify a day.\n';
		}
	
	if (window.document.addEvent.minute.value == "minute"){
		errors += 'Please specify a minute.\n';
		}
		
		if (errors){
		alert(errors);
		return false;
		}
		else
		{
		return true;
		}
}

//add markup to textareas
function addLink(Fo,Fi){
	
var text = window.document.forms[Fo].elements[Fi].value;
var textLink = window.document.cmsLink.text.value;
var linkDest = window.document.cmsLink.link.value;
var fullLink = "<a href='" + linkDest + "' target='_blank'>" + textLink + "</a>";

window.document.forms[Fo].elements[Fi].value = text + fullLink;
}

function addEmailLink(Fo,Fi){
	
var text = window.document.forms[Fo].elements[Fi].value;
var textLink = window.document.cmsEmailLink.emailText.value;
var linkDest = window.document.cmsEmailLink.emailLink.value;
var fullLink = "<a href='mailTo:" + linkDest + "'>" + textLink + "</a>";

window.document.forms[Fo].elements[Fi].value = text + fullLink;
}

function addBold(Fo,Fi){
text = window.document.forms[Fo].elements[Fi].value;
boldText = window.document.cmsBold.bold.value;
window.document.forms[Fo].elements[Fi].value = text + "<strong>" + boldText + "</strong>";
}

function addItalic(Fo,Fi){
text = window.document.forms[Fo].elements[Fi].value;
italicText = window.document.cmsItalic.italic.value;
window.document.forms[Fo].elements[Fi].value = text + "<em>" + italicText + "</em>";
}

function addBoldItalic(Fo,Fi){
text = window.document.forms[Fo].elements[Fi].value;
boldItalicText = window.document.cmsBoldItalic.boldItalic.value;
window.document.forms[Fo].elements[Fi].value = text + "<strong><em>" + boldItalicText + "</em></strong>";
}