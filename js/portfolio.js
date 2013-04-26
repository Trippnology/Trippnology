var portfolioData = [
    {
        "name": "Avant Tecno",
        "notes": "High quality compact articulated loaders.",
        "url": "http://avanttecno.co.uk/",
        "tags": ["responsive", "html5", "wordpress"],
	    "image": "img/screens/avant-tecno.jpg"
    },
    {
        "name": "Whiterod Surfacing",
        "notes": "Asphalt and tarmac laying specialists.",
        "url": "http://www.whiterodsurfacing.com/",
        "tags": ["html5", "responsive"],
	    "image": "img/screens/whiterod-surfacing.jpg"
    },
    {
        "name": "Viper Sounds",
        "notes": "Independent online music store.",
        "url": "http://vipersounds.com/",
        "tags": ["html5", "responsive", "ecommerce", "wordpress"],
	    "image": "img/screens/viper-sounds.jpg"
    },
    {
        "name": "The Limecrete Company",
        "notes": "Limecrete, hempcrete, and sustainable construction experts.",
        "url": "http://www.limecrete.co.uk/",
	    "image": "img/screens/limecrete.jpg"
    },
    {
        "name": "Johnny Watton",
        "notes": "Professional photographer.",
        "url": "http://johnnywatton.com/",
        "tags": ["html5", "responsive", "wordpress"],
	    "image": "img/screens/johnny-watton.jpg"
    },
    {
        "name": "Headspace Accountancy",
        "notes": "Small business accounting.",
        "url": "http://www.headspaceaccountancy.co.uk/",
        "tags": ["html5", "responsive"],
	    "image": "img/screens/headspace-accountancy.jpg"
    },
    {
        "name": "Glass Splashback Colour",
        "notes": "Glass splashbacks and worktops.",
        "url": "http://www.glasssplashbackcolour.com/",
        "tags": ["html5"],
        "image": "img/screens/glass-splashback-colour.jpg"
    },
    {
        "name": "Norwich French Church Charity",
        "notes": "Financial help for young people's education.",
        "url": "http://norwichfrenchchurchcharity.org.uk/",
        "tags": ["html5", "responsive", "wordpress"],
	    "image": "img/screens/nfcc.jpg"
    },
    {
    	"name": "Abi Bailey",
    	"notes": "Portrait photographer.",
    	"url": "http://abportraitphotography.co.uk/",
    	"tags": ["html5", "responsive", "wordpress"],
    	"image": "img/screens/abpp.jpg"
    },
    {
        "name": "Square Deal Storage",
        "notes": "Container hire and self storage.",
        "url": "http://www.squaredealstorage.co.uk/",
    	"image": "img/screens/square-deal-storage.jpg"
    },
	{
	    "name": "GD Consult",
	    "notes": "Coming soon.",
	    "url": "http://gdconsult.co.uk/",
	    "tags": ["html5", "responsive", "ecommerce", "wordpress"],
		"image": "holder.js/270x200/text:Coming Soon"
	},
    {
        "name": "Advanced Camera Services",
        "notes": "Coming soon.",
        "url": "http://advancedcameraservices.co.uk/",
        "tags": ["html5", "responsive", "ecommerce", "wordpress"],
    	"image": "holder.js/270x200/text:Coming Soon"
    }
];

var frag = document.createDocumentFragment();

$.each(portfolioData, function(i,project) {
	var li = document.createElement('li'),
		figure = document.createElement('figure'),
		img = document.createElement('img'),
		figcaption = document.createElement('figcaption'),
		sitename = document.createElement('p'),
		link = document.createElement('a'),
		sitedesc = document.createElement('p'),
		sitetags = document.createElement('p');

	li.className = 'image3d roundlrg';
	figure.className = 'roundlrg border-light';
	img.src = project.image;
	img.className = 'roundlrg border-dark';
	link.href = project.url;
	link.rel = 'external';
	link.textContent = project.name;
	sitedesc.textContent = project.notes;
	sitetags.className = 'tags';

	sitename.appendChild(link);
	figcaption.appendChild(sitename);

	if(project.tags){
		$.each(project.tags, function(i,tag){
			var tagspan = $('<span>').addClass('badge'),
				tagicon = $('<i>');

			if(tag == 'html5'){
				tagicon.attr({'class': 'icon-tags'});
				tagspan.append(tagicon);
				$(sitetags).append(tagspan);
			};
			if(tag == 'responsive'){
				tagicon.attr({'class': 'icon-resize-full'});
				tagspan.append(tagicon);
				$(sitetags).append(tagspan);			};
			if(tag == 'ecommerce'){
				tagicon.attr({'class': 'icon-shopping-cart'});
				tagspan.append(tagicon);
				$(sitetags).append(tagspan);
			};
			if(tag == 'wordpress'){
				tagicon.attr({'class': 'icon-pencil'});
				tagspan.append(tagicon);
				$(sitetags).append(tagspan);
			};
		});
	};

	figcaption.appendChild(sitedesc);
	figcaption.appendChild(sitetags);

	figure.appendChild(img);
	figure.appendChild(figcaption);
	li.appendChild(figure);

	frag.appendChild(li);
});

$('ul.portfolio').html(frag);
