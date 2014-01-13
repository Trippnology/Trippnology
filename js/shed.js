var projectData = [
	{
		"name": "IP and Network Tools",
		"description": "Find out your current real world IP address and more network info.",
		"links": {
			"project": "http://trippnology.com/ip"
		}
	},
	{
		"name": "IPv6 Test",
		"description": "Test your access to IPv6 only websites and show your real world IPv6 address.",
		"links": {
			"project": "http://ipv6.trippnology.com/"
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
	}
];

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

// Mouse particles
(function(){

	function Particle( x, y, radius ) {
		this.init( x, y, radius );
	}

	Particle.prototype = {

		init: function( x, y, radius ) {

			this.alive = true;

			this.radius = radius || 10;
			this.wander = 0.15;
			this.theta = random( TWO_PI );
			this.drag = 0.92;
			this.color = '#fff';

			this.x = x || 0.0;
			this.y = y || 0.0;

			this.vx = 0.0;
			this.vy = 0.0;
		},

		move: function() {

			this.x += this.vx;
			this.y += this.vy;

			this.vx *= this.drag;
			this.vy *= this.drag;

			this.theta += random( -0.5, 0.5 ) * this.wander;
			this.vx += sin( this.theta ) * 0.1;
			this.vy += cos( this.theta ) * 0.1;

			this.radius *= 0.96;
			this.alive = this.radius > 0.5;
		},

		draw: function( ctx ) {

			ctx.beginPath();
			ctx.arc( this.x, this.y, this.radius, 0, TWO_PI );
			ctx.fillStyle = this.color;
			ctx.fill();
		}
	};

	var MAX_PARTICLES = 50;
	var COLOURS = [ '#332532', '#634C52', '#F87A52', '#FF974E', '#A59A88' ];

	var particles = [];
	var pool = [];

	var demo = Sketch.create({
		container: document.getElementsByTagName( 'body' )[0]
	});

	demo.setup = function() {

		// Set off some initial particles.
		var i, x, y;

		for ( i = 0; i < 20; i++ ) {
			x = ( demo.width * 0.5 ) + random( -100, 100 );
			y = ( demo.height * 0.5 ) + random( -100, 100 );
			//x = ( demo.width * 0.5 );
			//y = ( demo.height * 0.5 );
			demo.spawn( x, y );
		}
	};

	demo.spawn = function( x, y ) {

		if ( particles.length >= MAX_PARTICLES )
			pool.push( particles.shift() );

		particle = pool.length ? pool.pop() : new Particle();
		particle.init( x, y, random( 5, 40 ) );

		particle.wander = random( 0.5, 2.0 );
		particle.color = random( COLOURS );
		particle.drag = random( 0.9, 0.99 );

		theta = random( TWO_PI );
		force = random( 2, 8 );

		particle.vx = sin( theta ) * force;
		particle.vy = cos( theta ) * force;

		particles.push( particle );
	}

	demo.update = function() {

		var i, particle;

		for ( i = particles.length - 1; i >= 0; i-- ) {

			particle = particles[i];

			if ( particle.alive ) particle.move();
			else pool.push( particles.splice( i, 1 )[0] );
		}
	};

	demo.draw = function() {

		demo.globalCompositeOperation  = 'lighter';

		for ( var i = particles.length - 1; i >= 0; i-- ) {
			particles[i].draw( demo );
		}
	};

	demo.mousemove = function() {

		var particle, theta, force, touch, max, i, j, n;

		for ( i = 0, n = demo.touches.length; i < n; i++ ) {

			touch = demo.touches[i], max = random( 1, 4 );
			for ( j = 0; j < max; j++ ) demo.spawn( touch.x, touch.y );
		}
	};

	// Make sure the canvas doesn't cause horizontal scrolling
	$('.sketch').css({'max-width':'100%'});
})()
