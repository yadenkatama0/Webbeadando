<h1>E-mail küldése</h1>
<div class=email>
    <form action="?oldal=visszaad" method="post">
        <div class=wrapper>
            <label for="name" >Név: </label>
            <input type=text name="name" id="name" required>
        </div>
        
        <div class=wrapper>
            <label for="email" >E-mail cím: </label>
            <input type=email name="email" id="email" required>
        </div>
      
        <div class=wrapper>
            <label for="msg" >Üzenet: </label>
            <textarea rows="20" cols="40" name="msg" id="msg" required></textarea>
        </div>
        
        <div class=wrapper>
            <input type="submit" class="button" value="Küldés">
        </div>
    </form> 
</div>
<img src="styles/images/postalada.jpg">
  <body>
  <div class=wrapper>
    <form action = "belepes.php" method = "post">
      <fieldset>
        <h1>Bejlentkezés</h1>
        <br>
        <input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
	</div>
    <h1>Regisztrálja magát, ha még nem felhasználó!</h1>
	<div class=wrapper>
    <form action = "regisztracio.php" method = "post">
      <fieldset>
        <h1>Regisztráció</h1>
        <br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
        <input type="text" name="utonev" placeholder="utónév" required><br><br>
        <input type="text" name="felhasznalo" placeholder="felhasználói név" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
	</div>
  </body>
</html>
