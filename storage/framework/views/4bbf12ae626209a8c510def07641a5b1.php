<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ferdous Mikdad</title>
    <!-- favicon -->
    <link
      rel="icon"
      href="assets/icon/logoicon-color.svg"
      type="image/svg+xml"
    />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
    <!-- <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>"> -->
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <div class="header-logo">
          <img src="assets/icon/logoicon-color.svg" alt="logoicon-color" />
          <p><span class="header-logo-name">Silke</span> Pilon</p>
        </div>
        <div class="nav-icon-container">
          <ul class="nav-list">
            <!-- <li class="nav-list-item"><a href="#">Home</a></li> -->
            <li class="nav-list-item"><a href="#about">About</a></li>
             <li class="nav-list-item"><a href="#blog">Blogs</a></li>
            <li class="nav-list-item"><a href="#skills">Skills</a></li>
            <li class="nav-list-item"><a href="#projects">Project</a></li>
            <li class="nav-list-item"><a href="#contact">Contact</a></li>
          </ul>
          <div class="dark-light-icon">
            <img src="assets/icon/darktolighticon-green.svg" alt="" />
          </div>
        </div>
      </nav>
    </header>
    <main class="main">
      <section class="hero-section">
        <div class="hero-text">
          <p class="section-p">
            <span class="code-text">&lt;</span>Hello<span class="code-text"
              >&gt;</span
            >
          </p>
          <h1>I’m <span class="code-text">Silke Pilon</span></h1>
          <h2>
            I’m a <span class="code-text">&#123;</span>Code Newbie<span
              class="code-text"
              >&#125;
            </span>
          </h2>
          <p class="hero-p">
            Enthusiastic learner diving into
            <span class="code-text">&lt;</span>web<span class="code-text"
              >&gt;</span
            >
            and
            <span class="code-text">&lt;</span>software<span class="code-text"
              >&gt;</span
            >
            development, aiming for a career in technology and web development.
          </p>
          <div class="hero-social-icons">
            <img src="assets/icon/githubicon-grey.svg" alt="" />
            <img src="assets/icon/linkedinicon-grey.svg" alt="" />
            <img src="assets/icon/instagramicon-grey.svg" alt="" />
            <img src="assets/icon/twittericon-grey.svg" alt="" />
          </div>
          <div class="hero-btn">
            <div class="hero-btn1">
              <img src="assets/icon/contact-icon.png" alt="" />
              <button>Contact</button>
            </div>
            <div class="hero-btn2">
              <img src="assets/icon/downloadicon-grey.svg" alt="" />
              <button>Download CV</button>
            </div>
          </div>
        </div>
        <div class="hero-img">
          <img src="assets/images/heroimage-code.png" alt="" />
        </div>
      </section>
      <section id="about" class="about-section">
        <div class="about-text">
          <p class="section-p">
            <span class="code-text">&lt;</span>About<span class="code-text"
              >&gt;</span
            >
          </p>
          <div class="about-me-text">
            <p>
                <span style="color: white"><strong>mysql></strong> SELECT description FROM software_developers WHERE name = 'Silke Pilon';</span>
                <br>
                <br>
                I'm Silke Pilon, a student from the Netherlands with a passion for open source development. I've contributed
                to projects like MineFlayer and You.com using languages like Python and JavaScript, dabbling in AI and machine
                learning along the way.
                <br/>
                <br/>
                <span style="color: white">1 row in set (0.00 sec)</span>
                <br/>
                <br/>

                <span style="color: white"><strong>mysql> _</strong></span>
            </p>
            <h3>
              <span class="code-text2">Front End</span> Development |
              <span class="code-text2">Back End</span>
              Development | Problem Solving
            </h3>
          </div>
        </div>
        <div class="about-img">
          <img src="assets/images/hero.jpeg" alt="" />
        </div>
      </section>
      <section id="skills" class="skills-section">
        <div class="skills-text">
          <p class="section-p skills-text-p">
            <span class="code-text">&lt;</span>Skills<span class="code-text"
              >&gt;</span
            >
          </p>
          <h2>Skills and Proficiencies</h2>
          <p>Commanding Expertise in Digital Technologies and Tools</p>
        </div>

        <!-- skills-grid -->
        <div class="skills-grid">
          <!-- skills-bar-with-color -->
          <div class="skills-bar-icon">
            <!-- html-bar -->
            <div class="html">
              <div class="html-icon-p">
                <img src="assets/icon/html.svg" alt="html" />
                <p>start.html</p>
              </div>
              <div class="hmtl-bar">
                <div class="html-bar-color"></div>
              </div>
            </div>
            <!-- css-bar -->
            <div class="css">
              <div class="css-icon-p">
                <img src="assets/icon/html.svg" alt="css" />
                <p>styles.css</p>
              </div>
              <div class="css-bar">
                <div class="css-bar-color"></div>
              </div>
            </div>
            <!-- js-bar -->
            <div class="js">
              <div class="js-icon-p">
                <img src="assets/icon/html.svg" alt="JS" />
                <p>Script.js</p>
              </div>
              <div class="js-bar">
                <div class="js-bar-color"></div>
              </div>
            </div>
          </div>

          <!-- skills-bar-without-color -->
          <div class="skills-items grid-items">
            <img src="assets/icon/tailwind.svg" alt="tailwind" />
            <h2 class="skills-icon-heading">Tailwind</h2>
            <p>Learning utility-first CSS framework for efficient web design</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/react.svg" alt="React" />
            <h2 class="skills-icon-heading">React</h2>
            <p>Learning React for building dynamic and interactive UIs</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/node.svg" alt="Node.js" />
            <h2 class="skills-icon-heading">Node</h2>
            <p>
              Learning Node.js for server-side JavaScript application
              development
            </p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/mongodb.svg" alt="MongoDB" />
            <h2 class="skills-icon-heading">MongoDB</h2>
            <p>Learning utility-first CSS framework for efficient web design</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/github.svg" alt="GitHub" />
            <h2 class="skills-icon-heading">GitHub</h2>
            <p>Learning GitHub for version control and team collaboration</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/vscode.svg" alt="VSCode" />
            <h2 class="skills-icon-heading">VS Code</h2>
            <p>Proficient in using Visual Studio Code for coding tasks</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/figma.svg" alt="Figma" />
            <h2 class="skills-icon-heading">Figma</h2>
            <p>Advanced skills in UI/UX design and prototyping with Figma</p>
          </div>
          <div class="skills-items grid-items">
            <!-- <img src="assets/icon/adobexd.svg" alt="Adobe XD" /> -->
            <h2 class="skills-icon-heading">More</h2>
            <p>

            </p>
          </div>
      </section>

      <section id="projects" class="skills-section">
        <div class="skills-text">
          <p class="section-p skills-text-p">
            <span class="code-text">&lt;</span>Projects<span class="code-text"
              >&gt;</span
            >
          </p>
          <h2>My Projects</h2>
          <p>Slay</p>
        </div>

        <!-- skills-grid -->
        <div class="skills-grid">
          <!-- skills-bar-with-color -->
          <div class="skills-bar-icon">
            <!-- html-bar -->
            <div class="html">
              <div class="html-icon-p">
                <img src="assets/icon/html.svg" alt="html" />
                <p>Project 1</p>
              </div>
              <div class="hmtl-bar">
                <div class="html-bar-color"></div>
              </div>

            </div>
            <!-- css-bar -->
            <div class="css">
              <div class="css-icon-p">
                <img src="assets/icon/html.svg" alt="css" />
                <p>Project 2</p>
              </div>
              <div class="css-bar">
                <div class="css-bar-color"></div>
              </div>
            </div>
            <!-- js-bar -->
            <div class="js">
              <div class="js-icon-p">
                <img src="assets/icon/html.svg" alt="JS" />
                <p>Project 3</p>
              </div>
              <div class="js-bar">
                <div class="js-bar-color"></div>
              </div>
            </div>
          </div>

          <!-- skills-bar-without-color -->
          <div class="skills-items grid-items">
            <img src="assets/icon/tailwind.svg" alt="tailwind" />
            <h2 class="skills-icon-heading">Tailwind</h2>
            <p>Learning utility-first CSS framework for efficient web design</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/react.svg" alt="React" />
            <h2 class="skills-icon-heading">React</h2>
            <p>Learning React for building dynamic and interactive UIs</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/node.svg" alt="Node.js" />
            <h2 class="skills-icon-heading">Node</h2>
            <p>
              Learning Node.js for server-side JavaScript application
              development
            </p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/mongodb.svg" alt="MongoDB" />
            <h2 class="skills-icon-heading">MongoDB</h2>
            <p>Learning utility-first CSS framework for efficient web design</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/github.svg" alt="GitHub" />
            <h2 class="skills-icon-heading">GitHub</h2>
            <p>Learning GitHub for version control and team collaboration</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/vscode.svg" alt="VSCode" />
            <h2 class="skills-icon-heading">VS Code</h2>
            <p>Proficient in using Visual Studio Code for coding tasks</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/figma.svg" alt="Figma" />
            <h2 class="skills-icon-heading">Figma</h2>
            <p>Advanced skills in UI/UX design and prototyping with Figma</p>
          </div>
          <div class="skills-items grid-items">
            <!-- <img src="assets/icon/adobexd.svg" alt="Adobe XD" /> -->
            <h2 class="skills-icon-heading">More</h2>
            <p>

            </p>
          </div>
        </div>
      </section>

      <section id="blog" class="skills-section">
        <div class="skills-text">
          <p class="section-p skills-text-p">
            <span class="code-text">&lt;</span>Blog<span class="code-text"
              >&gt;</span
            >
          </p>
          <h2>Blog Posts</h2>
          <p>Commanding Expertise in Digital Technologies and Tools</p>
        </div>

        <!-- skills-grid -->
        <div class="skills-grid">
          <!-- skills-bar-with-color -->
          <div class="skills-bar-icon">
            <!-- html-bar -->
            <div class="html">
              <div class="html-icon-p">
                <img src="assets/icon/html.svg" alt="html" />
                <p>start.html</p>
              </div>
              <div class="hmtl-bar">
                <div class="html-bar-color"></div>
              </div>
            </div>
            <!-- css-bar -->
            <div class="css">
              <div class="css-icon-p">
                <img src="assets/icon/html.svg" alt="css" />
                <p>styles.css</p>
              </div>
              <div class="css-bar">
                <div class="css-bar-color"></div>
              </div>
            </div>
            <!-- js-bar -->
            <div class="js">
              <div class="js-icon-p">
                <img src="assets/icon/html.svg" alt="JS" />
                <p>Script.js</p>
              </div>
              <div class="js-bar">
                <div class="js-bar-color"></div>
              </div>
            </div>
          </div>

          <!-- skills-bar-without-color -->
          <div class="skills-items grid-items">
            <img src="assets/icon/tailwind.svg" alt="tailwind" />
            <h2 class="skills-icon-heading">Tailwind</h2>
            <p>Learning utility-first CSS framework for efficient web design</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/react.svg" alt="React" />
            <h2 class="skills-icon-heading">React</h2>
            <p>Learning React for building dynamic and interactive UIs</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/node.svg" alt="Node.js" />
            <h2 class="skills-icon-heading">Node</h2>
            <p>
              Learning Node.js for server-side JavaScript application
              development
            </p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/mongodb.svg" alt="MongoDB" />
            <h2 class="skills-icon-heading">MongoDB</h2>
            <p>Learning utility-first CSS framework for efficient web design</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/github.svg" alt="GitHub" />
            <h2 class="skills-icon-heading">GitHub</h2>
            <p>Learning GitHub for version control and team collaboration</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/vscode.svg" alt="VSCode" />
            <h2 class="skills-icon-heading">VS Code</h2>
            <p>Proficient in using Visual Studio Code for coding tasks</p>
          </div>
          <div class="skills-items grid-items">
            <img src="assets/icon/figma.svg" alt="Figma" />
            <h2 class="skills-icon-heading">Figma</h2>
            <p>Advanced skills in UI/UX design and prototyping with Figma</p>
          </div>
          <div class="skills-items grid-items">
            <!-- <img src="assets/icon/adobexd.svg" alt="Adobe XD" /> -->
            <h2 class="skills-icon-heading">More</h2>
            <p>

            </p>
          </div>
      </section>

      <!-- form-section -->
      <section id="contact" class="form-section">
        <div class="form-text-additional">
          <p class="section-p">
            <span class="code-text">&lt;</span>Contact<span class="code-text"
              >&gt;</span
            >
          </p>
          <h2>
            Let’s Talk <br />
            if you want know more about
            <span class="code-text">me</span>
          </h2>
          <div class="contact-mail-call">
            <div class="contact-mail">
              <img src="assets/icon/contact-mail-icon-green.svg" alt="" />
              <p>devsilkepilon@gmail.com</p>
            </div>
            <div class="contact-call">
              <img src="assets/icon/contact-call-icon-green.svg" alt="" />
              <a href="tel:+31 6 30455037">+31 6 30455037</a>
            </div>
            <div class="contact-address">
              <img src="assets/icon/address-icon-green.svg" alt="" />
              <p>The Netherlands</p>
            </div>
            <div class="hero-social-icons">

              <a href=""><img src="assets/icon/githubicon-grey.svg" alt="" /></a>
              <a href=""><img src="assets/icon/linkedinicon-grey.svg" alt="" /></a>
              <a href=""><img src="assets/icon/instagramicon-grey.svg" alt="" /></a>
              <a href=""><img src="assets/icon/twittericon-grey.svg" alt="" /></a>
            </div>
          </div>
        </div>
        <div class="form-box">
          <form action="#">
            <div class="form-row">
              <div class="form-row-name">
                <label for="form-name">Full Name*</label>
                <input id="form-name" type="text" placeholder=" ">
              </div>
              <div class="form-row-email">
                <label for="form-email">Email Address*</label>
                <input id="form-email" type="email" placeholder="yourmail@example.com">
              </div>
            </div>
            <div class="form-row">
              <div class="form-row-call">
                <label for="form-call">Phone Number (optional)</label>
                <input id="form-call" type="text" placeholder=" ">
              </div>
              <!-- <div class="form-row-subject">
                <label for="form-subject">Subject</label>
                <input id="form-subject" type="email" placeholder=" ">
              </div> -->
            </div>
            <div class="form-row">
              <div class="form-row-message">
                <label for="form-message">Message*</label>
                <textarea
                  id="form-message"
                  rows="5"
                  placeholder="Hey Silke, I would like to know more about you..."

                ></textarea>
              </div>
            </div form-btn>
            <button id="submit-btn" type="submit">Register</button>
            <button id="reset-btn" type="reset">Reset</button>
          </form>
        </div>
      </section>
      <!-- <a href="#" class="back-to-top">
          <img class="back-to-top-btn" src="assets/icon/arrowhead-up.svg" alt="">
      </a> -->
    </main>
    <footer class="footer">
      <div class="footer-logo">
        <p><a href="https://www.facebook.com/ferdousmikdad/" target="_blank">Designed by Silke Pilon</a></p>
        <!-- <img src="assets/icon/logo-wtih-icon.svg" alt="ferdousmikdad" /> -->
      </div>
      <div class="footer-github">
        <p><a href="https://github.com/SilkePilon" target="_blank">github</a></p>
        <img src="assets/icon/githubicon-grey.svg" alt="" />
      </div>
    </footer>
  </body>
</html>
<?php /**PATH C:\laragon\www\PortFolio\resources\views/welcome.blade.php ENDPATH**/ ?>