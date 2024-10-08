<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Barre latérale pour les discussions -->
        <div class="sidebar">
            <div class="profile-bar">
                <h2>Discussions</h2>
            </div>
           
            <div class="search-bar">
                <input type="text" placeholder="Rechercher ou démarrer une nouvelle discussion">
            </div>
            <!-- MESSAGES -->
            <ul class="contact-list">
                <?php
                // Tableau de contacts
                $contacts = [
                    ["name" => "Manou", "image" => "Papa.jpeg", "message" => "Salut, comment ça va ?", "time" => "09:40"],
                    ["name" => "Papa", "image" => "Manou.jpeg", "message" => "Demain Insh'ALLAH", "time" => "08:20"]
                ];

                
                foreach ($contacts as $contact) {
                    echo '<li class="contact-item" data-name="' . htmlspecialchars($contact['name']) . '" data-image="' . htmlspecialchars($contact['image']) . '" data-message="' . htmlspecialchars($contact['message']) . '">';
                    echo '<img src="' . htmlspecialchars($contact['image']) . '" alt="user" class="profile-pic">';
                    echo '<div class="contact-info">';
                    echo '<h4>' . htmlspecialchars($contact['name']) . '</h4>';
                    echo '<p>' . htmlspecialchars($contact['message']) . '</p>';
                    echo '</div>';
                    echo '<div class="time-info">';
                    echo '<span>' . htmlspecialchars($contact['time']) . '</span>';
                    echo '</div>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>

        <!-- Fenêtre de discussion -->
        <div class="chat-window">
            <div class="chat-header">
                <div class="header-content">
                    <img src="Papa.jpeg" alt="user" class="chat-profile-pic">
                    <h3><?php echo htmlspecialchars($contacts[0]['name']); ?></h3>
                </div>
                <div class="chat-options">
                    <i class="fas fa-phone call-icon"></i>
                    <i class="fas fa-video video-icon"></i>
                    <i class="fas fa-ellipsis-v options-icon"></i>
                </div>
            </div>
            <div class="chat-messages">
                <!-- Messages -->
                <div class="message received">
                    <span>Salut !</span>
                    <i class="fas fa-trash delete-icon" style="display:none;"></i>
                </div>
            </div>
            <div class="chat-input">
                <i class="fas fa-smile smile-icon"></i>
                <input type="text" placeholder="Tapez votre message...">
                <i class="fas fa-paperclip attach-icon"></i>
                <button id="send-btn"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>