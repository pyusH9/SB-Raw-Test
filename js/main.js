document.addEventListener('DOMContentLoaded', () => {
  const artistGrid = document.getElementById('artist-grid');

  // Example static top artists
  const topArtists = [
    {name:"Suman Sharma", shortBio:"Poet, writer", profilePic:"https://via.placeholder.com/150"},
    {name:"Mina Rai", shortBio:"Storyteller", profilePic:"https://via.placeholder.com/150"},
    {name:"Ramesh KC", shortBio:"Lyricist & Poet", profilePic:"https://via.placeholder.com/150"}
  ];

  topArtists.forEach(artist => {
    const card = document.createElement('div');
    card.className = "artist-card";
    card.innerHTML = `
      <img src="${artist.profilePic}" alt="${artist.name}">
      <h3>${artist.name}</h3>
      <p>${artist.shortBio}</p>
    `;
    artistGrid.appendChild(card);
  });
});
