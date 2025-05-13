document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.favorite-btn');
    const favorites = JSON.parse(localStorage.getItem('favoriteRecipes')) || [];

    buttons.forEach(button => {
        const recipeItem = button.closest('.recipe-item');
        const recipeId = recipeItem.dataset.id;

        
        if (favorites.includes(recipeId)) {
            button.classList.add('favorited');
            button.textContent = 'В избранном';
        }

        
        button.addEventListener('click', () => {
            let favs = JSON.parse(localStorage.getItem('favoriteRecipes')) || [];

            if (favs.includes(recipeId)) {
                
                favs = favs.filter(id => id !== recipeId);
                button.classList.remove('favorited');
                button.textContent = 'Добавить в избранное';
            } else {
                
                favs.push(recipeId);
                button.classList.add('favorited');
                button.textContent = 'В избранном';
            }

            localStorage.setItem('favoriteRecipes', JSON.stringify(favs));
        });
    });
});
