var projectData = {
	"0": {
		"name": "BootstrASP",
		"description": "A simple framework built with Bootstrap and ASP.",
		"links": {
			"bitbucket": "https://bitbucket.org/Trippnology/bootstrasp",
			"github": "https://github.com/Trippnology/BootstrASP",
			"demo": "http://bootstrasp.trippnology.com"
		}
	},
	"1": {
		"name": "BootstraPHP",
		"description": "Bootstrap based modular framework.",
		"links": {
			"bitbucket": "https://bitbucket.org/Trippnology/bootstraphp",
			"github": "https://github.com/Trippnology/BootstraPHP",
			"demo": "http://bootstraphp.trippnology.net"
		}
	},
	"2": {
		"name": "Matchbox",
		"description": "Minimal page template useful for demos.",
		"links": {
			"bitbucket": "https://bitbucket.org/Trippnology/matchbox",
			"github": "https://github.io/Trippnology/matchbox"
		}
	},
	"3": {
		"name": "Pastebin",
		"description": "Text/code sharing, image hosting and URL redirection (shortening coming soon).",
		"links": {
			"project": "http://paste.trippnology.net/"
		}
	},
	"4": {
		"name": "Trippy's Bittorrent Tracker",
		"description": "GPL licensed torrent tracker.",
		"links": {
			"github": "https://github.com/Trippnology/TrippyBT",
			"demo": "http://tracker.trippnology.net/"
		}
	},
	"5": {
		"name": "IP and Network Tools",
		"description": "Find out your current real world IP address and more network info.",
		"links": {
			"project": "http://trippnology.com/shed/ip"
		}
	},
	"6": {
		"name": "Make link",
		"description": "Sometimes you have a URL but need to make a link to help you save it. This a is a quick and dirty way to do that.",
		"links": {
			"project": "http://trippnology.com/shed/makelink"
		}
	},
	"7": {
		"name": "Start",
		"description": "Multi-site search.",
		"links": {
			"project": "http://start.trippnology.com/"
		}
	},
	"8": {
		"name": "Weather",
		"description": "Minimal page showing info from a local weather station. Originally built for mobile use.",
		"links": {
			"project": "http://trippnology.com/shed/weather"
		}
	},
	"9": {
		"name": "YouTube Mature Content Viewer",
		"description": "This tool makes it easy to watch restricted YouTube content without logging in to YouTube.",
		"links": {
			"project": "http://trippnology.com/shed/youtube"
		}
	}
}

var docfrag = document.createDocumentFragment();

$.each(projectData, function(i,project) {
	var li = document.createElement('li');
	if (project.links.project) {
		var link = document.createElement('a');
		link.href = project.links.project;
		link.textContent = project.name+' ';
		li.appendChild(link);
	} else {
		li.textContent = project.name+' - '+project.description;
	};

	if (project.links.github) {
		var github = document.createElement('a');
		github.href = project.links.github;
		github.textContent = 'github';
		github.className = 'label';
		li.appendChild(github);
	};

	if (project.links.bitbucket) {
		var bitbucket = document.createElement('a');
		bitbucket.href = project.links.bitbucket;
		bitbucket.textContent = 'Bitbucket';
		bitbucket.className = 'label';
		li.appendChild(bitbucket);
	};

	docfrag.appendChild(li);
});

var target = document.getElementById('projects');
target.appendChild(docfrag);
