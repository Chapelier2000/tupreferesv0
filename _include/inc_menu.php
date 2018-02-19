<nav class="navbar  navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">&nbsp;</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href='<?=hlien("affinite","index")?>'>Affinite</a></li>
<li><a href='<?=hlien("item","index")?>'>Item</a></li>
<li><a href='<?=hlien("matching","index")?>'>Matching</a></li>
<li><a href='<?=hlien("message","index")?>'>Message</a></li>
<li><a href='<?=hlien("question","index")?>'>Question</a></li>
<li><a href='<?=hlien("reponse","index")?>'>Reponse</a></li>
<li><a href='<?=hlien("utilisateur","index")?>'>Utilisateur</a></li>
<li><a href='<?=hlien("utiquestion","index")?>'>Utiquestion</a></li>

	  </ul>
      <ul class="nav navbar-nav navbar-right">
		<li><a href='<?=hlien("adefinir","index")?>'>adéfinir</a></li>
      </ul>
    </div>
  </div>
</nav>

<script>
    tab=document.querySelectorAll(".nav > li > a");
    const module="<?=ucfirst($this->module)?>";
    tab.forEach(function(obj) {
        if (obj.innerHTML===module) {
            obj.parentElement.className="menusel";
            return true;
        }
    });
</script>