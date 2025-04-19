<h2>The Gospels use mental illustrations. Jesus actively interacts with a wide range of people, using parables as a key tool to communicate His message in a way that everyone could understand.</h2>
<ul>
    <li>They were Universally accessible by using every day scenarios, Jesus made complex spiritual concepts understandable to both educated scholars and illiterate laborers.</li>
    <li>The use of parables was culturally relevant by using the agricultural and domestic settings of these stories resonated with his audience's daily experiences in the 1st century.</li>
    <li>The multiple layers of meaning often contained surface-level stories that anyone could grasp, while offering deeper theological insights to those willing to contemplate them further.</li>
    <li>The narrative structure of parables made them easier to remember and share than abstract theological concepts.</li>
    <li>Rather than forcing interpretations, parables invited listeners to discover meaning for themselves, engaging their minds and hearts in the process.</li>
</ul>

<!-- This is the Dialog for the links -->
<div class="multi-link-container" id="multiLinkContainer">
  <span class="linked-text" id="linkedText">Click Here</span>
  <div class="link-dialog" id="linkDialog">
    <a href="https://www.example.com/link1">Link 1</a>
    <a href="https://www.example.com/link2">Link 2</a>
    <a href="https://www.example.com/link3">Another Link</a>
  </div>
</div>
<!-- This is the Dialog for the links -->

<link rel="stylesheet" href="../code/dialogs.css">

<style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th {
            background-color:rgb(50, 58, 172);
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9f5e9;
        }
        .parable-name {
            font-weight: bold;
        }
        h1 {
            color:rgb(148, 30, 30);
            text-align: center;
        }
        a {
            display: inline-block;
            white-space: nowrap;
            max-width: 100%;
            font-size: 0.9em; /* Optionally reduce font size for small screens */
        }
        figcaption a {
          text-decoration:none;
          font-size:2em;
          color:white;
          background-color:black;
          margin-top:2%;
          padding-right:2%;
          padding-left:2%;
        }
        figcaption a:hover{
          text-decoration:underline;
          color:royalblue;
        }
        .gospel{
          display:inline-block;
        }
        .link-dialog p{
          font-size:1.07em;
        }
        .link-dialog p:hover,.link-dialog p:focus{
          background:black;
          color:white;
        }
</style>
</head>
<body>
    <h3 style="font-size:2em; margin:0;padding:1.3%;text-align:center;">Jesus in the Gospels</h3>
    <table>

        <tr>
            <th>Parable</th>
            <th>Description</th>
            <th>Scripture Reference <span style="float:right;margin-right:10%;">
                <a href="https://berean.bible" title="Young's Literal Translation
Section Headings Courtesy Berean Study Bible
OpenBible.com" style="color:white;"><ruby>
                [1] <rt> Bible </rt></ruby>
                </a></span>
            </th>
        </tr>


<?php
global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
// Not really sure why The global $Vars have to be declared outside as well as inside the function.
function theSower(){
  global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
  $title= 'The Sower';
  $image = '../images/sower.webp';
  $imageAlt = 'The Sower Parable';
  $linked_image = '../images/sower.png';
  $figCaption = 'The Parable of the Sower';
  $description = 'Describes different responses to the gospel message using the analogy of seeds falling on different types of soil';
  $paragraphDialogs = ['Okay, imagine a farmer throwing seeds on the ground. That\'s kind of like when someone tells you about Jesus. The seeds are the message, and the ground is like your heart.',
                      'Jesus told a story about this. He said some seeds fell on a path where birds ate them up. That\'s like people who hear the message but don\'t get it, and then it\'s just forgotten.',
                      'Some seeds fell on rocky ground. They grew fast at first, but because the soil wasn\'t deep, they dried up and died. That\'s like people who are excited about the message at first, but when things get tough, they give up.',
                      'Other seeds fell among thorny bushes. The bushes grew bigger and stopped the seeds from growing. That\'s like people who hear the message, but they get too worried about other stuff, like money or wanting things, and the message doesn\'t really change them.',
                      'But some seeds fell on good dirt. They grew really well and made lots more seeds. That\'s like people who really listen to the message, understand it, and let it change how they live. They end up doing good things because of it.',
                      'So, the story is about how different people hear the same message in different ways, depending on what\'s going on in their hearts. Only the people with "good hearts" really let the message grow and make a difference.'
                    ];
  $gospel = ['Matthew','Mark','Luke'];
  //$gospelLinkPrefix = $gLP;
  $gLP ='https://openbible.com/ylt/';
  $gospelLinks = ['matthew/13.htm#1','mark/4.htm#1','luke/8.htm#4'];
  $passage = ['13:1-23,','4:1-20,','8:4-15'];
                  }

