<?php
//A problem credict table should have the following attributes
//1. ID int primary key : the index of the problem
//2. QuestionName Varchar(150) : e.g UVA00000-ABCDE
//3. ProblemSetter Varchar(100) : name of problem setters
//4. Appearance Varchar (20) : e.g section X.Y

//86 questions
$problems = array (
					"UVa 10082 - WERTYU",
					"UVa 10812 - Beat the Spread!",
					"UVa 10901 - Ferry Loading III",
					"UVa 10226 - Hardwood Species",
					"UVa 11242 - Tour de France",
					"UVa 10369 - Arctic Network",
					"UVa 10364 - Square",
					"UVa 10731 - Test",
					"UVa 10150 - Doublets",
					"UVa 11101 - Mall Mania",
					"UVa 10034 - Freckles",
					"UVa 10397 - Connect the Campus",
					"UVa 10717 - Mint",
					"UVa 10299 - Relatives",
					"UVa 10139 - Factovisors",
					"UVa 10012 - How Big Is It?",
					"UVa 10316 - Airline Hub",
					"UVa 10297 - Beavergnaw",
					"UVa 10387 - Billiard",
					"UVa 11034 - Ferry Loading IV",
					"UVa 11137 - Ingenuous Cubrency",
					"UVa 10422 - Knights in FEN",
					"UVa 10610 - Gopher and Hawks",
					"UVa 10940 - Throwing cards away II",
					"UVa 11130 - Billiard bounces",
					"UVa 10551 - Basic Remains",
					"UVa 10408 - Farey sequences",
					"UVa 10405 - Longest Common Subsequence",
					"UVa 10902 - Pick-up Sticks",
					"UVa 10171 - Meeting Prof. Miguel...",
					"UVa 10394 - Twin Primes",
					"UVa 10533 - Digit Primes",
					"UVa 10539 - Almost Prime Numbers",
					"UVa 10789 - Prime Frequency",
					"UVa 11466 - Largest Prime Divisor",
					"UVa 11417 - GCD",
					"UVa 10174 - Couple-Bachelor-Spinster Numbers.",
					"UVa 10176 - Ocean Deep! Make it shallow!!",
					"UVa 10061 - How many zero's and how many digits?",
					"UVa 10323 - Factorial! You Must be Kidding!!!",
					"UVa 10473 - Simple Base Conversion",
					"UVa 10056 - What is the Probability ?",
					"UVa 10589 - Area",
					"UVa 10286 - Trouble with a Pentagon",
					"UVa 10347 - Medians",
					"UVa 10245 - The Closest Pair Problem",
					"UVa 10911 - Forming Quiz Teams",
					"UVa 11159 - Factors and Multiples",
					"UVa 10862 - Connect the Cable Wires",
					"UVa 11462 - Age Sort",
					"UVa 11262 - Weird Fence",
					"UVa 11401 - Triangle Counting",
					"LA 3294 - The Ultimate Bamboo Eater",
					"Thailand ICPC National Contest 2009 - My Ancestor",
					"LA 4143 - Free Parentheses (Jakarta 2008)",
					"LA 4657 - Top 10 (Jakarta 2009)",
					"SPOJ SARRAY",
					"LA 4106 - ACORN (Singapore 2007)",
					"LA 410X - RACING (Singapore 2007)",
					"LA 4104 - MODEX (Singapore 2007)",
					"UVa 725 - Division",
					"UVa 750 - 8 Queens Chess Problem",
					"UVa 10360 - Rat Attack",
					"LA 4793 - Robots on Ice (ICPC World Finals 2010)",
					"UVa 410 - Station Balance",
					"LA 4445 - A Careful Approach (ICPC World Finals 2009)",
					"UVa 11450 - Wedding Shopping",
					"UVa 108 - Maximum Sum",
					"UVa 10003 - Cutting Sticks",
					"SPOJ 101 - Fishmonger",
					"UVa 336 - A Node Too Far",
					"UVa 908 - Re-connecting Computer Sites",
					"UVa 10600 - ACM Contest and Blackout",
					"UVa 341 - Non-Stop Travel",
					"UVa 558 - Wormholes",
					"UVa 820 - Internet Bandwidth (World Finals 2000)",
					"LA 3126 - Taxi Cab Scheme (Northwestern Europe 2004)",
					"TCO 2009 - Qualifying 1 - Prime Pairs",
					"LA 3487 - Duopoly ()",
					"UVa 10925 - Krakovia",
					"UVa 10814 - Simplifying Fractions",
					"UVa 350 - Pseudo-Random Numbers",
					"LA 4601 - Euclid (Southeast USA 2009)",
					"UVa 11646 - Athletics Track",
					"UVa 607 - Scheduling Lectures",
					"UVa 610 - Street Directions"
					);
