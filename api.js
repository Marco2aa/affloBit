const base_url = 'https://api.coingecko.com/api/v3';
const coins_list = '/coins/list';
const trend = '/search/trending';
const btn = document.getElementById('coins');
const trendbtn = document.getElementById('trendbtn');
const container = document.getElementById('container');




function getCoins(base_url,coins_list){
    fetch(base_url + coins_list)
    .then((res) => res.json())
    .then((json) => {
      console.log(json);
    }
)}

function trending_coins(base_url,trending_coins){
    fetch(base_url + trending_coins)
    .then((res) => res.json())
    .then((json) => {
      console.log(json);
        for(let i=0;i<15;i++){
            image_path = json.coins[i].item.small;
            console.log(image_path);
            image = document.createElement('img');
            image.src = image_path;
            container.appendChild(image);

        }
    })

}


btn.addEventListener('click',() => {
    getCoins(base_url,coins_list);
})

trendbtn.addEventListener('click',() => {
    trending_coins(base_url,trend);
})