function mustardSeed(){
  global $title, $image, $imageAlt, $linked_image, $figCaption, $description, $paragraphDialogs, $gospel, $gLP, $gospelLinks, $passage;
  $title= 'The Mustard Seed';
  $image = '../images/mustardSeed.webp';
  $imageAlt = 'The Mustard Seed Parable';
  $linked_image = '../images/mustardSeed.webp';
  $figCaption = 'The Parable of the Mustard Seed';
  $description = 'Illustrates how God\'s kingdom starts small but grows enormously';
  $paragraphDialogs = ['Okay, so Jesus told another story, this time about a tiny mustard seed. You know how small those are, right?',
                      'He said that the kingdom of God is like that little seed. When it\'s planted, it\'s one of the smallest seeds you can find.',
                      'But guess what? When it grows up, it becomes the biggest of all garden plants! It gets so big that birds can even come and make nests in its branches.',
                      'So, what Jesus was saying is that even though God\'s kingdom might seem really small or unimportant at first, it has the power to grow into something huge and amazing. It starts small but ends up being big enough to help and shelter lots of people, just like the big mustard plant shelters the birds. It\'s like something little that has the potential to become something really, really big!'
                    ];
  $gospel = ['Matthew','Mark','Luke'];
  //$gospelLinkPrefix = $gLP;
  $gLP ='https://openbible.com/ylt/';
  $gospelLinks = ['matthew/13.htm#31','mark/4.htm#30','luke/13.htm#18'];
  $passage = ['13:31-32,','4:30-32,','13:18-19'];
}
// Array of functions to call
$parableFunctions = ['theSower', 'mustardSeed'];

foreach ($parableFunctions as $functionTableRow) {
    // Call the current function
    $functionTableRow();
    /*The code below is the Main Table row the loop will iterate over each function*/
    ?>
        <tr>
            <div class="multi-link-container-img" >
              <td><span class="linked-text-img" ><?= $title; ?></span></td>
                <div class="image-dialog" >
                  <figure>
                      <img src="<?= $image; ?>" alt="<?= $imageAlt; ?>">
                      <figcaption><a href="<?= $linked_image; ?>"><?= $figCaption; ?></a></figcaption>
                  </figure>
                </div>
            </div>
              <td>
            <div class="multi-link-container">
              <span class="linked-text"><?= $description; ?></span>
              <div class="link-dialog">
                <?php foreach ($paragraphDialogs as $index ) {
                  echo '<p tabindex="0">'.$index.'</p>';
                }
                ?>
                </div>
            </div>
            </td>
            <td>
            <?php foreach ($gospel as $index => $text): ?>
              <div class="gospel"><?= $text ?> <a href="<?= $gLP . $gospelLinks[$index] ?>" target="_blank"><?= $passage[$index] ?></a></div>
            <?php endforeach; ?>
            </td>
        </tr>
        <?php
        }
        ?>





