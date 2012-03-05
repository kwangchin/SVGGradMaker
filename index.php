<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>SVG Gradient Maker</title>
    <meta name="description" content="SVG Gradient Maker creates CSS background-image for all browsers." />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jPicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jPicker-1.1.6.min.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
  </head>
  <body>
    <div class="panel">
      <h1>SVG Gradient Maker</h1>
      <p>SVG Gradient Maker creates CSS background-image for all browsers.</p>
    </div>
    <div class="content">
      <form method="POST">
<?php /*      <div class="panel">
        <h2>Presets</h2>
        <div class="preset preset1"></div>
        <div class="preset preset2"></div>
      </div> */ ?>
      <div class="panel">
        <h2>Directions</h2>
        <div class="direction direction1 selected">
          <img data-value="0" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><polygon stroke="#444" stroke-width="0.25" fill="#049cdb" points="2.5,4.75 0.25,2.5 1.5,2.5 1.5,0.25 3.5,0.25 3.5,2.5 4.75,2.5" /></svg>'); ?>" />
          <img data-value="1" style="display: none;" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><polygon stroke="#777" stroke-width="0.25" fill="#aaa" points="2.5,4.75 0.25,2.5 1.5,2.5 1.5,0.25 3.5,0.25 3.5,2.5 4.75,2.5" /></svg>'); ?>" />
        </div>
        <div class="direction direction2">
          <img data-value="0" style="display: none;" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><polygon transform="rotate(-45, 2.5, 2.5)" stroke="#444" stroke-width="0.25" fill="#049cdb" points="2.5,4.75 0.25,2.5 1.5,2.5 1.5,0.25 3.5,0.25 3.5,2.5 4.75,2.5" /></svg>'); ?>" />
          <img data-value="2" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><polygon transform="rotate(-45, 2.5, 2.5)" stroke="#777" stroke-width="0.25" fill="#aaa" points="2.5,4.75 0.25,2.5 1.5,2.5 1.5,0.25 3.5,0.25 3.5,2.5 4.75,2.5" /></svg>'); ?>" />
        </div>
        <div class="direction direction3">
          <img data-value="0" style="display: none;" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><polygon transform="rotate(-90, 2.5, 2.5)" stroke="#444" stroke-width="0.25" fill="#049cdb" points="2.5,4.75 0.25,2.5 1.5,2.5 1.5,0.25 3.5,0.25 3.5,2.5 4.75,2.5" /></svg>'); ?>" />
          <img data-value="3" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><polygon transform="rotate(-90, 2.5, 2.5)" stroke="#777" stroke-width="0.25" fill="#aaa" points="2.5,4.75 0.25,2.5 1.5,2.5 1.5,0.25 3.5,0.25 3.5,2.5 4.75,2.5" /></svg>'); ?>" />
        </div>
        <div class="direction direction4">
          <img data-value="0" style="display: none;" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><polygon transform="rotate(-135, 2.5, 2.5)" stroke="#444" stroke-width="0.25" fill="#049cdb" points="2.5,4.75 0.25,2.5 1.5,2.5 1.5,0.25 3.5,0.25 3.5,2.5 4.75,2.5" /></svg>'); ?>" />
          <img data-value="4" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><polygon transform="rotate(-135, 2.5, 2.5)" stroke="#777" stroke-width="0.25" fill="#aaa" points="2.5,4.75 0.25,2.5 1.5,2.5 1.5,0.25 3.5,0.25 3.5,2.5 4.75,2.5" /></svg>'); ?>" />
        </div>
        <div class="direction direction5">
          <img data-value="0" style="display: none;" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><circle stroke="#444" stroke-width="0.25" fill="#049cdb" cx="2.5" cy="2.5" r="2.25" /></svg>'); ?>" />
          <img data-value="5" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 5 5"><circle stroke="#777" stroke-width="0.25" fill="#aaa" cx="2.5" cy="2.5" r="2.25" /></svg>'); ?>" />
        </div>
        <input type="hidden" name="direction" id="direction" value="1" />
      </div>
      <div class="panel">
        <h2>Colours</h2>
        <div class="panel colour first">
          <h3>First Colour</h3>
          <label for="firstoffset">Offset:</label>
          <input type="text" name="firstoffset" id="firstoffset" value="0" />%
          <div class="clearfix"></div>
          <label for="firstcolour">Colour:</label>
          <input type="text" class="picker" name="firstcolour" id="firstcolour" value="049cdb" />
