<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
    <header>
        <nav>
            <div id="logo">
                <a href="index.html">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="resume.html">Resume</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="contact-form">
            <h2>Contact Me</h2>
            <form action="/assets/backend/send_mail.php" method="POST"> <!-- Action point vers send_mail.php -->
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                    <label for="Description">Description</label>
                    <textarea id="Description" name="Description" rows="4" required></textarea> <!-- Nom correspond au champ PHP -->
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
    <footer>
        <p class="copyright">© 2025 Dorian CRÉPIN Tous droits réservés.</p>
    </footer>
</body>
</html>
