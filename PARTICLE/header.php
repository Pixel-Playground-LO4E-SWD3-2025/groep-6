<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
         <ul class="sideBar">
            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></a></li>
            <li><a href="Home">Home</a></li>
            <li><a href="Games">Games</a></li>
            <li><a href="Inloggen/Registreren">Inloggen/Registreren</a></li>
        </ul>
        <ul>
            <li><img class="playgridLogo" src="../img/Logoplaygrid.png" alt="logo"></li>
            <li><a href="Home">Home</a></li>
            <li><a href="Games">Games</a></li>
            <li><a href="Inloggen/Registreren">Inloggen/Registreren</a></li>
            <li onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false" aria-hidden="true" style="pointer-events: none; display: inherit; width: 80%; height: 80%;"><path d="M21 6H3V5h18v1zm0 5H3v1h18v-1zm0 6H3v1h18v-1z"></path></svg></a></li>
        </ul>
    </nav>

    <script>
        function showSidbar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.dislpay = 'flex'
        }
    </script>
    
</body>
</html>