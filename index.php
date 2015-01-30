<?php
	
	#
	# Make sure you get the right date. You don't want to be celebrating on the wrong day
	# Original Code by BradSlavin for credit
	#
	date_default_timezone_set('America/Vancouver');
	#
	# Holidays come from http://www.studentbeans.com/worldweirdweb/a/odd+facts/what-crazy-national-day-falls-on-your-birthday3119.html
	#
	$holidays = array(
		array("First Foot Day and Z Day", "Run Up the Flagpole and See if Anybody Salutes It Day", "Festival of Sleep Day", "Trivia Day and Humiliation Day", "Bird Day", "Bean Day", "Old Rock Day", "National JoyGerm Day and Man Watcher's Day", "Play God Day", "Peculiar People Day", "National Step in a Puddle and Splash Your Friend Day", "Feast of Fabulous Wild Men Day", "Make Your Dream Come True Day and Blame Someone Else Day", "National Dress Up Your Pet Day", "Hat Day", "Hot and Spicy Food International Day and National Nothing Day", "Blessing of the Animals at the Cathedral Day", "Winnie the Pooh Day", "National Popcorn Day", "National Buttercrunch Day", "National Hugging Day", "National Answer Your Cat's Question Day", "National Handwriting Day, National Pie Day, and Measure Your Feet Day", "Eskimo Pie Patent Day", "Opposite Day", "Australia Day", "Thomas Crapper Day", "National Kazoo Day", "National Cornchip Day", "Escape Day", "National Popcorn Day and Child Labor Day"),
		array("Serpent Day", "Purification Day", "Cordova Ice Worm Day", "Create A Vacuum Day", "Disaster Day", "Lame Duck Day", "Charles Dickens Day", "Kite Flying Day", "Toothache Day", "Umbrella Day", "White Tee-Shirt Day and Don't Cry Over Spilled Milk Day", "National Plum Pudding Day", "Get A Different Name Day and Dream Your Sweet Day", "Ferris Wheel Day and National Heart to Heart Day", "National Gum Drop Day", "Do A Grouch A Favor Day", "Champion Crab Races Day", "National Battery Day", "National Chocolate Mint Day", "Hoodie Hoo Day", "Card Reading Day", "Be Humble Day", "International Dog Biscuit Appreciation Day", "National Tortilla Chip Day", "Pistol Patent Day (Samuel Colt)", "National Pistachio Day", "International Polar Bear Day", "Public Sleeping Day", "National Surf and Turf Day"),
		array("National Pig Day and Peanut Butter Lover's Day", "Old Stuff Day", "I Want You To Be Happy Day and National Anthem Day", "Holy Experiment Day", "Multiple Personalities Day", "National Frozen Food Day", "National Crown Roast Of Pork Day", "Be Nasty Day", "Panic Day", "Festival Of Life In The Cracks Day", "Johnny Appleseed Day and Worship of Tools Day", "Alfred Hitchcock Day", "Jewel Day", "National Potato Chip Day", "Buzzard's Day and Everything You Think Is Wrong Day", "Everything You DoRight Day", "Submarine Day", "Supreme Sacrifice Day", "Poultry Day", "Proposal Day and Festival Of Extraterrestrial Abductions Day", "Fragrance Day", "National Goof-off Day", "National Organize Your Home Office Day and National Chip and Dip Day", "National Chocolate Covered Raisins Day", "Pecan Day and Waffle Day", "Make Up Your Own Holiday Day and Spinach Festival Day", "National 'Joe' Day", "Something On A Stick Day", "Festival Of Smoke and Mirrors Day", "I Am In Control Day", "Bunsen Burner Day"),
		array("One Cent Day", "National Peanut Butter and Jelly Day", "Tweed Day and Don't Go To Work Unless It's Fun Day", "Tell-A-Lie Day", "Go For Broke Day", "Sorry Charlie Day", "No Housework Day", "All Is Ours Day", "Winston Churchill Day and Name Yourself Day", "Golfers Day", "Eight-Track Tape Day", "Look Up At The Sky Day", "Blame Somebody Else Day", "National Pecan Day", "Rubber Eraser Day", "National Stress Awareness Day and National Eggs Benedict Day", "National Cheeseball Day", "International Jugglers Day", "Garlic Day", "Look Alike Day", "Kindergarten Day", "National Jelly Bean Day", "Read Me Day and World Laboratory Animal Day", "National Pigs In A Blanket Day", "National Zucchini Bread Day", "Richter Scale Day and National Pretzel Day", "Tell A Story Day", "Kiss-Your-Mate Day", "National Shrimp Scampi Day", "National Honesty Day"),
		array("Save The Rhino Day", "Fire Day", "Lumpy Rug Day", "National Candied Orange Peel Day", "National Hoagie Day", "Beverage Day", "International Tuba Day and National Roast Leg of Lamb Day", "No Socks Day and Have A Coke Day", "Lost Sock Memorial Day", "Clean Up Your Room Day", "Eat What You Want Day and Twilight Zone Day", "Limerick Day", "Leprechaun Day", "National Dance Like A Chicken Day", "National Chocolate Chip Day", "Wear Purple For Peace Day", "Pack Rat Day", "International Museum Day and Visit Your Relatives Day", "Frog Jumping Jubilee Day", "Eliza Doolittle Day", "National Memo Day and National Waitresses/Waiters Day", "Buy-A-Musical-Instrument Day", "Penny Day", "National Escargot Day", "National Tap Dance Day", "Grey Day", "Body Painting Arts Festival", "National Hamburger Day", "End Of The Middle Ages Day", "My Bucket's Got A Hole In It Day", "National Macaroon Day"),
		array("Dare Day", "National Rocky Road Day", "Repeat Day", "Old Maid's Day", "Festival Of Popular Delusions Day", "Teacher's Day", "National Chocolate Ice Cream Day", "Name Your Poison Day", "Donald Duck Day", "National Yo-Yo Day", "National Hug Holiday", "Machine Day", "National Juggling Day", "Pop Goes The Weasel Day", "Smile Power Day", "National Hollerin' Contest Day", "Eat Your Vegetables Day", "International Panic Day", "World Sauntering Day", "Ice Cream Soda Day", "Cuckoo Warning Day", "National Chocolate Eclair Day", "National Pink Day", "Museum Comes To Life Day", "Log Cabin Day", "National Chocolate Pudding Day", "National Columnists Day", "Paul Bunyan Day", "Camera Day", "Meteor Day"),
		array("Build A Scarecrow Day", "Visitation Of The Virgin Mary Day", "Stay Out Of The Sun Day and Compliment Your Mirror Day", "National Country Music Day", "Workaholics Day", "National Fried Chicken Day", "National Strawberry Sundae Day", "Video Games Day", "National Sugar Cookie Day", "Clerihew Day", "National Cheer Up The Lonely Day", "National Pecan Pie Day", "Fool's Paradise Day", "National Nude Day", "Respect Canada Day", "International Juggling Day", "National Peach Ice Cream Day", "National Ice Cream Day and National Caviar Day", "Flitch Day", "Ugly Truck Contest Day", "National Tug-Of-War Tournament Day", "Ratcatcher's Day", "National Vanilla Ice Cream Day", "Amelia Earhart Day", "Threading The Needle Day", "All Or Nothing Day", "Take Your Pants For A Walk Day", "National Milk Chocolate Day", "Cheese Sacrifice Purchase Day", "National Cheesecake Day", "Parent's Day"),
		array("Friendship Day and National Raspberry Cream Pie Day", "National Ice Cream Sandwich Day", "National Watermelon Day", "Twins Day Festival", "National Mustard Day", "Wiggle Your Toes Day", "Sea Serpent Day", "Sneak Some Zucchini Onto Your Neighbor's Porch Night", "National Polka Festival", "Lazy Day", "Presidential Joke Day", "Middle Child's Day", "Blame Someone Else Day", "National Creamsicle Day", "National Relaxation Day and National Failures Day", "Bratwurst Festival", "National Thriftshop Day", "Bad Poetry Day", "Potato Day", "National Radio Day", "National Spumoni Day", "Be An Angel Day", "National Spongecake Day", "Knife Day", "Kiss-And-Make-Up Day", "National Cherry Popsicle Day", "Petroleum Day", "World Sauntering Day", "More Herbs, Less Salt Day", "National Toasted Marshmallow Day", "National Trail Mix Day"),
		array("Emma M. Nutt Day", "National Beheading Day", "Skyscraper Day", "Newspaper Carrier Day", "Be Late For Something Day", "Fight Procrastination Day", "Neither Rain Nor Snow Day", "National Date Nut Bread Day and Pardon Day", "Teddy Bear Day", "Swap Ideas Day", "No News is Good News Day", "National Pet Memorial Day and National Chocolate Milkshake Day", "Defy Superstition Day", "National Cream-filled Donut Day", "Felt Hat Day", "Collect Rocks Day", "National Apple Dumpling Day", "National Play-doh Day", "International Talk Like a Pirate Day", "National Punch Day", "World Gratitude Day and International Banana Festival", "Hobbit Day and Dear Diary Day", "Checkers Day and Dogs In Politics Day", "Festival Of Latest Novelties", "National Comic Book Day", "National Good Neighbor Day and National Pancake Day", "Crush A Can Day", "Ask A Stupid Question Day More", "Poisoned Blackberries Day", "National Mud Pack Day"),
		array("World Vegetarian Day and Magic Circles Day", "Name Your Car Day", "Virus Appreciation Day", "National Golf Day", "National Storytelling Festival", "German-American Day and Come and Take It Day", "National Frappe Day", "American Tag Day", "Moldy Cheese Day", "National Angel Food Cake Day", "It's My Party Day", "International Moment Of Frustration Scream Day", "National Peanut Festival", "Be Bald and Free Day and National Dessert Day", "White Cane Safety Day", "Dictionary Day", "Gaudy Day", "No Beard Day", "Evaluate Your Life Day", "National Brandied Fruit Day", "Babbling Day", "National Nut Day", "National Mole Day", "National Bologna Day", "Punk For A Day Day", "Mule Day", "Sylvia Plath Day", "Plush Animal Lover's Day and National Chocolate Day", "Hermit Day", "National Candy Corn Day", "National Magic Day and Increase Your Psychic Powers Day"),
		array("Plan Your Epitaph Day", "National Deviled Egg Day", "Sandwich Day and Housewife's Day", "Waiting For The Barbarians Day", "Gunpowder Day", "Saxophone Day and Marooned Without A Compass Day", "National Bittersweet Chocolate With Almonds Day", "Dunce Day", "Chaos Never Dies Day", "Forget-Me-Not Day", "Air Day", "National Pizza With The Works Except Anchovies Day", "National Indian Pudding Day", "Operation Room Nurse Day", "National Clean Out Your Refrigerator Day", "Button Day", "Take A Hike Day", "Occult Day", "Have A Bad Day Day", "Absurdity Day", "World Hello Day and False Confessions Day", "Start Your Own Country Day", "National Cashew Day", "Use Even If SealBroken Day", "National Parfait Day", "Shopping Reminder Day", "Pins And Needles Day", "Make Your Own Head Day", "Square Dance Day", "Stay At Home Because You're Well Day"),
		array("National Pie Day and Eat A Red Apple Day", "National Fritters Day", "National Roof-Over-Your-Head Day", "Wear Brown Shoes Day", "National Sacher Torte Day", "National Gazpacho Day", "National Cotton Candy Day", "Take It In The Ear Day", "National Pastry Day", "Festival For The Souls Of Dead Whales", "National Noodle Ring Day", "National Ding-A-Ling Day", "Ice Cream and Violins Day", "National Bouillabaisse Day", "National Lemon Cupcake Day", "National Chocolate Covered Anything Day", "Underdog Day and National Maple Syrup Day", "National Roast Suckling Pig Day", "Oatmeal Muffin Day", "Games Day", "Look At The Bright Side Day and Hamburger Day", "National Date-Nut Bread Day", "Roots Day", "National Egg Nog Day", "National Pumpkin Pie Day", "National Whiners Day", "National Fruitcake Day", "Card Playing Day and National Chocolate Day", "Pepper Pot Day", "Festival Of Enormous Changes At The Last Minute and National Bicarbonate Of Soda Day", "Unlucky Day")
	);
	
	
	#
	# Prepare the greeting based on the date
	#
	$month = (int)date("n")-1;
	$day = (int)date("j")-1;
	$greeting = "Happy ".$holidays[$month][$day]."!";
	
	
	#	
	# Send the curl request
	#
	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_URL => 'https://hooks.slack.com/services/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',
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_POST => 1,
	    CURLOPT_POSTFIELDS => array('payload' => '{"text": "'.$greeting.'"}')
	));
	curl_exec($curl);
	curl_close($curl);
?>
