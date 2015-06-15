<?php
//include'/home/jingujin/public_html/ITGuys/common.php';
//$mysqli = getDBConnect('jingujin_jbauti0', '20N0rth5e@tt1e16', 'jingujin_ITGuys');

echo "<br><i>Inserting phony events into the database.</i><br>";

$query = "INSERT INTO event_main (event_name, description, beg_date_time, end_date_time, event_cost, submitted_by, event_URL, admin_notes, event_loc_lat, event_loc_lng, event_address_line1, event_address_line2, event_address_line3) VALUES ('Walk for Peace', 'We will be walking in the sculpture park and talking to people about the rising sea levels.', '2015-06-19 18:00:00', '2015-06-19 20:00:00', 0.00, 4, 'http://www.example.com', 'Trudy Beakman will provide literature for people to distribute.', 47.616896, -122.356446, '2901 Western Avenue', '', 'Seattle, WA 98121');";
prcSQL($mysqli, $query);

$query = "INSERT INTO event_main (event_name, description, beg_date_time, end_date_time, event_cost, submitted_by, event_URL, admin_notes, event_loc_lat, event_loc_lng, event_loc_desc, event_address_line1, event_address_line2, event_address_line3) VALUES ('Sacred Witness Event to Support Lummi Nation', 'As part of the UUA General Assembly 2015, come honor our connections to each other and to all of creation.

In the face of the overwhelming reality and impacts of climate change and environmental destruction, we need each other. Together, we can celebrate life. Together, we
can deepen our commitments to justice. Together, we can change the world.

Come be renewed in and by our interconnectedness.

Climate change threatens the ecosystems and way of life of the Original Peoples of the Western Hemisphere (Turtle Island), and the Pacific Northwest has become a
corridor for fossil fuels. The largest coal port in North America has been proposed for Puget Sound’s Cherry Point, or Xwe’chi’eXen, desecrating Lummi Nation Sacred
Lands and Waters.

Hear from American Indian and First Nations leaders at the frontlines, including Lummi Nation Councilman and treaty rights activist Jay Julius and Lummi Elder,
international climate justice activist, and totem pole carver Jewell Praying Wolf James.

Together we will move through the deep emotional core touched by climate change: grief, anger, despair, and finally, hope. From that hope we will take action.', '2015-06-27 16:15:00', '2015-06-27 18:15:00', 0.00, 4, 'http://earthministry.org/event/sacred-witness-event-to-support-the-lummi-nation/', '', 45.528457, -122.663170, 'Oregon Convention Center', '777 NE Martin Luther King Jr Blvd', '', 'Portland, OR 97232');";
prcSQL($mysqli, $query);

$descr= "Wash State Reps. Muri and Fey, both members of the Washington House of Representatives Electric Vehicle (EV) Caucus, believe the use of electric vehicles can strengthen Washington’s economy.  One key challenge is how to get more EV charging infrastructure into single- and multi-family residential development  – both new construction and redevelopment.   Is there a win-win solution for South Sound?

Tacoma and Pierce County enjoy a uniquely favorable environment for EV adoption and use: ideally located on the electrified I-5 corridor from B.C. to northern California, and drawing upon emissions-free, regional hydropower, Pierce County can expect a continuing growth in privately-owned electric vehicles. Yet more EV adoption will place new demands on homebuilders being asked to provide home-based charging infrastructure.  We have the opportunity to capitalize on EV infrastructure for multiple benefits, if we prepare for the transition. Symposium participants will join in a lively, generative conversation to explore the best ways to prepare for growth in Electric Vehicles & provide the charging infrastructure needed for single- and multi-family neighborhoods, effectively and efficiently.
";

$query = "INSERT INTO event_main (event_name, description, beg_date_time, end_date_time, event_cost, submitted_by, event_URL, admin_notes, event_loc_lat, event_loc_lng, event_loc_desc, event_address_line1, event_address_line2, event_address_line3) VALUES ('Plugging into the Future', '$descr', '2015-06-19 08:00:00', '2015-06-19 13:00:00', 0.00, 3, 'http://www.ecobuilding.org/events/plugging-into-the-future-vision2action-symposium', '', 47.198236, -122.488625, 'The Star Center', '3873 S 66th St', '', 'Tacoma, WA 98409');";
prcSQL($mysqli, $query);

$descr = "The next Listening Project will be at the Fremont Solstice Fair June 20 from 1 to 3 pm.  We will listen to people as they gather before the parade starts at 3 pm.  Make a sign with a question you want to listen to people about, or Diane will have signs asking about climate change and about Shell Oil drilling in the Arctic.  Please contact Diane or 206-276-0759.  We will meet at 3rd and Leary."; 

$query = "INSERT INTO event_main (event_name, description, beg_date_time, end_date_time, event_cost, submitted_by, event_URL, admin_notes, event_loc_lat, event_loc_lng, event_loc_desc, event_address_line1, event_address_line2, event_address_line3) VALUES ('Climate Listening Project', '$descr', '2015-06-20 13:00:00', '2015-06-20 15:00:00', 0.00, 1, '', '', 47.6548512, -122.3607193, 'The Fremont Solstice Parade', '3rd & Leary', '', 'Seattle, WA 98107');";
prcSQL($mysqli, $query);

