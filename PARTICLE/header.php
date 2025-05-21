<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
         <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="width: 2em; height: 2em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1"><path d="M777.856 280.192l-33.92-33.952-231.872 231.872-231.84-231.872-33.984 33.888 231.872 231.904-231.84 231.84 33.888 33.984 231.904-231.904 231.84 231.872 33.952-33.888-231.872-231.904z"/></svg></a></li>
            <li><a href="Home">Home</a></li>
            <li><a href="Games">Games</a></li>
            <li><a href="Inloggen/Registreren">Inloggen/Registreren</a></li>
        </ul>
        <ul>
            <li><img class="playgridLogo" src="../img/Logoplaygrid.png" alt="logo"></li>
            <li class="hideOnMobile"><a href="Home">Home</a></li>
            <li class="hideOnMobile"><a href="Games">Games</a></li>
            <li class="hideOnMobile"><a href="Inloggen/Registreren">Inloggen/Registreren</a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false" aria-hidden="true" style="pointer-events: none; display: inherit; width: 80%; height: 80%;"><path d="M21 6H3V5h18v1zm0 5H3v1h18v-1zm0 6H3v1h18v-1z"></path></svg></a></li>
        </ul>
    </nav>

    <script>
        
    function showSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
    }
    function hideSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }
  
    </script>
    
</body>
</html>