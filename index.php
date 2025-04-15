<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cybersecurity Academy</title>
    <link rel="stylesheet" href="https://hackmyvm.eu/static/boot.css" />
    <script defer src="script.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #1a1a1a; /* Full dark background */
        }

        .sidebar {
            width: 300px;
            height: 100vh;
            overflow-y: auto;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        main {
            margin-left: 300px;
            padding: 20px;
            width: calc(100% - 300px);
            overflow-x: hidden;
        }

        .menu-content {
            display: none;
        }

        .toggle-btn[aria-expanded="true"] + .menu-content {
            display: block;
        }

        .card-img-top {
            height: 160px;
            object-fit: cover;
        }

        .course-container {
            background-color: #1a1a1a; /* Dark gray background for tiles section */
            padding: 20px;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            main {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <aside class="sidebar bg-dark text-light p-3" role="navigation" aria-label="Sidebar Navigation">
        <h2 class="text-center mb-4">Menu</h2>

        <div class="menu-section mb-4">
            <button class="btn btn-primary w-100 mb-2 toggle-btn" aria-expanded="false">Courses ▼</button>
            <ul class="menu-content list-unstyled ps-3">
                <?php
                $courses = [
                    ["title" => "Linux - Basic", "image" => "/content/linux/img/linux.jpg", "alt" => "Basic Linux", "link" => "/content/linux/linux.html"],
                    ["title" => "Windows - Basic", "image" => "/content/windows/img/windows.jpg", "alt" => "Basic Windows", "link" => "/content/windows/windows.html"],
                    ["title" => "Network Security", "image" => "/content/networking/img/network.jpg", "alt" => "Network Security", "link" => "/content/networking/networking.html"],
                    ["title" => "Ethical Hacking", "image" => "img/course.png", "alt" => "Ethical Hacking", "link" => "#"],
                    ["title" => "Cryptography", "image" => "img/course.png", "alt" => "Cryptography", "link" => "#"],
                    ["title" => "Incident Response", "image" => "img/course.png", "alt" => "Incident Response", "link" => "#"]
                ];

                // Generate submenu items dynamically
                foreach ($courses as $course) {
                    echo '<li><a href="' . $course["link"] . '" class="btn btn-primary" style="margin: 5px; width: 100%;">' . $course["title"] . '</a></li>';
                }
                ?>
            </ul>
        </div>

        <div class="menu-section">
            <button class="btn btn-primary w-100 mb-2 toggle-btn" aria-expanded="false">Learning Paths ▼</button>
            <ul class="menu-content list-unstyled ps-3">
                <li><a href="#" class="btn btn-primary" style="margin: 5px; width: 100%;">Cyber Defense Path</a></li>
                <li><a href="#" class="btn btn-primary" style="margin: 5px; width: 100%;">Penetration Testing Path</a></li>
                <li><a href="#" class="btn btn-primary" style="margin: 5px; width: 100%;">Cloud Security Path</a></li>
            </ul>
        </div>

        <iframe src="https://discord.com/widget?id=756601039053914243&theme=dark" style="margin-top: 30px" width="100%" height="50%" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    </aside>

    <main>
        <div class="container-fluid">
            <header class="text-center my-4">
                <h1 class="text-light">Cybersecurity Academy</h1>
            </header>

            <section class="row course-container">
                <?php
                // Generate course tiles dynamically
                foreach ($courses as $course) {
                    echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">';
                    echo '  <div class="card h-100 shadow">';
                    echo '    <a href="' . $course["link"] . '">';
                    echo '      <img src="' . $course["image"] . '" alt="' . $course["alt"] . '" class="card-img-top">';
                    echo '    </a>';
                    echo '    <a href="' . $course["link"] . '" class="btn btn-primary">';
                    echo '      <h5 class="text-center">' . $course["title"] . '</h5>';
                    echo '    </a>';
                    echo '  </div>';
                    echo '</div>';
                }
                ?>
            </section>
        </div>
    </main>
</body>
</html>