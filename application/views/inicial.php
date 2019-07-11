<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include('parts/header.php'); ?>
  <!-- End Navbar -->
  <div class="page-header section-dark" style="background-image: url('../../assets/img/antoine-barres.jpg')">
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h1 class="presentation-title">sLocator</h1>
          <div class="fog-low">
            <img src="../../assets/img/fog-low.png" alt="">
          </div>
          <div class="fog-low right">
            <img src="../../assets/img/fog-low.png" alt="">
          </div>
        </div>
        <h2 class="presentation-subtitle text-center">O mais prático localizador de CEPs e ruas!</h2>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url('../../assets/img/clouds.png'); "></div>
  </div>
  <div class="main">
    <div class="section section-buttons">
      <div class="container">
        <div class="title">
          <h2>Basic Elements</h2>
        </div>
        <div id="buttons">
          <div class="title">
            <h3>Buttons
              <br/>
              <small>Pick your style</small>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-8">
              <button type="button" class="btn btn-info">Default</button>
              <button type="button" class="btn btn-info btn-round">Round</button>
              <button type="button" class="btn btn-info btn-round"><i class="fa fa-heart"></i> With Icon</button>
              <button type="button" class="btn btn-info btn-just-icon"><i class="fa fa-heart"></i></button>
              <button type="button" class="btn btn-info btn-link">Simple</button>
            </div>
          </div>
          <div class="title">
            <h3>
              <small>Pick your size</small>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-8">
              <button type="button" class="btn btn-outline-danger btn-sm">Small</button>
              <button type="button" class="btn btn-outline-danger">Regular</button>
              <button type="button" class="btn btn-outline-danger btn-lg">Large</button>
            </div>
          </div>
          <div class="title">
            <h3>
              <small>Pick your color</small>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-8">
              <button type="button" class="btn btn-outline-default btn-round">Default</button>
              <button type="button" class="btn btn-outline-primary btn-round">Primary</button>
              <button type="button" class="btn btn-outline-info btn-round">Info</button>
              <button type="button" class="btn btn-outline-success btn-round">Success</button>
              <button type="button" class="btn btn-outline-warning btn-round">Warning</button>
              <button type="button" class="btn btn-outline-danger btn-round">Danger</button>
              <button type="button" class="btn btn-outline-neutral btn-round">Neutral</button>
            </div>
          </div>
          <br/>
          <div class="row">
            <div class="col-md-8">
              <button type="button" class="btn btn-default btn-round">Default</button>
              <button type="button" class="btn btn-primary btn-round">Primary</button>
              <button type="button" class="btn btn-info btn-round">Info</button>
              <button type="button" class="btn btn-success btn-round">Success</button>
              <button type="button" class="btn btn-warning btn-round">Warning</button>
              <button type="button" class="btn btn-danger btn-round">Danger</button>
              <button type="button" class="btn btn-neutral btn-round">Neutral</button>
            </div>
          </div>
        </div>
        <div class="title">
          <h3>Links</h3>
        </div>
        <div class="row">
          <div class="col-md-8">
            <a href="#0" class="btn btn-link btn-default">Default</a>
            <a href="#0" class="btn btn-link btn-primary">Primary</a>
            <a href="#0" class="btn btn-link btn-success">Success</a>
            <a href="#0" class="btn btn-link btn-info">Info</a>
            <a href="#0" class="btn btn-link btn-warning">Warning</a>
            <a href="#0" class="btn btn-link btn-danger">Danger</a>
            <a href="#0" class="btn btn-link btn-neutral">Neutral</a>
          </div>
        </div>
        <div class="title">
          <h3>Inputs</h3>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Default">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group has-success">
              <input type="text" class="form-control form-control-success" id="inputSuccess1" value="Success">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group has-danger">
              <input type="text" class="form-control form-control-danger" id="inputDanger1" value="Error">
              <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Username">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-group" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>
        </div>
        <br/>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="title">
              <h3>Checkboxes</h3>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value=""> Unchecked
                <span class="form-check-sign"></span>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="" checked> Checked
                <span class="form-check-sign"></span>
              </label>
            </div>
            <div class="form-check disabled">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="" disabled> Disabled unchecked
                <span class="form-check-sign"></span>
              </label>
            </div>
            <div class="form-check disabled">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="" disabled checked> Disabled checked
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="title">
              <h3>Radio Buttons</h3>
            </div>
            <div class="form-check-radio">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> Radio is off
                <span class="form-check-sign"></span>
              </label>
            </div>
            <div class="form-check-radio">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked> Radio is on
                <span class="form-check-sign"></span>
              </label>
            </div>
            <div class="form-check-radio disabled">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> Disabled radio is off
                <span class="form-check-sign"></span>
              </label>
            </div>
            <div class="form-check-radio disabled">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadioz" id="exampleRadios4" value="option4" checked disabled> Disabled radio is on
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="title">
              <h3>Toggle Buttons</h3>
            </div>
            <div id="switches">
              <label>
                <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary">
                <span class="toggle"></span>
              </label>
              <br/>
              <label>
                <input type="checkbox" data-toggle="switch" data-off-color="primary" data-on-color="primary">
                <span class="toggle"></span>
              </label>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="title">
              <h3>Sliders</h3>
            </div>
            <div id="sliderRegular" class="slider"></div>
            <br>
            <div id="sliderDouble" class="slider slider-primary"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-navbars">
      <div class="container" id="menu-dropdown">
        <div class="title">
          <h3>Menu</h3>
        </div>
        <br/>
        <div class="row">
          <div class="col-md-6">
            <nav class="navbar navbar-expand-lg bg-primary">
              <a class="navbar-brand" href="#">Menu</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#pk">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#pk">Link</a>
                  </li>
                  <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" href="#pk" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu dropdown-info" aria-labelledby="dropdownMenuButton">
                      <li class="dropdown-header">Dropdown header</li>
                      <a class="dropdown-item" href="#pk">Action</a>
                      <a class="dropdown-item" href="#pk">Another action</a>
                      <a class="dropdown-item" href="#pk">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#pk">Separated link</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#pk">Another separated link</a>
                    </ul>
                  </div>
                </ul>
              </div>
            </nav>
          </div>
          <div class="col-md-6">
            <nav class="navbar navbar-expand-lg bg-danger">
              <a class="navbar-brand" href="#">Icons</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-menu-icon" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-menu-icon">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#pk"><i class="nc-icon nc-email-85" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#pk"><i class="nc-icon nc-single-02" aria-hidden="true"></i></a>
                  </li>
                  <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#pk" role="button" aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-settings-gear-65" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                      <li class="dropdown-header" href="#pk">Dropdown header</li>
                      <a class="dropdown-item" href="#pk">Another action</a>
                      <a class="dropdown-item" href="#pk">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#pk">Separated link</a>
                    </ul>
                  </div>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-navigation">
      <div class="container tim-container">
        <div class="title">
          <h3>Navigation Areas</h3>
        </div>
      </div>
      <div id="navbar">
        <div class="navigation-example" style="background-image: url('../../assets/img/ilya-yakover.jpg');">
          <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container">
              <a class="navbar-brand" href="#">Primary Color</a>
              <button class="navbar-toggler navbar-toggler-right burger-menu" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-primary">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="nc-icon nc-compass-05" aria-hidden="true"></i>&nbsp;Discover</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="nc-icon nc-single-02" aria-hidden="true"></i>&nbsp;Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="nc-icon nc-settings-gear-65" aria-hidden="true"></i>&nbsp;Settings</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg bg-info">
            <div class="container">
              <a class="navbar-brand" href="#">Info Color</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-info">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Discover</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg bg-success">
            <div class="container">
              <a class="navbar-brand" href="#">Success Color</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-success" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
              </button>
              <div class="navbar-collapse collapse show" id="navbar-success" style="">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="nc-icon nc-compass-05" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="nc-icon nc-single-02" aria-hidden="true"></i> </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="nc-icon nc-settings-gear-65" aria-hidden="true"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg bg-warning">
            <div class="container">
              <a class="navbar-brand" href="#">Warning Color</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-warning" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-warning">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg bg-danger">
            <div class="container">
              <a class="navbar-brand" href="#">Danger Color</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-danger" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
              </button>
              <div class="navbar-collapse collapse show" id="navbar-danger" style="">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Share</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg navbar-transparent pt-0">
            <div class="container">
              <a class="navbar-brand" href="#">Transparent</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-transparent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-transparent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="title">
              <h3>Progress Bar</h3>
              <br>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <div class="progress">
              <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar progress-bar-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="title">
              <h3>Pagination</h3>
              <br>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <br>
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">3
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="title">
              <h3>Navigation Tabs</h3>
            </div>
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul id="tabs" class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
                  </li>
                </ul>
              </div>
            </div>
            <div id="my-tab-content" class="tab-content text-center">
              <div class="tab-pane active" id="home" role="tabpanel">
                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
              </div>
              <div class="tab-pane" id="profile" role="tabpanel">
                <p>Here is your profile.</p>
              </div>
              <div class="tab-pane" id="messages" role="tabpanel">
                <p>Here are your messages.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="title">
              <h3>Labels</h3>
            </div>
            <span class="label label-default">Default</span>
            <span class="label label-primary">Primary</span>
            <span class="label label-info">Info</span>
            <span class="label label-success">Success</span>
            <span class="label label-warning">Warning</span>
            <span class="label label-danger">Danger</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container tim-container">
      <div class="title">
        <h3>Notifications</h3>
      </div>
    </div>
    <div id="notifications">
      <div class="alert alert-info">
        <div class="container">
          <span>This is a plain notification! </span>
        </div>
      </div>
      <div class="alert alert-success">
        <div class="container">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="nc-icon nc-simple-remove"></i>
          </button>
          <span>This is a notification with close button. </span>
        </div>
      </div>
      <div class="alert alert-warning alert-with-icon" data-notify="container">
        <div class="container">
          <div class="alert-wrapper">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="nc-icon nc-simple-remove"></i>
            </button>
            <div class="message"><i class="nc-icon nc-bell-55"></i> This is a notification with close button and icon.</div>
          </div>
        </div>
      </div>
      <div class="alert alert-danger alert-with-icon" data-notify="container">
        <div class="container">
          <div class="alert-wrapper">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="nc-icon nc-simple-remove"></i>
            </button>
            <div class="message"><i class="nc-icon nc-bell-55"></i> This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</div>
          </div>
        </div>
      </div>
    </div>
    <!--  end notifications -->
    <div class="container tim-container">
      <div class="title">
        <h3>Typography</h3>
      </div>
      <div id="typography">
        <div class="row">
          <div class="typography-line">
            <h1>
              <span class="note">Header 1</span> Thinking in textures
            </h1>
          </div>
          <div class="typography-line">
            <h2>
              <span class="note">Header 2</span> Thinking in textures
            </h2>
          </div>
          <div class="typography-line">
            <h3>
              <span class="note">Header 3</span> Thinking in textures
            </h3>
          </div>
          <div class="typography-line">
            <h4>
              <span class="note">Header 4</span> Thinking in textures
            </h4>
          </div>
          <div class="typography-line">
            <h5>
              <span class="note">Header 5</span> Thinking in textures
            </h5>
          </div>
          <div class="typography-line">
            <h6>
              <span class="note">Header 6</span> Thinking in textures
            </h6>
          </div>
          <div class="typography-line">
            <p>
              <span class="note">Paragraph</span> Thinking in textures
            </p>
          </div>
          <div class="typography-line">
            <span class="note">Quote</span>
            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
              <br/>
              <footer class="blockquote-footer">Someone famous in
                <cite title="source Title">Source Title</cite>
              </footer>
            </blockquote>
          </div>
          <div class="typography-line">
            <span class="note">Muted text</span>
            <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
          </div>
          <div class="typography-line">
            <span class="note">Primary text</span>
            <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          </div>
          <div class="typography-line">
            <span class="note">Success text</span>
            <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
          </div>
          <div class="typography-line">
            <span class="note">Info text</span>
            <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </div>
          <div class="typography-line">
            <span class="note">Warning text</span>
            <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
          </div>
          <div class="typography-line">
            <span class="note">Danger text</span>
            <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
          </div>
          <div class="typography-line">
            <h2>
              <span class="note">Small tag</span>Header with small subtitle
              <br/>
              <small>".small" is a tag for the headers</small>
            </h2>
          </div>
        </div>
      </div>
      <br/>
      <div id="images">
        <div class="container">
          <div class="title">
            <h3>Images</h3>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <h4 class="images-title">Rounded Image</h4>
              <img src="../../assets/img/uriel-soberanes.jpg" class="img-rounded img-responsive" alt="Rounded Image">
              <div class="img-details">
                <div class="author">
                  <img src="../../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
                <p>Sonia Green </p>
              </div>
            </div>
            <div class="col-sm-3 col-md-2 mr-auto ml-auto">
              <h4 class="images-title">Circle Image</h4>
              <img src="../../assets/img/faces/kaci-baum-2.jpg" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
              <p class="text-center">Brigitte Bardot</p>
            </div>
            <div class="col-sm-3 col-md-2 mr-auto">
              <h4 class="images-title">Thumbnail</h4>
              <img src="../../assets/img/faces/erik-lucatero-2.jpg" class="img-thumbnail img-responsive" alt="Rounded Image">
              <p class="text-center">John Keynes</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section javascript-components">
      <div class="container">
        <div class="title">
          <h2>Javascript Components</h2>
        </div>
        <div class="row" id="modals">
          <div class="col-md-6">
            <div class="title">
              <h3>Modal</h3>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger btn-round" data-toggle="modal" data-target="#myModal">
              Launch demo modal
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <h5 class="modal-title text-center" id="exampleModalLabel">Modal title</h5>
                  </div>
                  <div class="modal-body"> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                  </div>
                  <div class="modal-footer">
                    <div class="left-side">
                      <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Never mind</button>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                      <button type="button" class="btn btn-danger btn-link">Delete</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="title">
              <h3>Popovers</h3>
            </div>
            <button type="button" class="btn btn-round btn-outline-danger" data-toggle="popover" data-placement="top" title="Popover on top" data-content="Here will be some very useful information about this popover.">On top</button>
            <button type="button" class="btn btn-round btn-outline-danger" data-toggle="popover" data-placement="bottom" title="Popover on bottom" data-content="Here will be some very useful information about this popover.">On bottom</button>
            <button type="button" class="btn btn-round btn-outline-danger" data-toggle="popover" data-placement="left" title="Popover on left" data-content="Here will be some very useful information about this popover.">On left</button>
            <button type="button" class="btn btn-round btn-outline-danger" data-toggle="popover" data-placement="right" title="Popover on right" data-content="Here will be some very useful information about this popover.">On right</button>
          </div>
          <br>
          <div class="col-md-6">
            <div class="title">
              <h3>Datepicker</h3>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="input-group date" id="datetimepicker">
                    <input type="text" class="form-control datetimepicker" placeholder="27/03/2019" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="title">
              <h3>Tooltips</h3>
            </div>
            <button type="button" class="btn btn-outline-danger btn-round" data-toggle="tooltip" data-placement="left" title="On left">On left</button>
            <button type="button" class="btn btn-outline-danger btn-round" data-toggle="tooltip" data-placement="right" title="On right">On right</button>
            <button type="button" class="btn btn-outline-danger btn-round" data-toggle="tooltip" data-placement="top" title="On top">On top</button>
            <button type="button" class="btn btn-outline-danger btn-round" data-toggle="tooltip" data-placement="bottom" title="On bottom">On bottom</button>
          </div>
        </div>
        <div class="title">
          <h3>Carousel</h3>
        </div>
      </div>
    </div>
    <div class="section pt-o" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card page-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="../../assets/img/soroush-karimi.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <p>Somewhere</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="../../assets/img/federico-beccari.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <p>Somewhere else</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="../../assets/img/joshua-stannard.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <p>Here it is</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-dark section-nucleo-icons">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <h2 class="title">Nucleo Icons</h2>
            <br/>
            <p class="description">
              Paper Kit comes with 100 custom icons made by our friends from NucleoApp. The official package contains over 2.100 thin icons which are looking great in combination with Paper Kit Make sure you check all of them and use those that you like the most.
            </p>
            <br/>
            <a href="nucleo-icons.html" class="btn btn-danger btn-round" target="_blank">View Demo Icons</a>
            <a href="https://nucleoapp.com/?ref=1712" class="btn btn-outline-danger btn-round" target="_blank">View All Icons</a>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="icons-container">
              <i class="nc-icon nc-time-alarm"></i>
              <i class="nc-icon nc-atom"></i>
              <i class="nc-icon nc-camera-compact"></i>
              <i class="nc-icon nc-watch-time"></i>
              <i class="nc-icon nc-key-25"></i>
              <i class="nc-icon nc-diamond"></i>
              <i class="nc-icon nc-user-run"></i>
              <i class="nc-icon nc-layout-11"></i>
              <i class="nc-icon nc-badge"></i>
              <i class="nc-icon nc-bulb-63"></i>
              <i class="nc-icon nc-favourite-28"></i>
              <i class="nc-icon nc-planet"></i>
              <i class="nc-icon nc-tie-bow"></i>
              <i class="nc-icon nc-zoom-split"></i>
              <i class="nc-icon nc-cloud-download-93"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Completed with examples</h2>
            <p class="description">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful kit.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-image section-login" style="background-image: url('../../assets/img/login-image.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mx-auto">
            <div class="card card-register">
              <h3 class="title mx-auto">Welcome</h3>
              <div class="social-line text-center">
                <a href="#pablo" class="btn btn-neutral btn-facebook btn-just-icon mt-0">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-neutral btn-google btn-just-icon mt-0">
                  <i class="fa fa-google-plus"></i>
                </a>
                <a href="#pablo" class="btn btn-neutral btn-twitter btn-just-icon mt-0">
                  <i class="fa fa-twitter"></i>
                </a>
              </div>
              <form class="register-form">
                <label>Email</label>
                <div class="input-group form-group-no-border">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="nc-icon nc-email-85"></i>
                    </span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <label>Password</label>
                <div class="input-group form-group-no-border">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="nc-icon nc-key-25"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <button class="btn btn-danger btn-block btn-round">Register</button>
              </form>
              <div class="forgot">
                <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
              </div>
            </div>
            <div class="col text-center">
              <a href="./examples/register-page.html" class="btn btn-outline-neutral btn-round btn-lg" target="_blank">View Register Page</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-dark">
      <div class="container">
        <div class="row example-page">
          <div class="col-md-6 text-center">
            <a href="examples/landing.html" target="_blank">
              <img src="../../assets/img/examples/landing-page.png" alt="Rounded Image" class="img-rounded img-responsive" style="width: 100%">
              <a href="./examples/landing-page.html" class="btn btn-outline-neutral btn-round" target="_blank">Landing Page</a>
            </a>
          </div>
          <div class="col-md-6 text-center">
            <a href="examples/profile.html" target="_blank">
              <img src="../../assets/img/examples/profile-page.png" alt="Rounded Image" class="img-rounded img-responsive" style="width: 100%">
              <a href="./examples/profile-page.html" class="btn btn-outline-neutral btn-round" target="_blank">Profile Page</a>
            </a>
          </div>
        </div>
      </div>
    </div>

<?php include('parts/footer.php'); ?>