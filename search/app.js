const charactersList = document.getElementById('charactersList');
const searchBar = document.getElementById('searchBar');
let hpCharacters = [];

searchBar.addEventListener('keyup', (e) => {
    const searchString = e.target.value.toLowerCase();

    const filteredCharacters = hpCharacters.filter((character) => {
        return (
            character.name.toLowerCase().includes(searchString)
        );
    });
    displayCharacters(filteredCharacters);
});

const loadCharacters = async() => {
    try {
        // const res = await fetch('https://hp-api.herokuapp.com/api/characters');
        const res = await fetch('search.json');
        hpCharacters = await res.json();
        displayCharacters(hpCharacters);
    } catch (err) {
        console.error(err);
    }
};

const displayCharacters = (characters) => {
    const htmlString = characters
        .map((character) => {
            return `
            <a href="${character.linkTo}"><li class="character">
                <h2>${character.name}</h2>
                <p>${character.house}</p>
                <img src="${character.image}"></img>
            </li></ a>
        `;
        })
        .join('');
    charactersList.innerHTML = htmlString;
};

loadCharacters();