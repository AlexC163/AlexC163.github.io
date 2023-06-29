<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" href="logo.png">
  <title>Alex Cantor - Fullstack • Game Developer</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>

  <div id="main-container">
    <div id="main">
      <h1 id="top-line">Hello, I'm <i>Alex Cantor</i>.</h1>
      <h1 id="bottom-line">I'm a fullstack / game developer.</h1>
      <button id="view-my-work" onclick="scrollToDiv('.main-content')">
        View my work
        <span class="arrow"></span>
      </button>
      <script>
        function scrollToDiv(location) {

          const targetDiv = document.querySelector(location);
          const targetOffsetTop = targetDiv.offsetTop - 30;
          console.log(targetDiv)

          window.scrollTo({
            top: targetOffsetTop,
            behavior: 'smooth'
          });
        }
      </script>
    </div>
  </div>
  <div class="main-content">
    <div id="projects-container">
      <div id="main">
        <h2 id="projects-header">Projects</h2>
        <div id="projects">

          <div class="project">
            <h3>chatE</h3>
            <h4>Jan '21 - May '21</h4>
            <hr>
            <h5>An educational chatting platform.</h5>
          </div>



          <div class="project">
            <h3>ZAP</h3>
            <h4>June '21 - Aug '21</h4>
            <hr>
            <h5>A custom programming language.</h5>
          </div>

          <div class="project">
            <h3>SynagogueCentral</h3>
            <h4>Feb '23 - Present</h4>
            <hr>
            <h5>A tool for daily Synagogue operations.</h5>
          </div>

          <div class="project">
            <h3>Bracket Generator</h3>
            <h4>Feb '22 - Mar '23</h4>
            <hr>
            <h5>Auto-generates your tornament bracket.</h5>
          </div>

          <div class="project">
            <h3>Kajam Kascape</h3>
            <h4>Feb '21 - Feb '21</h4>
            <hr>
            <h5>REPL.IT Game Jam Submission.</h5>
          </div>

          <div class="project">
            <h3>Survival Game</h3>
            <h4>Feb '23 - Present</h4>
            <hr>
            <h5>Developed as a final project for CodeNinjas.</h5>
          </div>
        </div>

        <!-- <div class="project">
          <h3>chatE</h3>
          <h4>Jan '21 - May '21</h4>
          <p>Throughout my time working on chatE, I was able to build and host the education chatting website in HTML,
            CSS, JavaScript, jQuery, PHP, and SQL. As I built out this application, I learned how to collaborate as a
            team by using everyone’s strengths to accomplish the best project possible. On top of the knowledge I
            gained, I received a Technical Award from ITEC (Iowa Technology & Education Connection).</p>
        </div> -->
      </div>
    </div>
    <div id="experience-container">
      <div id="main">
        <h2 id="experience-header">Experience</h2>
        <div id="experiences">

          <div class="experience">
            <h3>Code Ninjas</h3>
            <h4>June '17 - Sept '22</h4>
            <hr>
            <h5>Frontend and game dev learning center</h5>
          </div>

          <div class="experience">
            <h3>DMACC</h3>
            <h4>Mar '22 - Present</h4>
            <hr>
            <h5>Community college</h5>
          </div>

          <div class="experience">
            <h3>GenCyber</h3>
            <h4>June '22 • June '23</h4>
            <hr>
            <h5>Cybersecurity camp hosted by the NSA</h5>
          </div>

          <div class="experience">
            <h3>ISU Class Testing</h3>
            <h4>Sept '22 - Dec '22</h4>
            <hr>
            <h5>A class tested for a professor at Iowa State</h5>
          </div>

          <div class="experience">
            <h3>ProgrammingExpert</h3>
            <h4>Sept '20 - Dec '20</h4>
            <hr>
            <h5>A class tested for a professor at Iowa State</h5>
          </div>

          <div class="experience">
            <h3>FrontendExpert</h3>
            <h4>Sept '21 - Dec '21</h4>
            <hr>
            <h5>A class tested for a professor at Iowa State</h5>
          </div>

          <div class="experience">
            <h3>CodeWithMosh</h3>
            <h4>Sept '21 - Dec '21</h4>
            <hr>
            <h5>A class tested for a professor at Iowa State</h5>
          </div>

          <div class="experience">
            <h3>Udemy - Java</h3>
            <h4>Sept '21 - Dec '21</h4>
            <hr>
            <h5>A class tested for a professor at Iowa State</h5>
          </div>

        </div>
      </div>
    </div>

    <div id="languages-container">
      <div id="main">
        <h3 id="languages-header">Languages</h3>
        <div id="languages">

          <div class="language">
            <h3>HTML</h3>
            <img class="language-icon icon" src="language-icons/html.png">
          </div>

          <div class="language">
            <h3>CSS</h3>
            <img class="language-icon icon" src="language-icons/css.png">
          </div>

          <div class="language">
            <h3>JS</h3>
            <img class="language-icon icon" src="language-icons/js.png">
          </div>

          <div class="language">
            <h3>Python</h3>
            <img class="language-icon icon" src="language-icons/python.png">
          </div>

          <div class="language">
            <h3>Java</h3>
            <img class="language-icon icon" src="language-icons/java.png">
          </div>

          <div class="language">
            <h3>PHP</h3>
            <img class="language-icon icon" src="language-icons/php.png">
          </div>

          <div class="language">
            <h3>SQL</h3>
            <img class="language-icon icon" src="language-icons/sql.png">
          </div>

          <div class="language">
            <h3>Lua</h3>
            <img class="language-icon icon" src="language-icons/lua.png">
          </div>

          <div class="language">
            <h3>C#</h3>
            <img class="language-icon icon" src="language-icons/c-sharp.png">
          </div>

          <div class="language">
            <h3>C</h3>
            <img class="language-icon icon" src="language-icons/c.png">
          </div>
        </div>
      </div>
    </div>

    <div id="frameworks-container">
      <div id="main">
        <h2 id="frameworks-header">Frameworks</h2>
        <div id="frameworks">

          <div class="framework">
            <h3>React</h3>
          </div>

          <div class="framework">
            <h3>JSON</h3>
          </div>

          <div class="framework">
            <h3>Bootstrap</h3>
          </div>

        </div>
      </div>
    </div>

    <div id="attributes-container">
      <div id="main">
        <h2 id="attributes-header">Attributes</h2>
        <div id="attributes">

          <div class="attribute">
            <h3>Computer Proficiency</h3>
          </div>

          <div class="attribute">
            <h3>Problem-Solving Abilities</h3>
          </div>

          <div class="attribute">
            <h3>Adaptability</h3>
          </div>

          <div class="attribute">
            <h3>Adaptability</h3>
          </div>

          <div class="attribute">
            <h3>Decision Making</h3>
          </div>

          <div class="attribute">
            <h3>Time-Management</h3>
          </div>

          <div class="attribute">
            <h3>Work Ethic</h3>
          </div>

          <div class="attribute">
            <h3>Critical Thinking</h3>
          </div>

          <div class="attribute">
            <h3>Punctual</h3>
          </div>

          <div class="attribute">
            <h3>Confident</h3>
          </div>

          <div class="attribute">
            <h3>Communication Skills</h3>
          </div>

          <div class="attribute">
            <h3>Prioritization</h3>
          </div>

          <div class="attribute">
            <h3>Love of learning</h3>
          </div>

          <div class="attribute">
            <h3>Teamwork abilities</h3>
          </div>

        </div>
      </div>
    </div>

    <div id="technical-skills-container">
      <div id="main">
        <h2 id="technical-skills-header">Technical Skills</h2>
        <div id="languages">

          <div class="technical-skill">
            <h3>Mathematics</h3>
          </div>

          <div class="technical-skill">
            <h3>Typing Skills</h3>
          </div>

          <div class="technical-skill">
            <h3>Linux Commands</h3>
          </div>

          <div class="technical-skill">
            <h3>3D Printing</h3>
          </div>

          <div class="technical-skill">
            <h3>PHPMyAdmin</h3>
          </div>

          <div class="technical-skill">
            <h3>MySQL</h3>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <p>Copyright © 2023 Alex Cantor.</p>
  </div>
</body>

</html>