<!-- HTML SAMPLES OF THE FUNCTIONS
        <tr>
            <div class="multi-link-container-img" >
              <td><span class="linked-text-img" >The Sower</span></td>
                <div class="image-dialog" >
                  <figure>
                      <img src="../images/sower.webp" alt="Image 1">
                      <figcaption><a href="../images/sower.png">The Parable of the Sower</a></figcaption>
                  </figure>
                </div>
            </div>
              <td>
            <div class="multi-link-container">
              <span class="linked-text">Describes different responses to the gospel message using the analogy of seeds falling on different types of soil</span>
              <div class="link-dialog">
                <p tabindex="0">Okay, imagine a farmer throwing seeds on the ground. That's kind of like when someone tells you about Jesus. The seeds are the message, and the ground is like your heart.</p>
                <p tabindex="0">Jesus told a story about this. He said some seeds fell on a path where birds ate them up. That's like people who hear the message but don't get it, and then it's just forgotten.</p>
                <p tabindex="0">Some seeds fell on rocky ground. They grew fast at first, but because the soil wasn't deep, they dried up and died. That's like people who are excited about the message at first, but when things get tough, they give up.</p>
                <p tabindex="0">Other seeds fell among thorny bushes. The bushes grew bigger and stopped the seeds from growing. That's like people who hear the message, but they get too worried about other stuff, like money or wanting things, and the message doesn't really change them.</p>
                <p tabindex="0">But some seeds fell on good dirt. They grew really well and made lots more seeds. That's like people who really listen to the message, understand it, and let it change how they live. They end up doing good things because of it.</p>
                <p tabindex="0">So, the story is about how different people hear the same message in different ways, depending on what's going on in their hearts. Only the people with "good hearts" really let the message grow and make a difference.</p>
              </div>
            </div>
            </td>
            <td>
              <div class="gospel">Matthew <a href="https://openbible.com/ylt/matthew/13.htm" target="_blank">13:1-23,</a></div>
              <div class="gospel">Mark <a href="https://openbible.com/ylt/mark/4.htm">4:1-20,</a></div>
              <div class="gospel">Luke <a href="https://openbible.com/ylt/luke/8.htm">8:4-15</a></div>
            </td>
        </tr>

        <tr>
            <div class="multi-link-container-img" >
              <td><span class="linked-text-img" >The Mustard Seed</span></td>
                <div class="image-dialog" >
                  <figure>
                      <img src="../images/mustardSeed.webp" alt="Image 1">
                      <figcaption><a href="../images/mustardSeed.png">Parable of The Mustard Seed</a></figcaption>
                  </figure>
                </div>
            </div>
            <td>
              <div class="multi-link-container">
                <span class="linked-text">Illustrates how God's kingdom starts small but grows enormously</span>
                <div class="link-dialog">
                  <p tabindex="0">Okay, so Jesus told another story, this time about a tiny mustard seed. You know how small those are, right?</p>
                  <p tabindex="0">He said that the kingdom of God is like that little seed. When it's planted, it's one of the smallest seeds you can find.</p>
                  <p tabindex="0">But guess what? When it grows up, it becomes the biggest of all garden plants! It gets so big that birds can even come and make nests in its branches.</p>
                  <p tabindex="0">So, what Jesus was saying is that even though God's kingdom might seem really small or unimportant at first, it has the power to grow into something huge and amazing. It starts small but ends up being big enough to help and shelter lots of people, just like the big mustard plant shelters the birds. It's like something little that has the potential to become something really, really big!</p>
                  </div>
              </div>
            </td>
            <td>Matthew 13:31-32, Mark 4:30-32, Luke 13:18-19</td>
        </tr>
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*HTML SAMPLES OF THE FUNCTIONS -->

        <tr>
            <td class="parable-name">The Leaven</td>
            <td>Shows how the kingdom of God works subtly but thoroughly transforms</td>
            <td>Matthew 13:33, Luke 13:20-21</td>
        </tr>
        <tr>
            <td class="parable-name">The Hidden Treasure</td>
            <td>Reveals the supreme value of God's kingdom, worth sacrificing everything to obtain</td>
            <td>Matthew 13:44</td>
        </tr>
        <tr>
            <td class="parable-name">The Pearl of Great Price</td>
            <td>Similar to the Hidden Treasure, emphasizes the kingdom's incomparable worth</td>
            <td>Matthew 13:45-46</td>
        </tr>
        <tr>
            <td class="parable-name">The Dragnet</td>
            <td>Describes the final judgment when the righteous will be separated from the wicked</td>
            <td>Matthew 13:47-50</td>
        </tr>
        <tr>
            <td class="parable-name">The Good Samaritan</td>
            <td>Teaches about loving one's neighbor through the story of an unlikely hero helping a wounded stranger</td>
            <td>Luke 10:25-37</td>
        </tr>
        <tr>
            <td class="parable-name">The Prodigal Son</td>
            <td>Illustrates God's forgiveness and the joy of reconciliation through a father welcoming back his wayward son</td>
            <td>Luke 15:11-32</td>
        </tr>
        <tr>
            <td class="parable-name">The Lost Sheep</td>
            <td>Shows God's concern for each individual through a shepherd seeking one lost sheep</td>
            <td>Matthew 18:12-14, Luke 15:1-7</td>
        </tr>
        <tr>
            <td class="parable-name">The Lost Coin</td>
            <td>Emphasizes the value God places on finding those who are lost</td>
            <td>Luke 15:8-10</td>
        </tr>
        <tr>
            <td class="parable-name">The Unmerciful Servant</td>
            <td>Teaches about forgiveness by contrasting a king's mercy with a servant's harshness</td>
            <td>Matthew 18:21-35</td>
        </tr>
        <tr>
            <td class="parable-name">The Workers in the Vineyard</td>
            <td>Reveals God's generosity and grace that defies human expectations of fairness</td>
            <td>Matthew 20:1-16</td>
        </tr>
        <tr>
            <td class="parable-name">The Rich Man and Lazarus</td>
            <td>Warns about the dangers of wealth and ignoring those in need</td>
            <td>Luke 16:19-31</td>
        </tr>
        <tr>
            <td class="parable-name">The Pharisee and the Tax Collector</td>
            <td>Contrasts self-righteous pride with humble repentance in prayer</td>
            <td>Luke 18:9-14</td>
        </tr>
        <tr>
            <td class="parable-name">The Persistent Widow</td>
            <td>Encourages persistent prayer through the story of a widow seeking justice</td>
            <td>Luke 18:1-8</td>
        </tr>
        <tr>
            <td class="parable-name">The Ten Virgins</td>
            <td>Stresses readiness for Christ's return through the analogy of wedding attendants</td>
            <td>Matthew 25:1-13</td>
        </tr>
        <tr>
            <td class="parable-name">The Talents/Minas</td>
            <td>Teaches about stewardship and accountability for what God entrusts to us</td>
            <td>Matthew 25:14-30, Luke 19:11-27</td>
        </tr>
        <tr>
            <td class="parable-name">The Sheep and the Goats</td>
            <td>Describes the final judgment based on how people treated "the least of these"</td>
            <td>Matthew 25:31-46</td>
        </tr>
        <tr>
            <td class="parable-name">The Two Debtors</td>
            <td>Shows how gratitude flows from understanding the depth of forgiveness received</td>
            <td>Luke 7:41-43</td>
        </tr>
        <tr>
            <td class="parable-name">The Unfruitful Fig Tree</td>
            <td>Warns about the need for spiritual fruitfulness and God's patience</td>
            <td>Luke 13:6-9</td>
        </tr>
        <tr>
            <td class="parable-name">The Wicked Tenants</td>
            <td>Foretells Jesus' rejection by religious leaders through the story of rebellious vineyard workers</td>
            <td>Matthew 21:33-46, Mark 12:1-12, Luke 20:9-19</td>
        </tr>
        <tr>
            <td class="parable-name">The Wedding Feast</td>
            <td>Illustrates the invitation to God's kingdom and the importance of proper response</td>
            <td>Matthew 22:1-14, Luke 14:16-24</td>
        </tr>
        <tr>
            <td class="parable-name">The Rich Fool</td>
            <td>Warns against greed and storing up treasures on earth rather than being rich toward God</td>
            <td>Luke 12:13-21</td>
        </tr>
        <tr>
            <td class="parable-name">The Wise and Foolish Builders</td>
            <td>Contrasts those who hear Jesus' words and act on them versus those who don't</td>
            <td>Matthew 7:24-27, Luke 6:47-49</td>
        </tr>
        <tr>
            <td class="parable-name">The Growing Seed</td>
            <td>Shows how God's kingdom grows mysteriously by God's power, not human effort</td>
            <td>Mark 4:26-29</td>
        </tr>
        <tr>
            <td class="parable-name">New Cloth on Old Garment</td>
            <td>Illustrates the incompatibility of the old religious system with Jesus' new teaching</td>
            <td>Matthew 9:16, Mark 2:21, Luke 5:36</td>
        </tr>
        <tr>
            <td class="parable-name">New Wine in Old Wineskins</td>
            <td>Similar to the cloth parable, shows how Jesus' message requires new structures</td>
            <td>Matthew 9:17, Mark 2:22, Luke 5:37-39</td>
        </tr>
        <tr>
            <td class="parable-name">The Lamp on a Stand</td>
            <td>Teaches that spiritual truth is meant to illuminate, not be hidden</td>
            <td>Matthew 5:14-16, Mark 4:21-22, Luke 8:16-17, 11:33-36</td>
        </tr>
        <tr>
            <td class="parable-name">The Two Sons</td>
            <td>Contrasts obedience with mere words, showing the importance of actual repentance</td>
            <td>Matthew 21:28-32</td>
        </tr>
        <tr>
            <td class="parable-name">The Unjust Steward</td>
            <td>Encourages wise use of worldly resources with eternal perspective</td>
            <td>Luke 16:1-13</td>
        </tr>
        <tr>
            <td class="parable-name">The Friend at Midnight</td>
            <td>Teaches persistence in prayer through a story about borrowing bread at night</td>
            <td>Luke 11:5-8</td>
        </tr>
        <tr>
            <td class="parable-name">The Barren Fig Tree</td>
            <td>Warns about the consequences of unfruitfulness despite God's patience</td>
            <td>Luke 13:6-9</td>
        </tr>
        <tr>
            <td class="parable-name">The Great Banquet</td>
            <td>Shows how many reject God's invitation while the unlikely are welcomed</td>
            <td>Luke 14:15-24</td>
        </tr>
        <tr>
            <td class="parable-name">Building a Tower and King Going to War</td>
            <td>Emphasizes counting the cost of discipleship before committing</td>
            <td>Luke 14:28-33</td>
        </tr>
        <tr>
            <td class="parable-name">The Unprofitable Servants</td>
            <td>Teaches humility in service, showing we only do our duty before God</td>
            <td>Luke 17:7-10</td>
        </tr>
        <tr>
            <td class="parable-name">The Unjust Judge</td>
            <td>Encourages persistent prayer and faith until Jesus returns</td>
            <td>Luke 18:1-8</td>
        </tr>
        <tr>
            <td class="parable-name">Blind Leading the Blind</td>
            <td>Warns against following spiritually blind teachers</td>
            <td>Matthew 15:14, Luke 6:39</td>
        </tr>
        <tr>
            <td class="parable-name">The Faithful and Wise Servant</td>
            <td>Contrasts faithful and unfaithful stewardship while waiting for the master's return</td>
            <td>Matthew 24:45-51, Luke 12:42-48</td>
        </tr>
        <tr>
            <td class="parable-name">The Watchful Servants</td>
            <td>Emphasizes staying alert and ready for Christ's return</td>
            <td>Mark 13:34-37, Luke 12:35-40</td>
        </tr>
        <tr>
            <td class="parable-name">Children in the Marketplace</td>
            <td>Illustrates the inconsistent criticism Jesus and John the Baptist received</td>
            <td>Matthew 11:16-19, Luke 7:31-35</td>
        </tr>
        <tr>
            <td class="parable-name">The Speck and the Log</td>
            <td>Warns against hypocritical judgment of others</td>
            <td>Matthew 7:3-5, Luke 6:41-42</td>
        </tr>
        <tr>
            <td class="parable-name">The Fish Net</td>
            <td>Describes the final separation of the righteous and wicked</td>
            <td>Matthew 13:47-50</td>
        </tr>
        <tr>
            <td class="parable-name">The Householder</td>
            <td>Compares a teacher of scripture to a homeowner bringing out treasures old and new</td>
            <td>Matthew 13:52</td>
        </tr>
        <tr>
            <td class="parable-name">The Dishonest Manager</td>
            <td>Teaches shrewd use of worldly resources for eternal purposes</td>
            <td>Luke 16:1-9</td>
        </tr>
        <tr>
            <td class="parable-name">The Good Shepherd</td>
            <td>Depicts Jesus as the shepherd who knows, protects, and lays down his life for his sheep</td>
            <td>John 10:1-18</td>
        </tr>
        <tr>
            <td class="parable-name">The Vine and the Branches</td>
            <td>Illustrates the necessity of remaining connected to Jesus to bear spiritual fruit</td>
            <td>John 15:1-8</td>
        </tr>
        <tr>
            <td class="parable-name">The Master and Servant</td>
            <td>Shows the proper relationship between God and his servants</td>
            <td>Luke 17:7-10</td>
        </tr>
    </table>



