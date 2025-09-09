<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comercio Universitario Transacción Interna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F4E1D2;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            color: #6B4C3B;
            font-size: 2.5em;
        }

        .content-section {
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
        }

        .content-section h2 {
            text-align: center;
            color: #6B4C3B;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .profile-card, .action-card {
            background-color: #A8A7A7;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-card:hover, .action-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .profile-card h3 {
            color: #34495e;
            margin: 0;
            font-size: 1.4em;
        }
        
        .profile-card p {
            color: #FFFFFF;
            font-style: italic;
        }

        .action-card h3 {
            color: #6B4C3B;
            margin: 0;
            font-size: 1.4em;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        /* Estilos específicos para historias de usuario */
        .card-user-story .card-header {
            font-size: 1.2em;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }
        
        .card-user-story .card-body p {
            margin: 5px 0;
            line-height: 1.5;
        }
        
        .card-user-story .card-body .keyword {
            font-weight: bold;
            color: #6B4C3B;
        }

        /* Estilos específicos para diseño de interfaces */
        .card-design-interface {
            text-align: center;
        }

        .card-design-interface img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        
        .card-design-interface .card-description {
            font-style: italic;
            color: #777;
            margin-bottom: 5px;
        }

        .card-design-interface .card-author {
            font-weight: bold;
            color: #333;
        }

        .hidden {
            display: none;
        }
        
        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #6B4C3B;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <header>
        <h1>Sistema de Comercio Universitario Transacción Interna</h1>
        <p id="sub-header">Historias y Diseños de Usuarios</p>
        <p id="sub-header">Community</p>
    </header>

    <main class="content-section">
        <div id="profiles-view">
            <div class="cards-grid">
                <div class="action-card" onclick="showAllInterfaces()">
                    <h3>Ver todos los diseños</h3>
                </div>
            </div>
            <h2>Perfiles de Usuario</h2>
            <div class="cards-grid" id="profiles-grid">
                </div>
        </div>

        <div id="user-detail-view" class="hidden">
            <a href="#" class="back-button" onclick="showProfiles()">← Volver a Perfiles</a>
            <div id="user-details-content">
                </div>
        </div>
        
        <div id="all-interfaces-view" class="hidden">
            <a href="#" class="back-button" onclick="showProfiles()">← Volver a Perfiles</a>
            <div id="all-interfaces-content">
                </div>
        </div>
    </main>
    
    <script>
        const userProfiles = {
            "alex-franco": {
                name: "Alex Geovanny Franco Herrera",
                role: "Estudiante",
                stories: [
                    { title: "Ver Historial de Compras", asA: "Como estudiante", iWantTo: "poder ver mi historial de compras", soThat: "para llevar un registro de mis gastos." },
                    { title: "Gestionar Matrícula", asA: "Como estudiante", iWantTo: "inscribirme en asignaturas y dar de baja las que ya no me interesan", soThat: "para mantener mi horario académico actualizado." },
                    { title: "Pagar Colegiatura", asA: "Como estudiante", iWantTo: "realizar pagos de colegiatura en línea de forma segura", soThat: "para evitar colas y trámites engorrosos." },
                    { title: "Consultar Calificaciones", asA: "Como estudiante", iWantTo: "acceder a mis calificaciones de forma rápida y sencilla", soThat: "para monitorear mi rendimiento académico." },
                    { title: "Buscar Recursos", asA: "Como estudiante", iWantTo: "buscar materiales de estudio y bibliografía de mis cursos", soThat: "para preparar mis clases eficientemente." }
                ],
                interfaces: [
                    { image: "img/loginprueba.png", description: "Diseño del login, instrucciones intuitivas por medio de placeholders con opciones de recuperar contraseña y crear nuevo usuario.", author: "Geovanny Franco" }
                ]
            },
            "adrian-guanoluisa": {
                name: "Adrian Guanoluisa",
                role: "Scrum Master",
                stories: [
                    { title: "Registrar Vendedores", asA: "Como Scrum master", iWantTo: "registrar a todos los usuarios vendores", soThat: "para tener un base de datos de vendedores y despues clientes." },
                    { title: "Monitorear Avances", asA: "Como Scrum master", iWantTo: "monitorear el progreso de las tareas del equipo", soThat: "para asegurar que se cumplen los plazos establecidos." },
                    { title: "Gestionar Sprints", asA: "Como Scrum master", iWantTo: "crear, editar y cerrar sprints de desarrollo", soThat: "para organizar el flujo de trabajo ágilmente." },
                    { title: "Facilitar Reuniones", asA: "Como Scrum master", iWantTo: "tener herramientas para facilitar las reuniones de seguimiento", soThat: "para que sean más productivas y eficientes." },
                    { title: "Evaluar Rendimiento", asA: "Como Scrum master", iWantTo: "generar reportes de rendimiento del equipo", soThat: "para identificar áreas de mejora y celebrar los logros." }
                ],
                interfaces: [
                    { image: "img/Registrar.jpg", description: "Registrar Vendedores", author: "Adrian Guanoluisa" }
                ]
            },
            "tadeo-ballesteros": {
                name: "Tadeo Ballesteros",
                role: "Administrador",
                stories: [
                    { title: "Gestionar Inventario", asA: "Como administrador", iWantTo: "agregar nuevos productos al inventario", soThat: "para mantener la tienda actualizada." },
                    { title: "Gestionar Usuarios", asA: "Como administrador", iWantTo: "crear, editar y eliminar perfiles de usuario", soThat: "para controlar el acceso y los permisos del sistema." },
                    { title: "Visualizar Reportes", asA: "Como administrador", iWantTo: "ver reportes de ventas y actividad del sistema", soThat: "para tomar decisiones informadas sobre el negocio." },
                    { title: "Configurar el Sistema", asA: "Como administrador", iWantTo: "modificar la configuración general del sistema", soThat: "para adaptarlo a las necesidades cambiantes de la universidad." },
                    { title: "Comunicar Novedades", asA: "Como administrador", iWantTo: "enviar notificaciones masivas a los usuarios", soThat: "para informar sobre actualizaciones, promociones o eventos." }
                ],
                interfaces: [

                    

                    { image: "img/Login_de_Spotify.jpg", description: "Registro de  usuario ejemplo  del panel de administración", author: "Tadeo Ballesteros" }
                ]
            },
            "lely-alvarado": {
                name: "Lely Alvarado",
                role: "Visitante del Sitio",
                stories: [
                    { title: "Buscar Productos", asA: "Como visitante del sitio", iWantTo: "buscar productos por categoría", soThat: "para encontrar lo que necesito más rápido." },
                    { title: "Dejar una Reseña", asA: "Como cliente", iWantTo: "dejar una reseña en un producto", soThat: "para compartir mi opinión con otros usuarios." },
                    { title: "Añadir al Carrito", asA: "Como cliente", iWantTo: "agregar productos a mi carrito de compras", soThat: "para poder comprarlos en el futuro." },
                    { title: "Revisar Notificaciones", asA: "Como cliente", iWantTo: "recibir notificaciones sobre mis pedidos", soThat: "para estar al tanto del estado de mis compras." },
                    { title: "Recuperar Contraseña", asA: "Como usuario", iWantTo: "poder recuperar mi contraseña si la olvido", soThat: "para no perder el acceso a mi cuenta." }
                ],
                interfaces: [
                    { image: "img/Producto.png", description: "Diseño de la página de productos.", author: "Lely Alvarado" }
                ]
            },
            "david-corozo": {
                name: "David Corozo",
                role: "Cliente",
                stories: [
                    { title: "Ver Historial de Compras", asA: "Como cliente", iWantTo: "poder ver mi historial de compras", soThat: "para llevar un registro de mis gastos." },
                    { title: "Dejar una Reseña", asA: "Como cliente", iWantTo: "dejar una reseña en un producto", soThat: "para compartir mi opinión con otros usuarios." },
                    { title: "Añadir al Carrito", asA: "Como cliente", iWantTo: "agregar productos a mi carrito de compras", soThat: "para poder comprarlos en el futuro." },
                    { title: "Pagar Colegiatura", asA: "Como cliente", iWantTo: "realizar pagos de colegiatura en línea de forma segura", soThat: "para evitar colas y trámites engorrosos." },
                    { title: "Consultar Calificaciones", asA: "Como cliente", iWantTo: "acceder a mis calificaciones de forma rápida y sencilla", soThat: "para monitorear mi rendimiento académico." }
                ],
                interfaces: [
                    { image: "img/Cliente.png", description: "Interfaz del perfil de usuario.", author: "David Corozo" }
                ]
            },
           
        };

        const profilesView = document.getElementById('profiles-view');
        const userDetailView = document.getElementById('user-detail-view');
        const allInterfacesView = document.getElementById('all-interfaces-view');
        const userDetailsContent = document.getElementById('user-details-content');
        const allInterfacesContent = document.getElementById('all-interfaces-content');
        const profilesGrid = document.getElementById('profiles-grid');
        
        // Oculta todas las vistas excepto la de perfiles
        function hideAllViews() {
            profilesView.classList.add('hidden');
            userDetailView.classList.add('hidden');
            allInterfacesView.classList.add('hidden');
        }

        // Función para mostrar la vista de perfiles
        function showProfiles() {
            hideAllViews();
            profilesView.classList.remove('hidden');
        }

        // Función para mostrar el detalle de un usuario
        function showUserProfile(profileId) {
            hideAllViews();
            const profile = userProfiles[profileId];
            
            // Generar el HTML de las historias de usuario
            const userStoriesHTML = `
                <h2>Historias de usuario de ${profile.name}</h2>
                <div class="cards-grid">
                    ${profile.stories.map(story => `
                        <div class="card card-user-story">
                            <div class="card-header">${story.title}</div>
                            <div class="card-body">
                                <p><span class="keyword">${story.asA},</span></p>
                                <p><span class="keyword">Quiero</span> ${story.iWantTo},</p>
                                <p><span class="keyword">Para</span> ${story.soThat}</p>
                            </div>
                        </div>
                    `).join('')}
                </div>
            `;
            
            // Generar el HTML del diseño de interfaces
            const interfacesHTML = `
                <h2>Diseño de interfaces de ${profile.name}</h2>
                <div class="cards-grid">
                    ${profile.interfaces.map(interfaceItem => `
                        <div class="card card-design-interface">
                            <img src="${interfaceItem.image}" alt="Diseño de interfaz">
                            <div class="card-description">${interfaceItem.description}</div>
                            <div class="card-author">Autor: ${interfaceItem.author}</div>
                        </div>
                    `).join('')}
                </div>
            `;
            
            userDetailsContent.innerHTML = userStoriesHTML + interfacesHTML;
            userDetailView.classList.remove('hidden');
        }

        // Función para mostrar todos los diseños de interfaz
        function showAllInterfaces() {
            hideAllViews();
            
            let allInterfacesHTML = '<h2>Todos los Diseños de Interfaz</h2><div class="cards-grid">';
            
            for (const profileId in userProfiles) {
                const profile = userProfiles[profileId];
                profile.interfaces.forEach(interfaceItem => {
                    allInterfacesHTML += `
                        <div class="card card-design-interface">
                            <img src="${interfaceItem.image}" alt="Diseño de interfaz">
                            <div class="card-description">${interfaceItem.description}</div>
                            <div class="card-author">Autor: ${interfaceItem.author}</div>
                        </div>
                    `;
                });
            }
            allInterfacesHTML += '</div>';

            allInterfacesContent.innerHTML = allInterfacesHTML;
            allInterfacesView.classList.remove('hidden');
        }

        // Llenar dinámicamente la cuadrícula de perfiles
        function renderProfiles() {
            profilesGrid.innerHTML = Object.keys(userProfiles).map(key => `
                <div class="profile-card" onclick="showUserProfile('${key}')">
                    <h3>${userProfiles[key].name}</h3>
                    <p>${userProfiles[key].role}</p>
                </div>
            `).join('');
        }

        // Mostrar la vista de perfiles al cargar la página
        document.addEventListener('DOMContentLoaded', renderProfiles);
    </script>
</body>
</html>