$descr = "The latest film of the Yes Men, where they prepare to take on the biggest challenge they’ve ever faced: climate change, will be screened at SIFF Cinema Uptown from June 12th to 18th.  The Yes Men Are Revolting is not just an entertaining depiction of their latest interventions, but also provides a hopeful message about fighting for change. Showing most days at 5:00, 7:20 and 9:30pm through June 18th with matinees on Sat and Sun.";
$query = "INSERT INTO event_main (event_name, description, beg_date_time, end_date_time, event_cost, submitted_by, event_URL, admin_notes, event_loc_lat, event_loc_lng, event_loc_desc, event_address_line1, event_address_line2, event_address_line3) VALUES ('SIFF Cinema Uptown', '$descr', '2015-06-17 21:30:00', '2015-06-17 23:00:00', 0.00, 1, '', '', 47.623617047,-122.3569780122, 'SIFF Cinema Uptown', '511 Queen Anne Avenue North', '', 'Seattle, WA 98109');";
prcSQL($mysqli, $query);
 
$descr = "350 Seattle's TPP group is supporting AFL/CIO phone banking to voters in key districts to generate calls about Fast Track.  Here is the info for that:  Location: UFCW 21, 5030 1st Ave. S, Seattle  Tuesday June 9th from 5:30-8:00 PM and Thursday June 11th from 5:30-8:00 PM.  People wanting to attend a phone bank should please e-mail Marcus Courtney at Mcourtney@aflcio.org. "
$query =  "INSERT INTO event_main (event_name, description, beg_date_time, end_date_time, event_cost, submitted_by, event_URL, admin_notes, event_loc_lat, event_loc_lng, event_loc_desc, event_address_line1, event_address_line2, event_address_line3) VALUES ('Phone Banking', '$descr', '2015-07-30 17:30:00', '2015-06-17 20:00:00', 0.00, 3, '', '', 47.556741,-122.333274, 'AFL/CIO Outreach to Voters  TPP', 'UFCW21,5030 1st Ave.S', '', 'Seattle, WA 98134');";
prcSQL($mysqli, $query);

$descr = "The North Seattle (College) Environmental Working Group (NSEWG) meets regularly on the second and fourth Thursdays of each month to plan work to inform and engage students at North Seattle College and the surrounding community on environmental and climate change projects. All students, staff and faculty are welcome. Thu, September 10, 3:00pm – 4:30pm";
$query = "INSERT INTO event_main (event_name, description, beg_date_time, end_date_time, event_cost, submitted_by, event_URL, admin_notes, event_loc_lat, event_loc_lng, event_loc_desc, event_address_line1, event_address_line2, event_address_line3) VALUES ('North Seattle College Environmental Working Group', '$descr', '2015-09-10 18:30:00', '2015-09-10 21:00:00', 0.00, 2, '', '', 47.699543,-122.332022, 'North Seattle College ', 'North Seattle College AS1623, 9600 College Way', '', 'Seattle, WA 98103');";
prcSQL($mysqli, $query);


$descr = "Don't miss your opportunity to learn from leading organizations in Washington State - register today and join us at GoGreen Seattle on April 30 to lead the change for a more sustainable regional economy. GoGreen empowers business decision-makers with sustainability strategies, tools and connections to create positive change within their organizations by facilitating environmental, economic and social performance improvement. This year attendees will collaborate and strategize action items that will help protect the environment, stimulate growth, integrate and improve services and reduce greenhouse gas emissions – with a special focus this year on clean mobility and transportation.
Our own ED, Terri Butler will be leading a panel titled 'Stakeholders Improving our Regional Resilience: Proactive Innovation to Combat Disruption' - be sure to catch it!";
$query = "INSERT INTO event_main (event_name, description, beg_date_time, end_date_time, event_cost, submitted_by, event_URL, admin_notes, event_loc_lat, event_loc_lng, event_loc_desc, event_address_line1, event_address_line2, event_address_line3) VALUES ('GoGreen', '$descr', '2015-03-10 17:30:00', '2015-03-10 20:00:00', 0.00, 4, '', '', 47.611389,-122.331680, 'North Seattle College ', 'Washington State Convention Center', '800 Convention Pl Seattle, '', 'Seattle, WA  98101');";
prcSQL($mysqli, $query);

$descr = "June Against Doom protest: An affinity group of the ShellNo Action Council is organizing a multi-day Community Picket land blockade of all business at Terminal 5 (Potentially arrestable). They started Friday (June 5th) morning at 6:30 am, but plan to repeat it on Saturday, June 6th and Monday June 8th. They are calling for our support and participation in their efforts to delay the Polar Pioneer via land. Sat, June 6, 6:30am – 8:30am";
$query = "INSERT INTO event_main (event_name, description, beg_date_time, end_date_time, event_cost, submitted_by, event_URL, admin_notes, event_loc_lat, event_loc_lng, event_loc_desc, event_address_line1, event_address_line2, event_address_line3) VALUES ('sHell No!', '$descr', '2015-06-06 06:30:00', '2015-06-06 08:30:00', 0.00, 3, '', '', 47.570912,-122.331680, 'Harbor Island ', 'sHell No! Community Picket Land Blockade', 'Terminal 5 Harbor Island', 'Seattle, WA  Seattle, '', 'Seattle, WA  98134');";
prcSQL($mysqli, $query);


//$mysqli->close();
?>