$setters = array (
					"Gordon V. Cormack",
					"Piotr Rudnicki",
					"Shahriar Manzoor",
					"Sohel Hafiz",
					"Mohammad Mahmudur Rahman with Manzurur Rahman Khan",
					"Rujia Liu",
					"Felix Halim",
					"Melvin Zhang Zhiyong/Colin Tan Keng Yang",
					"Melvin Zhang Zhiyong",
					"Melvin Zhang Zhiyong",
					"TUD Programming Contest (Author unknown)",
					"One of the judge in WF 2010... (Author unknown)",
					"One of the judge in WF 2009... (Author unknown)",
					"Internet Duke (Author unknown)",
					"UPM'2000 (Author unknown)",
					"Joao Marques (email address not found yet)",
					"Shamil Yagiyayev (email address not found yet)",
					"TopCoder",
					"Sérgio Queiroz de Medeiros (email address not found yet)",
					"Jim Knisely",
					"Howard Cheng",
					"Howard Cheng"
					);
$setters_indexes = array (
					0,19,29,46,49,52,53,57,58,59,62,63,65,67,68,71,72,77,79,82,84,85
					);
$locations = array (
						"Section 1.3",
						"Section 1.3",
						"Section 2.2.1",
						"Section 2.2.2",
						"Section 3.1",
						"Section 3.2",
						"Section 3.4",
						"Section 4.2",
						"Section 4.3",
						"Section 4.3",
						"Section 4.4",
						"Section 4.4",
						"Section 5.3.2",
						"Section 5.3.3",
						"Section 5.3.7",
						"Section 7.2",
						"Section 7.2",
						"Section 7.2",
						"Section 7.2",
						"Section 2.2.1",
						"Section 3.4.2",
						"Section 4.3",
						"Section 4.3",
						"Section 5.2",
						"Section 5.2",
						"Section 5.4.2",
						"Section 5.5.3",
						"Section 6.3.2",
						"Section 7.4",
						"Section 4.7",
						"Section 5.3.1",
						"Section 5.3.1",
						"Section 5.3.1",
						"Section 5.3.1",
						"Section 5.3.1",
						"Section 5.3.2",
						"Section 5.3.5",
						"Section 5.3.5",
						"Section 5.3.7",
						"Section 5.3.7",
						"Section 5.4.2",
						"Section 5.5.4",
						"Section 7.2",
						"Section 7.2",
						"Section 7.2",
						"Section 7.5",
						"Section 1.2",
						"Section 4.9.3",
						"Section 5.3.6",
						"Section 2.2.1",
						"Section 3.3",
						"Section 5.5.2",
						"Section 3.3.1",
						"Section 3.3.1",
						"Section 3.4.3",
						"Section 6.4",
						"Section 6.4",
						"Section 3.4.3",
						"Section 4.4",
						"Section 5.4.2",
						"Section 3.1.1",
						"Section 3.1.1",
						"Section 3.1.2",
						"Section 3.1",
						"Section 3.3",
						"Section 3.3",
						"Section 3.4.1",
						"Section 3.4.2",
						"Section 3.4.3",
						"Section 3.4.3",
						"Section 2.2.2 & 4.3",
						"Section 4.4",
						"Section 4.4",
						"Section 4.5",
						"Section 4.6",
						"Section 4.8",
						"Section 4.9.2",
						"Section 4.9.3",
						"Section 4.9.3",
						"Section 5.4.1",
						"Section 5.4.2",
						"Section 5.5.2",
						"Section 7.2",
						"Section 7.5",
						"Section 8",
						"Section 4",
					);
?>