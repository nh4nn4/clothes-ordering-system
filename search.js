document.addEventListener('DOMContentLoaded', function() {
    // ===== CATALOGUE SEARCH =====
    if (document.querySelector('.panel-search')) {
        const catalogueSearchInput = document.querySelector('.panel-search input[name="search-product"]');
        const catalogueSearchButton = document.querySelector('.panel-search button');

        const filterProducts = (query) => {
            $('.isotope-grid').isotope({
                filter: function() {
                    const $this = $(this);
                    return $this.attr('data-name').toLowerCase().includes(query) ||
                           $this.attr('data-category').toLowerCase().includes(query) ||
                           $this.attr('data-tags').toLowerCase().includes(query);
                }
            });
        };

        const executeCatalogueSearch = () => {
            filterProducts(catalogueSearchInput.value.trim().toLowerCase());
        };

        catalogueSearchButton.addEventListener('click', executeCatalogueSearch);
        catalogueSearchInput.addEventListener('keyup', (e) => e.key === 'Enter' && executeCatalogueSearch());
    }
});