<?php 
/*  
````````````````````````````````````````````````````````````````````````````````
``````````````````````````````````CODER INFO````````````````````````````````````
````````````````````````````````````````````````````````````````````````````````
``````````````````````````TELEGRAM: @ADVANCEDSPAMMING```````````````````````````
````````````````````````````````````````````````````````````````````````````````
````````````````````````````````.-/+osyyyso+/-.`````````````````````````````````
``````````````````````````````:oyhhhhhhhhhhhhhyo:```````````````````````````````
````````````````````````````/yhhhhhhhhhhhhhhhhhhhy/`````````````````````````````
``````````````````````````.shhhhhhhhhhhhhhhhhhhhhhhs.```````````````````````````
`````````````````````````.yhhhhhhhhhhhhhhhhhhhhhhhhhy.``````````````````````````
`````````````````````````shhhhhhhhhhhhhhhhhhhhhhhhhhhs``````````````````````````
``````````````````+++++`-hhhhhhhhhhhhhhhhhhhhhhhhhhhhh-`+++++```````````````````
`````````````````.hhhhh`/hhhhhhhhhhhhhhhhhhhhhhhhhhhhh+`hhhhh.``````````````````
`````````````````.hhhy+`/hhhhhhhhhhhhhhhhhhhhhhhhhhhhh/`+yhhh.``````````````````
`````````````````.hhh+``.hhhhhhyo++shhhhhhhs++oshhhhhh-``+hhh.``````````````````
`````````````````.hhh+```+hhhy.`````/hhhhh+`````.shhho```+hhh.``````````````````
`````````````````.hhh+```.hhho``````/hhhhho``````/hhh.```+hhh.``````````````````
`````````````````.hhh+````hhhho::/+shhh+hhhyo/::ohhhh````+hhh.``````````````````
`````````````````.hhh+```+hhhhhhhhhhhh+`/hhhhhhhhhhhh+```+hhh.``````````````````
`````````````````.hhh+```-shhhhhhhhhhs```ohhhhhhhhhhs-```+hhh.``````````````````
`````````````````.hhh+`````-ohhyhhhhhhhhhhhhhhhyhho-`````+hhh.``````````````````
`````````````````.hhh+``````````.yhhhhhhhhhhhy.``````````+hhh.``````````````````
`````````````````.hhh+```````````ohhhhhhhhhhho```````````+hhh.``````````````````
`````````````````.hhh+```````````+yhhhhhhhhhy+```````````+hhh.``````````````````
`````````````````.hhh+````````````....---....````````````+hhh.``````````````````
`````````````````.hhhyoooooooooooooooooooooooooooooooooooyhhh.``````````````````
`````````````````.yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy.``````````````````
```````````.::::::///////////////.............///////////////::::::.````````````
```````````:hhhhhhhhhhhhhhhhhhhhho///////////ohhhhhhhhhhhhhhhhhhhhh/````````````
````````````/yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy/`````````````
`````````````.....................................................``````````````
````````````````````````````````````````````````````````````````````````````````
*/
# For Bot Spiders and Search Engines
function is_spider( $user_agent ) {
    $spiders_list = array(
        "(bot",
        "-bot",
        ".bot",
        "/bot",
        "/teoma",
        ":bot",
        "abot",
        "accoona",
        "acoon",
        "adressendeutschland",
        "ah-ha.com",
        "ahoy",
        "altavista",
        "ananzi",
        "anthill",
        "appie",
        "arachnophilia",
        "arale",
        "araneo",
        "aranha",
        "architext",
        "aretha",
        "arks",
        "asterias",
        "atlocal",
        "atn",
        "atomz",
        "augurfind",
        "backrub",
        "bannana_bot",
        "baypup",
        "bdfetch",
        "big brother",
        "biglotron",
        "bjaaland",
        "blackwidow",
        "blaiz",
        "blo.",
        "blog",
        "bloodhound",
        "boitho",
        "booch",
        "bot.",
        "bot/",
        "bradley",
        "butterfly",
        "calif",
        "cassandra",
        "ccubee",
        "cfetch",
        "charlotte",
        "churl",
        "cienciaficcion",
        "cmc",
        "collective",
        "comagent",
        "combine",
        "computingsite",
        "crawl",
        "csci",
        "curl",
        "cusco",
        "daumoa",
        "dbot",
        "deepindex",
        "delorie",
        "depspid",
        "deweb",
        "die blinde kuh",
        "digger",
        "ditto",
        "dmoz",
        "docomo",
        "download express",
        "dtaagent",
        "dwcp",
        "e-collector",
        "ebiness",
        "ebingbong",
        "ebot",
        "ejupiter",
        "emacs-w3 search engine",
        "esther",
        "evliya celebi",
        "ezresult",
        "falcon",
        "felix ide",
        "ferret",
        "fetchrover",
        "fido",
        "findlinks",
        "fireball",
        "fish search",
        "fouineur",
        "funnelweb",
        "gazz",
        "gcreep",
        "genieknows",
        "getterroboplus",
        "geturl",
        "glx",
        "goforit",
        "golem",
        "grabber",
        "gralon",
        "grapnel",
        "griffon",
        "gromit",
        "grub",
        "gulliver",
        "hamahakki",
        "harvest",
        "havindex",
        "hbot",
        "helix",
        "heritrix",
        "hku www octopus",
        "homerweb",
        "htdig",
        "html index",
        "htmlgobble",
        "html_analyzer",
        "hubater",
        "hyper-decontextualizer",
        "ia_archiver",
        "ibm_planetwide",
        "ichiro",
        "iconsurf",
        "iltrovatore",
        "image.kapsi.net",
        "imagelock",
        "incywincy",
        "indexer",
        "infobee",
        "informant",
        "ingrid",
        "inktomisearch.com",
        "inspector web",
        "intelliagent",
        "internet shinchakubin",
        "ip3000",
        "iron33",
        "israeli-search",
        "ivia",
        "jack",
        "jakarta",
        "javabee",
        "jetbot",
        "jumpstation",
        "katipo",
        "kbot",
        "kdd-explorer",
        "kilroy",
        "knowledge",
        "kototoi",
        "kretrieve",
        "labelgrabber",
        "lachesis",
        "larbin",
        "lbot",
        "legs",
        "libwww",
        "link validator",
        "linkalarm",
        "linkscan",
        "lockon",
        "lwp",
        "lycos",
        "magpie",
        "mantraagent",
        "mapoftheinternet",
        "marvin/",
        "mattie",
        "mbot",
        "mediafox",
        "mediapartners",
        "mercator",
        "merzscope",
        "microsoft url control",
        "minirank",
        "miva",
        "mj12",
        "mnogosearch",
        "moget",
        "monster",
        "moose",
        "motor",
        "multitext",
        "muncher",
        "muscatferret",
        "mwd.search",
        "myweb",
        "najdi",
        "nameprotect",
        "nationaldirectory",
        "nazilla",
        "nbot",
        "ncsa beta",
        "nec-meshexplorer",
        "nederland.zoek",
        "netcarta webmap engine",
        "netmechanic",
        "netresearchserver",
        "netscoop",
        "newscan-online",
        "nhse",
        "nokia6682/",
        "nomad",
        "noyona",
        "nutch",
        "nzexplorer",
        "objectssearch",
        "obot",
        "occam",
        "omni",
        "open text",
        "openfind",
        "openintelligencedata",
        "orb search",
        "osis-project",
        "pack rat",
        "pageboy",
        "pagebull",
        "page_verifier",
        "panscient",
        "parasite",
        "partnersite",
        "patric",
        "pbot",
        "pear.",
        "pegasus",
        "peregrinator",
        "pgp key agent",
        "phantom",
        "phpdig",
        "picosearch",
        "piltdownman",
        "pimptrain",
        "pinpoint",
        "pioneer",
        "piranha",
        "plumtreewebaccessor",
        "pogodak",
        "poirot",
        "pompos",
        "poppelsdorf",
        "poppi",
        "popular iconoclast",
        "psycheclone",
        "publisher",
        "python",
        "rambler",
        "raven search",
        "rbot",
        "roach",
        "road runner",
        "roadhouse",
        "robbie",
        "robofox",
        "robozilla",
        "rules",
        "salty",
        "sbider",
        "sbot",
        "scooter",
        "scoutjet",
        "scrubby",
        "search.",
        "searchprocess",
        "seek",
        "semanticdiscovery",
        "senrigan",
        "sg-scout",
        "shai'hulud",
        "shark",
        "shopwiki",
        "sidewinder",
        "sift",
        "silk",
        "simmany",
        "site searcher",
        "site valet",
        "sitetech-rover",
        "skymob.com",
        "sleek",
        "slurp",
        "smartwit",
        "sna-",
        "snappy",
        "snooper",
        "sohu",
        "speedfind",
        "sphere",
        "sphider",
        "spider",
        "spinner",
        "spyder",
        "steeler/",
        "suke",
        "suntek",
        "supersnooper",
        "surfnomore",
        "sven",
        "sygol",
        "szukacz",
        "t-h-u-n-d-e-r-s-t-o-n-e",
        "t-rex",
        "tach black widow",
        "tarantula",
        "tbot",
        "templeton",
        "theophrastus",
        "titan",
        "titin",
        "tkwww",
        "toutatis",
        "tutorgig",
        "twiceler",
        "twisted",
        "ucsd",
        "udmsearch",
        "updated",
        "url check",
        "vagabondo",
        "valkyrie",
        "vbot",
        "verticrawl",
        "victoria",
        "vision-search",
        "volcano",
        "voyager-hc",
        "voyager/",
        "w3c_validator",
        "w3m2",
        "w3mir",
        "walker",
        "wallpaper",
        "wanderer",
        "wauuu",
        "wavefire",
        "web core",
        "web hopper",
        "web wombat",
        "webbandit",
        "webcatcher",
        "webcopy",
        "webfoot",
        "weblayers",
        "weblinker",
        "weblog monitor",
        "webmirror",
        "webmonkey",
        "webquest",
        "webreaper",
        "websitepulse",
        "websnarf",
        "webstolperer",
        "webvac",
        "webwalk",
        "webwatch",
        "webwombat",
        "webzinger",
        "wget",
        "whizbang",
        "whowhere",
        "wild ferret",
        "worldlight",
        "wwwc",
        "wwwster",
        "xenu",
        "xget",
        "xift",
        "xirq",
        "yandex",
        "yanga",
        "ybot",
        "yeti",
        "yodao",
        "zao/",
        "zbot",
        "zippp",
        "zyborg",
        "_bot",);
    foreach( $spiders_list as $spider ) { if ( stripos( $user_agent, $spider ) !== false ) return true; } return false; }

    if ( is_spider( $_SERVER['HTTP_USER_AGENT'] ) == true ) { 
        header( "HTTP/1.1 301 Moved Permanently" );
        header( "location: " . $antibot['redirect_url'] ); 
        exit();}
?>