<!-- This is the script for the Image and Text Dialog Links -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const multiLinkContainers = document.querySelectorAll('.multi-link-container');
    const linkedTexts = document.querySelectorAll('.linked-text');
    const linkDialogs = document.querySelectorAll('.link-dialog');

    const imageDialogs = document.querySelectorAll('.image-dialog');
    const linkedTextsImg = document.querySelectorAll('.linked-text-img');

    let currentlyOpenDialog = null; // This will track ANY open dialog (image or text)
    let currentlyOpenTextLink = null; // Track the clicked text link

    // --- Text Dialogs ---
    linkedTexts.forEach((linkedTextElement) => {
      const correspondingDialog = linkedTextElement.nextElementSibling;
      if (correspondingDialog && correspondingDialog.classList.contains('link-dialog')) {
        linkedTextElement.addEventListener('click', (event) => {
          event.stopPropagation();
          if (currentlyOpenDialog === correspondingDialog) {
            // Close if re-clicked
            closeAnyOpenDialogs();
          } else {
            closeAnyOpenDialogs();
            correspondingDialog.style.display = 'block';
            currentlyOpenDialog = correspondingDialog;
            currentlyOpenTextLink = linkedTextElement;
          }
        });
      }
    });

    // --- Image Dialogs ---
    linkedTextsImg.forEach((linkedText, index) => {
      const imageDialog = imageDialogs[index];
      if (linkedText && imageDialog) {
        linkedText.addEventListener('click', (event) => {
          event.stopPropagation();
          closeAnyOpenDialogs();
          imageDialog.style.display = 'block';
          imageDialog.classList.add('visible'); // Assuming you have CSS for .visible
          currentlyOpenDialog = imageDialog;
        });
      }
    });

    // --- Close Any Open Dialogs ---
    function closeAnyOpenDialogs() {
      if (currentlyOpenDialog) {
        currentlyOpenDialog.style.display = 'none';
        currentlyOpenDialog.classList.remove('visible'); //If you are using class visible
        currentlyOpenDialog = null;
        currentlyOpenTextLink = null;
      }
    }

    // --- Global Click Handler ---
    document.addEventListener('click', (event) => {
      if (currentlyOpenDialog &&
          !currentlyOpenDialog.contains(event.target) &&
          event.target !== currentlyOpenTextLink) { // Prevent closing on the text link
        closeAnyOpenDialogs();
      }
    });

    // --- Escape Key Handler ---
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape' && currentlyOpenDialog) {
        closeAnyOpenDialogs();
      }
    });

    // --- Image Dialog Click Handler ---
    imageDialogs.forEach(dialog => {
      dialog.addEventListener('click', (event) => {
        event.stopPropagation(); // Prevent conflict with the document click handler
        closeAnyOpenDialogs(); // Close on click inside
      });
    });
  });
</script>
<!-- This is the script for the Image and Text Dialog Links -->