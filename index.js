function move(name){
    localStorage.setItem("name", name);
    window.location.href = 'booking.html';
}

function move_movie(movie_name){
    localStorage.setItem("movie_name", movie_name);
    window.location.href = 'booking.html';
}