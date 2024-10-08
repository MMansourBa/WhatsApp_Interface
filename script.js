document.getElementById('send-btn').addEventListener('click', function () {
    let messageInput = document.querySelector('.chat-input input');
    let messageText = messageInput.value;

    if (messageText !== "") {
        let messageDiv = document.createElement('div');
        messageDiv.classList.add('message', 'sent');
        messageDiv.textContent = messageText;

        document.querySelector('.chat-messages').appendChild(messageDiv);
        messageInput.value = "";
        scrollToBottom();
    }
});

function scrollToBottom() {
    let chatMessages = document.querySelector('.chat-messages');
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

// const messages = document.querySelectorAll('.message');

// messages.forEach(message => {
//     message.addEventListener('click', function() {
//         const deleteIcon = message.querySelector('.delete-icon');
//         deleteIcon.style.display = deleteIcon.style.display === 'none' ? 'inline' : 'none';
//     });

//     const deleteIcon = message.querySelector('.delete-icon');
//     deleteIcon.addEventListener('click', function(event) {
        
//         event.stopPropagation();

//         // Affiche la boîte de dialogue de confirmation
//         const isConfirmed = confirm("Êtes-vous sûr de supprimer le message ?");

//         // Si l'utilisateur clique sur "OK", supprime le message
//         if (isConfirmed) {
//             message.remove();
//         }
//     });
// });

//Chargement des discussions
document.querySelectorAll('.contact-item').forEach(contact => {
    contact.addEventListener('click', () => {
        // Récupération des informations du contact
        const name = contact.getAttribute('data-name');
        const profilePic = contact.getAttribute('data-image');
        const initialMessage = contact.getAttribute('data-message');

        if (!name || !profilePic || !initialMessage) {
            console.error('Attribut manquant sur l’élément de contact.', { name, profilePic, initialMessage });
            return;
        }

        // Sélection des éléments de la fenêtre de discussion
        const chatWindow = document.querySelector('.chat-messages');
        const chatHeader = document.querySelector('.chat-header h3');
        const chatProfilePic = document.querySelector('.chat-profile-pic');

        if (!chatWindow || !chatHeader || !chatProfilePic) {
            console.error('Éléments de la fenêtre de discussion non trouvés.');
            return;
        }

        // Mise à jour de l'en-tête de discussion
        chatHeader.textContent = name;
        chatProfilePic.src = profilePic;

        // Mise à jour des messages
        chatWindow.innerHTML = ''; // Efface les messages actuels
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message', 'received');
        messageDiv.innerHTML = `<span>${initialMessage}</span>`;
        chatWindow.appendChild(messageDiv);
    });
});