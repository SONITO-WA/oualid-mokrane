<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil de Oualid Mokrane</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #d4af37;
      --secondary-color: #b8860b;
      --accent-color: #ffd700;
      --text-color: #e0e0e0;
      --light-bg: #2c2c2c;
      --card-bg: #333333;
      --section-padding: 2rem;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: var(--light-bg);
      color: var(--text-color);
      line-height: 1.6;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }
    
    header {
      background: linear-gradient(135deg, #333333, #1a1a1a);
      color: white;
      padding: 3rem 0;
      position: relative;
      overflow: hidden;
    }
    
    header::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48ZyBmaWxsPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMDUpIj48cGF0aCBkPSJNMCAwaDEwdjEwSDB6TTE1IDBIMjV2MTBIMTVek0zMCAwSDQwdjEwSDMwek0wIDE1SDEwdjEwSDB6TTE1IDE1SDI1djEwSDE1ek0zMCAxNUg0MHYxMEgzMHpNMCAzMEgxMHYxMEgwek0xNSAzMEgyNXYxMEgxNXpNMzAgMzBINDB2MTBIMzB6Ii8+PC9nPjwvc3ZnPg==');
      opacity: 0.2;
      z-index: 0;
    }
    
    .header-content {
      position: relative;
      z-index: 1;
      text-align: center;
    }
    
    .header-content h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
      font-weight: 700;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .header-content p {
      font-size: 1.25rem;
      max-width: 800px;
      margin: 0 auto;
      opacity: 0.9;
    }
    
    .profile-logo {
      width: 120px;
      height: 120px;
      margin: 0 auto 1.5rem;
    }
    
    .logo-image {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
    
    .profile-pic {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid var(--primary-color);
      margin-bottom: 1.5rem;
      background-color: #222;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
    }
    
    .profile-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    main {
      padding: 3rem 0;
    }
    
    .card {
      background-color: var(--card-bg);
      border-radius: 0.75rem;
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3), 0 4px 6px -2px rgba(0, 0, 0, 0.2);
      margin-bottom: 2rem;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 1px solid rgba(212, 175, 55, 0.2);
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
      border: 1px solid var(--primary-color);
    }
    
    .card-header {
      background-color: #222;
      color: var(--primary-color);
      padding: 1.25rem var(--section-padding);
      display: flex;
      align-items: center;
      border-bottom: 2px solid var(--primary-color);
    }
    
    .card-header i {
      margin-right: 0.75rem;
      font-size: 1.5rem;
      color: var(--primary-color);
    }
    
    .card-header h2 {
      font-size: 1.5rem;
      font-weight: 600;
      margin: 0;
    }
    
    .card-body {
      padding: var(--section-padding);
    }
    
    .card-body p {
      margin-bottom: 1.5rem;
    }
    
    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 1rem;
    }
    
    .skill-item {
      background-color: #222;
      padding: 1rem;
      border-radius: 0.5rem;
      display: flex;
      align-items: center;
      border-left: 3px solid var(--primary-color);
    }
    
    .skill-item i {
      margin-right: 0.75rem;
      color: var(--primary-color);
      font-size: 1.25rem;
      width: 24px;
      text-align: center;
    }
    
    .projects-list {
      list-style: none;
    }
    
    .project-item {
      padding: 1.25rem;
      border-left: 3px solid var(--primary-color);
      background-color: #222;
      margin-bottom: 1rem;
      border-radius: 0 0.5rem 0.5rem 0;
      position: relative;
      overflow: hidden;
    }
    
    .project-item h3 {
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
      color: var(--primary-color);
    }
    
    .project-item p {
      margin-bottom: 0.75rem;
      font-size: 0.95rem;
    }
    
    .project-image {
      width: 100%;
      height: 180px;
      border-radius: 0.3rem;
      object-fit: cover;
      margin-bottom: 1rem;
      border: 1px solid rgba(212, 175, 55, 0.3);
    }
    
    footer {
      background-color: #1a1a1a;
      color: white;
      padding: 3rem 0;
      text-align: center;
      border-top: 3px solid var(--primary-color);
    }
    
    .social-links {
      display: flex;
      justify-content: center;
      margin: 1.5rem 0;
    }
    
    .social-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #333;
      color: var(--primary-color);
      margin: 0 0.5rem;
      transition: all 0.3s ease;
      border: 1px solid var(--primary-color);
    }
    
    .social-link:hover {
      background-color: var(--primary-color);
      color: #1a1a1a;
      transform: translateY(-3px);
    }
    
    .contact-info {
      margin-bottom: 1.5rem;
    }
    
    .contact-info p {
      margin: 0.5rem 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .contact-info i {
      margin-right: 0.5rem;
      color: var(--primary-color);
    }
    
    .copyright {
      padding-top: 1.5rem;
      border-top: 1px solid rgba(212, 175, 55, 0.2);
      opacity: 0.7;
      font-size: 0.9rem;
    }
    
    @media (max-width: 768px) {
      header {
        padding: 2rem 0;
      }
      
      .header-content h1 {
        font-size: 2rem;
      }
      
      .skills-grid {
        grid-template-columns: 1fr;
      }
      
      .card-header h2 {
        font-size: 1.25rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <div class="header-content">
        <div class="profile-logo">
          <img src="images/image1.jpeg" alt="Logo" class="logo-image">
        </div>
        <div class="profile-pic">
          <img src="images/image2.jpg" alt="Oualid Mokrane" class="profile-image">
        </div>
        <h1>Oualid Mokrane</h1>
        <p>Étudiant en Réseaux et Télécommunications | Passionné de Cybersécurité et Technologies Connectées</p>
      </div>
    </div>
  </header>
  
  <main class="container">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-user-circle"></i>
        <h2>À propos de moi</h2>
      </div>
      <div class="card-body">
        <p>
          Je m'appelle <strong>Oualid Mokrane</strong>, étudiant à l'École Supérieure de Technologie Filière Réseaux et Télécommunications (ESTF). Passionné par les systèmes informatiques, les réseaux sans fil, la cybersécurité, et les nouvelles technologies, je développe actuellement des projets liés aux capteurs connectés, aux systèmes de surveillance, et à la sécurité réseau.
        </p>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <i class="fas fa-laptop-code"></i>
        <h2>Mes compétences</h2>
      </div>
      <div class="card-body">
        <div class="skills-grid">
          <div class="skill-item">
            <i class="fas fa-network-wired"></i>
            <span>Conception et installation de réseaux (Wi-Fi, fibre optique)</span>
          </div>
          <div class="skill-item">
            <i class="fas fa-server"></i>
            <span>Configuration de switchs, routeurs, caméras IP</span>
          </div>
          <div class="skill-item">
            <i class="fas fa-microchip"></i>
            <span>Programmation avec Arduino, ESP32, XBee</span>
          </div>
          <div class="skill-item">
            <i class="fas fa-mobile-alt"></i>
            <span>Développement d'applications mobiles avec MIT App Inventor</span>
          </div>
          <div class="skill-item">
            <i class="fas fa-database"></i>
            <span>Utilisation de Firebase pour le stockage de données en temps réel</span>
          </div>
          <div class="skill-item">
            <i class="fas fa-shield-alt"></i>
            <span>Tests de sécurité réseau avec pfSense, Kali Linux, Snort</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <i class="fas fa-project-diagram"></i>
        <h2>Mes projets</h2>
      </div>
      <div class="card-body">
        <div class="projects-list">
          <div class="project-item">
            <img src="images/image3.webp" alt="Système de surveillance" class="project-image">
            <h3>Système de surveillance d'usine</h3>
            <p>Mise en place d'un système de surveillance avec caméras Dahua et switchs Grandstream pour sécuriser une infrastructure industrielle.</p>
          </div>
          <div class="project-item">
            <img src="images/image4.jpeg" alt="Application Zero Feu" class="project-image">
            <h3>Application mobile "Zero Feu"</h3>
            <p>Développement d'une application de détection de feu en forêt utilisant Firebase pour le stockage des données et MIT App Inventor pour l'interface utilisateur.</p>
          </div>
          <div class="project-item">
            <img src="images/image5.jpeg" alt="Simulation d'attaques réseau" class="project-image">
            <h3>Simulation d'attaques réseau</h3>
            <p>Configuration d'un environnement virtuel sur VMware pour simuler et analyser des attaques réseau avec mise en place d'IDS et pfSense.</p>
          </div>
          <div class="project-item">
            <img src="images/image6.jpg" alt="Site e-commerce" class="project-image">
            <h3>Site e-commerce local</h3>
            <p>Création d'une plateforme e-commerce en PHP avec XAMPP pour une entreprise locale, incluant gestion des produits et système de commande.</p>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <footer>
    <div class="container">
      <div class="contact-info">
        <p><i class="fas fa-envelope"></i> oualid.mokrane@email.com</p>
        <p><i class="fas fa-map-marker-alt"></i> Maroc</p>
      </div>
      
      <div class="social-links">
        <a href="https://www.linkedin.com/in/oualid-mokrane-1a80142bb/" class="social-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://github.com/SONITO-WA" class="social-link" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://www.instagram.com/oualid_mk4/?next=%2F" class="social-link" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
      
      <div class="copyright">
        <p>&copy; 2025 - Oualid Mokrane. Tous droits réservés.</p>
      </div>
    </div>
  </footer>
</body>
</html>
