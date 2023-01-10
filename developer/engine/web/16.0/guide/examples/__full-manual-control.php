<html>
<head>

  <?php
  require_once('includes/__kmwheader.php');
  $kmwbuild = setup_kmw();
  ?>

<script type='text/javascript' src='js/unified_loader.js'></script>
<script type="text/javascript">

var KWControl = null;

function SetupDocument()
{
  kmw.init().then(function(){
    // Load the keyboards of your choice here.
    loadKeyboards();

    KWControl = document.getElementById('KWControl');
    var kbds = kmw.getKeyboards();
    for(var kbd in kbds)
    {
      var opt = document.createElement('OPTION');
      opt.value = kbds[kbd].InternalName + "$$" + kbds[kbd].LanguageCode;
      opt.innerHTML = kbds[kbd].Name;
      KWControl.appendChild(opt);    
    }
    document.f.multilingual.focus();

    kmw.setActiveKeyboard('', '');
  });
}

function KWControlChange()
{
  var name = KWControl.value.substr(0, KWControl.value.indexOf("$$"));
  var languageCode = KWControl.value.substr(KWControl.value.indexOf("$$") + 2);
  kmw.setActiveKeyboard(name, languageCode);
  document.f.multilingual.focus();
}

window.addEventListener( 'load' , SetupDocument );

</script>
</head>
<body>

<form name='f' action='.' method='post'>

  <p>Keyboard: <select id='KWControl' onchange='KWControlChange()'><option value=''>English</option></select></p>

<p><input type='text' id='multilingual' name='multilingual' size="40" placeholder="id='multilingual'"/></p>
</form>

</body>
</html>
