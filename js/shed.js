var projectData = [
	{
		"name": "IP and Network Tools",
		"description": "Find out your current real world IP address and more network info.",
		"links": {
			"project": "http://trippnology.com/ip"
		}
	},
	{
		"name": "Make link",
		"description": "Sometimes you have a URL but need to make a link to help you save it. This a is a quick and dirty way to do that.",
		"links": {
			"project": "http://trippnology.com/makelink"
		}
	},
	{
		"name": "Pastebin",
		"description": "Text/code sharing, image hosting and URL redirection (shortening coming soon).",
		"links": {
			"project": "http://paste.trippnology.net/"
		}
	},
	{
		"name": "Start",
		"description": "Multi-site search.",
		"links": {
			"project": "http://start.trippnology.com/"
		}
	},
	{
		"name": "Weather",
		"description": "Minimal page showing info from a local weather station. Originally built for mobile use.",
		"links": {
			"project": "http://weather.trippnology.com/"
		}
	},
	{
		"name": "YouTube Mature Content Viewer",
		"description": "This tool makes it easy to watch restricted YouTube content without logging in to YouTube.",
		"links": {
			"project": "http://ytmature.trippnology.com/"
		}
	},
]

var frag = document.createDocumentFragment();

$.each(projectData, function(i,project) {
	var li = document.createElement('li');
	if (project.links.project) {
		var link = document.createElement('a');
		link.href = project.links.project;
		link.textContent = project.name;
		link.rel = 'external';
		li.appendChild(link, li.firstChild);
		li.innerHTML = li.innerHTML+' - '+project.description;
	} else {
		li.textContent = project.name+' - '+project.description;
	};

	frag.appendChild(li);
});
// Grab the <ul> where we'll stuff our content
var projectUL = document.getElementById('projects');
// Remove the text that users without JS see
projectUL.innerHTML = '';
// Stuff our list of projects
projectUL.appendChild(frag);

// Init proudify
$('#proj-github').html('').proudify({'username':'Trippnology'});
$('#proj-coderwall').html('').proudify({'username':'Trippnology', 'service':'coderwall'});

/* Scroll the page title */
var rev = "fwd";
function titlebar(val)
{
  var msg  = "Grab yourself a cuppa and come and play in the shed! ";
	var res = " ";
	var speed = 100;
	var pos = val;

	msg = ".:| "+msg+" |:.";
	var le = msg.length;
	if(rev == "fwd"){
		if(pos < le){
			pos = pos+1;
			scroll = msg.substr(0,pos);
			document.title = scroll;
			timer = window.setTimeout("titlebar("+pos+")",speed);
		}
		else{
			rev = "bwd";
			timer = window.setTimeout("titlebar("+pos+")",speed);
		}
	}
	else{
		if(pos > 0){
			pos = pos-1;
			var ale = le-pos;
			scrol = msg.substr(ale,le);
			document.title = scrol;
			timer = window.setTimeout("titlebar("+pos+")",speed);
		}
		else{
			rev = "fwd";
			timer = window.setTimeout("titlebar("+pos+")",speed);
		}
	}
}

titlebar(0);
