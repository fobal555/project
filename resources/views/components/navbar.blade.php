<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<style>
    .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(135deg, #1f2833, #0b0c10);
    padding: 15px 50px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.7);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.nav-logo {
    width: 150px;
    height: 50px;
    background-image: url('../images/logo2.jpg');
    background-size: contain;
    background-repeat: no-repeat;
}

.nav-links {
    display: flex;
    gap: 25px;
}

.nav-links a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
    font-weight: bold;
    transition: 0.3s;
    padding: 12px 18px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.1);
}

.nav-links a:hover {
    color: #66fcf1;
    background-color: rgba(69, 162, 158, 0.7);
    transform: scale(1.1);
}

.nav-search {
    display: flex;
    align-items: center;
    background-color: #333;
    padding: 8px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(102, 252, 241, 0.5);
}

.search-input {
    background: none;
    border: none;
    color: white;
    font-size: 1rem;
    width: 220px;
    padding: 6px;
}

.search-icon {
    color: white;
    font-size: 1.3rem;
    cursor: pointer;
}
</style>
</head>
<body>
<header>
        <div class="navbar">
            <div class="nav-logo">
                <div class="logo"></div>
            </div>
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="admin">Admin</a>
                <a href="register">Register</a>
                <a href="custom">Custom Games</a>
            </div>
            <div class="nav-search">
                <input type="text" placeholder="Search games..." class="search-input">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </header>
    
</body>
</html>