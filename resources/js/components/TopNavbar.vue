<template>
    <div class="navbar">
        <div class="icon">
            <img src="../../assets/blogger.png" alt="icon" class="icon-img">
            <h2 class="logo"></h2>
            <div class="menu">
                <ul>
                    <li><router-link to="/">HOME</router-link></li>
                    <li><router-link to="/view">BLOG</router-link></li>
                    <li><router-link to="/blogs/list">NEW BLOG</router-link></li>
                </ul>
            </div>
        </div>
        <div class="navbar-end">
            <ul>
                <li><router-link to="/register">REGISTER</router-link></li>
                <li><router-link to="/login">LOGIN</router-link></li>
            </ul>
        </div>
    </div>
</template>

<style>
body,
html {
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: rgb(0, 0, 0);
    color: #fc8d1e;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.icon {
    display: flex;
    align-items: center;
}

.icon-img {
    width: 32px;
    height: 32px;
    margin-right: 10px;
}

.logo {
    font-size: 24px;
    margin: 0;
    margin-right: 30px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
}

.menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

.menu ul li {
    margin-right: 20px;
}

.menu ul li a {
    color: #fff;
    text-decoration: none;
}

.menu ul li a:hover {
    color: #ff7200;
    /* text-decoration: underline; */
}

.navbar-end ul{
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

.navbar-end ul li {
    margin-right: 20px;
}

.navbar-end ul li a {
    color: #fff;
    text-decoration: none;
}

.navbar-end ul li a:hover {
    color: #ff7200;
    /* text-decoration: underline; */
}
</style>