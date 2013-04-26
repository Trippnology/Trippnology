var projectData = [
	{
		"name": "IP and Network Tools",
		"description": "Find out your current real world IP address and more network info.",
		"links": {
			"project": "http://trippnology.com/shed/ip"
		}
	},
	{
		"name": "Make link",
		"description": "Sometimes you have a URL but need to make a link to help you save it. This a is a quick and dirty way to do that.",
		"links": {
			"project": "http://trippnology.com/shed/makelink"
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
			"project": "http://trippnology.com/shed/weather"
		}
	},
	{
		"name": "YouTube Mature Content Viewer",
		"description": "This tool makes it easy to watch restricted YouTube content without logging in to YouTube.",
		"links": {
			"project": "http://trippnology.com/shed/youtube"
		}
	},
	{
		"name": "BootstraPHP",
		"description": "Bootstrap based modular framework.",
		"links": {
			"bitbucket": "https://bitbucket.org/Trippnology/bootstraphp",
			"github": "https://github.com/Trippnology/BootstraPHP",
			"demo": "http://bootstraphp.trippnology.net"
		}
	},
	{
		"name": "BootstrASP",
		"description": "A simple framework built with Bootstrap and ASP.",
		"links": {
			"bitbucket": "https://bitbucket.org/Trippnology/bootstrasp",
			"github": "https://github.com/Trippnology/BootstrASP",
			"demo": "http://bootstrasp.trippnology.com"
		}
	},
	{
		"name": "Matchbox",
		"description": "Minimal page template useful for demos.",
		"links": {
			"bitbucket": "https://bitbucket.org/Trippnology/matchbox",
			"github": "https://github.com/Trippnology/matchbox"
		}
	},
	{
		"name": "Pinhead",
		"description": "Micro bootstrap package for \"fag packet\" ideas.",
		"links": {
			"bitbucket": "https://bitbucket.org/Trippnology/pinhead",
			"github": "https://github.com/Trippnology/pinhead"
		}
	},
	{
		"name": "Trippy's Bittorrent Tracker",
		"description": "GPL licensed torrent tracker.",
		"links": {
			"github": "https://github.com/Trippnology/TrippyBT",
			"demo": "http://tracker.trippnology.net/"
		}
	}
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

	if (project.links.github) {
		var github = document.createElement('a');
		github.href = project.links.github;
		github.textContent = 'github';
		github.className = 'label';
		github.rel = 'external';
		li.appendChild(github);
	};

	if (project.links.bitbucket) {
		var bitbucket = document.createElement('a');
		bitbucket.href = project.links.bitbucket;
		bitbucket.textContent = 'Bitbucket';
		bitbucket.className = 'label';
		bitbucket.rel = 'external';
		li.appendChild(bitbucket);
	};

	frag.appendChild(li);
});

document.getElementById('projects').appendChild(frag);

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
