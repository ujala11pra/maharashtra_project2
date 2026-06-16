function showDetails(place){
let details = document.getElementById("details");

if(place === "lonavala"){
details.innerHTML = `
<h3>Lonavala</h3>
<p>🏨 Fariyas Resort</p>
<p>🍽️ Rama Krishna Restaurant</p>
`;
}
else if(place === "mahabaleshwar"){
details.innerHTML = `
<h3>Mahabaleshwar</h3>
<p>🏨 Evershine Resort</p>
<p>🍽️ Mapro Garden</p>
`;
}
else if(place === "alibaug"){
details.innerHTML = `
<h3>Alibaug</h3>
<p>🏨 Radisson Blu</p>
<p>🍽️ Sanman Restaurant</p>
`;
}
}