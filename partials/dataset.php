<?php 

$pType = [
	"Public Web App", 			// 0
	"Private Web App", 			// 1
	"API Web Integration", 		// 2
	"Static Web Site", 			// 3
	"Dynamic Web Site", 		// 4
	"Web Store", 				// 5
	"Brand", 					// 6
	"Mockup/Prototype", 		// 7
	"Promotions/Banners"		// 8
	];
$pRole = [
	"Graphic Design", 				// 0
	"Product Design", 				// 1
	"UX", 							// 2
	"Interaction Design",			// 3	
	"Client-Side Dev",				// 4		
	"Server-Side Dev",				// 5
	"Wordpress Theme Development"	// 6
	];
$pTech = [
	"HTML5+CSS",			// 0
	"Less.JS/SASS",	// 1
	"JS/ECMAScript",		// 2
	"jQuery",				// 3
	"AngularJS",			// 4
	"Bootstrap",			// 5
	"PHP",					// 6
	"Symphony",				// 7
	"Wordpress",			// 8
	"WooCommerce",			// 9
	"Mobile-First",			// 10
	"Only Design"			// 11
];

$work = [
	["title" => "TNG/refresh",
		"color" => "#273141",
		"banner" => "tng-refresh-min.png",
		"c-name" => "double",
		"type" => 4,
		"link" => "https://tangiers.com",
		"link-txt" => "tangiers.com",
		"client" => "Pathwwway",
		"role" => [0, 1, 3, 4],
		"tech" => [0, 1, 2, 3, 4, 5, 6, 7, 10],
		"date" => "2017",
		"path" => "tng-refresh/",
		"img" =>[1, 2, 11, 12, 13, 21, 22] 
	],
	["title" => "Casino-Promo",
		"color" => "#276D6B",
		"banner" => "casino-promo-min.png",
		"type" => 8,
		"link" => "https://bingohall.com",
		"link-txt" => "bingohall.com",
		"client" => "Pathwwway",
		"role" => [0, 2, 3],
		"tech" => [11],
		"date" => "Nov &amp; Dec 2017",
		"path" => "casino-pr/",
		"img" =>[1, 2, 3, 4, 5] 
	],
	["title" => "SSM",
		"color" => "#B20000",
		"banner" => "ssm-web-min.png",
		"type" => 7,
		"link" => "https://www.mixcloud.com/seisme/",
		"link-txt" => "SEISME on Mixcloud",
		"client" => "nowhitespace",
		"role" => [0, 1, 2, 3],
		"date" => "2016",
		"path" => "ssm/",
		"img" =>[1, 2, 3] 
	],
	["title" => "TS/web",
		"color" => "#75BF12",
		"banner" => "ts-web-min.png",
		"c-name" => "double",
		"type" => 3,
		"link" => "http://tripsolutions.co.uk",
		"link-txt" => "tripsolutions.co.uk",
		"client" => "Trip Solutions (in-house project)",
		"role" => [0, 2, 3, 4],
		"tech" => [0, 2, 3, 6, 10],
		"date" => "2015",
		"path" => "ts-web/",
		"img" =>[1, 2, 3, 4, 5, 6] 
	],
	["title" => "CCS/shop",
		"color" => "#4B38AB",
		"banner" => "ccam-shop-min.png",
		"c-name" => "double",
		"type" => 5,
		"link" => "https://candycam.shop/shop/",
		"link-txt" => "candycam.shop",
		"client" => "Candycam Shop",
		"role" => [0, 2, 3, 4, 6],
		"tech" => [0, 2, 3, 5, 6, 8, 9],
		"date" => "Dec 2016",
		"path" => "ccam-shop/",
		"img" =>[1, 2, 3, 11, 12] 
	],
	["title" => "GWA/web",
		"color" => "#3C3C3B",
		"banner" => "gwa-min.png",
		"type" => 0,
		"link" => "https://www.gowildaffiliates.com",
		"link-txt" => "gowildaffiliates.com",
		"client" => "PremiumIT Technologies ",
		"role" => [3, 4],
		"tech" => [0, 2, 3, 6, 10],
		"date" => "2016",
		"path" => "gwa/",
		"img" =>[1, 2] 
	],
	["title" => "GOA/web",
		"color" => "#15396B",
		"banner" => "goa-web-min.png",
		"type" => 7,
		"client" => "Goa Way & Czech-It-Out",
		"role" => [0, 2, 3, 4],
		"date" => "2015",
		"path" => "goa-web/",
		"img" =>[1, 2, 3]
	],
	["title" => "CHR/b2b",
		"color" => "#EF4E23",
		"banner" => "chr-b2b-min.png",
		"c-name" => "double",
		"type" => 1,
		"client" => "Cristian Tour",
		"role" => [2, 3, 4],
		"tech" => [0, 2, 3, 9],
		"date" => "2015",
		"path" => "chr-b2b/",
		"img" =>[1, 2, 3, 4, 5]

	],
	["title" => "SHC/web",
		"color" => "#8A1213",
		"banner" => "shc-web-min.png",
		"c-name" => "double",
		"type" => 3,
		"link" => "http://www.swissholidayco.com/",
		"link-txt" => "swissholidayco.com",
		"client" => "The Swiss Holiday Company",
		"role" => [0, 2, 3, 4],
		"date" => "Jan 2014",
		"path" => "shc-web/",
		"img" =>[1, 2, 3, 4, 5, 11, 12]
	],
	["title" => "eT-A",
		"color" => "#428BCA",
		"banner" => "etrip-agency-min.png",
		"link" => "http://www.etrip-agency.com/",
		"link-txt" => "etrip-agency.com",
		"type" => 1,
		"client" => "Trip Solutions (in-house project)",
		"role" => [0, 2, 3, 4],
		"date" => "2013-2014",
		"path" => "etrip-agency/",
		"img" =>[1, 2] 
	]
	

	// ["title" => "PB/web",
	// 	"color" => "#673D60",
	// 	"banner" => "pb-web-min.png",
	// 	"type" => 3,
	// 	"link" => "http://www.purelybermuda.co.uk/",
	// 	"client" => "Purely Travel Limited, UK",
	// 	"role" => [0, 2, 3, 4],
	// 	"date" => "Nov 2015",
	// 	"path" => "pb-web/",
	// 	"img" =>[1, 2, 3, 4, 5]
	// ]
	// ["title" => "brands",
	// 	"banner" => "brands-min.png",
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