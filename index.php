<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethical Hacking Learinng</title>
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        require "nav.html"
    ?>
    
    <div class="StartPage">
        <div id="WholeText">
            <div id="txt1">
                <p>Your Best</p>
                <p>Cybersecurity</p>
                <p>Solutions</p>
            </div>
            <div id="txt2">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio dolores nemo quas officia, quibusdam
                    enim? A quis placeat maxime tenetur.</p>
            </div>
            <div id="btn1">
                <a href="#">Request Free Acess</a>
            </div>

        </div>
    </div>
    <div id="block1">
        <div class="box" id="box1">
            <h3>Security</h3>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatibus commodi magnam expedita aperiam atque nemo cumque!</span>
        </div>
        <div class="box" id="box2">
            <h3>Industry Certified</h3>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatibus commodi magnam expedita aperiam atque nemo cumque!</span>
        </div>
        <div class="box" id="box3">
            <h3>Pen Testing</h3>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatibus commodi magnam expedita aperiam atque nemo cumque!</span>
        </div>
        <div class="box" id="box4">
            <h3>Cyber Threat Hunting</h3>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, voluptatibus commodi magnam expedita aperiam atque nemo cumque!</span>
        </div>
        <!--  -->
    </div>
    <div id="block2tag">
        <p>Types Of Hackers</p>
    </div>
    <div class="block2" onmouseleave="blockleave()">
        <div id="left" class="side">
            <div id="whiteL" class="typeL" onmouseover="Whoverh()">
                White hat hacker
            </div>
            <div id="blackL" class="typeL" onmouseover="Bhoverh()">
                Black hat hacker
            </div>
            <div id="greyL" class="typeL" onmouseover="Ghoverh()">
                Grey hat hacker
            </div>
        </div>
        <div id="right" class="side">
            <div id="image11">
                <img src="block2.png" alt="" id="Image">
            </div>
            <div id="whiteR" class="typeR" style="display: none;">
                <p>A white hat hacker -- or ethical hacker -- is an individual who uses hacking skills to identify security vulnerabilities in hardware, software or networks. However, unlike black hat hackers -- or malicious hackers -- white hat hackers respect the rule of law as it applies to hacking. Many white hat hackers are former black hat hackers. The terms come from old Western movies, where heroes often wore white hats and the bad guys wore black hats.White hat hackers only seek vulnerabilities or exploits when they are legally permitted to do so. White hat hackers may do their research on open source software, as well as on software or systems they own or have been authorized to investigate, including products and services that operate bug bounty programs.</p>
            </div>
            <div id="blackR" class="typeR" style="display: none;">
                <p>Criminals who intentionally enter computer networks with malicious intent are known as "black hat hackers". They may distribute malware that steals data (particularly login credentials), financial information, or personal information (such as passwords or credit card numbers). This information is often then sold on the dark web. Malware can also be used to hold computers hostage or destroy files. Some hackers modify or destroy data in addition to stealing it. Even though hacking has become an important tool for governments to gather intelligence, black hats still tend to work alone or with organized crime groups to make easy money.Black hat hackers can be novices or experienced criminals. </p>
                
            </div>
            <div id="greyR" class="typeR" style="display: none;">
                <p>The term came into use in the late 1990s, derived from the concepts of "white hat" and "black hat" hackers. When a white hat hacker discovers a vulnerability, they will exploit it only with permission and not divulge its existence until it has been fixed, whereas the black hat will illegally exploit it and/or tell others how to do so. The grey hat will neither illegally exploit it, nor tell others how to do so.A further difference among these types of hacker lies in their methods of discovering vulnerabilities. According to one definition of a grey-hat hacker, when they discover a vulnerability, instead of telling the vendor how the exploit works, they may offer to repair it for a small fee.</p>
    
            </div>
            
        </div>
    </div>
    <script src="hacking.js"></script>
</body>

</html>