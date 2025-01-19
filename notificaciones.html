<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Layout con Modal de Notificaciones</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: system-ui, -apple-system, sans-serif;
    }

    body {
        background-color: #f0f0f0;
        min-height: 100vh;
    }

    .page-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
        min-height: 100vh;
        display: grid;
        grid-template-areas:
            "header header"
            "sidebar main";
        grid-template-columns: 250px 1fr;
        grid-template-rows: auto 1fr;
        gap: 20px;
    }

    /* Header Styles */
    .header {
        grid-area: header;
        background: white;
        border-radius: 50px;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        gap: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .search-container {
        flex: 1;
        position: relative;
    }

    .search-input {
        width: 100%;
        padding: 12px 40px 12px 20px;
        border: none;
        border-radius: 25px;
        background: #f5f5f5;
        font-size: 16px;
        outline: none;
    }

    .search-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #666;
    }

    .notifications {
        position: relative;
        padding: 8px;
        cursor: pointer;
    }

    .notification-dot {
        position: absolute;
        top: 4px;
        right: 4px;
        width: 10px;
        height: 10px;
        background: #22c55e;
        border-radius: 50%;
        border: 2px solid white;
    }

    .user-profile {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 5px;
    }

    .user-name {
        font-size: 16px;
        color: #333;
    }

    .profile-picture {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #ddd;
    }

    /* Sidebar Styles */
    .sidebar {
        grid-area: sidebar;
        background: white;
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .nav-menu {
        list-style: none;
    }

    .nav-item {
        margin-bottom: 10px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px;
        color: #666;
        text-decoration: none;
        border-radius: 10px;
        transition: background-color 0.3s;
    }

    .nav-link:hover {
        background-color: #f5f5f5;
    }

    .nav-link.active {
        background-color: #22c55e;
        color: white;
    }

    /* Main Content Styles */
    .main-content {
        grid-area: main;
        background: white;
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Notification Modal Styles */
    .notification-modal {
        display: none;
        position: absolute;
        top: 80px;
        right: 20px;
        width: 300px;
        background: red;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        cursor: none;
    }

    .notification-modal.active {
        display: block;
    }

    .notification-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5;
    }

    .notification-title {
        font-size: 18px;
        font-weight: bold;
    }

    .notification-list {
        max-height: 300px;
        overflow-y: auto;
    }

    .notification-item {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5;
    }

    .notification-item:last-child {
        border-bottom: none;
    }

    .notification-item-title {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .notification-item-description {
        font-size: 14px;
        color: #666;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-container {
            grid-template-areas:
                "header"
                "main";
            grid-template-columns: 1fr;
        }

        .sidebar {
            display: none;
        }

        .header {
            border-radius: 20px;
        }

        .user-name {
            display: none;
        }

        .notification-modal {
            width: calc(100% - 40px);
            left: 20px;
            right: 20px;
        }
    }
</style>
</head>
<body>
<div class="page-container">
    <!-- Header -->
    <header class="header">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Buscar">
            <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"/>
                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
        </div>
        
        <div class="notifications" id="notificationButton">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
            </svg>
            <div class="notification-dot"></div>
        </div>

        <div class="user-profile">
            <span class="user-name">Alejandro</span>
            <div class="profile-picture"></div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar">
        <nav>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Perfil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        Notificaciones
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Configuración
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <h1>Contenido Principal</h1>
        <p>Este es el área principal de contenido. Aquí irá el contenido específico de cada página.</p>
    </main>

    <!-- Notification Modal -->
    <div class="notification-modal" id="notificationModal">
        <div class="notification-header">
            <h2 class="notification-title">Notificaciones</h2>
        </div>
        <div class="notification-list" id="notificationList">
            <!-- Notification items will be dynamically added here -->
            <div>
                <p>una notificacion</p>
            </div>
        </div>
    </div>
</div>

<script>


    // Get DOM elements
    const notificationButton = document.getElementById('notificationButton');
    const notificationModal = document.getElementById('notificationModal');



    // Toggle notification modal
    notificationButton.addEventListener('click', () => {
        notificationModal.classList.toggle('active');
        if (notificationModal.classList.contains('active')) {
            createNotificationItems();
        }
    });

    // Close modal when clicking outside
    document.addEventListener('click', (event) => {
        if (!notificationButton.contains(event.target) && !notificationModal.contains(event.target)) {
            notificationModal.classList.remove('active');
        }
    });
</script>
</body>
</html>