<?php /*          <div class="clearfix"></div>
          <label for="firstalpha">Alpha:</label>
          <input type="text" name="firstalpha" id="firstalpha" value="100" />% */ ?>
        </div>
        <div class="panel colour last">
          <h3>Last Colour</h3>
          <label for="lastoffset">Offset:</label>
          <input type="text" name="lastoffset" id="lastoffset" value="100" />%
          <div class="clearfix"></div>
          <label for="lastcolour">Colour:</label>
          <input type="text" class="picker" name="lastcolour" id="lastcolour" value="ffffff" />
<?php /*          <div class="clearfix"></div>
          <label for="lastalpha">Alpha:</label>
          <input type="text" name="lastalpha" id="lastalpha" value="100" />% */ ?>
        </div>
      </div>
      </form>
    </div>
    <div class="sidebar">
      <div class="panel">
        <h2>Preview</h2>
        <div class="preview">
          <img id="preview" src="data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1 1" preserveAspectRatio="none"><linearGradient id="grad" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="0%" y2="100%"><stop stop-color="#049cdb" offset="0"/><stop stop-color="#ffffff" offset="1" /></linearGradient><rect x="0" y="0" width="1" height="1" fill="url(#grad)" /></svg>'); ?>" />
        </div>
      </div>
      <div class="panel">
        <h2>CSS Export</h2>
        <div class="export">
          <input type="text" id="export" readonly="readonly" value="background-image: url('data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1 1" preserveAspectRatio="none"><linearGradient id="grad" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="0%" y2="100%"><stop stop-color="#049cdb" offset="0"/><stop stop-color="#ffffff" offset="1" /></linearGradient><rect x="0" y="0" width="1" height="1" fill="url(#grad)" /></svg>'); ?>)';" />
        </div>
        <p class="note"><span>Note:</span> Select the textbox, <span>Copy</span> and <span>Paste</span> into your CSS class.</p>
      </div>
    </div>
    <div class="panel">
      <h2>Changelog</h2>
      <h3>Version 1.0</h3>
      <ul>
        <li>First release</li>
      </ul>
    </div>
    <div class="panel">
      <h2>About</h2>
      <p>This SVG Gradient Maker was created by the author of <a href="http://kcblog.net/">KCBlog</a>.</p>
    </div>
    <div class="panel">
      <h2>Features</h2>
      <ul>
<?php //        <li>Some presets for you to tryout in the preview area</li> ?>
        <li>Directions of vertical, horizontal, diagonal, and radial gradients</li>
        <li>Cross browser CSS output optimized and encoded in base64</li>
        <li>Accepts multiple colour offsets in percentages</li>
<?php //        <li>Transparent support with opacity level</li> ?>
<?php //        <li>Colour formats of HEX, RGB, RGBA</li> ?>
        <li>More coming soon!</li>
      </ul>
    </div>
    <div class="panel">
      <h2>How to use?</h2>
      <ol>
        <li>Pick a direction</li>
        <li>Pick a colour in the start position</li>
        <li>Pick a colour in the end position</li>
        <li>Check the output in the preview area</li>
        <li>Copy the CSS and paste in your style</li>
      </ol>
    </div>
    <div class="footer">
      Copyright &copy; <a href="http://kcblog.net/">KCBlog</a> 2012.
    </div>
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="assets/js/jpicker-1.1.6.js"></script>
    <script src="assets/js/application.js"></script>
  </body>
</html>