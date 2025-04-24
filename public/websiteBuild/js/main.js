document.addEventListener('DOMContentLoaded', function() {
    const seriesCards = document.querySelectorAll('.card-link-wrapper');
    const tooltip = document.getElementById('seriesTooltip');
    const tooltipTitle = document.getElementById('tooltipTitle');
    const tooltipDescription = document.getElementById('tooltipDescription');

    seriesCards.forEach(card => {
        card.addEventListener('mouseover', function(event) {
            const title = this.dataset.title;
            const description = this.dataset.description;

            tooltipTitle.textContent = title;
            tooltipDescription.textContent = description;

            tooltip.style.display = 'block';
            tooltip.style.left = (event.pageX + 10) + 'px'; // Ajusta la posición horizontal
            tooltip.style.top = (event.pageY + 10) + 'px';  // Ajusta la posición vertical
        });

        card.addEventListener('mouseout', function() {
            tooltip.style.display = 'none';
        });
    });
});