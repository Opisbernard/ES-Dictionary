<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES Dictionary</title>

    <script src="https://kit.fontawesome.com/6b203b1712.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js"></script>
</head>

<body>

    <!---- Navbar Section Begins -->
    <header>
        <!-- Navbar -->

        <section id="nav-sidebar">

            <!-- Sidebar -->

            <div class="sidebar close">
                <div class="logo-details">
                    <i class='bx bxs-book'></i>
                    <span class="logo_name">Menu Settings</span>
                </div>
                <ul class="nav-links">
                    <li>
                        <a href="#">
                            <i class='bx bx-grid-alt'></i>
                            <span class="link_name">Dashboard</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="#">Category</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="icon-link">
                            <a href="#">
                                <i class='bx bx-collection'></i>
                                <span class="link_name">Category</span>
                            </a>
                            <i class='bx bxs-chevron-down arrow'></i>
                        </div>
                        <ul class="sub-menu">
                            <li><a class="link_name" href="#">Category</a></li>
                            <li><a href="#"> Edit Word</a></li>
                            <li><a href="#"> Edit Delete</a></li>
                            <li><a href="#"> Edit Modify</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="icon-link">
                            <a href="#">
                                <i class='bx bx-book-alt'></i>
                                <span class="link_name">Posts</span>
                            </a>
                            <i class='bx bxs-chevron-down arrow'></i>
                        </div>
                        <ul class="sub-menu">
                            <li><a class="link_name" href="#">Posts</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a class="posts" href="#">Word of the day</a>
                                <ul class="sub-menu">
                                    <li> <a>Cat </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="icon-link">
                            <a href="#">
                                <i class='bx bx-edit-alt'></i>
                                <span class="link_name">Tools</span>
                            </a>
                            <i class='bx bxs-chevron-down arrow'></i>
                        </div>
                        <ul class="sub-menu">
                            <li><a class="link_name" href="#">Tools</a></li>
                            <li><a href="#">Search</a></li>
                            <li><a href="#">Highlight</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-compass'></i>
                            <span class="link_name">Explore</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="#">Explore</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-history'></i>
                            <span class="link_name">History</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="#">History</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-cog'></i>
                            <span class="link_name">Setting</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="#">Setting</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="profile-details">
                            <div class="profile-content">
                                <!--<img src="image/profile.jpg" alt="profileImg">-->
                            </div>
                            <div class="name-job">
                                <div class="profile_name">Made by</div>
                                <div class="job">Group 2</div>
                            </div>
                            <i class='bx bx-log-out'></i>
                        </div>
                    </li>
                </ul>
            </div>
            <section class="home-section">
                <div class="home-content">
                    <div class="menu-box">
                        <i class='bx bx-menu'></i>
                    </div>
                </div>
                <section id="body-area">

                    <!-- Navbar Container -->
                    <div id="navbar">

                        <div class="img-nav">
                            <div class="logo-item">
                                <img class="logo" src="images/logo.png">
                            </div>
                            <div class="logo-item">
                                <h3>ES Dictionary</h3>
                            </div>
                        </div>
                        <nav>
                            <div class="nav-links">
                                <ul>
                                    <li><a class="list dark-mode"><i class="bx bx-moon"></i> Darkmode</a></li>
                                    <li><a class="list"><button type="submit" class="nav-btn">Contact</button></a></li>
                                    <li class="menu-btn"><a><i class="fa-solid fa-bars"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="body-box">
                        <div class="menu-list">
                            <div class="menu-box">
                                <a><i class='bx bx-list-plus'></i> Add Word</a>
                            </div>
                            <div class="menu-box">
                                <a><i class='bx bxs-trash-alt'></i> Delete Word</a>
                            </div>
                            <div class="menu-box">
                                <a><i class='bx bxs-brush-alt'></i> Clear History</a>
                            </div>
                        </div>

                        <div class="search-container">

                            <div class="search-box">
                                <input type="text" placeholder="Type the word here.." id="inp-word" />
                                <button class="search-btn" id="search-btn" onclick="dictionary()">Search</button>
                            </div>
                            <div class="result-boxes">
                                <div class="container">
                                    <audio id="sound"></audio>
                                    <div class="result" id="result"></div>
                                    <img class="img-result" src="images/background-2.jpg">
                                </div>
                                <div class="container-2">
                                    
                                    <div class="history" id="history">
                                        <h2>History</h2>
                                        <ul id="history-list">
                                            <li> Item 1</li>
                                            <li> Item 2</li>
                                            <li> Item 3</li>
                                            <li> Item 4</li>
                                            <li> Item 5</li>
                                            <li> Item 6</li>
                                            <li> Item 7</li>
                                            <li> Item 8</li>
                                            <li> Item 9</li>
                                            <li> Item 10</li>
                                        </ul>
                                    </div>
                                    <div class="history" id="searches">
                                        <h2>Recent</h2>
                                        <ul id="search-list">
                                            <li> Item 1</li>
                                            <li> Item 2</li>
                                            <li> Item 3</li>
                                            <li> Item 4</li>
                                            <li> Item 5</li>
                                            <li> Item 6</li>
                                            <li> Item 7</li>
                                            <li> Item 8</li>
                                            <li> Item 9</li>
                                            <li> Item 10</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Body Area Section Ends -->

                </section>
            </section>
        </section>

    </header>
    </section>

    <script src="js/api.js"></script>
    <script src="js/sidebar.js"></script>
    <!---- Navbar Section Ends -->
    </section>
    <!-- Body Area Section Begins -->

</body>

</html>