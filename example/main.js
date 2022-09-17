async function getGames() {
    let res = await fetch('https://steveking.ru/soc7/games');
// https://jsonplaceholder.typicode.com/posts
    let games = await res.json();

//    console.log(games);
    games.forEach((game) => {
        document.querySelector('.post-list').innerHTML += `

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">${game._WhiteName} - ${game._BlackName} ${game._Result}</h5>
                <p class="card-text">${game._Notation}</p>
            </div>
        </div>
        `
    })
}

getGames();