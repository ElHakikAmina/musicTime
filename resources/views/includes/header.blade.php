<div class="navbar">
    <div class="navbar-inner">
        <a id="logo" href="/">Single Malt</a>
        <ul class="nav">
            <li><a href="/">Home</a></li>
            @guest
            <li><a href="/register">Créer un compte</a></li>
            <li><a href="/login">Connexion</a></li>
            @endguest
        </ul>
    </div>
 </div>

 @auth
    // The user is authenticated...
@endauth
 
