<?php
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
  $gospel = ['mark'=>'Mark','luke'=>'Luke','john'=>'John','matthew'=>'Matthew'];
  //$gospelLinkPrefix = $gLP;
  $gLP ='https://openbible.com/ylt/';
  $gospelLinks = ['matthew/13.htm','mark/4.htm','luke/8.htm'];
  $passage = ['13:1-23,','4:1-20,','8:4-15'];

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
              <div class="gospel"><?= $gospel['matthew']?> <a href="<?= $glp.$gospelLinks[0]?>" target="_blank"><?= $passage[0]?></a></div>
              <div class="gospel"><?= $gospel['mark']?> <a href="<?= $glp.$gospelLinks[1]?>" target="_blank"><?= $passage[1]?></a></div>
              <div class="gospel"><?= $gospel['luke']?> <a href="<?= $glp.$gospelLinks[2]?>" target="_blank"><?= $passage[2]?></a></div>
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