<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Joshua Blakley</title>
    <link rel="stylesheet" href="style/css/style.css" />
    <link rel="stylesheet" href="style/css/text.css" />
    <link rel="stylesheet" href="style/css/960.css" />
    <link rel="stylesheet" href="style/css/menu.css" />
    <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
    <script type="text/javascript" src="style/js/portfolio.js"></script>
    <script type="text/javascript" src="style/js/menu.js"></script>
</head>
<body>
  <div align="center" id="mainWrapper" class="container_12">

    <?php include('_header.php') ?>

    <div id="Content" class="grid_12 pull_12">
      <div id="panel" class="grid_12 alpha">
			  <div class="text">
          <h2>Military Achievements</h2>
          <p class="tab"><b>Decorations, Medals, Badges, Citations, and Campaign Ribbons</b>
            <ul>
              <li>National Defense Service Medal</li>
              <li>Global War on Terrorism Service Medal</li>
              <li>Iraq Campaign Medal with Campaign Star</li>
              <li>Army Service Ribbon</li>
              <li>Overseas Service Ribbon</li>
              <li>Armed Forces Reserve Medal with M Device</li>
              <li>Combat Action Badge</li>
            </ul>
          </p>

          <h2>Professional Achievements</h2>
          <p class="tab"><b>Tyler Technologies</b>
            <br/>
            <ul>
              <li>
                <p>
                  Refactored the mobile finanancial application used across multiple financial products within the company. Worked with different teams to setup and adhere
                  to the webservices API consumed by the application.
                  <br/>
                  <a onclick='webOpen("https://fnd.io/#/us/ios-universal-app/816502174-lgd-financial-management-console-by-tyler")'><button type="button">View App</button></a>
                </p>
              </li>
              <li>
                Refactored payroll/tax calculation modules increasing efficiency and accuracy.
              </li>
            </ul>
          </p>
          <p class="tab"><b>CEA Global Education</b>
            <br/>
            <ul>
              <li>Refactored the University portal, a site for participating universities to log in and
                  view information about students both alumni, and abroad. Pieced together fragmented applications
                  reviving the portal for university use.</li>
              <li>Converted multiple applications from .NET 1.1 to .NET 4.0</li>
            </ul>
          </p>

          <h2>Scholarly Achievements</h2>
          <p class="tab"><b>Junior Capstone - Cisco</b>
            <br/>
            Developed a Drupal website that was used as a proof of concept to rally a world wide collection of open source
            courses or LTI's. This website is being demoed throughout the world to various developers to create a community
            that will maintain and evolve certification course tools.<br/>
            <a class="hDoc" href="docs/cisco_cert.png" rel="#hDocOverlay">
						<button type="button">View Award</button></a>
          </p>
          <p class="tab"><b>Senior Capstone - General Dynamics</b>
            <br/>
            Worked with a team to Develop a web based application used to design complex datacenters. The application was written using the grails framework with a html5/canvas
            front end. The application was a proof of conceipt for creating a easily accessable tool for engineers to design the layout and power/data mappings throughout large
            datacenters. It featured dynamic hardware and cable lists, and an easy to use drag and drop GUI for placing components and mapping thier connections.
          </p>

          <h2>Websites</h2>
				  <p class="tab"><a target="_blank" href="//laurajohnsen.com"><b>LauraJohnsen.com</b></a>
					  <br/>
                      A simple yet elegant personal portfolio website. It comes with a five star rating system to assess her abilities as an editor; this is written using jquery libraries and xml with xslt styling.
					  <br/>
          </p>
          <p class="tab"><a target="_blank" href="//josh-and-laura.us"><b>Josh-and-Laura.us</b></a>
					  <br/>
                      A wedding website complete with carousels for images, and a few imbedded applications for maps and registry. Simple, informative, romantic.
					  <br/>
          </p>
			  </div>
		  </div>
	  </div>
	<div class="clear"></div>
    <?php include('_footer.php') ?>
  </div>
  <div id="webOverlay" >
	<div id="webFrameHolder" class="frameHolder">
	</div>
  </div>
  <div id="hDocOverlay" >
	<div id="hdocFrameHolder" class="frameHolder">
	</div>
  </div>
</body>
</html>

