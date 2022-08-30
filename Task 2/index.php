<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HEYA</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ae55e380.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav
      class="border border-success border-right-0 border-left-0 navbar navbar-expand-md bg-dark navbar-dark"
    >
      <div class="container">
        <a id="brandname" class="navbar-brand">HEYA</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" id="hover">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="hover">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html" id="hover">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row">
      <div class="col-md-7 text-center">
        <span style="color:white; font-size: 7rem;">HE</span
        ><span style="color:lightgreen; font-size: 7rem;">YA</span>
        <p
          class="p-0"
          style="font-style:italic; font-size: 3.5rem; color:whitesmoke"
        >
          For a better Lifestyle!
        </p>
      </div>
      <div class="col-md-3 mt-5">
        <div class="card border-0">
          <div class="card-body text-center lead">Sign Up Today</div>
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <input
                  type="username"
                  class="border-top-0 border-left-0 border-right-0 form-control"
                  id="user"
                  placeholder="Username"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="border-top-0 border-left-0 border-right-0 form-control"
                  id="email"
                  placeholder="Email"
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  class="border-top-0 border-left-0 border-right-0 form-control"
                  id="pwd"
                  placeholder="Password"
                />
              </div>
              <div class="form-group">
                <input
                  type="password"
                  class="border-top-0 border-left-0 border-right-0 form-control"
                  id="pwd2"
                  placeholder="Confirm Password"
                />
              </div>
              <div class="form-group">
                <input
                  type="number"
                  class="border-top-0 border-left-0 border-right-0 form-control"
                  id="pwd"
                  placeholder="Number"
                />
              </div>
              <div class="card-footer bg-warning">
                <input type="submit" name="submit" class="btn btn-block"/>
              </div>

            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br><br><br>  
    <footer class="mt-5">
      <div class="row">
        <div class="card border-bottom-0 col-md-6 border-right-0">
          <div class="card-body border-bottom">
            <h3>Social Media</h3>
            <h7
              >You can reach us through our social media pages on Facebook,
              Instagram and Twitter.</h7>
          </div>
        </div>
        <div class="col-md-6 card border-left-0">
            <div class="card-body">
                <ul class="list-inline equal">
                    <li class="list-inline-item equal"><a href="https://www.facebook.com/BelieveInHeya/" class="fab fa-facebook-f fa-2x bg-white border-0" style="color:gray"></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/Enactus_ASU" class="fab fa-twitter fa-2x bg-white border-0" style="color:gray"></a></li>
                    <li class="list-inline-item "><a href="https://www.instagram.com/_heyaaa/" class="fab fa-instagram fa-2x bg-white border-0" style="color:gray"></a></li>
                 </ul>
            </div>  
        </div>
      </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card border-bottom-0 text-center">
              <div class="card-body">
                <h1>CONTACT US</h1>
                <h9
                  >Leave a message and we will contact you as fast as
                  possible.</h9
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 card border-0">
          <div class="card-body">
            <form action="#">
              <div class="form-group">
                <input
                  type="username"
                  class="border-top-0 border-left-0 border-right-0 form-control"
                  id="name"
                  placeholder="Name"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="border-top-0 border-left-0 border-right-0 form-control"
                  id="email"
                  placeholder="Email"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="border-top-0 border-left-0 border-right-0 form-control"
                  id="txt"
                  placeholder="Subject"
                />
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 card border-0">
          <div class="card-body form-group">
            <label for="comment">Message</label>
            <textarea
              class="form-control border-top-0 border-right-0 border-left-0"
              rows="4"
              id="comment"
            ></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 card border-top-0">
          <div class="card-body text-center">
            <botton class="btn btn-success">Send Message</botton>
          </div>
        </div>
      </div>
      <div class="row bg-dark py-3">
        <div class="col-sm-4 col-xs-4">
            <a href="https://www.facebook.com/BelieveInHeya/" class="center fab fa-facebook-f fa-2x bg-dark border-0" style="color:gray"></a>
        </div>
        <div class="col-sm-4 col-xs-4">
            <a href="https://twitter.com/Enactus_ASU" class="center fab fa-twitter fa-2x bg-dark border-0" style="color:gray"></a>
        </div>
        <div class="col-sm-4 col-xs-4">
            <a href="https://www.instagram.com/_heyaaa/" class="center fab fa-instagram fa-2x bg-dark border-0" style="color:gray"></a>
        </div>
      </div>
    </footer>
  </body>
</html>

