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
    <button type="button" id="checkTx">check tx</button>
    <button type="button" id="checkTrx">check trx</button>
    <button type="button" id="btn1">btn1</button>
  </div>
  <div class="checkTx"><span>check tx</span><span class="apple"></span></div>
  <div class="checkRx"><span>check rx</span><input type="text" class="apple"></div>
  <div class="checkTrx">
    <div><span>check trx</span><span class="banana"></span></div>
    <div><span>check trx</span><input type="text" class="banana"></div>
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
      banana: "",
      choco: [{
        milk: "",
        cacao: "",
      }],
    });
    
    t.tx("apple", ".checkTx > .apple");
    t.rx("apple", ".checkRx > .apple");
    t.trx("banana", ".checkTrx > div > .banana");

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
    
    document.querySelector("#checkTx").addEventListener("click", function (event) {
      console.log("checkTx");
      t.apple = "" + counter();
    });

    document.querySelector("#checkTrx").addEventListener("click", function (event) {
      console.log("checkTrx");
      t.banana = "" + counter();
    });

    
  };
</script>
</html>
