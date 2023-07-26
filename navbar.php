<style>
    nav {
        display: flex;
        align-items: center;
        background-color: #333;
        color: #fff;
        height: 50px;
        margin-bottom: 10px;
    }
    
    nav ul {
        list-style: none;
        display: flex;
        margin-left: 20px;
    }
    
    nav li {
        padding: 0 20px;
    }
    
    nav a {
        text-decoration: none;
        color: #fff;
    }
    
    nav a:hover {
        text-decoration: underline;
    }
    
    .solid-line {
        width: 100%;
        height: 2px;
        background-color: #333;
    }
</style>

<nav>
    <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=about">About</a></li>
        <li><a href="index.php?page=contact">Contact</a></li>
        <li><a href="index.php?page=notes">Notes</a></li>
    </ul>
</nav>
<div class="solid-line"></div>