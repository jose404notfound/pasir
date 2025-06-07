<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_auth();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmZone.</title>
    <link rel="stylesheet" href="/styles/filmzone.css">
</head>
<body>
    <header>
    <h1>Best Series and Movies about Computing.</h1>
    <p class="subtitle">Click on the names to watch the trailers.</p>
</header>

<div class="container" id="series-section">
    <div>
        <section>
            <h2>Series about Computing.</h2>
            <ul>
                <li><strong><a href="https://www.youtube.com/watch?v=N6HGuJC--rk" target="_blank">Mr. Robot</a></strong> - Follows a cybersecurity engineer and hacker named Elliot Alderson.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=pWrioRji60A" target="_blank">Halt and Catch Fire</a></strong> - About the personal computer revolution in the 80s.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=Vm4tx1O9GAc" target="_blank">Silicon Valley</a></strong> - A parody about tech startups in Silicon Valley.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=V0XOApF5nLU" target="_blank">Black Mirror</a></strong> - Explores the dark side of technology in an anthology series.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=WYDWSNMTauQ" target="_blank">Person of Interest</a></strong> - An AI system predicts crimes before they happen.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=U402uMSRq1g" target="_blank">Scorpion</a></strong> - A group of tech geniuses helps the government solve complex problems.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=yCf_MpXAXK8" target="_blank">StartUp</a></strong> - About the creation of a cryptocurrency and its ties to organized crime.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=X89Oteb3kWw" target="_blank">Betas</a></strong> - Comedy about programmers in Silicon Valley.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=MwwTfkXk7U0" target="_blank">The IT Crowd</a></strong> - Comedy about a dysfunctional IT department.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=UhZ0UENMi78" target="_blank">Code Monkeys</a></strong> - Animated series parodying life in an 80s video game company.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=kEkZdgWu7mM" target="_blank">Westworld</a></strong> - A theme park with androids exploring artificial intelligence and human nature.</li>
            </ul>
        </section>
    </div>
</div>

<div class="container" id="movies-section">
    <div>
        <section>
            <h2>Movies about Computing.</h2>
            <ul>
                <li><strong><a href="https://www.youtube.com/watch?v=vKQi3bBA1y8" target="_blank">The Matrix</a></strong> - A simulated world created by machines where humans are used as energy sources.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=88l9tjkTBwQ" target="_blank">The Net</a></strong> - A programmer becomes involved in a conspiracy that erases her identity.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=hMT8tRrEMC4" target="_blank">TRON</a></strong> - A programmer gets trapped in a digital world controlled by AI.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=nuPZUUED5uk" target="_blank">The Imitation Game</a></strong> - The life of Alan Turing, who cracked the Enigma code during World War II.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=FrvkCS0ZGPU" target="_blank">Jobs</a></strong> - Biography of Steve Jobs, co-founder of Apple.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=lEyrivrjAuU" target="_blank">Pirates of Silicon Valley</a></strong> - Story of the rivalry between Jobs and Gates in the early days of computing.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=piI9vJ9-UZ0" target="_blank">Hackers</a></strong> - A group of young hackers uncovers a cyber conspiracy.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=TQUsLAAZuhU" target="_blank">WarGames</a></strong> - A young hacker accidentally accesses a military system threatening nuclear war.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=YQOiS_l_0Jk" target="_blank">The Fifth Estate</a></strong> - Based on the story of Julian Assange and WikiLeaks.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=QlSAiI3xMh4" target="_blank">Snowden</a></strong> - Biography of Edward Snowden, former NSA analyst who leaked classified information.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=P78pl1FUXfA" target="_blank">TRON: Legacy</a></strong> - Sequel to TRON, where the original protagonist's son ventures into the digital world.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=a1xYGg_badI" target="_blank">Firewall</a></strong> - A security expert must hack his own banking system to save his family.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=8RF09G8Ymqg" target="_blank">Ghost in the Shell</a></strong> - An anime exploring human connection with technology and cyborgization.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=lB95KLmpLR4" target="_blank">The Social Network</a></strong> - The story of Facebook's creation and the legal battles surrounding it.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=lFwtY1bxlNc" target="_blank">Swordfish</a></strong> - Thriller about a hacker recruited to steal billions from the government.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=QCOXARv6J9k" target="_blank">The Circle</a></strong> - Based on control and surveillance in a tech megacorporation.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=jZ1ZDlLImF8" target="_blank">Blackhat</a></strong> - A cybercriminal is released to help the government stop a dangerous hacker.</li>
                <li><strong><a href="https://www.youtube.com/watch?v=1HCsSOuDS7Y" target="_blank">Source Code</a></strong> - A soldier uses a computer simulation to prevent a terrorist attack.</li>
            </ul>
        </section>
    </div>
</div>

<div class="footer">
    <p>© All rights reserved. Trailers and external content links belong to their respective owners. This website is for informational and educational purposes only.</p>
</div>
<a href="/home" class="back-button">Return to Menu.</a>
