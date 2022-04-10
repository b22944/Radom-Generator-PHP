<?php  
$places = ["At Home", "Attic", "Backyard", "Basement", "Bathroom", "Birthday party", "Block Party", "Bomb shelter", "Childs Bedroom", "Flower Garden", "Garage", "Greenhouse", "Group foster home", "Halloween party", "House party", "Kitchen", "Living room", "Man cave", "Mansion", "Motor Home", "Nursery", "Outhouse", "Patio Deck", "Root Cellar", "Secret passageway", "Teenagers Bedroom", "Tool shed", "Tree house", "Underground storm shelter", "Wake", "Wine cellar", "Workshop", "At school", "Boarding school", "Custodian supply room", "Dorm room", "Elementary school classroom", "Gymnasium", "High school cafeteria", "High school hallway", "Locker room", "Playground", "Preschool", "Principals office", "School bus", "Science lab", "Teachers lounge", "University lecture hall", "Abandoned mine", "Ancient ruins", "Archery range", "Barn", "Beach party", "Campsite", "Church", "Country road", "Country fair", "Farm", "Farmers market", "Graveyard", "Hunting cabin", "Landfill", "Lighthouse", "Mausoleum (darbar)", "Orchard", "Pasture", "Quarry", "Ranch", "Rodeo", "Salvage yard", "Slaughterhouse", "Summer camp", "Taxidermist", "Wedding reception", "Winery", "Nature and landforms", "Arctic tundra", "Badlands", "Beach", "Canyon", "Cave", "Desert", "Creek", "Hiking trails", "Hot springs", "Lake", "Marsh", "Meadow", "Moors", "Mountains", "Ocean", "Pond", "Rainforest", "River", "Swamp", "Tropical island", "Waterfall", "Airplane", "Airport", "Alley", "Ambulance", "Amusement Park", "Antiques Shop", "Art gallery", "Art studio", "Bakery", "Ballroom", "Bank", "Bar", "Bazaar", "Big City", "Street", "Black-Tie Event", "Boardroom", "Bookstore", "Bowling Alley", "Car Accident", "Car Wash", "Carnival", "Funhouse", "Casino", "Casual Dining", "Restaurant", "Cheap Motel", "Circus", "City Bus", "Coffeehouse", "Community Center", "Condemned Apartment Building", "Construction Site", "Convenience Store", "Courtroom", "Cruise Ship", "Deli Diner", "Elevator", "Emergency Room", "Empty Lot", "Factory", "Fast Food Restaurant", "Fire Station", "Fishing Boat", "Fitness Center", "Flower Shop", "Funeral Home", "Gas Station", "Golf Course", "Green Room", "Grocery Store", "Hair Salon", "Hardware Store", "Homeless Shelter", "Hospital Room", "Hotel Room", "Ice Cream Parlor", "Indoor shooting Range", "Jewelry Store", "Juvenile Detention Center", "Laundromat", "Library", "Limousine", "Liquor Store", "Marina Mechanics Shop", "Military Base", "Military Helicopter", "Morgue", "Movie Theater", "Museum", "Newsroom", "Night Club", "Nursing Home", "Office Cubicle", "Old Pick-Up Truck", "Outdoor Pool", "Outdoor Skating", "Rink Parade", "Park", "Parking Garage", "Parking Lot", "Pawn Shop", "Penthouse Suite", "Performing Arts", "Theater", "Pet Store", "Police Car", "Police Station", "Pool Hall", "Prison Cell", "Psychiatric Ward", "Psychics Shop", "Pub", "Public Restroom", "Race Track (Horses)", "Rec Center", "Recording Studio", "Refugee Camp", "Rock Concert", "Run-Down Apartment Sewers", "Shopping Mall Skate", "Park Ski", "Resort", "Small Town", "Street Spa", "Sporting Event", "Stands Submarine", "Subway Train", "Subway Tunnel", "subway restaurant", "Parlor Taxi", "Therapists Office", "Thrift Store", "Train Station", "Truck Stop", "Underpass", "Used Car Dealership", "Vegas Stage Show", "Vet Clinic", "Waiting Room", "Water Park", "Yacht", "Zoo"];
$select = array_rand($places);

$character = ["Male","Female"];
$selectC = array_rand($character);

$zodiac = ["Capricorn","Aquarius", "Pisces", "Aries", "Taurus","Gemini", "Cancer","Leo","Virgo","Libra", "Scorpio","Sagittarius"];
$selectZ = array_rand($zodiac);

$action =["Talking", "speaking", "chatting", "gossiping", "calling","Walking", "running", "hiking", "marching", "stepping out/in","Watching", "seeing", "looking", "staring", "spying","typing","writing","Reading", "studying", "observing", "thinking","Driving", "skatting", "riding", "swimming", "eating",
];
$selectA = array_rand($action);

$continent = ["Asia", "Africa", "North America", "South America", "Antarctica", "Europe", "Australia"];
$selectCon = array_rand($continent);

$job = [
"Painter",
"Carpenter",
"Logistician",
"Financial Advisor",
"HR Specialist",
"Electrical Engineer",
"Physician",
"Accountant",
"Psychologist",
"Art Director",
"Veterinarian",
"Bookkeeping clerk",
"Professional athlete",
"Environmental scientist",
"Web Developer",
"Mechanical Engineer",
"Respiratory Therapist",
"Interpreter & Translator",
"Librarian",
"Executive Assistant",
"Automotive mechanic",
"Personal Care Aide",
"Clinical Laboratory Technician",
"Medical Assistant",
"Fitness Trainer",
"College Professor",
"Bookkeeping clerk",
"Desktop publisher",
"Microbiologist",
"Food Scientist",
"Security Guard",
"Marriage & Family Therapist",
"Computer Support Specialist",
"Civil Engineer",
"Customer Service Representative",
"Radiologic Technologist",
"Human Resources Assistant",
"Middle School Teacher",
"School Counselor",
"Sports Coach"
];

$selectjob = array_rand($job);

?>