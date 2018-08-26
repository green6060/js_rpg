<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="Dallas Parker" content="Javascript role playing game js rpg">
  <meta name="description" content="A Javascript role playing game or js rpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="osgui_css_js_lib/dist/rpgui.css" rel="stylesheet" type="text/css" >
  <link href="css/styles.css" rel="stylesheet" type="text/css" >
	
</head>

<body>

  <div class="rpgui-content">
    <div class="rpgui-container framed">

      <p>Welcome to RPG</p>
      <p>Before we begin, you've got some choices to make. Choose wisely...</p>

      <form action="">
        <label>Your hero's name:</label>
        <input type="text" name="FirstName" value="Bob" placeholder="Hero name">
  
        <label>Your hero's title':</label>
        <input type="text" name="FirstName" value="The Destroyer" placeholder="Hero Title">
        <br /><br />
        
        <label>Hero's gender:</label>
        <br />
        <input class="rpgui-radio" checked type="radio" name="sex" value="male"><label>Male</label>
        <br />
        <input class="rpgui-radio" type="radio" name="sex" value="female"><label>Female</label>
      </form>

      

    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="osgui_css_js_lib/dist/rpgui.js"></script>
</body>

</html>