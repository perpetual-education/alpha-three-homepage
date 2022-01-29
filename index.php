<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>AlphaNet v3.0</title>
  <meta name="description" content="The Alpha 3 Student Sites" />
  <meta property="og:image" content="images/default.png" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/sheriff.css" />
  <link rel="stylesheet" href="css/bdlowery.css" />
  <link rel="stylesheet" href="css/andrew.css" />
  <link rel="stylesheet" href="css/budi.css">
  <link rel="stylesheet" href="css/jose.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:ital,wght@1,900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="inner-column">
    <h1><code>alpha-three</code> student sites</h1>

    <section class="students">
      <div class="student sheriff">
        <h2 class="title">🤠 sheriffderek</h2>
        <p class="description">Someone's got to <em>design</em> this town.</p>
        <a class="link" href="sheriff" target="sheriff">Giddy Up</a>
      </div>

      <div class="student shayne">
        <h2>Shayne McGregor</h2>
        <p>I am a Ph.D. candidate in African American Studies as well as a web designer. I believe websites are the most powerful mediums of communication oout today, and we have a responsility to make them create them in ways that will leave an indelible positive impact on the world</p>
        <a href="shayne" target="shayne">Check out my work here</a>
      </div>

      <div class="student tara">
        <div class="student-info">
          <h2>TareUhhhhhh</h2>
          <p>
            An aspiring web developer and programming enthusiast. On this journey to a
            new career, I'm collecting experience and inspiration. Come join me and see what I've
            got so far!
          </p>
        </div>
        <a href="tara" target="tara">Check it out!</a>
      </div>

      <div class="student andrew">
        <a href="andrew" target="andrew">
          <h2>Andrew</h2>
          <p>Aspiring web developer who loves working with computers and technology. Let's see what we can do together.</p>
        </a>
      </div>

      <!-- <div class="student budi">
        <div class="copy-group">
          <h2>Hi, I'm Budi!</h2>
          <p>I'm a barista turned Perpetual Education-&nbsp;minted Web Developer. <span>Dive in!</span></p>
        </div>

        <div>
          <a href="budi/web-portal" target="budi/web-portal">Click here</a>
        </div>

      </div> -->

      <div class="student jose">
        <picture>
          <img src="images/next-rip.svg">
        </picture>
        <div class="text-content">
          <p>The <span>sketchiest</span>&nbsp;<span>dude</span><br>on&nbsp;the&nbsp;<span>web</span></p>
          <a href="jose" target="jose">E&nbsp;N&nbsp;T&nbsp;E&nbsp;R</a>
        </div>
      </div>

      <div class="student no-troll" id="joshua">
        <h2>Josh</h2>
        <p>Josh's Stuff</p>
        <a href="josh" target="josh">Click here</a>
      </div>

      <!-- <div class="student troll">
        <h2>Saul</h2>
        <p>Saul's Stuff</p>
        <a href="saul" target="saul">Click here</a>
      </div> -->

      <!-- <div class="student troll">
        <h2>Wytonya</h2>
        <p>Wytonya's Stuff</p>
        <a href="wytonya" target="wytonya">Click here</a>
      </div> -->

      <!-- <div class="student troll">
        <h2>Natasha</h2>
        <p>Natasha's Stuff</p>
        <a href="natmorrison" target="natasha">Click here</a>
      </div> -->

      <div class="student bdlowery">
        <h2>Brian</h2>
        <p>Check out my projects and case studies 👨‍💻️</p>
        <a href="bdlowery" target="bdlowery"><span>Read more</span></a>
      </div>

    </section>

    <footer class="site-footer">
      <?php
      $file = "views.txt";
      $counter = 1;
      if (file_exists($file)) {
        $contents = file_get_contents($file);
        $counter = $counter + $contents;
      }
      file_put_contents($file, $counter);
      ?>
      <p class="views"><span class="view-counter"><?= $counter ?></span></p>
      <p class="call-to-action">Do you like this stuff? Come see what we're doing at <a href='https://perpetual.education' target='pe'>Perpetual "Dot" Education</a>.</p>
    </footer>
  </div>

  <!-- secret magic -->
  <script src="https://codepen.io/perpetual-education/pen/357f355358762fc77e446ca7cea74ac2.js"></script>
</body>

</html>