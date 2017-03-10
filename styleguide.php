<?php  include 'header.php';?>

<div class="style">

<h1 class = "title"> <strong>Styles</strong></h1>
<br>
<h1 class = "title"> Colors</h1>
<div id="color">

  <div class="colorpalette">
    <div class="greencircle"></div>
    <p>#23D160</p>
    <p>UFO Green</p>
  </div>

  <div class="colorpalette">
    <div class="yellowcircle"></div>
    <p>#FFDD57</p>
    <p>Mustard</p>
  </div>

  <div class="colorpalette">
    <div class="redcircle"></div>
    <p>#F81713</p>
    <p>Vivid Red</p>
  </div>

  <div class="colorpalette">
    <div class="bluecircle"></div>
    <p>#3273DC</p>
    <p>Royal Blue</p>
  </div>

</div>

<br class = "clear">

<br>
<h1 class = "title">Typography</h1>
  <div id="typography">

    <p class = "paragraph Prociono">
      This is Prociono regular.
    </p>

    <p class = "paragraph Prociono-strong">
      This is Prociono bold.
    </p>

    <p class = "paragraph">
      This is Prociono regular.
    </p>

    <p class = "paragraph">
      This is Prociono bold.
    </p>


    <h1 class = "h1style" style="margin-bottom:-0.25rem;"> This is the regular type</h1>
    <br>
    <h2 class = "h2style" style="margin-bottom:-0.25rem;">This is a smaller title</h2>
    <br>
    <h3 class = "h3style" style="margin-bottom:-0.25rem;">Another head</h3>
    <br>
    <h4 class = "h4style" style="margin-bottom:-0.25rem;">An even smaller head</h4>
    <br>
    <h5 class = "h5style" style="margin-bottom:-0.25rem;">This is the smallest head</h5>
      <br>
      <p class = "paragraph">
        <strong>Paragraph text</strong>
        Security is a strong brand differentiator. Your customers deserve the respect they are entitled to. We also understand that growing your business is your main priority and have built Barricade with that in mind.
      </p>
  </div>


<br>
<h1 class = "title">Buttons</h1>
  <div id="buttonstyle">
    <p class = "marginset"><button type="button" class="button is-info is-large"><a href="#" class = "white nounderline">A large info button</a></button></p>

    <p class = "marginset"><button type="button" class="button is-info is-medium"><a href="#" class = "white nounderline">A medium info button</a></button></p>

    <p class = "marginset"><button type="button" class="button is-info"><a href="#" class = "white nounderline">A normal info button</a></button></p>

    <p class = "marginset"><button type="button" class="button is-info is-small"><a href="#" class = "white nounderline">A small info button</a></button></p>

    <p class = "marginset"><button type="button" class="button is-danger is-large"><a href="#" class = "white nounderline">A normal info button</a></button></p>

    <p class = "marginset"><button type="button" class="button is-danger is-medium"><a href="#" class = "white nounderline">A normal info button</a></button></p>

    <p class = "marginset"><button type="button" class="button is-danger"><a href="#" class = "white nounderline">A normal info button</a></button></p>

    <p class = "marginset"><button type="button" class="button is-danger is-small"><a href="#" class = "white nounderline">A normal info button</a></button></p>

    <p>
      <a href="" class="button is-danger is-outlined nounderline" >
          <span>Delete Contact</span>
          <span class="icon is-small">
            <i class="fa fa-times"></i>
          </span>
      </a>
    </p>

    <p class = "marginset">
      <a class="button is-info is-outlined nounderline" href="">
        <span>All Contacts</span>
      </a>
    </p>

    <p class = "marginset">
      <a class="button is-info is-outlined nounderline" href="">
        <span>New Contacts</span>
      </a>
    </p>
  </div>

<h1 class = "title">Forms</h1>
  <div id="forms">
    <div class="form-group">
      <label>Text input</label>
      <input class="form-control" type="text" value="" placeholder="This is a text input" />
    </div>

    <div class="form-group">
      <label>Text area</label>
      <textarea class="form-control" placeholder="Enter text in this textarea"></textarea>
    </div>

    <div class="form-group">
      <label>Select input</label>
      <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
    </div>

  </div>


<h1 class = "title">Notifications</h1>
  <div id="notification">

    <div class="notification is-success">
      <p> This is a success notification</p>
    </div>

    <div class="notification is-warning">
      <p>This is a warning</p>
    </div>

    <div class="notification is-danger">
      <p>Your data has been removed</p>
    </div>

  </div>

  <h1 class = "title">Lists</h1>
    <div id="lists">
      <ul class="list-group">
        <li class="list-group-item">First ul item</li>
        <li class="list-group-item">Second ul item</li>
        <li class="list-group-item">Third ul item</li>
      </ul>

    </div>

</div>


<?php include 'footer.php'; ?>
