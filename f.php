<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
</head>
<body>
<div><?= "x" ?></div>
<?php
?>
<form>
  <div>
    <button type="button" id="btn1">btn1</button>
  </div>
  <input type="text" class="ename">
  <table>
    <thead>
      <tr><th></th><th></th></tr>
    </thead>
    <tbody>
      <tr id="chocoTr">
        <td><input type="text" class="milk"></td>
        <td><input type="text" class="cacao"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
<script src="js/trax/trax.js"></script>
<script>
  document.getElementsByTagName("body").item(0).onload = function () {
    console.log("sss");
    var t;
    t = new Trax({
      apple: "",
      choco: [{
        milk: "",
        cacao: "",
      }],
    });

    t.tx("choco", "#chocoTr");

    var counter = (function () {
      var i = 0;
      return function () {
        return ++i;
      };
    })();

    document.getElementById("btn1").addEventListener("click", function (event) {
      var item;
      item = t.choco.createItem();
      item.milk = "bin: " + counter();
      t.choco.push(item);
    });
    
  };
</script>
</html>
