// Sélectionner les boutons de navigation
// const boutonMembres = document.querySelector('.nav-link span:contains("Membres")');
const membresLink = Array.from(document.querySelectorAll('.nav-link')).find(link => link.textContent.trim() === 'Membres');
const boutonCarousel = Array.from(document.querySelectorAll('.nav-link')).find(link => link.textContent.trim() === 'Carousel');
const boutonaPropos = Array.from(document.querySelectorAll('.nav-link')).find(link => link.textContent.trim() === 'A Propos');
const boutonActions = Array.from(document.querySelectorAll('.nav-link')).find(link => link.textContent.trim() === 'Actions');
const boutonArticles = Array.from(document.querySelectorAll('.nav-link')).find(link => link.textContent.trim() === 'Articles');
const boutonDons = Array.from(document.querySelectorAll('.nav-link')).find(link => link.textContent.trim() === 'Mes Dons');
const boutonCotisations = Array.from(document.querySelectorAll('.nav-link')).find(link => link.textContent.trim() === 'Cotisations');

// Sélectionner les sections à masquer/afficher
const sectionAdherents = document.querySelector('.adh');
const sectionCarousel = document.querySelector('.car');
const sectionAPropos = document.querySelector('.apr');
const sectionActions = document.querySelector('.act');
const sectionArticles = document.querySelector('.art');
const sectionDons = document.querySelector('.don');
const sectionCotisations = document.querySelector('.cot');

// Ajouter un événement "click" sur les boutons de navigation
membresLink.addEventListener('click', function() {
    // Afficher les sections
    sectionAdherents.style.display = 'block';
    // Masquer les sections
    sectionCarousel.style.display = 'none';
    sectionAPropos.style.display = 'none';
    sectionActions.style.display = 'none';
    sectionArticles.style.display = 'none';
    sectionDons.style.display = 'none';
    sectionCotisations.style.display = 'none';   
});

boutonCarousel.addEventListener('click', function() {
    // Masquer les sections
    sectionAdherents.style.display = 'none';
    sectionAPropos.style.display = 'none';
    sectionActions.style.display = 'none';
    sectionArticles.style.display = 'none';
    sectionDons.style.display = 'none';
    sectionCotisations.style.display = 'none';
    // Afficher les sections
    sectionCarousel.style.display = 'block';
});

boutonaPropos.addEventListener('click', function() {
    // Masquer les sections
    sectionAdherents.style.display = 'none';
    sectionCarousel.style.display = 'none';
    sectionActions.style.display = 'none';
    sectionArticles.style.display = 'none';
    sectionDons.style.display = 'none';
    sectionCotisations.style.display = 'none';
    // Afficher les sections
    sectionAPropos.style.display = 'block';
});

boutonArticles.addEventListener('click', function() {
    // Masquer les sections
    sectionAdherents.style.display = 'none';
    sectionDons.style.display = 'none';
    sectionCarousel.style.display = 'none';
    sectionAPropos.style.display = 'none';
    sectionActions.style.display = 'none';
    sectionCotisations.style.display = 'none';
    // Afficher les sections
    sectionArticles.style.display = 'block';
    });

boutonActions.addEventListener('click', function() {
    // Masquer les sections
    sectionAdherents.style.display = 'none';
    sectionCarousel.style.display = 'none';
    sectionAPropos.style.display = 'none';
    sectionArticles.style.display = 'none';
    sectionDons.style.display = 'none';
    sectionCotisations.style.display = 'none';
    // Afficher les sections
    sectionActions.style.display = 'block';
});

boutonDons.addEventListener('click', function() {
    // Masquer les sections
    sectionAdherents.style.display = 'none';
    sectionCarousel.style.display = 'none';
    sectionActions.style.display = 'none';
    sectionArticles.style.display = 'none';
    sectionAPropos.style.display = 'none';
    sectionCotisations.style.display = 'none';
    // Afficher les sections
    sectionDons.style.display = 'block';
});

boutonCotisations.addEventListener('click', function() {
    // Masquer les sections
    sectionAdherents.style.display = 'none';
    sectionCarousel.style.display = 'none';
    sectionAPropos.style.display = 'none';
    sectionActions.style.display = 'none';
    sectionArticles.style.display = 'none';
    sectionDons.style.display = 'none';
    // Afficher les sections
    sectionCotisations.style.display = 'block';  
});