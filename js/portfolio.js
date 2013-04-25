var portfolioData = [
	{
	    "name": "GD Consult",
	    "notes": "Coming soon.",
	    "url": "http://gdconsult.co.uk/",
	    "tags": ["responsive", "ecommerce"],
		"image": "holder.js/270x200/text:Coming Soon"
	},
    {
        "name": "Advanced Camera Services",
        "notes": "Coming soon.",
        "url": "http://advancedcameraservices.co.uk/",
        "tags": ["responsive", "ecommerce"],
    	"image": "holder.js/270x200/text:Coming Soon"
    },
    {
        "name": "Avant Tecno",
        "notes": "High quality compact articulated loaders.",
        "url": "http://avanttecno.co.uk/",
        "tags": ["responsive"],
	    "image": "holder.js/270x200/text:Screenshot"
    },
    {
        "name": "The Limecrete Company",
        "notes": "Limecrete, hempcrete, and sustainable construction experts.",
        "url": "http://www.limecrete.co.uk/",
        "tags": ["responsive"],
	    "image": "holder.js/270x200/text:Screenshot"
    },
    {
        "name": "Johnny Watton",
        "notes": "Short description",
        "url": "http://johnnywatton.com/",
        "tags": ["responsive"],
	    "image": "holder.js/270x200/text:Screenshot"
    },
    {
        "name": "Whiterod Surfacing",
        "notes": "Short description",
        "url": "http://www.whiterodsurfacing.com/",
        "tags": ["responsive"],
	    "image": "holder.js/270x200/text:Screenshot"
    },
    {
        "name": "Viper Sounds",
        "notes": "Short description",
        "url": "http://vipersounds.com/",
        "tags": ["responsive", "ecommerce"],
	    "image": "holder.js/270x200/text:Screenshot"
    },
    {
        "name": "Headspace Accountancy",
        "notes": "Short description",
        "url": "http://www.headspaceaccountancy.co.uk/",
        "tags": ["responsive"],
	    "image": "holder.js/270x200/text:Screenshot"
    },
    {
        "name": "Glassact",
        "notes": "Glass splashbacks and worktops.",
        "url": "http://www.glassactuk.com/",
        "image": "holder.js/270x200/text:Screenshot"
    },
    {
        "name": "Square Deal Storage",
        "notes": "Short description",
        "url": "http://www.squaredealstorage.co.uk/",
    	"image": "holder.js/270x200/text:Screenshot"
    },
    {
        "name": "Norwich French Church Charity",
        "notes": "Short description",
        "url": "http://norwichfrenchchurchcharity.org.uk/",
        "tags": ["responsive"],
	    "image": "holder.js/270x200/text:Screenshot"
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
		sitedesc = document.createElement('p');

	li.className = 'image3d';
	figure.className = 'roundlrg border-light';
	img.src = project.image;
	img.className = 'roundlrg border-dark';
	link.href = project.url;
	link.textContent = project.name;
	sitedesc.textContent = project.notes;

	sitename.appendChild(link);
	figcaption.appendChild(sitename);
	figcaption.appendChild(sitedesc);

	figure.appendChild(img);
	figure.appendChild(figcaption);
	li.appendChild(figure);

	frag.appendChild(li);
});

$('ul.portfolio').html(frag);
