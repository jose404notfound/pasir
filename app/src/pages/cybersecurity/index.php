<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_auth();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSecurity.</title>
    <link rel="stylesheet" href="/styles/cybersecurity.css">
</head>
<body>
    <div class="container">
        <h1 class="title">CyberSecurity.</h1>
        <p>Cybersecurity is the art of protecting networks, devices, and data from unauthorized access or criminal use and the practice of ensuring confidentiality, integrity, and availability of information.</p>
        <div class="sections">
            <section>
                <h2>Roadmaps.</h2>
                <ul>
                    <li><a href="https://roadmap.sh/cyber-security">Roadmap CyberSecurity</a></li>
                    <li><a href="https://roadmap.sh/cyber-security/roadmap">Roadmap CyberSecurity Certifications</a></li>
                </ul>
            </section>
            <section>
                <h2>Certifications.</h2>
                <p>Order of recommended certifications by community.</p>
                <h4>Red Team and Pentesting Certifications.</h4>
                <ul>
                    <li><a href="https://security.ine.com/certifications/ejpt-certification/">1. eJPTv2 (eLearnSecurity Junior Penetration Tester v2).</a></li>
                    <li><a href="https://security.ine.com/certifications/ewpt-certification/">2. eWPT (eLearnSecurity Web Penetration Tester).</a></li>
                    <li><a href="https://security.ine.com/certifications/ecppt-certification/">3. eCPPTv2 (eLearnSecurity Certified Professional Penetration Tester v2).</a></li>
                    <li><a href="https://certifications.tcm-sec.com/pnpt/">4. PNPT (Practical Network Penetration Tester).</a></li>
                    <li><a href="https://www.offsec.com/courses/pen-200/">5. OSCP (Offensive Security Certified Professional).</a></li>
                    <li><a href="https://security.ine.com/certifications/ewptx-certification/">6. eWPTXv2 (eLearnSecurity Web Application Penetration Tester eXtreme v2).</a></li>
                    <li><a href="https://portswigger.net/web-security/certification">7. BSCP (Burp Suite Certified Practitioner).</a></li>
                    <li><a href="https://www.alteredsecurity.com/adlab">8. CRTP (Certified Red Team Professional).</a></li>
                    <li><a href="https://www.alteredsecurity.com/redteamlab">9. CRTE (Certified Red Team Expert).</a></li>
                    <li><a href="https://training.zeropointsecurity.co.uk/courses/red-team-ops">10. CRTO (Certified Red Team Operator).</a></li>
                </ul>
                <h4>Advanced Offensive Security Certifications.</h4>
                <ul>
                    <li><a href="https://www.offsec.com/courses/web-300/">11. OSWE (Offensive Security Web Expert).</a></li>  
                    <li><a href="https://www.offsec.com/courses/pen-300/">12. OSEP (Offensive Security Experienced Penetration Tester).</a></li>  
                    <li><a href="https://www.offsec.com/courses/exp-301/">13. OSED (Offensive Security Exploit Developer).</a></li>
                    <li><a href="https://www.offsec.com/courses/exp-401/">14. OSEE (Offensive Security Exploitation Expert).</a></li>
                </ul>
            </section>

            <section>
                <h2>Additional Courses.</h2>
                <ul>
                    <li><a href="https://www.coursera.org/professional-certificates/google-cybersecurity">Google Cybersecurity Certificate.</a></li>
                    <li><a href="https://www.comptia.org/certifications/security">CompTIA Security+.</a></li>
                    <li><a href="https://www.coursera.org/professional-certificates/ibm-cybersecurity-analyst">IBM Cybersecurity Analyst Professional Certificate.</a></li>
                    <li><a href="https://www.eccouncil.org/train-certify/certified-ethical-hacker-ceh/">Certified Ethical Hacker (CEH).</a></li>
                    <li><a href="https://www.giac.org/certifications/information-security-fundamentals-gisf/">GIAC Information Security Fundamentals (GISF).</a></li>
                    <h4>- Savitar Courses:</h4>
                    <li><a href="https://hack4u.io/cursos/introduccion-al-hacking/">Introduction to hacking.</a></li>
                    <li><a href="https://hack4u.io/cursos/python-ofensivo/">Offensive Python.</a></li>

                </ul>
            </section>
            <section>
                <h2>Platforms.</h2>
                <ul>
                    <li><a href="https://www.hackthebox.com">Hack The Box (HTB).</a></li>
                    <li><a href="https://tryhackme.com">TryHackMe.</a></li>
                    <li><a href="https://www.offsec.com/labs/individual/">OffSec Proving Grounds.</a></li>
                    <li><a href="https://www.vulnhub.com">VulnHub.</a></li>
                    <li><a href="https://www.root-me.org">Root-Me.</a></li>
                    <li><a href="https://pentesterlab.com">PentesterLab.</a></li>
                    <li><a href="https://overthewire.org">OverTheWire.</a></li>
                    <li><a href="https://www.hackthissite.org">Hack This Site.</a></li>
                    <li><a href="https://blueteamlabs.online">Blue Team Labs Online (BTLO).</a></li>
                </ul>
            </section>
            <section>
                <h2>People of Interest and Channels.</h2>
                <ul>
                    <li><a href="https://www.youtube.com/@s4vitar">Savitar.</a></li>
                    <li><a href="https://www.youtube.com/@S4viSinFiltro">SavitarSinFiltro.</a></li>
                    <li><a href="https://www.youtube.com/@ElPinguinoDeMario">El Pinguino de Mario.</a></li>
                    <li><a href="https://www.youtube.com/@davidbombal">David Bombal.</a></li>
                    <li><a href="https://www.youtube.com/@TCMSecurityAcademy">The Cyber Mentor (Heath Adams).</a></li>
                    <li><a href="https://www.youtube.com/@Hackersploit">HackerSploit.</a></li>
                    <li><a href="https://www.youtube.com/@LiveOverflow">LiveOverflow.</a></li>
                    <li><a href="https://www.youtube.com/@NetworkChuck">NetworkChuck.</a></li>
                    <li><a href="https://www.youtube.com/@cybernews">Cybernews.</a></li>
                    <li><a href="https://www.youtube.com/@0dayCTF">Ryan Montgomery 0dayCTF.</a></li>
                    <li><a href="https://www.youtube.com/@ScammerPayback">Scammer Payback.</a></li>
                    <li><a href="https://www.youtube.com/@_JohnHammond">John Hammond.</a></li>
                    <li><a href="https://www.youtube.com/@STOKfredrik">STÖK.</a></li>
                    <li><a href="https://www.youtube.com/@NahamSec">NahamSec.</a></li>
                    <li><a href="https://www.youtube.com/@zsecurity">ZSecurity (Elias).</a></li>
                    <li><a href="https://www.youtube.com/@IppSec">IppSec.</a></li>
                </ul>
            </section>
            <section>
                <h2>Hardware Hacking.</h2>
                <ul>
                    <li><a href="https://www.hackaday.io/">Hackaday.io.</a></li>
                    <li><a href="https://www.arduino.cc/">Arduino.</a></li>
                    <li><a href="https://www.raspberrypi.org/">Raspberry Pi.</a></li>
                    <li><a href="https://hackerwarehouse.com/">Hacker Warehouse.</a></li>
                    <li><a href="https://www.adafruit.com/">Adafruit.</a></li>
                </ul>
            </section>
        </div>
    </div>
<a href="/home" class="back-button">Return to Menu.</a>
</body>
</html>
