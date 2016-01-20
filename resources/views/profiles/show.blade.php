<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="description" content=""><meta name="viewport" content="width=device-width,initial-scale=1"><title>Cotanz</title><link rel="icon" href="logoBlack.png"><link rel="apple-touch-icon" href="../front/dist/logoBlack.png"><link rel="stylesheet" href="../front/dist/styles/profile.css"><!-- Place favicon.ico in the root directory --><link rel="stylesheet" href="../front/dist/styles/vendor.css"><link rel="stylesheet" href="../front/dist/styles/main.css"></head>
<body><!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--><div class="profContainer"><div class="profInnerContainer"><div class="profHeader"><div class="profHeaderUpper"><div class="profHeaderLogo" style="background: url(../front/dist/logoBlue.png); background-size: 50px 50px; background-position: center; background-repeat: no-repeat"></div><div class="profHeaderSearch"><input type="text" class="profHeaderSearchInput" placeholder="Search"></div><div class="profHeaderMainMenu"><a href="home" class="mainMenuItemList mainMenuItem1">Home</a> <a href="#" class="mainMenuItemList mainMenuItem2">Profile</a> <a href="#" class="mainMenuItemList mainMenuItem3">Connection</a> <a href="#" class="mainMenuItemList mainMenuItem4">Questions</a> <a href="#" class="mainMenuItemList mainMenuItem5">Blog</a></div><div class="profHeaderIcons"><a href="#" class="profHeaderIconsList"><i class="fa fa-envelope fa-lg"></i></a> <a href="#" class="profHeaderIconsList"><i class="fa fa-inbox fa-lg"></i></a> <a href="#" class="profHeaderIconsList"><i class="fa fa-tasks fa-lg"></i></a></div><div class="profDropDown"><a href="#" class="profDropDownInner" style="background: url(../front/dist/images/profilepic.jpg); background-size: 50px 50px; width: 50px; height: 50px; align-self: center; margin: 0px auto; border-radius: 100%"></a><!--
                        <div class="profDropDownItems">
                            <a href="#" class="insideDropDown">Edit Profile</a>
                            <a href="#" class="insideDropDown">Help</a>
                            <a href="#" class="insideDropDown">Logout</a>
                        </div>
                        --></div></div><div class="profHeaderLower"><div class="profHeaderLowerLinks"><a href="#" class="lowerLinksList lowerListItems1">Posts</a> <a href="#" class="lowerLinksList lowerListItems2">Background</a> <a href="#" class="lowerLinksList lowerListItems3">Recommendations</a> <a href="#" class="lowerLinksList lowerListItems4">Following</a> <a class="headerEmpty"></a></div></div></div><div class="mainBox"><div class="leftBox"><div class="personOverviewBox"><div class="personOverviewBoxItems basicProfInfo"><div class="personProfilePic" style="background: url(../front/dist/images/profilepic.jpg); background-size: cover; background-position: center"></div><h3 class="profileName">{{ $user->fname}} {{$user->lname}}</h3><h4 class="profileTagLine">{{$user->profile->bio}}</h4><h5 class="currentLocation">{{$user->profile->location}}</h5><button class="followButton">Follow</button> <button class="connectButton">Connect</button></div><div class="personOverviewBoxItems personFollowInfo"><div class="personFollowItems personFollowItems1"><h4 class="personFollowItemsInner1">500</h4><h5 class="personFollowItemsInner2">Connections</h5></div><div class="personFollowItems personFollowItems2"><h4 class="personFollowItemsInner1">200</h4><h5 class="personFollowItemsInner2">Followers</h5></div></div><div class="personOverviewBoxItems personLinks"><a href="#" class="personLinksItems personLinksItems1"><i class="fa fa-linkedin-square fa-2x personLinksInnerItems"></i></a> <a href="http:\\github.com/{{$user->profile->github_username}}" class="personLinksItems personLinksItems2"><i class="fa fa-github-square fa-2x personLinksInnerItems"></i></a> <a href="#" class="personLinksItems personLinksItems3"><i class="fa fa-user fa-2x personLinksInnerItems"></i></a> <a href="#" class="personLinksItems personLinksItems4"><i class="fa fa-flickr fa-2x personLinksInnerItems"></i></a></div><div class="personOverviewBoxItems personResume"><h4 class="downloadResume">Download Resume</h4></div>
                        @if(Auth::check() && (Auth::user()->id == $user->id))
                            <div class="personOverviewBoxItems personResume"><h4 class="downloadResume"> {{ link_to_route('profile.edit','Edit Your Profile',$user->id) }}</h4></div>
                            
                        @endif
    </div></div><div class="middleBox"><div class="middleBoxInner"><div class="personPosts"><h4 class="postHeading">POSTS</h4><div class="personPostLinksOuter"><div class="personPostsLink"><div class="personPostPic" style="background: url(images/postpic1.jpg); height: 150px; background-size: cover; background-position: center; border-radius: 4px"></div><div class="personPostHeading"><h4>My Name is Abhishek Sin..</h4></div><div class="personPostTime"><h6>January 15, 2016</h6></div></div><div class="personPostsLink"><div class="personPostPic" style="background: url(images/postpic2.jpg); height: 150px; background-size: cover; background-position: center; border-radius: 4px"></div><div class="personPostHeading"><h4>My name is Kapil Agrawal...</h4></div><div class="personPostTime"><h6>January 15, 2016</h6></div></div><div class="personPostsLink"><div class="personPostPic" style="background: url(images/postpic3.jpg); height: 150px; background-size: cover; background-position: center; border-radius: 4px"></div><div class="personPostHeading"><h4>My name is Baldev Patwari</h4></div><div class="personPostTime"><h6>January 15, 2016</h6></div></div></div></div><div class="profBackground"><div class="profBackgroundInner"><h4 class="backgroundHeading">BACKGROUND</h4><div class="backgroundData"><div class="profEachBox"><div class="profBackgroundInnerUpper"><i class="fa fa-file-text fa-2x profBackgroundInnerUpperLeft"></i><h4 class="profBackgroundInnerUpperRight">SUMMARY</h4></div><div class="profSummaryData"><div class="profDataBlank"><div class="sideLineHelloLeft"></div><div class="sideLineHelloRight"><div class="sideLineCircle"></div><div class="sideLineLine"></div><div class="sideLineCircle"></div></div></div><div class="profSummaryDataRight">We Abhishek, Baldev & Kapil are making this because we want to help students to get to the new heights and touch the sky, because sky is the limit. This project was started with an idea of proving a platform to student to showcase their talent and creativity.</div></div></div><div class="profEachBox"><div class="profBackgroundInnerUpper"><i class="fa fa-suitcase fa-2x profBackgroundInnerUpperLeft"></i><h4 class="profBackgroundInnerUpperRight">EXPERIENCE</h4></div><div class="profSummaryData"><div class="profDataBlank"><div class="sideLineHelloLeft"></div><div class="sideLineHelloRight"><div class="sideLineCircle"></div><div class="sideLineLine"></div><div class="sideLineCircle"></div></div></div><div class="profSummaryDataRight"><div class="profEachJob"><div class="profEachExp"><h4 class="expPeriod">2015 - PRESENT</h4><h3 class="expPosition">Co-founder, CEO</h3><h3 class="expCompany">Apple Inc.</h3></div><div class="expLogo" style="background: url(images/apple.png); background-size: contain; background-repeat: no-repeat; pakground-position: center"></div></div><div class="profEachJob notFirst"><div class="profEachExp"><h4 class="expPeriod">2015 - PRESENT</h4><h3 class="expPosition">Co-founder, CEO</h3><h3 class="expCompany">Apple Inc.</h3></div><div class="expLogo" style="background: url(images/apple.png); background-size: contain; background-repeat: no-repeat; pakground-position: center"></div></div><div class="profEachJob notFirst"><div class="profEachExp"><h4 class="expPeriod">2015 - PRESENT</h4><h3 class="expPosition">Co-founder, CEO</h3><h3 class="expCompany">Apple Inc.</h3></div><div class="expLogo" style="background: url(images/apple.png); background-size: contain; background-repeat: no-repeat; pakground-position: center"></div></div></div></div></div><div class="profEachBox"><div class="profBackgroundInnerUpper"><i class="fa fa-graduation-cap fa-2x profBackgroundInnerUpperLeft"></i><h4 class="profBackgroundInnerUpperRight">EDUCATION</h4></div><div class="profSummaryData"><div class="profDataBlank"><div class="sideLineHelloLeft"></div><div class="sideLineHelloRight"><div class="sideLineCircle"></div><div class="sideLineLine"></div><div class="sideLineCircle"></div></div></div><div class="profSummaryDataRight"><div class="profEachJob"><div class="profEachExp"><h4 class="expPeriod">2012 - 2016</h4><h3 class="expPosition">GLA University</h3><h3 class="expCompany">B-Tech, Computer Science & Engineering</h3></div><div class="expLogo" style="background: url(images/gla.png); background-size: contain; background-repeat: no-repeat; pakground-position: center"></div></div><div class="profEachJob notFirst"><div class="profEachExp"><h4 class="expPeriod">2012 - 2016</h4><h3 class="expPosition">GLA University</h3><h3 class="expCompany">B-tech, Computer Science & Engineering</h3></div><div class="expLogo" style="background: url(images/gla.png); background-size: contain; background-repeat: no-repeat; pakground-position: center"></div></div></div></div></div><div class="profEachBox"><div class="profBackgroundInnerUpper"><i class="fa fa-lightbulb-o fa-2x profBackgroundInnerUpperLeft"></i><h4 class="profBackgroundInnerUpperRight">SKILLS</h4></div><div class="profSummaryData"><div class="profDataBlank"><div class="sideLineHelloLeft"></div><div class="sideLineHelloRight"><div class="sideLineCircle"></div><div class="sideLineLine"></div><div class="sideLineCircle"></div></div></div><div class="profSummaryDataRight"><div class="skillsOuter"><div class="singleSkill">Web Development</div><div class="singleSkill">HTML</div><div class="singleSkill">CSS</div><div class="singleSkill">Logo Design</div><div class="singleSkill">Java</div><div class="singleSkill">Office</div><div class="singleSkill">Photography</div><div class="singleSkill">JavaScript</div><div class="singleSkill">C</div><div class="singleSkill">Linux</div><div class="singleSkill">Android</div><div class="singleSkill">Database</div><div class="singleSkill">Netbeans</div><div class="singleSkill">PHP</div><div class="singleSkill">SQL</div><div class="singleSkill">Public Speaking</div><div class="singleSkill">Illustrator</div><div class="singleSkill">Photoshop</div><div class="singleSkill">Blogging</div><div class="singleSkill">Drawing</div><div class="singleSkill">HTML5</div><div class="singleSkill">Grunt</div><div class="singleSkill">Gulp</div></div></div></div></div><div class="profEachBox"><div class="profBackgroundInnerUpper"><i class="fa fa-star fa-2x profBackgroundInnerUpperLeft"></i><h4 class="profBackgroundInnerUpperRight">INTERESTS</h4></div><div class="profSummaryData"><div class="profDataBlank"><div class="sideLineHelloLeft"></div><div class="sideLineHelloRight"><div class="sideLineCircle"></div><div class="sideLineLine"></div><div class="sideLineCircle"></div></div></div><div class="profSummaryDataRight"><div class="skillsOuter"><div class="singleSkill">Web Development</div><div class="singleSkill">HTML</div><div class="singleSkill">CSS</div><div class="singleSkill">Logo Design</div><div class="singleSkill">Java</div><div class="singleSkill">Office</div><div class="singleSkill">Photography</div><div class="singleSkill">JavaScript</div><div class="singleSkill">C</div><div class="singleSkill">Linux</div><div class="singleSkill">Android</div><div class="singleSkill">Database</div><div class="singleSkill">Netbeans</div><div class="singleSkill">PHP</div><div class="singleSkill">SQL</div><div class="singleSkill">Public Speaking</div><div class="singleSkill">Illustrator</div><div class="singleSkill">Photoshop</div><div class="singleSkill">Blogging</div><div class="singleSkill">Drawing</div><div class="singleSkill">HTML5</div><div class="singleSkill">Grunt</div><div class="singleSkill">Gulp</div></div></div></div></div><div class="profEachBox"><div class="profBackgroundInnerUpper"><i class="fa fa-bar-chart fa-2x profBackgroundInnerUpperLeft"></i><h4 class="profBackgroundInnerUpperRight">PROJECTS</h4></div><div class="profSummaryData"><div class="profDataBlank"><div class="sideLineHelloLeft"></div><div class="sideLineHelloRight"><div class="sideLineCircle"></div><div class="sideLineLine"></div><div class="sideLineCircle"></div></div></div><div class="profSummaryDataRight"><div class="profEachProject"><div class="profEachExp"><h3 class="expPosition">Cotanz College Connect</h3><h4 class="expPeriod">2015 - PRESENT</h4><p class="projectDetail">This website is build for helping the people to create their resume. As in the beginning before we are searching for idea for the project then we decided that we'll develop something which will help thousand or millions of people. We choose to make a resume building website because each and everyone in his life once needs a resume and it's not the secondary thing for any interview but if you are applying for job then it's the primary or must thing and it must be creative and one in a millions if you are applying for a good company like Google, Microsoft or Apple. After choosing it as a topic we decided to provide it free to all.<br>It's free and always will be. We do a lot more research on it. The things which we are providing are not less than thousand dollars if one hire a consultant. We consult many consultants and search on many sites and after a long discussion with HR's we are able to complete this. It's awesome and It really Help as Our MOTTO describes.. Create Your Resume & Resume Your Job.</p></div></div><div class="profEachProject notFirst"><div class="profEachExp"><h3 class="expPosition">Summa - The Resume Builder</h3><h4 class="expPeriod">2014 - 15</h4><p class="projectDetail">This website is build for helping the people to create their resume. As in the beginning before we are searching for idea for the project then we decided that we'll develop something which will help thousand or millions of people. We choose to make a resume building website because each and everyone in his life once needs a resume and it's not the secondary thing for any interview but if you are applying for job then it's the primary or must thing and it must be creative and one in a millions if you are applying for a good company like Google, Microsoft or Apple. After choosing it as a topic we decided to provide it free to all.</p></div></div></div></div></div></div></div></div><div class="personPosts"><h4 class="postHeading">RECOMMENDATIONS</h4><div class="personPostLinksOuter"><div class="personPostsLink"><div class="personRecc">"He is a great Guy, works well, visionary, Hard worker and sometimes very very helpfull. Great developer, leader, sports-person and team worker hello hel. It's my pleasure to work with him..."</div><div class="personPostHeading"><h4>Abhishek Kumar Singh</h4></div><div class="personPostTime"><h6>Cotanz</h6></div></div><div class="personPostsLink"><div class="personRecc">"He is a great Guy, works well, visionary, Hard worker and sometimes very very helpfull. Great developer, leader, sports-person and team worker hello hel. It's my pleasure to work with him..."</div><div class="personPostHeading"><h4>Kapil Agrawal</h4></div><div class="personPostTime"><h6>Cotanz</h6></div></div><div class="personPostsLink"><div class="personRecc">"He is a great Guy, works well, visionary, Hard worker and sometimes very very helpfull. Great developer, leader, sports-person and team worker hello hel. It's my pleasure to work with him..."</div><div class="personPostHeading"><h4>Baldev Patwari</h4></div><div class="personPostTime"><h6>Cotanz</h6></div></div></div></div></div></div><div class="rightBox"></div></div><div class="profFooter">Cotanz Inc. &copy; 2016</div></div></div><!-- Google Analytics: change UA-XXXXX-X to be your site's ID. --><script src="scripts/vendor.js"></script><script src="scripts/main.js"></script></body></html>

