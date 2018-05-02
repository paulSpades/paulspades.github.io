<?php 

$pType = [
	"Public Web App", 			// 0
	"Private Web App", 			// 1
	"API Web Integration", 		// 2
	"Static Web Site", 			// 3
	"Dynamic Web Site", 		// 4
	"Web Store", 				// 5
	"Brand", 					// 6
	"Mockup/Prototype" 			// 7
	];
$pRole = [
	"Graphic Design", 				// 0
	"Product Design", 				// 1
	"UX", 							// 2
	"Interaction Design",			// 3	
	"Client-Side Development",		// 4		
	"Server-Side Development",		// 5
	"Wordpress Theme Development"	// 6
	];
$pTech = [
	"HTML5+CSS",			// 0
	"Less.JS",				// 1
	"JS/ECMAScript",		// 2
	"jQuery",				// 3
	"AngularJS",			// 4
	"Bootstrap",			// 5
	"PHP",					// 6
	"Symphony",				// 7
	"Wordpress",			// 8
	"WooCommerce",			// 9
	"Mobile-First"			// 10
];

$work = [
	["title" => "CCS/shop",
		"color" => "#4B38AB",
		"banner" => "ccam-shop.png",
		"c-name" => "double",
		"type" => 5,
		"link" => "https://candycam.shop/shop/",
		"link-txt" => "candycam.shop",
		"client" => "Candycam Shop",
		"role" => [0, 2, 3, 4, 6],
		"tech" => [0, 2, 3, 5, 6, 8, 9],
		"date" => "Dec 2016",
		"path" => "ccam-shop/" 
	],
	["title" => "SSM",
		"color" => "#B20000",
		"banner" => "ssm-web.png",
		"type" => 7,
		"link" => "https://www.mixcloud.com/seisme/",
		"link-txt" => "SEISME on Mixcloud",
		"client" => "an old and busy DJ",
		"role" => [0, 1, 2, 3],
		"date" => "2016",
		"path" => "ssm/"
	],
	["title" => "GWA/web",
		"color" => "#3C3C3B",
		"banner" => "gwa.png",
		"type" => 0,
		"link" => "https://www.gowildaffiliates.com",
		"link-txt" => "gowildaffiliates.com",
		"client" => "PremiumIT Technologies ",
		"role" => [3, 4],
		"tech" => [0, 2, 3, 6, 10],
		"date" => "2016",
		"path" => "gwa/"
	],
	["title" => "TS/web",
		"color" => "#75BF12",
		"banner" => "ts-web.png",
		"c-name" => "double",
		"type" => 3,
		"link" => "http://tripsolutions.co.uk",
		"link-txt" => "tripsolutions.co.uk",
		"client" => "Trip Solutions (in-house project)",
		"role" => [0, 2, 3, 4],
		"tech" => [0, 2, 3, 6, 10],
		"date" => "2015",
		"path" => "ts-web/"
	],
	["title" => "CHR/b2b",
		"color" => "#EF4E23",
		"banner" => "chr-b2b.png",
		"c-name" => "double",
		"type" => 1,
		"client" => "Cristian Tour",
		"role" => [2, 3, 4],
		"tech" => [0, 2, 3, 9],
		"date" => "2015",
		"path" => "chr-b2b/"
	],
	["title" => "GOA/web",
		"color" => "#15396B",
		"banner" => "goa-web.png",
		"type" => 7,
		"client" => "Goa Way & Czech-It-Out",
		"role" => [0, 2, 3, 4],
		"date" => "2015",
		"path" => "goa-web/"
	],
	["title" => "SHC/web",
		"color" => "#8A1213",
		"banner" => "shc-web.png",
		"type" => 3,
		"link" => "http://www.swissholidayco.com/",
		"link-txt" => "swissholidayco.com",
		"client" => "The Swiss Holiday Company",
		"role" => [0, 2, 3, 4],
		"date" => "Jan 2014",
		"path" => "shc-web/"
	],
	["title" => "eT-A",
		"color" => "#428BCA",
		"banner" => "etrip-agency.png",
		"link" => "http://www.etrip-agency.com/",
		"link-txt" => "etrip-agency.com",
		"type" => 1,
		"client" => "Trip Solutions (in-house project)",
		"role" => [0, 2, 3, 4],
		"date" => "2013-2014",
		"path" => "etrip-agency/"
	],
	["title" => "PB/web",
		"color" => "#673D60",
		"banner" => "pb-web.png",
		"type" => 3,
		"link" => "http://www.purelybermuda.co.uk/",
		"client" => "Purely Travel Limited, UK",
		"role" => [0, 2, 3, 4],
		"date" => "Nov 2015",
		"path" => "pb-web/"
	]
	// ["title" => "brands",
	// 	"banner" => "brands.png",
	// 	"type" => 6,
	// 	"client" => "various",
	// 	"role" => [0, 1],
	// 	"date" => "2012-2016",
	// 	"path" => "branding/"
	// 	],
];

$logs = [
	"hello" => [
		"title" => "Hello World!"
	],
	"ms-browser" => [
		"title" => "Why is Microsoft incapable of creating a proper browser?"
	]
];