function showLegend(inputId, legendId) {
    const input = document.getElementById(inputId);
    const legend = document.getElementById(legendId);

    legend.classList.add('active');
    input.placeholder = '';
}