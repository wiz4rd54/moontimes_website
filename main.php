<!DOCTYPE html>
<html>
    <head>
        <title> Moonlight Event Planners </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mainstyle.css" type="text/css">
        <script src="https://kit.fontawesome.com/2fef570697.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="docSlider.css">
    </head>
    <body>
      <div class="container docSlider">
        <section id="home" class="section inner">
        <div class="nav">
          <ul>
            <li><a href="#home"> Home </a></li>
            <li><a href="#about"> About </a></li>
            <li><a href="#review"> Reviews </a></li>
            <li><a href="#contact"> Contact </a></li>
            <li><a href="login.php"> Login </a></li>
          </ul>
        </div>
          <div class="image1"> <img src="images/logo4.svg"> </div>
          <div class="para1"> 
            <h1> Managing Events Is Easier Now </h1> 
            <p> Moontimes has incredible features that makes organizing and managing events easier. </p>
            <p id="wheel"> Scroll <a href="#about"><i class="fas fa-long-arrow-alt-right"></i></a></p>
          </div>
        </section>
        <section id="about" class="section inner">
          <div class="image2">
            <img src="images/img1.svg">
          </div>
          <div class="para2">
            <h1> About Moontimes </h1> 
            <p> Moontimes is a event management application. You can organize and manage youe events.
              Managing events with Moontimes gets easy as you get tonnes of features. Some of are featues includes
              <ul>
                <li> Minimal Design </li>
                <li> Create new events </li>
                <li> Update status of event </li>
                <li> Delete outdated events </li>
              </ul>
            </p>
          </div>
        </section>
        <section class="section inner">
          <div class="container">
            <h1> Customer Reviews </h1>
          <div class="card">
            <div class="box">
              <div class="content">
                <h2>R1</h2>
                <h3>King Arthur</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="box">
              <div class="content">
                <h2>R2</h2>
                <h3>James Bond</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="box">
              <div class="content">
                <h2>R3</h2>
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              </div>
            </div>
          </div>
          </div>
        </section>

        <section class="section innner">
          <div class="heading">
            <h1> Send a message!</h1>
          </div>
          <div class="form">
            <form method="POST" >
              <input class="input" type="email" placeholder="e-mail" name="email">
              <input class="input" type="text" placeholder="Name" name="name">
              <textarea class="textarea" placeholder="Your message here......" name="message" cols="50" rows="5"></textarea>
              <input class="btn" type="submit" value="Send">
            </form>
          </div>
          <div class="footer">
            <div class="social">
              <span class="icon"><i class="fab fa-facebook-f"></i></span>
              <span class="icon"><i class="fab fa-google"></i></span>
              <span class="icon"><i class="fab fa-instagram-square"></i></span>
            </div>
            <div class="area1 area">
              <span class="listhead">Product</span>
              <ul>
                <li>Premium</li>
                <li>Status</li>
              </ul>
            </div>
            <div class="area2 area">
            <span class="listhead">Company</span>
              <ul>
                <li>About</li>
                <li>Jobs</li>
                <li>Branding</li>
                <li>Newsroom</li>
              </ul>
            </div>
            <div class="area3 area">
            <span class="listhead">Resources</span>
              <ul>
                <li>College</li>
                <li>Support</li>
                <li>Safety</li>
                <li>Blog</li>
                <li>Feedback</li>
                <li>Developers</li>
              </ul>
            </div>
            <div class="area4 area">
            <span class="listhead">Policies</span>
              <ul>
                <li>Terms</li>
                <li>Privacy</li>
                <li>Guidelines</li>
                <li>Licenses</li>
                <li>Moderation</li>
              </ul>
            </div>
            <div class="area5">
              <img src="images/logoLight.svg">
              <a href="login.php"> Login </a>
              <a href="signup.php"> Signup </a>
              <span> Made By Bhagirath </span>
            </div>
          </div>
        </section>
      </div>
      <script src="docSlider.min.js"></script>
      <script>docSlider.init({horizontal: true});</script>
    </body>
</html>